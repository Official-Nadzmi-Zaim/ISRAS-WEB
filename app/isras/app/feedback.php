<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    // relationship
    // belongs to
    public function user() { return $this->belongsTo('App\User'); }
    public function feedback_question() { return $this->belongsTo('App\FeedbackQuestion'); }
}
