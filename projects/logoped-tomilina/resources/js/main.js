$(document).ready( function() {
	// $.ajaxSetup({
	// 	headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
	// });
    let masonryGrid = $('#masonry');

	let masonryOptions = {
		itemSelector: '.feedback-item',
		columnWidth: '.feedback-item',
		gutter: '.masonry-gutter',
		percentPosition: true,
		resize: true
	};   
    $(window).width() > 768 && masonryGrid.masonry(masonryOptions);
    
	$(window).resize(function () {
	    if ($(window).width() < 769) {
	        masonryGrid.masonry('destroy');
	        // console.log($(window).width());
	    } else {
			masonryGrid.masonry('reloadItems');
			masonryGrid.masonry('layout');
	    }
	});

	// $('.more-items').on('click', 'button', function(e) {
	// 	e.preventDefault();

	// 	$.ajax({
	// 		url: window.location.href,
	// 		method: 'post',
	// 		data: {
	// 		},
	// 		cache: true,
	// 		dataType: 'json',
	// 		success: function(data, textStatus, jqXHR)
	// 		{
	// 			if (typeof data.html !== 'undefined' && data.html != '') {

	// 				if ($(window).innerWidth() < 641) {
	// 			        masonryGrid.append(data.html);
	// 			    }
	// 			    else {
	// 			        masonryGrid.append(data.html);

	// 					setTimeout(function() {
	// 						masonryGrid.masonry('reloadItems');
	// 						masonryGrid.masonry('layout');
	// 					}, 500);
	// 			    };


	// 				if(data.last == true) {
	// 					$('.more-items').hide();
	// 				};

	// 			}
	// 			else {
	// 				$('.more-items').hide();
	// 			};
	// 		},
	// 		error: function(jqXHR, textStatus, errorThrown)
	// 		{
	// 			console.log('ERRORS: ' + textStatus);
	// 		}
	// 	});

	// });

    //
    $('.homescreen-slider').on('init', function(e, slick) {
        let $firstAnimatingElements = $('.homescreen-slider .slide:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);    
    });
    $('.homescreen-slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
        let $animatingElements = $('.homescreen-slider .slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        console.log(currentSlide);
        console.log(nextSlide);
        doAnimations($animatingElements);
    });
    $('.homescreen-slider').slick({
        dots: false,
        // infinite: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    function doAnimations(elements) {
        let animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            let $this = $(this);
            let $animationDelay = $this.data('delay');
            let $animationType = `animate__animated animate__${$this.data('animation')}`;
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    };

    $('.events-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 541,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.patents-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 861,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.product-thumbs').slick({
        dots: false,
        arrows: false,
        vertical: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        verticalSwiping: true,
        draggable: true,
        infinite: true,
        focusOnSelect: true,
        asNavFor: '.product-photos'
    });
    $('.product-photos').slick({
        dots: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        infinite: true,
        asNavFor: '.product-thumbs'
    });

    var wow = new WOW({
        boxClass:     'wow',
        animateClass: 'animate__animated',
        offset:       0,
        mobile:       true,
        live:         true,
        callback:     function(box) {
        },
        scrollContainer: null
    });
    wow.init();





    $('.burger').click(function() {
        $(this).toggleClass('open');
        $('body').toggleClass('menu-open');
        $('.mobile-menu').toggleClass('open');
    });

    $('.header-bottom .menu-toggler').click(function() {
        $(this).toggleClass('open');
        $(this).siblings('.seminars').toggleClass('open');
    });

    $('.callback-btn').click(function() {
        if ( $(this).closest('.mobile-menu').length > 0 ) {
            $('.burger').removeClass('open');
            $('body').removeClass('menu-open');
            $('.mobile-menu').removeClass('open');

            $('.modal-callback').show();
            setTimeout(function () {
                $('.modal-callback').addClass('open');
            },300);   
        }
        else {
            $('.modal-callback').show();
            setTimeout(function () {
                $('.modal-callback').addClass('open');
            },300);
        }
    });
    $('.modal-close, .modal-overlay').click(function() {
        $('.modal').removeClass('open');
        setTimeout(function () {
            $('.modal').hide();
        },300); 
    });

    $('select').styler();

    $('.video-play').click(function() {
        $('.modal-video').show();
        setTimeout(function () {
            $('.modal-video').addClass('open');
        },300); 
    });
    
});




