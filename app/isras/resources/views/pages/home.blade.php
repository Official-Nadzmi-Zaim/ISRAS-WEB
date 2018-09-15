@extends('layouts.app')

@section('content')
<main role="main">

    @if($blogContent != null)
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($blogContent as $count=>$blog)
                    @if ($count == 1)
                        <li data-target="#myCarousel" data-slide-to="{!! $count-1 !!}" class="active"></li>
                    @else
                        <li data-target="#myCarousel" data-slide-to="{!! $count-1 !!}"></li>
                    @endif
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($blogContent as $count=>$blog)
                    @if ($count == 1)
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h1>{!! $blog->title !!}</h1>
                                    <p>{!! $blog->description !!}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h1>{!! $blog->title !!}</h1>
                                    <p>{!! $blog->description !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                @endforeach
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
    @endif
  
  
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