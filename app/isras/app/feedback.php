<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    // relationship
    // belongs to
    public function user() { return $this->belongsTo('App\User'); }
    public function feedback_question() { return $this->belongsTo('App\FeedbackQuestion'); }

    public function verifyFeedback(Request $request)
    {
        //Check whether all feedback question has been answered
        $isAnswer = true;

        //Get the data
        $size = $request["no"];

        //Save the data
        for ($i=0; $i<$size; $i++)
        {
            $score = $request["feedback_answer_".($i+1)];

            if ($score == null)
            {
                $isAnswer = false;
                break;
            }
        }
        //Return the value
        return $isAnswer;
    }

    public function loadFeedbackQuestions()
    {
        return FeedbackQuestion::all();
    }

    public function storeFeedbackAnswer(Request $request)
    {
        //Get the data
        $size = $request["no"];

        //Save the data
        for ($i=0; $i<$size; $i++)
        {
            $score = $request["feedback_answer_".($i+1)];

            $this->saveFeedback([
                        'user_id' => 1, // get user id from real user later
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
