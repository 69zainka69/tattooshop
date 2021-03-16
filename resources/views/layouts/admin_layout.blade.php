<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src='https://cdn.tiny.cloud/1/vhjnad0pi01rrbx8yybdhi0m1oqkgetfe9xmn7r5k2i5vg7c/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li style="display:none;" class="nav-item d-none d-sm-inline-block">
        <a style="display:none;" href="index3.html" class="nav-link">Home</a>
      </li>
    
    </ul>

    <!-- SEARCH FORM -->
    <form style="display:none;" class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('HomeAdmin')}}" class="brand-link">
      <img src="/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">TattooRoom</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      @php
        $menu = [
          1 => [
            "url" => route('HomeAdmin'),
            "title" => "Главная",
            "icon" => "fa-tachometer-alt",
            "children" => [],
          ],
          2 => [
            "url" => "#",
            "title" => "Категории",
            "icon" => "fa-angry",
            "children" => [
              1 => [
                "url" => route('category.index'),
                "title" => "Все категории",
              ],
              2 => [
                "url" => route('category.create'),
                "title" => "Добавить категорию",
              ],
            ]
          ],
          
          3 => ["url" => route('basket.index'),
            "title" => "Заказы",
            "icon" => "fa-address-book",
            "children" => [],
          ],
          4 => [
            "url" => "#",
            "title" => "Блог",
            "icon" => "fa-copy",
            "children" => [
              1 => [
                "url" => route('blogs.index'),
                "title" => "Все статьи",
              ],
              2 => [
                "url" => route('blogs.create'),
                "title" => "Добавить статью",
              ]
            ]
          ],
          
          5 => ["url" => route('analytics.index'),
            "title" => "Аналитика",
            "icon" => "fa-address-book",
            "children" => [],
          ],
          6 => [
            "url" => route('gallery.index'),
            "title" => "Галерея",
            "icon" => "fa-image",
            "children" => [],
          ],
          7 => [
            "url" => "#",
            "title" => "Склады",
            "icon" => "fa-balance-scale",
            "children" => [
            1 => [
            "url" => route('sclad.index'),
            "title" => "Склады",
            "icon" => "fa-book",
            ],
            2 =>[
            "url" =>  route('sclad.create'),
            "title" => "Создать склад",
            "icon" => "fa-book",
            ]
            ]
          ],
          8 => [
            "url" => "#",
            "title" => "Поставщики",
            "icon" => "fa-book",
            "children" => [
            1 => [
            "url" => route('supplier.index'),
            "title" => "Все поставщики",
            "icon" => "fa-book",
            ],
            2 =>[
            "url" =>  route('supplier.create'),
            "title" => "Добавить поставщика",
            "icon" => "fa-book",
            ]
            ]
          ],
          9 => [
            "url" => route('slidershome.index'),
            "title" => "Работа со слайдером",
            "icon" => "fa-image",
            "children" => [],
          ],
        ]
      @endphp

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @foreach($menu as $menu_item) 
            @php
              $hasChildren = false;
              $menuClass = "";
              $treeActive = "";
              if (count($menu_item['children']) > 0) {
                $hasChildren = true;
                $menuClass = "has-treeview";
              }
            @endphp
            <li class="nav-item {{$menuClass}}">
            
              <a href="{{ $menu_item['url'] }}" class="nav-link">
              <i class="nav-icon far {{ $menu_item['icon'] }}"></i>
                <p>
                  
                  {{ $menu_item['title'] }}
                  @if($hasChildren)
                    <i class="right fas fa-angle-left"></i>
                  @endif
                </p>
              </a>
              @if($hasChildren)
                <ul class="nav nav-treeview">
                  @foreach($menu_item['children'] as $child)
                  <li class="nav-item">
                    <a href="{{ $child['url'] }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $child['title'] }}</p>
                    </a>
                  </li>
                  @endforeach
                </ul>
              @endif
            </li>
          @endforeach
          <!-- <li class="nav-item has-treeview">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Главная
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Товары
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('product.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Все товары</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('product.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Добавить товар</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Аналитика
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Нет в наличии</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Продажи</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Прибыль/рассход</p>
                </a>
              </li>
            </ul>
          </li>
      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Обратная связь
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Входящие сообщения</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Заявки на покупку</p>
                </a>
              </li>
              
            </ul>
          </li>
         
         
          <li class="nav-header">Сайт</li>
          <li style="display:none;" class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Календарь
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('gallery.index')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Галерея
              </p>
            </a>
          </li>
          <li style="display:none;" class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Заявки
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Категории
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Все категории</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Добавить категорию</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Склады
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sclad.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  
                  <p>Все Склады</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Добавить склад</p>
                </a>
              </li>
              
            </ul>
          </li> -->


          
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                ВЫХОД
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 @yield('content')
 </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a>TattooRoom</a></strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  const activeHref = $(`a[href="${window.location.href}"]`);
  activeHref.addClass('active')
  const treeUl = activeHref.closest('ul');
  treeUl.css('display', 'block');
  treeUl.closest('li').addClass('menu-open');
</script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script src="/js/admin.js"></script>

@yield('js')

</body>
</html>
