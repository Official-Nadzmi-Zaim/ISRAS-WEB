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
            <tr>
                <td class="library-item2">1</td>
                <td class="library-item"><a href="/library/#">Book 1</a></td>
                <td class="library-item">Author 1</td>
                <td class="library-item">Publication 1</td>
            </tr>
            </tbody>
            <div>
        </table>
   
        <br>
        <a href='' class='btn btn-lg btn-primary' style="width: 15%">Back</a>
        <!-- Better do Pagination -->
        <hr class="featurette-divider">
    </div>
@endsection