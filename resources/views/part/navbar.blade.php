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
                <li class="navbar__li"><a href="{{route('auth.register')}}"
                      class="navbar__link {{request()->routeIs('auth.register')? 'active_menu' : ''}}">Регистрация</a></li>
                <li class="navbar__li"><a href="{{route('auth.sugnin')}}"
                      class="navbar__link {{request()->routeIs('auth.sugnin')? 'active_menu' : ''}}">Авторизация</a></li>
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
