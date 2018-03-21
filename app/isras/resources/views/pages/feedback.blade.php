@extends('layouts.app')

@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">Feedback List</h2>
        <br>
        <!-- START THE FEATURETTES -->

        {{--  <div class="custom-content">  --}}
        <table class="feedback-tbl">
            <tr>
                <th style="text-align: center">No</th>
                <th>Question</th>
                <th colspan="5" style="text-align: center">Answer</th>
            </tr>
            <tr>
                <td style="background-color: #e4e5e9;"></td>
                <td style="background-color: #e4e5e9;"></td>
                <td class="feedback-tbl-answer">Strongly Disagree</td>
                <td class="feedback-tbl-answer">Disagree</td>
                <td class="feedback-tbl-answer">Neutral</td>
                <td class="feedback-tbl-answer">Agree</td>
                <td class="feedback-tbl-answer">Strongly Agree</td>
            </tr>
            <tr>
                <td style="text-align: center">1</td>
                <td>Say what you want to say as long as you are happy</td>
                <td style="text-align: center"><input type="radio" name="feedback-answer" value="1"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer" value="2"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer" value="3"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer" value="4"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer" value="5"></td>
            </tr>
            <tr>
                <td style="text-align: center">2</td>
                <td>Say what you want to say as long as you are happy</td>
                <td style="text-align: center"><input type="radio" name="feedback-answer2" value="1"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer2" value="2"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer2" value="3"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer2" value="4"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer2" value="5"></td>
            </tr>
            <tr>
                <td style="text-align: center">3</td>
                <td>Say what you want to say as long as you are happy</td>
                <td style="text-align: center"><input type="radio" name="feedback-answer3" value="1"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer3" value="2"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer3" value="3"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer3" value="4"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer3" value="5"></td>
            </tr>
            <tr>
                <td style="text-align: center">4</td>
                <td>Say what you want to say as long as you are happy</td>
                <td style="text-align: center"><input type="radio" name="feedback-answer4" value="1"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer4" value="2"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer4" value="3"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer4" value="4"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer4" value="5"></td>
            </tr>
            <tr>
                <td style="text-align: center">5</td>
                <td>Say what you want to say as long as you are happy</td>
                <td style="text-align: center"><input type="radio" name="feedback-answer5" value="1"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer5" value="2"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer5" value="3"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer5" value="4"></td>
                <td style="text-align: center"><input type="radio" name="feedback-answer5" value="5"></td>
            </tr>
        </table>
        {{--  </div>  --}}
        <br><br>
        <form class="form-inline mt-2 mt-md-0">
            <button class="btn btn-lg btn-primary" type="submit">Back</button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-lg btn-primary" type="submit">Submit Feedback</button>
        </form>
        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
    </div>
@endsection