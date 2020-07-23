$(window).on('load', function(){
	// $('.loader').addClass('loaded');
    $('.loader').addClass('loaded').delay(1000).fadeOut('slow', function() {
		// $(this).addClass('loaded').delay(1000).remove();
		$(this).remove();
    });
});

if( $(window).width() >= 1025 ) {
	$('.slides').onepage_scroll({
		updateURL: false,
		loop: false,
		responsiveFallback: 1025
	});
};



$(window).resize(function() {
	// if ( $(window).width() < 1025 ) {
	// 	$('.slides').onepage_scroll().destroy();
	// }
	if ( $(window).width() >= 1025 ) {
		window.location.hash = '';
		$('.slides').onepage_scroll({
			updateURL: false,
			loop: false,
			responsiveFallback: 1025
		});
	};
	var loc = window.location.href,
	index = loc.indexOf('#');

	if (index > 0) {
		window.location = loc.substring(0, index);
	};
});

$('.slide-control-buttons .slide-prev').click(function() {
	$('.slides').moveUp();
	var loc = window.location.href,
	index = loc.indexOf('#');

	if (index > 0) {
		window.location = loc.substring(0, index);
	};
});
$('.slide-control-buttons .slide-next').click(function() {
	$('.slides').moveDown();
	var loc = window.location.href,
	index = loc.indexOf('#');

	if (index > 0) {
		window.location = loc.substring(0, index);
	};
});

$('.office-slider').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	infinite: true,
	dots: false,
	asNavFor: '.office-thumbs-slider,.office-info-slider'
});
$('.office-thumbs-slider').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	infinite: true,
	dots: false,
	arrows: false,
	focusOnSelect: true,
	asNavFor: '.office-slider,.office-info-slider'
});
$('.office-info-slider').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	infinite: true,
	dots: false,
	arrows: false,
	draggable: false
});

$('.slide-planning').on('click', '.level-selector:not(.active)', function() {
	$(this).addClass('active').siblings().removeClass('active');
	$(this).closest('.slide-content').find('.level-tab').removeClass('active').eq( $(this).index() ).addClass('active');
});

$('.menu-button').click(function() {
	$('body').toggleClass('menu-open');
});

if( $(window).width() >= 1025 ) {
	$('.menu-list a').click(function(e) {
		e.preventDefault();
		var index = +$(this).attr('data-anchor');
		$('.slides').moveTo(index);
		$('body').removeClass('menu-open');
	});
	$('.planning-button').click(function(e) {
		e.preventDefault();
		$('.slides').moveTo(4);
	});
};
if( $(window).width() < 1025 ) {
	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();
		$('body').removeClass('menu-open');

		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 500);
	});
};

$('.consult-button').click(function(e) {
	e.preventDefault();
	$('body').addClass('modal-open');
	$('.modal-consult').addClass('open');
});

$('.modal-close, .modal-overlay').click(function() {
	$('body').removeClass('modal-open');
	$('.modal').removeClass('open');
});

$('.office').each(function() {
	


	$(this).click(function() {
		let officeEmpty = $(this).attr('data-office-empty'),
			officeAvialable = $(this).attr('data-office-available'),
			officeNumber = $(this).attr('data-office-number'),
			officeSquare = $(this).attr('data-office-square'),
			officeFloor = $(this).attr('data-office-floor'),
			officeLogo = $(this).attr('data-office-logo'),
			officeClientDescr = $(this).attr('data-office-client-descr'),
			officeEmptyDescr = $(this).attr('data-office-empty-descr'),
			officePhoneMain = $(this).attr('data-office-phone-main'),
			officePhoneSecondary = $(this).attr('data-office-phone-secondary'),
			officeSite = $(this).attr('data-office-site'),
			officeFacebook = $(this).attr('data-office-facebook'),
			officeInstagram = $(this).attr('data-office-instagram'),
			officeLinkedin = $(this).attr('data-office-linkedin');
		
		console.log ( officeEmpty );
		console.log ( officeAvialable );
		console.log ( officeNumber );
		console.log ( officeSquare );
		console.log ( officeFloor );
		console.log ( officeLogo );
		console.log ( officeClientDescr );
		console.log ( officePhoneMain );
		console.log ( officePhoneSecondary );
		console.log ( officeSite );
		console.log ( officeFacebook );
		console.log ( officeInstagram );
		console.log ( officeLinkedin );

		console.log ( 'officeEmpty ' + officeEmpty.length );
		console.log ( 'officeAvialable ' + officeAvialable.length );
		console.log ( 'officeNumber ' + officeNumber.length );
		console.log ( 'officeSquare ' + officeSquare.length );
		console.log ( 'officeFloor ' + officeFloor.length );
		console.log ( 'officeLogo ' + officeLogo.length );
		console.log ( 'officeClientDescr ' + officeClientDescr.length );
		console.log ( 'officePhoneMain ' + officePhoneMain.length );
		console.log ( 'officePhoneSecondary ' + officePhoneSecondary.length );
		console.log ( 'officeSite ' + officeSite.length );
		console.log ( 'officeFacebook ' + officeFacebook.length );
		console.log ( 'officeInstagram ' + officeInstagram.length );
		console.log ( 'officeLinkedin ' + officeLinkedin.length );


		$('body').addClass('modal-open');
		$('.modal-office-info').addClass('open');

		$('.modal-office-info .modal-title span').text(officeNumber);
		$('.modal-office-info .office-square .value').text(officeSquare);
		$('.modal-office-info .office-floor .value').text(officeFloor);

		if( officeEmpty == 'true' ) {
			
			$('.modal-office-info .office-logo').hide();
			$('.modal-office-info .office-descr').text( officeEmptyDescr );

			$('.modal-office-info .office-order-text').show();
			$('.modal-office-info .order-button').show();
			
			if ( officeAvialable == 'true') {
				$('.modal-office-info .order-button').removeAttr('disabled');
				$('.modal-office-info .order-button span').text( $('.modal-office-info .order-button').attr('data-office-available-text') );
				$('.modal-office-info .office-order-text').show();

				console.log( 'data-office-avialable-text: ' + $('.modal-office-info .order-button').attr('data-office-available-text') );
			}
			else if (officeAvialable == 'false') {
				$('.modal-office-info .order-button').attr('disabled', 'disabled');
				$('.modal-office-info .order-button span').text( $('.modal-office-info .order-button').attr('data-office-unavailable-text') );
				$('.modal-office-info .office-order-text').hide();

				console.log( 'data-office-avialable-text: ' + $('.modal-office-info .order-button').attr('data-office-unavailable-text') );
			};

			$('.modal-office-info .phone-primary').hide();
			$('.modal-office-info .phone-secondary').hide();
			$('.modal-office-info .office-site').hide();
			$('.modal-office-info .socials').hide();
			
		}
		else if ( officeEmpty == 'false' ) {
			$('.modal-office-info .office-order-text').hide();

			
			
			$('.modal-office-info .office-logo').show();
			$('.modal-office-info .office-logo img').attr('src', officeLogo);
			if( officeLogo.length === 0 ) {
				$('.modal-office-info .office-logo').hide();
			}
			
			
			$('.modal-office-info .office-descr').show();
			$('.modal-office-info .office-descr').text(officeClientDescr);
			if( officeClientDescr.length === 0 ) {
				$('.modal-office-info .office-descr').hide();
			};

			
			
			$('.modal-office-info .phone-primary').show();
			$('.modal-office-info .phone-primary').text(officePhoneMain);
			$('.modal-office-info .phone-primary').attr('href', 'tel:' + officePhoneMain);
			if ( officePhoneMain.length === 0 ) {
				$('.modal-office-info .phone-primary').hide();
			};
			
			
			$('.modal-office-info .phone-secondary').show();
			$('.modal-office-info .phone-secondary').text(officePhoneSecondary);
			$('.modal-office-info .phone-secondary').attr('href', 'tel:' + officePhoneSecondary);
			if ( officePhoneSecondary.length === 0 ) {
				$('.modal-office-info .phone-secondary').hide();
			};
			
			
			$('.modal-office-info .office-site').show();
			$('.modal-office-info .office-site').text(officeSite);
			$('.modal-office-info .office-site').attr('href', officeSite);
			if ( officeSite.length === 0 ) {
				$('.modal-office-info .office-site').hide();
			};


			if ( officeFacebook.length > 0 || officeInstagram.length > 0 || officeLinkedin.length > 0 ) {
				$('.modal-office-info .socials').show();
			};


			$('.modal-office-info .office-facebook').show();
			$('.modal-office-info .office-facebook').attr('href', officeFacebook);
			if ( officeFacebook.length === 0 ) {
				$('.modal-office-info .office-facebook').hide();
			}
			
			
			$('.modal-office-info .office-instagram').show();
			$('.modal-office-info .office-instagram').attr('href', officeInstagram);
			if ( officeInstagram.length === 0 ) {
				$('.modal-office-info .office-instagram').hide();
			};

			
			$('.modal-office-info .office-linkedin').show();
			$('.modal-office-info .office-linkedin').attr('href', officeLinkedin);
			if ( officeLinkedin.length === 0 ) {
				$('.modal-office-info .office-linkedin').hide();
			};


			$('.modal-office-info .office-order-text').hide();
			$('.modal-office-info .order-button').hide();
		}
	})
});

$('.modal-office-info .order-button').click(function() {
	let officeNumber = $(this).closest('.modal-office-info').find('.modal-title span').text();
	$('.modal-office-info').removeClass('open');
	$('.modal-office-order').addClass('open');
	$('.modal-office-order .modal-title span').text(officeNumber);
});

$('.gallery-item').on('click', function(e) {
	e.preventDefault();
	$(this).children('.gallery-slides').find('a').eq(0).click();
});
$('.gallery-item .button').click(function(e) {
	e.preventDefault();
	$(this).siblings('.gallery-slides').find('a').eq(0).click();
});

$(document).on('click', '.onepage-pagination a', function(e) {
	e.preventDefault();
	var loc = window.location.href,
	index = loc.indexOf('#');

	if (index > 0) {
		window.location = loc.substring(0, index);
	};
});

$('a[data-fancybox]').fancybox({
	loop: true,
	buttons: [
		'close'
	]
});



$('.message-input').each(function() {
	console.log ($(this).val().length);
	console.log ($(this).val());

	if ( $(this).val().length > 0 ) {
		$(this).addClass('filled');
	}
	else {
		$(this).removeClass('filled');
	}
	$(this).on('change paste keyup', function() {
		if ( $(this).val() ) {
			$(this).addClass('filled');
		}
		else {
			$(this).removeClass('filled');
		}
	});
});
