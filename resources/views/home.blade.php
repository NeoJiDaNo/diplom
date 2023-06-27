@extends('layout')

@section('title') Del Food @endsection
@section('head')  @endsection
@section('main-a') text-secondary @endsection
@section('comment-a') text-white @endsection
@section('about-a') text-white @endsection
@section('contacts-a') text-white @endsection

@section('sidebarHome') active @endsection
@section('sidebarAction') text-white @endsection
@section('sidebarDelivery') text-white @endsection
@section('sidebarComment') text-white @endsection
@section('sidebarAbout') text-white @endsection
@section('sidebarContact') text-white @endsection
@section('sidebarAdmin') text-white @endsection

@section('main_content')
    <section class="hero">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row g-5 py-5" style="margin-top: 1rem">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Доставка еды по всему миру</h1>
                    <p class="lead fw-bold" style="font-size: 22px">Наша компания специализируется на доставке различных продуктов и готовой еды.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="#shops__card" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Заказать</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shops__slider">
        <h2 class="shops__slider-title">Самая популярная доставка этой недели</h2>
        <!-- /.shops__slider-title -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/image/shops__slider/mac.jpg') }}" class="d-block w-100 img-box" alt="shop">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Вкусно и точка</h5>
                        <p>Самый популарный фаст-фуд этой недели</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/image/shops__slider/5.jpg') }}" class="d-block w-100 img-box" alt="shop">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Пятёрочка</h5>
                        <p>Самый популярный продуктовый магазин этой недели</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/image/shops__slider/krest.webp') }}" class="d-block w-100 img-box" alt="shop">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Перекрёсток</h5>
                        <p>Самый популярный магазин продуктов и готовой еды этой недели</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="visually-hidden ">Предыдущий</span>
            </button>
            <button class="carousel-control-next shops__slider-arrow" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </section>
    <!-- /.shops__slider -->

    <section class="shops__card" id="shops__card">
        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">Доступная доставка</h2>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col shops__card-card">
                    <a href="mac" style="text-decoration: none">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background: url({{ asset('/image/shops__slider/mac.jpg') }}) no-repeat center / cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <ul class="d-flex list-unstyled " style="margin: auto auto 50px auto">
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                    <big>Вкусно и точка</big>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col shops__card-card">
                    <a href="pyat" style="text-decoration: none">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background: url({{ asset('/image/shops__slider/5.jpg') }}) no-repeat center / cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <ul class="d-flex list-unstyled " style="margin: auto auto 50px auto">
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                    <big>Пятёрочка</big>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col shops__card-card">
                    <a href="pere" style="text-decoration: none">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background: url({{ asset('/image/shops__slider/krest.webp') }}) no-repeat center / cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <ul class="d-flex list-unstyled " style="margin: auto auto 50px auto">
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                    <big>Перекрёсток</big>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

                <div class="col shops__card-card">
                    <a href="bk" style="text-decoration: none">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background: url({{ asset('/image/shops__slider/bk.jpg') }}) no-repeat center / cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <ul class="d-flex list-unstyled " style="margin: auto auto 50px auto">
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                    <big>Бургер Кинг</big>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col shops__card-card">
                    <a href="kfc" style="text-decoration: none">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background: url({{ asset('/image/shops__slider/kfc.png') }}) no-repeat center / cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <ul class="d-flex list-unstyled " style="margin: auto auto 50px auto">
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                    <big>КФС</big>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col shops__card-card">
                    <a href="mag" style="text-decoration: none">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background: url({{ asset('/image/shops__slider/mag.png') }}) no-repeat center / cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <ul class="d-flex list-unstyled " style="margin: auto auto 50px auto">
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                    <big>Магнит</big>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.shops__card -->

@endsection
