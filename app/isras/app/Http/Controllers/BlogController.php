<?php

namespace App\Http\Controllers;

use App\BlogContent;
use App\AdminBlogContent;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function loadAddContentForm() {
        return view('pages.admin.content.blog.add');
    }

    public function verifyNewContent(Request $request) {
        $adminId = Auth::user()->id;
        $blogTitle = $request['blog_title'];
        $blogDesc = $request['blog_desc'];

        if($blogTitle != null || $blogDesc != null) {
            $newBlogContent = new BlogContent();
            $newBlogContent->title = $blogTitle;
            $newBlogContent->description = $blogDesc;
            $newBlogContent->save();

            $newAdminBlogContent = new AdminBlogContent();
            $newAdminBlogContent->admin_id = $adminId;
            $newAdminBlogContent->blog_content_id = $newBlogContent->id;
            $newAdminBlogContent->save();

            return $newAdminBlogContent;
        } else
            return "Ada benda salah";
    }

    private function saveNewContent() {}

    public function loadUpdateContentForm() {
        return view('pages.admin.content.blog.update');
    }

    public function verifyUpdatedContent(Request $request) {}

    private function saveUpdatedContent() {}
}
