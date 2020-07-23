'use strict';
$('.menu-open').click(function() {
    $('body').addClass('menu-open').removeClass('list-open');
    $('.menu-holder').addClass('open');
    $('.list-holder').removeClass('open');
});
$('.menu-close').click(function() {
    $('body').removeClass('menu-open');
    $('.menu-holder').removeClass('open');
});

$('.list-open').click(function() {
    $('body').addClass('list-open').removeClass('menu-open');
    $('.menu-holder').removeClass('open');

    $('.list-holder').addClass('open');
    $('.book-header .list-links').mCustomScrollbar();
});
$('.list-close').click(function() {
    $('body').removeClass('list-open');
    $('.list-holder').removeClass('open');
});

$(window).load( function() {
    $('.block-artworks .grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        gutter: 16,
        percentPosition: true
    });
    $('.block-articles-banners .grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-item',
        gutter: 16,
        percentPosition: true
    });
    // $(window).trigger('resize');
    // window.setTimeout(resizeMasonry, 500);
    // setTimeout( function() {
    //     $('.block-artworks .grid').css('padding', '0 30px');
    // }, 1000);

    // setTimeout(function() {
    //     $('.block-artworks .grid').css('padding', '0');
    // }, 500);

    // $('.block-artworks .grid').css('padding', '0');
});

// плавание баннера на главной
// if ( $('.block-artworks').length > 0 ) {
//     $(window).scroll( function() {
//         var initialScale = 0.78; // начальное увеличение 1 + значение
//         var bottomOffset = 1024; // после какого отступа перестать уменьшать
//         var box = $('#box');

//         if ( $(window).width() > 768 && $('.banner').offset().top < bottomOffset ) {
//             var scrollTop = $(window).scrollTop();
//             var scrolled = ( (scrollTop / bottomOffset) );
//             var scaleGap = ( (initialScale - ( initialScale*scrolled) ) );
//             // $('.banner').removeClass('smooth');
//             if ( scaleGap > 0 && scaleGap < initialScale ) {
//                 var transformValue = 'scale(' + ( 1 + scaleGap ) + ')';
//                 box.css('transform', transformValue);
//             }
//             else if ( scaleGap <= 0 ) {
//                 box.css('transform', 'scale(1)');
//             }
//         } else {
//             // $('.banner').addClass('smooth');
//         };

//         var footerBottomLevel = $('.footer').offset().top;
//         var bannerBottomLevel = $(document).scrollTop() + $('.banner').height();
//         var bannerBottomGap =  bannerBottomLevel - footerBottomLevel;

//         if ( bannerBottomLevel >= footerBottomLevel ) {
//             $('.banner').css('bottom', bannerBottomGap );
//         }
//         else {
//             $('.banner').css('bottom', '0');
//         };


//     });
// };

if ( $('.block-about').length > 0 ) {
    $(window).scroll( function() {
        var box = $('#about-banner');

        if ( $(window).width() > 768 ) {
            var footerBottomLevel = $('.footer').offset().top;
            var bannerBottomLevel = $(document).scrollTop() + box.height();
            var bannerBottomGap =  bannerBottomLevel - footerBottomLevel;

            if ( bannerBottomLevel >= footerBottomLevel ) {
                box.css('bottom', bannerBottomGap );
            }
            else {
                box.css('bottom', '0');
            };
        };




    });
};
