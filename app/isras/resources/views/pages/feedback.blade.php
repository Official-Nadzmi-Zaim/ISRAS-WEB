@extends('layouts.app')

@section('content')
<div class="container marketing">
    <h2 class="featurette-heading" style="margin-top: 20px;">Feedback</h2>
    <br>
    <!-- START THE FEATURETTES -->
    {!! Form::open(['url' => '/user/feedback', 'method'=>'POST']) !!}
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <td style="width: 5%" class="text-center">No</td>
                <td style="width: 45%">Questions</td>
                <td style="width: 45%" class="text-center" colspan="5">Answer</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td style="width : 10%" class="text-center align-middle">Strongly Disagree</td>
                <td style="width : 10%" class="text-center align-middle">Disagree</td>
                <td style="width : 10%" class="text-center align-middle">Neutral</td>
                <td style="width : 10%" class="text-center align-middle">Agree</td>
                <td style="width : 10%" class="text-center align-middle">Strongly Agree</td>
            </tr>
            <!-- Load Feedback Questions Here -->
            @for ($i=0; $i<sizeof($arr_feedback); $i++)
            <tr>
                <td class="text-center">{{$i+1}}</td>
                <td>{{$arr_feedback[$i]->description}}</td>
                @if (isset($arr_answer))
                    <td class="text-center"><input type="radio" name="feedback_answer_{{$i+1}}" value="1" <?php echo ($arr_answer[$i]==1)?'checked':'' ?>></td>
                    <td class="text-center"><input type="radio" name="feedback_answer_{{$i+1}}" value="2" <?php echo ($arr_answer[$i]==2)?'checked':'' ?>></td>
                    <td class="text-center"><input type="radio" name="feedback_answer_{{$i+1}}" value="3" <?php echo ($arr_answer[$i]==3)?'checked':'' ?>></td>
                    <td class="text-center"><input type="radio" name="feedback_answer_{{$i+1}}" value="4" <?php echo ($arr_answer[$i]==4)?'checked':'' ?>></td>
                    <td class="text-center"><input type="radio" name="feedback_answer_{{$i+1}}" value="5" <?php echo ($arr_answer[$i]==5)?'checked':'' ?>></td>
                @else
                    <td class="text-center"><input type="radio" name="feedback_answer_{{$i+1}}" value="1"></td>
                    <td class="text-center"><input type="radio" name="feedback_answer_{{$i+1}}" value="2"></td>
                    <td class="text-center"><input type="radio" name="feedback_answer_{{$i+1}}" value="3"></td>
                    <td class="text-center"><input type="radio" name="feedback_answer_{{$i+1}}" value="4"></td>
                    <td class="text-center"><input type="radio" name="feedback_answer_{{$i+1}}" value="5"></td>
                @endif
            </tr>
            @endfor
        </tbody>
    </table>
    <br>
    <button class="btn btn-lg btn-primary" type="button" data-toggle="modal" data-target="#myFeedbackModal">Submit Feedback</button>
    <button type="submit" style="visibility: hidden">Submit</button>
    <!-- MODAL -->
    <div class="modal" id="myFeedbackModal">
        <div class="modal-dialog">
            <div class="modal-content">
                {{-- <div class="modal-header">
                    <h5 class="modal-title">Attention</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div> --}}
                <div class="modal-body">
                    Confirm to submit your feedback?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" data-dismiss="modal" onclick="javascript:submit();">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}
    <br>
    <!-- MODAL -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Attention</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Please complete all the feedback questions before submitting. Thank you
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection