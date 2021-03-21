$(document).ready(function () {
    $(".burger").on("click", function () {
        $(this).toggleClass("open");
        $(".header .menu").toggleClass("open");
    });

    if ($(window).width() < 1024) {
        $(".header .menu a").on("click", function () {
            $(this).closest(".header").find(".burger").removeClass("open");
            $(this).closest(".menu").removeClass("open");
        });
    }

    $(window).on("scroll", function () {
        const header = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 20) header.addClass("sticky");
        else header.removeClass("sticky");
    });

    if ($(window).width() < 1024) {
        $("#slider-projects-touch").slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            variableWidth: true,
            focusOnSelect: true,
        });
    }

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

    const typed = new Typed("#typed", {
        stringsElement: "#typed-strings",
        // loop: true,
        loop: false,
        typeSpeed: 80,
        backSpeed: 50,
        startDelay: 1000,
        backDelay: 1500,
    });

    const wow = new WOW({
        boxClass: "wow",
        animateClass: "animate__animated",
        offset: 0,
        mobile: true,
        live: true,
        callback: function (box) {},
        scrollContainer: null,
    });
    wow.init();
});
