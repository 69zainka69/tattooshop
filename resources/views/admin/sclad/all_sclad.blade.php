@extends('layouts.admin_layout')
@section('title', 'Все Склады | Dashboard')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Склады</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
 <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                       <th style="width: 5%">
                          Название склада
                      </th>
                     
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($sclads as $sclad)
                  <tr>
                      <td>
                          {{$sclad['id']}}
                      </td>
                      <td>
                        {{$sclad['title']}}
                      </td>
                  
                      <td class="project-actions text-right">
                         
                          <a class="btn btn-success btn-sm" href="{{ route('sclad.show', $sclad['id'])}}">
                              <i class="fas fa-external-link-alt">
                              </i>
                             Перейти в склад
                          </a>
                      </td>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
      </div>
    </section>
@endsection