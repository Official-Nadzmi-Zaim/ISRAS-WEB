@extends('layouts.app')
<style>

</style>
<script>
</script>
@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">Feedback List</h2>
        <br>
        <!-- START THE FEATURETTES -->

        {{--  <div class="custom-content">  --}}
        {!! Form::open(['url' => '/user/feedback', 'method'=>'POST', 'class'=>'needs-validation', 'novalidate'=>'novalidate', 'onsubmit'=>'confirm("Are you sure?")']) !!}
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
            @for ($i=0; $i<sizeof($arr_feedback); $i++)
            <tr>
                <td style="text-align: center">{{$i+1}}</td>
                <td>{{$arr_feedback[$i]->description}}</td>
                <td style="text-align: center"><input type="radio" name="feedback_answer_{{$i+1}}" value="1"></td>
                <td style="text-align: center"><input type="radio" name="feedback_answer_{{$i+1}}" value="2"></td>
                <td style="text-align: center"><input type="radio" name="feedback_answer_{{$i+1}}" value="3"></td>
                <td style="text-align: center"><input type="radio" name="feedback_answer_{{$i+1}}" value="4"></td>
                <td style="text-align: center"><input type="radio" name="feedback_answer_{{$i+1}}" value="5"></td>
            </tr>
            @endfor
        </table>
        {{--  </div>  --}}
        <br><br>
        <input type="hidden" name="no" value="<?php echo sizeof($arr_feedback);?>" />
        {{-- <button class="btn btn-lg btn-primary" type="submit">Back</button>&nbsp;&nbsp;&nbsp; --}}
        <button class="btn btn-lg btn-primary" type="submit">Submit Feedback</button>
        {{ Form::close() }}
        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
    </div>
@endsection