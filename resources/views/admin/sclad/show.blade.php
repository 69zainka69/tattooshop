@extends('layouts.admin_layout')


@section('title', 'Все товары | Dashboard')

@section('content')
@section('content')
<style>
    .project-actions {
        display: grid;
        grid-gap: 5px 25px;
        grid-template-columns: 1fr;
    }
    @media (min-width: 760px) {
        .project-actions {
            grid-template-columns: repeat(2, 1fr);
        }
    }

</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Товары</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Товары</h3>
                <div class="card-tools">
                    <a class="btn btn-info btn-sm" href="{{ route('product.create', $sclad['id'])}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Добавить продукт
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
     
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 3%">
                                ID
                            </th>
                            <th style="width: 5%">
                                фото
                            </th>
                            <th>
                                Название
                            </th>
                            <th style="width: 8%">
                                Категория
                            </th>
                            <th style="width: 12%">
                                Срок годности
                            </th>
                            <th style="width: 40%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sclad->products as $product)
                        <tr>
                            <td>
                                {{$product['id']}}
                            </td>
                            <td>
                                <img width="50" alt="{{ $product->title }}" src="{{ $product->firstImage() }}">
                            </td>
                            <td>
                                {{$product->title}}
                            </td>
                            <td>
                                {{$product->category->title}}
                            </td>
                            <td>
                                @php
                                  if ($product->shelf_life) {
                                    $date = new DateTime($product->shelf_life);
                                    echo date_format($date, "d.m.Y");
                                  }
                                @endphp
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-success btn-sm" href="{{route('amounts.create', $product['id'])}}">
                                    <i class="fas fa-plus"></i>
                                    Добавить кол-во 
                                </a>
                                <a class="btn btn-success btn-sm" href="{{ route('image.upload', $product['id'] )}}">
                                    <i class="fas fa-plus"></i>
                                    Добавить картинку
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('price.create', $product['id'])}}">
                                    <i class="fas fa-pencil-alt"></i>
                                    Изменить цену
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('product.edit', $product['id'])}}">
                                    <i class="fas fa-pencil-alt"></i>
                                    Редактировать
                                </a>
                                <a class="btn btn-danger btn-sm" href="{{ route('moneyChart', $product['id'])}}">
                                    <i class="fas fa-chart-line"></i>
                                    Динамика цен
                                </a>
                                <a class="btn btn-danger btn-sm" href="{{ route('amountChart', $product['id'])}}">
                                    <i class="fas fa-chart-line"></i>
                                    Приход/расход
                                </a>
                            </td>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@endsection
