if ( $('#calendar').length > 0 ) {
    document.addEventListener('DOMContentLoaded', function() {
        //Calendar
        $(function() {
            var events_array = [
                {
                    id: '1',
                    title: 'Конференция Mekong Gaming Summit',
                    start: '2019-12-11',
                    url: 'individual-casino-calendar-item.html',
                    extendedProps: {
                        duration: 'Ноябрь 11 - Ноябрь 12',
                        title_descr: 'Зажигательный концерт Турецких звезд',
                        descr: 'Казино Eclipse приглашает вас на зажигательный концерт Турецких звезд',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/casino-rating-banner.jpg'
                    }
                },
                {
                    id: '2',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2019-12-22',
                    url: 'individual-casino-calendar-item.html',
                    extendedProps: {
                        duration: 'Ноябрь 22',
                        title_descr: 'Зажигательный концерт Турецких звезд',
                        descr: 'Казино Eclipse приглашает вас на зажигательный концерт Турецких звезд',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/news-banner.jpg'
                    }
                },
                {
                    id: '3',
                    title: 'Davut Guloglu & Tugba Ozay Davut Guloglu Tugba Ozay',
                    start: '2019-12-24',
                    url: 'individual-casino-calendar-item.html',
                    extendedProps: {
                        duration: 'Ноябрь 24 - Ноябрь 26',
                        title_descr: 'Зажигательный концерт Турецких звезд',
                        descr: 'Казино Eclipse приглашает вас на зажигательный концерт Турецких звезд',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/calendar-banner.jpg'
                    }
                },
                {
                    id: '4',
                    title: 'Event 4',
                    start: '2019-12-12',
                    url: 'individual-casino-calendar-item.html',
                    extendedProps: {
                        duration: 'duration 4',
                        title_descr: 'title descr 4',
                        descr: 'Descr 4',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/casino-review-banner.jpg'
                    }
                },
                {
                    id: '5',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2019-12-29',
                    url: 'individual-casino-calendar-item.html',
                    extendedProps: {
                        duration: 'duration 5',
                        title_descr: 'title descr 5',
                        descr: 'Descr escr descr 5',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/casino-lottery-banner.jpg'
                    }
                },
                {
                    id: '6',
                    title: 'Конференция Mekong Gaming Summit',
                    start: '2020-01-11',
                    url: 'individual-casino-calendar-item.html',
                    extendedProps: {
                        duration: 'Январь 11 - Январь 12',
                        title_descr: 'Зажигательный концерт Турецких звезд',
                        descr: 'Казино Eclipse приглашает вас на зажигательный концерт Турецких звезд',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/casino-rating-banner.jpg'
                    }
                },
                {
                    id: '7',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2020-01-22',
                    url: 'individual-casino-calendar-item.html',
                    extendedProps: {
                        duration: 'Январь 22',
                        title_descr: 'Зажигательный концерт Турецких звезд',
                        descr: 'Казино Eclipse приглашает вас на зажигательный концерт Турецких звезд',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/news-banner.jpg'
                    }
                },
                {
                    id: '8',
                    title: 'Davut Guloglu & Tugba Ozay Davut Guloglu Tugba Ozay',
                    start: '2020-01-24',
                    url: 'individual-casino-calendar-item.html',
                    extendedProps: {
                        duration: 'Январь 24 - Январь 26',
                        title_descr: 'Зажигательный концерт Турецких звезд',
                        descr: 'Казино Eclipse приглашает вас на зажигательный концерт Турецких звезд',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/calendar-banner.jpg'
                    }
                },
                {
                    id: '9',
                    title: 'Событие 9',
                    start: '2020-01-12',
                    url: 'individual-casino-calendar-item.html',
                    extendedProps: {
                        duration: 'Длительность события 9',
                        title_descr: 'Заголовок события 9',
                        descr: 'Описание события 9',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/casino-review-banner.jpg'
                    }
                },
                {
                    id: '10',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2020-01-29',
                    url: 'individual-casino-calendar-item.html',
                    extendedProps: {
                        duration: 'Событие 10',
                        title_descr: 'Заголовок события 10',
                        descr: 'Краткое описание сотытия 10',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/casino-lottery-banner.jpg'
                    }
                }
            ];


            var calendarEl = document.getElementById('calendar');


            var calendar = new FullCalendar.Calendar(calendarEl, {
                events: events_array,

                plugins: [ 'dayGrid', 'timeGrid' ],
                firstDay: 1,
                locale: 'ru',
                // monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                // monthNamesShort: ['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сент', 'Окт', 'Ноя', 'Дек'],
                // dayNames: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
                // // dayNamesShort: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
                // dayNamesShort: ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'],

                validRange: {
                    start: '2019-09-22',
                    end: '2020-09-25'
                },
                header: {
                    left: 'prev',
                    // center: 'title,  dayGridMonth, timeGridWeek, timeGridDay, today',
                    center: 'title, dayGridYear, dayGridMonth, timeGridWeek, timeGridDay',
                    right: 'next'
                },
                views: {
                    month: {
                    columnFormat:'dddd'
                    }
                },
                footer: {
                    left: 'prev',
                    center: 'title',
                    right: 'next'
                },
                selectable: true,

                eventMouseEnter: function(info) {

                    $('<div class="calendar-item-popup">'

                        + '<div class="calendar-item-photo" style="background-image: url(' + info.event.extendedProps.photo +')">'
                        + '</div>'

                        + '<div class="calendar-item-info">'
                            + '<div class="calendar-item-title">'
                                + info.event.title
                            + '</div>'
                            + '<div class="calendar-item-duration">'
                                + info.event.extendedProps.duration
                            + '</div>'
                            + '<div class="calendar-item-title-descr">'
                                + info.event.extendedProps.title_descr
                            + '</div>'
                            + '<div class="calendar-item-descr">'
                                + info.event.extendedProps.descr
                            + '</div>'
                        + '</div>'

                    + '</div>').appendTo(info.el);
                },
                eventMouseLeave: function() {
                    if ( $('.calendar-item-popup').length > 0 ) {
                        $('.calendar-item-popup').remove();
                    }
                }
            });

            calendar.render();

            // $('.fc-day-grid-event').attr('target', '_blank');
        });
    });

};

