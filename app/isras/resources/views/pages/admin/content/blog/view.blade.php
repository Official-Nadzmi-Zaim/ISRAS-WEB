@extends('layouts.app')

@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">Blog</h2>
        <br><br>

        <a href={!! url('/admin/form/blog/add') !!} class='btn btn-lg btn-primary'>Add New Blog</a>

        <h2 class="featurette-heading-2" style="margin-top: 20px;"><u>Blog List</u></h2>
        <br>
        {{--  <div class="custom-content">  --}}
        <table class="assessment-tbl">
            <tr>
                <th style="text-align: center">No</th>
                <th>Blog Description</th>
                <th style="text-align: center">Action</th>
            </tr>
            @if($blogData == null)
                <tr>
                    <td colspan="5" style="text-align: center">Currently there are not record for blogs</td>
                </tr>
            @else
                @foreach($blogData as $indexKey => $blog)
                    <tr>
                        <td class="assessment-tbl-item">{!! $indexKey + 1 !!}</td>
                        <td>
                            <b>{!! $blog['title'] !!}</b><br />
                            <p>{!! $blog['description'] !!}</p>
                        </td>
                        <td class="assessment-tbl-item">
                            <div class="form-group">
                                <a class="btn btn-info form-control" href={!! url('/admin/form/blog/update/' . $blog['id']) !!}>Update</a>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-danger form-control" data-blog_id={!! $blog['id'] !!} data-toggle="modal" data-target="#deleteModal">Delete</a>
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
                    <form action={!! url('/admin/blog/delete') !!} method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="blog_id" value={!! $blog['id'] !!} />
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
            var blogId = $(e.relatedTarget).data('blog_id');
            $(e.currentTarget).find('input[name="blog_id"]').val(blogId);
        });
    </script>
@endsection
