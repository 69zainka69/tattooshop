@extends('layouts.admin_layout')


@section('title', 'Создать товар на складе | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Добавить товар на склад</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->

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
                <h3 class="card-title">Новый товар на складе</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('scladproduct.store')}}" enctype="multipart/form-data">
              @csrf
        
                  <div class="form-group">
                    <label for="exampleInputEmail1">Товар</label>

                    <select class="form-control" id="id_product" name="id_product">
                    @foreach($products as $product)
                
                      <option  value="{{ $product->id }}">{{$product->title}}</option>
                    @endforeach
                    </select>
                  </div>

                  <div style="display:none;" class="form-group">
                    <label for="exampleInputEmail1">Склад</label>

               
                     <input type="number" name="id_sklad" class="form-control" value="@php $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                      $url = (parse_url($url, PHP_URL_QUERY));
              echo $url; @endphp" id="exampleInputEmail1" required placeholder="Склад">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Количество</label>
                    <input type="number" name="count" class="form-control" id="exampleInputEmail1" required placeholder="Введите цену в гривне">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Цена продажи (ГРН)</label>
                    <input type="number" name="price" class="form-control" id="exampleInputEmail1" required placeholder="Введите цену в гривне">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Цена продажи (Доллар)</label>
                    <input type="number" name="price_usd" class="form-control" id="exampleInputEmail1" required placeholder="Введите цену в долларах">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Цена продажи (Евро)</label>
                    <input type="number" name="price_eur" class="form-control" id="exampleInputEmail1" required placeholder="Введите цену в евро">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Цена продажи (Злотые)</label>
                    <input type="number" name="price_pln" class="form-control" id="exampleInputEmail1" required placeholder="Введите цену в злотых">
                  </div>

                  <div  class="form-group">
                    <label for="exampleInputEmail1">Цена в салоне</label>
                    <input type="number" name="price_in_salon" class="form-control" id="exampleInputEmail1"  >
                  </div>
                   <div  class="form-group">
                    <label for="exampleInputEmail1">Цена заказа салона</label>
                    <input type="number" name="zakaz_salona" class="form-control" id="exampleInputEmail1"  >
                  </div>
                  </div>
                   <div  class="form-group">
                    <label for="exampleInputEmail1">Срок годности</label>
                    <input type="date" name="shelf_life" class="form-control" id="exampleInputEmail1"  >
                  </div>
                  </div>



                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Создать</button>
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