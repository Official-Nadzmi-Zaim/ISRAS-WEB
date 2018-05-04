<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminAssessmentQuestion extends Model
{
    protected $table = 'admin_assessment_question';

    // relationship
    // belongs to
    public function admin() { return $this->belongsTo('App\Admin'); }
    public function assessment_question() { return $this->belongsTo('App\AssessmentQuestion'); }
}
