    @extends('layouts.main')
    @php
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    @endphp
    @section('title')
    Купить {{$item->title}} - Tattoo Room
    @endsection
    @section('description')
    Купить {{$item->title}} по выгодной цене. Tattoo Room - магазин для тату-мастера с качественным товаром
    @endsection
    @section('head')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/product.css" rel="stylesheet">
    <link href="/css/mobile.css" rel="stylesheet">
    <link href="/css/cheatsheet.css" rel="stylesheet">

    @endsection
    
    <style>
        .row {
            padding-top: 60px;
        }







.cart_info_col_quantity
{
	width: 17%;
	text-align: center;
}
.cart_info_col_total
{
	width: 10%;
	text-align: right;
}
.cart_item
{
	padding-top: 33px;
	padding-bottom: 33px;
}
.cart_item_product
{
	width: 63%;
}
.cart_item_price
{
	width: 10%;
}
.cart_item_quantity
{
	width: 17%;
	text-align: center;
}
.cart_item_total
{
	width: 10%;
	text-align: right;
}
.product_quantity {
    display: flex;
    align-items: center;
}

.product_quantity > * + * {
    margin-left: 15px;
}
    </style>

    @section('content')
    <div class="bd-cheatsheet container-fluid bg-white">
        <section id="content">
            <!-- CARD TOVAR  -->
            <div class="album py-5 bg-light" style="background-color: #ffffff !important;">

                <!-- breadcrumb  -->

                <!-- END breadcrumb  -->

                <section aria-label="Main content" role="main" class="product-detail">
                    <div itemscope itemtype="http://schema.org/Product">
                        <meta itemprop="url" content="{{url()->current()}}">
                        <meta itemprop="image" @php $image='' ; if(count($item->images) > 0){
                        $image = $item->images[0]['img'];

                        } else {
                        $image = '/img/no_image.png';
                        }

                        @endphp
                        @php
                        echo 'content="'.$image.'">';
                        @endphp

                        <meta itemprop="brand" content="Tattoo Room">
                        <meta itemprop="sku" content="Tattoo Room">
                        <div class="shadow">
                            <div class="_cont detail-top">
                                <div class="cols d-grid grid-col-2">
                                    <div class="left-col">
                                        <div id="myCarousel" class="carousel slide" style="margin-top: 1rem;" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                @php
                                                $image = '';
                                                if(count($item->images) > 0){
                                                $image = $item->images[0]['img'];
                                                } else {
                                                $image = '/img/no_image.png';
                                                }
                                                @endphp
                                                @php
                                                if($image == '/img/no_image.png'){
                                                echo '<div class="carousel-item active"><img alt="{{$item->title}}" src="'; echo $image; echo '">
                                                    <div class="container">
                                                        <div class="carousel-caption text-start"></div>
                                                    </div>
                                                </div>'; }
                        
                                                @endphp

                                                @if($image != '/img/no_image.png')
                                                @foreach($item->images as $img)
                                                @if($loop->first)
                                                <div class="carousel-item active"><img alt="{{$item->title}}" src="{{$img['img']}}">
                                                    <div class="container">
                                                        <div class="carousel-caption text-start"></div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="carousel-item"><img alt="{{$item->title}}" src="{{$img['img']}}">
                                                    <div class="container">
                                                        <div class="carousel-caption"></div>
                                                    </div>
                                                </div>@endif
                                                @endforeach
                                                @endif
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
                                    </div>
<!--Скидочный купон-->
@php

if (!isset($_COOKIE['kupon']))   
{   
   $kupon = 1; 
}
else{

$kupon = htmlspecialchars($_COOKIE["kupon"]);
}
@endphp
<!--END скидочный купон-->
                                    <div class="right-col">
                                      <div class="details_name" data-id="{{$item->id}}"><h1 itemprop="name">{{$item->title}}</h1></div>
                                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                            <meta itemprop="priceCurrency" content="UAH">
                                            <link itemprop="availability" href="http://schema.org/InStock">
                                            <div class="price-shipping">
                                                <div class="price" data-base-price="@php echo $item->price($_COOKIE['currency'] ?? 'UAH')->price_shop; @endphp" id="price-preview" quickbeam="price" quickbeam-price="@php echo $item->price($_COOKIE['currency'] ?? 'UAH')->price_shop; @endphp">
                                                    <meta itemprop="url" content="{{url()->current()}}">
                                                    <meta itemprop="description" content="{{$item->metadesc}}">
                                                    <meta itemprop="sku" content="Tattoo Room">
                                                    <meta itemprop="priceValidUntil" content="@php $oldDate=date('d.m.Y');$date=date(" Y-m-d", strtotime($oldDate."+ 62 days"));echo "$date" ; @endphp">
                                                    <meta itemprop="price" content="@php echo $item->price($_COOKIE['currency'] ?? 'UAH')->price_shop; @endphp">
                                                    @php echo $item->price($_COOKIE['currency'] ?? 'UAH')->price_shop; @endphp
                                                </div>
                                                @if($item->amount() > 0)
                                                <a style="color:green;">Есть на складе</a>
                                                @else
                                                <a style="color:red;">Товар закончился, но вы можете оформить предзаказ</a>
                                                @endif
                                            </div>
                                            <div style="display:none;" class="swatches">
                                                <div class="swatch clearfix" data-option-index="0">
                                                    <div class="header">Размер</div>
                                                    <div data-value="M" class="swatch-element plain m available">
                                                        <input id="swatch-0-m" type="radio" name="option-0" value="M" checked />
                                                        <label for="swatch-0-m">
                                                            M
                                                        </label>
                                                    </div>
                                                    <div data-value="L" class="swatch-element plain l available">
                                                        <input id="swatch-0-l" type="radio" name="option-0" value="L" />
                                                        <label for="swatch-0-l">
                                                            L
                                                        </label>
                                                    </div>
                                                    <div data-value="XL" class="swatch-element plain xl available">
                                                        <input id="swatch-0-xl" type="radio" name="option-0" value="XL" />
                                                        <label for="swatch-0-xl">
                                                            XL
                                                        </label>
                                                    </div>
                                                    <div data-value="XXL" class="swatch-element plain xxl available">
                                                        <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL" />
                                                        <label for="swatch-0-xxl">
                                                            XXL
                                                        </label></div>
                                                </div>
                                                <div class="swatch clearfix" data-option-index="1">
                                                    <div class="header">Цвет</div>
                                                    <div data-value="Blue" class="swatch-element color blue available">
                                                        <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1" value="Blue" checked />
                                                        <label for="swatch-1-blue" style="border-color: blue;">
                                                            <span style="background-color: blue;"></span>
                                                        </label>
                                                    </div>
                                                    <div data-value="Red" class="swatch-element color red available">
                                                        <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1" value="Red" />
                                                        <label for="swatch-1-red" style="border-color: red;">
                                                            <span style="background-color: red;"></span>
                                                        </label>
                                                    </div>
                                                    <div data-value="Yellow" class="swatch-element color yellow available">

                                                        <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1" value="Yellow" />
                                                        <label for="swatch-1-yellow" style="border-color: yellow;">
                                                            <span style="background-color: yellow;"></span>
                                                        </label>
                                                    </div>
                                                    <div data-value="Green" class="swatch-element color green available">

                                                        <input quickbeam="color" id="swatch-1-green" type="radio" name="option-1" value="Green" />
                                                        <label for="swatch-1-green" style="border-color:green;">
                                                            <span style="background-color: green;"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="guide"><a></a></div>
                                            </div>
                                            <!--<form id="AddToCartForm">
                                                <div class="btn-and-quantity-wrap">
                                                    <div class="btn-and-quantity">
                                                        <div class="spinner">
                                                            <span class="btn minus" data-id="2721888517"></span>
                                                            <span>qty</span> <input type="text" id="updates_2721888517" name="quantity" value="1" class="quantity-selector">
                                                            <input type="hidden" id="product_id" name="product_id" value="2721888517">
                                                            <span class="q">шт.</span>
                                                            <span class="btn plus" data-id="2721888517"></span>
                                                        </div>
                                                        <a class="addToCart" href="#" id="AddToCart" quickbeam="add-to-cart">
                                                            <span id="AddToCartText">В корзину</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>-->
                                             <div class="product_quantity_container">
                            <div class="product_quantity clearfix">
                                <span>Количество:</span>
                                <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                <div class="quantity_buttons">
                                    <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                    <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div data-id="{{$item->id}}" class="button cart_button"><a href="#">купить</a></div>
                        </div>
                                            <div class="tabs">
                                                <div class="tab-labels">
                                                    <span data-id="1" class="active">Описание</span></div>
                                                <div class="tab-slides">
                                                    <div id="tab-slide-1" itemprop="description" class="slide active">
                                                        <p> {!!$item->description!!}</p>
                                                        <hr>
                                                        <div style="padding-top:20px;" class="social youtube">
                                                            <a href="#" rel="nofollow" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
                                                        </div>
                                                        <div class="social instagram"><a href="#" rel="nofollow" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                                                        </div>
                                                        <div class="social facebook">
                                                            <a href="#" rel="nofollow" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                                                        </div>
                                                        <div class="social vk">
                                                            <a href="#" rel="nofollow" target="_blank"><i class="fa fa-vk fa-2x"></i></a>
                                                        </div>
                                                        <div class="social telegram">
                                                            <a href="#" rel="nofollow" target="_blank"><i class="fa fa-paper-plane fa-2x"></i></a>
                                                        </div>
                                                        <!-- Open Graph Generated: a.pr-cy.ru -->
                                                        <meta name="og:title" content="{{$item->title}}">
                                                        <meta name="og:description" content="{{$item->metadesc}}">
                                                        <meta name="og:url" content="{{url()->current()}}">
                                                        <meta name="og:site_name" content="Tatoo Room">
                                                        <meta name="og:image" content="https://internetsmoneys.com@php
echo $image;
@endphp">
                                                        <meta name="og:locale" content="ru_RU">
                                                        <meta name="og:type" content="product">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </main>
                        </div>
                        <!-- END CARS TOVAR  -->


                        @endsection
@section('js')
    <script src="/js/product.js"></script>
    <script>
        window.addToCartRoute = "{{route('addToCart')}}";
    </script>
    <script src="/js/cart.js"></script>
@endsection