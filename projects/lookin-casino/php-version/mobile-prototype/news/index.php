<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>

    <meta name="theme-color" content="#2862ac" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://demo-lookincasino.com/mobile-prototype/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/general.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/header.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/slider-banner.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/news.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/footer.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.css">

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
                    <li class="active">
                        <a href="https://demo-lookincasino.com/mobile-prototype/news/" class="active">
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
                                <a href="individual-casino-hotel/">
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
            <section class="block-slider-banner" style="background-image: url('https://demo-lookincasino.com/mobile-prototype/img/dummy/news-banner.png');">
                <div class="overlay"></div>
                <div class="controls">
                    <a href="/" class="return">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" class=""></path></svg>
                    </a>
                    <div class="block-title banner-title">
                        Новости
                    </div>
                    <a href="/" class="search">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path></svg>
                    </a>
                </div>
                <div class="slider-banner">
                    <div class="slide">
                        <div class="slide-title">
                            Eclipse Casino
                        </div>
                        <div class="slide-text">
                            С 1 октября по 7 октября, каждый день, на сцене <br>
                            Eclipse Casino проходят концерты звезд российской <br>
                            эстрады и другие мероприятия.
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Eclipse Casino
                        </div>
                        <div class="slide-text">
                            С 1 октября по 7 октября, каждый день, на сцене <br>
                            Eclipse Casino проходят концерты звезд российской <br>
                            эстрады и другие мероприятия.
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Eclipse Casino
                        </div>
                        <div class="slide-text">
                            С 1 октября по 7 октября, каждый день, на сцене <br>
                            Eclipse Casino проходят концерты звезд российской <br>
                            эстрады и другие мероприятия.
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Eclipse Casino
                        </div>
                        <div class="slide-text">
                            С 1 октября по 7 октября, каждый день, на сцене <br>
                            Eclipse Casino проходят концерты звезд российской <br>
                            эстрады и другие мероприятия.
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Eclipse Casino
                        </div>
                        <div class="slide-text">
                            С 1 октября по 7 октября, каждый день, на сцене <br>
                            Eclipse Casino проходят концерты звезд российской <br>
                            эстрады и другие мероприятия.
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Eclipse Casino
                        </div>
                        <div class="slide-text">
                            С 1 октября по 7 октября, каждый день, на сцене <br>
                            Eclipse Casino проходят концерты звезд российской <br>
                            эстрады и другие мероприятия.
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block-news-main">
                <div class="slider-group-head">
                    <div class="block-title">
                        Новости
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
            <section class="block block-casino-links">
                <div class="slider">
                    <div class="slide">
                        <div class="casino-link-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-casino-link.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Eclipse Casino
                                </div>
                                <div class="location">
                                    Батуми, Грузия
                                </div>
                                <a href="/" class="link button transparent">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="casino-link-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-casino-link.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Casino 1
                                </div>
                                <div class="location">
                                    Город, Страна
                                </div>
                                <a href="/" class="link button transparent">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="casino-link-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-casino-link.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Casino 2
                                </div>
                                <div class="location">
                                    Город, Страна
                                </div>
                                <a href="/" class="link button transparent">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="casino-link-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-casino-link.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Casino 3
                                </div>
                                <div class="location">
                                    Город, Страна
                                </div>
                                <a href="/" class="link button transparent">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block-popular-videos">
                <div class="block-head">
                    <div class="block-title">
                        Популярные видео
                    </div>
                    <a href="/" class="all-slider-items-link">
                        Показать все
                    </a>
                </div>
                <div class="videos">
                    <div class="video-item" style="background-image: url(https://demo-lookincasino.com/mobile-prototype/img/dummy/news-video-big.jpg);">
                        <div class="play"></div>
                    </div>
                    <div class="video-item" style="background-image: url(https://demo-lookincasino.com/mobile-prototype/img/dummy/news-video.jpg);">
                        <div class="play"></div>
                    </div>
                    <div class="video-item" style="background-image: url(https://demo-lookincasino.com/mobile-prototype/img/dummy/news-video.jpg);">
                        <div class="play"></div>
                    </div>
                    <div class="video-item" style="background-image: url(https://demo-lookincasino.com/mobile-prototype/img/dummy/news-video.jpg);">
                        <div class="play"></div>
                    </div>
                    <div class="video-item" style="background-image: url(https://demo-lookincasino.com/mobile-prototype/img/dummy/news-video.jpg);">
                        <div class="play"></div>
                    </div>
                </div>
            </section>
            <section class="block block-top-prizes">
                <div class="slider-group-head">
                    <div class="block-title">
                        ТОП выигрышей
                    </div>
                    <a href="/" class="all-slider-items-link">
                        Показать все
                    </a>
                </div>
                <div class="slider">
                    <div class="slide">
                        <div class="top-prize-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-prize.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Ошеломительный выигрыш в Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="descr">
                                    Здесь более подробно описано то, каким образом этот человек выиграл свой первый миллион долларов
                                </div>
                                <a href="/" class="link button blue">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top-prize-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-prize.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Ошеломительный выигрыш в Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="descr">
                                    Здесь более подробно описано то, каким образом этот человек выиграл свой первый миллион долларов
                                </div>
                                <a href="/" class="link button blue">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top-prize-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-prize.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Ошеломительный выигрыш в Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="descr">
                                    Здесь более подробно описано то, каким образом этот человек выиграл свой первый миллион долларов
                                </div>
                                <a href="/" class="link button blue">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top-prize-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-prize.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Ошеломительный выигрыш в Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="descr">
                                    Здесь более подробно описано то, каким образом этот человек выиграл свой первый миллион долларов
                                </div>
                                <a href="/" class="link button blue">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top-prize-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-prize.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Ошеломительный выигрыш в Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="descr">
                                    Здесь более подробно описано то, каким образом этот человек выиграл свой первый миллион долларов
                                </div>
                                <a href="/" class="link button blue">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top-prize-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-prize.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Ошеломительный выигрыш в Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="descr">
                                    Здесь более подробно описано то, каким образом этот человек выиграл свой первый миллион долларов
                                </div>
                                <a href="/" class="link button blue">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top-prize-item">
                            <div class="photo">
                                <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/news-prize.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Ошеломительный выигрыш в Casino Eclipse
                                </div>
                                <div class="date">
                                    Август 22, 2019
                                </div>
                                <div class="descr">
                                    Здесь более подробно описано то, каким образом этот человек выиграл свой первый миллион долларов
                                </div>
                                <a href="/" class="link button blue">
                                    Подробнее
                                </a>
                            </div>
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

    <script src="https://demo-lookincasino.com/mobile-prototype/js/jquery.formstyler.js"></script>
    <script src="https://demo-lookincasino.com/mobile-prototype/js/main.js"></script>
</body>
</html>