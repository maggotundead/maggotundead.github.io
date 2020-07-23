 // Services filter block
    // переключение таб-типов услуг
    $('.services-tabs-links').on( 'click', '.menu-link:not(.active)', function(e) {
        e.preventDefault();
        $(this).closest('.services-order').removeClass( $(this).closest('.services-order').attr('class').split(' ')[1] ).addClass( $(this).attr('class').split(' ')[1] );
        $(this).addClass('active').siblings().removeClass('active').closest('.services-order').find('.service-tab').eq( $(this).index() ).addClass('active').siblings().removeClass('active');
    });

    // переключение типов заказа в одной табе
    $('.service-type-togglers').on( 'click', '.service-type-toggler:not(.active)', function() {
        $(this).addClass('active').siblings().removeClass('active').closest('.service-type-forms-container').find('.service-order-form-tab-item').eq( $(this).index() ).addClass('active').siblings().removeClass('active');
    });

    // Переключение дропдаунов в инпут группах
    $(function() {
        $('.block-services-order .input-group:not(.date-finish):not(.jqselect)').click(function(e) {
            $(this).toggleClass('active').siblings('.input-group').removeClass('active');
            $(this).siblings('.jqselect').removeClass('dropdown opened').children('.jq-selectbox__dropdown').hide();
            e.stopPropagation();
            $('.date-range').data('daterangepicker').show();
        });
        $('.input-group.jqselect').click(function() {
            $(this).siblings('.input-group').removeClass('active');
        });
        $('.block-services-order .date-finish').click(function() {
            $(this).siblings('.input-group:not(.date-start)').removeClass('active').siblings('.date-start').toggleClass('active');
        });

        $(document).on('click', function(e) {
            if ( $(e.target).closest('.input-group').length == 0 ) {
                $('.input-group').removeClass('active');
            };
        });

        // разрешаем клик внутри кликабельной группы
        $('.block-services-order .input-group-dropdown').click(function(event) {
            event.cancelBubble = true;
            if(event.stopPropagation) event.stopPropagation();
        });
    });

    // Авиабилеты | Компонент количество человек и билетов
    $(function() {
        // подставление значений после перезагрузки
        $( function() {
            // в этих табах по одному компоненту билеты
            $('.avia-tickets .service-order-form-tab-item:not(.complex-trip-tab)').each(function() {
                let initialTicketsNumber = 0;
                $(this).find('.amount-selector-button-group').each( function() {
                    $(this).find('input').each( function(i, n) {
                        initialTicketsNumber += parseInt( $(n).val() );
                        // console.log( initialTicketsNumber );
                    });
                });
                $(this).find('.avia-tickets-client-amount .selected-amount-value').text(
                    initialTicketsNumber + ' ' + $(this).find('.avia-tickets-client-amount .selected-amount-value').attr('data-translate-title')
                );
                $(this).find('.avia-tickets-client-amount .selected-ticket-type-value').text(
                    $(this).find('.client-amount-dropdown .ticket-type-selector').children('option:selected').val()
                );
            });

            // в этой табе несколько компонентов с билетами
            $('.avia-tickets .complex-trip-tab .form-row').each(function() {
                let initialTicketsNumber = 0;
                $(this).find('.amount-selector-button-group').each( function() {
                    $(this).find('input').each( function(i, n) {
                        initialTicketsNumber += parseInt( $(n).val() );
                        // console.log( initialTicketsNumber );
                    });
                });
                $(this).find('.avia-tickets-client-amount .selected-amount-value').text(
                    initialTicketsNumber + ' ' + $(this).find('.avia-tickets-client-amount .selected-amount-value').attr('data-translate-title')
                );
                $(this).find('.avia-tickets-client-amount .selected-ticket-type-value').text(
                    $(this).find('.client-amount-dropdown .ticket-type-selector').children('option:selected').val()
                );
            });
        });

        //кнопки подтверждения и отмены
        $( function() {
            $('.avia-tickets-client-amount .amount-cancel').click(function(e) {
                e.preventDefault();
                $(this).closest('.avia-tickets-client-amount').removeClass('active');
            });

            $('.avia-tickets-client-amount .amount-complete').click(function(e) {
                e.preventDefault();

                let selectedTicketsNumber = 0;
                $(this).closest('.client-amount-dropdown').find('.amount-selector-button-group').each( function() {
                    $(this).find('input').each( function(i, n) {
                        selectedTicketsNumber += parseInt( $(n).val() );
                        console.log( selectedTicketsNumber );
                    });
                });

                $(this).closest('.avia-tickets-client-amount').removeClass('active');
                $(this).closest('.avia-tickets-client-amount').find('.selected-amount-value').text(
                    selectedTicketsNumber + ' ' + $(this).closest('.avia-tickets-client-amount').find('.selected-amount-value').attr('data-translate-title')
                );
                $(this).closest('.avia-tickets-client-amount').find('.selected-ticket-type-value').text(
                    $(this).closest('.client-amount-dropdown').find('.ticket-type-selector').children('option:selected').val()
                );
            });
        });
    });

    // Проживание, Туры | Компонент количество человек и номеров
    $(function() {
        // rooms number
        $('.hotel-clients-amount .amount-cancel').click(function(e) {
            e.preventDefault();
            $(this).closest('.hotel-clients-amount').removeClass('active');
        });

        $('.hotel-clients-amount .amount-complete').click(function(e) {
            e.preventDefault();

            $(this).closest('.hotel-clients-amount').removeClass('active');

            let totalPoints = 0;
            $(this).closest('.client-amount-dropdown').find('.clients-button-group').each( function() {
                $(this).find('input').each( function(i, n) {
                    totalPoints += parseInt( $(n).val() );
                    console.log( totalPoints );
                });
            });

            // текст и количество детей в номерах
            if ( $(this).closest('.hotel-clients-amount').find('.children-button-group input').val() == 0 ) {
                $(this).closest('.hotel-clients-amount').find('.client-amount-selected .children-value').text(
                    $(this).closest('.hotel-clients-amount').find('.client-amount-selected .children-value').attr('data-title-nochild')
                );
            };
            if ( $(this).closest('.hotel-clients-amount').find('.children-button-group input').val() == 1 ) {
                $(this).closest('.hotel-clients-amount').find('.client-amount-selected .children-value').text(
                    $(this).closest('.hotel-clients-amount').find('.children-button-group input').val() + ' ' + $(this).closest('.hotel-clients-amount').find('.client-amount-selected .children-value').attr('data-title-child')
                );
            };
            if ( $(this).closest('.hotel-clients-amount').find('.children-button-group input').val() > 1 ) {
                $(this).closest('.hotel-clients-amount').find('.client-amount-selected .children-value').text(
                    $(this).closest('.hotel-clients-amount').find('.children-button-group input').val() + ' ' + $(this).closest('.hotel-clients-amount').find('.client-amount-selected .children-value').attr('data-title-children')
                );
            };

            // текст и количество взрослых в номерах
            if ( $(this).closest('.hotel-clients-amount').find('.adults-button-group input').val() == 1 ) {
                $(this).closest('.hotel-clients-amount').find('.client-amount-selected .adults-value').text(
                    $(this).closest('.hotel-clients-amount').find('.adults-button-group input').val() + ' ' + $(this).closest('.hotel-clients-amount').find('.client-amount-selected .adults-value').attr('data-title-one-adult')
                );
            };
            if ( $(this).closest('.hotel-clients-amount').find('.adults-button-group input').val() > 1 ) {
                $(this).closest('.hotel-clients-amount').find('.client-amount-selected .adults-value').text(
                    $(this).closest('.hotel-clients-amount').find('.adults-button-group input').val() + ' ' + $(this).closest('.hotel-clients-amount').find('.client-amount-selected .adults-value').attr('data-title-adults')
                );
            };

            // текст и количество номеров
            if ( $(this).closest('.hotel-clients-amount').find('.rooms-button-group input').val() == 1 ) {
                $(this).closest('.hotel-clients-amount').find('.client-amount-selected .rooms-value').text(
                    $(this).closest('.hotel-clients-amount').find('.rooms-button-group input').val() + ' ' + $(this).closest('.hotel-clients-amount').find('.client-amount-selected .rooms-value').attr('data-title-one-room')
                );
            };
            if ( $(this).closest('.hotel-clients-amount').find('.rooms-button-group input').val() == 2 ) {
                $(this).closest('.hotel-clients-amount').find('.client-amount-selected .rooms-value').text(
                    $(this).closest('.hotel-clients-amount').find('.rooms-button-group input').val() + ' ' + $(this).closest('.hotel-clients-amount').find('.client-amount-selected .rooms-value').attr('data-title-two-rooms')
                );
            };
            if ( $(this).closest('.hotel-clients-amount').find('.rooms-button-group input').val() == 3 ) {
                $(this).closest('.hotel-clients-amount').find('.client-amount-selected .rooms-value').text(
                    $(this).closest('.hotel-clients-amount').find('.rooms-button-group input').val() + ' ' + $(this).closest('.hotel-clients-amount').find('.client-amount-selected .rooms-value').attr('data-title-three-rooms')
                );
            };
            if ( $(this).closest('.hotel-clients-amount').find('.rooms-button-group input').val() == 4 ) {
                $(this).closest('.hotel-clients-amount').find('.client-amount-selected .rooms-value').text(
                    $(this).closest('.hotel-clients-amount').find('.rooms-button-group input').val() + ' ' + $(this).closest('.hotel-clients-amount').find('.client-amount-selected .rooms-value').attr('data-title-four-rooms')
                );
            };
            if ( $(this).closest('.hotel-clients-amount').find('.rooms-button-group input').val() > 4 ) {
                $(this).closest('.hotel-clients-amount').find('.client-amount-selected .rooms-value').text(
                    $(this).closest('.hotel-clients-amount').find('.rooms-button-group input').val() + ' ' + $(this).closest('.hotel-clients-amount').find('.client-amount-selected .rooms-value').attr('data-title-more-four-rooms')
                );
            };

        });
    });

    // Кнопки переключения количества элементов в компонентах
    $(function() {
        // check buttons on reload
        $('.amount-number-input').each(function() {
            if( $(this).val() > $(this).attr('min') && $(this).siblings('.amount-number-decrease').hasClass('disabled') ) {
                $(this).siblings('.amount-number-decrease').removeClass('disabled');
            };
            if( $(this).val() == +$(this).attr('max') ) {
                $(this).siblings('.amount-number-increase').addClass('disabled');
            };
        });

        // Down number
        $('.amount-number-decrease').click(function() {
            $(this).siblings('.amount-number-input').val( +$(this).siblings('.amount-number-input').val() - 1 );

            if( $(this).siblings('.amount-number-increase').hasClass('disabled') ) {
                $(this).siblings('.amount-number-increase').removeClass('disabled');
            };

            if ( +$(this).siblings('.amount-number-input').val() == +$(this).siblings('.amount-number-input').attr('min') ) {
                $(this).addClass('disabled');
            };
        });

        // Up number
        $('.amount-number-increase').click(function() {
            $(this).siblings('.amount-number-input').val( +$(this).siblings('.amount-number-input').val() + 1 );

            if( $(this).siblings('.amount-number-decrease').hasClass('disabled') ) {
                $(this).siblings('.amount-number-decrease').removeClass('disabled');
            };

            if ( +$(this).siblings('.amount-number-input').val() == +$(this).siblings('.amount-number-input').attr('max') ) {
                $(this).addClass('disabled');
            };
        });

        $('.amount-cancel').click(function() {
            $(this).closest('.input-group').removeClass('active');
        });
    });

    // Компонент выбора времени
    $(function() {
        // подставление значений после перезагрузки в одиночном компоненте времени
        $(function() {
            $('.time-input-group').each(function() {
                $(this).find('.input-group-selected .time-value').text(
                    $(this).find('.time-dropdown .hour-select').children('option:selected').val() + ':' + $(this).find('.time-dropdown .minute-select').children('option:selected').val()
                );
            });

            $('.time-cancel').click( function(e) {
                e.preventDefault();
                $(this).closest('.time-input-group').removeClass('active');
            });
            $('.time-complete').click( function(e) {
                // console.log( 'hour' + $(this).closest('.time-dropdown').find('.hour-select').children('option:selected').val() );
                // console.log( 'minute' + $(this).closest('.time-dropdown').find('.minute-select').children('option:selected').val() );
                e.preventDefault();
                $(this).closest('.time-input-group').removeClass('active');
                $(this).closest('.time-input-group').find('.time-value').text(
                    $(this).closest('.time-dropdown').find('.hour-select').children('option:selected').val() + ':' + $(this).closest('.time-dropdown').find('.minute-select').children('option:selected').val()
                );
            });
        });

        //выбор времени в блоке календарь и время
        $(function() {
            // Селектор времени получения
            $(function() {
                $('.time-start-item').each(function() {
                    $(this).closest('.date-start').find('.date-selected-value-group .time-value').text(
                        $(this).find('.hour-select').children('option:selected').val() + ':' + $(this).find('.minute-select').children('option:selected').val()
                    );
                    // $(this).find('.hour-select').on('change', function() {
                    //     console.log( $(this).children('option:selected').val() );
                    //     // $(this).closest('.date-start').find('.date-selected-value-group .time-value').text(
                    //     //     $(this).children('option:selected').val() + ':' + $(this).closest('.time-start-item').find('.minute-select').children('option:selected').val()
                    //     // );
                    // });
                    // $(this).find('.minute-select').on('change', function() {
                    //     console.log( $(this).children('option:selected').val() );
                    //     // $(this).closest('.date-start').find('.date-selected-value-group .time-value').text(
                    //     //     $(this).children('option:selected').val() + ':' + $(this).closest('.time-start-item').find('.hour-select').children('option:selected').val()
                    //     // );
                    // });
                });

                // $('.time-start-item .hour-select').on('change', function() {
                //     console.log( $(this).children('option:selected').val() );
                //     $(this).closest('.date-start').find('.date-selected-value-group .time-value').text(
                //         // $(this).children('option:selected').val() + ':' + $(this).closest('.time-start-item').find('.minute-select').children('option:selected').val()
                //     );
                // });
                // $('.time-start-item .minute-select').on('change', function() {
                //     $(this).closest('.date-start').find('.date-selected-value-group .time-value').text(
                //         $(this).children('option:selected').val() + ':' + $(this).closest('.time-start-item').find('.hour-select').children('option:selected').val()
                //     );
                // });
                $('.time-start-item select.hour-select').each(function() {
                    $(this).on('change', function() {
                        console.log( $(this).children('option:selected').val() );
                        $(this).closest('.date-start').find('.date-selected-value-group .time-value').text(
                            $(this).children('option:selected').val() + ':' + $(this).closest('.time-start-item').find('select.minute-select').children('option:selected').val()
                        );
                    });
                });
                $('.time-start-item select.minute-select').each(function() {
                    $(this).on('change', function() {
                        $(this).closest('.date-start').find('.date-selected-value-group .time-value').text(
                            $(this).closest('.time-start-item').find('select.hour-select').children('option:selected').val() + ':' + $(this).children('option:selected').val()
                        );
                    });
                });
            });

            // Селетор времени возврата
            $(function() {
                $('.time-finish-item').each(function() {
                    $(this).closest('.date-start').siblings('.date-finish').find('.date-selected-value-group .time-value').text(
                        $(this).find('.hour-select').children('option:selected').val() + ':' + $(this).find('.minute-select').children('option:selected').val()
                    );
                });
                $('.time-finish-item select.hour-select').each(function() {
                    $(this).on('change', function() {
                        console.log( $(this).children('option:selected').val() );
                        $(this).closest('.date-start').siblings('.date-finish').find('.date-selected-value-group .time-value').text(
                            $(this).children('option:selected').val() + ':' + $(this).closest('.time-finish-item').find('select.minute-select').children('option:selected').val()
                        );
                    });
                });
                $('.time-finish-item select.minute-select').each(function() {
                    $(this).on('change', function() {
                        $(this).closest('.date-start').siblings('.date-finish').find('.date-selected-value-group .time-value').text(
                            $(this).closest('.time-finish-item').find('select.hour-select').children('option:selected').val() + ':' + $(this).children('option:selected').val()
                        );
                    });
                });
            });
        });
    });

    // Составной маршрут в авиабилетах
    $(function() {
        // Удаление ряда
        $('.remove-form-row').click(function() {
            $(this).parent('.form-row').remove();
        });
    });

    // Календарь туда
    $(function() {
        var todayDate = new Date;

        function formatDate(date) {
            let dayNames = [
                'вс',
                'пн',
                'вт',
                'ср',
                'чт',
                'пт',
                'сб'
            ];
            let monthNumbers = [
                '01',
                '02',
                '03',
                '04',
                '05',
                '06',
                '07',
                '08',
                '09',
                '10',
                '11',
                '12'
            ]
            let day = date.getDate();
            let dayIndex = date.getDay();
            let monthIndex = date.getMonth();
            return dayNames[dayIndex] + ', ' + day + '.' + monthNumbers[monthIndex]
        };

        $('.date-calendar').datetimepicker({
            lang:'ru',
            timepicker: false,
            format:'d.m.Y',
            inline: true,
            opened: true,
            minDate: 0,
            startDate: 0,
            dayOfWeekStart: 1,
            scrollInput: false,
            scrollMonth : false,
            i18n: {
                de: {
                    months: [
                    'Januar','Februar','März','April',
                    'Mai','Juni','Juli','August',
                    'September','Oktober','November','Dezember'
                    ],
                    dayOfWeek: [
                        "So.", "Mo", "Di", "Mi",
                        "Do", "Fr", "Sa."
                    ]
                },
                tr: {
                    months: [
                    'Januar','Februar','März','April',
                    'Mai','Juni','Juli','August',
                    'September','Oktober','November','Dezember'
                    ],
                    dayOfWeek: [
                        "So", "Mo", "Di", "Mi",
                        "Do", "Fr", "Sa"
                    ]
                }
            },
            onGenerate: function( ct ) {
                // $input.val( ct );
                // console.log( ct );
                // dateTimePicker.Value.DayOfWeek
                $(this).closest('.date-input-group').find('.date-selected-value-group .date-value').text(
                    formatDate(ct)
                );
            },
            onChangeDateTime: function( dp, $input ) {
                $(this).closest('.date-input-group').find('.date-selected-value-group .date-value').text(
                    formatDate(ct)
                );
                // console.log( $input.val() );
                // console.log( dp );
                // console.log( dp.getDay() );
                // console.log( dp.getMonth() );
            }
        });
        $.datetimepicker.setLocale('ru');
    });

    // Календарь туда-обратно
    $(function() {
        $('.date-range').each(function() {
            function formatDayName(date) {
                let dayNames = [
                    'вс',
                    'пн',
                    'вт',
                    'ср',
                    'чт',
                    'пт',
                    'сб'
                ];
                let dayIndex = date.getDay();
                return dayNames[dayIndex]
            };
            $(this).daterangepicker({
                autoApply: true,
                locale: {
                    format: 'DD/MM/YYYY',
                    separator: ' - ',
                    applyLabel: 'Apply',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    weekLabel: 'Н',
                    daysOfWeek: [
                        'вс',
                        'пн',
                        'вт',
                        'ср',
                        'чт',
                        'пт',
                        'сб'
                    ],
                    monthNames: [
                        'Январь',
                        'Февраль',
                        'Март',
                        'Апрель',
                        'Май',
                        'Июнь',
                        'Июль',
                        'Август',
                        'Сентябрь',
                        'Октябрь',
                        'Ноябрь',
                        'Декабрь'
                    ],
                    firstDay: 1
                },
                parentEl: $(this).closest('.input-group').find('.input-group-dropdown'),
                alwaysShowCalendars: true,
                minDate: new Date(),

            },
            function(start, end, label) {
                // console.log( start.format('DD.MM') );
                // console.log( start.format('dd') );
                // console.log( end.format('DD.MM') );
                // console.log( end.format('dd') );
                // console.log( $(this).parent() );
                // console.log( $(this).closest('.input-group').attr('class') );
                // $(this).parent('.date-start').find('.date-value').text(start.format('DD.MM') );
                // $(this).closest('.date-start').siblings('.date-finish').find('.date-value').text(end.format('DD.MM') );

                // console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
                // console.log('New date selected: ' + start.format('YYYY-MM-DD')+ ' to '+ end.format('YYYY-MM-DD'));
            });
            
            $(this).on('show.daterangepicker', function(ev, picker) {
                // console.log(picker.endDate.format('dd') );
                // console.log(picker.endDate._d );
                // console.log ( formatDayName(picker.endDate._d) );

                $(this).closest('.date-start').find('.input-group-selected .date-value').text(
                    formatDayName(picker.startDate._d) + ',  ' + picker.startDate.format('DD.MM')
                );
                $(this).closest('.date-start').siblings('.date-finish').find('.input-group-selected .date-value').text(
                    formatDayName(picker.endDate._d) + ',  ' + picker.endDate.format('DD.MM')
                );
            });

            $(this).data('daterangepicker').show();

            $(this).on('apply.daterangepicker', function(ev, picker) {
                $(this).closest('.date-start').find('.input-group-selected .date-value').text(
                    // picker.startDate.format('dd') + ',  ' + picker.startDate.format('DD.MM')
                    formatDayName(picker.startDate._d) + ',  ' + picker.startDate.format('DD.MM')
                );
                $(this).closest('.date-start').siblings('.date-finish').find('.input-group-selected .date-value').text(
                    // picker.endDate.format('dd') + ',  ' + picker.endDate.format('DD.MM')
                    formatDayName(picker.endDate._d) + ',  ' + picker.endDate.format('DD.MM')
                );
            });
        });
    });
// Services filter block