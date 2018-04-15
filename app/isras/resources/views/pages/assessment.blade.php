@extends('layouts.app')

@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">I-SRAS</h2>
        <br><br>

        <a href='/user/assessment/start' class='btn btn-lg btn-primary'>Do Assessment</a>

        <h2 class="featurette-heading-2" style="margin-top: 20px;"><u>Assessment History</u></h2>
        <br>
        {{--  <div class="custom-content">  --}}
        <table class="assessment-tbl">
            <tr>
                <th style="text-align: center">No</th>
                <th style="text-align: center">Assessment Id</th>
                <th>Company Name</th>
                <th style="text-align: center">Score</th>
                <th style="text-align: center">Date</th>
            </tr>
            <tr>
                <td class="assessment-tbl-item">1</td>
                <td class="assessment-tbl-item">53</td>
                <td>Company Marvel Infinity War</td>
                <td class="assessment-tbl-item">65%</td>
                <td class="assessment-tbl-item">13/03/2018</td>
            </tr>
            <tr>
                <td class="assessment-tbl-item">2</td>
                <td class="assessment-tbl-item">63</td>
                <td>Company Niaga Sdn Bhd</td>
                <td class="assessment-tbl-item">75%</td>
                <td class="assessment-tbl-item">23/03/2018</td>
            </tr>
            <tr>
                <td class="assessment-tbl-item">3</td>
                <td class="assessment-tbl-item">73</td>
                <td>Company Besar-Besar Sdn Bhd</td>
                <td class="assessment-tbl-item">85%</td>
                <td class="assessment-tbl-item">24/03/2018</td>
            </tr>
            <tr>
                <td class="assessment-tbl-item">4</td>
                <td class="assessment-tbl-item">83</td>
                <td>Company Ada Aku Kisah Sdn Bhd</td>
                <td class="assessment-tbl-item">95%</td>
                <td class="assessment-tbl-item">25/03/2018</td>
            </tr>
            <tr>
                <td class="assessment-tbl-item">5</td>
                <td class="assessment-tbl-item">33</td>
                <td>Company Mak Kau Hijau Sdn Bhd</td>
                <td class="assessment-tbl-item">35%</td>
                <td class="assessment-tbl-item">26/03/2018</td>
            </tr>
            <tr>
                <td class="assessment-tbl-item">6</td>
                <td class="assessment-tbl-item">53</td>
                <td>Company Marvel Infinity War</td>
                <td class="assessment-tbl-item">65%</td>
                <td class="assessment-tbl-item">13/03/2018</td>
            </tr>
            <tr>
                <td class="assessment-tbl-item">7</td>
                <td class="assessment-tbl-item">63</td>
                <td>Company Niaga Sdn Bhd</td>
                <td class="assessment-tbl-item">75%</td>
                <td class="assessment-tbl-item">23/03/2018</td>
            </tr>
            <tr>
                <td class="assessment-tbl-item">8</td>
                <td class="assessment-tbl-item">73</td>
                <td>Company Besar-Besar Sdn Bhd</td>
                <td class="assessment-tbl-item">85%</td>
                <td class="assessment-tbl-item">24/03/2018</td>
            </tr>
            <tr>
                <td class="assessment-tbl-item">9</td>
                <td class="assessment-tbl-item">83</td>
                <td>Company Ada Aku Kisah Sdn Bhd</td>
                <td class="assessment-tbl-item">95%</td>
                <td class="assessment-tbl-item">25/03/2018</td>
            </tr>
            <tr>
                <td class="assessment-tbl-item">10</td>
                <td class="assessment-tbl-item">33</td>
                <td>Company Mak Kau Hijau Sdn Bhd</td>
                <td class="assessment-tbl-item">35%</td>
                <td class="assessment-tbl-item">26/03/2018</td>
            </tr>
        </table>
        {{--  </div>  --}}
        <!-- Better do Pagination -->
        <hr class="featurette-divider">
    </div>
@endsection