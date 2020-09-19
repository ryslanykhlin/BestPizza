@extends('app')
@section('content')
    @include('part.navbar')
    <h2 style="text-align: center">Корзина</h2>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">title</th>
                <th scope="col">price</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="tbode__table">
            </tbody>
        </table>
    </div>
    <section class="order">
        <h2 style="text-align: center">Оформить заказ</h2>
        <div class="container">
            <form action="{{route('addorder')}}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Телефон</label>
                        <input type="number" class="form-control" id="inputEmail4" name="tell">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">ваше имя</label>
                        <input type="text" class="form-control" id="inputPassword4" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Адресс</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Нижний новгород" name="adress">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Коментарий к заказу</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="поострее" name="comments">
                </div>
                <button type="submit" class="btn btn-primary">Оформить заказ</button>
            </form>
        </div>
    </section>
@endsection
