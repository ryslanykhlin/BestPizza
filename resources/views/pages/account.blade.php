@extends('app')
@section('content')
    @include('part.navbar')
    <h1 style="text-align: center">Корзина</h1>
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
@endsection
