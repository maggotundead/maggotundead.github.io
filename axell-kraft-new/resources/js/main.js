$(document).ready(function() {
    $('.menu-burger').click(function() {
        $('.header').toggleClass('menu-open');
        $('body').toggleClass('menu-open');
    });
    $('.tab-selectors').on( 'click', '.tab-selector:not(.active)', function() {
        $(this).addClass('active').siblings().removeClass('active').closest('.services-tabs').find('.tab').removeClass('active').eq( $(this).index() ).addClass('active');
    });

    // $('.form-selector').styler();

    // Вызов модального окна
    $(".popup-link, .consult-button").click( function(e) {
        e.preventDefault();
        $('#popup').fadeIn();
    });
    $('.form-overlay, .form-close').click( function() {
        $(this).closest('.form-modal').fadeOut();
    });

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        var GetaName = $(this).attr('href').split('#');
        $('html,body').animate({
            scrollTop: $('a[name ='+GetaName[1]+']').offset().top
        }, 500);
    });

});



// Передача динамического атрибута попап формы
function detailSend(el) {
    document.getElementById('detail').value = el.getAttribute('data-send');
}
