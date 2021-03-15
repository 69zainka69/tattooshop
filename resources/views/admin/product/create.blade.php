@extends('layouts.admin_layout')


@section('title', 'Создать товар | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Добавить товар</h1>
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
                <h3 class="card-title">Новый товар</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('product.store')}}" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Название товара</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" required placeholder="Введите название товара">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">(Короткое) СЕО описание товара</label>
                    <input type="text" name="metadesc" class="form-control" id="exampleInputEmail1" required placeholder="Введите описание товара">
                  </div>

                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Описание товара</label>
                   <textarea name="description" class="description" id="description"></textarea>
                  </div>

                   <div class="form-group">
                    <label for="shelf_life">Срок пригодности</label>
                    <input type="date" name="shelf_life" class="form-control" id="shelf_life" required placeholder="Введите срок годности">
                  </div>

                  <div class="form-group">
                    <label for="size">Размер</label>
                    <input type="number" name="size" class="form-control" id="size" required placeholder="Введите размеры товара">
                  </div>

                  <div class="form-group">
                    <label for="weight">Вес</label>
                    <input type="number" name="weight" class="form-control" id="weight" required placeholder="Введите вес товара">
                  </div>



               
                <div class="form-group">
                    <label for="exampleInputEmail1">Категория товара</label>

                    <select class="form-control" id="category_id" name="category_id">
                    @foreach($categories as $category)
                      
                    <option  value="{{ $category->id }}">{{$category->title}}</option>
                    
                    @endforeach
                    </select>

                  </div>


                    @php
                    $url = $_SERVER['REQUEST_URI'];
                      $sclad_id=(parse_url($url, PHP_URL_QUERY));
                      
                    @endphp


                   <div style="display:none;" class="form-group">
                    <label for="sclad_id">Склад</label>
                   <input type="number" name="sclad_id" class="form-control" id="sclad_id" value="@php echo $sclad_id;@endphp" required placeholder="Введите срок годности">

                  </div>


                  <div class="form-group">
                    <label for="url">Введите  URL-Alias (ссылку) товара</label>
                    <input type="text" name="url" class="form-control" id="url" required placeholder="Введите ссылку на товар (латинскими символами без пробелов): tovar">
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