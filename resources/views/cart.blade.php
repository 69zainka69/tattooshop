
@extends('layouts.main')

@section('title', 'Tattoo Room')
@section('description', 'Tattoo Room - магазин для тату-мастера')

@section('head')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/carousel.css" rel="stylesheet">
<link href="/css/mobile.css" rel="stylesheet">
<link href="/css/cheatsheet.css" rel="stylesheet"> 
@endsection
       
  @section('content')

          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
              <main>
              @if (session('success'))
        <div class="alert alert-success" role="alert">
            
            <h4><i class="icon fa fa-check"></i> {{ session('success')}}</h4>
        </div>
        @endif
               
                @if(count($cart_items) > 0)
                <div class="row g-3">
                  <div style="padding-top:30px;" class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                      <span class="text-muted">Корзина товаров</span>
                      <span class="badge bg-secondary rounded-pill">{{count($cart_items)}}</span> </h4>
                    <ul class="list-group mb-3">
                    @foreach($cart_items as $item)
                      <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                          <h6 class="my-0">{{$item->name}}</h6>
                        </div>
                        <span class="text-muted">
                        @php
                          echo (float) $item->quantity * (float) $item->attributes->product->price($_COOKIE['currency'] ?? 'UAH')->price_shop;
                        @endphp</span>
                      </li>
                    @endforeach
                      
                      <li class="list-group-item d-flex justify-content-between">
                        <span>Всего:</span>
                        <strong>
                        @php
                          $total = 0;
                          foreach($cart_items as $item) {
                            $total += (float) $item->quantity * (float) $item->attributes->product->price($_COOKIE['currency'] ?? 'UAH')->price_shop;
                          }
                          echo $total;
                        @endphp
                        </strong>
                      </li>
                    </ul>
                    <div style="padding-left:20px; text-align:center; background:#806ad8; color:white;"><p>Вам будет доставлено посылок: {{$count_sclads}}</p>
                    <p>C {{$count_sclads}} складов</p>
                    <p>Внимание!!! Стоимость доставки по тарифам перевозчика</p></div>
            <!--
                Промокод на скидку
                    <form class="card p-2">
                      <div class="input-group">
                        <input style="width:90%;" type="text" class="form-control" placeholder="Промо код">
                        <button type="submit" class="btn btn-secondary">Использовать</button>
                      </div>
                    </form>
              -->
                  </div>
                  <div style="padding-top:30px;" class="col-md-7 col-lg-8">
                    <h4 class="mb-3 text-muted">Данные о клиенте</h4>



                    <form class="needs-validation" method="POST" action="{{ route('carts.store')}}" enctype="multipart/form-data">
                      @csrf
                      <div style="padding-right: 30px !important;" class="row g-3">
                        <div class="col-sm-6">
                          <label for="firstName" class="form-label">Имя</label>
                          <input style="width:98% !important;" name="first_name" type="text" class="form-control" id="firstName" required placeholder="" value="@if(isset($user)){{$user->first_name}}@endif">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
            
                        <div class="col-sm-6">
                          <label for="lastName" class="form-label">Фамилия</label>
                          <input style="width:100% !important;" name="last_name" type="text" class="form-control" id="lastName" required placeholder="" value="@if(isset($user)){{$user->last_name}}@endif">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>
            
                        <div class="col-sm-6">
                          <label for="phone" class="form-label">Телефон</label>
                          <input style="width:98% !important;" name="phone" type="tel" required class="form-control" id="phone" placeholder="" value="@if(isset($user)){{$user->phone}}@endif">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>
            
                        <div class="col-sm-6">
                          <label for="email" class="form-label">Email</label>
                          <input style="width:100% !important;" name="email" type="email" required value="@if(isset($user)){{$user->email}}@endif"
                           class="form-control" id="email" placeholder="you@example.com">
                          <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                          </div>
                        </div>
            
                        <div class="col-12">
                          <label for="np_city" class="form-label">Населенный пункт</label>
                          <select id="np_city" style="width:100% !important;" name="adress_1" required class="form-control" placeholder="Выберите город">
                            <option value="">Выберите населенный пункт…</option>
                          </select>
                        </div>
            
                        <div class="col-12">
                          <label for="np_warehouse" class="form-label">Отделение НП</label>
                          <select id="np_warehouse" style="width:100% !important;" name="adress_2" required class="form-control" placeholder="Отделение">
                            <option value="">Выберите отделение…</option>
                          </select>
                        </div>
            
                      </div>
            

            
                      <hr class="my-4">
            
                      <button class="w-100 btn btn-primary btn-lg" type="submit">Совершить покупку</button>
                    </form>
                  </div>
                </div>
                @else
                  <div>
                    Ваша корзина пуста!
                  </div>
                @endif
              </main>
      
            
            

          </div>
    <!-- END CARS TOVAR  --> 
    
    @endsection

    @section('js')
      <script type="application/javascript" src="/js/novaposhta.js"></script>
      <script>
        const NP = new NovaPoshta("852807f48febb086eca98a4c9ce86176");
        $(function () {
          const profileCity = "@if(isset($user)){{$user->adress_1}}@endif";
          // NP.fetchCityByRef(profileCity).then((r) => console.log('@@@', r));
          const profileWarehouse = "@if(isset($user)){{$user->adress_2}}@endif";
          NP.fetchWarehouseByRef(profileCity, profileWarehouse).then((r) => console.log('@@@', r));

          const city_selector = $('#np_city');
          city_selector.on('change', function() {
            const cityRef = $(this).val();
            if (!cityRef) return;
            const warehouse_selector = $('#np_warehouse');
            warehouse_selector.empty();
            warehouse_selector.attr('disabled', 'true');
            warehouse_selector.append(`<option value="">Загрузка…</option>`);
            NP.fetchWarehousesByCityRef($(this).val()).done((response) => {
              warehouse_selector.empty();
              warehouse_selector.append(`<option value="">Выберите отделение…</option>`)
              response.data.forEach((warehouse) => {
                warehouse_selector.append(`<option value="${warehouse.Ref}" ${warehouse.Ref === profileWarehouse ? 'selected' : ''}>${warehouse.Description}</option>`);
              });
              warehouse_selector.attr('disabled', null);
            });
          });


          city_selector.empty();
          city_selector.attr('disabled', 'true');
          city_selector.append(`<option value="">Загрузка…</option>`);
          NP.fetchCities().done((response) => {
            city_selector.empty();
            $('#np_city').append(`<option value="">Выберите населенный пункт…</option>`);
            response.data.forEach((city) => {
              $('#np_city').append(`<option value="${city.Ref}" ${city.Ref === profileCity ? 'selected' : ''}>${city.Description}</option>`);
            });
            $('#np_city').trigger('change');
            city_selector.attr('disabled', null);
          });
        });

      </script>
    @endsection