@extends('layouts.app')

@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">Blog</h2>
        <br><br>

        <a href='/admin/form/blog/add' class='btn btn-lg btn-primary'>Add New Blog</a>

        <h2 class="featurette-heading-2" style="margin-top: 20px;"><u>Blog List</u></h2>
        <br>
        {{--  <div class="custom-content">  --}}
        <table class="assessment-tbl">
            <tr>
                <th style="text-align: center">No</th>
                <th>Blog Description</th>
                <th style="text-align: center">Action</th>
            </tr>
            <tr>
                <td colspan="5" style="text-align: center">Currently there are not record for blogs</td>
            </tr>
            <tr>
                <td class="assessment-tbl-item">1</td>
                <td>
                    <b>This is blog title</b><br />
                    <p>This is blog description</p>
                </td>
                <td class="assessment-tbl-item">
                    <form action="" method="">
                        <input type="hidden" name="library_id" value="" />
                        <div class="form-group">
                            <input type="submit" class="btn btn-info form-control" name="submit" value="Update" />
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-danger form-control" data-toggle="modal" data-target="#deleteModal">Delete</button>
                        </div>
                    </form>
                </td>
            </tr>
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

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <form action="" method="">
                        <input type="hidden" name="question_id" value="" />
                        <input type="submit" class="btn btn-danger" name="submit" value="Delete" />
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection