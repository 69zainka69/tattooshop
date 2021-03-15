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
              <h1 style="text-align:center;">Данные профиля</h1>
              </div>
              <div class="cols-6">
<p>Имя: <span>{{$user->first_name}}</span></p>
<p>Фамилия: <span>{{$user->last_name}}</span></p>
<p>Email: <span>{{$user->email}}</span></p>
<p>Телефон: <span>{{$user->phone}}</span></p>
                <div class="cols-6">
                 <h2 style="text-align:center;">Данные для доставок Новой Почтой</h2>
<p>Город: <span id="np_city">{{$user->adress_1}}</span></p>
<p>Отделение НП: <span id="np_warehouse">{{$user->adress_2}}</span></p>
                </div>
           
            </div>
            <a href="{{ route('profile.edit', $user['id'])}}" class="btn btn-primary">Изменить данные профиля</a>

          </div>
           
    @endsection

    @section('js')
    <script type="application/javascript" src="/js/novaposhta.js"></script>
      <script>
        const NP = new NovaPoshta("852807f48febb086eca98a4c9ce86176");
        $(function () {
          const profileCity = "{{$user->adress_1}}";
          const profileWarehouse = "{{$user->adress_2}}";
          if (profileCity) {
            NP.fetchCityByRef(profileCity).then((r) => $("#np_city").text(r.Description));
            if (profileWarehouse) {
              NP.fetchWarehouseByRef(profileCity, profileWarehouse).then((r) => $("#np_warehouse").text(r.Description));
            }
          }
        });
        </script>
    @endsection