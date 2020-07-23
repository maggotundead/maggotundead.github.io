jQuery(function($){

  $('input[placeholder], textarea[placeholder]').placeholder();

  // add-open-class
  $('.menu-icon').click(function(){
   if($(this).parent().is('.menu-open')){
     $(this).parent().removeClass('menu-open');
     $('body').removeClass('menu-open-wrapper-page');
   }else{
     $(this).parent().addClass('menu-open');
     $('body').addClass('menu-open-wrapper-page');
   }
  });
  $('.general-select').styler();

});//end ready

//Plugin placeholder
(function(b,f,i){function l(){b(this).find(c).each(j)}function m(a){for(var a=a.attributes,b={},c=/^jQuery\d+/,e=0;e<a.length;e++)if(a[e].specified&&!c.test(a[e].name))b[a[e].name]=a[e].value;return b}function j(){var a=b(this),d;a.is(":password")||(a.data("password")?(d=a.next().show().focus(),b("label[for="+a.attr("id")+"]").attr("for",d.attr("id")),a.remove()):a.realVal()==a.attr("placeholder")&&(a.val(""),a.removeClass("placeholder")))}function k(){var a=b(this),d,c;placeholder=a.attr("placeholder");
b.trim(a.val()).length>0||(a.is(":password")?(c=a.attr("id")+"-clone",d=b("<input/>").attr(b.extend(m(this),{type:"text",value:placeholder,"data-password":1,id:c})).addClass("placeholder"),a.before(d).hide(),b("label[for="+a.attr("id")+"]").attr("for",c)):(a.val(placeholder),a.addClass("placeholder")))}var g="placeholder"in f.createElement("input"),h="placeholder"in f.createElement("textarea"),c=":input[placeholder]";b.placeholder={input:g,textarea:h};!i&&g&&h?b.fn.placeholder=function(){}:(!i&&g&&
!h&&(c="textarea[placeholder]"),b.fn.realVal=b.fn.val,b.fn.val=function(){var a=b(this),d;if(arguments.length>0)return a.realVal.apply(this,arguments);d=a.realVal();a=a.attr("placeholder");return d==a?"":d},b.fn.placeholder=function(){this.filter(c).each(k);return this},b(function(a){var b=a(f);b.on("submit","form",l);b.on("focus",c,j);b.on("blur",c,k);a(c).placeholder()}))})(jQuery,document,window.debug);




$(document).ready(function() {

  // ползунок площадь квартиры
  var $square_slider = $("#property-square"),
      $square_value = $(".property-square-value");
  var square_value_reload = function (data) {
        $square_value.val(data.from);
      };
  $square_slider.ionRangeSlider({
    min: 1,
    max: 1000,
    step: 1,
    onStart: square_value_reload,
    onChange: square_value_reload,
    onFinish: square_value_reload,
    onUpdate: square_value_reload
  });
  // end
  // ползунок комнат в квартире
  var $rooms_slider = $("#property-rooms"),
      $rooms_value = $(".property-rooms-value");
  var rooms_value_reload = function (data) {
        $rooms_value.val(data.from);
      };
  $rooms_slider.ionRangeSlider({
    min: 1,
    max: 20,
    step: 1,
    onStart: rooms_value_reload,
    onChange: rooms_value_reload,
    onFinish: rooms_value_reload,
    onUpdate: rooms_value_reload
  });
  // end

  // Слайдер проектов
  // $('#project-photos-slider').slick({
  //   arrows: true,
  //   prevArrow: '<button class="slick-prev slick-arrow"><i class="sprite sprite-slider-arrow-left-white"></i></button>',
  //   nextArrow: '<button class="slick-next slick-arrow"><i class="sprite sprite-slider-arrow-left-white"></i></button>',
  //   slidesToShow: 1,
  //   // asNavFor: '#project-info-slider, #project-thumbnails-slider'
  // });
  $(".project-photos-container").slick({
    dots: true,
    prevArrow: '<button class="slick-prev slick-arrow"><i class="sprite sprite-slider-arrow-left-white"></i></button>',
    nextArrow: '<button class="slick-next slick-arrow"><i class="sprite sprite-slider-arrow-left-white"></i></button>',
    customPaging : function(slider, i) {
      var thumb = $(slider.$slides[i]).data('thumb');
      return '<a class="project-thumbnail"><img src="'+thumb+'"></a>';
    }
  });
  $('#projects-slider').slick({
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1

    // asNavFor: '#project-info-slider, #project-thumbnails-slider'
  });




  // $('#project-info-slider').slick({
  //   arrows: false,
  //   slidesToShow: 1,
  //   asNavFor: '#project-thumbnails-slider'
  // });
  $('#project-thumbnails-slider').slick({
    dots: false,
    arrows: false,
    customPaging : function(slider, i) {
    var thumb = $(slider.$slides[i]).data();
    return '<a>1</a>';
    },
    vertical: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    verticalSwiping: true,
    asNavFor: '#project-photos-slider',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          vertical: false,
          swiping: true,
          verticalSwiping: false
        }
      }
    ]
  });
  // Конец слайдера проектов 

  // Как будет проходить ремонт
  $('#project-steps-slider').slick({
    arrows: false,
    dots: true,
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  // Как будет проходить ремонт - конец

  // Слайдер отзывов 
  $('#reviews-slider').slick({
    arrows: true,
    prevArrow: '<button class="slick-prev slick-arrow"><i class="sprite sprite-slider-arrow-right-black"></i></button>',
    nextArrow: '<button class="slick-next slick-arrow"><i class="sprite sprite-slider-arrow-right-black"></i></button>',
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '#reviews-slider-messages', 
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          slidesToShow: 1
        }
      }
    ]
  });
  $('#reviews-slider-messages').slick({
    arrows: false,
    centerMode: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '#reviews-slider', 
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          slidesToShow: 1
        }
      }
    ]
  });
  // Конец слайдера отзывов

  // фиксированнное меню
  $(window).bind('scroll', function () {
    if ($(window).scrollTop() > 1) {
        $('.header').addClass('fixed').fadeIn();
    } else {
        $('.header').removeClass('fixed');
    }
  });

  // плавная прокрутка к блокам
  $("#fixed-menu-links").on("click","a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 750);
  });
  $("#fixed-mobile-links").on("click","a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top,
      header_height = $('.mobile-header').height();
      ;
    $('body,html').animate({scrollTop: top }, 750);
  });

  // плавная прокрутка к началу страницы
  $("#top-scroller").hide();
  $(window).bind('scroll', function () {
    if ($(window).scrollTop() > 400) {
        $("#top-scroller").fadeIn();
    } else {
        $("#top-scroller").fadeOut();
    }
  });
  $("#top-scroller").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });
  $(".header .header-logo a").click( function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

// после обработки формы отобразить окно
// $("#success-order-fixed").hide();
// $("#success-subscribe").hide();

// $("#form-subscribe").submit(function(event){
     
// // id присвоить форме
//     $.ajax({
//         type: "POST",
//         url: "form-subscribe.php",
//         data: $('#form-subscribe').serialize(),
//         success: function(data) {
//             $("body").addClass("modal-open");
//             $('#success-subscribe').modal();
//             $("#success-subscribe").delay(1000).fadeIn();
//             $("#success-subscribe").delay(2000).fadeOut();
//             $(".modal-backdrop.in").hide(); // не трогать
//             $(".modal-backdrop.fade").hide(); // не трогать
//             $("body").removeClass("modal-open"); // очистка остаточных классов после модальной формы
//         }
//     });
//     event.preventDefault();   
// });

// Обработчики форм
  var subscribe_form = $('#form-subscribe');
  var homescreen_form = $('#order-form-homescreen');
  var cta_form = $('#order-form-cta');
  var modal_form = $('#request-modal-form');

  subscribe_form.submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: subscribe_form.attr('method'),
      url: subscribe_form.attr('action'),
      data: subscribe_form.serialize(),
      success: function (data) {
        console.log('Submission was successful.');
        // console.log(data);
        $('#success-subscribe-modal').modal('show');
      },
      error: function (data) {
        console.log('An error occurred.');
        // console.log(data);
      },
    });
  });

  homescreen_form.submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: homescreen_form.attr('method'),
      url: homescreen_form.attr('action'),
      data: homescreen_form.serialize(),
      success: function (data) {
        console.log('Submission was successful.');
        // console.log(data);
        $('#success-order-modal').modal('show');
      },
      error: function (data) {
        console.log('An error occurred.');
        // console.log(data);
      },
    });
  });

  cta_form.submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: cta_form.attr('method'),
      url: cta_form.attr('action'),
      data: cta_form.serialize(),
      success: function (data) {
        console.log('Submission was successful.');
        // console.log(data);
        $('#success-order-modal').modal('show');
      },
      error: function (data) {
        console.log('An error occurred.');
        // console.log(data);
      },
    });
  });

  modal_form.submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: modal_form.attr('method'),
      url: modal_form.attr('action'),
      data: modal_form.serialize(),
      success: function (data) {
        console.log('Submission was successful.');
        // console.log(data);
        $('#request-order-modal').modal('hide');
        $('#success-order-modal').modal('show');
      },
      error: function (data) {
        console.log('An error occurred.');
        // console.log(data);
      },
    });
  });


});



