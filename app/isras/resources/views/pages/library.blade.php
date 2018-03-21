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
            <tr>
                <td class="library-item2">2</td>
                <td class="library-item"><a href="/library/#">Book 2</a></td>
                <td class="library-item">Author 2</td>
                <td class="library-item">Publication 2</td>
            </tr>
            <tr>
                <td class="library-item2">3</td>
                <td class="library-item"><a href="/library/#">Book 3</a></td>
                <td class="library-item">Author 3</td>
                <td class="library-item">Publication 3</td>
            </tr>
            <tr>
                <td class="library-item2">4</td>
                <td class="library-item"><a href="/library/#">Book 4</a></td>
                <td class="library-item">Author 4</td>
                <td class="library-item">Publication 4</td>
            </tr>
            <tr>
                <td class="library-item2">5</td>
                <td class="library-item"><a href="/library/#">Book 5</a></td>
                <td class="library-item">Author 5</td>
                <td class="library-item">Publication 5</td>
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