$(window).on('load', function(){
    $('.loader').fadeOut('slow', function() {
      $(this).remove();
    });
});

window.FontAwesomeConfig = {
    searchPseudoElements: true
};

// user agent
$(function() {
    if (navigator.userAgent.toLowerCase().indexOf('safari') != -1) {
        if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
            $('body').addClass('b_chrome');
        } else {

            $('body').addClass('b_safari');
        };
    };

    if (navigator.userAgent.indexOf('Firefox') > 0) {
        $('body').addClass('b_firefox');
    };

    var platform = navigator.userAgent || navigator.vendor || window.opera;

    if (/windows phone/i.test(platform)) {
        $('body').addClass('pl_wp');
    }

    if (/android/i.test(platform)) {
        $('body').addClass('pl_android');
    }
    if (/iPad|iPhone|iPod/.test(platform) && !window.MSStream ) {
        $('body').addClass('pl_ios');
    };
});

// welcome banner
if ( $('.welcome-banner').length >  0) {
    $(function() {
        var platform = navigator.userAgent || navigator.vendor || window.opera;

        var pl_wp = /windows phone/i.test(platform);
        var pl_android = /android/i.test(platform);
        var pl_ios_mobile = /iPhone|iPod/.test(platform) && !window.MSStream;




        if ( /windows phone/i.test(platform) ) {
            $('body').addClass('mobile-banner-open');
            $('.welcome-banner .banner-mobile').addClass('open');
            $('#viewport').attr('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi');

            if (navigator.userAgent.indexOf('Firefox') > 0) {
                var ww = screen.width;
                var scale = Math.round(ww*100 / 1200.0) / 100.0;
                if (scale > 1) scale = 1.0;

                $('.welcome-banner .close').click(function() {
                    $('#viewport').attr('content','width=1200, initial-scale=' + scale + ', maximum-scale=2.0, minimum-scale=' + scale + ', user-scalable=yes');
                });
                $('.welcome-banner .open-site-link').click( function() {
                    $('#viewport').attr('content','width=1200');
                });
            } else {
                $('.welcome-banner .close').click(function() {
                    $('#viewport').attr('content','width=1200');
                });
                $('.welcome-banner .open-site-link').click( function() {
                    $('#viewport').attr('content','width=1200');
                });
            };
        }
        else if ( /android/i.test(platform) ) {
            $('body').addClass('mobile-banner-open');
            $('.welcome-banner .banner-mobile').addClass('open');
            $('#viewport').attr('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi');

            if (navigator.userAgent.indexOf('Firefox') > 0) {
                var ww = screen.width;
                var scale = Math.round(ww*100 / 1200.0) / 100.0;
                if (scale > 1) scale = 1.0;

                $('.welcome-banner .close').click(function() {
                    $('#viewport').attr('content','width=1200, initial-scale=' + scale + ', maximum-scale=2.0, minimum-scale=' + scale + ', user-scalable=yes');
                });
                $('.welcome-banner .open-site-link').click( function() {
                    $('#viewport').attr('content','width=1200');
                });
            } else {
                $('.welcome-banner .close').click(function() {
                    $('#viewport').attr('content','width=1200');
                });
                $('.welcome-banner .open-site-link').click( function() {
                    $('#viewport').attr('content','width=1200');
                });
            };
        }
        else if ( /iPhone|iPod/.test(platform) && !window.MSStream ) {
            $('body').addClass('mobile-banner-open');
            $('.welcome-banner .banner-mobile').addClass('open');
            $('#viewport').attr('content', 'width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi');

            if (navigator.userAgent.indexOf('Firefox') > 0) {
                var ww = screen.width;
                var scale = Math.round(ww*100 / 1200.0) / 100.0;
                if (scale > 1) scale = 1.0;

                $('.welcome-banner .close').click(function() {
                    $('#viewport').attr('content','width=1200, initial-scale=' + scale + ', maximum-scale=2.0, minimum-scale=' + scale + ', user-scalable=yes');
                });
                $('.welcome-banner .open-site-link').click( function() {
                    $('#viewport').attr('content','width=1200');
                });
            } else {
                $('.welcome-banner .close').click(function() {
                    $('#viewport').attr('content','width=1200');
                });
                $('.welcome-banner .open-site-link').click( function() {
                    $('#viewport').attr('content','width=1200');
                });
            };
        }
        else  {
            $('body').addClass('banner-open');
            $('.welcome-banner .banner-desktop').addClass('open');
        };

        $('.welcome-banner .next-slide').click(function() {
            $(this).closest('.banner-slide').removeClass('active');
            $(this).closest('.banner-slide').next().addClass('active');
        });



        $('.welcome-banner .close').click(function() {
            $(this).closest('.welcome-banner').removeClass('open');
            $('body').removeClass('banner-open mobile-banner-open');
            // $('#viewport').attr('content','width=1200');
        });
        $('.welcome-banner .open-site-link').click( function() {
            $(this).closest('.welcome-banner').removeClass('open');
            $('body').removeClass('banner-open mobile-banner-open');
            // $('#viewport').attr('content','width=1200');
        });

        $('.welcome-banner').on('click', '.slide-dot:not(.active)', function() {
            $(this).closest('.banner-item').find('.banner-slide').removeClass('active').eq($(this).index()).addClass('active');
        });


    });
};



$(document).ready(function() {
    // $('.loader').hide('slow');

    // Banner homescreen slider
    $(function() {
        $('#banner-slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            prevArrow: $('.block-banner-slider .prev'),
            nextArrow: $('.block-banner-slider .next')

            // appendDots: $('.slider-controls')
        });

        $('#banner-slider').on('swipe', function(event, slick, direction) {
            $('.block-banner-slider .slick-slide:not(.slick-active)').find('canvas').remove();

            $('.block-banner-slider .slick-active .stat-item').each( function() {
                let percent = +$(this).find('.circle').data('percent');
                let color = $(this).find('.circle').data('color');
                // console.log (percent);
                // console.log (color);
                $(this).find('.circle').radialIndicator({
                    radius: 270,
                    barWidth: 14,
                    initValue: 0,
                    maxValue: 100,
                    barColor: color,
                    roundCorner: true,
                    percentage: true,
                    fontFamily: 'Roboto',
                    fontSize: 102,
                    fontWeight: 400
                });
                let radialObj = $(this).find('.circle').data('radialIndicator');
                radialObj.animate(percent);
            });
        });

        $('.block-banner-slider .prev, .block-banner-slider .slick-dots, .block-banner-slider .next').appendTo('.block-banner-slider .slider-controls');

        $('.block-banner-slider .slick-active .stat-item').each( function() {
            let percent = +$(this).find('.circle').data('percent');
            let color = $(this).find('.circle').data('color');
            // console.log (percent);
            // console.log (color);
            $(this).find('.circle').radialIndicator({
                radius: 270,
                barWidth: 14,
                initValue: 0,
                maxValue: 100,
                barColor: color,
                roundCorner: true,
                percentage: true,
                fontFamily: 'Roboto',
                fontSize: 102,
                fontWeight: 400
            });
            let radialObj = $(this).find('.circle').data('radialIndicator');
            radialObj.animate(percent);
        });

        $(document).on('click', '.block-banner-slider .prev, .block-banner-slider .slick-dots, .block-banner-slider .next', function() {

            $('.block-banner-slider .slick-slide:not(.slick-active)').find('canvas').remove();

            $('.block-banner-slider .slick-active .stat-item').each( function() {
                let percent = +$(this).find('.circle').data('percent');
                let color = $(this).find('.circle').data('color');
                // console.log (percent);
                // console.log (color);
                $(this).find('.circle').radialIndicator({
                    radius: 270,
                    barWidth: 14,
                    initValue: 0,
                    maxValue: 100,
                    barColor: color,
                    roundCorner: true,
                    percentage: true,
                    fontFamily: 'Roboto',
                    fontSize: 102,
                    fontWeight: 400
                });
                let radialObj = $(this).find('.circle').data('radialIndicator');
                radialObj.animate(percent);
            });
        });
    });


    $(function() {

        $('#sport-bets-news-slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            prevArrow: $('.single-sport-bets-news .prev'),
            nextArrow: $('.single-sport-bets-news .next')
            // appendDots: $('.sport-events-news .slider-controls')
        });

        $('.single-sport-bets-news .prev, .single-sport-bets-news .slick-dots, .single-sport-bets-news .next').appendTo('.single-sport-bets-news .slider-controls');
    });
    $(function() {

        $('#gambling-item-news-slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            prevArrow: $('.single-gambling-item-news .prev'),
            nextArrow: $('.single-gambling-item-news .next')
            // appendDots: $('.sport-events-news .slider-controls')
        });

        $('.single-gambling-item-news .prev, .single-gambling-item-news .slick-dots, .single-gambling-item-news .next').appendTo('.single-gambling-item-news .slider-controls');
    });
    $(function() {

        $('#casino-sport-bets-news-slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            prevArrow: $('.casino-sport-bets-news .prev'),
            nextArrow: $('.casino-sport-bets-news .next')
            // appendDots: $('.sport-events-news .slider-controls')
        });

        $('.casino-sport-bets-news .prev, .casino-sport-bets-news .slick-dots, .casino-sport-bets-news .next').appendTo('.casino-sport-bets-news .slider-controls');
    });

    $(function() {

        $('#poker-clubs-news-slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            prevArrow: $('.poker-clubs-news .prev'),
            nextArrow: $('.poker-clubs-news .next')
            // appendDots: $('.sport-events-news .slider-controls')
        });

        $('.poker-clubs-news .prev, .poker-clubs-news .slick-dots, .poker-clubs-news .next').appendTo('.poker-clubs-news .slider-controls');
    });

    $(function() {

        $('#calendar-news-slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            prevArrow: $('.block-events-calendar .prev'),
            nextArrow: $('.block-events-calendar .next')
            // appendDots: $('.sport-events-news .slider-controls')
        });

        $('.block-events-calendar .prev, .block-events-calendar .slick-dots, .block-events-calendar .next').appendTo('.block-events-calendar .slider-controls');
    });

    $(function() {

        $('#casino-features-slider').slick({
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            speed: 2000,
            prevArrow: $('.block-main-homescreen .prev'),
            nextArrow: $('.block-main-homescreen .next')
            // appendDots: $('.sport-events-news .slider-controls')
        });

        $('.block-main-homescreen .prev, .block-main-homescreen .slick-dots, .block-main-homescreen .next').appendTo('.block-main-homescreen .slider-controls');
    });

    $('#video-gallery-slider').slick({
        dots: false,
        arrows: true,
        // slidesToShow: 3,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        infinite: false
    });

    // $('#casino-gallery-slider').slick({
    //     dots: false,
    //     arrows: false,
    //     slidesToShow: 2,
    //     slidesToScroll: 1,
    //     draggable: true,
    //     infinite: true
    // });

    // $('#casino-thumbs-slider').slick({
    //     dots: false,
    //     arrows: true,
    //     slidesToShow: 5,
    //     slidesToScroll: 1,
    //     asNavFor: '#gallery-slider',
    //     infinite: true,
    //     focusOnSelect: true
    // });

    $('#casino-photo-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        // asNavFor: '#gallery-slider',
        infinite: false,
        focusOnSelect: true,
        rows: 3,
        slidesPerRow: 3
    });

    // Страница новостей, новости во складках
    $(function() {
        $('.block-main-short-news .article-photo-slider').each(function() {
            $(this).slick({
                dots: true,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: true,
                infinite: true,
                prevArrow: $(this).siblings('.slider-controls').children('.prev'),
                nextArrow: $(this).siblings('.slider-controls').children('.next'),
                appendDots: $(this).siblings('.slider-controls')
            });
        });

        // переключение таб
        $('.block-main-short-news .news-type-selectors').on( 'click', '.news-type-link:not(.active)', function() {
            $(this).addClass('active').siblings().removeClass('active').closest('.block-main-short-news').find('.news-type-tab').eq( $(this).index() ).addClass('active').siblings().removeClass('active');
            // в скрытых табах слайдер нужно переинициализировать
            if ( $('.block-main-short-news .news-type-tab').eq( $(this).index() ).find('.article-photo-slider').hasClass('slick-initialized') ) {
                $('.block-main-short-news .news-type-tab').eq( $(this).index() ).find('.article-photo-slider').slick('refresh');
            }
        });
    });


    $('#tournament-screens-slider').slick({
        dots: false,
        arrows: true,
        // slidesToShow: 3,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        infinite: false
    });

    $(function() {
        $('.players-rating-slider').each(function() {
            if( $(this).children('.slide').length > 7 ) {
                $(this).addClass('initialized slider-top-controls');
                $(this).slick({
                    dots: false,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: false,
                    infinite: false,
                    rows: 2,
                    slidesPerRow: 7
                });
            }
        });
        // переключение таб
        $('.rating-type-selectors').on( 'click', '.rating-type-link:not(.active)', function() {
            $(this).addClass('active').siblings().removeClass('active').closest('.block-players-rating').find('.rating-type-tab').eq( $(this).index() ).addClass('active').siblings().removeClass('active');
            // в скрытых табах слайдер нужно переинициализировать
            if ( $('.rating-type-tab').eq( $(this).index() ).find('.players-rating-slider').hasClass('initialized') ) {
                $('.rating-type-tab').eq( $(this).index() ).find('.players-rating-slider').slick('refresh');
            }
        });
    });

    $('.offer-group-slider').each(function() {
        $(this).slick({
            dots: false,
            arrows: true,
            appendArrows: $(this).siblings('.slider-controls'),
            slidesToShow: 3,
            slidesToScroll: 1,
            draggable: false,
            infinite: false
        });
    });

    $('#casino-players-rating-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        infinite: false,
        rows: 2,
        slidesPerRow: 5
    });

    $('#forecast-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        infinite: false,
        rows: 2,
        slidesPerRow: 4
    });

    $('#popular-videos-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        infinite: false
    });

    $('#actions-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        infinite: false,
        rows: 2,
        slidesPerRow: 4
    });


    $('#reviews-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        draggable: false,
        infinite: false
    });

    $('#forecasters-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        draggable: false,
        infinite: false
    });

    $('.four-slides-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        draggable: false,
        infinite: false
    });

    if ( $('.block-top-prizes .top-prize-item').length > 4 ) {
        $('#top-prizes-slider').slick({
            dots: false,
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            draggable: true,
            infinite: false
        });
    };

    if ( $('.block-best-offers .best-offer-item').length > 4 ) {
        $('#best-offers-slider').slick({
            dots: false,
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            draggable: true,
            infinite: false
        });
    };

    $('#chosen-events-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        infinite: false,
        rows: 2,
        slidesPerRow: 1
    });

    $('.one-slide-aside-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        infinite: false
    });

    $('#poker-clubs-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1
    });



    $('#logos-slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: true
    });

    $('#header-events-slider').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        autoplay: true,
        speed: 1000,
        prevArrow: '.prev-slide',
        nextArrow: '.next-slide'
    });


    // Лучшие игорные заведения от Lookin Casino
        $('.establishment-type-links').on( 'click', '.establishment-type-link:not(.active)', function() {
            $(this).addClass('active').siblings().removeClass('active').closest('.block-best-gambling-establishments').find('.establishment-tab').eq( $(this).index() ).addClass('active').siblings().removeClass('active');
        });
    // Лучшие игорные заведения от Lookin Casino


    // Лучшие заведения месяца
    $(function() {
        $('.place-type-slider').each(function() {
            if( $(this).children('.slide').length > 4 ) {
                // console.log( 'slider tab number ' + (+$(this).index + 1) + ' has ' + $(this).children('.slide').length + ' elements');
                // console.log( $(this).children('.slide').length );
                $(this).addClass('initialized slider-top-controls');
                $(this).slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: false
                });
            }
        });

        // переключение таб
        $('.place-type-selectors').on( 'click', '.place-type-link:not(.active)', function() {
            $(this).addClass('active').siblings().removeClass('active').closest('.block-best-places').find('.place-type-tab').eq( $(this).index() ).addClass('active').siblings().removeClass('active');
            // в скрытых табах слайдер нужно переинициализировать
            if ( $('.place-type-tab').eq( $(this).index() ).children('.place-type-slider').hasClass('initialized') ) {
                $('.place-type-tab').eq( $(this).index() ).children('.place-type-slider').slick('refresh');
            }
        });
    });
    // Лучшие заведения месяца

    // Новости главные события
    $(function() {
        $('.news-slider').each(function() {
            if( $(this).children('.slide').length > 1 ) {
                // console.log( 'slider tab number ' + (+$(this).index + 1) + ' has ' + $(this).children('.slide').length + ' elements');
                // console.log( $(this).children('.slide').length );
                $(this).addClass('initialized slider-top-controls');
                $(this).slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false
                });
            }
        });

        $('.news-type-selectors').on( 'click', '.news-type-link:not(.active)', function() {
            $(this).addClass('active').siblings().removeClass('active').closest('.block-main-news').find('.news-type-tab').eq( $(this).index() ).addClass('active').siblings().removeClass('active');

            // в скрытых табах слайдер нужно переинициализировать
            if ( $('.news-type-tab').eq( $(this).index() ).children('.news-slider').hasClass('initialized') ) {
                // console.log(' slider must reinitialize ');
                // console.log('true');
                $('.news-type-tab').eq( $(this).index() ).children('.news-slider').slick('refresh');
            }
        });
    });
    // Новости главные события

    $('.map-item').each( function() {
        $(this).on('mouseenter', function() {
            $(this).addClass('.map-item-active');
                $(this).find('.rating-item .circle').each( function() {
                    let percent = +$(this).data('percent');
                    let color = $(this).data('color');
                    $(this).radialIndicator({
                        radius: 290,
                        barWidth: 16,
                        initValue: 0,
                        maxValue: 100,
                        barColor: color,
                        roundCorner: true,
                        percentage: true
                    });
                    let radialObj = $(this).data('radialIndicator');
                    radialObj.animate(percent);
                });
            // });
        });
        $(this).mouseleave(function() {
            $(this).removeClass('.map-item-active');
            $(this).find('canvas').remove();
        });
    });



    // youtube video click on thumb
    // $(function() {
    //     $('.video-item .item-open, .video-item .item-bg').click( function(e) {
    //         e.preventDefault();
    //         let videoHref = ('https://www.youtube.com/embed/' + $(this).parent('.video-item').data('src') + '?autoplay=1' );
    //         // console.log(videoHref);

    //         $('body').addClass('modal-open');
    //         $('#modal-video').fadeIn();
    //         $('#modal-video').find('iframe').attr('src', videoHref);
    //     });
    //     $('.modal-overlay, .modal-close').click( function() {
    //         $('body').removeClass('modal-open');
    //         $(this).closest('.modal').fadeOut();
    //         $('#modal-video').find('iframe').attr('src', '');
    //     });
    // });

    $(function() {
        $('.header-mobile .menu-burger').click(function() {
            $(this).closest('.header-mobile').addClass('open');
            $('body').addClass('menu-open');
        });
        $('.header-mobile .menu-close').click(function() {
            $(this).closest('.header-mobile').removeClass('open');
            $('body').removeClass('menu-open');
        });
    });



    $('select').styler();

    if ( $('.block-casino-players-rating .list-item').length > 4 ) {
        $('.block-casino-players-rating .casino-list').addClass('overflow');

        // console.log( $('.block-casino-players-rating .list-item').length );
        $('.block-casino-players-rating .casino-list').mCustomScrollbar();
    }
    if ( $('.block-tournament-events-map .event-item').length > 4 ) {
        $('.block-tournament-events-map .tournament-events-list').addClass('overflow');

        // console.log( $('.block-casino-players-rating .list-item').length );
        $('.block-tournament-events-map .tournament-events-list').mCustomScrollbar();
    }


    // Tournament screen coundown
    $(function() {
        var screen = $('.countdown .time-screen');

        function startTimer(duration, screen) {
            var timer = duration, minutes, seconds;

            setInterval(function () {
                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                screen.text(minutes + " : " + seconds);

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        };

        startTimer(600, screen); //в секундах
    });


    $(function() {
        $('.login-button, a.account').click( function(e) {
            e.preventDefault();
            $('body').addClass('modal-open');
            $('#modal-login').fadeIn();
        });
        $('.registration-button').click( function(e) {
            e.preventDefault();
            $('body').addClass('modal-open');
            $('#modal-registration').fadeIn();
        });
        $('.modal-login-button').click( function(e) {
            e.preventDefault();
            $('body').addClass('modal-open');
            $('#modal-registration').hide();
            $('#modal-login').fadeIn();
        });
        $('.modal-registration-button').click( function(e) {
            e.preventDefault();
            $('body').addClass('modal-open');
            $('#modal-login').hide();
            $('#modal-registration').fadeIn();
        });
        $('.modal-overlay, .modal-close').click( function() {
            $('body').removeClass('modal-open');
            $(this).closest('.modal').fadeOut();
        });
    });

    $('.menu-burger').click(function() {
        $(this).closest('.burger-content').toggleClass('active');
    });

    // $(this).closest('services-order').removeClass($(this).closest('services-order').attr('class').split(' ')[1]).addClass( $(this).attr('class').split(' ')[1] );




    // new WOW().init();

    $(function() {
        var windowHeight = $(window).height(),
            gridTop = windowHeight * 0.1,
            gridBottom = windowHeight * 1;

        $('.block-visibility-animation').each(function () {
            var thisTop = $(this).offset().top - $(window).scrollTop();

            if (thisTop > gridTop && (thisTop + $(this).height()) < gridBottom) {
                $(this).addClass('visible');
            }
            else {
                $(this).removeClass('visible');
            }
        });

        $(window).on('scroll', function () {
            $('.block-visibility-animation').each(function () {
                var thisTop = $(this).offset().top - $(window).scrollTop();

                if (thisTop > gridTop && (thisTop + $(this).height()) < gridBottom) {
                    $(this).addClass('visible');
                }
                else {
                    // $(this).removeClass('visible');
                }
            });
        });
    });

    // $( '.block-players-rating:in-viewport' ).addClass('visible');
    // $('.block-best-places:in-viewport').addClass('visible');

    // casino rating item
    $(function() {
        $('.casino-rating-item.main .stat-item').each(function() {
            let percent = +$(this).find('.circle').data('percent');
            let color = $(this).find('.circle').data('color');

            $(this).find('.circle').radialIndicator({
                radius: 170,
                barWidth: 14,
                initValue: 0,
                maxValue: 100,
                barColor: color,
                roundCorner: true,
                percentage: true,
                fontFamily: 'Roboto',
                fontSize: 76,
                fontColor: color,
                fontWeight: 400,
                // format: '## ' + $(this).find('.title').text() + ''
            });
            let radialObj = $(this).find('.circle').data('radialIndicator');
            radialObj.animate(percent);
        });

        $('.casino-rating-item:not(.main) .stat-item').each(function() {
            let percent = +$(this).find('.circle').data('percent');
            let color = $(this).find('.circle').data('color');

            $(this).find('.circle').radialIndicator({
                radius: 170,
                barWidth: 14,
                initValue: 0,
                maxValue: 100,
                barColor: color,
                roundCorner: true,
                percentage: true,
                fontFamily: 'Roboto',
                fontSize: 76,
                fontColor: '#2862ac',
                fontWeight: 400,
                format: '## '+ 'текст'
            });
            let radialObj = $(this).find('.circle').data('radialIndicator');
            radialObj.animate(percent);
        });
    });


    $(function() {
        $('.casino-ratings-table').tablesorter();

        $('.casino-ratings-table .circle').each(function() {
            let percent = +$(this).data('percent');
            let color = $(this).data('color');

            $(this).radialIndicator({
                radius: 58,
                barWidth: 4,
                initValue: 0,
                maxValue: 100,
                barColor: color,
                roundCorner: true,
                percentage: true,
                fontFamily: 'Roboto',
                fontSize: 32,
                fontColor: '#2862ac',
                fontWeight: 400,
                // format: '## ' + $(this).find('.title').text() + ''
            });
            let radialObj = $(this).data('radialIndicator');
            radialObj.animate(percent);
        });


        if ( $('.focus-highlight').length ) {
            // $('.focus-highlight').find('td, th')
            $('.focus-highlight').find('th')
                .attr('tabindex', '1')
                .on('touchstart', function() {
                $(this).focus();
            });
        };
    });

    $('.block-casino-items-map .casino-items-list').mCustomScrollbar();
    // $('.casino-ratings-table tbody tr').each(function() {
    //     $('.casino-ratings-table thead th').click(function() {
    //         let index = $(this).index();
    //         $(this).closest('.casino-ratings-table').find('td').eq(index).addClass('active').sibling('td').removeClass('active');
    //     });
    // });

    // feedback item with indicators
    $('.review-item.main .stat-item').each(function() {
        let percent = +$(this).find('.circle').data('percent');
        let color = $(this).find('.circle').data('color');

        $(this).find('.circle').radialIndicator({
            radius: 170,
            barWidth: 14,
            initValue: 0,
            maxValue: 100,
            barColor: color,
            roundCorner: true,
            percentage: true,
            fontFamily: 'Roboto',
            fontSize: 76,
            fontColor: color,
            fontWeight: 400,
            // format: '## ' + $(this).find('.title').text() + ''
        });
        let radialObj = $(this).find('.circle').data('radialIndicator');
        radialObj.animate(percent);
    });

    // poker tournaments map selectors
    $(function() {
        $('.block-tournament-items-map .date-input-group').click(function() {
            $(this).toggleClass('active');
            $(this).find('.date-range').data('daterangepicker').show();
        });

        $(document).on('click', function(e) {
            if ( $(e.target).closest('.block-tournament-items-map .date-input-group').length == 0 ) {
                $('.block-tournament-items-map .date-input-group').removeClass('active');
            };
        });

        // разрешаем клик внутри кликабельной группы
        $('.block-tournament-items-map .date-input-dropdown').click(function(event) {
            event.cancelBubble = true;
            if(event.stopPropagation) event.stopPropagation();
        });
        function formatDayName(date) {
            let dayNames = [
                'вс',
                'пн',
                'вт',
                'ср',
                'чт',
                'пт',
                'сб'
            ];
            let dayIndex = date.getDay();
            return dayNames[dayIndex]
        };

        $('.block-tournament-items-map .date-range').daterangepicker({
            autoApply: true,
            locale: {
                format: 'DD/MM/YYYY',
                separator: ' - ',
                applyLabel: 'Apply',
                cancelLabel: 'Cancel',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                weekLabel: 'Н',
                daysOfWeek: [
                    'вс',
                    'пн',
                    'вт',
                    'ср',
                    'чт',
                    'пт',
                    'сб'
                ],
                monthNames: [
                    'Январь',
                    'Февраль',
                    'Март',
                    'Апрель',
                    'Май',
                    'Июнь',
                    'Июль',
                    'Август',
                    'Сентябрь',
                    'Октябрь',
                    'Ноябрь',
                    'Декабрь'
                ],
                firstDay: 1
            },
            parentEl: $('.block-tournament-items-map .date-input-dropdown'),
            alwaysShowCalendars: true,
            minDate: new Date(),
        },
        function(start, end, label) {
            // console.log( start.format('DD.MM') );
            // console.log( start.format('dd') );
            // console.log( end.format('DD.MM') );
            // console.log( end.format('dd') );
            // console.log( $(this).parent() );
            // console.log( $(this).closest('.input-group').attr('class') );
            // $(this).parent('.date-start').find('.date-value').text(start.format('DD.MM') );
            // $(this).closest('.date-start').siblings('.date-finish').find('.date-value').text(end.format('DD.MM') );

            // console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
            // console.log('New date selected: ' + start.format('YYYY-MM-DD')+ ' to '+ end.format('YYYY-MM-DD'));
        });
        $('.block-tournament-items-map .date-range').on('show.daterangepicker', function(ev, picker) {
            // console.log(picker.endDate.format('dd') );
            // console.log(picker.endDate._d );
            // console.log ( formatDayName(picker.endDate._d) );

            
        });

        $('.block-tournament-items-map .date-range').data('daterangepicker').show();

        $('.block-tournament-items-map .date-range').on('apply.daterangepicker', function(ev, picker) {
            $(this).closest('.date-input-group').find('.date-title').text(
                formatDayName(picker.startDate._d) + ',  ' + picker.startDate.format('DD.MM') + ' — ' + formatDayName(picker.endDate._d) + ',  ' + picker.endDate.format('DD.MM')
            );
        });

        $('.block-tournament-items-map .tournament-items-list').mCustomScrollbar();
    });

    // news chat
    $(function() {
        $('.single-news-item .chat-link').click(function(e) {
            e.preventDefault();
            $('.block-single-article-news .aside-column').hide();
            $('.block-single-article-news .chat-column').addClass('active');
        });

        $('.all-chats .close').click(function() {
            $('.block-single-article-news .aside-column').show();
            $('.block-single-article-news .chat-column').removeClass('active');
        });
        $('.chat-column .notification').click(function() {
            $(this).toggleClass('active');
        });
        $('.chat-list-item .single-chat-link').click(function() {
            $('.all-chats').removeClass('active');
            $('.single-chat').addClass('active');
        });
        $('.single-chat .return').click(function() {
            $('.all-chats').addClass('active');
            $('.single-chat').removeClass('active');
        });
    });

    $('.block-single-casino-details .game-item .title').click(function() {
        // $(this).closest('.block-single-casino-details .game-item').toggleClass('active').siblings().removeClass('active');
        $(this).closest('.block-single-casino-details .game-item').toggleClass('active');
    });
    $('.faq-item .title').click(function() {
        $(this).closest('.faq-item').toggleClass('active');
    });

    $(document).on('click', 'a[href="/"], form button[type="submit"]', function(e) {
        e.preventDefault();
    });

    

});
























