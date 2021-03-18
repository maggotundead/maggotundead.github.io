$(document).ready(function () {
    $(".burger, .mobile-menu-close").on("click", function () {
        $(".mobile-menu").toggleClass("open");
    });

    $(".mobile-menu a").on("click", function () {
        $(".mobile-menu").removeClass("open");
    });

    $(".lang").on("click", function (event) {
        $(this).toggleClass("open");
        event.stopPropagation();

        $(".lang-dropdown").on("click", function (event) {
            event.stopPropagation();
        });

        $(document).on("click", function () {
            $(".lang").removeClass("open");
        });
    });

    $(window).on("scroll", function () {
        const header = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 20) header.addClass("sticky");
        else header.removeClass("sticky");
    });

    $(".advantages-slider").slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,
        focusOnSelect: true,
    });

    $("#history-dates").slick({
        dots: false,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,
        focusOnSelect: true,
        asNavFor: "#history-slides",
    });

    $("#history-slides").slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,
        focusOnSelect: true,
        asNavFor: "#history-dates",
        responsive: [
            {
                breakpoint: 860,
                settings: {
                    draggable: false,
                    accessibility: false,
                    swiping: false,
                    swipe: false,
                    swipeToSlide: false,
                    touchMove: false,
                    focusOnSelect: false,
                },
            },
        ],
    });

    $(".mobile-gallery").slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,
        focusOnSelect: true,
        draggable: true,
    });

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
            });
        });
    });
});
