$(function () {

    $(document).on("click", 'a[href^="#"]', function (event) {
        event.preventDefault();

        $("html, body").animate(
            {
                scrollTop: $($.attr(this, "href")).offset().top,
            },
            500
        );
    });

    let header = $(".header");
    if ($(window).scrollTop() > 0) header.addClass("fixed");

    $(window).on("scroll", function () {
        let scroll = $(window).scrollTop();

        if (scroll > 0) header.addClass("fixed");
        else header.removeClass("fixed");
    });

    $('[data-trade-program]').on('click', function(e) {
        e.preventDefault();
        let contractBlockId = $(this).attr('data-trade-program');

        $('body').addClass('modal-open');
        $('#modal-contract').addClass('open');
        $(`#trade-program-${contractBlockId}`).addClass('open');

        $('.modal-overlay, .modal-close').on('click', function () {
            $('body').removeClass('modal-open');
            $('.contract-order').removeClass('open');
        });
    });

    $('[data-modal-login]').on('click', function () {
        $('body').addClass('modal-open');
        $('.modal').removeClass('open');
        $('#modal-login').addClass('open');
    });

    $('[data-modal-register]').on('click', function () {
        $('body').addClass('modal-open');
        $('.modal').removeClass('open');
        $('#modal-register').addClass('open');
    });

    $('[data-modal-reset-password]').on('click', function () {
        $('body').addClass('modal-open');
        $('.modal').removeClass('open');
        $('#modal-reset-password').addClass('open');
    });

    $(".modal-overlay, .modal-close").on("click", function () {
        $('body').removeClass('modal-open');
        $(".modal").removeClass("open");
    });

    $('.faq-group').on('click', '.faq-item', function() {
        $(this).toggleClass('open');
        // $(this).toggleClass('open').siblings().removeClass('open');
    });
});
