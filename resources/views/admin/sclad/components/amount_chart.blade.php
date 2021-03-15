@extends('layouts.admin_layout')


@section('title', 'Аналитика | Dashboard')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-8">
                <h1 class="m-0 text-dark">Приход/расход по товару: {{$product->title}}</h1>
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
                    <th>Дата</th>
                    <th>Количество</th>
                    <th>Примечание</th>
                    <th>Фото</th>
                </tr>
            </thead>
            <tbody>
            @foreach($amounts as $amount)
                <tr>
                    <td>{{$amount->formatDate()}}</td>
                    <td
                    @if($amount->value > 0)
                        style="color: green;"
                    @elseif($amount->value < 0)
                        style="color: red;"
                    @endif
                    >
                        <span>{{$amount->value}}</span>
                        @if($amount->value > 0)
                        <i class="fas fa-arrow-up"></i>
                        @elseif($amount->value < 0)
                        <i class="fas fa-arrow-down"></i>
                        @endif
                    </td>
                    <td>
                        {{$amount->reference}}
                    </td>
                    <td>
                        @if($amount->img)
                            <a href="{{$amount->img}}" target="_blank">Открыть в новой вкладке</a>
                        @else
                            <span>Фото отсутствует</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection