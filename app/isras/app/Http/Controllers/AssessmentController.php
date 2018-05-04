<?php

namespace App\Http\Controllers;
use App\Assessment;
use App\AssessmentQuestion;
use App\AssessmentResult;
use App\LookupAssessmentCategory;
use App\LookupAssessmentKeyArea;
use App\LookupAssessmentTitle;
use App\LookupAssessmentType;
use App\AdminAssessmentQuestion;

use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function loadAssessmentQuestion($id)
    {
        $arr_assessment_questions = AssessmentQuestion::where('category', $id)->get();
        $arr_key_area = array();
        $arr_questions = array();
        $arr_questions_count = array();
        $title_no = 0;
        $arr_title = array();
        $no = 0;
        $i = -1;
        $j = 0;
        $k = 0;
        foreach ($arr_assessment_questions as $x)
        {
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
        return view('pages.assessmentpage')->with('arr_assessment_questions', $arr_assessment_questions)
        ->with('arr_key_area', $arr_key_area)->with('arr_title', $arr_title)->with('category', $category)
        ->with('id', $id)->with('arr_questions', $arr_questions)->with('arr_questions_count', $arr_questions_count);
    }

    public function verifyAssessment()
    {
    }

    public function saveAssessment()
    {
    }

    public function saveAssessmentResult()
    {
    }

    public function calculateAssessmentResult()
    {
    }

    public function printAssessmentResult()
    {
    }

    public function adminAssessmentIndex($requestAll=1, $adminId=null) {
        if($requestAll == 1) {
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
        } else {
            $questionList = null;
            $adminQuestionList = AdminAssessmentQuestion::all()
                ->where('admin_id', $adminId);
                
            if($adminQuestionList != null) {
                foreach($adminQuestionList as $question)
                    $allQuestion[] = AssessmentQuestion::find($question['id']);

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
            }
        }
        
        return view('pages.admin.content.assessment.view')
            ->with([
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
                'formData' => [
                    'question_type' => $questionType,
                    'question_category' => $questionCategory,
                    'question_key_area' => $questionKeyArea,
                    'question_title' => $questionTitle
                ]
            ]);
    }

    public function verifyNewContent(Request $request) {
        $adminId = 1; // todo - nnti kena ubah
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

        return redirect('admin/assessment/0/' . $adminId);
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
                'questionData' => [ // todo - letak data asal dkt sini
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
                    'question_title' => $questionTitle
                ]
            ]);
    }

    public function verifyUpdatedContent(Request $request) {
        $adminId = 1; // todo - ni kena ubah bagi dynamic value
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

        return redirect('admin/assessment/0/' . $adminId);
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
        $adminId = 1;
        $questionId = $request['question_id'];
            
        $question = AssessmentQuestion::find($questionId);
        $question->active = false;
        $question->save();

        return redirect('admin/assessment/0/' . $adminId);
    }
}
