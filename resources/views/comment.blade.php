@extends('layout')

@section('title') Отзывы @endsection
@section('main-a') text-white @endsection
@section('comment-a') text-secondary @endsection
@section('about-a') text-white @endsection
@section('contacts-a') text-white @endsection

@section('sidebarHome') text-white @endsection
@section('sidebarAction') text-white @endsection
@section('sidebarDelivery') text-white @endsection
@section('sidebarComment') active @endsection
@section('sidebarAbout') text-white @endsection
@section('sidebarContact') text-white @endsection
@section('sidebarAdmin') text-white @endsection

@section('main_content')
    <section class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <h2 style="text-align: center">Оставьте свой комментарий</h2>
    <form method="post" action="comment/check" class="form-box">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea> <br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
    <br>
    @foreach($comments as $el)
        <div class="alert alert-warning">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->message }}</p>
        </div>
        <!-- /.alert alert-warning -->
    @endforeach
    </section>
@endsection
