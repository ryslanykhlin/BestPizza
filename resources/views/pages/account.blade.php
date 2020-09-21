@extends('app')
@section('content')
    @include('part.navbar')
    <h2 style="text-align: center">Корзина</h2>
    <div class="container">
        <table class="table basket__table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">title</th>
                <th scope="col">price</th>
                <th scope="col">count</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="tbode__table">
            </tbody>
        </table>
        <h2 class="basket__title">Корзина Пуста</h2>
    </div>
    <section class="order" style="margin-top: 30px;">
        <h2 style="text-align: center">Оформить заказ</h2>
        <div class="container">
            <form action="{{route('addorder')}}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Телефон</label>
                        <input type="text" class="form-control {{$errors->has('tell')?'is-invalid':''}}" id="inputtell" name="tell" placeholder="+7(___)-___-____">
                        @if($errors->has('tell'))
                            <div id="exampleInputEmail1" class="invalid-feedback">
                                {{$errors->first()}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">ваше имя</label>
                        <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" id="inputtell" name="name">
                        @if($errors->has('name'))
                            <div id="exampleInputEmail1" class="invalid-feedback">
                                {{$errors->first()}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Адресс</label>
                    <input type="text" class="form-control {{$errors->has('adress')?'is-invalid':''}}" id="inputAddress" placeholder="Нижний новгород" name="adress">
                    @if($errors->has('adress'))
                        <div id="exampleInputEmail1" class="invalid-feedback">
                            {{$errors->first()}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputAddress">Коментарий к заказу</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="поострее" name="comments">
                </div>
                <button type="submit" style="margin-bottom: 30px" class="btn btn-primary account-form">Оформить заказ</button>
            </form>
            <a  href="{{route('account.logout')}}" class="btn btn-danger" style="width: 100%;margin-bottom: 50px">Выйти из акаунта</a>
        </div>
    </section>
    @include('part.footer')
@endsection
