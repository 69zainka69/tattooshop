@extends('layouts.admin_layout')


@section('title', 'Изменить данные слайда | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Изменить данные слайда</h1>
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
<div class="card card-primary"> <a class="btn btn-success btn-sm" href="/admin/{{ 'slidershome' }}">
          <i class="fas fa-plus">
          </i>Вернуться к слайдеру</a>
              <div class="card-header">
                <h3 class="card-title">Изменить данные слайда</h3>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('slidershome.update', $sliders['id']) }}">
              @csrf
              @method('PUT')
                <div class="card-body">
                 
                <div class="form-group">
                    <label for="url">Ссылк кнопки для перехода</label>
                    <input type="text" value="{{ $sliders['url']}}" name="url" class="form-control" id="url" required placeholder="Введите ссылку кнопки">
                  </div>

                  <div class="form-group">
                    <label for="lrc">Расположение кнопки</label>

                    <select class="form-control" id="sclad_id" name="lrc">
                    <option  value="">По центру</option>
                    <option  value="text-start">Слева</option>
                    <option  value="text-end">Справа</option>
                    </select>

                  </div>
                   


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Внести данные</button>
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