$('.service-tab-links').on('click', '.tab-link:not(.active)', function() {
    $(this).addClass('active').siblings().removeClass('active');
    $(this).closest('.block-service-tabs').find('.service-tab').eq($(this).index()).addClass('active').siblings().removeClass('active');
});

$('.categories-selectors').on('click', '.category-selector:not(.active)', function() {
    $(this).addClass('active').siblings().removeClass('active');
});

$(window).scroll(function() {
    var sticky = $('.header'),
        scroll = $(window).scrollTop();

    if (scroll >= 15) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});


$('.card-slider').slick({
    dots: true,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: false,
                dots: false
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                arrows: false,
                dots: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                arrows: false,
                dots: false
            }
        }
    ]
});
$('.finished-auctions-slider-mobile, .latest-news-slider-mobile').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 767,
            settings: 'unslick'
        }
    ]
});

$('.certificate-item').simpleLightbox();

$('.modal-close, .modal-overlay').click(function() {
    $('.modal').removeClass('open');
});

$('.phone-input').mask('+7 9999 999-99-99');

let radius = 220;
let fields = $('.text-item'),
    container = $('.text-items'),
    width = container.width(),
    height = container.height(),
    angle = 0,
    step = (2 * Math.PI) / fields.length;

fields.each( function() {
    let x = Math.round(width / 2 + radius * Math.cos(angle) - $(this).width() / 2);
    let y = Math.round(height / 2 + radius * Math.sin(angle) - $(this).height() / 2);
    // if (window.console) {
    //     console.log($(this).text(), x, y);
    // }
    $(this).css({
        left: x + 'px',
    top: y + 'px'
    });
    angle += step;
});


$('.burger').on('click', function() {
    $(this).toggleClass('open');
    $('.mobile-menu').toggleClass('open');
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


$('.modal-btn, .callback-btn').on('click', function() {
    $('.modal').addClass('open');
});
