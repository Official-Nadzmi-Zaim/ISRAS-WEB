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
        <br>
        {!! Form::open(['url' => '/user/assessment', 'method'=>'POST']) !!}
        <center>
        <div class="card" style="width: 50%;">
            <div class="card-container">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>CATEGORY</th>
                    <th class="text-center">SCORE</th>
                    <th class="text-center">FULL SCORE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>COMMUNITY</b></td>
                    <td class="text-center">{{$Assessment->getCommunityScore()}}</td>
                    <td class="text-center">{{$Assessment->getCommunityFullScore()}}</td>
                </tr>
                <tr>
                    <td><b>WORKPLACE</b></td>
                    <td class="text-center">{{$Assessment->getWorkplaceScore()}}</td>
                    <td class="text-center">{{$Assessment->getWorkplaceFullScore()}}</td>
                </tr>
                <tr>
                    <td><b>ENVIRONMENTAL</b></td>
                    <td class="text-center">{{$Assessment->getEnvironmentalScore()}}</td>
                    <td class="text-center">{{$Assessment->getEnvironmentalFullScore()}}</td>
                </tr>
                <tr>
                    <td><b>MARKETPLACE</b></td>
                    <td class="text-center">{{$Assessment->getMarketplaceScore()}}</td>
                    <td class="text-center">{{$Assessment->getMarketplaceFullScore()}}</td>
                </tr>
            </tbody>
        </table>
  
        <br><br>
     
        <table class="table table-dark">
            <tbody>
                <tr>
                    <td><b>I-SRAS Score</b></td>
                    <td class="text-center">{{$Assessment->getIsrasScore()}}</td>
                    <td class="text-center">{!!$Assessment->getIsrasLevel()!!}</td>
                </tr>
                <tr>
                    <td><b>Vital Score</b></td>
                    <td class="text-center">{{$Assessment->getVitalScore()}}</td>
                    <td class="text-center">{!!$Assessment->getVitalLevel()!!}</td>
                </tr>
                <tr>
                    <td><b>Recommended Score</b></td>
                    <td class="text-center">{{$Assessment->getRecommendedScore()}}</td>
                    <td class="text-center">{!!$Assessment->getRecommendedLevel()!!}</td>
                </tr>
            </tbody>
        </table>
    
        <br><br>
        <input type="hidden" name="score_1" value="{{$Assessment->getCommunityScore()}}" />
        <input type="hidden" name="score_2" value="{{$Assessment->getWorkplaceScore()}}" />
        <input type="hidden" name="score_3" value="{{$Assessment->getEnvironmentalScore()}}" />
        <input type="hidden" name="score_4" value="{{$Assessment->getMarketplaceScore()}}" />
        <input type="hidden" name="score_5" value="{{$Assessment->getIsrasScore()}}" />
        <input type="hidden" name="score_6" value="{{$Assessment->getVitalScore()}}" />
        <input type="hidden" name="score_7" value="{{$Assessment->getRecommendedScore()}}" />
        {{-- <a href='user/assessment' class='btn btn-lg btn-primary btn-block' style="width: 50%">Finish</a> --}}
        {{Form::submit('Finish', ['class'=>'btn btn-primary btn-lg', 'style'=>'width:100%'])}}
            </div>
        </div>
        </center>
    </div>
    <hr class="featurette-divider">
@endsection
