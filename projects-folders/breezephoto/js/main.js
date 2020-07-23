
// Slider homepage
$(window).load(function() {
  $('.mainpage-slider').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    items: 1,
    margin: 0,
    autoplay: false,
    autoplayTimeout: 5000,
    mouseDrag: false,
    autoHeight: true
  });
});

// Aboutme vertical slider
$(window).load(function() {
  $('.aboutme-slider').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    items: 1,
    margin: 0,
    autoplay: false,
    autoplayTimeout: 5000,
    mouseDrag: false,
    autoHeight: true,
    animateOut: 'slideOutUp',
    animateIn: 'slideInDown'

  });
});


// Portfolio category sliders
$(window).load(function() {
  $('.albumssliders-slider').owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    items: 3,
    margin: 0,
    autoplay: false,
    autoplayTimeout: 5000,
    mouseDrag: false,
    autoHeight: true
  });
    var i = 1;
    $('.albumssliders-slider .owl-dot').each(function(){
        $(this).text(i);
        i++;
    });
});

// Portfolio category slider video
$(window).load(function() {
  $('.albumssliders-slider-video').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    items: 2,
    margin: 0,
    autoplay: false,
    autoplayTimeout: 5000,
    mouseDrag: false,
    autoHeight: true
  });
    var i = 1;
    $('.albumssliders-slider-video .owl-dot').each(function(){
        $(this).text(i);
        i++;
    });
});

// photoslider of albumsslider in each portfolio category
$(window).load(function() {
  $('.photoalbum-slider').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    items: 1,
    margin: 0,
    autoplay: false,
    autoplayTimeout: 5000,
    mouseDrag: false,
    autoHeight: true
  });
});


// Portfolio projects scrollbar
jQuery(document).ready(function(){
    jQuery('.scrollbar-inner').scrollbar();
});