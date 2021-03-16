@extends('layouts.admin_layout')


@section('title', 'Добавить новый слайд | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Добавить слайд</h1>
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

 <a class="btn btn-success btn-sm" href="{{ 'slidershome' }}">
          <i class="fas fa-plus">
          </i>Вернуться к слайдеру</a>

              <div class="card-header">
                <h3 class="card-title">Загрузка слайда</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="{{ route('slide.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
  
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>

                <div style="display:none;" class="form-group">
                    <label for="product_id">Слайд</label>
                    <input type="number" value="@php $url = $_SERVER['QUERY_STRING']; echo $url; @endphp" name="product_id"/>
                  </div>
   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
   
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


