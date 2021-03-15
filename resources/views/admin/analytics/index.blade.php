@extends('layouts.admin_layout')


@section('title', 'Аналитика | Dashboard')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Аналитика</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    <div>
            <h2 style="text-align:center;">Новые покупки</h2>
             <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          ID
                      </th>
                      <th style="width: 15%">
                         Клиент
                      </th>
                      <th style="width: 8%">
                         Сумма заказа
                      </th>
                     
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <tbody>
            
                  <tr>
                      <td>
                        
                      </td>
                      <td>
                               
                      </td>
                       <td>
                               
                      </td>
                      
                      <td class="project-actions text-right">
                         
                          <a class="btn btn-info btn-sm" href="">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Просмотреть
                          </a>
                          
                      </td>
               
                
              </tbody>
          </table>
        </div>
    </div>





      </div>
    </section>
    
 
@endsection