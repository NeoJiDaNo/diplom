@extends('layout')

@section('title') Меню Магнит @endsection
@section('head') <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> @endsection
@section('main-a') text-white @endsection
@section('comment-a') text-white @endsection
@section('about-a') text-white @endsection
@section('contacts-a') text-white @endsection

@section('sidebarHome') text-white @endsection
@section('sidebarAction') text-white @endsection
@section('sidebarDelivery') text-white @endsection
@section('sidebarComment') text-white @endsection
@section('sidebarAbout') text-white @endsection
@section('sidebarContact') text-white @endsection
@section('sidebarAdmin') text-white @endsection

@section('main_content')
    <section class="container">
        <h2 class="menu-header">Меню Магнит</h2>
        <!-- /.menu-header -->
        <div class="menu-shops">
            @foreach($products as $el)
                @if ($el->company === 3)
                    <div class="menu__box">
                        <img src="{{ asset('/storage/' . $el->path) }}" alt="image" class="menu__box-img">
                        <h4 class="menu__box-name">{{ $el->name }}</h4>
                        <p class="menu__box-description">{{ $el->description }}</p>
                        <p class="menu__box-price">{{ $el->price }} ₽</p>
                        <button class="btn btn-success menu__box-btn">В корзину</button>
                    </div>
                @endif
            @endforeach
        </div>
        <!-- /.menu-shops -->
    </section>
    <!-- /.container -->



@endsection
