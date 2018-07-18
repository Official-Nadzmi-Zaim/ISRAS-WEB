<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\BlogContent;
use App\AdminBlogContent;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function adminBlogIndex() {
        $blogContent = BlogContent::all()
            ->where('active', true);

        $blogData = null;
        foreach($blogContent as $blog)
            $blogData[] = [
                'id' => $blog['id'],
                'title' => $blog['title'],
                'description' => $blog['description']
            ];
            
        return view('pages.admin.content.blog.view')
            ->with([
                'userType' => 1,
                'blogData' => $blogData
            ]);
    }

    public function loadAddContentForm() {
        return view('pages.admin.content.blog.add')
            ->with([
                'userType' => 1
            ]);
    }

    public function verifyNewContent(Request $request) {
        $adminId = Auth::user()->id;
        $blogTitle = $request['blog_title'];
        $blogDesc = $request['blog_desc'];

        if($blogTitle != null || $blogDesc != null) {
            $this->saveNewContent($adminId, $request);

            return redirect()->route('admin.blog')
                ->with([
                    'userType' => 1,
                ]);
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
    }

    public function loadUpdateContentForm($blogId) {
        $blog = BlogContent::find($blogId);

        return view('pages.admin.content.blog.update')
            ->with([
                'userType' => 1,
                'blogData' => $blog
            ]);
    }

    public function verifyUpdatedContent(Request $request) {
        $adminId = Auth::user()->id;
        $blogId = $request['id'];
        
        $blogTitle = $request['blog_title'];
        $blogDesc = $request['blog_desc'];

        $this->saveUpdatedContent([
            'admin_id' => $adminId,
            'blog_id' => $blogId,
            'blog_title' => $blogTitle,
            'blog_desc' => $blogDesc
        ]);

        return redirect()->route('admin.blog')
            ->with([
                'userType' => 1
            ]);
    }

    private function saveUpdatedContent($contentData) {
        $blogTitle = $contentData['blog_title'];
        $blogDesc = $contentData['blog_desc'];

        $updatedBlog = BlogContent::find($contentData['blog_id']);
        $updatedBlog->title = $blogTitle;
        $updatedBlog->description = $blogDesc;
        $updatedBlog->save();

        $updatedAdminBlogContent = new AdminBlogContent();
        $updatedAdminBlogContent->admin_id = $contentData['admin_id'];
        $updatedAdminBlogContent->blog_content_id = $updatedBlog->id;
        $updatedAdminBlogContent->save();
    }

    public function deleteContent(Request $request) {
        $blogId = $request['blog_id'];
        
        $blogContent = BlogContent::find($blogId);
        $blogContent->active = false;
        $blogContent->save();

        return redirect()->route('admin.blog')
            ->with([
                'userType' => 1
            ]);
    }
}
