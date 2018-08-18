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
        {!! Form::open(['url' => '/user/register', 'method'=>'POST', 'class'=>'needs-validation', 'novalidate'=>'novalidate']) !!}
        <div class="card">
            <div class="card-container">
              <h5><b>User Description</b></h5> 
              {{Form::text('user_name', '', ['class'=>'form-control', 'placeholder'=>'Name', 'required' => 'required'])}}
              <div class="invalid-feedback">
                 Valid name is required.
              </div>
              <br>
              {{Form::email('user_email', '', ['class'=>'form-control', 'placeholder'=>'Email eg:youremail@gmail.com', 'required' => 'required'])}}
              <div class="invalid-feedback">
                 Valid email is required.
              </div>
              <br>
              {{Form::password('user_password', ['class'=>'form-control', 'placeholder'=>'Password', 'required' => 'required'])}}
              <div class="invalid-feedback">
                 Valid password is required.
              </div>
              <br>
              {{Form::text('user_tel_no', '', ['class'=>'form-control', 'placeholder'=>'Telephone Number', 'required' => 'required'])}}
              <div class="invalid-feedback">
                 Valid telephone number is required.
              </div>
              <br>
              {{Form::text('user_fax_no', '', ['class'=>'form-control', 'placeholder'=>'Fax Number', 'required' => 'required'])}}
              <div class="invalid-feedback">
                 Valid fax number is required.
              </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-container">
                <h5><b>Company Description</b></h5> 
                {{Form::text('company_name', '', ['class'=>'form-control', 'placeholder'=>'Company Name', 'required' => 'required'])}}
                <div class="invalid-feedback">
                    Valid company name is required.
                </div>
                <br>
                {{Form::text('company_ref_no', '', ['class'=>'form-control', 'placeholder'=>'Company Reference Number', 'required' => 'required'])}}
                <div class="invalid-feedback">
                    Valid company reference number is required.
                </div>
                <br>
                {{Form::text('company_address_1', '', ['class'=>'form-control', 'placeholder'=>'Address 1', 'required' => 'required'])}}
                <div class="invalid-feedback">
                    Valid address is required.
                </div>
                <br>
                {{Form::text('company_address_2', '', ['class'=>'form-control', 'placeholder'=>'Address 2'])}}
                <br>
                {{Form::text('company_city', '', ['class'=>'form-control', 'placeholder'=>'City', 'required' => 'required'])}}
                <div class="invalid-feedback">
                    Valid city is required.
                </div>
                <br>
                {{Form::text('company_postcode', '', ['class'=>'form-control', 'placeholder'=>'Postcode', 'required' => 'required'])}}
                <div class="invalid-feedback">
                    Valid postcode is required.
                </div>
                <br>
                {{Form::select('company_country', ['M' => 'Malaysia', 'K' => 'Khazastan'], null, ['class'=>'form-control', 'style'=>'width:50%', 'required' => 'required', 'placeholder'=>'Select Country'])}}
                <div class="invalid-feedback">
                    Valid country is required.
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-container">
                <h5><b>Company Person In Charge</b></h5> 
                {{Form::text('pic_name', '', ['class'=>'form-control', 'placeholder'=>'Name', 'required' => 'required'])}}
                <div class="invalid-feedback">
                    Valid name is required.
                </div>
                <br>
                {{Form::email('pic_email', '', ['class'=>'form-control', 'placeholder'=>'Email eg:youremail@gmail.com', 'required' => 'required'])}}
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