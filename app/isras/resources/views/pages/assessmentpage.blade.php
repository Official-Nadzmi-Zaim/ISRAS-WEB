@extends('layouts.app')

<style>
    .card {
    /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }

    .card-container {
        padding-top: 15px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 10px;
    }
</style>

@section('content')
    <div class="container marketing">
        @extends('pages.assessmentheader')
        <br><br>
        <div class="card"> 
            <div class="card-container"> <!-- Title -->
                <h4><b>{{ "CATEGORY 1 : COMMUNITY" }}</b></h4>
            </div>
        </div>
        <br>
        <!-- Dynamic body guna for loop nanti-->
        <div class="card"> 
            <div class="card-container"> 
                <h6><b>{{ "KEY AREA 1 : SOCIAL DEVELOPMENT" }}</b></h6><!-- Key area title -->
                <br>
                <!-- Dynamic for question title -->
                <p><i>Contribution for the needy</i></p>
                <table border="1" cellpadding="5" style="width: 100%">
                    <!-- Dynamic table row for question -->
                    <tr>
                        <td style="text-align: center">1</td><td>Donate to hardcore poor Muslims</td><td></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div style="width: 100%;">
        <div style="float:left">{{Form::submit('Previous', ['class'=>'btn btn-primary btn-lg'])}}</div>
        <div style="float:right">{{Form::submit('Next/Finish', ['class'=>'btn btn-primary btn-lg'])}}</div>
        </div>
    </div>
    <hr class="featurette-divider">
@endsection