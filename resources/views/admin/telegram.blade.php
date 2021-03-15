@extends('layouts.admin_layout')


@section('title', 'Рассылка в телеграмм канал | Dashboard')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Рассылка в телеграмм канал</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
<div class="container-fluid">
<div class="col-lg-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Рассылка в телеграмм канал</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="send.php">
              @csrf
            


              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Сообщение в телеграм канал:</label>
                    <input type="text" name="totelegram" class="form-control" id="totelegram" required placeholder="Введите текст сообщения">
                  </div>
                

                <div class="card-footer">
                  <button type="submit"  class="btn btn-primary">Отправить</button>
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