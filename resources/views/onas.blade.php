@extends('layouts.main')

@section('title', 'О магазине - Tattoo Room')
@section('description', 'Tattoo Room - магазин для тату-мастера')

@section('head')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
                 <img src="/img/slid/slide3.jpg">
          
                  <div class="container">
                    <div class="carousel-caption text-start">
                      <h4></h4>
                      <p></p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Просмотреть товар</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  
                  <img src="/img/slid/slide2.jpg">
                  
                  <div class="container">
                    <div class="carousel-caption">
                      <h4></h4>
                      <p></p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Просмотреть товар</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="/img/slid/slide1.jpg">
  
                  <div class="container">
                    <div class="carousel-caption text-end">
                      <h4></h4>
                      <p></p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Просмотреть товар</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="/img/slid/slide1.jpg">
  
                  <div class="container">
                    <div class="carousel-caption text-end">
                      <h4></h4>
                      <p></p>
                      <p><a class="btn btn-lg btn-primary" href="/" role="button">Просмотреть товар</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  
                  <img src="/img/slid/slide2.jpg">
                  
                  <div class="container">
                    <div class="carousel-caption text-end">
                      <h4></h4>
                      <p></p>
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
           <h1 style="text-align:center;">О нашей площадка Tattoo Room</h1>
           <p>Tattoo Room - это современная площадка товаров для мастеров тату, пирсинга и перманентного макияжа.</p>
           <p>У нас вы можете купить товары для вашей тату студии, чтобы сразу приступать к оказанию услуг. Вы можете найти средства по уходу и защите, 
           тату машинки, краски, иглы, а так же ассортимент мебели для Вашей студии. Большой ассортимент пирсинг украшений так же досупен для Вас.</p>
              
            </div>
          </div>
    @endsection