<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function loadAddContentForm() {
        return "This is add content form for library.";
    }

    public function verifyNewContent() {}

    private function saveNewContent() {}

    public function loadUpdateContentForm() {
        return "This is update content form for library.";
    }

    public function verifyUpdatedContent() {}
        
    private function saveUpdatedContent() {}
}
