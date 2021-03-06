<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>

    <meta name="theme-color" content="#2862ac" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://demo-lookincasino.com/mobile-prototype/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/general.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/header.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/home.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/footer.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.theme.css"> -->

</head>
<body class="home-page">
    <div class="wrapper">
        <header class="header">
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
                    <li class="active">
                        <a href="url('https://demo-lookincasino.com/mobile-prototype/home/" class="active">
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
                        <a href="/">
                            Покер
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            Календарь событий
                        </a>
                        <ol>
                            <li>
                                <a href="/">
                                    Одно событие
                                </a>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <a href="/">
                            Индивидуальная страница казино
                        </a>
                        <ol>
                            <li>
                                <a href="/">
                                    Казино
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    Казино 2
                                </a>
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
            <div class="header-center">
                <div class="wrap">
                    <select class="select header-select">
                        <option selected disabled value="">Где Вы хотите играть?</option>
                        <option value="">Опции</option>
                        <option value="">Опции</option>
                        <option value="">Опции</option>
                        <option value="">Опции</option>
                        <option value="">Опции</option>
                    </select>
                    <div class="select-annotation">
                        <i class="icon fas fa-map-pin"></i>
                        Узнать, что находится поблизости
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="categories">
                    <a href="/" class="category">
                        <div class="icon">
                            <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-token-blue.png">
                        </div>
                        <div class="title">
                            Казино
                        </div>
                    </a>
                    <a href="/" class="category">
                        <div class="icon">
                            <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-card-blue.png">
                        </div>
                        <div class="title">
                            Покер клубы
                        </div>
                    </a>
                    <a href="/" class="category">
                        <div class="icon">
                            <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-ball-blue.png">
                        </div>
                        <div class="title">
                            Ставки на спорт
                        </div>
                    </a>
                    <a href="/" class="category">
                        <div class="icon">
                            <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-bed-blue.png">
                        </div>
                        <div class="title">
                            Отели
                        </div>
                    </a>
                    <a href="/" class="category">
                        <div class="icon">
                            <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-plane-blue.png">
                        </div>
                        <div class="title">
                            Авиабилеты
                        </div>
                    </a>
                    <a href="/" class="category">
                        <div class="icon">
                            <img src="https://demo-lookincasino.com/mobile-prototype/img/icon-fork-blue.png">
                        </div>
                        <div class="title">
                            Рестораны
                        </div>
                    </a>
                </div>
                <a href="/" class="more-categories">
                    Показать еще >
                </a>
            </div>
        </header>
        <main class="content">
            <section class="block block-nearest-locations-map">
                <div class="wrap">
                    <div class="block-title">
                        Исследуйте места поблизости
                    </div>
                    <div class="location-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2982.340631810923!2d41.59797581571845!3d41.626768089083335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4067859c08b9b44f%3A0x8c7c3a4db8dd6b38!2sEclipse%20Casino!5e0!3m2!1sru!2sua!4v1582364664457!5m2!1sru!2sua" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="slider-group">
                    <div class="slider-group-head">
                        <div class="slider-title">
                            Игорные заведения рядом
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
                                        211 м
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
                                        2 км
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
                                        2 км
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
                                        2 км
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
                                        2 км
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
                                        1 км
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block block-best-gambling-establishments">
                <div class="slider-group best-roulette">
                    <div class="slider-group-head">
                        <div class="slider-title">
                            Лучшие заведения <br>
                            для игры в рулетку
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
                <div class="slider-group best-bets">
                    <div class="slider-group-head">
                        <div class="slider-title">
                            Лучшие заведения <br>
                            для ставок на спорт
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
            <section class="block block-what-to-find">
                <div class="block-title">
                    Что Вам найти?
                </div>
                <div class="slider-group">
                    <div class="slider">
                        <div class="slide">
                            <a href="/" class="find-recommend-item">
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/find-recommend.png">
                                </div>
                                <div class="title">
                                    Отель
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="/" class="find-recommend-item">
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/find-recommend.png">
                                </div>
                                <div class="title">
                                    Ресторан
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="/" class="find-recommend-item">
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/find-recommend.png">
                                </div>
                                <div class="title">
                                    Развлечения
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="/" class="find-recommend-item">
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/find-recommend.png">
                                </div>
                                <div class="title">
                                    Билеты
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="/" class="find-recommend-item">
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/find-recommend.png">
                                </div>
                                <div class="title">
                                    Заголовок 1
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="/" class="find-recommend-item">
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/find-recommend.png">
                                </div>
                                <div class="title">
                                    Заголовок 2
                                </div>
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