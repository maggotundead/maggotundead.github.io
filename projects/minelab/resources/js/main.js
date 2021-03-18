$(function () {
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

    // document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    //     anchor.addEventListener("click", function (e) {
    //         e.preventDefault();

    //         document.querySelector(this.getAttribute("href")).scrollIntoView({
    //             behavior: "smooth",
    //         });
    //     });
    // });
    $(document).on("click", 'a[href^="#"]', function (event) {
        event.preventDefault();

        $("html, body").animate(
            {
                scrollTop: $($.attr(this, "href")).offset().top,
            },
            500
        );
    });

    // currency
    if ($(window).width() > 980) {
        $(".curr-item").each(function () {
            const curName = $(this).attr("data-cur");
            const $curItemVal = $(this).find(".curr-item-value");

            fetch(
                `https://min-api.cryptocompare.com/data/price?fsym=${curName}&tsyms=USD&api_key=1a201035e7f857e613ee25a903a99b843ed4a1cd1a4f7195ce33fdb563c6970e`
            )
                .then((response) => response.json())
                .then((data) => {
                    $curItemVal.text("$" + data.USD);
                });
        });
    }

    $(".show-more-info").on("click", function () {
        $(this).hide();
        $(this).siblings(".about-descr").find(".hidden-text").addClass("open");
    });
});
