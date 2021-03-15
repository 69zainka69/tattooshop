@extends('layouts.admin_layout')


@section('title', 'Все товары | Dashboard')

@section('content')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Товары</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    

 <div class="card">
        <div class="card-header">
          <h3 class="card-title">Товары</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          ID
                      </th>
                       <th style="width: 5%">
                          фото
                      </th>
                      <th >
                         Название
                      </th>
                       <th >
                         Категория
                      </th>
                     
                     
                      <th style="width: 60%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($products as $product)
                
              
                  <tr>
                      <td>
                          {{$product['id']}}
                      </td>
                      <td>
                        @php
                          $image = '';
                          if(count($product->images) > 0){
                            $image = $product->images[0]['img'];
                          } else {
                            $image = '/img/no_image.png';
                          }
                          echo '<img width="50" alt="'; echo $product->title; echo '" src="'; echo $image; echo '">'; 
                        @endphp
                      </td>
                      <td>
                               {{$product['title']}}   
                      </td>
                      <td>
                      {{$product->category->title}}
                      </td>
                     
                      
                      <td class="grid-actions project-actions text-right">
                       <a class="btn btn-success btn-sm" href="{{route('amounts.create', $product['id'])}}">
          <i class="fas fa-plus">
          </i>Добавть кол-во</a>
                      <a class="btn btn-success btn-sm" href="{{ route('image.upload', $product['id'] )}}">
          <i class="fas fa-plus">
          </i>
          Добавить картинку
             </a>

                           <a class="btn btn-info btn-sm" href="{{ route('price.create', $product['id'])}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Изменить цену
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('product.edit', $product['id'])}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                          <form action="{{route('product.destroy', $product['id'])}}" method="POST" style="display:inline-block;">
                             @csrf
                             @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm delete-btn">
                              <i class="fas fa-trash">
                              </i>
                              Удалить
                          </button>
                          </form>
                      </td>
                 @endforeach
                
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection