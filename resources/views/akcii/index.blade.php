@extends('layouts.main')

@section('title', 'Акции Магазина Tattoo Room')
@section('description', 'Акции Tattoo Room - магазин для тату-мастера')

@section('head')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600&display=swap" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/carousel.css" rel="stylesheet">
<link href="/css/mobile.css" rel="stylesheet">
<link href="/css/cheatsheet.css" rel="stylesheet">
@endsection


@section('slide')
<div id="myCarousel" class="carousel slide" style="margin-top: 1rem;" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        @php
        $cont_slide = count($sliders);  
        for ($i = 0; $i == $cont_slide; $i++) {
    echo '<li data-bs-target="#myCarousel" data-bs-slide-to="'.$i.'" ></li>';
}
@endphp
    </ol>
    <div class="carousel-inner">

@php
    
    
    $i = 0;
foreach ($sliders as $slide) {
    if ($i === 0) {
        echo '<div class="carousel-item active">
            <img src="'.$slide->img.'">

            <div class="container">
                <div class="carousel-caption '.$slide->lrc.'">

                    <p><a class="btn btn-lg btn-primary" href="'.$slide->url.'" role="button">Просмотреть товар</a></p>
                </div>
            </div>
        </div>';
    }
    else {
        echo  '<div class="carousel-item">
        <img src="'.$slide->img.'">

        <div class="container">
            <div class="carousel-caption '.$slide->lrc.'">

                <p><a class="btn btn-lg btn-primary" href="'.$slide->url.'" role="button">Просмотреть товар</a></p>
            </div>
        </div>
    </div>';
} 
    
    

    ++$i;
}

@endphp


    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
@endsection
<!-- END SLIDER BLOCK  -->

@section('content')

<div class="album py-5 bg-light" style="background-color: #ffffff !important;">
    <div class="container">
        <div class="blocktitle">
            <p class="title-block parentcategory pagetitle">Статьи</p>

        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($akcii as $blog)
            
            <div class="col">
                <div class="card shadow-sm" style="text-align:center;">
                    
                    
                    
                    @if(isset($blog['img']))<img style="margin-left:auto; margin-right:auto;" alt="{{$blog->title}}" src="{{$blog['img']}}" width="200" height="200">
                    @else <img style="margin-left:auto; margin-right:auto;" alt="{{$blog->title}}" src="/img/no_image.png" width="200" height="200"> 
                
                    @endif




                    <div class="card-body">
                        <div class="details_name" data-id="{{$blog->id}}">
                            <p style="text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;" class="card-text pagetitle">{{$blog->title}}</p>
                        </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
            <a href="{{route('showAktsii', [$blog->url])}}" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                                </div></div></div></div></div>
            @endforeach
        </div>
    </div>
</div>
<!-- END CARS TOVAR  -->

@endsection
@section('js')
<script>
    window.addToCartRoute = "{{route('addToCart')}}";

</script>
<script src="/js/cart.js"></script>
@endsection
