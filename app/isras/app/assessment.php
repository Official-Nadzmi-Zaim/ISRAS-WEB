<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Assessment extends Model
{
    protected $table = 'assessments';

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
}
