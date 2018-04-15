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
                <h4><b>{{ "CATEGORY $id : $category" }}</b></h4>
            </div>
        </div>
        <br>
        @php $q_count = 0 @endphp
        @php $no = 1 @endphp
        <!-- Dynamic body guna for loop nanti-->
        @for ($i=0; $i<sizeof($arr_key_area); $i++)
        @php $q_num = 0 @endphp
        <div class="card"> 
            <div class="card-container"> 
                <h6><b>{{ "KEY AREA ".($i+1)." : ".$arr_key_area[$i] }}</b></h6><!-- Key area title -->
                <br>
                <!-- Dynamic for question title -->
                @for ($j=0; $j<sizeof($arr_title[$i]); $j++)
                <p><i>{{$arr_title[$i][$j]}}</i></p>
                <table border="1" cellpadding="5" style="width: 100%">
                    <!-- Dynamic table row for question -->
                    @for ($k=0; $k<$arr_questions_count[$q_count]; $k++)
                    <tr>
                        <td style="text-align: center">{{ $no++ }}</td><td>{{ $arr_questions[$i][$q_num] }}</td><td></td>
                    </tr>
                    @php $q_num++ @endphp
                    @endfor
                </table>
                <br>
                @php $q_count++ @endphp
                @endfor
            </div>
        </div>
        <br>
        @endfor
        <div style="width: 100%;">
        <div style="float:left">{{Form::submit('Previous', ['class'=>'btn btn-primary btn-lg'])}}</div>
        <div style="float:right">{{Form::submit('Next/Finish', ['class'=>'btn btn-primary btn-lg'])}}</div>
        </div>
    </div>
    <hr class="featurette-divider">
@endsection