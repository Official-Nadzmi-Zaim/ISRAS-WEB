<?php

namespace App\Http\Controllers;
use App\Assessment;
use App\AssessmentQuestion;
use App\AssessmentResult;
use App\LookupAssessmentCategory;
use App\LookupAssessmentKeyArea;
use App\LookupAssessmentTitle;
use App\LookupAssessmentType;
//use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class AssessmentController extends Controller
{
    //public $arr_questions_no = array("a");

    public function loadAssessmentQuestion($id)
    {
        // Session::forget('arr_cb_1');
        // Session::forget('arr_cb_2');
        // Session::forget('arr_cb_3');
        // Session::forget('arr_cb_4');
        $choice = 0; //Previous
        $arr_rdo_next = array();
        $arr_rdo_previous = array();
        if (Input::get("curr_id") !== null)
           $choice = 1; //Next
        
        if ($choice == 1)
        {
            $num = Input::get("num");
            for ($x = 1; $x<$num; $x++)
            {
                //echo Input::get("radio_$x");
                $arr_rdo_next["$x"] = Input::get("radio_$x");
            }
            switch ($id-1)
            {
                case 1 :
                    Session::forget('arr_rdo_1');
                    Session::put('arr_rdo_1', $arr_rdo_next);
                    $arr_rdo_next = Session::get('arr_rdo_2');
                    break;
                case 2 :
                    Session::forget('arr_rdo_2');
                    Session::put('arr_rdo_2', $arr_rdo_next);
                    $arr_rdo_next = Session::get('arr_rdo_3');
                    break;
                case 3 :
                    Session::forget('arr_rdo_3');
                    Session::put('arr_rdo_3', $arr_rdo_next);
                    $arr_rdo_next = Session::get('arr_rdo_4');
                    break;
                case 4 :
                    Session::forget('arr_rdo_4');
                    Session::put('arr_rdo_4', $arr_rdo_next);
                    break;
            }
        }
        else
        {
            switch ($id)
            {
                case 1 :
                    $arr_rdo_previous = Session::get('arr_rdo_1');
                    break;
                case 2 :
                    $arr_rdo_previous = Session::get('arr_rdo_2');
                    break;
                case 3 :
                    $arr_rdo_previous = Session::get('arr_rdo_3');
                    break;
                case 4 :
                    $arr_rdo_previous = Session::get('arr_rdo_4');
                    break;
            }
        }

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
        // print_r($arr_cb);
        // print_r($arr_cb_2);
        //This is for last count part
        array_push($arr_questions_count, $k);

        $category = LookupAssessmentCategory::find($id)->name;
        return view('pages.assessmentpage')->with('arr_assessment_questions', $arr_assessment_questions)
        ->with('arr_key_area', $arr_key_area)->with('arr_title', $arr_title)->with('category', $category)
        ->with('id', $id)->with('arr_questions', $arr_questions)->with('arr_questions_count', $arr_questions_count)
        ->with('arr_rdo_next', $arr_rdo_next)->with('arr_rdo_previous', $arr_rdo_previous)->with('choice', $choice);
    }

    public function verifyAssessment()
    {

    }

    private function saveAssessment($contentData)
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
