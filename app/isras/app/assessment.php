<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\LookupAssessmentCategory;
use App\AssessmentQuestion;
use DB;

class Assessment extends Model
{
    protected $table = 'assessments';

    public $score_isras = 0;
    public $score_vital = 0;
    public $score_recommended = 0;
    public $score_community = 0;
    public $score_workplace = 0;
    public $score_environmental = 0;
    public $score_marketplace = 0;

    public $full_score_isras = 0;
    public $full_score_vital = 0;
    public $full_score_recommended = 0;
    public $full_score_community = 0;
    public $full_score_workplace = 0;
    public $full_score_environmental = 0;
    public $full_score_marketplace = 0;

    public $level_isras = ""; //<b style='color: #00ff00;'>High</b>
    public $level_vital = "";
    public $level_recommended = "";

    public $arr_rdo_1;
    public $arr_rdo_2;
    public $arr_rdo_3;
    public $arr_rdo_4;

    // relationship
    // belongs to
    public function user() { return $this->belongsTo('App\User'); }
    public function assessment_question() { $this->belongsTo('App\AssessmentQuestion'); }
    public function assessment_result() { $this->belongsTo('App\AssessmentResult'); }

    public function getAssessmentQuestion($id)
    {
        return DB::table('assessment_questions')->where('id', $id)->first()->statement;
    }

    public function getAssessmentResult($id)
    {
        return DB::table('assessment_results')->where('id', $id)->first()->result;
    }

    public function calculateAssessment()
    {
        $total_category = LookupAssessmentCategory::all()->count();
        $question_id = 1;
       
        for ($i=1; $i<=$total_category; $i++)
        {
            $arr_rdo = Session::get("arr_rdo_$i");
      
            if (!empty($arr_rdo))
            {
                foreach ($arr_rdo as $answer)
                {
                    $question_type = AssessmentQuestion::find($question_id)->type;
                    $question_category = AssessmentQuestion::find($question_id)->category;

                    //This is to calculate total score for each category
                    if ($question_category == 1)
                    {
                        if ($question_type == 1)
                            $this->full_score_community += 3;
                        else
                            $this->full_score_community += 1;
                    }
                    else if ($question_category == 2)
                    {
                        if ($question_type == 1)
                            $this->full_score_workplace += 3;
                        else
                            $this->full_score_workplace += 1;
                    }
                    else if ($question_category == 3)
                    {
                        if ($question_type == 1)
                            $this->full_score_environmental += 3;
                        else
                            $this->full_score_environmental += 1; 
                    }
                    else
                    {
                        if ($question_type == 1)
                            $this->full_score_marketplace += 3;
                        else
                            $this->full_score_marketplace += 1;
                    }

                    if ($answer != null)
                    {
                        if ($question_type == 1) //Vital
                        {

                            if ($answer == 1) 
                            {
                                $this->score_vital += 3;

                                if ($question_category == 1)
                                    $this->score_community += 3;
                                else if ($question_category == 2)
                                    $this->score_workplace += 3;
                                else if ($question_category == 3)
                                    $this->score_environmental += 3;
                                else
                                    $this->score_marketplace += 3;
                            }

                            //Get the full score
                            $this->full_score_vital += 3;
                        }
                        else //Recommended
                        {

                            if ($answer == 1)
                            {
                                $this->score_recommended += 1;

                                if ($question_category == 1)
                                    $this->score_community += 1;
                                else if ($question_category == 2)
                                    $this->score_workplace += 1;
                                else if ($question_category == 3)
                                    $this->score_environmental += 1;
                                else
                                    $this->score_marketplace += 1;
                            }

                            $this->full_score_recommended += 1;
                        }

                    }

                    $question_id++;
                }
            }
        }

        $this->score_isras = $this->score_vital + $this->score_recommended;
        $this->full_score_isras = $this->full_score_vital + $this->full_score_recommended;
   
        //Set level I-Sras
        if ($this->score_isras > ($this->full_score_isras * 2/3))
            $this->setIrasLevel("<b style='color: #00ff00;'>High</b>");
        elseif ($this->score_isras > ($this->full_score_isras * 1/3))
            $this->setIrasLevel("<b style='color: #f49542;'>Medium</b>");
        else
            $this->setIrasLevel("<b style='color: #f44141;'>Low</b>");
        //Set level Vital
        if ($this->score_vital > ($this->full_score_vital * 2/3))
            $this->setVitalLevel("<b style='color: #00ff00;'>High</b>");
        elseif ($this->score_vital > ($this->full_score_vital * 1/3))
            $this->setVitalLevel("<b style='color: #f49542;'>Medium</b>");
        else
            $this->setVitalLevel("<b style='color: #f44141;'>Low</b>");
        //Set level Recommended
        if ($this->score_recommended > ($this->full_score_recommended * 2/3))
            $this->setRecommendedLevel("<b style='color: #00ff00;'>High</b>");
        elseif ($this->score_recommended > ($this->full_score_recommended * 1/3))
            $this->setRecommendedLevel("<b style='color: #f49542;'>Medium</b>");
        else
            $this->setRecommendedLevel("<b style='color: #f44141;'>Low</b>");
    }
    //Set
    public function setIsrasScore($score)
    {
        $this->score_isras = $score;
    }

    public function setVitalScore($score)
    {
        $this->score_vital = $score;
    }

    public function setRecommendedScore($score)
    {
        $this->score_recommended = $score;
    }

    public function setCommunityScore($score)
    {
        $this->score_community = $score;
    }

    public function setWorkplaceScore($score)
    {
        $this->score_workplace = $score;
    }

    public function setEnvironmentalScore($score)
    {
        $this->score_environmental = $score;
    }

    public function setMarketplaceScore($score)
    {
        $this->score_marketplace = $score;
    }

    public function setCommunityFullScore($score)
    {
        $this->full_score_community = $score;
    }

    public function setWorkplaceFullScore($score)
    {
        $this->full_score_workplace = $score;
    }

    public function setEnvironmentalFullScore($score)
    {
        $this->full_score_environmental = $score;
    }

    public function setMarketplaceFullScore($score)
    {
        $this->full_score_marketplace = $score;
    }

    public function setIrasLevel($level)
    {
        $this->level_isras = $level;
    }

    public function setVitalLevel($level)
    {
        $this->level_vital = $level;
    }

    public function setRecommendedLevel($level)
    {
        $this->level_recommended = $level;
    }

    //Get
    public function getIsrasScore()
    {
        return $this->score_isras;
    }

    public function getVitalScore()
    {
        return $this->score_vital;
    }

    public function getRecommendedScore()
    {
        return $this->score_recommended;
    }

    public function getCommunityScore()
    {
        return $this->score_community;
    }

    public function getWorkplaceScore()
    {
        return $this->score_workplace;
    }

    public function getEnvironmentalScore()
    {
        return $this->score_environmental;
    }

    public function getMarketplaceScore()
    {
        return $this->score_marketplace;
    }

    public function getCommunityFullScore()
    {
        return $this->full_score_community;
    }

    public function getWorkplaceFullScore()
    {
        return $this->full_score_workplace;
    }

    public function getEnvironmentalFullScore()
    {
        return $this->full_score_environmental;
    }

    public function getMarketplaceFullScore()
    {
        return $this->full_score_marketplace;
    }

    public function getIsrasLevel()
    {
        return $this->level_isras;
    }

    public function getVitalLevel()
    {
        return $this->level_vital;
    }

    public function getRecommendedLevel()
    {
        return $this->level_recommended;
    }

    //Return array for each page SETTER and GETTER
    public function setArr_Rdo($id, Request $request)
    {
        //Insert radio value into array - Here we can determine if the all the radio button have been selected or not
        $isValid = true;

        $num = $request["num"];
        for ($x = 1; $x<$num; $x++)
        {
            if ($request["radio_$x"] == null)
            {
                $isValid = false;
                //return $isValid;
            }

            if ($id == 1)
                $this->arr_rdo_1["$x"] = $request["radio_$x"];
            elseif ($id == 2)
                $this->arr_rdo_2["$x"] = $request["radio_$x"];
            elseif ($id == 3)
                $this->arr_rdo_3["$x"] = $request["radio_$x"];
            else
                $this->arr_rdo_4["$x"] = $request["radio_$x"];
        }

        //Set to cache
        $this->setToCache($id);
        return $isValid;
    }

    public function getArrayStatus($array)
    {
        $status = 0; //true;

        for ($x = 1; $x<sizeof($array); $x++)
        {
            if ($array[$x] == null)
            {
                $status = 1;
                break;
            }
        }
        return $status;
    }
    public function getArr_Rdo_1()
    {
        return $this->arr_rdo_1;
    }

    public function getArr_Rdo_2()
    {
        return $this->arr_rdo_2;
    }

    public function getArr_Rdo_3()
    {
        return $this->arr_rdo_3;
    }

    public function getArr_Rdo_4()
    {
        return $this->arr_rdo_4;
    }

    public function setToCache($page)
    {
        switch ($page)
        {
            case 1 :
                Session::forget('arr_rdo_1');
                Session::put('arr_rdo_1', $this->arr_rdo_1);
                break;
            case 2 :
                Session::forget('arr_rdo_2');
                Session::put('arr_rdo_2', $this->arr_rdo_2);
                break;
            case 3 :
                Session::forget('arr_rdo_3');
                Session::put('arr_rdo_3', $this->arr_rdo_3);
                break;
            case 4 :
                Session::forget('arr_rdo_4');
                Session::put('arr_rdo_4', $this->arr_rdo_4);
                break;
        }
    }

    public function loadFromCache($page)
    {
        switch ($page)
        {
            case 1 :
                $this->arr_rdo_1 = Session::get('arr_rdo_1');
                return $this->getArr_Rdo_1();
                break;
            case 2 :
                $this->arr_rdo_2 = Session::get('arr_rdo_2');
                return $this->getArr_Rdo_2();
                break;
            case 3 :
                $this->arr_rdo_3 = Session::get('arr_rdo_3');
                return $this->getArr_Rdo_3();
                break;
            case 4 :
                $this->arr_rdo_4 = Session::get('arr_rdo_4');
                return $this->getArr_Rdo_4();
                break;
        }
    }

    public function clearAllCache()
    {
        Session::forget('arr_rdo_1');
        Session::forget('arr_rdo_2');
        Session::forget('arr_rdo_3');
        Session::forget('arr_rdo_4');
    }
}
