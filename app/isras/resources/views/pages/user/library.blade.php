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
        <h2 class="featurette-heading" style="margin-top: 20px;">Library</h2>
        <br>

        @if (count($libraries) > 0)
        <div class="container-fluid">
            <table class="table">
                <thead class="thead-dark">
                <tr class="d-flex">
                    <th class="text-center col-1">No</th>
                    <th class="text-left col-5">Title</th>
                    <th class="text-center col-3">Author</th>
                    <th class="text-center col-3">Publication</th>
                </tr>
                </thead>
                <tbody>
                    @for ($i=0; $i<10; $i++)
                        @if (isset($libraries[$i]))
                            <tr class="d-flex">
                                <td class="text-center col-1">{{$i+1}}</td>
                                <td class="text-left col-5"><a href={!! $libraries[$i]->GetSrc() !!}>{{ $libraries[$i]->GetTitle() }}</a></td>
                                <td class="text-center col-3">{{$libraries[$i]->GetAuthor()}}</td>
                                <td class="text-center col-3">{{$libraries[$i]->GetPublication()}}</td>
                            </tr>
                        @else
                            <tr class="d-flex">
                                <td class="text-center col-1 hide">1</td>
                                <td class="text-left col-5 hide"></td>
                                <td class="text-center col-3 hide"></td>
                                <td class="text-center col-3 hide"></td>
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
        <!-- Pagination -->
        @if (count($libraries) > 10)
            {{ $paginated->render("pagination::bootstrap-4") }}
        @endif
        <hr class="featurette-divider">
    </div>
@endsection
