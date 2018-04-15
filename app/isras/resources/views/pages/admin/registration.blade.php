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
        <h2 class="featurette-heading" style="margin-top: 20px;">Registration</h2>
        <br>
        <!-- START THE FEATURETTES -->
        {!! Form::open(['url' => '/admin/registration', 'method'=>'POST', 'class'=>'needs-validation', 'novalidate'=>'novalidate']) !!}
        <div class="card">
            <div class="card-container">
              <h5><b>User Description</b></h5> 
              {{Form::text('staff_id', '', ['class'=>'form-control', 'placeholder'=>'Staff Id', 'required' => 'required'])}}
              <div class="invalid-feedback">
                 Valid staff id is required.
              </div>
              <br>
              {{Form::text('admin_name', '', ['class'=>'form-control', 'placeholder'=>'Name', 'required' => 'required'])}}
              <div class="invalid-feedback">
                 Valid name is required.
              </div>
              <br>
              {{Form::email('admin_email', '', ['class'=>'form-control', 'placeholder'=>'Email eg:youremail@domain.com', 'required' => 'required'])}}
              <div class="invalid-feedback">
                 Valid email is required.
              </div>
            </div>
        </div>
        <br>
        {{Form::submit('Submit', ['class'=>'btn btn-primary btn-lg'])}}
        {!! Form::close() !!}
        <hr class="featurette-divider">
    </div>
@endsection