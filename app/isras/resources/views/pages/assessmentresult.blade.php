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
                        <td>39</td>
                        <td>44</td>
                    </tr>
                    <tr>
                        <td style="text-align:left; font-weight: bold;"><a href=''>WORKPLACE</a></td>
                        <td>75</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="text-align:left; font-weight: bold;"><a href=''>ENVIRONMENTAL</a></td>
                        <td>33</td>
                        <td>33</td>
                    </tr>
                    <tr>
                        <td style="text-align:left; font-weight: bold;"><a href=''>MARKETPLACE</a></td>
                        <td>31</td>
                        <td>34</td>
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
                        <td>178</td>
                        <td style="color: green; font-weight: bold;">HIGH</td>
                    </tr>
                    <tr>
                        <td style="font-size: 16pt; font-weight: bold; text-align: left;">Vital Score</td>
                        <td>106</td>
                        <td style="color: green; font-weight: bold;">HIGH</td>
                    </tr>
                    <tr>
                        <td style="font-size: 16pt; font-weight: bold; text-align: left;">Recommended Score</td>
                        <td>76</td>
                        <td style="color: green; font-weight: bold;">HIGH</td>
                    </tr>
                </table>
            </div>
        </div>
        <br><br>
        <center><a href='' class='btn btn-lg btn-primary btn-block' style="width: 50%">Finish</a></center>
    </div>
    <hr class="featurette-divider">
@endsection
