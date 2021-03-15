@extends('layouts.admin_layout')


@section('title', 'Все Галерея | Dashboard')

@section('content')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Галерея</h1>
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
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    

 <div class="card">
        <div class="card-header">
          <h3 class="card-title">Галерея</h3>

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
                         Фото
                      </th>
                      <th >
                         
                          Товар
                      </th>
                     
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($images as $image)
                
              
                  <tr>
                      <td>
                          {{$image['id']}}
                      </td>
                      <td>
                               <img width="80" alt="{{$image->id}}" src="{{$image->img}}">   
                      </td>
                     <td>
                       {{$image->product->title}}   
                      
                      
                      </td>
                      
                      <td class="project-actions text-right">
                         
                          <a class="btn btn-info btn-sm" href="{{ route('gallery.edit', $image['id'])}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                          <form action="{{route('gallery.destroy', $image['id'])}}" method="POST" style="display:inline-block;">
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
@endsection