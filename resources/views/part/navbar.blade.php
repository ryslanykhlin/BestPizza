<div class="navbar__shell">
    <div class="container-navbar">
        <navbar class="navbar">
            <div class="navbar__logo">BestPizza!</div>
            <ul class="navbar__ul">
                <li class="navbar__burger-close">&#10006;</li>
                <li class="navbar__li"><a href="{{route('home')}}"
                      class="navbar__link {{request()->routeIs('home') ? 'active_menu' : ''}}">Главная</a></li>
                <li class="navbar__li"><a href="{{route('catalog')}}"
                      class="navbar__link {{request()->routeIs('catalog')? 'active_menu' : ''}}">Каталог</a></li>
                <li class="navbar__li"><a href="#" class="navbar__link">О нас</a></li>
                <li class="navbar__li"><a href="#" class="navbar__link">Контакты</a></li>
                @if(!Auth::check())
                    <li class="navbar__li"><a href="{{route('auth.register')}}"
                                              class="navbar__link {{request()->routeIs('auth.register')? 'active_menu' : ''}}">Регистрация</a></li>
                    <li class="navbar__li"><a href="{{route('auth.sugnin')}}"
                                              class="navbar__link {{request()->routeIs('auth.sugnin')? 'active_menu' : ''}}">Авторизация</a></li>
                @elseif(Auth::user()->getisAdmin())
                    <li class="navbar__li"><a href="{{route('admin')}}"
                                              class="navbar__link {{request()->routeIs('admin')? 'active_menu' : ''}}">Админ панель</a></li>
                @else
                    <li class="navbar__li"><a href="{{route('account')}}"
                                              class="navbar__link {{request()->routeIs('account')? 'active_menu' : ''}}">Аккаунт</a></li>
                @endif

            </ul>
            <div class="navbar__burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </navbar>
    </div>
</div>
<div style="padding-top: 57px"></div>
