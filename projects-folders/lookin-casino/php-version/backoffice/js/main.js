$(document).ready(function() {

});

$(document).on('click', 'a[href="/"], form button[type="submit"]', function(e) {
    e.preventDefault();
});

$(document).on('click', '.establishment-type-link:not(.active)', function() {
    $(this).addClass('active').siblings().removeClass('active');
    $(this).closest('.block-best-gambling-establishments').find('.establishment-tab').removeClass('active').eq($(this).index()).addClass('active');
});

$(document).on('click', '.player-type-link:not(.active)', function() {
    $(this).addClass('active').siblings().removeClass('active');
    $(this).closest('.block-players').find('.player-tab').removeClass('active').eq($(this).index()).addClass('active');
});

window.FontAwesomeConfig = {
    searchPseudoElements: true
};

if ( $('#calendar').length > 0 ) {
    document.addEventListener('DOMContentLoaded', function() {
        //Calendar
        $(function() {
            var events_array = [
                {
                    id: '1',
                    title: 'Конференция Mekong Gaming Summit',
                    start: '2020-02-11',
                    url: 'calendar-item.html',
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
                    start: '2020-02-22',
                    url: 'calendar-item.html',
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
                    start: '2020-02-24',
                    url: 'calendar-item.html',
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
                    start: '2020-02-12',
                    url: 'calendar-item.html',
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
                    start: '2020-02-29',
                    url: 'calendar-item.html',
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
                    start: '2020-02-11',
                    url: 'calendar-item.html',
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
                    start: '2020-02-22',
                    url: 'calendar-item.html',
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
                    start: '2020-02-24',
                    url: 'calendar-item.html',
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
                    start: '2020-02-8',
                    url: 'calendar-item.html',
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
                    start: '2020-02-29',
                    url: 'calendar-item.html',
                    extendedProps: {
                        duration: 'Событие 10',
                        title_descr: 'Заголовок события 10',
                        descr: 'Краткое описание сотытия 10',
                        photo: 'http://space.idma.ltd/LookinCasinoDemo/img/casino-lottery-banner.jpg'
                    }
                }
            ];


            var calendarEl = document.getElementById('calendar');

            var today_date = new Date();

            var calendar = new FullCalendar.Calendar(calendarEl, {
                events: events_array,

                plugins: [ 'dayGrid'],
                firstDay: 1,
                locale: 'ru',
                defaultDate: today_date,
                validRange: {
                    start: '2020-01-01',
                    end: '2020-09-25'
                },
                header: {
                    left: 'prev',
                    // center: 'title,  dayGridMonth, timeGridWeek, timeGridDay, today',
                    center: 'title',
                    right: 'next'
                },
                views: {
                    month: {
                    columnFormat:'dddd'
                    }
                },
                footer: {
                    
                },
                selectable: true,

                eventMouseEnter: function(info) {

                    
                },
                eventMouseLeave: function() {
                }
            });

            calendar.render();

            
        });
    });

};