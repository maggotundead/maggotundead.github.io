$('.menu-link, .scroll-figure').click(function(e) {
    e.preventDefault();
    let link = $(this).attr('data-scroll-href');
    let block = $('.block[data-scroll-block="' + link + '"');
    console.log();
    $('html,body').animate({
        scrollTop: block.offset().top},
        'slow'
    );

    $(window).width() < 769 && $('body').removeClass('menu-open');
});


 
$('.modal-close,.modal-overlay').click(function() {
   $('body').removeClass('modal-open');
   $('.modal').fadeOut();
});


$('.product-details').click(function(e) {
    e.preventDefault();
    $('body').addClass('modal-open');
    let link = $(this).attr('data-popup-link');
    let block = $('.modal[data-popup="' + link + '"]');
    block.fadeIn();
});

$('.burger').click(function() {
    $('body').toggleClass('menu-open');
});