$(document).ready(function() {

    // Modal common events
    $(function() {
        $('.feedback-button').click(function() {
            $('.modal-feedback').addClass('open');
            $('body').addClass('modal-open');
        });

        $('.booking-button').click(function() {
            $('.modal-booking').addClass('open');
            $('body').addClass('modal-open');
        });

        $(document).on('click', '.modal-close', function() {
            $('.modal').removeClass('open');
            $('body').removeClass('modal-open');
            // form reset
            $('.feedback-selector-buttons').addClass('open');
            $('.submit-button').removeClass('feedback-negative-submit feedback-positive-submit');
            $('.feedback-selector').addClass('open');
            $('.feedback-negative-content').removeClass('open');
            $('.feedback-positive-content').removeClass('open');
            $('.feedback-content textarea').removeAttr('required');
            $('.next-step-button').removeClass('hidden');

            // reset modal when finish on close

            $('.modal-finish .next-step-button').removeClass('hidden');
            $('.modal-finish .step-block').removeClass('open');
            $('.modal-finish .block-initials').addClass('open');
            $('.modal-finish #property-type-business').attr('checked', 'checked');
            $('.modal-finish #property-type-home').removeAttr('checked');
            setTimeout(function(){
                $('.modal-finish').removeClass('modal-finish home-request business-request').addClass('business-request');
            }, 500);
        });

        $(document).on('click', '.re-schedule-button', function() {

            $('.modal-finish .next-step-button').removeClass('hidden').removeAttr('type');
            $('.modal-finish .step-block').removeClass('open');
            $('.modal-finish .block-initials').addClass('open');
            $('.modal-finish #property-type-business').attr('checked', 'checked');
            $('.modal-finish #property-type-home').removeAttr('checked');
            setTimeout(function(){
                $('.modal-finish').removeClass('modal-finish home-request business-request').addClass('business-request');
            }, 500);
        });

        $('.feedback-negative-open').click(function(event) {
            event.preventDefault();
            $('.feedback-selector').removeClass('open');
            $('.feedback-negative-content').addClass('open');
            $('.feedback-negative-content textarea').attr('required', 'required');
            $('.submit-button').addClass('feedback-negative-submit');
            $('.disabledCheckboxes').removeAttr("disabled");
        });

        $('.feedback-positive-open').click(function(event) {
            event.preventDefault();
            $('.feedback-selector').removeClass('open');
            $('.feedback-positive-content').addClass('open');
            $('.feedback-positive-content textarea').attr('required', 'required');
            $('.submit-button').addClass('feedback-positive-submit');
        });

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 1) {
                $('.header').addClass('fixed');
            } else {
                $('.header').removeClass('fixed');
            }
        });
    });

    // header phones click
    // variant 1
    var phone_propagator = $('.toggle-phone-item'),
        phone_text = $('.toggle-phone-item .item-value');

    phone_text.hide();

    $('.item-false-button').click(function() {
        $(this).parent().siblings(phone_propagator).find(phone_text).hide(500);
        $(this).siblings(phone_text).toggle(500);
    });


    $(document).mouseup(function(event){
        if (  phone_propagator.is(':visible') ) {
            if (!phone_propagator.is(event.target) && phone_propagator.has(event.target).length === 0)
            {
                // phone_propagator.hide();
                $(this).find(phone_text).hide(500);
            };
        };
    });

    // variant 2
    // $('.toggle-phone-item .item-value').hide();

    // $('.item-false-button').click(function() {
    //     $(this).closest('.toggle-phone-item').siblings('.toggle-phone-item').children('.item-value').hide(500);
    //     $(this).siblings('.item-value').toggle(500);
    // });


    // $(document).mouseup(function(e){
    //     if (  $('.toggle-phone-item').is(':visible') ) {
    //         if (!$('.toggle-phone-item').is(e.target) && $('.toggle-phone-item').has(e.target).length === 0) {
    //             $(this).children('.item-value').hide(500);
    //         };
    //     };
    // });


    // mobile menu
    $(function() {
        $('.menu-burger').click(function() {
            $('.header').toggleClass('menu-open');
            $('body').toggleClass('menu-open');
        });
    });

    $('.answer-item-toggle').click(function() {
        $(this).parent().toggleClass('open').siblings().removeClass('open');
    });

    $('.one-slide-slider').slick({
        slidesToShow: 1,
        slideToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true,
        draggable: false
    });

     // Date and time picker
    $(function() {
        var d = new Date(),

        todayDate = (d.getDate())+'/'+(d.getMonth()+1)+'/'+(d.getFullYear()),
        todayTime = (d.getHours()+1+':00');

        const todayDateDay = d.getDate();
        const todayDateMonthString = d.toLocaleString('en-us', { month: 'short' });

        const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        function formatAMPM(date) {
          var hours = date.getHours();
          var minutes = date.getMinutes();
          var ampm = hours >= 12 ? 'pm' : 'am';
          hours = hours % 12;
          // hours = hours ? hours : 12; // the hour '0' should be '12'
          minutes = minutes < 10 ? '0'+minutes : minutes;
          let strTime = (hours+1) + ':00' +ampm;
          return strTime;
        };

        $('.date-info .selected-date').text( todayDateMonthString + ' ' + todayDateDay );
        $('.date-info .selected-time').text( formatAMPM(new Date) );
        $('.confirm-info .time').text( formatAMPM(new Date) );

        $('.confirm-date .date-value').text( days[d.getDay()] + ', ' + todayDateMonthString + ' ' + todayDateDay );

        $('#datepicker').datetimepicker({
            opened: true,
            timepicker: false,
            closeOnDateSelect: false,
            minDate: 0,
            maxDate: (d.getFullYear())+'/'+(d.getMonth()+2)+'/'+(d.getDate()), // add 1 months
            inline: true,
            todayButton: false,
            format:'d/m/Y',
            value: todayDate,
            onSelectDate: function(ct,$i){
                const day_value = ct.getDate();
                const week_day_value = ct.getDay();
                const month_value = ct.toLocaleString('en-us', { month: 'short' });



                let weekDayName = days[ct.getDay()];

                $('.date-info .selected-date').text((month_value + ' ' + day_value + ','));
                $('.confirm-date .date-value').text((weekDayName + ', ' + month_value + ' ' + day_value));

                console.log( $('#datepicker').val() );
            }
        });

        $('#timepicker').datetimepicker({
            opened: false,
            inline: true,
            datepicker: false,
            step: 30,
            format: 'g:ia',
            formatTime: 'g:ia',
            value: todayTime,
            allowTimes: [
                '08:00',
                // '08:30',
                '09:00',
                // '09:30',
                '10:00',
                // '10:30',
                '11:00',
                // '11:30',
                '12:00',
                // '12:30',
                '13:00',
                // '13:30',
                '14:00',
                // '14:30',
                '15:00',
                // '15:30',
                '16:00',
                // '16:30',
                '17:00',
                // '17:30',
                '18:00',
                // '18:30',
                '19:00'

            ],
            onSelectTime: function(ct,$i){
                $('.date-info .selected-time').text( $('#timepicker').val() );
                $('.confirm-info .time').text( $('#timepicker').val() );
                $('.time .xdsoft_datetimepicker').toggle();

                console.log( $('#timepicker').val() );
            }
        });

        $('#timepicker').click(function() {
            $('.time .xdsoft_datetimepicker').toggle();
        });

        $(document).mouseup(function(e){

            var time_propagator = $('.date-info .time'),
                time_dropdown = $('.time .xdsoft_datetimepicker');

            if (  time_dropdown.is(':visible') ) {

                if (!time_dropdown.is(e.target) && time_dropdown.has(e.target).length === 0)
                {
                    time_dropdown.hide();
                }
            }

        });
        if ( $(window).height() < 1500 ) {
            $('.date-info .time .xdsoft_datetimepicker').addClass('overflow');
        }
    })

    // Rooms quantity buttons
    $(function() {
        $('.quantity').each(function() {
            var spinner = $(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            btnUp.click(function() {
                var oldValue = parseFloat(input.val());

                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }

                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.click(function() {
                var oldValue = parseFloat(input.val());

                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });
    });



    // Booking form events
    $(function() {
        // var block_initials = true,
        //     block_contacts = false,
        //     block_property_type = false,
        //     block_rooms_number = false,
        //     block_business_name = false,
        //     block_location = false,
        //     block_date = false,
        //     block_business_type = false,
        //     block_pests_type = false,
        //     block_payment = false,
        //     block_confirm = false;

        // $('.step-counter-current').text(step_current);

        // $('.prev-step-button').click(function() {
        //     step_current -=1;
        //     $('.step-counter-current').text(step_current);
        //     console.log(step_current);
        // });
            var business_request = $('#property-type-business');
            var home_request = $('#property-type-home');

            $('.step-counter-current').text(1);

            $('.block-location .private-title').removeClass('visible');
            $('.block-location .commercial-title').addClass('visible');

            $('.next-step-button').addClass('initials-step-button');

            // add class by default
            $('.modal-booking').addClass('business-request');

            // $('.home-request').on('click', '.initials-step-button', function() {
            //     $(this).removeClass('initials-step-button').addClass('property-step-button');
            //     $('.prev-step-button').removeClass('hidden').addClass('prev-step-initials');

            //     $('.step-block').removeClass('open');
            //     $('.block-property-type').addClass('open');

            //     $('.step-counter-current').text(2);

            //     $('.block-property-type .first-name-title').text( $('.block-initials input[name=user_name]').val() );
            // });

            // 2.property type checkboxes
            $('input[type=radio][name=property_type]').change(function() {
                if( business_request.is(':checked') ) {
                    console.log( 'property type business ');

                    $('.modal-booking').removeClass('home-request').addClass('business-request');

                    $('.block-location .private-title').removeClass('visible');
                    $('.block-location .commercial-title').addClass('visible');


                }
                else if( home_request.is(':checked') ) {
                    console.log( 'property type home ');
                    $('.modal-booking').removeClass('business-request').addClass('home-request');

                    $('.block-location .private-title').addClass('visible');
                    $('.block-location .commercial-title').removeClass('visible');


                };
            });

            // Formward btns
                ////////////////////////////////////////////////////////
                // business request

                    // business window 2 - property-type
                    $(document).on('click', '.business-request .initials-step-button', function() {

                        console.log('block property type');

                        $(this).removeClass('initials-step-button').addClass('property-step-button');
                        $('.prev-step-button').removeClass('hidden').addClass('prev-step-initials');

                        $('.step-block').removeClass('open');
                        $('.block-property-type').addClass('open');

                        $('.step-counter-current').text(2);

                        $('.block-property-type .first-name-title').text( $('.block-initials input[name=user_name]').val() );
                    });
                    // business window 3 -business name
                    $(document).on('click', '.business-request .property-step-button', function() {

                        console.log('block business name');

                        $(this).removeClass('property-step-button').addClass('businessname-step-button');
                        $('.prev-step-button').removeClass('prev-step-initials').addClass('prev-step-property');

                        $('.step-block').removeClass('open');
                        $('.block-business-name').addClass('open');

                        $('.step-counter-current').text(3);
                    });

                    // business window 4 - business type
                    $(document).on('click', '.business-request .businessname-step-button', function() {
                        console.log( 'block business type');

                        $('.block-business-type .business-title').text( $('.block-business-name .text-input').val() );

                        $(this).removeClass('businessname-step-button').addClass('businesstype-step-button');
                        $('.prev-step-button').removeClass('prev-step-property').addClass('prev-step-businessname');

                        $('.step-block').removeClass('open');
                        $('.block-business-type').addClass('open');

                        $('.step-counter-current').text(4);
                    });

                    // business window 5 - location
                    $(document).on('click', '.business-request .businesstype-step-button', function() {
                        console.log( 'block location');

                        $('.block-location .commercial-title .business-title').text( $('.block-business-name .text-input').val() );

                        $(this).removeClass('businesstype-step-button').addClass('location-step-button');
                        $('.prev-step-button').removeClass('prev-step-businessname').addClass('prev-step-businesstype');

                        $('.step-block').removeClass('open');
                        $('.block-location').addClass('open');

                        $('.step-counter-current').text(5);
                    });

                    // business window 6 - pests types
                    $(document).on('click', '.business-request .location-step-button', function() {
                        console.log( 'block pests type');

                        $(this).removeClass('location-step-button').addClass('peststype-step-button');
                        $('.prev-step-button').removeClass('prev-step-businesstype').addClass('prev-step-location');

                        $('.step-block').removeClass('open');
                        $('.block-pests-type').addClass('open');

                        $('.step-counter-current').text(6);
                    });

                    // business window 7 - calendar
                    $(document).on('click', '.business-request .peststype-step-button', function() {
                        console.log( 'block date');

                        $(this).removeClass('peststype-step-button').addClass('date-step-button');
                        $('.prev-step-button').removeClass('prev-step-location').addClass('prev-step-peststype');

                        $('.step-block').removeClass('open');
                        $('.block-date').addClass('open');

                        $('.step-counter-current').text(7);
                    });

                    // business window 8 - payment
                    $(document).on('click', '.business-request .date-step-button', function() {
                        $(this).attr('type', 'submit');
                        $(this).attr('type', 'submit');
                        $.ajax({
                            type: "POST",
                            url: 'order',
                            data:$("#booking-form").serialize(),
                            success: function (data) {
                                console.log(data);
                                $('.prev-step-button').removeAttr('class').addClass('step-button prev-step-button hidden');
                                $('.next-step-button').removeAttr('class type').addClass('step-button next-step-button initials-step-button hidden');
                                $('.modal-booking').addClass('modal-finish');
                                $('.modal-finish .next-step-button').removeClass('hidden').removeAttr('type');
                            },
                            error: function(data){
                                console.log(data);
                                // $('.modal-booking').addClass('modal-finish');
                                console.log('submit form error');
                            }
                        });
                        // $(this).removeClass('date-step-button').addClass('payment-step-button');
                        // $('.prev-step-button').removeClass('prev-step-peststype').addClass('prev-step-date');
                        //
                        // $('.step-block').removeClass('open');
                        // $('.block-payment').addClass('open');
                        //
                        // $('.step-counter-current').text(8);
                        $(this).removeClass('date-step-button').addClass('hidden');
                        $('.prev-step-button').removeClass('prev-step-date').addClass('hidden');

                        $('.step-block').removeClass('open');
                        $('.block-confirm').addClass('open');

                        $('.step-counter').hide();
                    });

                    // business window 9 - finish
                    $(document).on('click', '.business-request .payment-step-button', function() {


                        $(this).removeClass('payment-step-button').addClass('hidden');
                        $('.prev-step-button').removeClass('prev-step-peststype').addClass('hidden');

                        $('.step-block').removeClass('open');
                        $('.block-confirm').addClass('open');

                        $('.step-counter').hide();
                    });
                ////////////////////////////////////////////////////////
                // home request
                    // home window 2 - property-type
                    $(document).on('click', '.home-request .initials-step-button', function() {

                        console.log('block property type');

                        $(this).removeClass('initials-step-button').addClass('property-step-button');
                        $('.prev-step-button').removeClass('hidden').addClass('prev-step-initials');

                        $('.step-block').removeClass('open');
                        $('.block-property-type').addClass('open');

                        $('.step-counter-current').text(2);

                        $('.block-property-type .first-name-title').text( $('.block-initials input[name=user_name]').val() );
                    });
                    // home window 3 - business name
                    $(document).on('click', '.home-request .property-step-button', function() {

                        $(this).removeClass('property-step-button').addClass('rooms-step-button');
                        $('.prev-step-button').removeClass('prev-step-initials').addClass('prev-step-property');

                        $('.step-block').removeClass('open');
                        $('.block-rooms-number').addClass('open');

                        $('.step-counter-current').text(3);
                    });

                    // home window 4 - rooms number
                    $(document).on('click', '.home-request .rooms-step-button', function() {


                        $(this).removeClass('rooms-step-button').addClass('location-step-button');
                        $('.prev-step-button').removeClass('prev-step-property').addClass('prev-step-rooms');

                        $('.step-block').removeClass('open');
                        $('.block-location').addClass('open');

                        $('.block-location .private-title .first-name-title').text( $('.block-initials input[name=user_name]').val() );

                        $('.step-counter-current').text(4);
                    });

                    // home window 5 - location
                    $(document).on('click', '.home-request .location-step-button', function() {
                        console.log( 'block location');

                        $(this).removeClass('location-step-button').addClass('peststype-step-button');
                        $('.prev-step-button').removeClass('prev-step-rooms').addClass('prev-step-location');

                        $('.step-block').removeClass('open');
                        $('.block-pests-type').addClass('open');

                        $('.step-counter-current').text(5);
                    });

                    // business window 6 - pests types
                    $(document).on('click', '.home-request .peststype-step-button', function() {
                        console.log( 'block pests type');

                        $(this).removeClass('peststype-step-button').addClass('contacts-step-button');
                        $('.prev-step-button').removeClass('prev-step-location').addClass('prev-step-peststype');

                        $('.step-block').removeClass('open');
                        $('.block-contacts').addClass('open');

                        $('.step-counter-current').text(6);
                    });

                    // business window 7 - calendar
                    $(document).on('click', '.home-request .contacts-step-button', function() {
                        console.log( 'block date');

                        $(this).removeClass('contacts-step-button').addClass('date-step-button');
                        $('.prev-step-button').removeClass('prev-step-peststype').addClass('prev-step-contacts');

                        $('.step-block').removeClass('open');
                        $('.block-date').addClass('open');

                        $('.step-counter-current').text(7);
                    });

                    // business window 8 - payment
                    $(document).on('click', '.home-request .date-step-button', function() {
                        $(this).attr('type', 'submit');
                        $.ajax({
                            type: "POST",
                            url: 'order',
                            data:   $("#booking-form").serialize(),
                            success: function (data) {
                                console.log(data);
                                $('.prev-step-button').removeAttr('class').addClass('step-button prev-step-button hidden');
                                $('.next-step-button').removeAttr('class type').addClass('step-button next-step-button initials-step-button hidden');
                                // $('.modal-booking').addClass('modal-finish');
                            },
                            error: function(data){
                                console.log(data);
                                $('.modal-booking').addClass('modal-finish');
                                console.log('submit form error');
                            }
                        });
                        // $(this).removeClass('date-step-button').addClass('payment-step-button');
                        // $('.prev-step-button').removeClass('prev-step-contacts').addClass('prev-step-date');
                        //
                        // $('.step-block').removeClass('open');
                        // $('.block-payment').addClass('open');
                        //
                        // $('.step-counter-current').text(8);
                        $(this).removeClass('date-step-button').addClass('hidden');
                        $('.prev-step-button').removeClass('prev-step-date').addClass('hidden');

                        $('.step-block').removeClass('open');
                        $('.block-confirm').addClass('open');

                        $('.step-counter').hide();
                    });

                    // business window 9 - finish
                    $(document).on('click', '.home-request .payment-step-button', function() {
                        console.log( 'block finish');

                        $(this).removeClass('payment-step-button').addClass('hidden');
                        $('.prev-step-button').removeClass('prev-step-date').addClass('hidden');

                        $('.step-block').removeClass('open');
                        $('.block-confirm').addClass('open');

                        $('.step-counter').hide();
                    });

            // Undo btns
                // business request
                    //2-1
                    $(document).on('click', '.business-request .prev-step-initials', function() {
                        console.log( 'block initials');

                        $(this).addClass('hidden');
                        $('.next-step-button').removeClass('property-step-button').addClass('initials-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-initials').addClass('open');

                        $('.step-counter-current').text(1);
                    });
                    //3-2
                    $(document).on('click', '.business-request .prev-step-property', function() {
                        console.log( 'block property');

                        $(this).removeClass('prev-step-property').addClass('prev-step-initials');
                        $('.next-step-button').removeClass('businessname-step-button').addClass('property-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-property-type').addClass('open');

                        $('.step-counter-current').text(2);
                    });
                    // 4-3
                    $(document).on('click', '.business-request .prev-step-businessname', function() {
                        console.log( 'block business name');

                        $(this).removeClass('prev-step-businessname').addClass('prev-step-property');
                        $('.next-step-button').removeClass('businesstype-step-button').addClass('businessname-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-business-name').addClass('open');

                        $('.step-counter-current').text(3);
                    });
                    // 5-4
                    $(document).on('click', '.business-request .prev-step-businesstype', function() {
                        console.log( 'block busi type');

                        $(this).removeClass('prev-step-businesstype').addClass('prev-step-businessname');
                        $('.next-step-button').removeClass('location-step-button').addClass('businesstype-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-business-type').addClass('open');

                        $('.step-counter-current').text(4);
                    });
                    // 6-5
                    $(document).on('click', '.business-request .prev-step-location', function() {
                        console.log( 'block location');

                        $(this).removeClass('prev-step-location').addClass('prev-step-businesstype');
                        $('.next-step-button').removeClass('peststype-step-button').addClass('location-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-location').addClass('open');

                        $('.step-counter-current').text(5);
                    });
                    // 7-6
                    $(document).on('click', '.business-request .prev-step-peststype', function() {
                        console.log( 'block pests types');

                        $(this).removeClass('prev-step-peststype').addClass('prev-step-location');
                        $('.next-step-button').removeClass('date-step-button').addClass('peststype-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-pests-type').addClass('open');

                        $('.step-counter-current').text(6);
                    });
                    // 8-7
                    $(document).on('click', '.business-request .prev-step-date', function() {
                        console.log( 'block date');

                        $(this).removeClass('prev-step-date').addClass('prev-step-peststype');
                        $('.next-step-button').removeClass('payment-step-button').addClass('date-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-date').addClass('open');

                        $('.step-counter-current').text(7);
                    });
                // home request
                    //2-1
                    $(document).on('click', '.home-request .prev-step-initials', function() {
                        console.log( 'block initials');

                        $(this).addClass('hidden');
                        $('.next-step-button').removeClass('property-step-button').addClass('initials-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-initials').addClass('open');

                        $('.step-counter-current').text(1);
                    });
                    //3-2
                    $(document).on('click', '.home-request .prev-step-property', function() {
                        console.log( 'block property');

                        $(this).removeClass('prev-step-property').addClass('prev-step-initials');
                        $('.next-step-button').removeClass('rooms-step-button').addClass('property-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-property-type').addClass('open');

                        $('.step-counter-current').text(2);
                    });
                    // 4-3
                    $(document).on('click', '.home-request .prev-step-rooms', function() {
                        console.log( 'block business name');

                        $(this).removeClass('prev-step-rooms').addClass('prev-step-property');
                        $('.next-step-button').removeClass('location-step-button').addClass('rooms-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-rooms-number').addClass('open');

                        $('.step-counter-current').text(3);
                    });
                    // 5-4
                    $(document).on('click', '.home-request .prev-step-location', function() {
                        console.log( 'block busi type');

                        $(this).removeClass('prev-step-location').addClass('prev-step-rooms');
                        $('.next-step-button').removeClass('location-step-button').addClass('rooms-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-location').addClass('open');

                        $('.step-counter-current').text(4);
                    });
                    // 6-5
                    $(document).on('click', '.home-request .prev-step-peststype', function() {
                        console.log( 'block location');

                        $(this).removeClass('prev-step-peststype').addClass('prev-step-location');
                        $('.next-step-button').removeClass('contacts-step-button').addClass('peststype-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-pests-type').addClass('open');

                        $('.step-counter-current').text(5);
                    });
                    // 7-6
                    $(document).on('click', '.home-request .prev-step-contacts', function() {
                        console.log( 'block pests types');

                        $(this).removeClass('prev-step-contacts').addClass('prev-step-peststype');
                        $('.next-step-button').removeClass('date-step-button').addClass('contacts-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-contacts').addClass('open');

                        $('.step-counter-current').text(6);
                    });
                    // 8-7
                    $(document).on('click', '.home-request .prev-step-date', function() {
                        console.log( 'block date');

                        $(this).removeClass('prev-step-date').addClass('prev-step-contacts');
                        $('.next-step-button').removeClass('payment-step-button').addClass('date-step-button');

                        $('.step-block').removeClass('open');
                        $('.block-date').addClass('open');

                        $('.step-counter-current').text(7);
                    });
    });

});

