@extends('layouts.admin_layout')


@section('title', 'Добавть товар на склад | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Добавить количество товара</h1>
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
                <h3 class="card-title">Добавить количество товара - {{$product['title'] }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('amounts.store')}}">
              @csrf
            

                 <div style="display:none;" class="form-group">
                    <label for="product_id">продукт</label>
                    <input type="number" value="@php $url = $_SERVER['QUERY_STRING']; echo $url; @endphp" name="product_id"/>
                  </div>

                 <div class="form-group">
                    <label for="value">Добавить штук</label>
                    <input type="number" name="value" class="form-control" id="value" required placeholder="Добавить товара">
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