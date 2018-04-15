<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupAssessmentKeyArea extends Model
{
    protected $table = 'lookup_assessment_key_areas';

    // realtionship
    // belongs to
    public function assessment_question() { return $this->belongsTo('App\AssessmentQuestion'); }
}
