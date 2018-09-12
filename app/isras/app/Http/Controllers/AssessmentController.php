<?php
namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Assessment;
use App\AssessmentQuestion;
use App\AssessmentResult;
use App\LookupAssessmentCategory;
use App\LookupAssessmentKeyArea;
use App\LookupAssessmentTitle;
use App\LookupAssessmentType;
use App\Admin;
use App\AdminAssessmentQuestion;
use App\User;
use App\Charts\ResultChart;
use DB;
use PDF;
use \PDFShift\PDFShift;
use Lava;
use Khill\Lavacharts\Lavacharts;


class AssessmentController extends Controller
{
    public function __construct()
    {
        $this->AssessmentModel = new Assessment;
    }

    public function loadAssessmentQuestion($id, Request $request)
    {
        $choice = 0; //Previous
        $arr_rdo_next = array();
        $arr_rdo_previous = array();
        $isValid = true;
        $isError = 0;
        if ($request["curr_id"] !== null)
           $choice = 1; //Next
        
        if ($choice == 1)
        {
            if (!$this->AssessmentModel->setArr_Rdo($id-1, $request))
            {
                $id -= 1; //Minus one for false
                $arr_rdo_previous = $this->AssessmentModel->loadFromCache($id);
                $choice = 0;
                $isValid = false;
            }
            else
            {
                $arr_rdo_next = $this->AssessmentModel->loadFromCache($id);
            }
        }
        else
        {
            $arr_rdo_previous = $this->AssessmentModel->loadFromCache($id);
            if (!empty($arr_rdo_previous))
                $isError = $this->AssessmentModel->getArrayStatus($arr_rdo_previous);
        }
        //print_r($this->AssessmentModel->getArr_Rdo_1());
        //$this->AssessmentModel->setArr_Rdo_1($request);
        // if ($choice == 1)
        // {
        //     $num = $request["num"];
        //     for ($x = 1; $x<$num; $x++)
        //     {
        //         //echo Input::get("radio_$x");
        //         $arr_rdo_next["$x"] = $request["radio_$x"];
        //     }
        //     switch ($id-1)
        //     {
        //         case 1 :
        //             Session::forget('arr_rdo_1');
        //             Session::put('arr_rdo_1', $arr_rdo_next);
        //             $arr_rdo_next = Session::get('arr_rdo_2');
        //             break;
        //         case 2 :
        //             Session::forget('arr_rdo_2');
        //             Session::put('arr_rdo_2', $arr_rdo_next);
        //             $arr_rdo_next = Session::get('arr_rdo_3');
        //             break;
        //         case 3 :
        //             Session::forget('arr_rdo_3');
        //             Session::put('arr_rdo_3', $arr_rdo_next);
        //             $arr_rdo_next = Session::get('arr_rdo_4');
        //             break;
        //         case 4 :
        //             Session::forget('arr_rdo_4');
        //             Session::put('arr_rdo_4', $arr_rdo_next);
        //             break;
        //     }
        // }
        // else
        // {
        //     switch ($id)
        //     {
        //         case 1 :
        //             $arr_rdo_previous = Session::get('arr_rdo_1');
        //             break;
        //         case 2 :
        //             $arr_rdo_previous = Session::get('arr_rdo_2');
        //             break;
        //         case 3 :
        //             $arr_rdo_previous = Session::get('arr_rdo_3');
        //             break;
        //         case 4 :
        //             $arr_rdo_previous = Session::get('arr_rdo_4');
        //             break;
        //     }
        // }

        //Area questions
        $arr_assessment_questions = AssessmentQuestion::where('category', $id)->get();
        $arr_key_area = array();
        $arr_questions = array();
        $arr_questions_count = array();
        $arr_question_types = array();
        $title_no = 0;
        $arr_title = array();
        $no = 0;
        $i = -1;
        $j = 0;
        $k = 0;
        $y = 1;

        foreach ($arr_assessment_questions as $x)
        {
            if ($x->type == 1)
            {
                $arr_question_types[$y++] = "background-color: green; text-align:center;";
            }
            else
            {
                $arr_question_types[$y++] = "background-color: blue; text-align:center;";
            }
            //This is to avoid key_area duplication
            if ($x->title != 0){
                if (!in_array(LookupAssessmentKeyArea::find($x->key_area)->name, $arr_key_area))
                {
                    array_push($arr_key_area, LookupAssessmentKeyArea::find($x->key_area)->name); 
                    $i++;
                    $j = 0;
                    $no = 0;
                }

                //This is use to map the title according to key_area
                if ($x->title != $title_no)
                {
                    $arr_title[$i][$j] = LookupAssessmentTitle::find($x->title)->name;
                    $title_no = $x->title;
                    $j++;

                    if ($k != 0)
                        array_push($arr_questions_count, $k);
                    $k = 0;
                    
                }

                $arr_questions[$i][$no] = $x->statement;
                $no++;
                $k++;
            }
        }
        //This is for last count part
        array_push($arr_questions_count, $k);

        $category = LookupAssessmentCategory::find($id)->name;

        $data = [
            'userType' => 2,
            'arr_assessment_questions' => $arr_assessment_questions,
            'arr_question_types' => $arr_question_types,
            'arr_key_area' => $arr_key_area,
            'arr_title' => $arr_title,
            'category' => $category,
            'id' => $id,
            'isError' => $isError,
            'arr_questions' => $arr_questions,
            'arr_questions_count' => $arr_questions_count,
            'arr_rdo_next' => $arr_rdo_next,
            'arr_rdo_previous' => $arr_rdo_previous,
            'choice' => $choice
        ];

        if (!$isValid)
            return redirect('/user/assessment/page_'.$id);
        else
            return view('pages.assessmentpage')->with($data);
    }

    public function verifyAssessment(Request $request)
    {
        $arr_rdo_next = array();
        $num = $request["num"];

        if ($num != null)
        {
            for ($x = 1; $x<$num; $x++)
            {
                $arr_rdo_next["$x"] = $request["radio_$x"];
            }

            Session::forget('arr_rdo_4');
            Session::put('arr_rdo_4', $arr_rdo_next);
        }
        
        //Variable declaration
        //$Assessment = new Assessment();
        $this->AssessmentModel->calculateAssessment();

        // $score_isras = 0;
        // $score_vital = 0;
        // $score_recommended = 0;
        // $score_community = 0;
        // $score_workplace = 0;
        // $score_environmental = 0;
        // $score_marketplace = 0;

        // $total_community = 0;
        // $total_workplace = 0;
        // $total_environmental = 0;
        // $total_marketplace = 0;

        // $level_isras = "";
        // $level_vital = "";
        // $level_recommended = "";

        // $total_category = LookupAssessmentCategory::all()->count();
        // $question_id = 1;
        // for ($i=1; $i<=$total_category; $i++)
        // {
        //     $arr_rdo = Session::get("arr_rdo_$i");
        //     echo "<br>";
        //     if (!empty($arr_rdo))
        //     {
        //         foreach ($arr_rdo as $answer)
        //         {
        //             $question_type = AssessmentQuestion::find($question_id)->type;
        //             $question_category = AssessmentQuestion::find($question_id)->category;

        //             //This is to calculate total score for each category
        //             if ($question_category == 1)
        //             {
        //                 if ($question_type == 1)
        //                     $total_community += 3;
        //                 else
        //                     $total_community += 1;
        //             }
        //             else if ($question_category == 2)
        //             {
        //                 if ($question_type == 1)
        //                     $total_workplace += 3;
        //                 else
        //                     $total_workplace += 1;
        //             }
        //             else if ($question_category == 3)
        //             {
        //                 if ($question_type == 1)
        //                     $total_environmental += 3;
        //                 else
        //                     $total_environmental += 1; 
        //             }
        //             else
        //             {
        //                 if ($question_type == 1)
        //                     $total_marketplace += 3;
        //                 else
        //                     $total_marketplace += 1;
        //             }

        //             if ($answer != null)
        //             {
        //                 if ($question_type == 1) //Vital
        //                 {

        //                     if ($answer == 1) 
        //                     {
        //                         $score_vital += 3;

        //                         if ($question_category == 1)
        //                             $score_community += 3;
        //                         else if ($question_category == 2)
        //                             $score_workplace += 3;
        //                         else if ($question_category == 3)
        //                             $score_environmental += 3;
        //                         else
        //                             $score_marketplace += 3;
        //                     }
        //                 }
        //                 else //Recommended
        //                 {

        //                     if ($answer == 1)
        //                     {
        //                         $score_recommended += 1;

        //                         if ($question_category == 1)
        //                             $score_community += 1;
        //                         else if ($question_category == 2)
        //                             $score_workplace += 1;
        //                         else if ($question_category == 3)
        //                             $score_environmental += 1;
        //                         else
        //                             $score_marketplace += 1;
        //                     }
        //                 }

        //             }

        //             $question_id++;
        //         }
        //     }
        // }

        //$score_isras = $score_vital + $score_recommended;
        $data = [
            'userType' => 2,
            //'score_isras'  => $this->AssessmentModel->getIsrasScore(),
            // 'score_vital'   => $score_vital,
            // 'score_recommended' => $score_recommended,
            // 'score_community' => $score_community,
            // 'score_workplace' => $score_workplace,
            // 'score_environmental' => $score_environmental,
            // 'score_marketplace' => $score_marketplace,
            // 'total_community' => $total_community,
            // 'total_workplace' => $total_workplace,
            // 'total_environmental' => $total_environmental,
            // 'total_marketplace' => $total_marketplace,
            'Assessment' => $this->AssessmentModel,
        ];

        return view('pages.assessmentresult')->with($data);
    }

    private function saveAssessment($contentData)
    {
        $Assessment = new Assessment();
        $Assessment->user_id = $contentData["user_id"];
        $Assessment->assessment_question_id = $contentData["assessment_question_id"];
        $Assessment->assessment_result_id = $contentData["assessment_result_id"];
        $Assessment->answer = $contentData["answer"];
        $Assessment->save();
    }

    public function saveAssessmentResult(Request $request)
    {
        $statement = DB::select("SHOW TABLE STATUS LIKE 'assessment_results'");
        $nextId = $statement[0]->Auto_increment;

        $entity = Auth::user();
        $userId = User::all()->where('entity_id', Auth::id())->first()->id;

        $total_category = LookupAssessmentCategory::all()->count();
        $question_id = 1;
        for ($i=1; $i<=$total_category; $i++)
        {
            $arr_rdo = Session::get("arr_rdo_$i");
            // echo "<br>";
            if (!empty($arr_rdo))
            {
                foreach ($arr_rdo as $answer)
                {
                    if ($answer != null)
                    {
                        //Save the answer
                        $this->saveAssessment([
                            'user_id' => $userId,
                            'assessment_question_id' => $question_id,
                            'assessment_result_id' => $nextId,
                            'answer' => $answer
                        ]);
                    }
                    else
                    {
                        $this->saveAssessment([
                            'user_id' => $userId,
                            'assessment_question_id' => $question_id,
                            'assessment_result_id' => $nextId,
                            'answer' => 0
                        ]);
                    }

                    $question_id++;
                }
            }
        }

        for ($i=1; $i<=7; $i++)
        {
            $AssessmentResult = new AssessmentResult();
            $AssessmentResult->result = $request['score_'.$i];
            $AssessmentResult->save();
        }

        $this->AssessmentModel->clearAllCache();
        // Session::forget('arr_rdo_1');
        // Session::forget('arr_rdo_2');
        // Session::forget('arr_rdo_3');
        // Session::forget('arr_rdo_4');
                       
        return $this->loadAssessment();
    }

    public function loadAssessment()
    {
        $AssessmentResult = AssessmentResult::orderBy('created_at', 'DESC')->get();
        $AssessmentCompany = array();

        foreach ($AssessmentResult as $a)
        {
            $Assessment = DB::table('assessments')->where('assessment_result_id', $a->id)->first();
            if ($Assessment != null)
            {
                $company = Company::find($Assessment->user_id);
                array_push($AssessmentCompany, $company->name);
            }
            else
                array_push($AssessmentCompany, "Company not found");
        }
        $data = [
            'userType' => 2,
            'AssessmentResult' =>  $AssessmentResult,
            'AssessmentCompany' => $AssessmentCompany
        ];

        return view ('pages.assessment')->with($data);
    }

    public function calculateAssessmentResult()
    {
    }

    public function printAssessmentResult()
    {
    }

    public function loadAssessmentResult($id) {
        return view('pages.user.assessment.assessment-result')
            ->with([
                'pdfData' => $this->downloadPDF($id)
            ]);
    }

    public function downloadPDF($id) {
        $Assessment = Assessment::where('assessment_result_id', $id)->get();
        $Arr_category = LookupAssessmentCategory::all();

        //return $Arr_category[0]->getKeyAreas($Arr_category[0]->id);
        $arr_key_area = array();

        for ($i=0; $i<sizeof($Arr_category); $i++)
        {
            array_push($arr_key_area, $Arr_category[$i]->getKeyAreas($Arr_category[$i]->id));
        }

        $data = [
            'Assessment' => $Assessment,
            'Arr_category' => $Arr_category,
            'arr_key_area' => $arr_key_area,
        ];

        $dataTable = Lava::DataTable();
        $dataTable->addStringColumn('Domain')
            ->addNumberColumn('Score');
        $dataTable->addRow([ 'Community', rand(800,1000) ])
            ->addRow([ 'Workplace', rand(800,1000) ])
            ->addRow([ 'Environmental', rand(800,1000) ])
            ->addRow([ 'Marketplace', rand(800,1000) ]);

        Lava::BarChart('BarChart', $dataTable);

        // $view = \View::make('pages.report', $data);
        // $htmlContent = $view->render();

        // PDFShift::setApiKey('c961276135aa48a7936d50e72f8294f5');
        // PDFShift::convertTo($htmlContent, null, 'pdf/result.pdf');
        
        // $pdf = PDF::loadHtml($htmlContent);
        // return $pdf->stream('download.pdf');
        return view('pages.report')->with($data);
    }

    public function adminAssessmentIndex() {
        $allQuestion = AssessmentQuestion::all()
            ->where('active', true);

        $questionList = null;
        foreach($allQuestion as $question) {
            $category = LookupAssessmentCategory::find($question['category']);
            $keyArea = LookupAssessmentKeyArea::find($question['key_area']);
            $title = LookupAssessmentTitle::find($question['title']);

            $questionList[] = [
                'id' => $question['id'],
                'question_category' => $category['name'],
                'question_key_area' => $keyArea['name'],
                'question_title' => $title['name'],
                'question_statement' => $question['statement'],
                'question_status' => $question['active']
            ];
        }
        
        return view('pages.admin.content.assessment.view')
            ->with([
                'userType' => 1,
                'assessmentQuestionData' => $questionList
            ]);
    }

    public function loadAddContentForm() {
        $questionTypeLookup = LookupAssessmentType::all();
        $questionCategoryLookup = LookupAssessmentCategory::all();
        $questionKeyAreaLookup = LookupAssessmentKeyArea::all();
        $questionTitleLookup = LookupAssessmentTitle::all();

        $questionType = null;
        $questionCategory = null;
        $questionKeyArea = null;
        $questionTitle = null;

        foreach($questionTypeLookup as $type)
            $questionType[$type['id']] = $type['name'];
        foreach($questionCategoryLookup as $category)
            $questionCategory[$category['id']] = $category['name'];
        foreach($questionKeyAreaLookup as $keyArea)
            $questionKeyArea[$keyArea['id']] = $keyArea['name'];
        foreach($questionTitleLookup as $title)
            $questionTitle[$title['id']] = $title['name'];

        return view('pages.admin.content.assessment.add')
            ->with([
                'userType' => 1,
                'formData' => [
                    'question_type' => $questionType,
                    'question_category' => $questionCategory,
                    'question_key_area' => $questionKeyArea,
                    'question_title' => $questionTitle
                ]
            ]);
    }

    public function verifyNewContent(Request $request) {
        $entity = Auth::user();
        $admin = Admin::all()->where('entity_id', $entity->id)[0];
        
        $adminId = $admin->id;
        $type = $request['assessment_question_type'];
        $category = $request['assessment_question_category'];
        $keyArea = $request['assessment_question_key_area'];
        $title = $request['assessment_question_title'];
        $statement = $request['assessment_question_statement'];

        $this->saveNewContent([
            'admin_id' => $adminId,
            'question_type' => $type,
            'question_category' => $category,
            'question_key_area' => $keyArea,
            'question_title' => $title,
            'question_statement' => $statement,
        ]);

        return redirect('admin/assessment');
    }
    
    private function saveNewContent($contentData) {
        $newAssessmentQuestion = new AssessmentQuestion();
        $newAssessmentQuestion->type = $contentData['question_type'];
        $newAssessmentQuestion->category = $contentData['question_category'];
        $newAssessmentQuestion->key_area = $contentData['question_key_area'];
        $newAssessmentQuestion->title = $contentData['question_title'];
        $newAssessmentQuestion->statement = $contentData['question_statement'];
        $newAssessmentQuestion->active = true;
        $newAssessmentQuestion->save();

        $newAdminAssessmentQuestion = new AdminAssessmentQuestion();
        $newAdminAssessmentQuestion->admin_id = $contentData['admin_id'];
        $newAdminAssessmentQuestion->assessment_question_id = $newAssessmentQuestion->id;
        $newAdminAssessmentQuestion->save();
    }

    public function loadContentUpdateForm($questionId) {
        $questionTypeLookup = LookupAssessmentType::all();
        $questionCategoryLookup = LookupAssessmentCategory::all();
        $questionKeyAreaLookup = LookupAssessmentKeyArea::all();
        $questionTitleLookup = LookupAssessmentTitle::all();
        $assessmentQuestion = AssessmentQuestion::find($questionId);

        // get all lookup
        $questionType = null;
        $questionCategory = null;
        $questionKeyArea = null;
        $questionTitle = null;
        foreach($questionTypeLookup as $type)
            $questionType[$type['id']] = $type['name'];
        foreach($questionCategoryLookup as $category)
            $questionCategory[$category['id']] = $category['name'];
        foreach($questionKeyAreaLookup as $keyArea)
            $questionKeyArea[$keyArea['id']] = $keyArea['name'];
        foreach($questionTitleLookup as $title)
            $questionTitle[$title['id']] = $title['name'];

        return view('pages.admin.content.assessment.update')
            ->with([
                'userType' => 1,
                'questionData' => [
                    'question_id' => $assessmentQuestion['id'],
                    'question_statement' => $assessmentQuestion['statement'],
                    'question_type' => $questionType,
                    'question_category' => $questionCategory,
                    'question_key_area' => $questionKeyArea,
                    'question_title' => $questionTitle,
                    'created_at' => $assessmentQuestion['created_at'],
                    'updated_at' => $assessmentQuestion['updated_at']
                ],
                'formData' => [
                    'question_type' => $questionType,
                    'question_category' => $questionCategory,
                    'question_key_area' => $questionKeyArea,
                    'question_title' => $questionTitle,
                    'selected_question_type' => $assessmentQuestion['type'],
                    'selected_question_category' => $assessmentQuestion['category'],
                    'selected_question_key_area' => $assessmentQuestion['key_area'],
                    'selected_question_title' => $assessmentQuestion['title']
                ]
            ]);
    }

    public function verifyUpdatedContent(Request $request) {
        $entity = Auth::user();
        $admin = Admin::all()->where('entity_id', $entity->id)[0];
        
        $adminId = $admin->id;
        $questionId = $request['assessment_question_id'];
        $type = $request['assessment_question_type'];
        $category = $request['assessment_question_category'];
        $keyArea = $request['assessment_question_key_area'];
        $title = $request['assessment_question_title'];
        $statement = $request['assessment_question_statement'];

        $this->saveUpdatedContent([
            'admin_id' => $adminId,
            'question_id' => $questionId,
            'question_type' => $type,
            'question_category' => $category,
            'question_key_area' => $keyArea,
            'question_title' => $title,
            'question_statement' => $statement
        ]);

        return redirect('admin/assessment');
    }

    private function saveUpdatedContent($contentData) {
        $newAssessmentQuestion = AssessmentQuestion::find($contentData['question_id']);
        $newAssessmentQuestion->type = $contentData['question_type'];
        $newAssessmentQuestion->category = $contentData['question_category'];
        $newAssessmentQuestion->key_area = $contentData['question_key_area'];
        $newAssessmentQuestion->title = $contentData['question_title'];
        $newAssessmentQuestion->statement = $contentData['question_statement'];
        $newAssessmentQuestion->save();

        $newAdminAssessmentQuestion = new AdminAssessmentQuestion();
        $newAdminAssessmentQuestion->admin_id = $contentData['admin_id'];
        $newAdminAssessmentQuestion->assessment_question_id = $newAssessmentQuestion->id;
        $newAdminAssessmentQuestion->save();
    }

    public function deleteContent(Request $request) {
        $entity = Auth::user();
        $admin = Admin::all()->where('entity_id', $entity->id)[0];
        
        $adminId = $admin->id;
        $questionId = $request['question_id'];
            
        $question = AssessmentQuestion::find($questionId);
        $question->active = false;
        $question->save();

        return redirect('admin/assessment/');
    }
}
