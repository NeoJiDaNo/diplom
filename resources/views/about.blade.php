@extends('layout')

@section('title') О нас @endsection
@section('main-a') text-white @endsection
@section('comment-a') text-white @endsection
@section('about-a') text-secondary @endsection
@section('contacts-a') text-white @endsection

@section('sidebarHome') text-white @endsection
@section('sidebarAction') text-white @endsection
@section('sidebarDelivery') text-white @endsection
@section('sidebarComment') text-white @endsection
@section('sidebarAbout') active @endsection
@section('sidebarContact') text-white @endsection
@section('sidebarAdmin') text-white @endsection

@section('main_content')
    <section class="container" style="margin-bottom: 420px; margin-top: 100px">
        <div style="max-width: 800px; margin: auto">
        <h2 style="text-align: center; margin-bottom: 30px">Немного о нас</h2>
        <p class="text-white">Мы работаем с 2023 года. Все наши клиенты рады что воспользовались именно нашим сервисом.</p>
        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eveniet fuga laudantium maiores nam, omnis quis!
            Amet beatae delectus pariatur quisquam quos voluptate. Ad adipisci deleniti, dignissimos error facilis id ipsam labore mollitia natus
            ratione. Autem, laborum, pariatur. Asperiores aut cum dicta eos est optio quasi rem sequi suscipit vitae.</p>
        <a href="tel:+79999999999" class="text-white" style="text-decoration: none">Телефон: +7(999)999 99-99</a> <br>
        <a href="mailto:mail@mail.ru" class="text-white" style="text-decoration: none">Наша почта: mail@mail.ru</a>
        </div>
    </section>
@endsection
