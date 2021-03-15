@extends('layouts.admin_layout')


@section('title', 'Обновление товары на складе | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Обновить товар на склад</h1>
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
                 <h3 class="card-title">Изменить товар: {{ $product->title }}</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('scladproduct.update', $product['id']) }}" enctype="multipart/form-data">
              @csrf
        @method('PUT')
                  <div style="display:none;" class="form-group">
                    <label for="exampleInputEmail1">Товар</label>
                 <input type="number" name="id_product" class="form-control" value="{{ $id_product }}" id="exampleInputEmail1" required placeholder="товар">
                  </div>

                  <div style="display:none;" class="form-group">
                    <label for="exampleInputEmail1">Склад</label>
                     <input type="number" name="id_sklad" class="form-control" value="{{ $id_sklad }}" id="exampleInputEmail1" required placeholder="Склад">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Валюта</label>
                    <input type="number" name="currency" value="" class="form-control" id="exampleInputEmail1" required placeholder="Введите цену в гривне">
                  </div>

                    
                   <div  class="form-group">
                    <label for="exampleInputEmail1">Срок годности</label>
                    <input type="date" value="{{$shelf_life}}" name="shelf_life" class="form-control" id="exampleInputEmail1"  >
                  </div>
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