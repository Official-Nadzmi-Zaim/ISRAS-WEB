@extends('layouts.app')

@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">Assessment Questions</h2>
        <br><br>

        <a href={!! url('/admin/form/assessment/add') !!} class='btn btn-lg btn-primary'>Add New Question</a>

        <h2 class="featurette-heading-2" style="margin-top: 20px;"><u>Active Assessment Questions</u></h2>
        <br>
        {{--  <div class="custom-content">  --}}
        <table class="assessment-tbl">
            <tr>
                <th style="text-align: center">No</th>
                <th style="text-align: center">Category</th>
                <th>Question Statement</th>
                <th style="text-align: center">Status</th>
                <th style="text-align: center">Action</th>
            </tr>
            @if($assessmentQuestionData == null)
                <tr>
                    <td colspan="5" style="text-align: center">Currently there are not record for assessment questions</td>
                </tr>
            @else
                @foreach($assessmentQuestionData as $indexKey => $data)
                    <tr>
                        <td class="assessment-tbl-item">{!! ++$indexKey !!}</td>
                        <td class="assessment-tbl-item">{!! $data['question_category'] !!}</td>
                        <td class="assessment-tbl-item">{!! $data['question_statement'] !!}</td>
                        <td class="assessment-tbl-item">
                            @if($data['question_status'])
                                ACTIVE
                            @else
                                NOT ACTIVE
                            @endif
                        </td>
                        <td class="assessment-tbl-item">
                            <form action={!! url('/admin/form/assessment/update/' . $data['id']) !!} method="GET">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="submit" class="btn btn-info form-control" value="Update" />
                                </div>
                                <div class="form-group">
                                    <button type="button" data-question_id="{!! $data['id'] !!}" class="btn btn-danger form-control" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        {{--  </div>  --}}
        <!-- Better do Pagination -->
        <hr class="featurette-divider">

        <!-- Modal -->
        <div id="deleteModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Confirmation</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure to delete?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <form action={!! url('/admin/assessment/delete') !!} method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="question_id" value="" />
                        <input type="submit" class="btn btn-danger" name="submit" value="Delete" />
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script>
        $('#deleteModal').on('show.bs.modal', function(e) {
            var questionId = $(e.relatedTarget).data('question_id');
            $(e.currentTarget).find('input[name="question_id"]').val(questionId);
        });
    </script>
@endsection
