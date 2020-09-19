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

    //add basket
    $('.basket').on('click',function () {
        if (localStorage.getItem('basket') === null){
            let basket = [];
            basket.unshift($(this).data('basket'));
            localStorage.setItem('basket',JSON.stringify(basket));
        } else {
            let basket = JSON.parse(localStorage.getItem('basket'));
            basket.unshift($(this).data('basket'));
            localStorage.setItem('basket',JSON.stringify(basket));
        }
    })


    //basket page
    JSON.parse(localStorage.getItem('basket')).forEach(function (item,index,arr){
        console.log(arr);
        let str = `<tr>
                <th scope="row">${index}</th>
                <td>${arr[index]['title']}</td>
                <td>${arr[index]['price']}</td>
                <td><a href="/account" type="button" class="btn btn-danger delete-basket" data-delete="${index}">Удалить</a></td>
            </tr>`;
        $('.tbode__table').before(str);
    })
    $('.delete-basket').on('click',function () {
        let basket = JSON.parse(localStorage.getItem('basket'));
        basket.splice($(this).data('delete'),1);
        localStorage.setItem('basket',JSON.stringify(basket));
    });

    //removeOrderBtn
    $('.removeOrderBTN').on('click',function() {
        axios.post('/removeorder',{
            'id': $(this).data('id')
        });
        location.reload();
    });
});
