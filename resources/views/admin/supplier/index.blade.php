@extends('layouts.admin_layout')


@section('title', 'Все Поставщики | Dashboard')

@section('content')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Поставщики</h1>
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
          <h3 class="card-title">Поставщики</h3>

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
                      <th style="width: 2%">
                          ID
                      </th>
                       <th style="width: 7%">
                          Название
                      </th>

                       <th style="width: 7%">
                          Код ЕГРПОУ
                      </th>
                
                      <th style="width: 8%">
                          Телефон
                      </th>
                      <th style="width: 8%">
                          Контактное лицо
                      </th>
                   
                       <th style="width: 3%">
                          Документы
                      </th>
                  
                      <th style="width: 10%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($suppliers as $supplier)
                
              
                  <tr>
                      <td>
                          {{$supplier['id']}}
                      </td>
                      
                      <td>
                               {{$supplier['title']}}   
                      </td>
                      <td>
                               {{$supplier->rdpo}}   
                      </td>
                     
                    
                      <td>
                               {{$supplier->phone}}   
                      </td>
                      <td>
                               {{$supplier->name}}   
                      </td>
                  
                       <td>
                              <a href="{{ $supplier['doc']}}">Скачать</a> 
                      </td>
                     
                      <td class="project-actions text-right">
                         
                          <a class="btn btn-info btn-sm" href="{{ route('supplier.edit', $supplier['id'])}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                          <form action="{{route('supplier.destroy', $supplier['id'])}}" method="POST" style="display:inline-block;">
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