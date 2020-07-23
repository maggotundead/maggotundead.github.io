<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Обзор казино</title>

    <meta name="theme-color" content="#2862ac" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/general.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/header.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/slider-banner.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/casino-rating-review.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/users-reviews.css">
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
                    <li>
                        <a href="https://demo-lookincasino.com/mobile-prototype/news/">
                            Новости
                        </a>
                    </li>
                    <li class="active">
                        <a href="https://demo-lookincasino.com/mobile-prototype/casino-review/" class="active">
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
            <section class="block-slider-banner" style="background-image: url('https://demo-lookincasino.com/mobile-prototype/img/dummy/casino-review-banner.jpg');">
                <div class="overlay"></div>
                <div class="controls">
                    <a href="/" class="return">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" class=""></path></svg>
                    </a>
                    <div class="block-title banner-title">
                        Обзор казино
                    </div>
                    <a href="/" class="search">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path></svg>
                    </a>
                </div>
                <div class="slider-banner">
                    <div class="slide">
                        <div class="slide-title">
                            Полный обзор казино <br>
                            от игроков и редакции сайта
                        </div>
                        <div class="slide-text">
                            На этой странице представлены лучшие мировые <br>
                            казино. Это надежные операторы игорной <br>
                            индустрии.
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Полный обзор казино <br>
                            от игроков и редакции сайта
                        </div>
                        <div class="slide-text">
                            На этой странице представлены лучшие мировые <br>
                            казино. Это надежные операторы игорной <br>
                            индустрии.
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Полный обзор казино <br>
                            от игроков и редакции сайта
                        </div>
                        <div class="slide-text">
                            На этой странице представлены лучшие мировые <br>
                            казино. Это надежные операторы игорной <br>
                            индустрии.
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Полный обзор казино <br>
                            от игроков и редакции сайта
                        </div>
                        <div class="slide-text">
                            На этой странице представлены лучшие мировые <br>
                            казино. Это надежные операторы игорной <br>
                            индустрии.
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block-casino-list">
                <div class="wrap">
                    <div class="block-head">
                        <div class="block-title">
                            Список казино
                        </div>
                        <div class="filter-select-container">
                            <select class="filter-select">
                                <option selected value="">
                                    По названию
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
                    <div class="casino-items-list">
                        <div class="casino-items">
                            <div class="casino-item">
                                <div class="label">
                                    <i class="icon fas fa-trophy"></i>
                                    Рекомендуем! TOP 1
                                </div>
                                <div class="casino-info">
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
                                    <div class="info-body">
                                        <div class="photo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/casino-photo.jpg">
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, Пунто-Банко
                                        </div>
                                    </div>
                                    <div class="info-controls">
                                        <div class="map">
                                            <a href="/" class="map-link">
                                                На карте
                                            </a>
                                        </div>
                                        <div class="buttons">
                                            <a href="/" class="casino-link button blue">
                                                Обзор казино
                                            </a>
                                            <a href="/" class="rating-link button grey">
                                                Рейтинг казино
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="casino-item">
                                <div class="label">
                                    <i class="icon fas fa-heart"></i>
                                    Выбор редакции
                                </div>
                                <div class="casino-info">
                                    <div class="info-head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/logo-dummy.svg">
                                        </div>
                                        <div class="params">
                                            <div class="title-stars-location">
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
                                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.6 * 13px) + (3 * 4px))">
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
                                                    Страна, Город
                                                </div>
                                            </div>
                                            <div class="rate">
                                                <div class="rate-value">
                                                    3.6
                                                </div>
                                                <div class="rate-title">
                                                    средняя <br>
                                                    оценка
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-body">
                                        <div class="photo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/casino-photo.jpg">
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, Пунто-Банко
                                        </div>
                                    </div>
                                    <div class="info-controls">
                                        <div class="map">
                                            <a href="/" class="map-link">
                                                На карте
                                            </a>
                                        </div>
                                        <div class="buttons">
                                            <a href="/" class="casino-link button blue">
                                                Обзор казино
                                            </a>
                                            <a href="/" class="rating-link button grey">
                                                Рейтинг казино
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="casino-item">
                                <div class="casino-info">
                                    <div class="info-head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/logo-dummy.svg">
                                        </div>
                                        <div class="params">
                                            <div class="title-stars-location">
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
                                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.6 * 13px) + (3 * 4px))">
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
                                                    Страна, Город
                                                </div>
                                            </div>
                                            <div class="rate">
                                                <div class="rate-value">
                                                    3.6
                                                </div>
                                                <div class="rate-title">
                                                    средняя <br>
                                                    оценка
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-body">
                                        <div class="photo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/casino-photo.jpg">
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, Пунто-Банко
                                        </div>
                                    </div>
                                    <div class="info-controls">
                                        <div class="map">
                                            <a href="/" class="map-link">
                                                На карте
                                            </a>
                                        </div>
                                        <div class="buttons">
                                            <a href="/" class="casino-link button blue">
                                                Обзор казино
                                            </a>
                                            <a href="/" class="rating-link button grey">
                                                Рейтинг казино
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="casino-item">
                                <div class="casino-info">
                                    <div class="info-head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/logo-dummy.svg">
                                        </div>
                                        <div class="params">
                                            <div class="title-stars-location">
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
                                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.6 * 13px) + (3 * 4px))">
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
                                                    Страна, Город
                                                </div>
                                            </div>
                                            <div class="rate">
                                                <div class="rate-value">
                                                    3.6
                                                </div>
                                                <div class="rate-title">
                                                    средняя <br>
                                                    оценка
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-body">
                                        <div class="photo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/casino-photo.jpg">
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, Пунто-Банко
                                        </div>
                                    </div>
                                    <div class="info-controls">
                                        <div class="map">
                                            <a href="/" class="map-link">
                                                На карте
                                            </a>
                                        </div>
                                        <div class="buttons">
                                            <a href="/" class="casino-link button blue">
                                                Обзор казино
                                            </a>
                                            <a href="/" class="rating-link button grey">
                                                Рейтинг казино
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="casino-item">
                                <div class="casino-info">
                                    <div class="info-head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/logo-dummy.svg">
                                        </div>
                                        <div class="params">
                                            <div class="title-stars-location">
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
                                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.6 * 13px) + (3 * 4px))">
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
                                                    Страна, Город
                                                </div>
                                            </div>
                                            <div class="rate">
                                                <div class="rate-value">
                                                    3.6
                                                </div>
                                                <div class="rate-title">
                                                    средняя <br>
                                                    оценка
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-body">
                                        <div class="photo">
                                            <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/casino-photo.jpg">
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, Пунто-Банко
                                        </div>
                                    </div>
                                    <div class="info-controls">
                                        <div class="map">
                                            <a href="/" class="map-link">
                                                На карте
                                            </a>
                                        </div>
                                        <div class="buttons">
                                            <a href="/" class="casino-link button blue">
                                                Обзор казино
                                            </a>
                                            <a href="/" class="rating-link button grey">
                                                Рейтинг казино
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

    <script src="https://demo-lookincasino.com/mobile-prototype/js/jquery.formstyler.js"></script>
    <script src="https://demo-lookincasino.com/mobile-prototype/js/main.js"></script>
</body>
</html>