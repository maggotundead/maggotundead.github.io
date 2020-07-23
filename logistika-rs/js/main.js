$(document).ready(function() {
   $("a.anchor").click(function() {
      $("html, body").animate({
         scrollTop: $($(this).attr("href")).offset().top + "px"
      }, {
         duration: 800,
         easing: "swing"
      });
      return false;
   });
});

$(document).ready(function(){
	$('.ark-slider').bxSlider({
	mode: 'fade',           // тип перехода между слайдами может быть 'horizontal', 'vertical', 'fade'
	captions: true,         // отображение title
	easing: 'easeInOutQuad',// анимация слайда
	controls: false,         // отображение стрелки - вперед, назад
	startSlide: 0,          // Показ начнется с заданного слайда
	infiniteLoop: true,     // показывать первый слайд за последним 
	pager: true,            // показ номера страницы
	auto: true,             // сделать автоматический переход
	autoControls: false,     // показывает кнопку плей и стоп
	video: true,            // включить видео
	pause: 4000,            // время между сменой слайдов в м-сек
	speed: 500,             // длительность перехода слайда в м-сек
	useCSS: false           // CSS переходы
	});
});

$(document).ready(function() {
	$("#modal-popup-first").fancybox({
		'titlePosition'	: 'inside',
		'transitionIn'	: 'none',
		'transitionOut'	: 'none',
		'centerOnScroll': 'true'
	});
	$("#modal-popup-second").fancybox({
		'titlePosition'	: 'inside',
		'transitionIn'	: 'none',
		'transitionOut'	: 'none',
		'centerOnScroll': 'true'
	});
	$("#modal-popup-third").fancybox({
		'titlePosition'	: 'inside',
		'transitionIn'	: 'none',
		'transitionOut'	: 'none',
		'centerOnScroll': 'true'
	});
	$("#modal-popup-fourth").fancybox({
		'titlePosition'	: 'inside',
		'transitionIn'	: 'none',
		'transitionOut'	: 'none',
		'centerOnScroll': 'true'
	});
});

// document.onmousewheel=document.onwheel=function(){ 
// 	return false;
// };
// document.addEventListener("MozMousePixelScroll",function(){return false},false);
// document.onkeydown=function(e) {
// 	if (e.keyCode>=33&&e.keyCode<=40) return false;
// }