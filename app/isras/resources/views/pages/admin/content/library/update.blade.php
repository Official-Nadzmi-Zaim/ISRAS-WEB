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
        <h2 class="featurette-heading" style="margin-top: 20px;">Add New Book/Reference</h2>
        <br>
        <!-- START THE FEATURETTES -->
        {!! Form::open(['url' => '/admin/library/update', 'method'=>'POST', 'class'=>'needs-validation', 'novalidate'=>'novalidate', 'files' => 'true']) !!}
        <div class="card">
            <div class="card-container">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <b>Created at: </b>{!! $libraryData['created_at'] !!}<br />
                            <b>Updated at: </b>{!! $libraryData['updated_at'] !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <b>PDF/Image file</b>
                    {{Form::file('library_file', ['class' => 'form-control'])}}
                    <div class="invalid-feedback">
                        Valid file is required.
                    </div>
                </div>
                <div class="form-group">
                    <b>Title</b>
                    {{Form::text('library_title', $libraryData['title'], ['class'=>'form-control', 'placeholder'=>'Book/reference title', 'required' => 'required'])}}
                    <div class="invalid-feedback">
                        Valid title is required.
                    </div>
                </div>
                <div class="form-group">
                    <b>Description</b>
                    {{Form::textarea('library_description', $libraryData['description'], ['class'=>'form-control', 'placeholder'=>'Book/reference description', 'required' => 'required'])}}
                    <div class="invalid-feedback">
                        Valid description is required.
                    </div>
                </div>
                <div class="form-group">
                    <b>Publication</b>
                    {{Form::select('library_publication', $formData['publication'], null, ['class'=>'form-control', 'required' => 'required'])}}
                    <div class="invalid-feedback">
                        Valid publication is required.
                    </div>
                </div>
                <div class="form-group">
                    <b>Author</b>
                    {{Form::select('library_author', $formData['author'], null, ['class'=>'form-control', 'required' => 'required'])}}
                    <div class="invalid-feedback">
                        Valid publication is required.
                    </div>
                </div>
            </div>
        </div>
        <br />
        {{ Form::hidden('library_id', $libraryData['library_id']) }}
        {{Form::submit('Submit', ['class'=>'btn btn-primary btn-lg'])}}
        {!! Form::close() !!}
        <hr class="featurette-divider">
    </div>
@endsection
