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

    #tooltip{
        display: none;
        cursor: pointer;
        left: 100px;
        top: 50px;
        border: solid 1px #eee;
        background-color: #ffffdd;
        padding: 10px;
        z-index: 1000;
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
        {{-- {!! Form::open(['url' => '/user/assessment/page_'.($id+1), 'method'=>'GET']) !!} --}}
        {!! Form::open(['url' => '/user/assessment/page_'.($id+1), 'method'=>'POST', 'class'=>'needs-validation', 'novalidate'=>'novalidate']) !!}
        {{ Form::hidden('curr_id', $id) }}
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td><b>Yes</b></td>
                        <td><b>No</b></td>
                        <td></td>
                    </tr>
                    @for ($k=0; $k<$arr_questions_count[$q_count]; $k++)
                    <tr>
                        <td style="text-align: center">{{ $no++ }}</td>
                        <td>{{ $arr_questions[$i][$q_num] }}</td>

                        @if ($choice == 0)
                            @if (!empty($arr_rdo_previous))
                                @if ($arr_rdo_previous[$no-1] != null)
                                    @if ($arr_rdo_previous[$no-1] == 1)
                                        <td><input type="radio" name="radio_{{$no-1}}" value=1 checked></td> 
                                        <td><input type="radio" name="radio_{{$no-1}}" value=0></td> 
                                    @else
                                        <td><input type="radio" name="radio_{{$no-1}}" value=1></td> 
                                        <td><input type="radio" name="radio_{{$no-1}}" value=0 checked></td>
                                    @endif
                                @else
                                    <td><input type="radio" name="radio_{{$no-1}}" value=1></td> 
                                    <td><input type="radio" name="radio_{{$no-1}}" value=0></td> 
                                @endif 
                            @else
                                <td><input type="radio" name="radio_{{$no-1}}" value=1></td> 
                                <td><input type="radio" name="radio_{{$no-1}}" value=0></td> 
                            @endif 
                        @else
                            @if (!empty($arr_rdo_next))
                                @if ($arr_rdo_next[$no-1] != null)
                                    @if ($arr_rdo_next[$no-1] == 1)
                                        <td><input type="radio" name="radio_{{$no-1}}" value=1 checked></td> 
                                        <td><input type="radio" name="radio_{{$no-1}}" value=0></td> 
                                    @else
                                        <td><input type="radio" name="radio_{{$no-1}}" value=1></td> 
                                        <td><input type="radio" name="radio_{{$no-1}}" value=0 checked></td> 
                                    @endif
                                @else
                                    <td><input type="radio" name="radio_{{$no-1}}" value=1></td> 
                                    <td><input type="radio" name="radio_{{$no-1}}" value=0></td> 
                                @endif 
                            @else
                                <td><input type="radio" name="radio_{{$no-1}}" value=1></td> 
                                <td><input type="radio" name="radio_{{$no-1}}" value=0></td> 
                            @endif 
                        @endif
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
        <input type="hidden" name="num" value="<?php echo $no;?>" />
        <div style="width: 100%;">
        @if ($id != 1) 
            <div style="float:left"><a href="/user/assessment/page_{{$id-1}}" class="btn btn-primary btn-lg">Previous</a></div>
        @endif
        @if ($id != 4)
            <div style="float:right">{{Form::submit('Next', ['class'=>'btn btn-primary btn-lg'])}}</div>
        @else
            <div style="float:right">{{Form::submit('Finish', ['class'=>'btn btn-primary btn-lg'])}}</div>
        @endif
        </div>
        {{ Form::close() }}
    </div>
    <hr class="featurette-divider">
@endsection