$(function () {
    $('.accordeon-item').on('click', function() {
        $(this).toggleClass('open').siblings().removeClass('open');
    });

    const inviteSliderThumbs = new Swiper('.invite-slider-thumbs', {
        // centeredSlides: true,
        // centeredSlidesBounds: true,
        slidesPerView: 3,
        // watchOverflow: true,
        spaceBetween: 15,
        // loop: true,
        // watchSlidesVisibility: true,
        // watchSlidesProgress: true,
        // direction: 'vertical',

        breakpoints: {
            768: {
                direction: 'vertical'
            },
        }
    });
    const inviteSliderGallery = new Swiper('.invite-slider-gallery', {
        // watchOverflow: true,
        // watchSlidesVisibility: true,
        // watchSlidesProgress: true,
        // preventInteractionOnTransition: true,
        // loop: true,
        navigation: {
            nextEl: '#invite-slide-next',
            prevEl: '#invite-slide-prev',
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        thumbs: {
            swiper: inviteSliderThumbs
        },
        pagination: {
            el: '#invite-pagination',
			clickable: true,
        },
    });
    inviteSliderGallery.on('slideChangeTransitionStart', function() {
        inviteSliderThumbs.slideTo(inviteSliderGallery.activeIndex);
    });
    inviteSliderThumbs.on('transitionStart', function() {
        inviteSliderGallery.slideTo(inviteSliderThumbs.activeIndex);
    });

    $('.modal-btn').on('click', function() {
        $('.modal').addClass('open');
    });

    $('.modal-overlay, .modal-close').on('click', function() {
        $('.modal').removeClass('open');
    });

    $('.burger, .mobile-popup-close').on('click', function() {
        $('.mobile-popup').toggleClass('open');
    });
});
