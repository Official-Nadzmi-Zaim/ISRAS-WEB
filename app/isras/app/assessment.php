<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $table = 'assessments';

    // relationship
    // belongs to
    public function user() { return $this->belongsTo('App\User'); }
    public function assessment_question() { $this->belongsTo('App\AssessmentQuestion'); }
    public function assessment_result() { $this->belongsTo('App\AssessmentResult'); }
}
