$(function () {
    $(".modal-overlay, .modal-close").on("click", function () {
        $(".modal").removeClass("open");
    });

    let header = $(".header");
    if ($(window).scrollTop() > 0) header.addClass("fixed");

    $(window).on("scroll", function () {
        let scroll = $(window).scrollTop();

        if (scroll > 0) header.addClass("fixed");
        else header.removeClass("fixed");
    });


    $(document).on("click", 'a[href^="#"]', function (event) {
        event.preventDefault();

        $("html, body").animate(
            {
                scrollTop: $($.attr(this, "href")).offset().top,
            },
            500
        );
    });

});
