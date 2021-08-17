$(function () {
    $('.burger').on('click', function() {
        $('.menu').toggleClass('open');
    });

    $('.work-item').on('click', 'button', function() {
        $(this).closest('.work-item').toggleClass('open');
    });
});
