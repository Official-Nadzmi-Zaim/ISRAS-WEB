@extends('layouts.app')

@section('content')
<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
            <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
            <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
            <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
  
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        <!-- START THE FEATURETTES -->
        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">CORPORATE <span class="text-muted">SUSTAINABILITY</span></h2>
            <p class="lead"><span class="text-muted">The Islamic Social Responsibility Assessment System (I-SRAS) </span>is developed to provide an assesment system for Islamic-based organizations as a self-check tool of their social
                responsibility-related programmes, activities and initiatives. This tool aims to ensure that all social responsibility practices undertaken are prioritized and in conformance
                with the Islamic laws (Shariah)</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">CORPORATE <span class="text-muted">SUSTAINABILITY</span></h2>
            <p class="lead"><span class="text-muted">The Islamic Social Responsibility Assessment System (I-SRAS) </span>is developed to provide an assesment system for Islamic-based organizations as a self-check tool of their social
                responsibility-related programmes, activities and initiatives. This tool aims to ensure that all social responsibility practices undertaken are prioritized and in conformance
                with the Islamic laws (Shariah)</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">CORPORATE <span class="text-muted">SUSTAINABILITY</span></h2>
            <p class="lead"><span class="text-muted">The Islamic Social Responsibility Assessment System (I-SRAS) </span>is developed to provide an assesment system for Islamic-based organizations as a self-check tool of their social
                responsibility-related programmes, activities and initiatives. This tool aims to ensure that all social responsibility practices undertaken are prioritized and in conformance
                with the Islamic laws (Shariah)</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        </div>

        <hr class="featurette-divider">
  
        <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->
@endsection