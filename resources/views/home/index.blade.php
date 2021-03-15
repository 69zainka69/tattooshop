@extends('layouts.main')

@section('title', 'Tattoo Room')
@section('description', 'Tattoo Room - магазин для тату-мастера')

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
@php
if (!isset($_COOKIE['kupon']))
{
$kupon = 1;
}
else{
$kupon = htmlspecialchars($_COOKIE["kupon"]);
}
@endphp
<div class="album py-5 bg-light" style="background-color: #ffffff !important;">
    <div class="container">
        <div class="blocktitle">
            <p class="title-block parentcategory pagetitle">Новинки магазина</p>

        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($products as $product)
            @php
            $image ='';
            if (count($product->images) > 0 ){
            $image = $product->images[0]['img'];
            } else {
            $image = '/img/no_image.png';
            }
            @endphp
            <div class="col">
                <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" alt="{{$product->title}}" src="{{$image}}" width="200" height="200">
                    <div class="card-body">
                        <div class="details_name" data-id="{{$product->id}}">
                            <p style="text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;" class="card-text pagetitle">{{$product->title}}</p>
                        </div>
                        <p class="pagetitle"><a class="categorys" href="/catalog/{{$product->category['url_cat']}}">{{$product->category['title']}}</a>
                            <p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">

                                        <a href="{{route('showProduct', [$product->category['url_cat'],$product->url])}}" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                                        <a data-id="{{$product->id}}" class="btn btn-sm btn-outline-secondary cart_button">В корзину</a>
                                    </div>
                                        @php echo $product->price($_COOKIE['currency'] ?? 'UAH')->price_shop; @endphp
                                       
                                        <span>
                                            @if (!isset($_COOKIE['currency']))
                                            ГРН
                                            @elseif (($_COOKIE['currency']) == "USD")
                                            USD
                                             @elseif (($_COOKIE['currency']) == "EUR")
                                            EUR
                                            @elseif (($_COOKIE['currency']) == "PLN")
                                            PLN
                                            @else
                                            грн
                                            @endif


                                        </span></p>
                                </div>
                    </div>
                </div>
            </div>
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
