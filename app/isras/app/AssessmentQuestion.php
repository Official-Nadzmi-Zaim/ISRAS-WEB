<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessmentQuestion extends Model
{
    protected $table = 'assessment_questions';

    // relationship
    // has
    public function assessment() { return $this->hasMany('App\Assessment'); }
    public function admin_assessment_question() { return $this->hasMany('App\AdminAssessmentQuestion'); }

    // lookup
    public function lookup_assessment_key_area() { return $this->hasOne('App\LookupAssessmentKeyArea'); }
    public function lookup_assessment_title() { return $this->hasOne('App\LookupAssessmentTitle'); }
    public function lookup_assessment_category() { return $this->hasOne('App\LookupAssessmentCategory'); }
    public function lookup_assessment_type() { return $this->hasOne('App\LookupAssessmentType'); }
}
