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

    $("#home-slider").slick({
        autoplay: false,
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
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
});
