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

    .assessment-question-tbl-item {
        width: 7.5%;
        text-align: center
    }

    .assessment-question-tbl-item-2 {
        width: 5%;
        text-align: center
    }

    .assessment-question-tbl td, .assessment-question-tbl th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .assessment-question-tbl {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    p {
        font-style: italic;
    }

    .vital {
        background-color: green;
    }

    .recommended
    {
        background-color: blue;
    }

    .type {
        width: 7%;
        vertical-align: middle;
    }
</style>
<script>
    function SubmitForm()
    {
        var isTrue = true;
        var size = <?php echo sizeof($AssessmentModel->assessment_questions); ?>;

        for (var i=0; i<size; i++)
        {
            var name = "radio_"+i;
            var radioValue = $("input[name='"+name+"']:checked").val();
            
            if (!radioValue)
            {
                isTrue = false;
                $("input[name='"+name+"']").focus();
                break;
            }
        }

        if (!isTrue)
        {
            $('#myModal').modal('toggle');
            return false;
        }
        else
        {
            return true;
        }
    }

    function NextPage()
    {
        $('#formAssessment').attr('action', "{!! route('assessment-page', [ 'id' => ($AssessmentModel->assessment_category_id + 1) ]) !!}");
    }

    function PreviousPage()
    {
        $('#formAssessment').attr('action', "{!! route('assessment-page', [ 'id' => ($AssessmentModel->assessment_category_id - 1) ]) !!}");
    }

    function ResultPage()
    {
        $('#formAssessment').attr('action', '{!! route('assessment-result') !!}');
    }
</script>
@section('content')
    <div class="container marketing">
        @extends('pages.assessmentheader')
        <br>
        <div class="card">
            <div class="card-container"><h4><b>CATEGORY {{ $AssessmentModel->assessment_category_id }} : {{ $AssessmentModel->assessment_category }}</b></h4></div>
        </div>
        <br>

        @if ($AssessmentModel->assessment_category_id == 4)
            {!! Form::open(['id' => 'formAssessment' , 'name' => 'formAssessment', 'method'=>'POST']) !!}
        @else
            {!! Form::open(['id' => 'formAssessment' , 'name' => 'formAssessment', 'method'=>'POST', 'onsubmit'=> 'return SubmitForm()' ]) !!}
        @endif

        <!--Create Key Area Card -->
        @php $i = 1 @endphp
        @php $no = 1 @endphp
        @php $x = $AssessmentModel->assessment_key_area[0]->id @endphp
        @foreach ($AssessmentModel->assessment_key_area as $keyArea)
            <div class="card">
                <div class="card-container">
                    <h6><b>{{ "KEY AREA ".($i)." : ".$keyArea->name }}</b></h6>
                    @foreach ($AssessmentModel->assessment_area_title as $title)
                        @if ($title->key_area == $x)
                            <br>
                            <p>{{ $title->name }}</p>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th class="text-center type" ></th>
                                        <th class="text-left"></th>
                                        <th class="text-center type">Yes</th>
                                        <th class="text-center type">No</th>
                                    </tr>
                                    @foreach ($AssessmentModel->assessment_questions as $questions)
                                        @if ($questions->title == $title->title)
                                            <tr class="form-group">
                                                <td class="text-center">{{ $no }}</td>
                                                <td class="text-left">{{ $questions->statement}}</td>
                                                <td class="align-middle text-center <?php echo ($questions->type==1)?'vital':'recommended' ?>"><input class="form-control" value = 1 type="radio" name="radio_{{$no-1}}" <?php echo ($AssessmentModel->arr_rdo[$no-1]==1)?'checked':'' ?>/></td>
                                                <td class="align-middle text-center <?php echo ($questions->type==1)?'vital':'recommended' ?>"><input class="form-control" value = 2 type="radio" name="radio_{{$no-1}}" <?php echo ($AssessmentModel->arr_rdo[$no-1]==2)?'checked':'' ?>/></td>
                                            </tr>
                                            @php $no++ @endphp
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    @endforeach
                </div>
            </div>
            <br>
            @php $i++ @endphp
            @php $x++ @endphp
        @endforeach
        
        <div style="width: 100%;">
            @if ($AssessmentModel->assessment_category_id > 1)
                <div style="float:left">{{Form::submit('Previous', ['class'=>'btn btn-primary btn-lg', 'onclick'=>'PreviousPage()'])}}</div>
            @endif

            @if ($AssessmentModel->assessment_category_id == 4)
                <div style="float:right">{{Form::submit('Finish', ['class'=>'btn btn-primary btn-lg', 'onclick'=>'ResultPage()'])}}</div>
            @else
                <div style="float:right">{{Form::submit('Next', ['class'=>'btn btn-primary btn-lg', 'onclick'=>'NextPage()'])}}</div>
            @endif
        </div>
        
        <input type="hidden" name="page" value="<?php echo $AssessmentModel->assessment_category_id;?>" />
        <input type="hidden" name="num" value="<?php echo sizeof($AssessmentModel->assessment_questions);?>" />
        {{ Form::close() }}
        {{-- {{ $AssessmentModel->assessment_questions }} --}}
    <hr class="featurette-divider">
    <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Attention</h5>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Please answer all the questions before you proceed to next page. Thank you.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection