@extends('layouts.app')

<style>
    .card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
  }

  /* On mouse-over, add a deeper shadow */
  .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }

  .card-container {
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
  }
</style>

@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">Update Feedback Question</h2>
        <br>
        <!-- START THE FEATURETTES -->
        {!! Form::open(['url' => '/admin/feedback/update', 'method'=>'POST', 'class'=>'needs-validation', 'novalidate'=>'novalidate', 'files' => 'true']) !!}
        <div class="card">
            <div class="card-container">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <b>Created at: </b>{{ $questionData['created_at'] }}<br />
                            <b>Updated at: </b>{{ $questionData['updated_at'] }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <b>Question Statement</b>
                    {{ Form::hidden('feedback_question_id', $questionData['question_id']) }}
                    {{ Form::textarea('feedback_question_description', $questionData['question_description'], ['class'=>'form-control', 'placeholder'=>'Question statement', 'required' => 'required']) }}
                    <div class="invalid-feedback">
                        Valid assessment question statement is required.
                    </div>
                </div>
            </div>
        </div>
        <br />
        {{Form::submit('Submit', ['class'=>'btn btn-primary btn-lg'])}}
        {!! Form::close() !!}
        <hr class="featurette-divider">
    </div>
@endsection
