<?php

namespace App\Http\Controllers;

use App\BlogContent;
use App\AdminBlogContent;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function adminBlogIndex() {
        return view('pages.admin.content.blog.view');
    }

    public function loadAddContentForm() {
        return view('pages.admin.content.blog.add');
    }

    public function verifyNewContent(Request $request) {
        $adminId = Auth::user()->id;

        if($blogTitle != null || $blogDesc != null) {
            return $this->saveNewContent($adminId, $request);
        } else
            return "Ada benda salah";
    }

    private function saveNewContent($adminId, $requestData) {
        $blogTitle = $requestData['blog_title'];
        $blogDesc = $requestData['blog_desc'];

        $newBlogContent = new BlogContent();
        $newBlogContent->title = $blogTitle;
        $newBlogContent->description = $blogDesc;
        $newBlogContent->save();

        $newAdminBlogContent = new AdminBlogContent();
        $newAdminBlogContent->admin_id = $adminId;
        $newAdminBlogContent->blog_content_id = $newBlogContent->id;
        $newAdminBlogContent->save();

        return $newAdminBlogContent;
    }

    public function loadUpdateContentForm() {
        return view('pages.admin.content.blog.update');
    }

    public function verifyUpdatedContent(Request $request) {}

    private function saveUpdatedContent($adminId, $blogId, $requestData) {
        /*
        $adminBlogContent = ; // get instance of admin blog content
        $blogTitle = $requestData['blog_title'];
        $blogDesc = $requestData['blog_desc'];

        $updatedBlog = BlogContent::find($blogId);
        $updatedBlog->title = $blogTitle;
        $updatedBlog->description = $blogDesc;
        $updatedBlog->save();

        $updatedAdminBlogContent = ; // get id of admin blog content instance
        $updatedAdminBlogContent->admin_id = $adminId;
        $updatedAdminBlogContent->blog_content_id = $newBlogContent->id;
        $updatedAdminBlogContent->save();
        */
    }
}
