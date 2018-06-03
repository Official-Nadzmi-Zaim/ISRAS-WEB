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
        <h2 class="featurette-heading" style="margin-top: 20px;">Add New Blog</h2>
        <br>
        <!-- START THE FEATURETTES -->
        {!! Form::open(['url' => '/admin/blog/add', 'method'=>'POST', 'class'=>'needs-validation', 'novalidate'=>'novalidate']) !!}
        <div class="card">
            <div class="card-container">
              <h5><b>Blog Title</b></h5> 
              {{Form::text('blog_title', '', ['class'=>'form-control', 'placeholder'=>'Blog Title', 'required' => 'required'])}}
              <div class="invalid-feedback">
                 Valid blog title is required.
              </div>
              <br>
              <h5><b>Blog Description</b></h5> 
              {{Form::textarea('blog_desc', '', ['class'=>'form-control', 'placeholder'=>'Blog Description', 'required' => 'required'])}}
              <div class="invalid-feedback">
                 Valid blog description is required.
              </div>
            </div>
        </div>
        <br>
        {{Form::submit('Submit', ['class'=>'btn btn-primary btn-lg'])}}
        {!! Form::close() !!}
        <hr class="featurette-divider">
    </div>
@endsection