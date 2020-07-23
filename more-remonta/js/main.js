$('.burger').click(function() {
    $('body').toggleClass('menu-open');
});

$('.menu-link, .block-link').click(function(e) {
    e.preventDefault();
    let link = $(this).attr('data-scroll-href');
    let block = $('.block[data-scroll-block="' + link + '"');
    console.log();
    $('html,body').animate({
        scrollTop: block.offset().top},
        'slow'
    );

    $(window).width() < 1025 && $('body').removeClass('menu-open');
});

$('.buy-guide, .buy-checklist').click(function() {
    $('body').addClass('modal-open');
    $('.modal').fadeIn();
});
$('.modal-close, .modal-overlay').click(function() {
    $('body').removeClass('modal-open');
    $('.modal').fadeOut();
});