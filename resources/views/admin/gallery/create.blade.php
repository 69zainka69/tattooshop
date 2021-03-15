@extends('layouts.admin_layout')


@section('title', 'Новое фото товара | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Добавить новое фото товара</h1>
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
                <h3 class="card-title">Новое фото товара</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('gallery.store') }}" >
              @csrf
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Введите  URL-Alias (ссылку) категории</label>
                    <input class="form-control-file" type="file" name="img"/>
                  </div>

                    <div style="display:none;" class="form-group">
                    <label for="product_id">продукт</label>
                    <input type="number" value="@php $url = $_SERVER['QUERY_STRING']; echo $url; @endphp" name="product_id"/>
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