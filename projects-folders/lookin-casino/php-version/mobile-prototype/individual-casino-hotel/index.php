<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Отель</title>

    <meta name="theme-color" content="#2862ac" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/general.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/header.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/slider-banner.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/individual-casino.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/service-filter.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/news.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/users-reviews.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/footer.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>
<body class="inner-page">
    <div class="wrapper">
        <header class="header fixed">
            <div class="header-top">
                <div class="wrap">
                    <button class="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="logo">
                        <img src="https://demo-lookincasino.com/mobile-prototype/img/logo.svg">
                    </div>
                    <button class="notifications"></button>
                </div>
            </div>
            <div class="burger-menu">
                <div class="burger-menu-title">
                    Страницы прототипа
                </div>
                <ol class="burger-menu-list">
                    <!-- <li>
                        <a href="/">
                            Рабочий стол
                        </a>
                    </li> -->
                    <li>
                        <a href="https://demo-lookincasino.com/mobile-prototype/home/">
                            Главная
                        </a>
                    </li>
                    <li>
                        <a href="https://demo-lookincasino.com/mobile-prototype/news/">
                            Новости
                        </a>
                    </li>
                    <li>
                        <a href="https://demo-lookincasino.com/mobile-prototype/casino-review/">
                            Обзор казино
                        </a>
                    </li>
                    <li>
                        <a href="https://demo-lookincasino.com/mobile-prototype/casino-rating/">
                            Рейтинг казино
                        </a>
                    </li>
                    <li>
                        <a href="https://demo-lookincasino.com/mobile-prototype/poker/">
                            Покер
                        </a>
                    </li>
                    <li>
                        <a href="https://demo-lookincasino.com/mobile-prototype/calendar/">
                            Календарь событий
                        </a>
                        <ol>
                            <li>
                                <a href="https://demo-lookincasino.com/mobile-prototype/calendar-event/">
                                    Одно событие
                                </a>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/">
                            Индивидуальная страница казино
                        </a>
                        <ol>
                            <li>
                                <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino-casino/">
                                    Казино
                                </a>
                            </li>
                            <li class="active">
                                <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino-hotel/" class="active">
                                    Отель
                                </a>
                            </li>
                            <li>
                                <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino-restaurant/">
                                    Ресторан
                                </a>
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
        </header>

        <main class="content">
            <section class="block-slider-banner" style="background-image: url('https://demo-lookincasino.com/mobile-prototype/img/dummy/individual-casino-banner.jpg');">
                <div class="overlay"></div>
                <div class="controls">
                    <a href="/" class="return">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" class=""></path></svg>
                    </a>
                    <div class="block-title banner-title">
                        Отель
                    </div>
                    <a href="/" class="search">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path></svg>
                    </a>
                </div>
                <div class="rating-indicators">                                            
                    <div class="stat-item">
                        <div class="circle bg-tr" data-percent="84" data-color="#82ff17"></div>
                        <div class="title green">
                            Рейтинг Игроков
                        </div>
                        <a href="/" class="button transparent order-tour-link">
                            Забронировать тур
                        </a>
                    </div>
                    <div class="stat-item">
                        <div class="circle bg-tr" data-percent="93" data-color="#e3d107"></div>
                        <div class="title yellow">
                            Рейтинг Сайта
                        </div>
                        <a href="/" class="button transparent consult-link">
                            Задать вопрос
                        </a>
                    </div>
                </div>
            </section>

            <section class="block block-about-casino block-about-hotel">
                <div class="info-group">
                    <div class="wrap">
                        <div class="block-title">
                            Запланируйте свой отдых
                        </div>
                        <div class="info-group-content">
                            <div class="filter block-services-order">
                                <form class="order-group order-form">
                                    <div class="input-group date-input-group date-start">
                                        <div class="input-group-selected">
                                            <div class="date-title">
                                                Заезд
                                            </div>
                                            <div class="date-selected-value-group">
                                                <span class="date-value">чт, 19.09</span>
                                                <!-- <span class="time-value">10:00</span> -->
                                            </div>
                                        </div>
                                        <div class="input-group-dropdown date-calendar-dropdown date-calendar-dropdown-double">
                                            <div class="calendar-items">
                                                <input type="text" class="date-range" hidden="hidden" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group date-input-group date-finish">
                                        <div class="input-group-selected">
                                            <div class="date-title">
                                                Отъезд
                                            </div>
                                            <div class="date-selected-value-group">
                                                <span class="date-value">чт, 19.09</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group client-amount-selector hotel-clients-amount">
                                        <div class="input-group-selected client-amount-selected">
                                            <span class="client-selected-amount-value">
                                                <span
                                                class="adults-value"
                                                data-title-one-adult="Взрослый"
                                                data-title-adults="Взрослых"
                                                >
                                                    1 взрослый
                                                </span>
                                                <span
                                                    class="children-value"
                                                    data-title-nochild = "Без детей"
                                                    data-title-child = "Ребенок"
                                                    data-title-children = "Детей"
                                                >
                                                Без детей
                                                </span>
                                            </span>
                                            <span
                                                class="rooms-value"
                                                data-title-one-room="Номер"
                                                data-title-two-rooms="Номера"
                                                data-title-three-rooms="Номера"
                                                data-title-four-rooms="Номера"
                                                data-title-more-four-rooms="Номеров"
                                            >
                                            1 номер
                                            </span>
                                        </div>
                                        <div class="input-group-dropdown client-amount-dropdown">
                                            <div class="client-amount-group">
                                                <div class="client-amount-selector-buttons">
                                                    <div class="amount-selector-button-group clients-button-group adults-button-group">
                                                        <div class="group-title">
                                                            Взрослые
                                                        </div>
                                                        <div class="amount-selector-button ">
                                                            <div class="amount-number-control amount-number-decrease disabled">
                                                                -
                                                            </div>
                                                            <input class="amount-number-input" type="number" value="1" min="1" max="10" name="">
        
                                                            <div class="amount-number-control amount-number-increase">
                                                                +
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="amount-selector-button-group clients-button-group children-button-group">
                                                        <div class="group-title">
                                                            Дети
                                                        </div>
                                                        <div class="amount-selector-button">
                                                            <div class="amount-number-control amount-number-decrease disabled">
                                                                -
                                                            </div>
                                                            <input class="amount-number-input" type="number" value="0" min="0" max="10" name="">
        
                                                            <div class="amount-number-control amount-number-increase">
                                                                +
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="amount-selector-button-group rooms-button-group">
                                                        <div class="group-title">
                                                            Номера
                                                        </div>
                                                        <div class="amount-selector-button">
                                                            <div class="amount-number-control amount-number-decrease disabled">
                                                                -
                                                            </div>
                                                            <input class="amount-number-input" type="number" value="1" min="1" max="10" name="">
        
                                                            <div class="amount-number-control amount-number-increase">
                                                                +
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="client-amount-submit-buttons">
                                                    <button class="amount-submit-button amount-cancel">
                                                        Отмена
                                                    </button>
                                                    <button class="amount-submit-button amount-complete">
                                                        Готово
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="filter-controls">
                                <div class="map">
                                    <a href="/" class="map-link">
                                        На карте
                                    </a>
                                </div>
                                <div class="buttons">
                                    <a href="/" class="rating-link button grey">
                                        Рейтинг
                                    </a>
                                    <a href="/" class="check-dates-link button blue">
                                        Проверить даты
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-group">
                    <div class="info-group-content">
                        <div class="slider">
                            <div class="slide">
                                <div class="gallery-item">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gallery-item.jpg">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="gallery-item">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gallery-item.jpg">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="gallery-item">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gallery-item.jpg">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="gallery-item">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gallery-item.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-group">
                    <div class="wrap">
                        <div class="info-group-title">
                            Общие сведения
                        </div>
                        <div class="info-group-content">
                            <div class="general-info">
                                <div class="hotel-details">
                                    <div class="hotel-logo">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/eclipse-logo.svg">
                                    </div>
                                    <div class="hotel-rate">
                                        <div class="rate-and-stars">
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((4.6 * 13px) + (4 * 4px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/mobile-prototype/reviews/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                    </div>
                                    <div class="hotel-class">
                                        <div class="hotel-class-title">
                                            Класс отеля
                                            <i class="icon fas fa-question-circle"></i>
                                        </div>
                                        <div class="rate-and-stars">
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate bluelight stars-rate-current" style="width: calc((3.5 * 13px) + (3 * 4px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-class-value">3.5/5</div>
                                    </div>
                                </div>
                                <div class="hotel-params">
                                    <div class="parameter">
                                        <div class="parameter-title">
                                            Расположение
                                        </div>
                                        <div class="parameter-value">
                                            4.9
                                        </div>
                                        <div class="parameter-bar">
                                            <div class="parameter-strip" style="width: calc(4.9 * 20%)"></div>
                                        </div>
                                    </div>
                                    <div class="parameter">
                                        <div class="parameter-title">
                                            Чистота
                                        </div>
                                        <div class="parameter-value">
                                            4.7
                                        </div>
                                        <div class="parameter-bar">
                                            <div class="parameter-strip" style="width: calc(4.7 * 20%)"></div>
                                        </div>
                                    </div>
                                    <div class="parameter">
                                        <div class="parameter-title">
                                            Обслуживание
                                        </div>
                                        <div class="parameter-value">
                                            4.5
                                        </div>
                                        <div class="parameter-bar">
                                            <div class="parameter-strip" style="width: calc(4.5 * 20%)"></div>
                                        </div>
                                    </div>
                                    <div class="parameter">
                                        <div class="parameter-title">
                                            Цена/качество
                                        </div>
                                        <div class="parameter-value">
                                            4.3
                                        </div>
                                        <div class="parameter-bar">
                                            <div class="parameter-strip" style="width: calc(4.3 * 20%)"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hotel-attributes">
                                    <div class="attr-item">
                                        <div class="attr-title">
                                            Стиль отеля:
                                        </div>
                                        <div class="attr-value">
                                            <div>
                                                Тихий
                                            </div>
                                            <div>
                                                По умеренной цене
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attr-item">
                                        <div class="attr-title">
                                            Персонал говорит:
                                        </div>
                                        <div class="attr-value">
                                            <div>
                                                на турецком
                                            </div>
                                            <div>
                                                на английском
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attr-item">
                                        <div class="attr-title">
                                            Типы номеров:
                                        </div>
                                        <div class="attr-value">
                                            <div>
                                                Номера для некурящих 
                                            </div>
                                            <div>
                                                Семейные номера
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/" class="add-more-items">
                                    Открыть весь список
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-group half hotel-group">
                    <div class="wrap">
                        <div class="info-group-title">
                            Удобства в отеле
                        </div>
                        <div class="info-group-content">
                            <div class="list comfort-list">
                                <div class="item comfort-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/comfort-icon-1.svg">
                                    </div>
                                    <div class="title">
                                        Бесплатная парковка
                                    </div>
                                </div>
                                <div class="item comfort-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/comfort-icon-2.svg">
                                    </div>
                                    <div class="title">
                                        Интернет
                                    </div>
                                </div>
                                <div class="item comfort-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/comfort-icon-3.svg">
                                    </div>
                                    <div class="title">
                                        Открытый бассейн
                                    </div>
                                </div>
                                <div class="item comfort-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/comfort-icon-4.svg">
                                    </div>
                                    <div class="title">
                                        Ресторан
                                    </div>
                                </div>
                                <div class="item comfort-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/comfort-icon-5.svg">
                                    </div>
                                    <div class="title">
                                        Шведский стол
                                    </div>
                                </div>
                                <div class="item comfort-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/comfort-icon-6.svg">
                                    </div>
                                    <div class="title">
                                        Трансфер
                                    </div>
                                </div>
                                <div class="item comfort-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/comfort-icon-7.svg">
                                    </div>
                                    <div class="title">
                                        Прокат велосипедов
                                    </div>
                                </div>
                                <div class="item comfort-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/comfort-icon-8.svg">
                                    </div>
                                    <div class="title">
                                        Бар/лаунж
                                    </div>
                                </div>
                                <div class="item comfort-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/comfort-icon-9.svg">
                                    </div>
                                    <div class="title">
                                        Услуги няни
                                    </div>
                                </div>
                                <div class="item comfort-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/comfort-icon-10.svg">
                                    </div>
                                    <div class="title">
                                        Бар у басейна
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-group half room-group">
                    <div class="wrap">
                        <div class="info-group-title">
                            В номере
                        </div>
                        <div class="info-group-content">
                            <div class="list room-feature-list">
                                <div class="item feature-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/room-icon-1.svg">
                                    </div>
                                    <div class="title">
                                        Номера для некурящих
                                    </div>
                                </div>
                                <div class="item feature-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/room-icon-2.svg">
                                    </div>
                                    <div class="title">
                                        Отдельный балкон
                                    </div>
                                </div>
                                <div class="item feature-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/room-icon-3.svg">
                                    </div>
                                    <div class="title">
                                        Мини-кухня
                                    </div>
                                </div>
                                <div class="item feature-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/room-icon-4.svg">
                                    </div>
                                    <div class="title">
                                        Кухонная утварь
                                    </div>
                                </div>
                                <div class="item feature-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/room-icon-5.svg">
                                    </div>
                                    <div class="title">
                                        Кондиционер
                                    </div>
                                </div>
                                <div class="item feature-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/room-icon-6.svg">
                                    </div>
                                    <div class="title">
                                        Сейф
                                    </div>
                                </div>
                                <div class="item feature-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/room-icon-7.svg">
                                    </div>
                                    <div class="title">
                                        Холодильник
                                    </div>
                                </div>
                                <div class="item feature-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/room-icon-8.svg">
                                    </div>
                                    <div class="title">
                                        ТВ с плоским экраном
                                    </div>
                                </div>
                                <div class="item feature-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/room-icon-9.svg">
                                    </div>
                                    <div class="title">
                                        Фен
                                    </div>
                                </div>
                                <div class="item feature-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/room-icon-10.svg">
                                    </div>
                                    <div class="title">
                                        Ванная комната
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="block block-checkin-terms">
                <div class="block-title">
                    Условия размещения
                </div>
                <div class="slider">
                    <div class="slide">
                        <div class="term-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/term-icon-1.svg">
                            </div>
                            <div class="title double">
                                <span>Заезд:</span>
                                <span>Выезд:</span>
                            </div>
                            <div class="descr double">
                                <span>
                                    до 14:00
                                </span>
                                <span>
                                    до 12:00
                                </span>
                            </div>
                            <a href="/" class="link">    
                                Подробнее ›
                            </a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="term-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/term-icon-2.svg">
                            </div>
                            <div class="title">
                                Отмена бронирования
                            </div>
                            <div class="descr">
                                При отмене бронирования<br>
                                оплата не возвращается.
                            </div>
                            <a href="/" class="link">    
                                Подробнее ›
                            </a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="term-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/term-icon-3.svg">
                            </div>
                            <div class="title">
                                Предоплата
                            </div>
                            <div class="descr">
                                Правила предоплаты зависят <br>
                                от категории апартаментов.
                            </div>
                            <a href="/" class="link">    
                                Подробнее ›
                            </a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="term-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/term-icon-4.svg">
                            </div>
                            <div class="title">
                                Кровати для детей
                            </div>
                            <div class="descr">
                                Разрешается проживание <br>
                                детей любого возраста.
                            </div>
                            <a href="/" class="link">    
                                Подробнее ›
                            </a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="term-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/term-icon-5.svg">
                            </div>
                            <div class="title">
                                Без возрастных ограничений
                            </div>
                            <div class="descr">
                                Для заезда <br>
                                нет ограничений по возрасту
                            </div>
                            <a href="/" class="link">    
                                Подробнее ›
                            </a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="term-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/term-icon-6.svg">
                            </div>
                            <div class="title">
                                Способы оплаты
                            </div>
                            <div class="descr">
                                Этот объект размещения <br>
                                принимает только наличные.
                            </div>
                            <a href="/" class="link">    
                                Подробнее ›
                            </a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="term-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/term-icon-7.svg">
                            </div>
                            <div class="title">
                                Курение
                            </div>
                            <div class="descr">
                                Курение <br>запрещено.
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="term-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/term-icon-8.svg">
                            </div>
                            <div class="title">
                                Домашние животные
                            </div>
                            <div class="descr">
                                Размещение домашних <br>
                                животных не допускается.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block-special-offers">
                <div class="block-head">
                    <div class="block-title">
                        Специальные предложения
                    </div>
                </div>
                <div class="slider">
                    <div class="slide">
                        <a href="/" class="offer-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Заголовок про специальное предложение от Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="offer-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Заголовок про специальное предложение от Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="offer-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Заголовок про специальное предложение от Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="offer-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Заголовок про специальное предложение от Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="block block-faq">
                <div class="wrap">
                    <div class="block-head">
                        <div class="block-title">
                            Hotel Eclipse: часто <br>
                            задаваемые вопросы
                        </div>
                    </div>
                    <div class="faq-list">
                        <div class="faq-item">
                            <div class="question">
                                Какие номера можно забронировать в Hotel Eclipse?
                            </div>
                            <div class="answer">
                                <div class="answer-inner">
                                    Ответ на часто задаваемый вопрос об отеле Эклипс
                                    Ответ на часто задаваемый вопрос об отеле Эклипс
                                    Ответ на часто задаваемый вопрос об отеле Эклипс
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="question">
                                Во сколько в Hotel Eclipse заезд и отъезд?
                            </div>
                            <div class="answer">
                                <div class="answer-inner">
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="question">
                                Есть ли в Hotel Eclipse парковка?
                            </div>
                            <div class="answer">
                                <div class="answer-inner">
                                Ответ на часто задаваемый вопрос об отеле Эклипс
                                Ответ на часто задаваемый вопрос об отеле Эклипс
                                Ответ на часто задаваемый вопрос об отеле Эклипс
                                Ответ на часто задаваемый вопрос об отеле Эклипс
                                Ответ на часто задаваемый вопрос об отеле Эклипс
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="question">
                                Есть ли в Hotel Eclipse ресторан?
                            </div>
                            <div class="answer">
                                <div class="answer-inner">
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="question">
                                Сколько стоит проживание в Hotel Eclipse?
                            </div>
                            <div class="answer">
                                <div class="answer-inner">
                                Ответ на часто задаваемый вопрос об отеле Эклипс
                                Ответ на часто задаваемый вопрос об отеле Эклипс
                                Ответ на часто задаваемый вопрос об отеле Эклипс
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="question">
                                Чем можно заняться в Hotel Eclipse?
                            </div>
                            <div class="answer">
                                <div class="answer-inner">
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="question">
                                Какой завтрак подают в Hotel Eclipse?
                            </div>
                            <div class="answer">
                                <div class="answer-inner">
                                Ответ на часто задаваемый вопрос об отеле Эклипс
                                Ответ на часто задаваемый вопрос об отеле Эклипс
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="question">
                                Как добраться до Hotel Eclipse от ближайшего аэропорта?
                            </div>
                            <div class="answer">
                                <div class="answer-inner">
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                Усложнённый, более развёрнутый ответ на часто задаваемый вопрос об отеле Эклипс и казино
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block-contacts">
                <div class="wrap">
                    <div class="contacts-title">
                        Контактные данные
                    </div>
                    <div class="contacts">
                        <address class="address">
                            ул. Леха и Марии Качинских 1, Батуми, Грузия
                        </address>
                        <div class="phone-group">
                            <a href="tel:+995557110000" class="phone">
                                + 995 557 110 000
                            </a>
                            <span class="phone-annotation">
                                (круглосуточно)
                            </span>
                        </div>
                        <a href="mailto:info@lookincasino.com" class="mail">
                            info@lookincasino.com
                        </a>
                        <a href="mailto:info@eclipse.casino" class="mail">
                            info@eclipse.casino
                        </a>
                    </div>
                    <div class="location-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2982.340631810923!2d41.59797581571845!3d41.626768089083335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4067859c08b9b44f%3A0x8c7c3a4db8dd6b38!2sEclipse%20Casino!5e0!3m2!1sru!2sua!4v1582364664457!5m2!1sru!2sua" width="100%" height="290" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </section>
        </main>
        
        <footer class="footer">
            <div class="wrap">
                <a href="/" class="footer-link">
                    <div class="icon">
                        <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-search-grey.png">
                    </div>
                    <div class="title">
                        Поиск
                    </div>
                </a>
                <a href="/" class="footer-link">
                    <div class="icon">
                        <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-wishlist-grey-empty.png">
                    </div>
                    <div class="title">
                        Поездки
                    </div>
                </a>
                <a href="/" class="footer-link">
                    <div class="icon">
                        <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-favorites-grey.png">
                    </div>
                    <div class="title">
                        Закладки
                    </div>
                </a>
                <a href="/" class="footer-link">
                    <div class="icon">
                        <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-profile-grey.png">
                    </div>
                    <div class="title">
                        Профиль
                    </div>
                </a>
                <a href="/" class="footer-link">
                    <div class="icon">
                        <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-more-grey.png">
                    </div>
                    <div class="title">
                        Далее
                    </div>
                </a>
            </div>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/radialIndicator/1.4.0/radialIndicator.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


    <script src="https://demo-lookincasino.com/mobile-prototype/js/jquery.formstyler.js"></script>
    <script src="https://demo-lookincasino.com/mobile-prototype/js/main.js"></script>
    <script src="https://demo-lookincasino.com/mobile-prototype/js/filter.js"></script>
</body>
</html>