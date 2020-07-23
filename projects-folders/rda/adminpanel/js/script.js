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
    $('.slider').slick({
        dots: true,
        infinite: true,
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
                breakpoint: 1025,
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
                    arrows: false
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });

    //styling default select
    (function($) {
        $(function() {
            $('.select-form').styler();
        });
    })(jQuery);

    tinymce .init({
        selector: '#editorEventDescription',
        language: 'ru',
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: '//www.tinymce.com/css/codepen.min.css'
    });

    //the behavior of pop-up windows
    $(document).mouseup(function (e){
        var div = $("#formLogin, #formRestore, #formSelect, #formRegistration, #formSelectCountry, #formSelectCity");
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.hide();
        }
    });

    $(".close-form").click(function(){
        $("#formSelect, #formLogin, #formRestore, #formRegistration, #topMenu, #formSelectCountry, #formSelectCity").hide();
    });

    $(".close-form-select").click(function(){
        $("#formSelect").hide();
    });

    $("#submitRegistr").click(function(){
        $("#formLogin").hide();
    });

    $("#openRestoreForm").click(function(){
        $("#formLogin").hide();
    });

    $("#forgotPassword").click(function(){
        $("#formRestore").hide();
    });

    $("#openLoginForm, #forgotPassword").click(function(){
        $("#formLogin").show();
    });

    $("#openRestoreForm").click(function(){
        $("#formRestore").show();
    });

    $("#openRegistrationForm, #submitRegistr").click(function(){
        $("#formRegistration").show();
    });

    $("#openFormSelect").click(function(){
        $("#formSelect").show();
    });

    $("#openTopMenu").click(function(){
        $("#topMenu").show();
    });

    $("#openCountryForm").click(function(){
        $("#formSelectCountry").show();
    });

    $("#openCountryForm").click(function(){
        $("#topMenu").hide();
    });

    $("#formSelectCountry a").click(function(){
        $("#formSelectCity").show();
    });

    $("#switchSellTicket .on").click(function(){
        $("#sellTicket").show();
    });

    $("#switchSellTicket .off").click(function(){
        $("#sellTicket").hide();
    });

    $("#switchRequestEvent .on").click(function(){
        $("#registerParticipant").show();
    });

    $("#switchRequestEvent .off").click(function(){
        $("#registerParticipant").hide();
    });

    $("#formSelectCountry a").click(function(){
        $("#formSelectCountry").hide();
    });

    $(".modal-edit-user a").click(function(){
        $("#formDeleteUser").show();
    });

    $(".close-form, #formDeleteUser a").click(function(){
        $("#formDeleteUser").hide();
    });


    $('#dob, #selectEventDate, #selectDateFrom, #selectDateTo, #selectRegisterDateFrom, #selectRegisterDateTo, #selectModerationDateFrom, #selectModerationDateTo').datetimepicker(
        {pickTime: false, language: 'ru'}
    );

    $('#selectEventTime').datetimepicker(
        {pickDate: false, language: 'ru'}
    );

});

// Модальные окна

$(document).ready(function(){
  $(".offer-edit").click(function() {
    $("#offer-edit").modal('show');
  });
});
$(document).ready(function(){
  $(".reward-points").click(function() {
    $("#points-edit").modal('show');
  });
});
$(document).ready(function(){
  $(".add-city-button").click(function() {
    $("#add-city").modal('show');
  });
});
$(document).ready(function(){
  $(".add-city-settings").click(function() {
    $("#default-settings").modal('show');
  });
});

$(document).ready(function(){
  $(".settings-tips .edit-city-item").click(function() {
    $("#edit-city").modal('show');
  });
});