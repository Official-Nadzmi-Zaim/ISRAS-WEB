<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LookupPublication;
use App\LookupAuthor;
use App\LibraryContent;

class LibraryController extends Controller
{
    public function libraryIndex() {
        $libraryContent = LibraryContent::all();

        foreach($libraryContent as $library)
            $libraryData[] = [
                'id' => $library['id'],
                'title' => $library['title']
            ];

        return view('pages.admin.content.library.view')
            ->with([
                'libraryData' => $libraryData
            ]);
    }

    public function loadAddContentForm() {
        $publicationLookup = LookupPublication::all();
        $authorLookup = LookupAuthor::all();

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
            'title' => $title,
            'description' => $description,
            'publication' => $publication,
            'author' => $author,
            'src' => $src
        ]);

        return redirect()->route('admin.library');
    }

    private function saveNewContent($contentData) {
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
    }

    public function loadUpdateContentForm() {
        return view('pages.admin.content.library.update');
    }

    public function verifyUpdatedContent(Request $request) {}
        
    private function saveUpdatedContent($contentData) {}

    //Zaim Omar library controller for user
    public function loadLibraryContent()
    {
        $arr_content = LibraryContent::all();
        $data = [
            'arr_content' => $arr_content
        ];

        return view('pages.user.library')->with($data);
    }
}
