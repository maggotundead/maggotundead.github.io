
	$('#equipment-slider').slick({
		dots: true,
		infinite: true,
		arrows: true,
		prevArrow: '<button class="slick-arrow slick-prev slick-green"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>',
		nextArrow: '<button class="slick-arrow slick-next slick-green"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
		autoPlay: false,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1
	});



	$('.usage-links').on('click', 'div:not(.usage-link.active)', function() {
	    $(this).addClass('active')
	    .siblings().removeClass('active')
	    .closest('.usage-container')
	    .find('.usage-tab').removeClass('active')
	    .eq($(this).index()).addClass('active');
	});

	$(".presentation-button").click(function(){
		$(".block-presentation-text").show(
		function () { $(this).animate(1500); });
		$(".block-presentation").remove();
	});

	  
	$(".burger-button").click(function(){
		$('.menu-container').toggle(
			function () { $(this).animate(300); },
			function () {$(this).animate(300);

		});
	});

	$('.general-select').styler();

	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();

		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 500);
	});

	$(window).scroll(function(){
		if ( $(window).scrollTop() > 0 ) {
		$('.header').addClass('fixed');
		}
		else {
		$('.header').removeClass('fixed');
		}
	});