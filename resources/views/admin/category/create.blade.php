@extends('layouts.admin_layout')


@section('title', 'Создать категорию | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Добавить Категорию</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->

            @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="allert" aria-hidden="true">x</button>
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
                <h3 class="card-title">Новая Категория</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('category.store')}}">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Название категории</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" required placeholder="Введите название категории">
                  </div>

                 <div class="form-group">
                    <label for="exampleInputEmail1">Описание Категории</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" required placeholder="Введите описание категории">
                  </div>

                <div class="form-group">
                    <label for="parent_id">Главная категория для этой категории</label>


<select class="form-control" name="parent_id">
<option value="0">Эта категория будет являться главной</option>
@foreach($categories as $category)
  <option value="{{$category['id']}}">{{$category['title']}}</option>
@endforeach
</select>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Введите  URL-Alias (ссылку) категории</label>
                    <input type="text" name="url_cat" class="form-control" id="exampleInputEmail1" required placeholder="Введите название категории">
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