<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Admin;
use App\AdminFeedbackQuestion;
use App\Feedback;
use App\FeedbackQuestion;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->feedbackModel = new Feedback;
    }

    public function loadFeedbackQuestion()
    {
        $this->feedbackModel->LoadFeedbackQuestions();
    
        $data = [
            'userType' => 2,
            'feedbackModel' => $this->feedbackModel,
        ];

        return view('pages.feedback')->with($data);
    }

    public function saveFeedback(Request $request)
    {
        $this->feedbackModel->storeFeedbackAnswer($request);
        $this->feedbackModel->LoadFeedbackQuestions();

        $data = [
            'userType' => 2,
            'feedbackModel' => $this->feedbackModel,
            'success' => 'Your feedback have been submitted. Thank you',
        ];

        return view('pages.feedback')->with($data);
    }

    public function adminFeedbackIndex() {
        $allQuestion = FeedbackQuestion::all()
            ->where('active', true);

        $questionList = null;
        foreach($allQuestion as $question) {
            $questionList[] = [
                'id' => $question['id'],
                'question_statement' => $question['description'],
            ];
        }
        
        return view('pages.admin.content.feedback.view')
            ->with([
                'userType' => 1,
                'assessmentQuestionData' => $questionList
            ]);
    }

    public function loadAddContentForm() {
        return view('pages.admin.content.feedback.add')
            ->with([
                'userType' => 1
            ]);
    }

    public function verifyNewContent(Request $request) {
        $entity = Auth::user();
        $admin = Admin::all()->where('entity_id', $entity->id)[0];
        
        $adminId = $admin->id;
        $questionDescription = $request['feedback_question_description'];

        $this->saveNewContent([
            'admin_id' => $adminId,
            'question_description' => $questionDescription
        ]);

        return redirect('admin/feedback')
            ->with([
                'userType' => 1
            ]);
    }

    private function saveNewContent($contentData) {
        $newFeedbackQuestion = new FeedbackQuestion();
        $newFeedbackQuestion->description = $contentData['question_description'];
        $newFeedbackQuestion->save();

        $newAdminFeedbackQuestion = new AdminFeedbackQuestion();
        $newAdminFeedbackQuestion->admin_id = $contentData['admin_id'];
        $newAdminFeedbackQuestion->feedback_question_id = $newFeedbackQuestion->id;
        $newAdminFeedbackQuestion->save();
    }

    public function loadContentUpdateForm($questionId) {
        $feedbackQuestion = FeedbackQuestion::find($questionId);

        return view('pages.admin.content.feedback.update')
            ->with([
                'userType' => 1,
                'questionData' => [
                    'question_id' => $questionId,
                    'question_description' => $feedbackQuestion['description'],
                    'created_at' => $feedbackQuestion['created_at'],
                    'updated_at' => $feedbackQuestion['updated_at']
                ]
            ]);
    }

    public function verifyUpdatedContent(Request $request) {
        $entity = Auth::user();
        $admin = Admin::all()->where('entity_id', $entity->id)[0];
        
        $adminId = $admin->id;
        $questionId = $request['feedback_question_id'];
        $description = $request['feedback_question_description'];

        $this->saveUpdatedContent([
            'admin_id' => $adminId,
            'question_id' => $questionId,
            'question_description' => $description
        ]);
        
        return redirect('admin/feedback')
            ->with([
                'userType' => 1
            ]);
    }

    private function saveUpdatedContent($contentData) {
        $updatedFeedbackQuestion = FeedbackQuestion::find($contentData['question_id']);
        $updatedFeedbackQuestion->description = $contentData['question_description'];
        $updatedFeedbackQuestion->save();

        $updatedAdminFeedbackQuestion = new AdminFeedbackQuestion();
        $updatedAdminFeedbackQuestion->admin_id = $contentData['admin_id'];
        $updatedAdminFeedbackQuestion->feedback_question_id = $updatedFeedbackQuestion->id;
        $updatedAdminFeedbackQuestion->save();
    }

    public function deleteContent(Request $request) {
        $entity = Auth::user();
        $admin = Admin::all()->where('entity_id', $entity->id)[0];
        
        $adminId = $admin->id;
        $questionId = $request['question_id'];
            
        $question = FeedbackQuestion::find($questionId);
        $question->active = false;
        $question->save();

        return redirect('admin/feedback')
            ->with([
                'userType' => 1
            ]);
    }
}
