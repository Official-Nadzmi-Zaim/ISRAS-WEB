<?php

namespace App\Http\Controllers;
use App\Feedback;
use App\FeedbackQuestion;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function loadFeedbackQuestion()
    {
        $arr_feedback = FeedbackQuestion::all();

        $data = [
            'arr_feedback' => $arr_feedback
        ];

        return view('pages.feedback')->with($data);
    }

    public function verifyFeedback(Request $request)
    {
        //Get the data
        $size = $request["no"];

        //Save the data
        for ($i=0; $i<$size; $i++)
        {
            $score = $request["feedback_answer_".($i+1)];
            
            $this->saveFeedback([
                'user_id' => 1,
                'feedback_question_id' => $i+1,
                'score' => $score,
            ]);
        }
        //Return the view
        return $this->loadFeedbackQuestion();
    }

    public function saveFeedback($contentData)
    {
        $Feedback = new Feedback();
        $Feedback->user_id = $contentData['user_id'];
        $Feedback->feedback_question_id = $contentData['feedback_question_id'];
        $Feedback->score = $contentData['score'];
        $Feedback->save();
    }

    public function loadAddContentForm()
    {

    }

    public function verifyNewContent()
    {

    }

    public function saveNewContent()
    {

    }

    public function loadUpdateContentForm()
    {

    }

    public function verifyUpdatedContent()
    {

    }

    public function saveUpdatedContent()
    {

    }
}
