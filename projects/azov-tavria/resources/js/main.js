$('.homescreen-slider').lightSlider({
    item: 1,
    loop: true,
    controls: false,
    slideMargin: 0
});

$('#reviews-slider').lightSlider({
    item: 1,
    loop: true,
    controls: false,
    slideMargin: 0
});

$('.object-slider').each(function() {
    const slider = $(this);
    slider.lightSlider({
        item: 1,
        loop: true,
        // controls: false,
        slideMargin: 0,
        pager: false
    });
});



$('.prev-slide').on('click', function () {
    const slider = $(this).closest('.object-item-photos').find('.object-slider');
    slider.goToPrevSlide();
});
$('.next-slide').on('click', function () {
    const slider = $(this).siblings('.object-slider');
    slider.goToNextSlide();
});




$('.gallery-list').lightGallery({
    thumbnail: true
});

$('.burger, .mobile-menu-close').on('click', function() {
    $('.mobile-menu').toggleClass('open');
});
