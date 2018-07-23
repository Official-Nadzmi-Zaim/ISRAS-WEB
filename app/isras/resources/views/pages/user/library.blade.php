@extends('layouts.app')

@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">Library</h2>
        <br>
 
        <table class="library-tbl">
            <thead>
            <tr>
                <th style="text-align: center">No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publication</th>
            </tr>
            </thead>
            <tbody>
                @for ($i=0; $i<sizeof($arr_content); $i++)
                    <tr>
                        <td class="library-item2">{{ $i + 1 }}</td>
                        <td class="library-item"><a href={!! $arr_content[$i]['src'] !!}>{{ $arr_content[$i]['title'] }}</a></td>
                        <td class="library-item">{{ $arr_content[$i]['author_name'] }}</td>
                        <td class="library-item">{{ $arr_content[$i]['publication_name'] }}</td>
                    </tr>
                @endfor
            </tbody>
            <div>
        </table>
   
        <br>
        {{-- <a href='' class='btn btn-lg btn-primary' style="width: 15%">Back</a> --}}
        <!-- Better do Pagination -->
        <hr class="featurette-divider">
    </div>
@endsection
