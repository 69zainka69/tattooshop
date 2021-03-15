@extends('layouts.admin_layout')


@section('title', 'Аналитика | Dashboard')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-8">
                <h1 class="m-0 text-dark">Динамика цен по товару: {{$product->title}}</h1>
            </div><!-- /.col -->
            <div class="col-4 text-right">
                <a class="btn btn-success btn-sm" href="{{ route('sclad.show', $product['sclad_id'])}}">
                    <i class="fas fa-external-link-alt"></i>
                    Перейти назад на склад
                </a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th>Дата изменения</th>
                    <th>Цена закупки</th>
                    <th>Цена продажи салону</th>
                    <th>Цена продажи в салоне</th>
                    <th>Цена Shop</th>
                </tr>
            </thead>
            <tbody>
            @foreach($prices as $price)
                <tr>
                    <td>{{$price->formatDate()}}</td>
                    <td
                    @if($loop->last)
                    @elseif($price->price_purchase > $prices[$loop->index+1]->price_purchase)
                        style="color: green;"
                    @else
                        style="color: red;"
                    @endif
                    >
                        <span>{{$price->price_purchase}} {{$currency}}</span>
                        @if($loop->last)
                        @elseif($price->price_purchase > $prices[$loop->index+1]->price_purchase)
                        <i class="fas fa-arrow-up"></i>
                        @else
                        <i class="fas fa-arrow-down"></i>
                        @endif
                    </td>
                    <td
                    @if($loop->last)
                    @elseif($price->price_provided > $prices[$loop->index+1]->price_provided)
                        style="color: green;"
                    @else
                        style="color: red;"
                    @endif
                    >
                        <span>{{$price->price_provided}} {{$currency}}</span>
                        @if($loop->last)
                        @elseif($price->price_provided > $prices[$loop->index+1]->price_provided)
                        <i class="fas fa-arrow-up"></i>
                        @else
                        <i class="fas fa-arrow-down"></i>
                        @endif
                    </td>
                    <td
                    @if($loop->last)
                    @elseif($price->price_parlor > $prices[$loop->index+1]->price_parlor)
                        style="color: green;"
                    @else
                        style="color: red;"
                    @endif
                    >
                        <span>{{$price->price_parlor}} {{$currency}}</span>
                        @if($loop->last)
                        @elseif($price->price_parlor > $prices[$loop->index+1]->price_parlor)
                        <i class="fas fa-arrow-up"></i>
                        @else
                        <i class="fas fa-arrow-down"></i>
                        @endif
                    </td>
                    <td
                    @if($loop->last)
                    @elseif($price->price_shop > $prices[$loop->index+1]->price_shop)
                        style="color: green;"
                    @else
                        style="color: red;"
                    @endif
                    >
                        <span>{{$price->price_shop}} {{$currency}}</span>
                        @if($loop->last)
                        @elseif($price->price_shop > $prices[$loop->index+1]->price_shop)
                        <i class="fas fa-arrow-up"></i>
                        @else
                        <i class="fas fa-arrow-down"></i>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection