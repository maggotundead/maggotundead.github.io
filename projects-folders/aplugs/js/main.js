		// Tabs in popup		
		(function($){
		 jQuery.fn.lightTabs = function(options){
		 var createTabs = function(){
		 tabs = this;
		 i = 0;
		 
		 showPage = function(i){
		 $(tabs).children("div").children("div").hide();
		 $(tabs).children("div").children("div").eq(i).show();
		 $(tabs).children("ul").children("li").removeClass("active");
		 $(tabs).children("ul").children("li").eq(i).addClass("active");
		 }
		 showPage(0);				
		 $(tabs).children("ul").children("li").each(function(index, element){
		 $(element).attr("data-page", i);
		 i++; 
		 });
		 $(tabs).children("ul").children("li").click(function(){
		 showPage(parseInt($(this).attr("data-page")));
		 });				
		 };		
		 return this.each(createTabs);
		 };	
		})(jQuery);
		$(document).ready(function(){
		 $(".tabs").lightTabs();
		});

		// Spoiltext
			$('.spoiler-body').hide();
			$('.spoiler-title').click(function(){
			$(this).toggleClass('opened').toggleClass('closed').next().slideToggle();
			if($(this).hasClass('opened')) {
				$(this).html('Скрыть текст');
			}
			else {
				$(this).html('Читать далее');
			}
		});

			// Counter
		$(function () {
			var austDay = new Date();
			austDay = new Date(austDay.getFullYear() + 1, 1 - 7, 30);
			$('#defaultCountdown').countdown({until: austDay});
			$('#year').text(austDay.getFullYear());
		});


		// Nicesscroll to anchor 
		$(document).ready(function(){
			$("#more-details").on("click","a", function (event) {
				event.preventDefault();
				var id = $(this).attr('href'),
					top = $(id).offset().top;
				$('body,html').animate({scrollTop: top}, 800);
			});
		});
		$(document).ready(function(){
			$("#more-sizes").on("click","a", function (event) {
				event.preventDefault();
				var id = $(this).attr('href'),
					top = $(id).offset().top;
				$('body,html').animate({scrollTop: top}, 800);
			});
		});
		$(document).ready(function(){
			$("#details").on("click","a", function (event) {
				event.preventDefault();
				var id = $(this).attr('href'),
					top = $(id).offset().top;
				$('body,html').animate({scrollTop: top}, 800);
			});
		});
		$(document).ready(function(){
			$("#details2").on("click","a", function (event) {
				event.preventDefault();
				var id = $(this).attr('href'),
					top = $(id).offset().top;
				$('body,html').animate({scrollTop: top}, 800);
			});
		});


		 var deviceAgent = navigator.userAgent.toLowerCase();
		 var iOS = deviceAgent.match(/(iphone|ipod|ipad)/);
		 if (iOS) {
			$('label').click(function (event) {
			 $('#' + $(event.target).attr('for')).attr('checked', true).change();
			});
		 }

	// Active radionuttons
	$('#color-container input').click(function() {
	 var elem = $('#photo-container');
	 $('.plug-photo', elem).hide();
	 $('#' + this.value, elem).show();
	});
	$('#photo-container #' + $('#color-container input:checked').attr('value')).show();
    $('#sizes-container input').click(function() {
      var elem = $('#price-container');
      $('.size-price', elem).hide();
      $('#' + this.value, elem).show();
    });
    $('#price-container #' + $('#sizes-container input:checked').attr('value')).show();



