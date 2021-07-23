$(function () {
    $('.accordeon-item').on('click', function() {
        $(this).toggleClass('open').siblings().removeClass('open');
    });
});
