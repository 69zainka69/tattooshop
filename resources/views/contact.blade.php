@extends('layouts.main')

@section('title', 'Контактные данные - Tattoo Room')
@section('description', 'Контактные данные площадки Tattoo Room - магазин для тату-мастера')

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
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d170.83807126843067!2d36.7819107609087!3d46.75683132449172!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e7cb0f0c86bbbd%3A0x270f68cb8f8d35f9!2sVeAn%20Coffee!5e0!3m2!1sru!2sua!4v1613030034593!5m2!1sru!2sua" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          
                  <div class="container">
                    <div class="carousel-caption text-start">

                    </div>
                  </div>
                </div>
    
              </div>
          
            </div>
  @endsection
<!-- END SLIDER BLOCK  --> 
            
  @section('content')

          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
           <h1 style="text-align:center;">Контактные данные</h1>
           <div class="row">
    <div style="text-align:center;" class="col">
     <p>Адрес:</p>
    <p><a class="tel" href="https://g.page/vean-hostel?share" tabindex="_blanks" target="_blanks" class=""><i class="fa fa-map-marker" aria-hidden="true"></i>  г.Бердянск, ул.Итальянская, 31-А</a></p>
    </div>
    
        <div style="text-align:center;" class="col">
       <p>Телефон:</p>
    <p><a class="tel" href="tel:+38050500505">+3805055050</a></p>
    </div>
              <p>Тут еще какой-то текст и какая-то информация
              только вот какая именно не понятно, потому что ТЗ норм так и нет и инфы так же нет.</p>
            </div>
          </div>
    @endsection