@extends('layouts.admin_layout')


@section('title', 'Создать акцию | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Создание акции</h1>
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
               
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('akciihome.store') }}">
              @csrf
            
                <div class="card-body">
                 
                <div class="form-group">
                    <label for="title">Название акции</label>
                    <input type="text" name="title" class="form-control" id="title" required placeholder="Введите название акции">
                  </div>

                   <div class="form-group">
                    <label for="desc">(Короткое) СЕО описание акции Описание до 170 символов - Description для Google</label>
                    <input type="text" name="description" class="form-control" id="desc" required placeholder="Введите описание акции">
                  </div>

                    <div class="form-group">
                    <label for="content">Контент - тело акции</label>
                   <textarea name="content" class="description" id="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="url">Введите  URL-Alias (ссылку) статьи</label>
                    <input type="text" name="url" class="form-control" id="url" required placeholder="Введите ссылку на акцию: tovar-po-rassrochke">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Создать акцию</button>
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