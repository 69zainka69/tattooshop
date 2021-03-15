@extends('layouts.main')

@section('title')
{{$article->title}} Магазина Tattoo Room
@endsection
@section('description')
{{$article->description}} Tattoo Room - магазин для тату-мастера
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
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1" class=""></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2" class=""></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="3" class=""></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="4" class=""></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slid/slide3.webp">

            <div class="container">
                <div class="carousel-caption text-start">

                    <p><a class="btn btn-lg btn-primary" href="/catalog/rasprodazha" role="button">Просмотреть товар</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">

            <img class="baimg" src="/img/slid/slide2.webp">

            <div class="container">
                <div class="carousel-caption">

                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Просмотреть товар</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="baimg" src="/img/slid/slide1.webp">

            <div class="container">
                <div class="carousel-caption text-end">

                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Просмотреть товар</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="baimg" src="/img/slid/slide1.webp">

            <div class="container">
                <div class="carousel-caption text-end">

                    <p><a class="btn btn-lg btn-primary" href="/" role="button">Просмотреть товар</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">

            <img class="baimg" src="/img/slid/slide2.webp">

            <div class="container">
                <div class="carousel-caption text-end">

                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Просмотреть товар</a></p>
                </div>
            </div>
        </div>
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
 
        <h1 style="padding-left:20px;">{{$article->title}}</h1>
       @if (isset($article->img)) <img class="leftimg" alt="{{$article->title}}" src="{{$article->img}}">@endif{{$article->content}}</div>
                </div>
            </div>
           
        </div>

    </div>

</div>
<!-- END CARS TOVAR  -->

@endsection

