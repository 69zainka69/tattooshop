@extends('layouts.main')

@section('title', "Купить ". $cat->title)
@section('description', 'Каталог продукции Tattoo Room - магазин для тату-мастера')

@section('head')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/carousel.css" rel="stylesheet">
<link href="/css/mobile.css" rel="stylesheet">
<link href="/css/cheatsheet.css" rel="stylesheet"> 
<style>
.pagetitle:first-letter{
    text-transform: uppercase;
  }
</style>
@endsection



@section('content')

  <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
  
            <div class="blocktitle"><p class="title-block parentcategory pagetitle">{{$cat->title}}</p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">




                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/subcategories/zapchasti_dlya_mashinok.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Роторные</p>
                        <div class="btn-group">
                       <a href="/" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                  </div>
                </div>
 



                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/subcategories/induction_mashinki.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Индукционные машинки</p>
                        <div class="btn-group">
                        <a href="/mashinki/induction_mashinki" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/subcategories/rotornyi_mashinki.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Роторные машинки</p>
                        <div class="btn-group">
                        <a href="/mashinki/rotornyi_mashinki" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/subcategories/module_mashinki.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Модульные машинки</p>
                        <div class="btn-group">
                        <a href="/mashinki/module_mashinki" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                      
         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    <!-- END CARS TOVAR  --> 
    @endsection