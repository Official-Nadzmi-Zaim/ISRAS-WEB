@extends('layouts.app')

@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">Library</h2>
        <br><br>

        <a href={!! url('/admin/form/library/add') !!} class='btn btn-lg btn-primary'>Add New Content</a>

        <h2 class="featurette-heading-2" style="margin-top: 20px;"><u>Books/References</u></h2>
        <br>
        {{--  <div class="custom-content">  --}}
        <table class="assessment-tbl">
            <tr>
                <th style="text-align: center">No</th>
                <th style="text-align: center">Book/Reference Id</th>
                <th>Book/Reference Name</th>
                <th style="text-align: center">Action</th>
            </tr>
            @if($libraryData == null)
            <tr>
                <td colspan="4" style="text-align: center">Currently there are not record for books/references</td>
            </tr>
            @else
                @foreach($libraryData as $indexKey => $library)
                    <tr>
                        <td class="assessment-tbl-item">{!! ++$indexKey !!}</td>
                        <td class="assessment-tbl-item">{!! $library['id'] !!}</td>
                        <td><a href="{!! $library['src'] !!}">{!! $library['title'] !!}</a></td>
                        <td class="assessment-tbl-item">
                        <div class="form-group">
                            <div class="form-group">
                                <a class="btn btn-info form-control" href={!! url('/admin/form/library/update/' . $library['id']) !!}>Update</a>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-danger form-control" data-library_id="{!! $library['id'] !!}" data-toggle="modal" data-target="#deleteModal">Delete</a>
                            </div>
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
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <form action="{!! url('/admin/library/delete') !!}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="library_id" value="" />
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
            var questionId = $(e.relatedTarget).data('library_id');
            $(e.currentTarget).find('input[name="library_id"]').val(questionId);
        });
    </script>
@endsection
