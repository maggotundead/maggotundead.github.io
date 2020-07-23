<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Покер</title>

    <meta name="theme-color" content="#2862ac" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/general.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/header.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/slider-banner.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/poker.css">
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
                    <li class="active">
                        <a href="https://demo-lookincasino.com/mobile-prototype/poker/" class="active">
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
            <section class="block-slider-banner" style="background-image: url('https://demo-lookincasino.com/mobile-prototype/img/dummy/poker-banner.jpg');">
                <div class="overlay"></div>
                <div class="controls">
                    <a href="/" class="return">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" class=""></path></svg>
                    </a>
                    <div class="block-title banner-title">
                        Покер
                    </div>
                    <a href="/" class="search">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path></svg>
                    </a>
                </div>
                <div class="slider-banner">
                    <div class="slide">
                        <div class="slide-title">
                            Откройте для себя  лучший покер клуб
                        </div>
                        <div class="slide-text">
                            Eclipse Poker Club - это идеальная возможность насладиться конкурентным покером в Батуми в роскошной обстановке и дружеской атмосферой
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Откройте для себя  лучший покер клуб
                        </div>
                        <div class="slide-text">
                            Eclipse Poker Club - это идеальная возможность насладиться конкурентным покером в Батуми в роскошной обстановке и дружеской атмосферой
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Откройте для себя  лучший покер клуб
                        </div>
                        <div class="slide-text">
                            Eclipse Poker Club - это идеальная возможность насладиться конкурентным покером в Батуми в роскошной обстановке и дружеской атмосферой
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Откройте для себя  лучший покер клуб
                        </div>
                        <div class="slide-text">
                            Eclipse Poker Club - это идеальная возможность насладиться конкурентным покером в Батуми в роскошной обстановке и дружеской атмосферой
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block-news-main">
                <div class="slider-group-head">
                    <div class="block-title">
                        Новости покера
                    </div>
                    <div class="filter-select-container">
                        <select class="filter-select">
                            <option selected value="">
                                Все новости
                            </option>
                            <option value="">
                                селектор 2
                            </option>
                            <option value="">
                                селектор 3
                            </option>
                        </select>
                    </div>
                </div>
                <div class="slider">
                    <div class="slide">
                        <a href="/" class="main-news-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Делайте ставки: как устроена новая игорная зона в Красной Поляне
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="main-news-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Делайте ставки: как устроена новая игорная зона в Красной Поляне
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="main-news-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Делайте ставки: как устроена новая игорная зона в Красной Поляне
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="main-news-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Делайте ставки: как устроена новая игорная зона в Красной Поляне
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="main-news-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Делайте ставки: как устроена новая игорная зона в Красной Поляне
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="/" class="main-news-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-slide.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Делайте ставки: как устроена новая игорная зона в Красной Поляне
                                </div>
                                <div class="date">
                                    Август 22, 2019
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
                        Еще 5 новостей
                    </a>
                </div>
            </section>
            <section class="block block-poker-search-map">
                <div class="wrap">
                    <div class="block-title">
                        Международный поиск <br>
                        покерных клубов
                    </div>
                    <div class="filter-selectors">
                        <div class="select-group country">
                            <select>
                                <option selected disabled>Страна</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                            </select>
                        </div>
                        <div class="select-group currency">
                            <select>
                                <option selected disabled>Валюта</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                            </select>
                        </div>
                        <div class="select-group game-type">
                            <select>
                                <option selected disabled>Тип игры</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                            </select>
                        </div>
                        <div class="select-group discount">
                            <select>
                                <option selected disabled>Дискаунт</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                            </select>
                        </div>
                        <div class="select-group minbet">
                            <select>
                                <option selected disabled>Мин.ставка</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                            </select>
                        </div>
                        <div class="select-group maxbet">
                            <select>
                                <option selected disabled>Макс.ставка</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                                <option>Селектор</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="map-image-group">
                    <div class="map-canvas">
                        <div class="map-image">
                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/map-image.png">
                        </div>
                        <div class="map-items">
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" class="map-item size-1 blue" style="left: 49.8%; top: 47%; ">
                                <div class="map-item-marker">
                                    <span>Casino 1</span>
                                </div>
                            </a>
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" class="map-item size-6 blue-light" style="left: 19.7%; top: 56%;">
                                <div class="map-item-marker">
                                    <span>Casino 2</span>
                                </div>
                            </a>
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" class="map-item size-5 blue" style="left: 23.7%; top: 48%;">
                                <div class="map-item-marker ">
                                    <span>Casino 3</span>
                                </div>
                            </a>
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" class="map-item active size-3 blue-light" style="left: 56.2%; top: 37%;">
                                <div class="map-item-marker">
                                    <span>Eclipse Casino Batumi</span>
                                </div>
                            </a>
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" class="map-item size-1 blue-light popup-top-offset" style="left: 19.8%; top: 27%; ">
                                <div class="map-item-marker">
                                    <span>Casino 4</span>
                                </div>
                            </a>
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" class="map-item size-2 blue popup-right popup-top-offset" style="left: 79.8%; top: 27%; ">
                                <div class="map-item-marker">
                                    <span>Casino 5</span>
                                </div>
                            </a>
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" class="map-item size-3 blue-light popup-right popup-bottom-offset" style="left: 82.8%; top: 81%; ">
                                <div class="map-item-marker">
                                    <span>Casino 6</span>
                                </div>
                            </a>
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" class="map-item size-4 blue popup-right" style="left: 75.8%; top: 41%; ">
                                <div class="map-item-marker">
                                    <span>Casino 7</span>
                                </div>
                            </a>
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" class="map-item size-3 blue-light popup-bottom-offset" style="left: 52%; top: 82%; ">
                                <div class="map-item-marker">
                                    <span>Casino 8</span>
                                </div>
                            </a>
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" class="map-item size-3 blue popup-bottom-offset" style="left: 30%; top: 83%; ">
                                <div class="map-item-marker">
                                    <span>Casino 9</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block-best-gambling-establishments">
                <div class="slider-group best-poker">
                    <div class="slider-group-head">
                        <div class="slider-title">
                            Лучшие заведения <br>
                            для игры в покер
                        </div>
                        <a href="/" class="all-slider-items-link">
                            Показать все
                        </a>
                    </div>
                    <div class="slider">
                        <div class="slide">
                            <div class="establishment-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        Casino Eclipse
                                    </div>
                                    <div class="rating">
                                        <div class="stars-rate-group">
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
                                        <div class="rate-number">
                                            (138)
                                        </div>
                                    </div>
                                    <div class="location">
                                        <i class="icon fas fa-map-marker-alt"></i>
                                        Батуми, Грузия
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="establishment-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        Casino 1
                                    </div>
                                    <div class="rating">
                                        <div class="stars-rate-group">
                                            <div class="stars-rate grey stars-rate-max">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <div class="stars-rate yellow stars-rate-current" style="width: calc((2.6 * 13px) + (2 * 4px))">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                        </div>
                                        <div class="rate-number">
                                            (38)
                                        </div>
                                    </div>
                                    <div class="location">
                                        <i class="icon fas fa-map-marker-alt"></i>
                                        Город, Страна
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="establishment-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        Casino 2
                                    </div>
                                    <div class="rating">
                                        <div class="stars-rate-group">
                                            <div class="stars-rate grey stars-rate-max">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <div class="stars-rate yellow stars-rate-current" style="width: calc((2.6 * 13px) + (2 * 4px))">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                        </div>
                                        <div class="rate-number">
                                            (38)
                                        </div>
                                    </div>
                                    <div class="location">
                                        <i class="icon fas fa-map-marker-alt"></i>
                                        Город, Страна
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="establishment-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        Casino 3
                                    </div>
                                    <div class="rating">
                                        <div class="stars-rate-group">
                                            <div class="stars-rate grey stars-rate-max">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <div class="stars-rate yellow stars-rate-current" style="width: calc((2.6 * 13px) + (2 * 4px))">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                        </div>
                                        <div class="rate-number">
                                            (38)
                                        </div>
                                    </div>
                                    <div class="location">
                                        <i class="icon fas fa-map-marker-alt"></i>
                                        Город, Страна
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="establishment-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        Casino 4
                                    </div>
                                    <div class="rating">
                                        <div class="stars-rate-group">
                                            <div class="stars-rate grey stars-rate-max">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <div class="stars-rate yellow stars-rate-current" style="width: calc((2.6 * 13px) + (2 * 4px))">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                        </div>
                                        <div class="rate-number">
                                            (38)
                                        </div>
                                    </div>
                                    <div class="location">
                                        <i class="icon fas fa-map-marker-alt"></i>
                                        Город, Страна
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="establishment-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        Casino 5
                                    </div>
                                    <div class="rating">
                                        <div class="stars-rate-group">
                                            <div class="stars-rate grey stars-rate-max">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <div class="stars-rate yellow stars-rate-current" style="width: calc((2.6 * 13px) + (2 * 4px))">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                        </div>
                                        <div class="rate-number">
                                            (38)
                                        </div>
                                    </div>
                                    <div class="location">
                                        <i class="icon fas fa-map-marker-alt"></i>
                                        Город, Страна
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block-tournaments">
                <div class="wrap">
                    <div class="block-title">
                        Текущие и ближайшие <br>
                        серии турниров
                    </div>
                    <div class="tournaments-list">
                        <div class="tournament-items">
                            <div class="tournament-item">
                                <div class="date-title">
                                    <div class="date">
                                        19сентября - 28 октября 2019
                                    </div>
                                    <div class="title orange">
                                        Грандиозный турнир мирового уровня от Eclipse Casino 
                                    </div>
                                </div>
                                <div class="tournament-info">
                                    <div class="info-head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/eclipse-logo.svg">
                                        </div>
                                        <div class="params">
                                            <div class="title-stars-location">
                                                <div class="title">
                                                    Casino Eclipse
                                                </div>
                                                <div class="rating">
                                                    <div class="stars-rate-group">
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
                                                    <div class="rate-number">
                                                        (138)
                                                    </div>
                                                </div>
                                                <div class="location">
                                                    <i class="icon fas fa-map-marker-alt"></i>
                                                    Батуми, Грузия
                                                </div>
                                            </div>
                                            <div class="rate">
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                                <div class="rate-title">
                                                    средняя <br>
                                                    оценка
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-controls">
                                        <div class="map">
                                            <a href="/" class="map-link">
                                                На карте
                                            </a>
                                        </div>
                                        <div class="buttons">
                                            <a href="/" class="join-link button blue">
                                                Принять участие
                                            </a>
                                            <a href="/" class="rating-link button grey">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tournament-item">
                                <div class="date-title">
                                    <div class="date">
                                        19сентября - 28 октября 2019
                                    </div>
                                    <div class="title">
                                        Второй по значимости турнир от Casino 1
                                    </div>
                                </div>
                                <div class="tournament-info">
                                    <div class="info-head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/logo-dummy.svg">
                                        </div>
                                        <div class="params">
                                            <div class="title-stars-location">
                                                <div class="title">
                                                    Casino Eclipse
                                                </div>
                                                <div class="rating">
                                                    <div class="stars-rate-group">
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
                                                    <div class="rate-number">
                                                        (138)
                                                    </div>
                                                </div>
                                                <div class="location">
                                                    <i class="icon fas fa-map-marker-alt"></i>
                                                    Батуми, Грузия
                                                </div>
                                            </div>
                                            <div class="rate">
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                                <div class="rate-title">
                                                    средняя <br>
                                                    оценка
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-controls">
                                        <div class="map">
                                            <a href="/" class="map-link">
                                                На карте
                                            </a>
                                        </div>
                                        <div class="buttons">
                                            <a href="/" class="join-link button blue">
                                                Принять участие
                                            </a>
                                            <a href="/" class="rating-link button grey">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tournament-item">
                                <div class="date-title">
                                    <div class="date">
                                        19сентября - 28 октября 2019
                                    </div>
                                    <div class="title">
                                        Второй по значимости турнир от Casino 2
                                    </div>
                                </div>
                                <div class="tournament-info">
                                    <div class="info-head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/logo-dummy.svg">
                                        </div>
                                        <div class="params">
                                            <div class="title-stars-location">
                                                <div class="title">
                                                    Casino Eclipse
                                                </div>
                                                <div class="rating">
                                                    <div class="stars-rate-group">
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
                                                    <div class="rate-number">
                                                        (138)
                                                    </div>
                                                </div>
                                                <div class="location">
                                                    <i class="icon fas fa-map-marker-alt"></i>
                                                    Батуми, Грузия
                                                </div>
                                            </div>
                                            <div class="rate">
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                                <div class="rate-title">
                                                    средняя <br>
                                                    оценка
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-controls">
                                        <div class="map">
                                            <a href="/" class="map-link">
                                                На карте
                                            </a>
                                        </div>
                                        <div class="buttons">
                                            <a href="/" class="join-link button blue">
                                                Принять участие
                                            </a>
                                            <a href="/" class="rating-link button grey">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/" class="add-more-items">
                            Еще 5 казино
                        </a>
                    </div>
                </div>
            </section>
            <section class="block block-users-reviews">
                <div class="wrap">
                    <div class="block-head">
                        <div class="block-title">
                            Отзывы игроков
                        </div>
                        <div class="filter-select-container">
                            <select class="filter-select">
                                <option selected value="">
                                    По звездам
                                </option>
                                <option value="">
                                    селектор 2
                                </option>
                                <option value="">
                                    селектор 3
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="reviews-list">
                        <div class="reviews-items">
                            <div class="review-item">
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/user.jpg">
                                </div>
                                <div class="info">
                                    <div class="info-head">
                                        <div class="title">
                                            Имя Фамилия 1
                                        </div>
                                        <div class="stars-rate-group">
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
                                    <div class="info-body">
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка ...
                                        </div>
                                        <a href="/" class="read-review-link">
                                            Читать весь отзыв
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="review-item">
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/user.jpg">
                                </div>
                                <div class="info">
                                    <div class="info-head">
                                        <div class="title">
                                            Имя Фамилия 2
                                        </div>
                                        <div class="stars-rate-group">
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
                                    <div class="info-body">
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка ...
                                        </div>
                                        <a href="/" class="read-review-link">
                                            Читать весь отзыв
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="review-item">
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/user.jpg">
                                </div>
                                <div class="info">
                                    <div class="info-head">
                                        <div class="title">
                                            Имя Фамилия 3
                                        </div>
                                        <div class="stars-rate-group">
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
                                    <div class="info-body">
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка ...
                                        </div>
                                        <a href="/" class="read-review-link">
                                            Читать весь отзыв
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-buttons">
                            <a href="/" class="all-reviews-link button blue">
                                Все отзывы
                            </a>
                            <a href="/" class="add-review-link button white-blue">
                                Оставить отзыв
                            </a>
                        </div>
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