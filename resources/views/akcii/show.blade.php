@extends('layouts.main')

@section('title')
Акция {{$akcii->title}} Магазина Tattoo Room
@endsection
@section('description')
{{$akcii->description}} Tattoo Room - магазин для тату-мастера
@endsection

@section('head')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600&display=swap" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/carousel.css" rel="stylesheet">
<link href="/css/mobile.css" rel="stylesheet">
<link href="/css/cheatsheet.css" rel="stylesheet">
@endsection
<style>
.leftimg {
    float:left; 
    margin: 10px 10px 10px 0; 
   }
</style>

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
 
        <h1 style="text-align: center;">{{$akcii->title}}</h1>
       @if (isset($akcii->img)) <img class="leftimg" alt="{{$akcii->title}}" src="{{$akcii->img}}">@endif{!! $akcii->content !!}</div>
                </div>
            </div>
           
        </div>

    </div>

</div>
<!-- END CARS TOVAR  -->

@endsection

