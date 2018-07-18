<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            
            <title>{{config('app.name', 'I-SRAS')}}</title>

            @yield('custom-css')
    </head>

    <body class="container">
        @yield('content')
        
        <script src={!! asset('js/jquery-3.3.1.min.js') !!}></script>
        <script src={!! asset('js/bootstrap.min.js') !!}></script>
        <script src={!! asset('js/d3.min.js') !!}></script>
        
        @yield('custom-js')
    </body>
</html>