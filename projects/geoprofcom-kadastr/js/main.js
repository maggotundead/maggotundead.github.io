$(document).ready(function() {

	$("form").submit(function() {
		var e = $(this);
		return $.ajax({
			type: e.attr("method"),
			url: e.attr("action"),
			data: e.serialize()
			}).done(function() {
			alert("Thank you!"), setTimeout(function() {
				 e.trigger("reset");
			}, 1e3)
			}).fail(function() {
			alert("Ошибка отправки, попробуйте позже");
		}), !1
	});

	$(".js-mask_phone").mask("+7 (000) 000-00-00");

	$('#projects-slider').slick({
		dots: false,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: false,
		nextArrow: $('.next-project'),
		draggable: false
	});

	$('.photos-gallery').slick({
		dots: false,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		// draggable: true,
		asNavFor: '.thumbs-gallery'
	});

	$('.thumbs-gallery').slick({
		dots: false,
		arrows: false,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		draggable: true,
		focusOnSelect: true,
		asNavFor: '.photos-gallery',
		responsive: [
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2
				}
			},
		]
	});

	$('.show-all .open').click(function(e) {
		e.preventDefault();
		$(this).closest('.service-item').addClass('open');
		// $(this).closest('.service-item').addClass('open');
		// $(this).remove();
	});
	$('.show-all .hide').click(function(e) {
		e.preventDefault();
		$(this).closest('.service-item').removeClass('open');
		// $(this).closest('.service-item').addClass('open');
		// $(this).remove();
	});

	$('.button').click( function(e) {
        e.preventDefault();
        $('#popup').addClass('open');
    });
    $('.modal-overlay, .modal-close').click( function() {
        $(this).closest('.modal').removeClass('open');
    });

    console.log( 'outer width: ' + $(window).outerWidth() );
    console.log( 'width: ' + $(window).width() );

    if ( $(window).outerWidth() < 1025 ) {
    	$('.work-step').each( function() {
    		$(this).attr('data-wow-offset', '0');
    	});
    };

    new WOW().init();


});












