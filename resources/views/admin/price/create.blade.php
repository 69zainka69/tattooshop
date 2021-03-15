@extends('layouts.admin_layout')


@section('title', 'Назначить новую цену | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Назначить новую цену</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
<p style="color:red;">Внимание!!! Не оставляйте пустые, не заполненные поля. Даже если цена не поменялась то при обновлении цены заполните поле!!!</p>

<div>
<table class="table">
<thead>
  <tr>
  <th>Домен</th>
  <th>Валюта</th>
  <th>Цена закупки</th>
  <th>Цена продажи салону</th>
  <th>Цена продажи в салонах</th>
  <th>Цена продажи</th>
  </tr>
</thead>
<tbody>
@foreach($prices as $price)
  <tr>
    <td>{{ $price->domain }}</td>
    <td>{{ $price->currency }}</td>
    <td>{{ $price->price_purchase }}</td>
    <td>{{ $price->price_provided }}</td>
    <td>{{ $price->price_parlor }}</td>
    <td>{{ $price->price_shop }}</td>
@endforeach
</tbody>
</table>
</div>

            @if (session('success'))
        <div class="alert alert-success" role="alert">

            <h4><i class="icon fa fa-check"></i> {{ session('success')}}</h4>
        </div>
        @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
<div class="container-fluid">
<div class="col-lg-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Новая цена</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('price.store')}}">
              @csrf

@php
                    $url = $_SERVER['REQUEST_URI'];
                      $prod_id=(parse_url($url, PHP_URL_QUERY));
                      
                    @endphp

            <div style="display:none;" class="form-group">
                    <label for="price_purchase">id</label>
                    <input type="text" value="@php echo $prod_id;@endphp
                    "name="product_id" class="form-control" id="product_id" required placeholder="Введите цену закупки товара">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Цена для сайта:</label>
                    <select class="form-control" name="domain">
                        <option value="127.0.0.1">TATTOO ROOM</option>
                        <option value="vean-shop.com">VeAn_SHOP</option>
                    </select>
                  </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Валюта</label>
                    <select class="form-control" name="currency">
                        <option value="UAH">UAH</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="PLN">PLN</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="price_shop">Цена в магазине</label>
                    <input type="text" name="price_shop" class="form-control" id="price_shop" required placeholder="Введите цену товара для магазина">
                  </div>
                <div class="form-group">
                    <label for="price_purchase">Цена закупки</label>
                    <input type="text" name="price_purchase" class="form-control" id="price_purchase" required placeholder="Введите цену закупки товара">
                  </div>

                <div class="form-group">
                    <label for="price_provided">Цена салону</label>
                    <input type="text" name="price_provided" class="form-control" id="price_provided" required placeholder="Введите цену товара в салоне">
                  </div>  
                <div class="form-group">
                    <label for="price_parlor">Цена в салоне</label>
                    <input type="text" name="price_parlor" class="form-control" id="price_parlor" required placeholder="Введите цену товара для салона">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Добавить</button>
              
                </div>
              </form>
            </div>
</div>
</div>
</section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection