@extends('layouts.admin_layout')


@section('title', 'Админка | Dashboard')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Главная</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$products_count}}</h3>

                        <p>Всего товаров</p>
                        <p>На сумму (по цене закупки грн):
                            <span>
                                @php
                                $total = 0;
                                foreach($products as $product) {
                                $price = $product->price('UAH')->price_purchase;
                                $amount = $product->amount();
                                $total += $price * $amount;
                                }
                                echo $total;
                                @endphp
                                грн</span></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('product.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$getTotlaSumSale}}</h3>

                        <p>Прибыль</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('basket.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$user_count}}</h3>

                        <p>Зарегистрировано пользователей</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Инкасировано</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ route('basket.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->







        </div>

        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$new_orders_count}}</h3>
                        <p>Новые заказы</p>
                        <p>На сумму: <span>@php
                                $total = 0;
                                foreach($new_orders_summ as $basket) {
                                foreach($basket->items as $basket_item) {
                                $total += $basket_item->total_price;
                                }
                                }
                                echo $total;
                                @endphp
                            </span></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('basket.index') }}#new_orders" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $comleting_count }}</h3>
                        <p>Комплектующиеся</p>
                        <p>На сумму (по цене продажи): <span>@php
                                $total = 0;
                                foreach($comleting_summ as $basket) {
                                foreach($basket->items as $basket_item) {
                                $total += $basket_item->total_price;
                                }
                                }
                                echo $total;
                                @endphp</span></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('basket.index') }}#sent" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$sent_count}}</h3>
                        <p>Отправленные</p>
                        <p>На сумму (по цене продажи): <span>@php
                                $total = 0;
                                foreach($sent_summ as $basket) {
                                foreach($basket->items as $basket_item) {
                                $total += $basket_item->total_price;
                                }
                                }
                                echo $total;
                                @endphp</span></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('basket.index') }}#comleting" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $comlited_count }}</h3>

                        <p>Завершенные заказы</p>
                        <p>Продано на сумму: <span>@php
                                $total = 0;
                                foreach($comlited_summ as $basket) {
                                foreach($basket->items as $basket_item) {
                                $total += $basket_item->total_price;
                                }
                                }
                                echo $total;
                                @endphp</span></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ route('basket.index') }}#comlited" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6">
                <!-- small box -->
                <div style="background-color: #000dff!important;" class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $ice_count }}</h3>

                        <p>Товары под реализацию</p>
                        <p>На сумму: <span>
                                @php
                                $total = 0;
                                foreach($ice_summ as $basket) {
                                foreach($basket->items as $basket_item) {
                                $total += $basket_item->total_price;
                                }
                                }
                                echo $total;
                                @endphp
                            </span></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ route('basket.index') }}#comlited" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->



        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div style="background:#43e0d2; width:260px;" class="row">


            <form role="form" method="POST" action="send.php">
                @csrf




                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Сообщение в телеграм канал:</label>
                        <input type="text" name="totelegram" class="form-control" id="totelegram" required placeholder="Введите текст сообщения">
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
            </form>

        </div>





    </div>
    <div class="p-5">
    @role('admin')
    @foreach($sclads_data as $sclad_data)
    <h2 class="p-2">{{ $sclad_data['sclad']->title }}</h2>
    <div class="row">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$sclad_data['new_orders']->count()}}</h3>
                    <p>Новые заказы</p>
                    <p>На сумму: <span>
                    @php
                      $total = 0;
                      foreach($sclad_data['new_orders'] as $basket) {
                        foreach($basket->items as $basket_item) {
                          $total += $basket_item->total_price;
                        }
                      }
                      echo $total;
                    @endphp
                    </span></p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('basket.index') }}#new_orders" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $sclad_data['completing_orders']->count() }}</h3>
                    <p>Комплектующиеся</p>
                    <p>На сумму (по цене продажи): <span>@php
                            $total = 0;
                            foreach($sclad_data['completing_orders'] as $basket) {
                            foreach($basket->items as $basket_item) {
                            $total += $basket_item->total_price;
                            }
                            }
                            echo $total;
                            @endphp</span></p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('basket.index') }}#sent" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$sclad_data['sent_orders']->count()}}</h3>
                    <p>Отправленные</p>
                    <p>На сумму (по цене продажи): <span>@php
                            $total = 0;
                            foreach($sclad_data['sent_orders'] as $basket) {
                            foreach($basket->items as $basket_item) {
                            $total += $basket_item->total_price;
                            }
                            }
                            echo $total;
                            @endphp</span></p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('basket.index') }}#comleting" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $sclad_data['completed_orders']->count() }}</h3>

                    <p>Завершенные заказы</p>
                    <p>Продано на сумму: <span>@php
                            $total = 0;
                            foreach($sclad_data['completed_orders'] as $basket) {
                            foreach($basket->items as $basket_item) {
                            $total += $basket_item->total_price;
                            }
                            }
                            echo $total;
                            @endphp</span></p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ route('basket.index') }}#comlited" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div style="background-color: #000dff!important;" class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $sclad_data['ice_orders']->count() }}</h3>

                    <p>Товары под реализацию</p>
                    <p>На сумму: <span>
                            @php
                            $total = 0;
                            foreach($sclad_data['ice_orders'] as $basket) {
                            foreach($basket->items as $basket_item) {
                            $total += $basket_item->total_price;
                            }
                            }
                            echo $total;
                            @endphp
                        </span></p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ route('basket.index') }}#comlited" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="small-box bg-success">

                <div class="inner">
                    <h3>{{$sclad_data['totalSold']}}</h3>

                    <p>Прибыль</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('basket.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <!-- ./col -->
    </div>
    </div>
    @endforeach


    @endrole
    </div>
</section>


@endsection
