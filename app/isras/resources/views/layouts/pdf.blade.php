<!DOCTYPE html>
<head>
    @yield('custom-css')
</head>

<body class="container-fluid">
    @yield('content')
    
    <script src={!! asset('js/jquery-3.3.1.min.js') !!}></script>
    <script src={!! asset('js/bootstrap.min.js') !!}></script>
    <script src={!! asset('js/d3.min.js') !!}></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
    
    @yield('custom-js')
</body>
