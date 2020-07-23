$(document).ready( function() {
    $('.team-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 860,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.product-item-slides').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false
        // lazyLoad: true
    });
    $('.product-item-thumbs').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.product-item-slides',
        lazyLoad: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    // $(function() {
    //     function bannerPosition() {
    //         $('.product-item').each( function() {
    //             let scrollTop = $(window).scrollTop(),
    //             productsTop = $('.category-products').offset().top,
    //             bannerTop = $(this).offset().top,
    //             topBannerPosition = (bannerTop - productsTop + ($(this).find('.product-item-element').height()));

    //             $(this).find('.product-item-element').click( function() {
    //                 let product = $(this).closest('.product-item');
    //                 product.toggleClass('open');

    //                 product.find('.product-item-slides .slick-next, .product-item-thumbs .slick-next').trigger('click');
    //                 product.find('.product-item-slides, .product-item-thumbs').slick('setPosition', 0);

    //                 let videoLink  = product.find('iframe').data('src');
    //                 product.find('iframe').attr('src', videoLink).removeAttr('data-src');
    //                 product.siblings().removeClass('open').removeAttr('style');

    //                 product.css({'margin-bottom' : ($(this).siblings('.product-item-info-banner').height() + product.height() + 157) });
    //                 $(this).siblings('.product-item-info-banner').css({'top' : (topBannerPosition + 100) });

    //             });
    //         });
    //     };
    //     bannerPosition();

    //     $(window).resize(function() {
    //         bannerPosition();
    //     });
    // });

    $('.product-item').each( function() {
        let scrollTop = $(window).scrollTop(),
        productsTop = $('.category-products').offset().top,
        bannerTop = $(this).offset().top,
        topBannerPosition = (bannerTop - productsTop + ($(this).find('.product-item-element').height()));

        $(this).find('.product-item-element').click( function() {
            let product = $(this).closest('.product-item');
            product.toggleClass('open');

            product.find('.product-item-slides .slick-next, .product-item-thumbs .slick-next').trigger('click');
            product.find('.product-item-slides, .product-item-thumbs').slick('setPosition', 0);

            let videoLink  = product.find('iframe').data('src');
            product.find('iframe').attr('src', videoLink).removeAttr('data-src');
            product.siblings().removeClass('open').removeAttr('style');

            product.css({'margin-bottom' : ($(this).siblings('.product-item-info-banner').height() + product.height() + 157) });
            $(this).siblings('.product-item-info-banner').css({'top' : (topBannerPosition + 100) });

        });
    });

    $('.burger').click( function() {
        $('body').toggleClass('menu-open');
    });
    // services tabs
    // $(function() {
    //     $('.form-title-input').val( $('.selector-item-active').data('form-title') );

    //     $('.block-services-info .selector-item').click(function() {
    //         $(this).addClass('selector-item-active').siblings().removeClass('selector-item-active');
    //         $(this).closest('.block-services-info').find('.form-title-input').val( $(this).data('form-title') );
    //         console.log( $('.form-title-input').val() );
    //         $(this).closest('.block-services-info').find('.head-tab').removeClass('active').eq($(this).index()).addClass('active');
    //         $(this).closest('.block-services-info').find('.service-description-tab').removeClass('active').eq($(this).index()).addClass('active');
    //     });
    // });

    $(function() {
        $('.modal-overlay').click(function() {
            $('body').removeClass('modal-open');
            $('.modal').removeClass('open');
        });

        $('.modal-question-button').click(function() {
            $('body').addClass('modal-open');
            $('.modal-question').addClass('open');
        });
        $('.modal-consult-button').click(function() {
            $('body').addClass('modal-open');
            $('.modal-consult').addClass('open');
        });
        $('.modal-buy-button').click(function() {
            $('body').addClass('modal-open');
            $('.modal-buy').addClass('open');
        });
        $('.modal-transfer-button').click(function() {
            $('body').addClass('modal-open');
            $('.modal-transfer').addClass('open');
        });

    });

});


function initMap() {
    var locations = [
        ["Гонконг", 22.286394, 114.149139, "11th Floor, One Pacific Place, 88 Queensway"],
        ["Киев", 50.45466, 30.5238, "Адрес"],
        ["Пекин", 39.9075, 116.39723, "Адрес"],
        ["Москва", 55.751244, 37.618423, "Адрес"]
    ];


    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: new google.maps.LatLng(50.0529506,30.7667133),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var marker, i;

    var bounds = new google.maps.LatLngBounds();

    for (i = 0; i < locations.length; i++) {


        bounds.extend(new google.maps.LatLng(locations[i][1], locations[i][2]));

        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: {
                url: "/img/marker.svg",
                scaledSize: new google.maps.Size(34, 38)
            }
        });

        bounds.extend(marker.getPosition());


        var infowindow = new google.maps.InfoWindow({
            content: locations[i][0] + ': ' + locations[i][3],
            pixelOffset: new google.maps.Size(0, -2)
            // maxWidth: 160
        });

        infowindow.open(map, marker);

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                }
            })
        );
    }

    map.fitBounds(bounds);
}













