$(document).ready(function() {
    $('.mobile-news').slick({
        arrows: false,
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1
    });

    $('#file-input').change(function() {
        let filename = $(this)[0].files[0]['name'];
        $(this).parent().addClass('selected');
        $(this).siblings('.file-text').find('.file-path').text(filename);
        $(this).parent().hasClass('no-file') && $(this).parent().removeClass('no-file');
    });

    let scenarioForm = $('#scenario-form');

    scenarioForm.submit(function (e) {
        e.preventDefault();
        if ( $('#file-input').val() == '' ) {
            $('#file-input').parent().addClass('no-file');
        };

        if ( $('#file-input').val() !== '') {
            $.ajax({
                type: scenarioForm.attr('method'),
                url: scenarioForm.attr('action'),
                data: scenarioForm.serialize(),
                success: function (data) {
                    $('.submit-status .success').fadeIn().delay(3000).fadeOut();

                    $('input[type="email"]').val('');
                    $('input[type="phone"]').val('');
                    $('input[type="text"]').val('');
                    $('input[type="file"]').val('');
                    $('.file-label').removeClass('selected');
                },
                error: function (data) {
                    $('.submit-status .error').fadeIn().delay(3000).fadeOut();
                },
            });
        }
    });


    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    $('.marquee-header-right').marquee({
        duration: 300000,
        duplicated: true,
        direction: 'right',
        delayBeforeStart: 0,
        startVisible: true
    });
    $('.marquee-header-left').marquee({
        duration: 300000,
        duplicated: true,
        direction: 'left',
        delayBeforeStart: 0,
        startVisible: true
    });

    if ($(window).width() > 768 ) {
        $('.marquee-form-up').marquee({
            duration: 30000,
            duplicated: true,
            direction: 'left',
            delayBeforeStart: 0,
            startVisible: true
        });
    } else {
        $('.marquee-form-up').marquee({
            duration: 15000,
            duplicated: true,
            direction: 'left',
            delayBeforeStart: 0,
            startVisible: true
        });
    }

    $('.marquee-footer-left').marquee({
        duration: 30000,
        duplicated: true,
        direction: 'left',
        delayBeforeStart: 0,
        startVisible: true
    });
    $('.marquee-footer-right').marquee({
        duration: 30000,
        duplicated: true,
        direction: 'right',
        delayBeforeStart: 0,
        startVisible: true
    });

});