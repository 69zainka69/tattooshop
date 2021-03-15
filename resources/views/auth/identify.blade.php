@extends('layouts.main')

@section('title', 'Tattoo Room')
@section('description', 'Tattoo Room - магазин для тату-мастера')

@section('head')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/carousel.css" rel="stylesheet">
<link href="/css/mobile.css" rel="stylesheet">
<link href="/css/cheatsheet.css" rel="stylesheet"> 
@endsection


            
  @section('content')

          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
           <div class="container">
            <div class="blocktitle">
              <h1 style="text-align:center;">Аутентификация</h1>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col-12 col-lg-5">
               <h3 style="text-align:center;">Вход</h3>


   @include('auth.login')


                </div>
                <div class="col-12 col-lg-5 offset-lg-2">
                  <h3 style="text-align:center;">Регистрация</h3>


  @include('auth.register')


                </div>
              </div>
            </div>

          </div>
           
    <!-- END CARS TOVAR  --> 
    
    @endsection