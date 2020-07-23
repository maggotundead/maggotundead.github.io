<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Событие</title>

    <meta name="theme-color" content="#2862ac" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/general.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/header.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/slider-banner.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/mobile-prototype/css/calendar.css">
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
                            <li class="active">
                                <a href="https://demo-lookincasino.com/mobile-prototype/calendar-event/" class="active">
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
            <section class="block-slider-banner" style="background-image: url('https://demo-lookincasino.com/mobile-prototype/img/dummy/calendar-event-banner.jpg');">
                <div class="overlay"></div>
                <div class="controls">
                    <a href="/" class="return">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" class=""></path></svg>
                    </a>
                    <div class="block-title banner-title">
                        Главное событие
                    </div>
                    <a href="/" class="search">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path></svg>
                    </a>
                </div>
                <div class="slider-banner">
                    <div class="slide">
                        <div class="slide-title">
                            Lior Narkis
                        </div>
                        <div class="slide-text">
                            Популярный израильский певец Lior Narkis скоро в казино Eclipse. Начало концерта  22:59. Для доступа в казино необходимо зарегистироваться на стойке регистрации
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Lior Narkis
                        </div>
                        <div class="slide-text">
                            Популярный израильский певец Lior Narkis скоро в казино Eclipse. Начало концерта  22:59. Для доступа в казино необходимо зарегистироваться на стойке регистрации
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Lior Narkis
                        </div>
                        <div class="slide-text">
                            Популярный израильский певец Lior Narkis скоро в казино Eclipse. Начало концерта  22:59. Для доступа в казино необходимо зарегистироваться на стойке регистрации
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Lior Narkis
                        </div>
                        <div class="slide-text">
                            Популярный израильский певец Lior Narkis скоро в казино Eclipse. Начало концерта  22:59. Для доступа в казино необходимо зарегистироваться на стойке регистрации
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-title">
                            Lior Narkis
                        </div>
                        <div class="slide-text">
                            Популярный израильский певец Lior Narkis скоро в казино Eclipse. Начало концерта  22:59. Для доступа в казино необходимо зарегистироваться на стойке регистрации
                        </div>
                    </div>
                </div>
            </section>

            <section class="block block-event">
                <div class="wrap">
                    <div class="event-banner-photo">
                        <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/calendar-event.jpg">
                    </div>
                    <div class="info-group">
                        <div class="info-group-title">
                            Концерт популярного <br>
                            израильского певца Lior Narkis
                        </div>
                        <div class="info-group-content">
                            <div class="date-time">
                                <div class="date">
                                    чт, 19.09.2019
                                </div>
                                <div class="time">
                                    22:30
                                </div>
                            </div>
                            <div class="location">
                                Грузия, Батуми, Eclipse Casino
                            </div>
                            <button class="button blue event-registration-button">
                                Регистрация
                            </button>
                            <div class="descr">
                                <p>
                                    Каждый месяц мы приглашаем профессиональных певцов, танцоров и музыкантов для показательного выступления. Погрузитесь в волнующую ночь с красочными костюмами, лучшими мелодиями и множеством танцев!
                                </p>
                                <p>
                                    Остановитесь, чтобы насладиться нашим великолепным казино. Расположенный на двух этажах, мы предлагаем 37 игровых столов, 163 игровых автомата, отдельный покерный клуб, три захватывающих VIP-зала и современный клуб спортивных ставок в прямом эфире!
                                </p>
                                <p>
                                    Вы также можете насладиться вкусом роскоши в ресторане Eclipse, баре Eclipse или новой летней террасе Eclipse.
                                </p>
                                <p>
                                    Если вы находитесь в Грузии, Турции, Израиле, России или Иране, Eclipse Casino ближе, чем вы думаете!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="info-group">
                        <div class="info-group-title">
                            Контактные данные
                        </div>
                        <div class="info-group-content">
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
                    </div>
                </div>
            </section>


            <section class="block block-related-events">
                <div class="slider-group">
                    <div class="slider-group-head">
                        <div class="slider-title">
                            Связанные события
                        </div>
                        <a href="/" class="all-slider-items-link">
                            Показать все
                        </a>
                    </div>
                    <div class="slider">
                        <div class="slide">
                            <div class="event-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="date-time">
                                        <div class="date">
                                            19.09.2019
                                        </div>
                                        <div class="time">
                                            22:30
                                        </div>
                                    </div>
                                    <div class="location">
                                        Грузия,<br>
                                        Батуми
                                    </div>
                                    <div class="descr">
                                        Заголовок связанного события 1 которое произойдет в будущем
                                    </div>
                                    <a href="/" class="button white-blue join-event-button">
                                        Принять участие
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="event-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="date-time">
                                        <div class="date">
                                            19.09.2019
                                        </div>
                                        <div class="time">
                                            22:30
                                        </div>
                                    </div>
                                    <div class="location">
                                        Грузия,<br>
                                        Батуми
                                    </div>
                                    <div class="descr">
                                        Заголовок связанного события 1 которое произойдет в будущем
                                    </div>
                                    <a href="/" class="button white-blue join-event-button">
                                        Принять участие
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="event-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="date-time">
                                        <div class="date">
                                            19.09.2019
                                        </div>
                                        <div class="time">
                                            22:30
                                        </div>
                                    </div>
                                    <div class="location">
                                        Грузия,<br>
                                        Батуми
                                    </div>
                                    <div class="descr">
                                        Заголовок связанного события 1 которое произойдет в будущем
                                    </div>
                                    <a href="/" class="button white-blue join-event-button">
                                        Принять участие
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="event-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="date-time">
                                        <div class="date">
                                            19.09.2019
                                        </div>
                                        <div class="time">
                                            22:30
                                        </div>
                                    </div>
                                    <div class="location">
                                        Грузия,<br>
                                        Батуми
                                    </div>
                                    <div class="descr">
                                        Заголовок связанного события 1 которое произойдет в будущем
                                    </div>
                                    <a href="/" class="button white-blue join-event-button">
                                        Принять участие
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="event-item">
                                <button class="add-to-wishlist"></button>
                                <div class="photo">
                                    <img src="https://demo-lookincasino.com/mobile-prototype/img/dummy/gambling.png">
                                </div>
                                <div class="info">
                                    <div class="date-time">
                                        <div class="date">
                                            19.09.2019
                                        </div>
                                        <div class="time">
                                            22:30
                                        </div>
                                    </div>
                                    <div class="location">
                                        Грузия,<br>
                                        Батуми
                                    </div>
                                    <div class="descr">
                                        Заголовок связанного события 1 которое произойдет в будущем
                                    </div>
                                    <a href="/" class="button white-blue join-event-button">
                                        Принять участие
                                    </a>
                                </div>
                            </div>
                        </div>
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