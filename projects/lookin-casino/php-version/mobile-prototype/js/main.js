$('select').styler();

window.FontAwesomeConfig = {
    searchPseudoElements: true
};

if ( $('.home-page').length != 0 ) {
    if ($(window).scrollTop() > 0) {  
        $('.header').addClass('fixed');
    } else {
        $('.header').removeClass('fixed');
    };
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {  
            $('.header').addClass('fixed');
        } else {
            $('.header').removeClass('fixed');
        }
    });
};

$(document).on('click', 'a[href="/"], form button[type="submit"]', function(e) {
    e.preventDefault();
});

$('.slider').slick({
    dots: false,
    arrows: false,
    draggable: true,
    variableWidth: true,
    slidesToShow: 1,
    infinite: true
});

$('.slider-banner').slick({
    dots: true,
    arrows: false,
    draggable: true,
    slidesToShow: 1,
    infinite: true
});

$('.one-slide-slider').slick({
    arrows: false,
    draggable: true,
    slidesToShow: 1,
    infinite: true
});

$('.one-slide-slider.slider-with-dots').slick('slickSetOption', {
    dots: true
}, true);


$('.burger').click(function() {
    $(this).toggleClass('open');
    $('body').toggleClass('burger-menu-open');
    $('.burger-menu').toggleClass('open');
});

$('.rating-indicators .stat-item').each(function() {
    let percent = +$(this).find('.circle').data('percent');
    let color = $(this).find('.circle').data('color');

    $(this).find('.circle').radialIndicator({
        radius: 135,
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

    $('.faq-item').click(function() {
        $(this).toggleClass('open').siblings().removeClass('open');
    });

    if ($('.block-poker-search-map').length > 0 ) {
        $('.map-image-group').scrollLeft(540);
    }
});