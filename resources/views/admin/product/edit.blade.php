@extends('layouts.admin_layout')


@section('title', 'Изменение товара | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Изменение товара</h1>
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
                <h3 class="card-title">Изменить товар: {{ $product['title']}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('product.update', $product['id']) }}">
              @csrf
              @method('PUT')
                <div class="card-body">
                 
                <div class="form-group">
                    <label for="exampleInputEmail1">Название товара</label>
                    <input type="text" value="{{ $product['title']}}" name="title" class="form-control" id="exampleInputEmail1" required placeholder="Введите название товара">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">(Короткое) СЕО описание товара - можно просто копировать первые две строчки из описания. Должно быть до 170-ти символов</label>
                    <input type="text" value="{{ $product['metadesc']}}" name="metadesc" class="form-control" id="exampleInputEmail1" required placeholder="Введите описание товара">
                  </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Описание товара</label>
                   <textarea name="description" class="description" id="description">{{ $product['description'] }}</textarea>
                  </div>

               <div class="form-group">
                    <label for="shelf_life">Срок пригодности</label>
                    <input type="date" value="{{ $product['shelf_life']}}" name="shelf_life" class="form-control" id="shelf_life" required placeholder="Введите срок годности">
                  </div>
                   <div class="form-group">
                    <label for="size">Размер</label>
                    <input type="text" value="{{ $product['size']}}" name="size" class="form-control" id="size" required >
                  </div>

                  <div class="form-group">
                    <label for="weight">Вес</label>
                    <input type="number" value="{{ $product['weight']}}" name="weight" class="form-control" id="weight" required >
                  </div>
                  <div class="form-group">
                    <label for="sclad_id">Склад</label>

                    <select class="form-control" id="sclad_id" name="sclad_id">
                    <option  value="{{ $product['sclad_id'] }}">По умолчанию</option>
                    @foreach($sclads as $sclad)
                      
                    <option  value="{{ $sclad->id }}">{{$sclad->title}}</option>
                    
                    @endforeach
                    </select>

                  </div>
                   

              <div class="form-group">
                    <label for="exampleInputEmail1">Категория товара</label>

                    <select class="form-control" id="category_id" name="category_id">
                    <option  value="{{ $product['category_id'] }}">По умолчанию</option>
                    @foreach($categories as $category)
                      
                      <option  value="{{ $category->id }}">{{$category->title}}</option>
                    
                    @endforeach
                    </select>

                   
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Введите  URL-Alias (ссылку) товара (латинскими символами написать название), например: stol_tatuirovshchika <br>
                      Текст должен быть без пробелов, вместо пробелов можно использовать _
                    </label>
                    <input type="text" value="{{ $product['url']}}" name="url" class="form-control" id="exampleInputEmail1" required placeholder="Введите ссылку на товар: tovar">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Изменить</button>
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