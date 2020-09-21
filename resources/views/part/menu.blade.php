<section class="menu">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card-deck">
                    @foreach($products as $index => $product)
                        <div class="card" style="min-width:220px;max-width:220px;margin-bottom: 30px">
                            <img src="https://bigbenny.ru/media/uploads/2017/01/IMG_4810.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <p class="card-text">{{$product->description}}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{$product->price}} Руб</small>
                                <div class="input-group quantity_goods">
                                    <input type="number" step="1" min="1" max="10" class="{{'num_count'.$index}}" name="quantity" value="1" title="Qty">
                                </div>
                                <button type="button" class="btn btn-success basket"
                                        data-basket="{{$product}}" data-index="{{$index}}">Добавить в корзину</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <div class="filtre">
                    <div class="filtre__title">Фильтация</div>
                    <form action="{{route('catalog')}}" method="get">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Min</label>
                            <input type="number" name="min" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$_GET['min'] ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Max</label>
                            <input type="number" name="max" class="form-control" id="exampleInputPassword1" value="{{$_GET['max'] ?? ''}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Применить фильт</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{$currentPage === 1 ? "disabled" : ''}}">
                            <a class="page-link" href="?page={{$currentPage - 1}}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        @foreach($products->links()->elements[0] as $index => $page)
                            <li class="page-item"><a class="page-link"
                                href="{{$page}}">{{$index}}</a>
                        @endforeach
                        <li class="page-item {{$currentPage === $lastPage ? "disabled" : ''}}">
                            <a class="page-link" href="?page={{$currentPage + 1}}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
