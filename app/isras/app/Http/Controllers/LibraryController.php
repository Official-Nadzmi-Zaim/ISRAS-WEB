<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LookupPublication;
use App\LookupAuthor;
use App\LibraryContent;
use App\AdminLibraryContent;

class LibraryController extends Controller
{
    public function adminLibraryIndex() {
        $libraryContent = LibraryContent::all();

        $libraryData = null;
        foreach($libraryContent as $library)
            $libraryData[] = [
                'id' => $library['id'],
                'title' => $library['title'],
                'src' => $library['src']
            ];

        return view('pages.admin.content.library.view')
            ->with([
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
            ->with('formData', [
                'publication' => $publicationData,
                'author' => $authorData
            ]);
    }

    public function verifyNewContent(Request $request) {
        $title = $request['library_title'];
        $description = $request['library_description'];
        $publication = $request['library_publication'];
        $author = $request['library_author'];
        $src = $request->file('library_file');
        
        $this->saveNewContent([
            'admin_id' => 1, // todo - id ni nnti kena ubah, based on sapa yg tengah login
            'title' => $title,
            'description' => $description,
            'publication' => $publication,
            'author' => $author,
            'src' => $src
        ]);

        return redirect()->route('admin.library');
    }

    private function saveNewContent($contentData) {
        // library content table
        $newLibraryContent = new LibraryContent();
        $newLibraryContent->title = $contentData['title'];
        $newLibraryContent->description = $contentData['description'];
        $newLibraryContent->publication = $contentData['publication'];
        $newLibraryContent->author = $contentData['author'];
        $newLibraryContent->save();

        $srcName = $newLibraryContent->id . "_" . date_timestamp_get(date_create());
        $srcPath = asset('img/uploads') . '/' . $srcName . '.' . $contentData['src']->getClientOriginalExtension();
        $contentData['src']->move('img/uploads', $srcName . '.' . $contentData['src']->getClientOriginalExtension());

        $newLibraryContent->src = $srcPath;
        $newLibraryContent->save();

        // admin library content table
        $newAdminLibraryContent = new AdminLibraryContent();
        $newAdminLibraryContent->admin_id = $contentData['admin_id'];
        $newAdminLibraryContent->library_content_id = $newLibraryContent->id;
        $newAdminLibraryContent->save();
    }

    public function loadUpdateContentForm(Request $request) {
        $libraryId = 1 /* $request['id'] */;

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
                'libraryData' => [
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

    public function verifyUpdatedContent(Request $request) {}
        
    private function saveUpdatedContent($contentData) {}
}
