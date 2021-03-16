@extends('layouts.admin_layout')


@section('title', 'Слайды на главной странице | Dashboard')

@section('content')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Слайды на главной странице</h1>
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
          <h3 class="card-title">Слайды</h3>

          <div class="card-tools">
           <a class="btn btn-success btn-sm" href="{{ route('slide.upload', $sliders[0]->id )}}">
                                    <i class="fas fa-plus"></i>
                                    Добавить слайд
                                </a>
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
                      <th style="width: 15%">
                         Ссылка
                      </th>
                       <th style="width: 5%">
                         Кнопка 
                      </th>
                     
                     
                      <th style="width: 60%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($sliders as $slide)
                
              
                  <tr>
                      <td>
                          {{$slide['id']}}
                      </td>
                      <td>
                       
                          <img width="400" src="{{$slide->img}}">
                      </td>
                      <td>
                               {{$slide['url']}}   
                      </td>
                      <td>
                     @php
                       $a = [
                         "text-end" => "Справа",
                         "text-start" => "Слева"
                       ];
                       echo $a[$slide['lrc']] ?? 'По центру';
                     @endphp 
                      </td>
                     
                      
                      <td class="grid-actions project-actions text-right">
                       <a class="btn btn-success btn-sm" href="{{ route('slidershome.edit', $slide['id']) }}">
          <i class="fas fa-plus">
          </i>Добавть кнопку с ссылкой</a>
                      
                          <form action="{{route('slidershome.destroy', $slide['id'])}}" method="POST" style="display:inline-block;">
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