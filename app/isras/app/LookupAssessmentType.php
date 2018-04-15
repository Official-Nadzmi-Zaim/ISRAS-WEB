<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupAssessmentType extends Model
{
    protected $table = 'lookup_assessment_types';

    // realtionship
    // belongs to
    public function assessment_question() { return $this->belongsTo('App\AssessmentQuestion'); }
}
