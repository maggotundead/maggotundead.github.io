$(document).ready( function() {

	var blog_slider = $('#blog-slider');
	var article_slider = $('#article-slider');
	var counter_value = $('.slides-counter');
//--------------------------------------------------
	blog_slider.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
		var i = (currentSlide ? currentSlide : 0) + 1;
		counter_value.text(i + '/' + slick.slideCount);
	});
	blog_slider.slick({
		slidesToShow: 1,
		sliderToScroll: 1,
		dots: false,
		infinite: true,
		adaptiveHeight: true,
		prevArrow: '<button class="slide-arrow slide-prev"></button>',
		nextArrow: '<button class="slide-arrow slide-next"></button>'
	});
//--------------------------------------------------
	article_slider.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
		var i = (currentSlide ? currentSlide : 0) + 1;
		counter_value.text(i + '/' + slick.slideCount);
	});
	article_slider.slick({
		slidesToShow: 1,
		sliderToScroll: 1,
		dots: false,
		infinite: false,
		adaptiveHeight: false,
		prevArrow: '<button class="slide-arrow slide-prev"></button>',
		nextArrow: '<button class="slide-arrow slide-next"></button>'
	});
//--------------------------------------------------
	$('.open-thread-button').click( function() {
		$(this).siblings('.answer-thread').removeClass('hidden');
		$(this).remove();
	});
});