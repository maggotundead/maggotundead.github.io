$(document).ready(function() {
	$('.faq-item-toggler').click(function() {
        $(this).closest('.faq-item').siblings().removeClass('open');
        $(this).closest('.faq-item').toggleClass('open');
    });

    $('#vacancy-gallery').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '#vacancy-gallery-thumbs',
        prevArrow: '<button class="slick-arrow slider-arrow prev-arrow"></button>',
        nextArrow: '<button class="slick-arrow slider-arrow next-arrow"></button>',
        draggable: true
    });
    $('#vacancy-gallery-thumbs').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        vertical: true,
        arrows: false,
        asNavFor: '#vacancy-gallery',
        draggable: true,
        verticalSwiping: true
    });

    $('.upload-input-default').on('change', function(e) {
        let fileName = e.target.files[0].name;
        $(this).closest('.upload-label-wrapper').find('.upload-file-name').text( fileName ).addClass('reset-upload');
    })
    $('.upload-file-name').on('click', function() {
        // console.log('clicked');
        $(this).text('').removeClass('reset-upload');
        $(this).closest('.upload-label-wrapper').find('.upload-file-default').val('');
        // console.log( $(this).closest('.upload-label-wrapper').find('.upload-file-default').val('') );
    });
});
