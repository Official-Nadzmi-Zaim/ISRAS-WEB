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
        <div class="row">
            <div class="col-md-12">
                <h2 class="featurette-heading" style="margin-top: 20px;">Update Assessment Question</h2>
                <br />
                <!-- START THE FEATURETTES -->
                {!! Form::open(['url' => '/admin/assessment/update', 'method'=>'POST', 'class'=>'needs-validation', 'novalidate'=>'novalidate', 'files' => 'true']) !!}
                {!! Form::hidden('assessment_question_id', $questionData['question_id'], []) !!}
                <div class="card">
                    <div class="card-container">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <b>Created at: </b>{!! $questionData['created_at'] !!}<br />
                                    <b>Updated at: </b>{!! $questionData['updated_at'] !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <!-- todo - letaka default value utk setiap dropdown -->
                            <b>Question Type</b>
                            {{Form::select('assessment_question_type', $formData['question_type'], null, ['class'=>'form-control', 'required' => 'required'])}}
                            <div class="invalid-feedback">
                                Valid assessment question type is required.
                            </div>
                        </div>
                        <div class="form-group">
                            <b>Question Category</b>
                            {{Form::select('assessment_question_category', $formData['question_category'], null, ['class'=>'form-control', 'required' => 'required'])}}
                            <div class="invalid-feedback">
                                Valid assessment question category is required.
                            </div>
                        </div>
                        <div class="form-group">
                            <b>Question Key Area</b>
                            {{Form::select('assessment_question_key_area', $formData['question_key_area'], null, ['class'=>'form-control', 'required' => 'required'])}}
                            <div class="invalid-feedback">
                                Valid assessment question key area is required.
                            </div>
                        </div>
                        <div class="form-group">
                            <b>Question Title</b>
                            {{Form::select('assessment_question_title', $formData['question_title'], null, ['class'=>'form-control', 'required' => 'required'])}}
                            <div class="invalid-feedback">
                                Valid assessment question title is required.
                            </div>
                        </div>
                        <div class="form-group">
                            <b>Question Statement</b>
                            {{Form::textarea('assessment_question_statement', $questionData['question_statement'], ['class'=>'form-control', 'placeholder'=>'Question statement', 'required' => 'required'])}}
                            <div class="invalid-feedback">
                                Valid assessment question statement is required.
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                {{Form::submit('Update Question', ['class'=>'btn btn-primary btn-lg'])}}
                {!! Form::close() !!}
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
@endsection