@extends('layouts.admin_layout')


@section('title', 'Создать постовщика | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Добавить поставщика</h1>
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
                <h3 class="card-title">Новый поставщик</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('supplier.store')}}" enctype="multipart/form-data">
              @csrf
        
                  
                  <div class="form-group">
                    <label for="title">Поставщик - Сокращенное название</label>
                    <input type="text" name="title" class="form-control" id="title" required placeholder="Дайте поставщику имя">
                  </div>

                  <div class="form-group">
                    <label for="name">Уполномоченное лицо</label>
                    <input type="text" name="name" class="form-control" id="name" required placeholder="Дайте поставщику имя">
                  </div>
                    <div class="form-group">
                    <label for="phone">Телефон поставщика</label>
                    <input type="number" name="phone" class="form-control" id="phone" required placeholder="Введите телефон поставщика">
                  </div>

                  <div class="form-group">
                    <label for="adress">Адрес поставщика</label>
                    <input type="text" name="adress" class="form-control" id="adress" required placeholder="Введите адрес поставщика">
                  </div>

                   <div class="form-group">
                    <label for="info">Информация о поставщике</label>
                    <input type="text" name="info" class="form-control" id="info" required placeholder="Введите информацию о поставщике">
                  </div>

                  <div class="form-group">
                    <label for="sclad_id">Склады</label>
                    <select class="form-control" name="sclad_id">
        @foreach($sclads as $sclad)
                <option value="{{ $sclad->id }}"> {{ $sclad->title }}</option>
        @endforeach
                    </select>
                  </div>
                    <div class="form-group">
                    <label for="rdpo">Код ЕГРПОУ</label>
                    <input type="number" name="rdpo" class="form-control" id="rdpo">
                  </div>

                  <div class="form-group">
                    <label for="doc">Документы</label>
                    <input type="file" name="doc" class="form-control" id="doc">
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