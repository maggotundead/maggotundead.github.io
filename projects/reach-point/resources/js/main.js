$('.reviews-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});

$('.faq-item').click(function() {
    $(this).toggleClass('open').siblings().removeClass('open');
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
});

if ($(window).width() < 769) {
    $('.header .menu-link').click(function() {
        $('.burger').removeClass('open');
        $('body').removeClass('menu-open');
    });
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

if ($('.parallax')) {
    function Parallax(options){
        options = options || {};
        this.nameSpaces = {
            wrapper: options.wrapper || '.block-homescreen',
            layers: options.layers || '.parallax-layer',
            deep: options.deep || 'data-parallax-deep'
        };
        this.init = function() {
            var self = this,
                parallaxWrappers = document.querySelectorAll(this.nameSpaces.wrapper);
            for(var i = 0; i < parallaxWrappers.length; i++){
                (function(i){
                    parallaxWrappers[i].addEventListener('mousemove', function(e){
                        var x = e.clientX,
                            y = e.clientY,
                            layers = parallaxWrappers[i].querySelectorAll(self.nameSpaces.layers);
                        for(var j = 0; j < layers.length; j++){
                (function(j){
                    var deep = layers[j].getAttribute(self.nameSpaces.deep),
                        disallow = layers[j].getAttribute('data-parallax-disallow'),
                        itemX = (disallow && disallow === 'x') ? 0 : x / deep,
                        itemY = (disallow && disallow === 'y') ? 0 : y / deep;
                        if(disallow && disallow === 'both') return;
                        layers[j].style.transform = 'translateX(' + itemX + '%) translateY(' + itemY + '%)';
                    })(j);
                        }
                    })
                })(i);
            }
        };
        this.init();
        return this;
    }

    window.addEventListener('load', function(){
        new Parallax();
    });
}

$('.cta-form').on('submit', function(e) {
    var checkbox = $('.cta-form input[type="checkbox"]');

    if( ! checkbox.is(':checked')) {
        e.preventDefault();
        
        checkbox.attr('required', true);
    }
    else {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'send.php',
            data: $('.cta-form').serialize(),
            success: function () {
                // console.log('success');
                $('.form-popup').fadeIn(300);
                $('.form-popup .success-text').show();
            },
            error: function () {
                // console.log('error');
                $('.form-popup').fadeIn(300);
                $('.form-popup .error-text').show();
            }
        });
    }
});

$('.form-popup .close').click(function() {
    $('.form-popup .text').hide();
    $('.form-popup').fadeOut(300);
});
