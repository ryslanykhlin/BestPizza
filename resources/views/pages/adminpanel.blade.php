@extends('app')
@section('content')
    <h1 style="text-align: center">Админ панель
    <h3 style="text-align: center">Добавить пиццу</h3>
    <a style="display: block;text-align: center; font-size: 20px" href="{{route('home')}}">Главная</a>
    <form action="{{route('addpizza')}}" method="post" style="margin: 0 auto;width: 900px">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Название</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Цена</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="price">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descr"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection