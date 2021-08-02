$(function () {

    $('.burger, .mobile-menu-close').on('click', function() {
        $('.dropdown-content').toggleClass('open');
    });

    $(window).on('scroll', function(){
        let header = $('.header'),
            scroll = $(window).scrollTop();

        if (scroll > 0) header.addClass('fixed');
        else header.removeClass('fixed');

    });

    if ($(window).width() > 1024) {
        let parallaxBox = document.getElementById ( 'parallax-box' ),
        c1left = document.getElementById ( 'dog' ).offsetLeft,
        c1top = document.getElementById ( 'dog' ).offsetTop,
        c2left = document.getElementById ( 'coin-group-1' ).offsetLeft,
        c2top = document.getElementById ( 'coin-group-1' ).offsetTop,
        c3left = document.getElementById ( 'coin-group-2' ).offsetLeft,
        c3top = document.getElementById ( 'coin-group-2' ).offsetTop;

        parallaxBox.onmousemove = function ( event ) {
            event = event || window.event;
            let x = event.clientX - parallaxBox.offsetLeft,
            y = event.clientY - parallaxBox.offsetTop;

            // mouseParallax ( 'dog', c1left, c1top, x, y, 5 );
            // mouseParallax ( 'coin-group-1', c2left, c2top, x, y, 15 );
            // mouseParallax ( 'coin-group-2', c3left, c3top, x, y, 30 );
        }


        function mouseParallax ( id, left, top, mouseX, mouseY, speed ) {
            var obj = document.getElementById ( id );
            var parentObj = obj.parentNode,
            containerWidth = parseInt( parentObj.offsetWidth ),
            containerHeight = parseInt( parentObj.offsetHeight );
            obj.style.left = left - ( ( ( mouseX - ( parseInt( obj.offsetWidth ) / 2 + left ) ) / containerWidth ) * speed ) + 'px';
            obj.style.top = top - ( ( ( mouseY - ( parseInt( obj.offsetHeight ) / 2 + top ) ) / containerHeight ) * speed ) + 'px';
        }
    }

    let wow = new WOW({
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

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });


    const numberList = document.querySelector('.token-stats-list');

    const isInViewport = function (elem) {
        var distance = elem.getBoundingClientRect();
        return (
            distance.top >= 0 &&
            distance.left >= 0 &&
            distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            distance.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    };

    const counters = document.querySelectorAll('.token-param-value span');
    const speed = 200;

    const numberWithSpaces = function(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
      }


    const counterScrollHandler = function () {
        if (isInViewport(numberList)) {
            counters.forEach( counter => {
                const animate = () => {
                    const value = +counter.getAttribute('number');
                    const data = +counter.innerText;
        
                    const time = value / speed;
                    if(data < value) {
                        counter.innerText = Math.ceil(data + time);
                        setTimeout(animate, 1);
                    } else {
                        counter.innerText = numberWithSpaces(value);
                    }
        
                }
                animate();

                window.removeEventListener('scroll', counterScrollHandler);
            })
        }
    };

    window.addEventListener('scroll', counterScrollHandler);

});