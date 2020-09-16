require('./bootstrap');
$(document).ready(function () {

    if ($(window).scrollTop() >= 200) {
        console.log('работает');
        $('.nav__shell').addClass('scroll__nav');
        $('.nav__shell').addClass('bg__dark');
    }

    $(window).scroll(function() {
        if ($(document).scrollTop() >= 200) {
            $('.nav__shell').addClass('scroll__nav');
            $('.nav__shell').addClass('bg__dark');
        } else {
            $('.nav__shell').removeClass('scroll__nav');
            $('.nav__shell').removeClass('bg__dark');
        }
    });

    $('.nav__burger').on('click',function () {
        $('.nav__ul').toggleClass('nav__burger_active')
        //$('.navbar__ul').toggleClass('nav__burger_active')
    });
    $('.nav__burger-close').on('click', function () {
        $('.nav__ul').toggleClass('nav__burger_active')
        //$('.navbar__ul').toggleClass('nav__burger_active')
    });
    $('.navbar__burger').on('click',function () {
        $('.navbar__ul').toggleClass('navbar__burger_active')
    });
    $('.navbar__burger-close').on('click', function () {
        $('.navbar__ul').toggleClass('navbar__burger_active')
    })
});
