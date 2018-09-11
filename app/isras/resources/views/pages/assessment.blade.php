@extends('layouts.app')

<style>
    .pagination {
        justify-content: center;
    }

    .hide {
        visibility: hidden;
    }
</style>
@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">I-SRAS</h2>
        <br><br>

        <a href={!! url('/user/assessment/start') !!} class='btn btn-lg btn-primary'>Do Assessment</a>
        
        <h2 class="featurette-heading-2" style="margin-top: 20px;"><u>Assessment History</u></h2>
        <br>

        @if (count($assessment) > 0)
        <div class="container-fluid">
            <table class="table">
                <thead class="thead-dark">
                <tr class="d-flex">
                    <th class="text-center col-1">No</th>
                    <th class="text-center col-2">Assessment Id</th>
                    <th class="text-left col-5">Company Name</th>
                    <th class="text-center col-1">Score</th>
                    <th class="text-center col-1">Date</th>
                    <th class="text-center col-2">Action</th>
                </tr>
                </thead>
                <tbody>
                    @for ($i=0; $i<10; $i++)
                        @if (isset($assessment[$i]))
                            <tr class="d-flex">
                                <td class="text-center col-1">{{$i+1}}</td>
                                <td class="text-center col-2">{{$assessment[$i]->getAssessmentId()}}</td>
                                <td class="text-left col-5">{{$assessment[$i]->getAssessmentCompany()}}</td>
                                <td class="text-center col-1">{{$assessment[$i]->getAssessmentScore()}}</td>
                                <td class="text-center col-1">{{ date('d/m/Y',strtotime($assessment[$i]->getAssessmentDate()))}}</td>
                                <td class="text-center col-2"><a href={!! url('/user/report/' . $assessment[$i]->getAssessmentId()) !!} class = 'btn btn-primary'>Print Result</a></td>
                            </tr>
                        @else
                            <tr class="d-flex">
                                <td class="text-center col-1 hide">1</td>
                                <td class="text-center col-2 hide"></td>
                                <td class="text-left col-5 hide"></td>
                                <td class="text-center col-1 hide"></td>
                                <td class="text-center col-1 hide"></td>
                                <td class="text-center col-2 hide"></td>
                            </tr>
                        @endif
                    @endfor
                </tbody>
            </table>
        </div>
        @else
            <table style="height: 50%; width: 100%">
                <tbody>
                    <tr>
                    <td class="align-middle text-center"><h3 class="text-center align-middle">Sorry. No record has been found</h3></td>
                    </tr>
                </tbody>
            </table>
        @endif

        <br>
        @if (count($assessment) > 10)
            {{ $paginated->render("pagination::bootstrap-4") }}
        @endif

        <hr class="featurette-divider">
    </div>
@endsection