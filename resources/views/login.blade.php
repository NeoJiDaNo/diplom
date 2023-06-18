@extends('layout')

@section('title') Вход @endsection
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
    <section class="container form-login">

        <!-- /.login-title -->
        <form class="form-box" method="post" action="{{ route('reg.login') }}">
            @csrf
            <h2 class="login-title">Вход</h2>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="exampleInputEmail1">Логин</label>
                <input type="text" class="form-control" id="exampleInputEmail1 login" name="login">
            </div>
            <div class="form-group" style="margin-top: 1.5rem">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1 password" name="password">
                <small id="emailHelp" class="form-text text-white">Мы никогда не будем ни с кем делиться вашими данными</small>
            </div>
            <div class="form-group form-check" style="margin-top: 1rem; margin-bottom: 1rem">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
    </section>
@endsection
