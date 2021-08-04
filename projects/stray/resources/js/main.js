$(function () {
    $(".burger, .mobile-menu-close").on("click", function () {
        $(".dropdown-content").toggleClass("open");
    });

    $(window).on("scroll", function () {
        let header = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll > 0) header.addClass("fixed");
        else header.removeClass("fixed");
    });

    if ($(window).width() > 1024) {
        var scene = document.getElementById("scene");
        var parallaxInstance = new Parallax(scene, {
            relativeInput: true,
        });

        parallaxInstance.friction(0.2, 0.2);
    }

    $(".header .menu-link").on("click", function () {
        $(".dropdown-content").removeClass("open");
    });

    let wow = new WOW({
        boxClass: "wow",
        animateClass: "animate__animated",
        offset: 0,
        mobile: true,
        live: true,
        callback: function (box) {},
        scrollContainer: null,
    });
    wow.init();

    $(document).on("click", 'a[href^="#"]', function (event) {
        event.preventDefault();

        $("html, body").animate(
            {
                scrollTop: $($.attr(this, "href")).offset().top,
            },
            500
        );
    });

    const numberList = document.querySelector(".token-stats-list");

    const isInViewport = function (elem) {
        var distance = elem.getBoundingClientRect();
        return (
            distance.top >= 0 &&
            distance.left >= 0 &&
            distance.bottom <=
                (window.innerHeight || document.documentElement.clientHeight) &&
            distance.right <=
                (window.innerWidth || document.documentElement.clientWidth)
        );
    };

    const $counters = $(".token-param-value span");

    const numberWithSpaces = function (x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    };

    const counterScrollHandler = function () {
        if (isInViewport(numberList)) {
            window.removeEventListener("scroll", counterScrollHandler);

            $counters.each(function () {
                const innerTextVal = numberWithSpaces($(this).text());

                $(this)
                    .prop("Counter", 0)
                    .animate(
                        {
                            Counter: $(this).text(),
                        },
                        {
                            duration: 1000,
                            easing: "swing",
                            step: function (now) {
                                $(this).text(Math.ceil(now));
                            },
                            complete: function () {
                                $(this).text(innerTextVal);
                            },
                        }
                    );
            });
        }
    };

    window.addEventListener("scroll", counterScrollHandler);
});
