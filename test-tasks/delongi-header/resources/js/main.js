$(document).ready(function () {

    $('.burger-btn, .header-menu__close').on('click', function() {
        $('.header-menu').toggleClass('open');
        // $('.header .wrap').toggleClass('menu-open');
    });

    $('.header-menu__group-item .header-menu__group-link').on('click', function() {
        $(this).closest('.header-menu__group-item').toggleClass('open').siblings().removeClass('open');
    });
});
