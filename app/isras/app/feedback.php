<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;
use App\FeedbackQuestion;
use Illuminate\Support\Facades\Auth;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    public $feedbackQuestions;

    // relationship
    // belongs to
    public function user() { return $this->belongsTo('App\User'); }
    public function feedback_question() { return $this->belongsTo('App\FeedbackQuestion'); }

    public $arr_feedback;

    public function LoadFeedbackQuestions()
    {
        $questions = new FeedbackQuestion();
        $this->feedbackQuestions = $questions->getFeedbackQuestions();
    }

    public function verifyFeedback(Request $request)
    {
        $feedbackQuestion = new FeedbackQuestion;

        //Get the data
        $size = $feedbackQuestion->getFeedbackQuestionsCount();

        //Save the data
        for ($i=0; $i<$size; $i++)
        {
            $score = $request["feedback_answer_".($i+1)];

            if ($score == null)
            {
                $isAnswer = false;
            }

            $this->arr_feedback[$i] = $request["feedback_answer_".($i+1)];
        }

    }

    public function getArrayFeedback()
    {
        return $this->arr_feedback;
    }

    public function storeFeedbackAnswer(Request $request)
    {
        //Get the data
        $feedbackQuestion = new FeedbackQuestion;

        $size = $feedbackQuestion->getFeedbackQuestionsCount();
        $userId = User::all()->where('entity_id', Auth::id())->first()->id;

        //Save the data
        for ($i=0; $i<$size; $i++)
        {
            $score = $request["feedback_answer_".($i+1)];

            $this->saveFeedback([
                    'user_id' => $userId, // get user id from real user later
                    'feedback_question_id' => $i+1,
                    'score' => $score
                ]);
        }
    }

    public function saveFeedback($contentData)
    {
        $Feedback = new Feedback();
        $Feedback->user_id = $contentData['user_id'];
        $Feedback->feedback_question_id = $contentData['feedback_question_id'];
        $Feedback->score = $contentData['score'];
        $Feedback->save();
    }
}
