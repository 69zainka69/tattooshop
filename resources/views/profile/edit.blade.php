@extends('layouts.main')

@section('title', 'Ваш Профиль - Tattoo Room')
@section('description', 'Профиль пользователя магазина Tattoo Room - магазин для тату-мастера')

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
            <div class="blocktitle">
              <h1 style="text-align:center;">Редактирование профиля - {{$user->fullName()}}</h1>
              </div>
              <div class="cols-6">
 
 
 
                <form role="form" method="POST" action="{{ route('profile.update', $user['id'])}}">
             @csrf
              @method('PUT')
                <div class="form-group">
                    <label for="first_name">Имя</label>
                    <input type="text" name="first_name" value="{{$user->first_name}}" name="first_name"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Фамилия</label>
                    <input type="text" name="last_name" value="{{$user->last_name}}" name="last_name"/>
                </div>
                <div class="form-group">
                    <label for="phone">Телефон</label>
                    <input type="text" name="phone" value="{{$user->phone}}" name="phone"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{$user->email}}" name="email"/>
                </div>
                 <div class="form-group">
                          <label for="np_city" class="form-label">Населенный пункт</label>
                          <select id="np_city" style="width:100% !important;" name="adress_1" required class="form-control" placeholder="Выберите город">
                            <option value="">Выберите населенный пункт…</option>
                          </select>
                        </div>
            
                        <div class="form-group">
                          <label for="np_warehouse" class="form-label">Отделение НП</label>
                          <select id="np_warehouse" style="width:100% !important;" name="adress_2" required class="form-control" placeholder="Отделение">
                            <option value="">Выберите отделение…</option>
                          </select>
                        </div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" @if ($user->vean == 1) checked @endif value="1" name="vean" id="VeAn">
  <label class="form-check-label" for="flexCheckDefault">
    Ученик VeAn
  </label>
</div>
                <div class="card-footer">
                  <button id="formSubmit" type="submit" class="btn btn-primary">Изменить</button>
                </div>
              </form>
                </div>
           
            </div>

          </div>
           
    <!-- END CARS TOVAR  --> 
    
    @endsection

    @section('js')
      <script type="application/javascript" src="/js/novaposhta.js"></script>
      <script>
        const NP = new NovaPoshta("852807f48febb086eca98a4c9ce86176");
        $(function () {
          const submitBtn = $('#formSubmit');
          const profileCity = "@if(isset($user)){{$user->adress_1}}@endif";
          const profileWarehouse = "@if(isset($user)){{$user->adress_2}}@endif";
          submitBtn.attr('disabled', 'disabled');
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
              submitBtn.attr('disabled', null);
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