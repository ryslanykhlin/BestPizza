@extends('app')
@section('content')
    @include('part.navbar')
    <section class="register">
        <img class="bg_reg" src="https://st.frendi.ru/cfs25/deal_offer/07/58/07588d5ef5f552255c8fe062e482ae1b.jpg" alt="img">
        <form action="{{route('auth.sugnin')}}" method="post" novalidate>
            @csrf
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
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection
