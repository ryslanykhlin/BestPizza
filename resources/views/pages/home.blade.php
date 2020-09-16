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
                        <li class="nav__li"><a href="#" class="nav__link">Регистрация</a></li>
                        <li class="nav__li"><a href="#" class="nav__link">Авторизация</a></li>
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
                <div class="col-6">
                    <h2 class="aboutus__title">About Us</h2>
                    <p class="aboutus__opt">WELCOME TO
                        MAESTRO PIZZINI</p>
                    <p class="aboutus_descr">Investigationes demonstraverunt lectores legere me lius
                        quod ii legunt saepius. Claritas est etiam processus dynaus,
                        quise sequitur mutationem consuetudium lectorum.</p>
                    <a href="#" class="button">Подробнее</a>
                </div>
                <div class="col-6">
                    <img src="https://www.touchdynamic.com/wp-content/uploads/2014/05/bigstock-Restaurant-manager-standing-in-52078486.jpg"
                         alt="img" class="aboutus__img">
                </div>
            </div>
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
{{--    <footer class="footer">--}}
{{--        <div class="footer__header">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-6">--}}
{{--                        <ul class="footer__contact">--}}
{{--                            <div class="footer__contactn__title">Контакты</div>--}}
{{--                            <li><a href="#" class="footer__link-ikon">Телефон: +7 910 124 26 18</a></li>--}}
{{--                            <li>Адресс: New York 11673</li>--}}
{{--                            <li>Время : Понидельник - Воскресенье с 8:00 по 21:00</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="col-6">--}}
{{--                        <ul class="footer__contact">--}}
{{--                            <div class="footer__contactn__title">Соцсети</div>--}}
{{--                            <li><a href="#" class="footer__link-ikon"><i class="fa fa-instagram" aria-hidden="true"></i> Инстограм</a></li>--}}
{{--                            <li><a href="#" class="footer__link-ikon"><i class="fa fa-vk" aria-hidden="true"></i> Вконтакте</a></li>--}}
{{--                            <li><a href="#" class="footer__link-ikon"><i class="fa fa-youtube" aria-hidden="true"></i> Ютуб--}}
{{--                                </a></li>--}}
{{--                            <li><a href="#" class="footer__link-ikon"><i class="fa fa-envelope-o" aria-hidden="true"></i> Почта--}}
{{--                                </a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        Все права зашишены--}}
{{--    </footer>--}}
    <footer id="footer" class="footer-1">
        <div class="main-footer widgets-dark typo-light">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget subscribe no-box">
                            <h5 class="widget-title">COMPANY NAME<span></span></h5>
                            <p>About the company, little discription will goes here.. </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget no-box">
                            <h5 class="widget-title">Quick Links<span></span></h5>
                            <ul class="thumbnail-widget">
                                <li>
                                    <div class="thumb-content"><a href="#.">Get Started</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">Top Leaders</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">Success Stories</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">Event/Tickets</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">News</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">Lifestyle</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">About</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget no-box">
                            <h5 class="widget-title">Get Started<span></span></h5>
                            <p>Get access to your full Training and Marketing Suite.</p>
                            <a class="btn" href="#." target="_blank">Register Now</a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">

                        <div class="widget no-box">
                            <h5 class="widget-title">Contact Us<span></span></h5>

                            <p><a href="mailto:info@domain.com" title="glorythemes">info@domain.com</a></p>
                            <ul class="social-footer2">
                                <li class=""><a title="youtube" target="_blank" href="/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li class=""><a href="/" target="_blank" title="Facebook"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                                <li class=""><a href="/" target="_blank" title="Twitter"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class=""><a title="instagram" target="_blank" href="/"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Copyright Company Name © 2016. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

