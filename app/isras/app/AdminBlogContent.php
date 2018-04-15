<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminBlogContent extends Model
{
    protected $table = 'admin_blog_contents';

    // relationship
    // belongs to
    public function admin() { return $this->belongsTo('App\Admin'); }
    public function blog_content() { return $this->belongsTo('App\BlogContent'); }
}
