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
        <div style="background:#6dfda0; margin-top:50px;" id="new_orders">
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
                        @foreach($baskets as $basket)
                        <tr>
                            <td>
                                {{$basket->id}}
                            </td>
                            <td>
                                {{$basket->fullName()}}
                            </td>
                            <td>
                                @php
                                $total = 0;
                                $currency = '';
                                foreach($basket->items as $item) {
                                $total += $item->total_price;
                                $currency = $item->currency;
                                }
                                echo $total . ' ' . $currency;
                                @endphp
                            </td>

                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="{{ route('basket.show', $basket['id']) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Просмотреть
                                </a>

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <div style="background:#6dc1fd; margin-top:50px;" id="sent">
            <h2 style="text-align:center;">Комлектуются</h2>
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
                        @foreach($comletings as $basket)
                        <tr>
                            <td>
                                {{$basket->id}}
                            </td>
                            <td>
                                {{$basket->fullName()}}
                            </td>
                            <td>
                                @php
                                $total = 0;
                                $currency = '';
                                foreach($basket->items as $item) {
                                $total += $item->total_price;
                                $currency = $item->currency;
                                }
                                echo $total . ' ' . $currency;
                                @endphp
                            </td>

                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="{{ route('basket.show', $basket['id']) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Просмотреть
                                </a>

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <div style="background:#ff8936; margin-top:50px;" id="comleting">
            <h2 style="text-align:center;">Отправленные</h2>
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
                        @foreach($sents as $basket)
                        <tr>
                            <td>
                                {{$basket->id}}
                            </td>
                            <td>
                                {{$basket->fullName()}}
                            </td>
                            <td>
                                @php
                                $total = 0;
                                $currency = '';
                                foreach($basket->items as $item) {
                                $total += $item->total_price;
                                $currency = $item->currency;
                                }
                                echo $total . ' ' . $currency;
                                @endphp
                            </td>

                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="{{ route('basket.show', $basket['id']) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Просмотреть
                                </a>

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>


        <div style="background:#fd5858; margin-top:50px;" id="comlited">
            <h2 style="text-align:center;">Замороженные средства за товар</h2>
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
                        @foreach($ice as $basket)
                        <tr>
                            <td>
                                {{$basket->id}}
                            </td>
                            <td>
                                {{$basket->fullName()}}
                            </td>
                            <td>
                                @php
                                $total = 0;
                                $currency = '';
                                foreach($basket->items as $item) {
                                $total += $item->total_price;
                                $currency = $item->currency;
                                }
                                echo $total . ' ' . $currency;
                                @endphp
                            </td>

                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="{{ route('basket.show', $basket['id']) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Просмотреть
                                </a>

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>



        <div style="background:#ababab;; margin-top:50px;" id="comlited">
            <h2 style="text-align:center;">Завершенные заказы</h2>
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
                        @foreach($comliteds as $basket)
                        <tr>
                            <td>
                                {{$basket->id}}
                            </td>
                            <td>
                                {{$basket->fullName()}}
                            </td>
                            <td>
                                @php
                                $total = 0;
                                $currency = '';
                                foreach($basket->items as $item) {
                                $total += $item->total_price;
                                $currency = $item->currency;
                                }
                                echo $total . ' ' . $currency;
                                @endphp
                            </td>

                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="{{ route('basket.show', $basket['id']) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Просмотреть
                                </a>

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>



    </div>
</section>


@endsection
