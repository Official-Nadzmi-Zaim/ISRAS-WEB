<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AssessmentQuestion;

class LookupAssessmentCategory extends Model
{
    protected $table = 'lookup_assessment_categories';

    // relationship
    // belongs to
    public function assessment_question() { return $this->belongsTo('App\AssessmentQuestion'); }

    public function getKeyAreas($id)
    {
        $arr_assessment = AssessmentQuestion::where('category', $id)->get();

        $arr_key_areas = array();

        for ($i=0; $i<sizeof($arr_assessment); $i++)
        {
            if (!in_array( $arr_assessment[$i]->getKeyArea($arr_assessment[$i]->key_area, $arr_key_areas), $arr_key_areas))
            {
                array_push($arr_key_areas, $arr_assessment[$i]->getKeyArea($arr_assessment[$i]->key_area));
            }
            //array_push($arr_key_areas, $arr_assessment[$i]->getKeyArea($arr_assessment[$i]->key_area));
        }

        return $arr_key_areas;
    }
}
