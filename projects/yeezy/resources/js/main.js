$('.reviews-slider').slick({
    infinite: false,
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 1
            }
        },
        {
            breakpoint: 1201,
            settings: {
                slidesToShow: 2
            }
        }
    ]
});
$('#product-photos').slick({
    infinite: true,
    dots: false,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '#product-thumbs'
});
// $('#product-photos').on('wheel', (function(e) {
//     e.preventDefault();
//     if (e.originalEvent.deltaY < 0) {
//       $(this).slick('slickNext');
//     } else {
//       $(this).slick('slickPrev');
//     }
// }));
$('#product-thumbs').slick({
    infinite: true,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '#product-photos',
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 481,
            settings: {
                slidesToShow: 3
            }
        }
    ]
});
// $('#product-thumbs').on('wheel', (function(e) {
//     e.preventDefault();
//     if (e.originalEvent.deltaY < 0) {
//       $(this).slick('slickNext');
//     } else {
//       $(this).slick('slickPrev');
//     }
// }));

$(document).on('click', '.info-tab-link:not(.active)', function() {
    $(this).addClass('active').siblings().removeClass('active');
    $(this).closest('.block-product-info-tabs').find('.info-tab').eq($(this).index()).addClass('active').siblings().removeClass('active');
});


$('.catalog-item .quick-view').click(function() {
    $('.wrapper').addClass('modal-open');
    $('.modal-product').addClass('open');
    $('.modal-product .product-slider-photos').slick('setPosition'); 
    $('.modal-product .product-slider-thumbs').slick('setPosition'); 
});
$('.header .cart-wrap').click(function() {
    $('.wrapper').addClass('modal-open');
    $('.modal-cart').addClass('open');
});
 
$('.modal-close, .modal-overlay').click(function() {
    $('.wrapper').removeClass('modal-open');
    $('.modal').removeClass('open');
});


$('.quantity').each(function() {
    var spinner = $(this),
    input = spinner.find('input[type="number"]'),
    btnUp = spinner.find('.quantity-up'),
    btnDown = spinner.find('.quantity-down'),
    min = input.attr('min'),
    max = input.attr('max');

    btnUp.click( function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
        var newVal = oldValue;
        } else {
        var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
        var newVal = oldValue;
        } else {
        var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });
});

$('.burger').click(function() {
    $(this).toggleClass('open');
    $('.wrapper').toggleClass('menu-open');
    $('.header').toggleClass('menu-open');
});

function starsPhotoSlider() {
    $('.block-stars-photos .stars-photos').slick({
        infinite: true,
        dots: true,
        arrows: false,
        mobileFirst: true,
        slidesToScroll: 1,
        slidesToShow: 1,
        // centerMode: true,
        responsive: [
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 2,
                    // centerMode: true
                }
            },
            {
                breakpoint: 641,
                settings: {
                    slidesToShow: 3,
                    // centerMode: true
                }
            },
            {
                breakpoint: 861,
                settings: {
                    slidesToShow: 4,
                    // centerMode: true
                }
            },
            {
                breakpoint: 1025,
                settings: 'unslick'
            }
        ]
    });
};
starsPhotoSlider();
$(window).resize( function() {
    if ( $(window).width() < 1025 ) {
        starsPhotoSlider();
    }
});

function starsCertificateSlider() {
    $('.certificates-slider').slick({
        infinite: true,
        dots: true,
        arrows: false,
        mobileFirst: true,
        slidesToScroll: 1,
        slidesToShow: 1,
        // centerMode: true,
        responsive: [
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 2,
                    // centerMode: true
                }
            },
            {
                breakpoint: 641,
                settings: {
                    slidesToShow: 3,
                    // centerMode: true
                }
            },
            // {
            //     breakpoint: 861,
            //     settings: {
            //         slidesToShow: 4,
            //         // centerMode: true
            //     }
            // },
            {
                breakpoint: 1025,
                settings: 'unslick'
            }
        ]
    });
};
starsCertificateSlider();
$(window).resize( function() {
    if ( $(window).width() < 1025 ) {
        starsCertificateSlider();
    }
});

let userAgent = navigator.userAgent || navigator.vendor || window.opera;

if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
    // $('.wrapper').addClass('ios');

    if (userAgent.toLowerCase().indexOf('safari') != -1) { 
        if (userAgent.toLowerCase().indexOf('chrome') > -1) {
            // console.log('chrome browser');
        } else {
            $('.header').addClass('ios-safari');
        }
    }
};


var rect = $('.shoe-image')[0].getBoundingClientRect();
var mouse = {x: 0, y: 0, moved: false};

$('.shoe-image').mousemove(function(e) {
  mouse.moved = true;
  mouse.x = e.clientX - rect.left;
  mouse.y = e.clientY - rect.top;
});
 
// Ticker event will be called on every frame
TweenLite.ticker.addEventListener('tick', function(){
  if (mouse.moved){
    parallaxIt('.shoe-image img', -50);
  }
  mouse.moved = false;
});

function parallaxIt(target, movement) {
  TweenMax.to(target, 0.5, {
    x: (mouse.x - rect.width / 2) / rect.width * movement,
    y: (mouse.y - rect.height / 2) / rect.height * movement
  });
}

$(window).on('resize scroll', function(){
  rect = $('.shoe-image')[0].getBoundingClientRect();
})