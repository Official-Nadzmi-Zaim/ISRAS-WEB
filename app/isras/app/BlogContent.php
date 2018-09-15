<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BlogContent extends Model
{
    protected $table = 'blog_contents';

    // realtionship
    // has
    public function admin_blog_content() { return $this->hasMany('App\AdminBlogContent'); }

    public static function getLatestBlog() {
        return DB::table('blog_contents')->where('active', true)->orderBy('updated_at', 'desc')->limit(3)->get();
    }
}
