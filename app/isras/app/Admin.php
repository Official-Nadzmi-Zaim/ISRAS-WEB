<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = "admin";
    protected $guard = 'admin';

    // relationships
    // belongs to
    public function admin() { return $this->belongsTo('App\Admin'); }
    
    // has
    public function admin_feedback_question() { return $this->hasMany('App\AdminFeedbackQuestion'); }
    public function admin_assessment_question() { return $this->hasMany('App\AdminAssessmentQuestion'); }
    public function admin_library_content() { return $this->hasMany('App\AdminLibraryContent'); }
    public function admin_blog_content() { return $this->hasMany('App\AdminBlogContent'); }
}
