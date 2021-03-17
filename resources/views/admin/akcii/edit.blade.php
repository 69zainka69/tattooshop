@extends('layouts.admin_layout')


@section('title', 'Изменение акции | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Изменение акции</h1>
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
                <h3 class="card-title">Изменить Акцию: {{ $akcii->title}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('akciihome.update', $akcii['id'])}}">
              @csrf
              @method('PUT')
                <div class="card-body">
                 
                <div class="form-group">
                    <label for="title">Название товара</label>
                    <input type="text" value="{{ $akcii['title']}}" name="title" class="form-control" id="title" required placeholder="Введите название акции">
                  </div>

                   <div class="form-group">
                    <label for="description">Описание до 170 символов - Description для Google</label>
                    <input type="text" value="{{ $akcii['description']}}" name="description" class="form-control" id="desc" required placeholder="Введите описание акции">
                  </div>

                  <div class="form-group">
                    <label for="content">Контент - тело акции (информация об акции)</label>
                   <textarea name="content" class="description" id="description">{{ $akcii['content'] }}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="url">Введите  URL-Alias (ссылку) акции</label>
                    <input type="text" value="{{ $akcii['url']}}" name="url" class="form-control" id="url" required placeholder="Введите ссылку на акцию: tovar">
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