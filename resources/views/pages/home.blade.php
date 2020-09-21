@extends('app')
@section('content')
    <header class="header">
        <div class="nav__shell">
            <div class="container-nav">
                <nav class="nav">
                    <div class="nav__logo">BestPizza!</div>
                    <ul class="nav__ul">
                        <li class="nav__burger-close">&#10006;</li>
                        <li class="nav__li"><a href="{{route('home')}}" class="nav__link {{request()->routeIs('home')? 'active_menu' : ''}}">Главная</a></li>
                        <li class="nav__li"><a href="{{route('catalog')}}" class="nav__link">Каталог</a></li>
                        <li class="nav__li"><a href="#" class="nav__link">О нас</a></li>
                        <li class="nav__li"><a href="#" class="nav__link">Контакты</a></li>
                        @if(!Auth::check())
                            <li class="nav__li"><a href="{{route('auth.register')}}"
                                                      class="navbar__link {{request()->routeIs('auth.register')? 'active_menu' : ''}}">Регистрация</a></li>
                            <li class="nav__li"><a href="{{route('auth.sugnin')}}"
                                                      class="navbar__link {{request()->routeIs('auth.sugnin')? 'active_menu' : ''}}">Авторизация</a></li>
                        @elseif(Auth::user()->getisAdmin())
                            <li class="navbar__li"><a href="{{route('admin')}}"
                                                      class="navbar__link {{request()->routeIs('admin')? 'active_menu' : ''}}">Админ панель</a></li>
                        @else
                            <li class="navbar__li"><a href="{{route('account')}}"
                                                      class="navbar__link {{request()->routeIs('account')? 'active_menu' : ''}}">Аккаунт</a></li>
                        @endif
                    </ul>
                    <div class="nav__burger">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="header__container">
            <h1 class="header__title">самая вкусная пицца в мире</h1>
            <p class="header__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam
                consequatur cum deserunt
                dignissimos eius ipsam laboriosam libero mollitia nemo omnis placeat, qui saepe sequi sit
                temporibus totam! Aliquid aut eos et facilis iste perferendis quas quis repellat
                sunt veniam.</p>
            <a class="button button_header">Меню</a>
        </div>
    </header>
    <section class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="aboutus__title">About Us</h2>
                    <p class="aboutus__opt">WELCOME TO
                        MAESTRO PIZZINI</p>
                    <p class="aboutus_descr">Investigationes demonstraverunt lectores legere me lius
                        quod ii legunt saepius. Claritas est etiam processus dynaus,
                        quise sequitur mutationem consuetudium lectorum.</p>
                    <a href="#" class="button" style="margin-bottom: 50px;">Подробнее</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://www.touchdynamic.com/wp-content/uploads/2014/05/bigstock-Restaurant-manager-standing-in-52078486.jpg"
                         alt="img" class="aboutus__img">
                </div>
            </div>
        </div>
    </section>
    <section class="info" style="margin-bottom: 50px;">
        <div class="container">
            <h2>Доставка пиццы в Нижнем Новгороде</h2>
            <p>Любите пиццу? Тогда Вас обязательно порадует разнообразие вкусов от пиццерии Domino’s Pizza в Нижнем Новгороде. Классическая «Маргарита», фирменная «Домино`с», вегетарианская Веджи Fit & Fresh, острая «Диабло», экзотическая «Гавайская» – и это только начало списка, в котором каждый найдет свое любимое сочетание.
            </p>
            <h3>Безупречный вкус с доставкой</h3>
            <p>Вам не придется выходить куда-то, чтобы купить любимое блюдо. Закажите онлайн выбранную пиццу с доставкой на дом или в офис, и в течение получаса курьер привезет Вам заказ. Доставка в пиццериях Domino’s осуществляется бесплатно. Вы можете выбрать большую пиццу (33 см) или варианты поменьше (20 см и 28 см). Кроме того, у Вас будет возможность внести изменения в начинку по своему вкусу – что-то добавить или убрать. При желании можно включить в заказ соус для бортиков – пикантный барбекю, пряный карри, густой сырный или классический томатный. Наша пиццерия предлагает и другие блюда: вкусные закуски и салаты, нежные десерты и напитки. На сайте представлены их подробные описания вместе с красочными фотографиями.
            </p>
            <h3>Как мы готовим Вашу пиццу</h3>
            <p>В международной сети пиццерий Domino’s Pizza делают пиццу по классическим и авторским рецептам только из высококачественных ингредиентов. После получения заказа наши пиццамейкеры вручную замешивают нежное тесто из муки высшего сорта, а затем выкладывают на него выбранную Вами начинку с классическим сыром моцарелла и отправляют будущую пиццу в печь. Специальные мощные духовки выпекают пиццу именно так, как требуется, – до хрустящей корочки и нежной сердцевины всего за 6-7 минут.</p>
            <h3>Доставка</h3>
            <p>Курьер заранее продумывает маршрут, чтобы быстро доставить заказ Вам домой или в офис. Вы получите пиццу еще горячей, не позже чем через 30 мин. Мы настолько уверены в себе, что обещаем карту гарантии на получение бесплатной пиццы среднего размера, если Вам придется ждать дольше. Нам дороги наши клиенты, поэтому мы готовим для Вас с радостью и любовью! Заказывайте блюда в пиццериях Domino’s Pizza, и мы накормим Вас вкусно, быстро и недорого.</p>
        </div>
    </section>
    <section class="delivery">
        <div class="delivery__title">
            Беспланая доставка заказа ценой от 300 руб!
        </div>
        <a href="#" class="button button_center">Меню</a>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="row">
                <h2 class="reviews__title">Коментарии пользователей</h2>
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="10000">
                            <div class="reviews__name">Егор</div>
                            <div class="reviews__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid assumenda, blanditiis
                                deserunt dolorem ducimus id ipsa itaque molestiae natus reprehenderit suscipit ut voluptatibus. Adipisci dolorem esse.</div>
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <div class="reviews__name">Егор</div>
                            <div class="reviews__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid assumenda, blanditiis
                                deserunt dolorem ducimus id ipsa itaque molestiae natus reprehenderit suscipit ut voluptatibus. Adipisci dolorem esse.</div>
                        </div>
                        <div class="carousel-item">
                            <div class="reviews__name">Егор</div>
                            <div class="reviews__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid assumenda, blanditiis
                                deserunt dolorem ducimus id ipsa itaque molestiae natus reprehenderit suscipit ut voluptatibus. Adipisci dolorem esse.</div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('part.footer')
@endsection

