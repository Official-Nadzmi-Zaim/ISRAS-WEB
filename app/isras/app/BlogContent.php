<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogContent extends Model
{
    protected $table = 'blog_contents';

    // realtionship
    // has
    public function admin_blog_content() { return $this->hasMany('App\AdminBlogContent'); }
}
