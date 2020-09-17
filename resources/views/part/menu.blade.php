<section class="menu">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-deck">
                    @foreach($products as $product)
                        <div class="card" style="min-width: 350px;margin-bottom: 30px">
                            <img src="https://bigbenny.ru/media/uploads/2017/01/IMG_4810.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <p class="card-text">{{$product->description}}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{$product->price}} Руб</small>
                            </div>
                        </div>
                    @endforeach
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
                                href="{{$page}}">{{$index}}</a></li>
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
