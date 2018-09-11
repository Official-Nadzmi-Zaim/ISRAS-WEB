<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
            <!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
            {{--  <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
            <link rel="stylesheet" href="{{asset('css/min.css')}}">  --}}
            <link href="{{ URL::asset('css/carousel.css') }}" rel="stylesheet" type="text/css" >
            <link href="{{ URL::asset('css/min.css') }}" rel="stylesheet" type="text/css" >
            <title>{{config('app.name', 'I-SRAS')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        {{--  <div class="container">  --}}
            @yield('content')
        {{--  </div>  --}}
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ URL::asset('js/popper.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/holder.js') }}"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
        
                window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
        
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                    }, false);
                });
                }, false);
            })();
        </script>
        @yield('custom-script')
        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </body>
</html>