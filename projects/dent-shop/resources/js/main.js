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

    $("#logo-slider").slick({
        autoplay: true,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,
    });

    $("#actions-slider").slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
    });

    $("#product-slider").slick({
        dots: true,
        arrows: true,
        infinite: true,
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

    $(".product-item-info-toggler").on("click", function () {
        $(this).closest(".product-item").toggleClass("open");
    });

    $(".open-read-more").on("click", function () {
        $(this).closest(".text-container").addClass("open");
    });

    $(function () {
        let $range = $(".js-range-slider"),
            $from = $(".js-from"),
            $to = $(".js-to"),
            range,
            min = 0,
            max = $to.data("max"),
            from,
            to;

        let updateValues = function () {
            $from.prop("value", from);
            $to.prop("value", to);
        };

        $range.ionRangeSlider({
            type: "double",
            min: min,
            max: max,
            prettify_enabled: false,
            onChange: function (data) {
                from = data.from;
                to = data.to;

                updateValues();
            },
        });

        range = $range.data("ionRangeSlider");

        let updateRange = function () {
            range.update({
                from: from,
                to: to,
            });
        };

        $from.on("change", function () {
            from = +$(this).prop("value");
            if (from < min) {
                from = min;
            }
            if (from > to) {
                from = to;
            }

            updateValues();
            updateRange();
        });

        $to.on("change", function () {
            to = +$(this).prop("value");
            if (to > max) {
                to = max;
            }
            if (to < from) {
                to = from;
            }

            updateValues();
            updateRange();
        });
    });

    $(".description-tabs-selectors").on(
        "click",
        ".description-tab-selector",
        function () {
            $(this).addClass("active").siblings().removeClass("active");
            $(this)
                .closest(".description-tabs-wrapper")
                .find(".description-tab")
                .eq($(this).index())
                .addClass("active")
                .siblings()
                .removeClass("active");
        }
    );

    $(function () {
        $(".compare-item").on("click", ".controls-toggler", function (event) {
            $(".compare-item-controls").removeClass("open");
            $(this).closest(".compare-item-controls").addClass("open");
            event.stopPropagation();
        });
        $("body").on("click", function () {
            $(".compare-item-controls").removeClass("open");
        });
    });

    //quantity
    $(function () {
        $('<div class="quantity-button quantity-down">-</div>').insertBefore(
            ".quantity input"
        );
        $('<div class="quantity-button quantity-up">+</div>').insertAfter(
            ".quantity input"
        );
        $(".quantity").each(function () {
            let spinner = $(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find(".quantity-up"),
                btnDown = spinner.find(".quantity-down"),
                min = input.attr("min"),
                max = input.attr("max");

            btnUp.on("click", function () {
                let oldValue = parseFloat(input.val());
                let newVal;
                if (oldValue >= max) {
                    newVal = oldValue;
                } else {
                    newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.on("click", function () {
                let oldValue = parseFloat(input.val());
                let newVal;
                if (oldValue <= min) {
                    newVal = oldValue;
                } else {
                    newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });
        });
    });

    $(".checkout-cart-promo .promo-title").on("click", function () {
        $(this).siblings(".promo-form").addClass("open");
    });

    $(function () {
        $(".params-group-edit, .params-group-cancel").on("click", function () {
            $(this).closest(".account-params-group").toggleClass("open");
        });
        $(".input-value-clear").on("click", function () {
            $(this).siblings(".input-label").find("input").val("");
        });
        $(".account-change-password").on("click", function () {
            $(".modal-password").addClass("open");
        });
    });

    $(".account-change-password").on("click", function () {
        $(".modal-password").addClass("open");
    });

    $(".change-password-view").on("click", function () {
        $(this).addClass("open");
        $(this).siblings(".input").attr("type", "text");
    });

    $(function () {
        $(".header .cart-link").on("click", function () {
            $(".modal-cart").addClass("open");
        });

        $(".modal-close, .modal-overlay").on("click", function () {
            $(this).closest(".modal").removeClass("open");
        });
    });
});
