require('./bootstrap');
$(document).ready(function () {

    //nav and burger
    if ($(window).scrollTop() >= 200) {
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
    if ((localStorage.getItem('basket') === null) || (JSON.parse(localStorage.getItem('basket')).length === 0)) {
        $('.basket__title').removeClass('basket__table_dn');
        $('.basket__table').addClass('basket__table_dn');
    } else {
        $('.basket__title').addClass('basket__table_dn');
        JSON.parse(localStorage.getItem('basket')).forEach(function (item, index, arr) {
            let price = arr[index]['price'] * arr[index]['count'];
            var str = "<tr>\n                <th scope=\"row\">".concat(index, "</th>\n                <td>").concat(arr[index]['title'], "</td>\n                <td class='price__td'>").concat(price, "</td>\n                <td>").concat(arr[index]['count'], "</td>\n                <td><a href=\"/account\" type=\"button\" class=\"btn btn-danger delete-basket\" data-delete=\"").concat(index, "\">\u0423\u0434\u0430\u043B\u0438\u0442\u044C</a></td>\n            </tr>");
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
    if ((localStorage.getItem('basket') === null) || (JSON.parse(localStorage.getItem('basket')).length === 0)) {
        $('.account-form').addClass('disabled');
        $('.account-form').attr('disabled', 'disabled');
        $('.basket__title').removeClass('basket__table_dn');
        $('.basket__table').addClass('basket__table_dn');
    }


    let summ = 0;
    $('.price__td').each(function(){
        console.log($(this).html());
        summ += parseInt($(this).html());
    });

    if (summ > 0 ){
        $('.title__price').html('Обшая цена ' + summ + ' Р');
    }
});
