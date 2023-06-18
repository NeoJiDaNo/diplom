<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('head')
    <script src="{{ asset('js/main.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">

<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" style="font-size: 24px">
                Del Food
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2  @yield('main-a')">Главная</a></li>
                <li><a href="/comment" class="nav-link px-2  @yield('comment-a')">Отзывы</a></li>
                <li><a href="/about" class="nav-link px-2  @yield('about-a')">О нас</a></li>
                <li><a href="#" class="nav-link px-2  @yield('contacts-a')">Контакты</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-light" placeholder="Search..." aria-label="Search">
            </form>

            @if(Auth::check())
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('image/profile.png') }}" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>{{ Auth::user()->login }}</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/logout">Sign out</a></li>
                    </ul>
                </div>
            @endif

            @if(! Auth::check())
                <div class="text-end">
                    <a href="login" class="btn btn-outline-light me-2">Вход</a>
                    <a href="registration" class="btn btn-warning">Регистрация</a>
                </div>
            @endif
        </div>
    </div>
</header>
<section class="sidebar">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar navbar-dark bg-dark sidebar-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title text-white" id="offcanvasWithBackdropLabel">Del Food</h3>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link @yield('sidebarHome')" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                        Главная
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link @yield('sidebarAction')">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                        Акции
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link @yield('sidebarDelivery')">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                        Все магазины
                    </a>
                </li>
                <li>
                    <a href="/comment" class="nav-link @yield('sidebarComment')">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                        Отзывы
                    </a>
                </li>
                <li>
                    <a href="/about" class="nav-link @yield('sidebarAbout')">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                        О нас
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link @yield('sidebarContact')">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                        Контакты
                    </a>
                </li>
                @auth
                    @if(Auth::user()->isAdmin())
                        <li>
                            <a href="/admin" class="nav-link @yield('sidebarAdmin')">
                                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                Админ панель
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</section>
<!-- /.sidebar -->
    @yield('main_content')
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-white text-decoration-none lh-1" style="font-size: 24px">
                Del Food
            </a>
            <span class="mb-3 mb-md-0 text-white">© 2023 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><img src="{{ asset('/image/favicon/instagram.png') }}" alt="favicon" style="max-width: 40px"></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><img src="{{ asset('/image/favicon/vk.png') }}" alt="favicon" style="max-width: 40px"></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><img src="{{ asset('/image/favicon/youtube.png') }}" alt="favicon" style="max-width: 40px"></a></li>
        </ul>
    </footer>
</div>
</body>
</html>
