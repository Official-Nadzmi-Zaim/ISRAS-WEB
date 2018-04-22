@extends('layouts.app')

<style>
  .card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    display: table;
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

  .table-result {
      border: none;
      margin: 0 auto;
  }

  .table-result th, td {
      padding: 15px;
  }

  .table-score {
      margin: 0 auto;
  }

  .table-score th, td {
      padding: 15px;
      text-align: center;
  }

</style>
@section('content')
    <div class="container marketing">
        <center><h2 class="featurette-heading" style="margin-top: 20px;">I-SRAS Assessment Score Report</h2></center>
        <br><br>
        {!! Form::open(['url' => '/user/assessment', 'method'=>'POST']) !!}
        <div>
            <table class="table-score" border="2">
                <thead>
                    <tr>
                        <th style="text-align:left; ">CATEGORY</th>
                        <th>SCORE</th>
                        <th>FULL SCORE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align:left; font-weight: bold;"><a href=''>COMMUNITY</a></td>
                        <td>{{ $score_community }}</td>
                        <td>{{ $total_community }}</td>
                    </tr>
                    <tr>
                        <td style="text-align:left; font-weight: bold;"><a href=''>WORKPLACE</a></td>
                        <td>{{ $score_workplace }}</td>
                        <td>{{ $total_workplace }}</td>
                    </tr>
                    <tr>
                        <td style="text-align:left; font-weight: bold;"><a href=''>ENVIRONMENTAL</a></td>
                        <td>{{ $score_environmental }}</td>
                        <td>{{ $total_environmental }}</td>
                    </tr>
                    <tr>
                        <td style="text-align:left; font-weight: bold;"><a href=''>MARKETPLACE</a></td>
                        <td>{{ $score_marketplace }}</td>
                        <td>{{ $total_marketplace }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <div class="card">
            <div class="card-container">
                <table class="table-result">
                    <tr>
                        <td style="font-size: 16pt; font-weight: bold; text-align: left;">I-SRAS Score</td>
                        <td>{{ $score_isras }}</td>
                        <input type="hidden" name="score_isras" value="<?php echo $score_isras;?>" />
                        <td style="color: green; font-weight: bold;">HIGH</td>
                    </tr>
                    <tr>
                        <td style="font-size: 16pt; font-weight: bold; text-align: left;">Vital Score</td>
                        <td>{{ $score_vital }}</td>
                        <td style="color: green; font-weight: bold;">HIGH</td>
                    </tr>
                    <tr>
                        <td style="font-size: 16pt; font-weight: bold; text-align: left;">Recommended Score</td>
                        <td>{{ $score_recommended }}</td>
                        <td style="color: green; font-weight: bold;">HIGH</td>
                    </tr>
                </table>
            </div>
        </div>
        <br><br>
        {{-- <a href='user/assessment' class='btn btn-lg btn-primary btn-block' style="width: 50%">Finish</a> --}}
        <center>{{Form::submit('Finish', ['class'=>'btn btn-primary btn-lg', 'style'=>'width:50%'])}}</center>
    </div>
    <hr class="featurette-divider">
@endsection
