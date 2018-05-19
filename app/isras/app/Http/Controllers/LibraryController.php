<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\LookupPublication;
use App\LookupAuthor;
use App\LibraryContent;
use App\AdminLibraryContent;
use App\Admin;

class LibraryController extends Controller
{
    public function adminLibraryIndex() {
        $libraryContent = LibraryContent::all()
            ->where('active', true);

        $libraryData = null;
        foreach($libraryContent as $library)
            $libraryData[] = [
                'id' => $library['id'],
                'title' => $library['title'],
                'src' => $library['src']
            ];

        return view('pages.admin.content.library.view')
            ->with([
                'userType' => 1,
                'libraryData' => $libraryData
            ]);
    }

    public function loadAddContentForm() {
        $publicationLookup = LookupPublication::all();
        $authorLookup = LookupAuthor::all();

        $publicationData = null;
        $authorData = null;
        foreach($publicationLookup as $publication)
            $publicationData[$publication['id']] = $publication['name'];
        foreach($authorLookup as $author)
            $authorData[$author['id']] = $author['name'];

        return view('pages.admin.content.library.add')
            ->with([
                'userType' => 1,
                'formData' => [
                    'publication' => $publicationData,
                    'author' => $authorData
                ]
            ]);
    }

    public function verifyNewContent(Request $request) {
        $entity = Auth::user();
        $admin = Admin::all()->where('entity_id', $entity->id)[0];

        $title = $request['library_title'];
        $description = $request['library_description'];
        $publication = $request['library_publication'];
        $author = $request['library_author'];
        $src = $request->file('library_file');
        
        $this->saveNewContent([
            'admin_id' => $admin->id,
            'title' => $title,
            'description' => $description,
            'publication' => $publication,
            'author' => $author,
            'src' => $src
        ]);

        return redirect()->route('admin.library')
            ->with([
                'userType' => 1,
            ]);
    }

    private function saveNewContent($contentData) {
        // library content table
        $newLibraryContent = new LibraryContent();
        $newLibraryContent->title = $contentData['title'];
        $newLibraryContent->description = $contentData['description'];
        $newLibraryContent->publication = $contentData['publication'];
        $newLibraryContent->author = $contentData['author'];
        $newLibraryContent->save();
        
        if(isset($contentData['src'])) {
            $srcName = $newLibraryContent->id . "_" . date_timestamp_get(date_create());
            $srcPath = asset('img/uploads') . '/' . $srcName . '.' . $contentData['src']->getClientOriginalExtension();
            $contentData['src']->move('img/uploads', $srcName . '.' . $contentData['src']->getClientOriginalExtension());

            $newLibraryContent->src = $srcPath;
            $newLibraryContent->save();
        }

        // admin library content table
        $newAdminLibraryContent = new AdminLibraryContent();
        $newAdminLibraryContent->admin_id = $contentData['admin_id'];
        $newAdminLibraryContent->library_content_id = $newLibraryContent->id;
        $newAdminLibraryContent->save();
    }

    public function loadUpdateContentForm($libraryId) {
        $publicationLookup = LookupPublication::all();
        $authorLookup = LookupAuthor::all();
        $libraryData = LibraryContent::find($libraryId);

        $publicationData = null;
        $authorData = null;

        foreach($publicationLookup as $publication)
            $publicationData[$publication['id']] = $publication['name'];
        foreach($authorLookup as $author)
            $authorData[$author['id']] = $author['name'];

        return view('pages.admin.content.library.update')
            ->with([
                'userType' => 1,
                'libraryData' => [
                    'library_id' => $libraryId,
                    'title' => $libraryData['title'],
                    'description' => $libraryData['description'],
                    'updated_at' => $libraryData['updated_at'],
                    'created_at' => $libraryData['created_at']
                ],
                'formData' => [
                    'publication' => $publicationData,
                    'author' => $authorData
                ]
            ]);
    }

    public function verifyUpdatedContent(Request $request) {
        $entity = Auth::user();
        $admin = Admin::all()->where('entity_id', $entity->id)[0];
        
        $adminId = $admin->id;
        $libraryId = $request['library_id'];
        $title = $request['library_title'];
        $description = $request['library_description'];
        $publication = $request['library_publication'];
        $author = $request['library_author'];
        $src = $request->file('library_file');

        $this->saveUpdatedContent([
            'admin_id' => $adminId,
            'library_id' => $libraryId,
            'library_title' => $title,
            'library_description' => $description,
            'library_publication' => $publication,
            'library_author' => $author,
            'library_src' => $src
        ]);
        
        return redirect('admin/library')
            ->with([
                'userType' => 1
            ]);
    }
        
    private function saveUpdatedContent($contentData) {
        $updatedLibraryContent = LibraryContent::find($contentData['library_id']);
        $updatedLibraryContent->title = $contentData['library_title'];
        $updatedLibraryContent->description = $contentData['library_description'];
        $updatedLibraryContent->publication = $contentData['library_publication'];
        $updatedLibraryContent->author = $contentData['library_author'];
        $updatedLibraryContent->save();

        if(isset($contentData['library_src'])) {
            $srcName = $updatedLibraryContent->id . "_" . date_timestamp_get(date_create());
            $srcPath = asset('img/uploads') . '/' . $srcName . '.' . $contentData['library_src']->getClientOriginalExtension();
            $contentData['library_src']->move('img/uploads', $srcName . '.' . $contentData['library_src']->getClientOriginalExtension());

            $updatedLibraryContent->src = $srcPath;
            $updatedLibraryContent->save();
        }

        $newAdminLibraryContent = new AdminLibraryContent();
        $newAdminLibraryContent->admin_id = $contentData['admin_id'];
        $newAdminLibraryContent->library_content_id = $updatedLibraryContent->id;
        $newAdminLibraryContent->save();
    }

    public function deleteContent(Request $request) {
        $libraryId = $request['library_id'];
        
        $libraryContent = LibraryContent::find($libraryId);
        $libraryContent->active = false;
        $libraryContent->save();

        return redirect('admin/library')
            ->with([
                'userType' => 1
            ]);
    }

    //Zaim Omar library controller for user
    public function loadLibraryContent()
    {
        $arr_content = LibraryContent::all();
        $data = [
            'userType' => 1,
            'arr_content' => $arr_content
        ];

        return view('pages.user.library')->with($data);
    }
}
