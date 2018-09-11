<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\LookupAssessmentCategory;
use App\LookupAssessmentKeyArea;
use App\LookupAssessmentTitle;
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
    public $arr_rdo;

    public $assessment_questions;
    public $assessment_category;
    public $assessment_category_id;
    public $assessment_key_area = [];
    public $assessment_area_title;

    // relationship
    // belongs to
    public function user() { return $this->belongsTo('App\User'); }
    public function assessment_question() { return $this->belongsTo('App\AssessmentQuestion'); }
    public function assessment_result() { return $this->belongsTo('App\AssessmentResult'); }

    public function LoadAssessmentQuestion($id)
    {
        $this->assessment_questions = DB::table('assessment_questions')->where('category', $id)->get();
        $this->assessment_category = LookupAssessmentCategory::find($this->assessment_questions[0]->category)->name;
        $this->assessment_category_id = $id;
        $assessment_key_area = DB::table('assessment_questions')->distinct()->select('key_area')->where('category', $id )->get();
        $assessment_area_title = DB::table('assessment_questions')->distinct()->select('title', 'key_area')->where('category', $id )->get();

        for($i=0; $i<sizeof($assessment_area_title); $i++)
        {
            $title_name = DB::table('lookup_assessment_titles')->where('id', $assessment_area_title[$i]->title)->first()->name;
            //Add new attributes to object class
            $assessment_area_title[$i] = (object) array_merge( (array)$assessment_area_title[$i], array( 'name' => $title_name ));
        }

        $this->assessment_area_title = $assessment_area_title;
        //echo $assessment_key_area;
        for($i=0; $i<sizeof($assessment_key_area); $i++)
        {
            $title = DB::table('lookup_assessment_key_areas')->select('id', 'name')->where('id', $assessment_key_area[$i]->key_area)->first();
            array_push($this->assessment_key_area, $title);
        }
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
            $x = 0;
            $assessmentQuestion = DB::table('assessment_questions')->where('category', $i)->get();
            if (!empty($arr_rdo))
            {
                foreach ($arr_rdo as $answer)
                {
                    //This is to calculate total score for each category, calculate vital and recommended
                    if ($assessmentQuestion[$x]->category == 1)
                    {
                        if ($assessmentQuestion[$x]->type == 1) //Vital
                        {
                            $this->full_score_community += 3;
                            $this->full_score_vital += 3;
                            if ($answer == 1)
                            {
                                $this->score_community += 3;
                                $this->score_vital += 3;
                            }
                        }
                        else    //Recommended
                        {
                            $this->full_score_community += 1;
                            $this->full_score_recommended += 1;
                            if ($answer == 1)
                            {
                                $this->score_community += 1;
                                $this->score_recommended += 1;
                            }
                        }
                    } 
                    else if ($assessmentQuestion[$x]->category == 2)
                    {
                        if ($assessmentQuestion[$x]->type == 1) //Vital
                        {
                            $this->full_score_workplace += 3;
                            $this->full_score_vital += 3;
                            if ($answer == 1)
                            {
                                $this->score_workplace += 3;
                                $this->score_vital += 3;
                            }
                        }
                        else    //Recommended
                        {
                            $this->full_score_workplace += 1;
                            $this->full_score_recommended += 1;
                            if ($answer == 1)
                            {
                                $this->score_workplace += 1;
                                $this->score_recommended += 1;
                            }
                        }
                    }
                    else if ($assessmentQuestion[$x]->category == 3)
                    {
                        if ($assessmentQuestion[$x]->type == 1) //Vital
                        {
                            $this->full_score_environmental += 3;
                            $this->full_score_vital += 3;
                            if ($answer == 1)
                            {
                                $this->score_environmental += 3;
                                $this->score_vital += 3;
                            }
                        }
                        else    //Recommended
                        {
                            $this->full_score_environmental += 1;
                            $this->full_score_recommended += 1;
                            if ($answer == 1)
                            {
                                $this->score_environmental += 1;
                                $this->score_recommended += 1;
                            }
                        }
                    }
                    else
                    {
                        if ($assessmentQuestion[$x]->type == 1) //Vital
                        {
                            $this->full_score_marketplace += 3;
                            $this->full_score_vital += 3;
                            if ($answer == 1)
                            {
                                $this->score_marketplace += 3;
                                $this->score_vital += 3;
                            }
                        }
                        else    //Recommended
                        {
                            $this->full_score_marketplace += 1;
                            $this->full_score_recommended += 1;
                            if ($answer == 1)
                            {
                                $this->score_marketplace += 1;
                                $this->score_recommended += 1;
                            }
                        }
                    } 

                    $x++;
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

    public function setToCache(Request $request)
    {
        $page = $request["page"];
        $num = $request["num"];

        for ($x = 0; $x<$num; $x++)
        {
            $this->arr_rdo["$x"] = $request["radio_$x"];
        }

        switch ($page)
        {
            case 1 :
                Session::forget('arr_rdo_1');
                Session::put('arr_rdo_1', $this->arr_rdo);
                break;
            case 2 :
                Session::forget('arr_rdo_2');
                Session::put('arr_rdo_2', $this->arr_rdo);
                break;
            case 3 :
                Session::forget('arr_rdo_3');
                Session::put('arr_rdo_3', $this->arr_rdo);
                break;
            case 4 :
                Session::forget('arr_rdo_4');
                Session::put('arr_rdo_4', $this->arr_rdo);
                break;
        }
    }

    public function loadFromCache($page)
    {
        switch ($page)
        {
            case 1 :
                $this->arr_rdo = Session::get('arr_rdo_1');
                break;
            case 2 :
                $this->arr_rdo = Session::get('arr_rdo_2');
                break;
            case 3 :
                $this->arr_rdo = Session::get('arr_rdo_3');
                break;
            case 4 :
                $this->arr_rdo = Session::get('arr_rdo_4');
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
