@extends('layouts.app')

<style>
    .pagination {
        justify-content: center;
    }

    .hide {
        visibility: hidden;
    }

    .small {
        width: 5%;
    }

    .medium {
        width: 10%;
    }
</style>
@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">I-SRAS</h2>
        <br>
        @include ('inc.message')
        <br>

        <a href={!! url('/user/assessment/start') !!} class='btn btn-lg btn-primary'>Do Assessment</a>
        
        <h2 class="featurette-heading-2" style="margin-top: 20px;"><u>Assessment History</u></h2>
        <br>

        @if (count($assessment) > 0)
        {{-- <div class="container-fluid"> --}}
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th class="text-center medium">No</th>
                    <th class="text-center medium">Assessment Id</th>
                    <th class="text-left">Company Name</th>
                    <th class="text-center medium">Score</th>
                    <th class="text-center medium">Date</th>
                    <th class="text-center medium">Action</th>
                </tr>
                </thead>
                <tbody>
                    @for ($i=0; $i<10; $i++)
                        @if (isset($assessment[$i]))
                            <tr>
                                <td class="text-center">{{$i+1}}</td>
                                <td class="text-center">{{$assessment[$i]->getAssessmentId()}}</td>
                                <td class="text-left">{{$assessment[$i]->getAssessmentCompany()}}</td>
                                <td class="text-center">{{$assessment[$i]->getAssessmentScore()}}</td>
                                <td class="text-center">{{ date('d/m/Y',strtotime($assessment[$i]->getAssessmentDate()))}}</td>
                                <td class="text-center"><a href={!! url('/user/report/' . $assessment[$i]->getAssessmentId()) !!} class = 'btn btn-primary'>Print Result</a></td>
                            </tr>
                        @else
                            <tr>
                                <td class="text-center hide">1</td>
                                <td class="text-center hide"></td>
                                <td class="text-left hide"></td>
                                <td class="text-center hide"></td>
                                <td class="text-center hide"></td>
                                <td class="text-center hide"></td>
                            </tr>
                        @endif
                    @endfor
                </tbody>
            </table>
        {{-- </div> --}}
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