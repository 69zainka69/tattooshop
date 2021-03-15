<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon2.png" type="image/png">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i&display=swap" rel="stylesheet">
    @yield('head')
    <style>
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);

        .social a {
            text-align: center;
            width: 48px;
            height: 48px;
            float: left;
            background: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15), inset 0 0 50px rgba(0, 0, 0, 0.1);
            border-radius: 24px;
            margin: 0 10px 10px 0;
            padding: 6px;
            color: #000;
        }

        .youtube a:hover {
            background: #c4302b;
            color: #fff;
        }

        .instagram a:hover {
            background: #f56659;
            color: #fff;
        }

        .facebook a:hover {
            background: #3b5998;
            color: #fff;
        }

        .vk a:hover {
            background: #5d84ae;
            color: #fff;
        }

        .telegram a:hover {
            background: #249bd7;
            color: #fff;
        }

        .socicons {
            padding-top: 5px;
        }

        .menused {
            padding: .25rem .5rem;
            font-weight: 600;
            color: rgba(0, 0, 0, .65);
            border: 0;
            text-align: start;
        }

        .pagetitle:first-letter {
            text-transform: uppercase;
        }

        #navbarCollapse>ul {
            padding-top: 10px;
        }

        #button {
            display: flex;
            justify-content: center;
            align-items: center;

            background-color: #8c82fc;
            width: 40px;
            height: 40px;
            text-align: center;
            border-radius: 4px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            transition: background-color .3s, opacity .5s, visibility .5s;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        #button::after {
            content: "\f077";
            font-family: FontAwesome;
            font-weight: normal;
            font-style: normal;
            font-size: 2em;
            line-height: 50px;
            color: #fff;
        }

        #button:hover {
            cursor: pointer;
            background-color: #333;
        }

        #button:active {
            background-color: #555;
        }

        #button.show {
            opacity: 0.5;
            visibility: visible;
        }

    </style>

</head>

<body class="bg-light">
    <!-- MENU  -->
    <a style="text-decoration:none;" id="button"></a>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ asset('/') }}"><img src="/img/logo.png" alt="Tattoo Room" width="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="font-weight:bolder;">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <!--  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="/catalog">Каталог</a>
                  </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="/aktsii">Акции</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kypit">Как купить</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/o_nas">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kontakty">Контакты</a>
                    </li>
                </ul>

                <div style="padding-right:15px;" class="d-flex">
                    @php
                    $currencies = ['UAH', 'USD', 'EUR', 'PLN'];
                    $currency = $_COOKIE['currency'] ?? 'UAH';
                    @endphp
                    <select id="currencyChanger" class="header__link header__select js-currency-select">
                        @foreach($currencies as $curr)
                        <option value="{{ $curr }}" @if ($curr==$currency) selected @endif>{{ $curr }}</option>
                        @endforeach
                    </select>
                </div>

                @if(!isset($user))
                <p style="padding-right:15px; padding-top:15px;"><a title="Аутентификация" href="{{ route('identify') }}"><i class="fa fa-user-o" aria-hidden="true"></i>
                    </a></p>
                @endif
                @if($user ?? "")
                <p style="padding-right:15px; padding-top:15px;"><a title="{{$user->fullName()}}" href="{{ route('profile.index') }}"><img width="30" src="/img/iconuser.png"> </a></p>
                @role('sclad')
                <a style="padding-left:10px; padding-right:10px;" href="admin">В Админку </a>
                @endrole
                @role('admin')
                <a style="padding-left:10px; padding-right:10px;" href="admin">В Админку </a>
                @endrole

                <a title="Выход" style="padding-right:15px; text-decoration: none;" href="{{route('logout')}}"><img width="30" src="/img/logout.png"></a>
                @endif
                <p style="padding-right:50px; padding-top:15px;"><a title="Корзина покупок" style="text-decoration:none; color: #8c82fc;" href="{{route('cartIndex')}}"><img width="30" src="/img/basket.svg">

                        @if(!isset($_COOKIE['cart_id']))

                        <span class="cart-qty">0</span>

                        @elseif(isset($_COOKIE['cart_id']))
                        <span class="cart-qty">{{count(\Cart::session($_COOKIE['cart_id'])->getContent())}}</span>
                        @endif
                    </a></p>
                <!-- 
      ФОРМА ПОИСКА
              
               <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Что ищем?" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Поиск</button>
                </form> 
-->
            </div>
        </div>
    </nav>

    <!-- END MENU  -->


    <!-- MENU LEFT  -->
    <div class="container-fluid">
        <div class="row">

            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div style="top: 60px;" class="position-sticky pt-0 bd-aside">
                    <hr>
                    <ul>
                        @foreach ($categories as $category)
                        <li class="my-2">
                            @if (count($category->children))
                            <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#category-{{ $category->id }}" aria-controls="category-{{ $category->id }}">{{ $category->title }}</button>
                            <ul class="list-unstyled ps-3 collapse" id="category-{{ $category->id }}">
                                @foreach ($category->children as $subcategory)
                                <li class="nav-item"><a class="d-inline-flex align-items-center rounded" href="{{route('showCategory', [$subcategory->url_cat])}}">{{ $subcategory->title }}</a></li>
                                @endforeach
                            </ul>
                            @else
                            <a class="menused d-inline-flex align-items-center list-unstyled nav-item ps-3 d-inline-flex align-items-center rounded" href="{{route('showCategory', [$category->url_cat])}}">{{ $category->title }}</a>
                            @endif
                        </li>

                        @endforeach
                    </ul>
                    <hr>
                    <div class="side-block bordered box-shadow rounded2 colored_theme_hover_bg-block">
                        <div class="side-block__top text-center">
                            <i class="svg  svg-inline-icon colored" aria-hidden="true">
                                <img width="100" src="/img/telegram.svg" alt="subscribe"></i>
                            <div class="side-block__text">Будьте в курсе наших акций и новостей</div>
                        </div>
                    </div>
                    <div style="padding-top:25px;" class="wrapperss">

                        <a target="_blank" href="https://t.me/Room_Tattoo">
                            <button class="subscribe"> Подписаться<div class="success">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 29.756 29.756" style="enable-background:new 0 0 29.756 29.756;" xml:space="preserve">

                                        <path d="M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z" />
                                    </svg>
                                </div>
                            </button>
                        </a>
                        <hr>
                        <p style="text-align:center;">Если у вас есть промокод введите его</p>
                        <form class="card p-2" action="/cookie.php" method="POST">
                            <div class="input-group">
                                <input style="width:90%;" type="text" name="codekupon" class="form-control" placeholder="Промо код">
                                <button type="submit" class="btn ">Использовать</button>
                            </div>
                        </form>
                        <p></p>
                        <p style="text-align:center;">и купить товар по Вашей скидке</p>
                    </div>
                    <hr>
                    <script>
                        let btn = document.querySelector(".subscribe");
                        btn.addEventListener("click", active);

                        function active() {
                            btn.classList.toggle("is_active");
                        }

                    </script>
                </div>
            </nav>
            @yield('checkout')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('slide')
                @yield('content')
            </main>
        </div>
    </div>
    <div class="menu_container stick">
        <a href="#" class="mobile_menu"><img src="/img/menu.png"></a>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const year = document.querySelector(".year");
            const date = new Date().getFullYear();
            year.textContent = date;
        });

    </script>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md namefooter">
                <img class="mb-2" src="/img/logo.png" alt="" width="50" height="50">
                <small class="d-block mb-3 text-muted">© 2020 - <span class="year"></span> <br>All Rights Reserved.</small>
                <span><img style="height: auto;" src="/img/visaoriginal.png" alt="" width="50"></span>
                <span><img style="height: auto;" src="/img/mastercard-logo-credit-card-maestro.png" alt="" width="50"></span>
            </div>
            <div class="col-6 col-md foottext">
                <h5>О компании</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary tel" href="/o_nas">О магазине</a></li>
                    <li><a class="link-secondary tel" href="/blog">Блог</a></li>
                    <li><a class="link-secondary tel" href="/vozvrat">Договор возврата</a></li>
                    <li><a class="link-secondary tel" href="/politika">Политика конфиденциальности</a></li>

                </ul>
            </div>
            <div class="col-6 col-md foottext">
                <h5>Информация</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary tel" href="/aktsii">Акции</a></li>
                    <li><a class="link-secondary tel" href="/kontakty">Контакты</a></li>
                    <li><a class="link-secondary tel" href="#">Another resource</a></li>
                    <li><a class="link-secondary tel" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md foottext">
                <h5>Контактные данные</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary tel" href="tel:+380636488091">(+38) 063 648 80 91</a></li>
                    <li><a class="link-secondary tel" href="mailto:tattooshop.vean@gmail.com">@gmail.com</a></li>
                     
                    <li><a class="link-secondary fa fa-clock-o">с 11-00 до 19-00</a></li>
                    <li><a class="link-secondary fa fa-forward">Без выходных</a></li>
                    <li><a class="tel" href="https://g.page/vean-hostel?share" tabindex="_blanks" target="_blanks" class=""><i class="fa fa-map-marker" aria-hidden="true"></i> г.Бердянск, ул.Итальянская, 31-А</a></li>
                    <li class="socicons">
                        <div class="social instagram">
                            <a href="https://www.instagram.com" rel="nofollow" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                        </div>
                        <div class="social facebook">
                            <a href="https://www.facebook.com" rel="nofollow" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                        </div>
                        <div class="social telegram">
                            <a href="https://t.me/Room_Tattoo" rel="nofollow" target="_blank"><i class="fa fa-paper-plane fa-2x"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="/js/jquery.min.js"></script>
    <div class="mobile_menu_container">



        <div class="mobile_menu_content">
            <ul>
                @foreach ($categories as $category)
                <li>
                    @if (count($category->children))
                    <a href="#" class="parent">{{ $category->title }}</a>
                    <ul>

                        <li><a href="#" class="back">назад</a></li>
                        @foreach ($category->children as $subcategory)
                        <li><a href="{{route('showCategory', [$subcategory->url_cat])}}">{{ $subcategory->title }}</a></li>
                        @endforeach
                    </ul>
                    @endif

                </li>
                @endforeach
            </ul>
        </div>


    </div>
    <div class="mobile_menu_overlay"></div>



    @yield('js')
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        $(function() {
            $(".mobile_menu_container .parent").click(function(e) {
                e.preventDefault();
                console.log('aaa')
                $(".mobile_menu_container .activity").removeClass("activity");
                $(this).siblings("ul").addClass("loaded").addClass("activity");
            });
            $(".mobile_menu_container .back").click(function(e) {
                e.preventDefault();
                console.log('aaab')
                $(".mobile_menu_container .activity").removeClass("activity");
                $(this).parent().parent().removeClass("loaded");
                $(this).parent().parent().parent().parent().addClass("activity");
            });
            $(".mobile_menu").click(function(e) {
                e.preventDefault();
                console.log('aaac')
                $(".mobile_menu_container").addClass("loaded");
                $(".mobile_menu_overlay").fadeIn();
            });
            $(".mobile_menu_overlay").click(function(e) {
                $(".mobile_menu_container").removeClass("loaded");
                console.log('aaam')
                $(this).fadeOut(function() {
                    $(".mobile_menu_container .loaded").removeClass("loaded");
                    $(".mobile_menu_container .activity").removeClass("activity");
                });
            });
        })

    </script>

    <script>
        var btnn = $('#button');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btnn.addClass('show');
            } else {
                btnn.removeClass('show');
            }
        });

        btnn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });

    </script>

    <script>
        $(function() {
            $("#currencyChanger").on('change', function() {
                $('body').css('filter', 'blur(10px)');
                $('body').css('transition', '2s -webkit-filter linear');
                const $this = $(this);
                let data = new FormData();
                data.append("currency", $this.val());
                $.post({
                    url: "/currency.php?return={{Request::url()}}"
                    , data: data
                    , processData: false
                    , contentType: false
                    , success: function(data, textStatus) {
                        window.location.href = "{{Request::url()}}";
                    }
                }).finally(() => {
                    $('body').css('filter', null);
                });
            });
        });
    </script>

</body>
</html>
