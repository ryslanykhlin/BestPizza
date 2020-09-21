require('./bootstrap');
$(document).ready(function () {

    //nav and burger
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


    //basket page
    if(JSON.parse(localStorage.getItem('basket')).length !== 0 || localStorage.getItem('basket') !== null)
    {
        $('.basket__title').addClass('basket__table_dn');
        $('.basket__table').removeClass('basket__table_dn');
        JSON.parse(localStorage.getItem('basket')).forEach(function (item,index,arr){
            let str = `<tr>
                <th scope="row">${index}</th>
                <td>${arr[index]['title']}</td>
                <td>${arr[index]['price']}</td>
                <td>${arr[index]['count']}</td>
                <td><a href="/account" type="button" class="btn btn-danger delete-basket" data-delete="${index}">Удалить</a></td>
            </tr>`;
            $('.tbode__table').before(str);
        });
    }
    //add basket
    $('.basket').on('click',function () {
        if (localStorage.getItem('basket') === null){
            let count = $('.num_count'+$(this).data('index')).val();
            let basket = [];
            let item = $(this).data('basket');
            item.count = count;
            basket.unshift(item);
            localStorage.setItem('basket',JSON.stringify(basket));
        } else {
            let count = $('.num_count'+$(this).data('index')).val();
            let basket = JSON.parse(localStorage.getItem('basket'));
            let item = $(this).data('basket');
            item.count = count;
            basket.unshift(item);
            localStorage.setItem('basket',JSON.stringify(basket));
        }
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

    //masktell
    $("#inputtell").mask("+7(999)-999-9999",{ showMaskOnHover: true });

    //form account
    // console.log(JSON.stringify())
    console.log(localStorage.getItem('basket'))
    if (JSON.parse(localStorage.getItem('basket')).length === 0 || localStorage.getItem('basket') === null) {
        $('.account-form').addClass('disabled');
        $('.account-form').attr('disabled','disabled');
        $('.basket__title').removeClass('basket__table_dn');
        $('.basket__table').addClass('basket__table_dn');
    }
});
