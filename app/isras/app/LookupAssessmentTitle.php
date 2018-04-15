<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupAssessmentTitle extends Model
{
    protected $table = 'lookup_assessment_titles';

    // relationship
    // balongs to
    public function assessment_question() { return $this->belongsTo('App\AssessmentQuestion'); }
}
