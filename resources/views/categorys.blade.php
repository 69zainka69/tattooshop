@extends('layouts.main')

@section('title', "Купить ". $cat->title)
@section('description')
Каталог продукции {{$cat->title}} | Tattoo Room - магазин для тату-мастера
@endsection

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
  
            <div style="padding-top: 25px;">
            <p class="title-block parentcategory pagetitle">{{$cat->title}}</p>
            <p>{{$cat->description}}</p></div>
            <hr>
            <div class="d-flex align-items-center justify-content-between">
 <p>Всего: <span>{{$cat->products->count()}} </span>товаров</p>
            <p>Сортировать: 
    <button data-order="name" class="product_sorting_btn">По алфавиту</button>
    <button data-order="price" class="product_sorting_btn">По цене</button>
            </p>
            </div>

              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 renderproduct">
@php


if (!isset($_COOKIE['kupon']))   
{   
   $kupon = 1; 
}
else{

$kupon = htmlspecialchars($_COOKIE["kupon"]);
}
@endphp

@include('ajax.order-by')

                </div>
              </div>
            </div>
  {{$tovars->appends(request()->query())->links()}}
    @endsection


  @section('js')

<script>
  window.addToCartRoute = "{{route('addToCart')}}";
</script>
<script src="/js/cart.js"></script>
  <!-- Для сортировки  --> 
  <script>
  $(document).ready(function () {
  $('.product_sorting_btn').click(function(){
      let orderBy = $(this).data('order')
      $.ajax({
        url: "{{route('showCategory',$cat->url_cat)}}",
        type: "GET",
        data: {
        orderBy: orderBy,
        page: {{isset($_GET['page']) ? $_GET['page'] : 1}},
        },
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
        success: (data) => {
          let positionParameters = location.pathname.indexOf('?');
          let url = location.pathname.substring(positionParameters,location.pathname.length);
          let newURL = url + '?';
          newURL += 'orderBy=' + orderBy;
          history.pushState([], '', newURL);
          $('.renderproduct').html(data)
        }
      });
    })
        })
  </script>
  @endsection