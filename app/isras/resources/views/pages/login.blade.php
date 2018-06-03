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
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="featurette-heading" style="margin-top: 20px;">Login</h2>
                <br>
                <!-- START THE FEATURETTES -->
                {!! Form::open(['url' => '/login', 'method'=>'POST', 'class'=>'needs-validation', 'novalidate'=>'novalidate']) !!}
                    <div class="card">
                        <div class="card-container">
                            <h5><b>Login Description</b></h5>
                            {{Form::email('email', '', ['class'=>'form-control', 'placeholder'=>'Email eg:youremail@domain.com', 'required' => 'required'])}}
                            <div class="invalid-feedback">
                                Valid email is required.
                            </div>
                            <br />
                            {{Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password', 'required' => 'required'])}}
                            <div class="invalid-feedback">
                                Valid password is required.
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{Form::submit('Login', ['class'=>'btn btn-primary btn-lg form-control'])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
@endsection
