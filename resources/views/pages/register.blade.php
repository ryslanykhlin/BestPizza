@extends('app')
@section('content')
@include('part.navbar')
    <section class="register">
        <img class="bg_reg" src="https://s2.best-wallpaper.net/wallpaper/2560x1600/1809/Pizza-pie-tomatoes-oil_2560x1600.jpg" alt="img">
        <form action="{{route('auth.register')}}" method="post" novalidate>
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if($errors->has('email'))
                <div id="exampleInputEmail1" class="invalid-feedback">
                    {{$errors->first()}}
                </div>
            @endif
        </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" name="name" class="form-control {{$errors->has('name')?'is-invalid':''}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{$errors->first()}}
                    </div>
                @endif
            </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control {{$errors->has('password')?'is-invalid':''}}" id="exampleInputPassword1" name="password">
            @if($errors->has('password'))
                <div class="invalid-feedback">
                    {{$errors->first()}}
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection