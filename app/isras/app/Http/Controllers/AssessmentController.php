<?php

namespace App\Http\Controllers;
use App\Assessment;
use App\AssessmentQuestion;
use App\AssessmentResult;
use App\LookupAssessmentCategory;
use App\LookupAssessmentKeyArea;
use App\LookupAssessmentTitle;
use App\LookupAssessmentType;
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

    public function loadAddContentForm()
    {
    }

    public function verifyNewContent()
    {
    }

    public function saveNewContent()
    {
    }

    public function loadContentUpdateForm()
    {
    }


    public function verifyUpdatedContent()
    {
    }


    public function saveUpdatedContent()
    {
    }
}
