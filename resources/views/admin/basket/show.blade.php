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
          @if (session('success'))
        <div class="alert alert-success" role="alert">
          
            <h4><i class="icon fa fa-check"></i> {{ session('success')}}</h4>
        </div>
        @endif
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    <div>
            <h2 style="text-align:center;">Заказ №{{$basket->id}}</h2>
            <div class="row">

            <div class="col-12 col-lg-4">
            <div class="card-body pl-5">
              <dl>
              <dt>ФИО</dt><dd>{{$basket->fullName()}}</dd>
              <dt>Номер телефона</dt><dd>{{$basket->phone}}</dd>
              <dt>Email</dt><dd>{{$basket->email}}</dd>
              <dt>Адрес город</dt><dd id="np_city">{{$basket->adress_1}}</dd>
              <dt>Отделение НП</dt><dd id="np_warehouse">{{$basket->adress_2}}</dd>
              </dl>
            </div>
            </div>
            <div class="col-12 col-lg-8">
             <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 35%">
                          Товар
                      </th>
                      <th style="width: 15%">
                         Количество
                      </th>
                      <th style="width: 15%">
                         Сумма товара
                      </th>
                     <th style="width: 25%">
                      Текущий остаток на складе
                     </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($basket->items as $item)
                <tr>
                      <td>
                        {{$item->product->title}}
                      </td>
                      <td>
                               {{$item->count}}
                      </td>
                       <td>
                               {{$item->total_price}} {{$item->currency}}
                      </td>
                      <td>
                      {{$item->product->amount()}}
                      </td>
                      
                </tr> 
              @endforeach
                  
                  
                
              </tbody>
          </table>
          <div style="padding-top:50px;">
         <form role="form" method="POST" action="{{ route('carts.update', $basket['id']) }}">
              @csrf
              @method('PUT')
               <div style="display:none;" class="form-group">
                    <label for="status"></label>
                    <input type="number" value="@php if($basket->status==100){echo "200";}if($basket->status==200){echo "300";}if($basket->status==300){echo "400";}
                    @endphp" name="status" class="form-control" id="status" required>
                  </div>

                   <div style="display:none;"  class="form-group">
                    <label for="sclad_id"></label>
                    <input type="number" value="{{ $basket->sclad_id }}" name="sclad_id" class="form-control" id="sclad_id" required>
                  </div>

                   <div style="display:none;" class="form-group">
                    <label for="user_id"></label>
                    <input type="text" value="{{ $basket->user_id }}" name="user_id" class="form-control" id="user_id" required>
                  </div>

                  <div style="display:none;"  class="form-group">
                    <label for="first_name"></label>
                    <input type="text" value="{{ $basket->first_name }}" name="first_name" class="form-control" id="first_name" required>
                  </div>

                   <div style="display:none;" class="form-group">
                    <label for="last_name"></label>
                    <input type="text" value="{{ $basket->last_name }}" name="last_name" class="form-control" id="last_name" required>
                  </div>

                  <div style="display:none;" class="form-group">
                    <label for="phone"></label>
                    <input type="text" value="{{ $basket->phone }}" name="phone" class="form-control" id="phone" required>
                  </div>
                  <div style="display:none;" class="form-group">
                    <label for="email"></label>
                    <input type="text" value="{{ $basket->email }}" name="email" class="form-control" id="email" required>
                  </div>
                   <div style="display:none;" class="form-group">
                    <label for="adress_1"></label>
                    <input type="text" value="{{ $basket->adress_1 }}" name="adress_1" class="form-control" id="adress_1" required>
                  </div>
                   <div style="display:none;" class="form-group">
                    <label for="adress_2"></label>
                    <input type="text" value="{{ $basket->adress_2 }}" name="adress_2" class="form-control" id="adress_2" required>
                  </div>

                  <div style="@php if($basket->status!=300){echo "display:none";} @endphp" class="form-group">
                    <label for="ttn"></label>
                    <input type="number" value="" name="ttn" class="form-control" id="ttn" required>
                  </div>

                  <p style="@php if($basket->status<350){echo "display:none";} @endphp">ТТН: {{ $basket->ttn }}</p>

                  <div style="@php if($basket->status==400){echo "display:none";} @endphp" class="card-footer">
                  <button type="submit" class="btn btn-primary">Перейти к следующему шагу</button>
                </div>
              </form>


              <form role="form" method="POST" action="{{ route('carts.update', $basket['id']) }}">
              @csrf
              @method('PUT')
               <div style="display:none;" class="form-group">
                    <label for="status"></label>
                    <input type="number" value="350" name="status" class="form-control" id="status" required>
                  </div>

                   <div style="display:none;"  class="form-group">
                    <label for="sclad_id"></label>
                    <input type="number" value="{{ $basket->sclad_id }}" name="sclad_id" class="form-control" id="sclad_id" required>
                  </div>

                   <div style="display:none;" class="form-group">
                    <label for="user_id"></label>
                    <input type="text" value="{{ $basket->user_id }}" name="user_id" class="form-control" id="user_id" required>
                  </div>

                  <div style="display:none;"  class="form-group">
                    <label for="first_name"></label>
                    <input type="text" value="{{ $basket->first_name }}" name="first_name" class="form-control" id="first_name" required>
                  </div>

                   <div style="display:none;" class="form-group">
                    <label for="last_name"></label>
                    <input type="text" value="{{ $basket->last_name }}" name="last_name" class="form-control" id="last_name" required>
                  </div>

                  <div style="display:none;" class="form-group">
                    <label for="phone"></label>
                    <input type="text" value="{{ $basket->phone }}" name="phone" class="form-control" id="phone" required>
                  </div>
                  <div style="display:none;" class="form-group">
                    <label for="email"></label>
                    <input type="text" value="{{ $basket->email }}" name="email" class="form-control" id="email" required>
                  </div>
                   <div style="display:none;" class="form-group">
                    <label for="adress_1"></label>
                    <input type="text" value="{{ $basket->adress_1 }}" name="adress_1" class="form-control" id="adress_1" required>
                  </div>
                   <div style="display:none;" class="form-group">
                    <label for="adress_2"></label>
                    <input type="text" value="{{ $basket->adress_2 }}" name="adress_2" class="form-control" id="adress_2" required>
                  </div>

                  <div style="@php if($basket->status==350){echo "display:none";} @endphp" class="card-footer">
                  <button type="submit" class="btn btn-primary">Заморозить</button>
                </div>
              </form>
              
              </div>
        </div>
        </div>
    </div>





      </div>
    </section>
    
 
@endsection

  @section('js')
  <script type="application/javascript" src="/js/novaposhta.js"></script>
      <script>
        const NP = new NovaPoshta("852807f48febb086eca98a4c9ce86176");
        $(function () {
          const profileCity = "{{$basket->adress_1}}";
          const profileWarehouse = "{{$basket->adress_2}}";
          NP.fetchCityByRef(profileCity).then((r) => $("#np_city").text(r.Description));
          NP.fetchWarehouseByRef(profileCity, profileWarehouse).then((r) => $("#np_warehouse").text(r.Description));
        });
        </script>
  @endsection