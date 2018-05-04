<?php

namespace App\Http\Controllers;
use App\Feedback;
use App\FeedbackQuestion;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function adminFeedbackIndex() {
        return view('pages.admin.content.feedback.view');
    }

    public function loadFeedbackQuestion() {}

    public function verifyFeedback() {}

    public function saveFeedback() {}

    public function loadAddContentForm() {
        return view('pages.admin.content.feedback.add');
    }

    public function verifyNewContent() {}

    public function saveNewContent() {}

    public function loadContentUpdateForm(){
        return view('pages.admin.content.feedback.update');
    }

    public function verifyUpdatedContent(){}

    public function saveUpdatedContent(){}
}
