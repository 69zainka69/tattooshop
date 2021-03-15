@extends('layouts.admin_layout')


@section('title', 'Все статьи | Dashboard')

@section('content')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Статьи</h1>
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
          <h3 class="card-title">Статьи</h3>
          

          <div class="card-tools">
           <a class="btn btn-info btn-sm" href="{{ route('blogs.create')}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Добавить Статью
                          </a>
          </div>
        </div>
        <div class="card-body p-0">
       
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 3%">
                          ID
                      </th>
                       <th style="width: 5%">
                          фото
                      </th>
                      <th >
                         Название
                      </th>
                      
                     
                      <th style="width: 50%">
                      </th>
                  </tr>
              </thead>
              <tbody>

              @foreach($articles as $article)
                             
                  <tr>
                      <td>
                          {{$article['id']}}
                      </td>
                      <td>
                        <img width="50" alt="{{ $article->title }}" src="{{ $article->img }}">
                      </td>
                      <td>
                               {{$article->title}}   
                      </td>
                     
                     <td class="project-actions text-right">
                       
                      <a class="btn btn-success btn-sm" href="{{-- route('blogs.upload', $article['id'] )--}}">
          <i class="fas fa-pencil-alt">
          </i>
          Добавить картинку
             </a>

             
                <a class="btn btn-info btn-sm" href="{{ route('blogs.edit', $article['id'])}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                         
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