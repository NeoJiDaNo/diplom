@extends('layout')

@section('title') Admin @endsection
@section('head')  @endsection
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
@section('sidebarAdmin') active @endsection

@section('main_content')


    <form class="form-box" method="post" action="admin/upload" enctype="multipart/form-data">
        @csrf
        <h2>Добавить запись в меню</h2>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <select class="form-select" aria-label="Default select example" name="company" id="company">
            <option selected value="0">Вкусно и точка</option>
            <option value="1">Бургер кинг</option>
            <option value="2">КФС</option>
            <option value="3">Магнит</option>
            <option value="4">Перекрёсток</option>
            <option value="5">Пятёрочка</option>
        </select>
        <div class="form-group" style="margin-top: 1.5rem">
            <input type="text" class="form-control" id="name" name="name" placeholder="Название продукта">
        </div>
        <div class="form-group" style="margin-top: 1.5rem">
            <input type="text" class="form-control" id="description" name="description" placeholder="Краткое описание продукта">
        </div>
        <div class="form-group" style="margin-top: 1.5rem">
            <input type="text" class="form-control" id="price" name="price" placeholder="Ценна продукта">
        </div>
        <div class="form-group" style="margin-top: 1.5rem; margin-bottom: 1.5rem">
            <input type="file" class="form-control" id="image" name="image" >
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

@endsection
