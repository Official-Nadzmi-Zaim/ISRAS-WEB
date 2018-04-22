@extends('layouts.app')

@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading">I-SRAS</h2>
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
            @for ($i=0; $i<sizeof($AssessmentResult); $i++)
                <tr>
                    <td class="assessment-tbl-item">{{$i+1}}</td>
                    <td class="assessment-tbl-item">{{ $AssessmentResult[$i]->id }}</td>
                    <td>Company Marvel Infinity War</td>
                    <td class="assessment-tbl-item">{{ $AssessmentResult[$i]->result }}</td>
                    <td class="assessment-tbl-item">{{ date('d/m/Y',strtotime($AssessmentResult[$i]->created_at)) }}</td>
                </tr>
            @endfor
        </table>
        {{--  </div>  --}}
        <!-- Better do Pagination -->
        <hr class="featurette-divider">
    </div>
@endsection