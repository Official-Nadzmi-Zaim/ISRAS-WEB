<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminFeedbackQuestion extends Model
{
    protected $table = 'admin_feedback_questions';

    // relationship
    // belongs to
    public function admin() { return $this->belogsTo('App\Admin'); }
    public function feedback_question() { return $this->belongsTo("App\FeedbackQuestion"); }
}
