$(function() {
	$('#home-news-slider').slick({
	  dots: false,
	  infinite: true,
	  arrows: true,
	  prevArrow: '<button class="slick-arrow slick-prev slick-white"></button>',
	  nextArrow: '<button class="slick-arrow slick-next slick-white"></button>',
	  autoPlay: true,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});

	$('#home-articles-slider').slick({
	  dots: false,
	  infinite: true,
	  arrows: true,
	  prevArrow: '<button class="slick-arrow slick-prev slick-red"></button>',
	  nextArrow: '<button class="slick-arrow slick-next slick-red"></button>',
	  autoPlay: true,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});

	$('#cases-slider').slick({
	  dots: false,
	  infinite: true,
	  arrows: true,
	  prevArrow: '<button class="slick-arrow slick-prev slick-red"></button>',
	  nextArrow: '<button class="slick-arrow slick-next slick-red"></button>',
	  autoPlay: true,
	  speed: 300,
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});


	$(document).on('click', 'a[href^="#"]', function (event) {
	    event.preventDefault();

	    $('html, body').animate({
	        scrollTop: $($.attr(this, 'href')).offset().top
	    }, 500);
	});

	$('.burger-button').on( 'click', function() {
		$(this).toggleClass('open');
		$('.header-menu nav').toggleClass('active');
	});


});













