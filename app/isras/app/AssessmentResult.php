<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessmentResult extends Model
{
    protected $table = 'assessment_results';

    // relationship
    // has
    public function assessment() { return $this->hasOne('App\Assessment'); }
}
