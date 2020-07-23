$(function() {
	$('#feedback-slider').slick({
	  dots: false,
	  infinite: true,
	  arrows: true,
	  prevArrow: '<button class="slick-arrow slick-prev slick-grey"></button>',
	  nextArrow: '<button class="slick-arrow slick-next slick-grey"></button>',
	  autoPlay: true,
	  speed: 300,
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});

	$('#videos-slider').slick({
	  dots: false,
	  infinite: true,
	  arrows: true,
	  prevArrow: '<button class="slick-arrow slick-prev slick-round"></button>',
	  nextArrow: '<button class="slick-arrow slick-next slick-round"></button>',
	  autoPlay: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1
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

	$('.burger-button').on( 'click', function() {
		$(this).toggleClass('open');
		$('.header-menu nav').toggleClass('active');
	});


	$(".biography-button").click(function(){
      $(".block-biography-text").toggle(
      	function () { $(this).animate(300); },
        function () {$(this).animate(300);
               
      });
      $('.biography-button-title').text($('.biography-button-title').text() == 'открыть биографию' ? 'свернуть биографию' : 'открыть биографию');
    });


});













