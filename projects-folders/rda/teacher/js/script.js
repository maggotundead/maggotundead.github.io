/**
 * Created by Богдан on 11.10.2016.
 */
$(document).ready(function(){

    //styling default scroll bar in select form
    $('.scrollbar-outer').scrollbar(); //

    //button back to the top site
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    //settings carousel image
    $('.slide-best-cup').slick({
        dots: false,
        infinite: true,
        speed: 300,
        // slidesToShow: 5, когда много номинаций
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false
                }
            }
        ]
    });



    $('.slide-how-was').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
                        responsive: [
            {
                breakpoint: 768,
                settings: {
                    dots: false
                }
            }
        ]
    });




    $('.slider-news-feed').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
                responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false
                }
            }
        ]
    });


    $('.company-xs').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: true
    });

    $('.partners-xs').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: true
    });

    $('.support-xs').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true
    });





    //styling default select
    (function($) {
        $(function() {
            $('.select-form').styler();
        });
    })(jQuery);

    //the behavior of pop-up windows
    $(document).mouseup(function (e){
        var div = $("#formLogin, #formRestore, #formSelect, #formRegistration, #formSelectCity, ");
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.hide();
        }
    });

    $(".close-form").click(function(){
        $("#formSelect, #topMenu, #formSelectCity, #ChooseCity-xs, #request-sucssess").hide();
    });

    $(".close-form-select").click(function(){
        $("#formSelect").hide();
    });

    $("#openFormSelect").click(function(){
        $("#formSelect").show();
    });

    $("#openTopMenu").click(function(){
        $("#topMenu").show();
    });

    $("#openCountryForm").click(function(){
        $("#topMenu").hide();
    });

    $("#formSelectCountry a").click(function(){
        $("#formSelectCity").show();
    });

    $("#openChooseCity").click(function(){
        $("#topMenu").hide();
    });

    $("#openChooseCity").click(function(){
        $("#ChooseCity-xs").show();
    });

    $("#openFormSelect").click(function(){
        $("#formSelect").show();
    });

});



// Скрыть призеров в номинациях
$(document).ready(function() {

      $('.hide-winner-button-1').show();

      $('.hidden-winners-1').hide();
      var flag = 0;
      $('.hide-winner-button-1').click(function(event) {
      event.preventDefault();
      if (flag == 0) {
        $(this).text("Скрыть всех");
        $('.hidden-winners-1').fadeIn();
        flag = 1;
      } else {
        $(this).text("Показать всех");
        $('.hidden-winners-1').fadeOut();
        flag = 0;
      }
    });
});
$(document).ready(function() {

      $('.hide-winner-button-2').show();

      $('.hidden-winners-2').hide();
      var flag = 0;
      $('.hide-winner-button-2').click(function(event) {
      event.preventDefault();
      if (flag == 0) {
        $(this).text("Скрыть всех");
        $('.hidden-winners-2').fadeIn();
        flag = 1;
      } else {
        $(this).text("Показать всех");
        $('.hidden-winners-2').fadeOut();
        flag = 0;
      }
    });
});
$(document).ready(function() {

      $('.hide-winner-button-3').show();

      $('.hidden-winners-3').hide();
      var flag = 0;
      $('.hide-winner-button-3').click(function(event) {
      event.preventDefault();
      if (flag == 0) {
        $(this).text("Скрыть всех");
        $('.hidden-winners-3').fadeIn();
        flag = 1;
      } else {
        $(this).text("Показать всех");
        $('.hidden-winners-3').fadeOut();
        flag = 0;
      }
    });
});
$(document).ready(function() {

      $('.hide-winner-button-4').show();

      $('.hidden-winners-4').hide();
      var flag = 0;
      $('.hide-winner-button-4').click(function(event) {
      event.preventDefault();
      if (flag == 0) {
        $(this).text("Скрыть всех");
        $('.hidden-winners-4').fadeIn();
        flag = 1;
      } else {
        $(this).text("Показать всех");
        $('.hidden-winners-4').fadeOut();
        flag = 0;
      }
    });
});

// Скрыть жюри
$(window).resize(function() {
  if(document.documentElement.clientWidth < 768) {
    $(document).ready(function() {
          $('#open-close').fadeIn();
          $('#hidden-comission').fadeOut();
          var flag = 0;
          $('#open-close').click(function(event) {
          event.preventDefault();
          if (flag == 0) {
            $(this).text("Скрыть");
            $('#hidden-comission').fadeIn();
            flag = 1;
          } else {
            $(this).text("Показать всех");
            $('#hidden-comission').fadeOut();
            flag = 0;
          }
        });
    });
  }
});

// Обработка полей формы 
$("#requestModal").submit(function(e){
    var form_data = $('#bobform').serialize();
    $.ajax({
        type: "POST",
        url: "send-form.php",
        data: form_data,
        success: function(data) {            
            $("#requestModal").hide();
            $(".modal-backdrop.in").hide();
            $(".modal-backdrop.fade").hide();
            $("#request-sucssess").fadeIn();
            $("#request-sucssess").delay(2000).fadeOut();
            $("body").removeClass("modal-open");
        }
    });
    e.preventDefault();    
});


// Instagram
// $('.instagram-hash').instaShow({
//     userId: ####, 
//     accessToken: ####,
//     count: ####, // total number of images
//     itemCount: ####, // number of images show on default styles
//     breakPointOne: { 
//         width: ####, // width of first breakpoint
//         itemCount: ####, // number of images to show
//     },
//     breakPointTwo: {
//         width: ####, // width of second breakpoint
//         itemCount: ####> // number of images to show
//     }
// });


// Timer 
jQuery(document).ready(function() {
    jQuery(".eTimer").eTimer({
        etType: 0, 
        etDate: "29.01.2017.0.0", 
        // etTitleText: "До окончания акции осталось:", 
        etTitleSize: 20, 
        etShowSign: 1,
        etSep: "", 
        etFontFamily: "RobotoLight", 
        etTextColor: "#000", 
        etPaddingTB: 15, etPaddingLR: 15, 
        etBackground: "transparent", 
        etBorderSize: 0, 
        etBorderRadius: 2, 
        etBorderColor: "white", 
        // etShadow: " 0px 0px 10px 0px #333333", 
        etLastUnit: 4, etNumberFontFamily: "RobotoLight", 
        etNumberSize: 25, etNumberColor: "black", 
        etNumberPaddingTB: 13, 
        etNumberPaddingLR: 10, 
        etNumberBackground: "#f1b90e", 
        etNumberBorderSize: 0, 
        etNumberBorderRadius: 19, 
        etNumberBorderColor: "white", 
        // etNumberShadow: "inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
    });
});

// Плавный скролл к якорю 
$(document).ready(function(){
    $("#topMenu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});
$(document).ready(function(){
    $("#menu-768").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});



    $('.danceteams-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.photoalbum-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
                responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false
                }
            }
        ]
    });

    $('.videoalbum-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
                responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false
                }
            }
        ]
    });