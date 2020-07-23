if ( $('#calendar').length > 0 ) {
    document.addEventListener('DOMContentLoaded', function() {
        //Calendar
        $(function() {
            var events_array = [
                {
                    id: '1',
                    title: 'Конференция Mekong Gaming Summit',
                    start: '2020-02-25',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '2',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2020-02-28',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '3',
                    title: 'Davut Guloglu & Tugba Ozay Davut Guloglu Tugba Ozay',
                    start: '2020-03-02',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '4',
                    title: 'Event 4',
                    start: '2020-03-09',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '5',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2020-03-19',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '6',
                    title: 'Конференция Mekong Gaming Summit',
                    start: '2020-03-11',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '7',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2020-03-22',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '8',
                    title: 'Davut Guloglu & Tugba Ozay Davut Guloglu Tugba Ozay',
                    start: '2020-03-24',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '9',
                    title: 'Событие 9',
                    start: '2020-03-12',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '10',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2020-03-29',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '11',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2020-03-12',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '12',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2020-03-12',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '14',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2020-03-12',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                },
                {
                    id: '15',
                    title: 'Davut Guloglu & Tugba Ozay',
                    start: '2020-03-12',
                    url: 'https://demo-lookincasino.com/mobile-prototype/calendar-event/',
                }
            ];


            var calendarEl = document.getElementById('calendar');


            var calendar = new FullCalendar.Calendar(calendarEl, {
                events: events_array,

                plugins: [ 'dayGrid', 'timeGrid' ],
                firstDay: 1,
                locale: 'ru',
                validRange: {
                    start: '2020-02-01',
                    end: '2020-09-25'
                },
                header: {
                    left: 'prev',
                    center: 'title',
                    right: 'next'
                },
                views: {
                    month: {
                    columnFormat:'dddd'
                    }
                },
                selectable: true,
            });

            calendar.render();

            // $('.fc-day-grid-event').attr('target', '_blank');
        });
    });

};