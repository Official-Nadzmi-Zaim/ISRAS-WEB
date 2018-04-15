<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupAssessmentCategory extends Model
{
    protected $table = 'lookup_assessment_categories';

    // relationship
    // belongs to
    public function assessment_question() { return $this->belongsTo('App\AssessmentQuestion'); }
}
