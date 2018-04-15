<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackQuestion extends Model
{
    protected $table = 'feedback_questions';

    // relationship
    // has
    public function feedback() { return $this->hasMany('App\Feedback'); }
    public function admin_feedback_question() { return $this->hasMany('App\AdminFeedbackQuestion'); }
}
