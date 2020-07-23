<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ресторан</title>

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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
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
                            <li>
                                <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino-hotel/">
                                    Отель
                                </a>
                            </li>
                            <li class="active">
                                <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino-restaurant/" class="active">
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
                        Ресторан
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

            <section class="block block-about-casino block-about-restaurant">
                <div class="info-group">
                    <div class="wrap">
                        <div class="block-title">
                            Забронировать столик
                        </div>
                        <div class="info-group-content">
                            <div class="filter block-services-order">
                                <form class="order-group order-form">
                                    <div class="input-group geo-input-group restaurant-location">
                                        <div class="geo-input-group-title">
                                            Место:
                                        </div>
                                        <input type="text" name="" class="geo-input-group-value" placeholder="Грузия, Батуми">
                                    </div>
                                    <div class="input-group date-input-group">
                                        <div class="input-group-selected">
                                            <div class="date-title">
                                                Дата
                                            </div>
                                            <div class="date-selected-value-group">
                                                <span class="date-value">чт, 19.09</span>
                                                <!-- <span class="time-value">10:00</span> -->
                                            </div>
                                        </div>
                                        <div class="input-group-dropdown date-calendar-dropdown">
                                            <div class="calendar-item">
                                                <input type="text" class="date-calendar" hidden="hidden" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group time-input-group">
                                        <div class="input-group-selected">
                                            <div class="time-title">
                                                Время
                                            </div>
                                            <div class="date-selected-value-group">
                                                <!-- <span class="date-value">чт, 19.09</span> -->
                                                <span class="time-value">10:00</span>
                                            </div>
                                        </div>
                                        <div class="input-group-dropdown time-dropdown">
                                            <div class="time-item">
                                                <div class="time-selector-buttons">
                                                    <div class="time-selector-title">
                                                        Время:
                                                    </div>
                                                    <!-- <input type="text" hidden="hidden" /> -->
                                                    <!-- <input type="text" class="minutes-picker" hidden="hidden"/> -->
                                                    <select class="time-select hour-select">
                                                        <option value="00">00</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10" selected="selected">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                    </select>
                                                    <select class="time-select minute-select">
                                                        <option value="00" >00</option>
                                                        <option value="15" >15</option>
                                                        <option value="30" >30</option>
                                                        <option value="45" >45</option>
                                                    </select>
        
                                                </div>
                                                <div class="time-submit-buttons">
                                                    <button class="time-submit-button time-cancel">
                                                        Отмена
                                                    </button>
                                                    <button class="time-submit-button time-complete">
                                                        Готово
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <select class="input-group client-amount-selector client-amount-basic restaurant-client-amount">
                                        <option value="" selected="selected">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                    <div class="input-group geo-input-group dish-type">
                                        <div class="geo-input-group-title">
                                            Тип кухни:
                                        </div>
                                        <input type="text" name="" class="geo-input-group-value" placeholder="украинская">
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
                                    <a href="/" class="book-table-link button blue">
                                        Забронировать
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
                            О ресторане
                        </div>
                        <div class="info-group-content">
                            <div class="descr">
                                <p>
                                    В уникальной атмосфере ресторана Eclipse гурманов ждут незабываемые впечатления от изысканнейших блюд.Дизайн ресторана основан на оригинальной концепции, навеянной бездонной синевой Черного моря и золотыми лучами грузинского солнца.
                                </p>
                                <p>
                                    В этой восхитительной обстановке вам подадут изысканные блюда, которые превзойдут все ваши ожидания, ведь повара отобрали все лучшее из современной высокой кухни Грузии, Турции, Японии и Европы.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-group">
                    <div class="info-group-content">
                        <div class="restaurant-categories">
                            <div class="column">
                                <a href="/" class="category-link menu">
                                    Показать меню
                                </a>
                            </div>
                            <div class="column">
                                <a href="/" class="category-link bar">
                                    Карта бара
                                </a>
                            </div>
                            <div class="column">
                                <a href="/" class="category-link shisha">
                                    Кальяны
                                </a>
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
                                <div class="restaurant-details">
                                    <div class="restaurant-logo">
                                        <img src="https://demo-lookincasino.com/mobile-prototype/img/eclipse-logo.svg">
                                    </div>
                                    <div class="restaurant-rate">
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
                                    <div class="restaurant-certificate">
                                        <i class="icon fas fa-award"></i>
                                        Сертификат<br>
                                        качества
                                    </div>
                                </div>
                                <div class="restaurant-params">
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
                                <div class="restaurant-attributes">
                                    <div class="attr-item">
                                        <div class="attr-title">
                                            Диапазон цен:
                                        </div>
                                        <div class="attr-value">
                                            <div>
                                                $150 — $325
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attr-item">
                                        <div class="attr-title">
                                            Персонал говорит:
                                        </div>
                                        <div class="attr-value">
                                            <div>
                                                на турецком, на английском 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attr-item">
                                        <div class="attr-title">
                                            Тип кухни:
                                        </div>
                                        <div class="attr-value">
                                            <div>
                                                турецкая, средиземноморская,европейская
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attr-item">
                                        <div class="attr-title">
                                            Специализированное меню:
                                        </div>
                                        <div class="attr-value">
                                            <div>
                                                подходит для вегетарианцев,детское меню
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
            <section class="block block-calendar-events">
                <div class="slider-group-head">
                    <div class="block-title">
                        Календарь событий
                    </div>
                    <a href="/" class="all-slider-items-link">
                        Показать все
                    </a>
                </div>
                <div class="one-slide-slider slider-with-dots">
                    <div class="slide">
                        <a href="/" class="event-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Длинный заголовок <br>
                                    первого события
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="comments">
                                    1
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="event-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Длинный заголовок <br>
                                    первого события
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="comments">
                                    1
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="event-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Длинный заголовок <br>
                                    первого события
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="comments">
                                    1
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="event-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Длинный заголовок <br>
                                    первого события
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="comments">
                                    1
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="event-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Длинный заголовок <br>
                                    первого события
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="comments">
                                    1
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="event-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Длинный заголовок <br>
                                    первого события
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="comments">
                                    1
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="short-news-group">
                    <div class="short-news">
                        <a href="/" class="short-news-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-short.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Маленький заголовок первой не главной новости
                                </div>
                                <div class="date">
                                    Август 22, 2015
                                </div>
                                <div class="comments">
                                    1
                                </div>
                            </div>
                        </a>
                        <a href="/" class="short-news-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-short.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Маленький заголовок первой не главной новости
                                </div>
                                <div class="date">
                                    Август 22, 2015
                                </div>
                                <div class="comments">
                                    1
                                </div>
                            </div>
                        </a>
                        <a href="/" class="short-news-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-short.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Маленький заголовок первой не главной новости
                                </div>
                                <div class="date">
                                    Август 22, 2015
                                </div>
                                <div class="comments">
                                    1
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href="/" class="add-more-items">
                        Еще 5 событий
                    </a>
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