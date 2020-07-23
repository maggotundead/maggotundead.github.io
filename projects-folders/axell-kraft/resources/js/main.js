'use strict';

$(document).ready(function() {


    $('.tabs-content').on('click', '.tab-link:not(.active)', function() {
        $(this).addClass('active').siblings().removeClass('active')
        .closest('.tabs-content').find('.tab').removeClass('active').eq($(this).index()).addClass('active');
    })

    $('.menu-burger').click(function() {
        $('body').toggleClass('menu-open');
        $('.header').toggleClass('open');
    });
    $('.current-lang').click(function() {
        $('.dropdown-lang').toggle(200);
    });

    $(document).mouseup(function(event){
        if (  $('.dropdown-lang').is(':visible') ) {
            if (! $('.lang').is(event.target) && $('.lang').has(event.target).length === 0)
            {
                $('.dropdown-lang').hide(200);
            };
        };
    });

});
