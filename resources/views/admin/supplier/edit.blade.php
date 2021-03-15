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
                <h3 class="card-title">Изменить Поставщика: {{ $suppliers['title']}}</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('supplier.update', $suppliers['id']) }}">
              @csrf
              @method('PUT')
                <div class="card-body">
                 
                <div class="form-group">
                    <label for="exampleInputEmail1">Имя поставщика</label>
                    <input type="text" value="{{ $suppliers['title'] }}" name="title" class="form-control" id="exampleInputEmail1" required placeholder="Введите название товара">
                  </div>

                  <div class="form-group">
                    <label for="name">Уполномоченное лицо</label>
                    <input type="text" name="name" value="{{ $suppliers['name']}}" class="form-control" id="name" required placeholder="Дайте поставщику имя">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Телефон производителя</label>
                    <input type="text" value="{{ $suppliers['phone']}}" name="phone" class="form-control" id="exampleInputEmail1" required placeholder="Введите описание товара">
                  </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Адрес</label>
                    <input type="text" value="{{ $suppliers['adress']}}" name="adress" class="form-control" id="exampleInputEmail1" required placeholder="Введите описание товара">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Информация о производителе</label>
                    <input type="text" value="{{ $suppliers['info']}}" name="info" class="form-control" id="exampleInputEmail1" required placeholder="Введите цену в гривне">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Склады</label>
                    <input type="text" value="{{ $suppliers['sclad_id']}}" name="sclad_id" class="form-control" id="exampleInputEmail1" required placeholder="Введите цену в гривне">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Склады</label>
                    <select class="form-control" name="sclad_id">
                    <option value="{{ $suppliers['sclad_id'] }}">по умолчанию</option>
        @foreach($sclads as $sclad)
                <option value="{{ $sclad->id }}"> {{ $sclad->title }}</option>
        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="rdpo">Код ЕГРПОУ</label>
                    <input type="number" value="{{ $suppliers['rdpo']}}" name="rdpo" class="form-control" id="rdpo">
                  </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Документы</label>
                    <a href="{{ $suppliers['doc']}}">Скачать</a> 
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