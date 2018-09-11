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
        //Check if user authenticated or not

        //Check which assessment question and cache to load
        $this->AssessmentModel->LoadAssessmentQuestion($id);
        if (isset($request))
        {
            $this->AssessmentModel->setToCache($request);
        }
        $this->AssessmentModel->loadFromCache($id);

        $data = [
            'userType' => 2,
            "AssessmentModel" => $this->AssessmentModel,
        ];

        return view('pages.assessmentpage')->with($data);
    }

    public function verifyAssessment(Request $request)
    {
        //Variable declaration
        if (isset($request))
        {
            $this->AssessmentModel->setToCache($request);
        }

        $this->AssessmentModel->calculateAssessment();

        $data = [
            'userType' => 2,
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

        return $this->loadAssessment();
    }

    public function loadAssessment()
    {
        $AssessmentResult = new AssessmentResult();
        $assessment = $AssessmentResult->LoadAssessmentResult();

        $data = [
                'userType' => 2,
                'assessment' => $assessment,
                'paginated' => $AssessmentResult->getPaginated(),
            ];
        return view ('pages.assessment')->with($data);
    }

    public function calculateAssessmentResult()
    {
    }

    public function printAssessmentResult()
    {
    }

    public function loadAssessmentResult($id)
    {
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

        $view = \View::make('pages.report', $data);
        $htmlContent = $view->render();

        // PDFShift::setApiKey('c961276135aa48a7936d50e72f8294f5');
        // PDFShift::convertTo($htmlContent, null, 'pdf/result.pdf');
        
        $pdf = PDF::loadHtml($htmlContent);
        return $pdf->stream();
        // return view('pages.report')->with($data);
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

    public function getAuthenticatedUser()
    {

    }
}
