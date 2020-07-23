<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Карта</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=1280">
    <link rel="shortcut icon" href="https://demo-lookincasino.com/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />




    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/general.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/header.css">

    <!-- <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/home.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/slider-banner-homescreen.css"> -->
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/search-form.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/map.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/individual-casino.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/casino-rating-review.css"> -->


    <!-- <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/user-services-order.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/players-rating.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/users-reviews-slider.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/aside.css"> -->

    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/modal.css">
</head>
<body class="">
    
    <div class="loader" style="position: fixed; left: 0; top: 0; display: flex; align-items: center; justify-content: center; right: 0; bottom: 0; background-color: #fff; z-index: 99999;">
        <img src="https://demo-lookincasino.com/img/loader.svg">
    </div>

    <div class="wrapper">
        <header class="header">
            <div class="header-top">
                <div class="wrap">
                    <nav class="menu">
                        <a href="/" class="menu-link">
                            О нас
                        </a>
                        <a href="/" class="menu-link">
                            Помощь
                        </a>
                        <a href="/" class="menu-link">
                            Контакты
                        </a>
                    </nav>
                    <div class="select-group countries">
                        <div class="select-group-title">Страна:</div>
                        <div class="select-group-content">
                            <div class="select-group-chosen">Не выбрана</div>
                            <div class="select-group-dropdown">
                                <div class="select-group-dropdown-inner">
                                    <a href="/" class="select-group-link">
                                        Северный Кипр
                                    </a>
                                    <a href="/" class="select-group-link">Грузия</a>
                                    <a href="/" class="select-group-link">Казахстан</a>
                                    <a href="/" class="select-group-link">Украина</a>
                                    <a href="/" class="select-group-link">Белоруссия</a>
                                    <a href="/" class="select-group-link">Россия</a>
                                    <a href="/" class="select-group-link">Китай</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="select-group currency">
                        <div class="select-group-title">Валюта:</div>
                        <div class="select-group-content">
                            <div class="select-group-chosen">Не выбрана</div>
                            <div class="select-group-dropdown">
                                <div class="select-group-dropdown-inner">
                                    <a href="/" class="select-group-link">$, USD</a>
                                    <a href="/" class="select-group-link">€, EUR</a>
                                    <a href="/" class="select-group-link">₽, RUB</a>
                                    <a href="/" class="select-group-link">₺, TRY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="select-group games">
                        <div class="select-group-title">Тип игры:</div>
                        <div class="select-group-content">
                            <div class="select-group-chosen">Не выбран</div>
                            <div class="select-group-dropdown">
                                <div class="select-group-dropdown-inner">
                                    <a href="/" class="select-group-link">
                                        Все
                                    </a>
                                    <a href="/" class="select-group-link">
                                        Рулетка
                                    </a>
                                    <a href="/" class="select-group-link">
                                        Покер
                                    </a>
                                    <a href="/" class="select-group-link">
                                        Блекджек
                                    </a>
                                    <a href="/" class="select-group-link">
                                        Баккара
                                    </a>
                                    <!-- <a href="/" class="select-group-link">
                                        Пунто-Бланко
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="select-group lang">
                            <div class="select-group-content">
                                <div class="select-group-chosen">RUS</div>
                                <div class="select-group-dropdown">
                                    <div class="select-group-dropdown-inner">
                                        <a href="/" class="select-group-link">
                                            ENG
                                        </a>
                                        <a href="/" class="select-group-link">
                                            TR
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/" class="account">
                            <span>Личный кабинет</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-center">
                <div class="wrap">
                    <div class="left-column">
                        <div class="logo-group">
                            <a href="https://demo-lookincasino.com/home/" class="logo-img">
                                <img src="https://demo-lookincasino.com/img/lookin-logo.png">
                            </a>
                            <span class="logo-text">
                                Единая информационная система <br>
                                для игроков и владельцев игорного бизнеса
                            </span>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="phone-group">
                            <div class="phone-title">
                                Служба поддержки игроков
                            </div>
                            <div class="phone-descr">
                                Международный
                            </div>
                            <a href="tel:88004000000" class="phone-number">
                                8 800 400 00 00
                            </a>
                        </div>
                        <div class="links">
                            <div class="column-group">
                                <a href="/" class="column-menu-link flights">Авиабилеты</a>
                                <a href="/" class="column-menu-link residence">Проживание</a>
                            </div>
                            <div class="column-group">
                                <a href="/" class="column-menu-link booking">Бронирование игрового тура</a>
                                <a href="/" class="column-menu-link faq">Часто задаваемые вопросы</a>
                            </div>
                        </div>
                        <div class="events-slider">
                            <div class="slider-title">
                                Главные события
                            </div>
                            <div class="slider-items" id="header-events-slider">
                                <div class="slide-item">
                                    Регистрация на покерный турнир в казино Эклипс открыта <a href="https://demo-lookincasino.com/individual-casino-poker/">Принять участие »</a>
                                </div>
                                <div class="slide-item">
                                    В ресторане Эклипс казино новое меню от шеф повара <a href="https://demo-lookincasino.com/individual-casino-restaurant/">Заказать столик »</a>
                                </div>
                                <div class="slide-item">
                                    Концерт Lior Narkis в казино Эклипс <a href="https://demo-lookincasino.com/individual-casino-calendar-item/">Принять участие »</a>
                                </div>
                            </div>
                            <div class="slider-buttons">
                                <button class="slider-btn prev-slide"></button>
                                <button class="slider-btn next-slide"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom inner-page-menu">
                <div class="wrap">
                    <a class="home-link" href="https://demo-lookincasino.com/home/"></a>
                    <div class="burger-content">
                        <button class="menu-burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <nav class="burger-dropdown">
                            <a href="https://demo-lookincasino.com/individual-casino/" class="burger-menu-link">
                                Индивидуальная страница казино
                            </a>
                            <a href="https://demo-lookincasino.com/backoffice/backoffice-forplayers-mainpage/" class="burger-menu-link">
                                Бекофис для игрока
                            </a>
                            <a href="https://demo-lookincasino.com/backoffice/backoffice-forgamblings-mainpage/" class="burger-menu-link">
                                Бекофис для казино
                            </a>
                            <a href="https://demo-lookincasino.com/backoffice/backoffice-foraffiliates-mainpage/" class="burger-menu-link">
                                Бекофис для джанкетов
                            </a>
                            <a href="/" class="burger-menu-link">
                                Отели / виллы / апартаменты
                            </a>
                            <a href="/" class="burger-menu-link">
                                Рестораны
                            </a>
                            <a href="/" class="burger-menu-link">
                                Игровые туры
                            </a>
                            <a href="/" class="burger-menu-link">
                                Экскурсии и развлечения
                            </a>
                            <a href="/" class="burger-menu-link">
                                Отзывы
                            </a>
                            <a href="/" class="burger-menu-link">
                                Помощь специалиста
                            </a>
                            <a href="/" class="burger-menu-link">
                                Регистрация
                            </a>
                            <a href="/" class="burger-menu-link">
                                Вход в аккаунт
                            </a>
                            <a href="/" class="burger-menu-link">
                                Реклама
                            </a>
                            <a href="/" class="burger-menu-link">
                                Партнеры
                            </a>
                            <a href="/" class="burger-menu-link">
                                Вакансии
                            </a>
                            <a href="/" class="burger-menu-link">
                                Программа для аффилейтов
                            </a>
                            <a href="/" class="burger-menu-link">
                                Что такое Lookin Casino
                            </a>
                            <a href="/" class="burger-menu-link">
                                Правила пользования сайтом
                            </a>
                            <a href="/" class="burger-menu-link">
                                Политика конфиденциальности
                            </a>
                            <a href="/" class="burger-menu-link">
                                Контакты
                            </a>
                        </nav>
                    </div>
                    <nav class="menu">
                        <a href="https://demo-lookincasino.com/news/" class="menu-link">
                            Новости
                        </a>
                        <a href="https://demo-lookincasino.com/casino-review/" class="menu-link">
                            Обзор казино
                        </a>
                        <a href="https://demo-lookincasino.com/casino-rating/" class="menu-link">
                            Рейтинг казино
                        </a>
                        <a href="https://demo-lookincasino.com/poker/" class="menu-link">
                            Покер
                        </a>
                        <a href="https://demo-lookincasino.com/bets/" class="menu-link">
                            Ставки на спорт
                        </a>
                        <a href="https://demo-lookincasino.com/lottery/" class="menu-link">
                            Розыгрыши
                        </a>
                        <a href="https://demo-lookincasino.com/actions/" class="menu-link">
                            Акции
                        </a>
                        <a href="https://demo-lookincasino.com/calendar/" class="menu-link">
                            Календарь событий
                        </a>
                        <a href="https://demo-lookincasino.com/reviews/" class="menu-link">
                            Отзывы
                        </a>
                    </nav>
                </div>
            </div>
        </header>


        <main class="content">

            <section class="block block-search-form wide">
                <div class="wrap">
                    <div class="search-form-container">
                        <!-- <div class="search-form-head">
                            <div class="head-text">
                                <div class="search-form-title">
                                    Поиск казино по рейтингу
                                </div>
                                <div class="search-form-descr">
                                    Воспользуйтесь удобной системой бронирования. В случае возникновения вопросов, свяжитесь с нашим специалистом.
                                </div>
                            </div>
                            <button class="button help-link">
                                Нужна помощь
                            </button>
                        </div> -->
                        <form class="search-form casino-map-search-form">
                            <label class="main-search-input-label">
                                <input type="text" name="" class="main-search-input" placeholder="Введите название казино или любое ключевое слово">
                            </label>
                            <div class="select-group country">
                                <select class="select">
                                    <option selected="selected" disabled="disabled">Страна</option>
                                    <option value="">
                                        Северный Кипр
                                    </option>
                                    <option value="">
                                        Грузия
                                    </option>
                                    <option value="">
                                        Казахстан
                                    </option>
                                    <option value="">
                                        Украина
                                    </option>
                                    <option value="">
                                        Белоруссия
                                    </option>
                                    <option value="">
                                        Россия
                                    </option>
                                    <option value="">
                                        Китай
                                    </option>
                                </select>
                            </div>
                            <div class="select-group game-type">
                                <select class="select">
                                    <option selected="selected" disabled="disabled">Тип игры</option>
                                    <option value="">
                                        Все
                                    </option>
                                    <option value="">
                                        Рулетка
                                    </option>
                                    <option value="">
                                        Покер
                                    </option>
                                    <option value="">
                                        Блекджек
                                    </option>
                                    <option value="">
                                        Баккара
                                    </option>
                                    <!-- <option value="">
                                        Пунто-Банко
                                    </option> -->
                                </select>
                            </div>
                            <div class="select-group currency">
                                <select class="select">
                                    <option selected="selected" disabled="disabled">Валюта</option>
                                    <option value="">
                                        USD
                                    </option>
                                    <option value="">
                                        EUR
                                    </option>
                                    <option value="">
                                        RUB
                                    </option>
                                    <option value="">
                                        TRY
                                    </option>
                                </select>
                            </div>
                            <div class="select-group minbet">
                                <select class="select">
                                    <option selected="selected" disabled="disabled">Минимальная ставка</option>
                                    <option value="">
                                        5
                                    </option>
                                    <option value="">
                                        10
                                    </option>
                                    <option value="">
                                        20
                                    </option>
                                    <option value="">
                                        50
                                    </option>
                                </select>
                            </div>
                            <div class="select-group maxbet">
                                <select class="select">
                                    <option selected="selected" disabled="disabled">Максимальная ставка</option>
                                    <option value="">
                                        100
                                    </option>
                                    <option value="">
                                        500
                                    </option>
                                    <option value="">
                                        1000
                                    </option>
                                </select>
                            </div>
                            <div class="select-group discount">
                                <select class="select">
                                    <option selected="selected" disabled="disabled">Дискаунт</option>
                                    <option value="">
                                        5%
                                    </option>
                                    <option value="">
                                        10%
                                    </option>
                                    <option value="">
                                        15%
                                    </option>
                                    <option value="">
                                        20%
                                    </option>
                                </select>
                            </div>
                            <button class="submit-button" type="submit"></button>
                        </form>
                    </div>
                </div>
            </section>

            <section class="block block-casino-items-map">
                <div class="wrap">
                    <div class="casino-items-list">
                        <div class="casino-item">
                            <div class="item-column">
                                <div class="logo">
                                    <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                </div>
                                <div class="title orange">
                                    Eclipse Casino
                                </div>
                                <div class="location">
                                    Грузия, Батуми
                                </div>
                            </div>
                            <div class="item-column">
                                <button class="map-link">
                                    Показать на карте
                                </button>
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
                                        <div class="stars-rate white stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((4.6 * 12px) + (4 * 7px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://demo-lookincasino.com/individual-casino-reviews/" class="reviews-link">
                                    <span class="value">138</span>
                                    <span>отзывов ›</span>
                                </a>
                            </div>

                            <div class="buttons">
                                <a href="https://demo-lookincasino.com/casino-review/" class="button blue casino-item-link">
                                    Обзор казино
                                </a>
                                <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-item-review">
                                    Рейтинг казино
                                </a>
                            </div>
                            <div class="id-label">
                                ID: <span>001</span>
                            </div>
                        </div>
                        <div class="casino-item">
                            <div class="item-column">
                                <div class="logo">
                                    <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                </div>
                                <div class="title">
                                    Casino 1
                                </div>
                                <div class="location">
                                    Страна, адрес
                                </div>
                            </div>
                            <div class="item-column">
                                <button class="map-link">
                                    Показать на карте
                                </button>
                                <div class="rate-and-stars">
                                    <div class="rate-value-group">
                                        <div class="rate-title">
                                            средняя<br>
                                            оценка
                                        </div>
                                        <div class="rate-value">
                                            3.8
                                        </div>
                                    </div>
                                    <div class="item-stars stars-rate-group">
                                        <div class="stars-rate white stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.8 * 12px) + (3 * 7px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://demo-lookincasino.com/individual-casino-reviews/" class="reviews-link">
                                    <span class="value">5</span>
                                    <span>отзывов ›</span>
                                </a>
                            </div>

                            <div class="buttons">
                                <a href="https://demo-lookincasino.com/casino-review/" class="button blue casino-item-link">
                                    Обзор казино
                                </a>
                                <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-item-review">
                                    Рейтинг казино
                                </a>
                            </div>
                            <div class="id-label">
                                ID: <span>002</span>
                            </div>
                        </div>
                        <div class="casino-item">
                            <div class="item-column">
                                <div class="logo">
                                    <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                </div>
                                <div class="title">
                                    Casino 2
                                </div>
                                <div class="location">
                                    Страна, адрес
                                </div>
                            </div>
                            <div class="item-column">
                                <button class="map-link">
                                    Показать на карте
                                </button>
                                <div class="rate-and-stars">
                                    <div class="rate-value-group">
                                        <div class="rate-title">
                                            средняя<br>
                                            оценка
                                        </div>
                                        <div class="rate-value">
                                            2.6
                                        </div>
                                    </div>
                                    <div class="item-stars stars-rate-group">
                                        <div class="stars-rate white stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((2.6 * 12px) + (2 * 7px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://demo-lookincasino.com/individual-casino-reviews/" class="reviews-link">
                                    <span class="value">38</span>
                                    <span>отзывов ›</span>
                                </a>
                            </div>

                            <div class="buttons">
                                <a href="https://demo-lookincasino.com/casino-review/" class="button blue casino-item-link">
                                    Обзор казино
                                </a>
                                <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-item-review">
                                    Рейтинг казино
                                </a>
                            </div>
                            <div class="id-label">
                                ID: <span>003</span>
                            </div>
                        </div>
                        <div class="casino-item">
                            <div class="item-column">
                                <div class="logo">
                                    <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                </div>
                                <div class="title">
                                    Casino 3
                                </div>
                                <div class="location">
                                    Страна, адрес
                                </div>
                            </div>
                            <div class="item-column">
                                <button class="map-link">
                                    Показать на карте
                                </button>
                                <div class="rate-and-stars">
                                    <div class="rate-value-group">
                                        <div class="rate-title">
                                            средняя<br>
                                            оценка
                                        </div>
                                        <div class="rate-value">
                                            3.6
                                        </div>
                                    </div>
                                    <div class="item-stars stars-rate-group">
                                        <div class="stars-rate white stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.6 * 12px) + (3 * 7px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://demo-lookincasino.com/individual-casino-reviews/" class="reviews-link">
                                    <span class="value">13</span>
                                    <span>отзывов ›</span>
                                </a>
                            </div>

                            <div class="buttons">
                                <a href="https://demo-lookincasino.com/casino-review/" class="button blue casino-item-link">
                                    Обзор казино
                                </a>
                                <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-item-review">
                                    Рейтинг казино
                                </a>
                            </div>
                            <div class="id-label">
                                ID: <span>004</span>
                            </div>
                        </div>
                        <div class="casino-item">
                            <div class="item-column">
                                <div class="logo">
                                    <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                </div>
                                <div class="title">
                                    Casino 4
                                </div>
                                <div class="location">
                                    Страна, адрес
                                </div>
                            </div>
                            <div class="item-column">
                                <button class="map-link">
                                    Показать на карте
                                </button>
                                <div class="rate-and-stars">
                                    <div class="rate-value-group">
                                        <div class="rate-title">
                                            средняя<br>
                                            оценка
                                        </div>
                                        <div class="rate-value">
                                            4.0
                                        </div>
                                    </div>
                                    <div class="item-stars stars-rate-group">
                                        <div class="stars-rate white stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((4.0 * 12px) + (4 * 7px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://demo-lookincasino.com/individual-casino-reviews/" class="reviews-link">
                                    <span class="value">18</span>
                                    <span>отзывов ›</span>
                                </a>
                            </div>

                            <div class="buttons">
                                <a href="https://demo-lookincasino.com/casino-review/" class="button blue casino-item-link">
                                    Обзор казино
                                </a>
                                <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-item-review">
                                    Рейтинг казино
                                </a>
                            </div>
                            <div class="id-label">
                                ID: <span>005</span>
                            </div>
                        </div>
                    </div>
                    <div class="casino-items-map" id="casino-items-map"></div>
                </div>
            </section>

        </main>
        <footer class="footer">
            <div class="footer-top">
                <div class="wrap">
                    <div class="footer-column left">
                        <p>
                            Разработчик: Маркетинговое агентство B2B Gambling www.b2bgambling.ru Lookin Casino является зарегистрированным брендом и торговой маркой компании Agarta Enterprises Ltd № MC 21071 / KKTC / Girne / www.agartaltd.com.
                        </p>
                        <p>
                            Свои вопросы и пожелания по сотрудничеству <br>
                            Вы можете задавать: <a href="mailto:info@lookincasino.com">info@lookincasino.com</a>
                        </p>
                        <p>
                            Сайт регулируется исходя от Федерального закона от 29.12.2006 №244-Ф3 (ред.от 01.05.2016) О государственном регулировании деятельности по организации и проведению азартных игр и о внесении изменений в некоторые законодательные акты Российской Федерации.
                        </p>
                        <div class="socials">
                            <a href="/" target="_blank" rel="nofollow" class="social fb"></a>
                            <a href="/" target="_blank" rel="nofollow" class="social insta"></a>
                            <a href="/" target="_blank" rel="nofollow" class="social telegram"></a>
                            <a href="/" target="_blank" rel="nofollow" class="social twitter"></a>
                            <a href="/" target="_blank" rel="nofollow" class="social vk"></a>
                            <a href="/" target="_blank" rel="nofollow" class="social youtube"></a>
                        </div>
                    </div>
                    <div class="footer-column right">
                        <div class="subscribe-form">
                            <div class="form-title">
                                Сэкономьте время и деньги!
                            </div>
                            <div class="form-descr">
                                Подпишитесь, и мы вышлем Вам лучшие предложения
                            </div>
                            <form class="form" method="POST">
                                <label class="input-label">
                                    <input type="text" name="" class="input" placeholder="Ваш Email">
                                </label>
                                <button type="submit" class="button submit-button">
                                    Подписаться
                                </button>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="" class="checkbox-default" hidden="hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">
                                        Отправить мне ссылку для загрузки БЕСПЛАТНОГО приложения Lookin Casino
                                    </span>
                                </label>
                            </form>
                        </div>
                        <div class="brand-about">
                            <div class="brand-about-text">
                                © Agarta Enterprises Ltd, 2019 г. Все права защищены. <br>
                                Любое копирование информации, должно сопровождаться ссылкой на источник. <br>
                                Agarta Enterprises Ltd  не является службой бронирования и не взимает плату за услуги с пользователей своего сайта. Компания Agarta Enterprises Ltd не несет ответственности за содержимое внешних сайтов. В специальных предложениях не указаны налоги и сборы.
                            </div>

                            <div class="brand-logo gambling">
                                <img src="https://demo-lookincasino.com/img/gambling-logo.png">
                            </div>
                            <div class="brand-logo agarta">
                                <img src="https://demo-lookincasino.com/img/agarta-logo.png">
                            </div>
                            <div class="langs">
                                <span class="current-lang">RUS</span>
                                <div class="langs-dropdown">
                                    <a href="/" class="lang-link">ENG</a>
                                    <a href="/" class="lang-link">TUR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="wrap">
                    <span>
                        Единственная в мире платформа с информацией для игроков казино. Lookin Casino ежемесячно помогает сделать каждое посещение в казино незабываемым. Просматривайте тысячи отзывов и мнений о казино, отелях, ресторанах, развлечениях, авиакомпаниях и круизах на веб-сайте и в приложении Lookin Casino. На этапе планирования игрового тура обращаются к Lookin Casino, чтобы сравнивать условия казино, цены на отели, авиабилеты и круизы. Приобрести популярные экскурсии и билеты на посещение знаменитых достопримечательностей, а также резервировать столики в превосходных ресторанах. Lookin Casino, незаменимый помощник для игроков, доступен в 25 странах на 7 языках.

                    </span>
                </div>
            </div>
        </footer>
    </div>

    <div class="modal" id="modal-video">
        <div class="modal-overlay"></div>
        <div class="modal-body">
            <button class="modal-close">×</button>
            <div class="video">
                <iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="modal modal-auth" id="modal-login">
        <div class="modal-overlay"></div>
        <div class="modal-body">
            <button class="modal-close"></button>
            <div class="body-title">
                Вход
            </div>
            <div class="social-auth">
                <div class="social-auth-title">
                    Вход с помощью
                </div>
                <div class="socials">
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-fb.jpg">
                    </a>
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-google.jpg">
                    </a>
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-twitter.jpg">
                    </a>
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-vk.jpg">
                    </a>
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-yandex.jpg">
                    </a>
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-ok.jpg">
                    </a>
                </div>
            </div>
            <div class="separator">
                <span>или</span>
            </div>
            <form class="form">
                <label class="input-label">
                    <input type="text" name="" class="input" placeholder="E-mail">
                </label>
                <label class="input-label">
                    <input type="text" name="" class="input" placeholder="Пароль">
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="" class="checkbox-default" hidden="hidden">
                    <span class="checkbox-custom"></span>
                    <span class="checkbox-text">
                        Запомнить меня
                    </span>
                </label>
                <a href="/" class="forgot-password">
                    Забыли пароль?
                </a>
                <button type="submit" class="button blue submit-button">
                    Войти
                </button>
            </form>
            <a href="/" class="modal-auth-link modal-registration-button">
                Регистрация
            </a>
        </div>
    </div>

    <div class="modal modal-auth" id="modal-registration">
        <div class="modal-overlay"></div>
        <div class="modal-body">
            <button class="modal-close"></button>
            <div class="body-title">
                Регистрация
            </div>
            <div class="social-auth">
                <div class="social-auth-title">
                    Регистрация с помощью
                </div>
                <div class="socials">
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-fb.jpg">
                    </a>
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-google.jpg">
                    </a>
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-twitter.jpg">
                    </a>
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-vk.jpg">
                    </a>
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-yandex.jpg">
                    </a>
                    <a href="/" class="social">
                        <img src="https://demo-lookincasino.com/img/social-ok.jpg">
                    </a>
                </div>
            </div>
            <div class="separator">
                <span>или</span>
            </div>
            <form class="form">
                <label class="input-label">
                    <input type="text" name="" class="input" placeholder="Имя">
                </label>
                <label class="input-label">
                    <input type="text" name="" class="input" placeholder="Фамилия">
                </label>
                <label class="input-label">
                    <input type="text" name="" class="input" placeholder="E-mail">
                </label>
                <label class="input-label">
                    <input type="text" name="" class="input" placeholder="Пароль">
                </label>
                <label class="checkbox-label">
                    <input type="checkbox" name="" class="checkbox-default" hidden="hidden">
                    <span class="checkbox-custom"></span>
                    <span class="checkbox-text">
                        Я согласен с <a href="/">Условиями использования <br>сайта</a>, <a href="/">Политикой конфиденциальности</a><br> и на обработку персональных данных
                    </span>
                </label>
                <!-- <a href="/" class="forgot-password">
                    Забыли пароль?
                </a> -->
                <button type="submit" class="button blue submit-button">
                    Зарегистрироваться
                </button>
            </form>
            <a href="/" class="modal-auth-link modal-login-button">
                Вход на сайт
            </a>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/radialIndicator/1.4.0/radialIndicator.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyAn1V1UtM1AQ-VbkRBJ7cFwoQNc3jfUXSU"></script>

    <script type="text/javascript" src="https://demo-lookincasino.com/js/jquery.formstyler.js"></script>
    <script type="text/javascript" src="https://demo-lookincasino.com/js/main.js"></script>
    <script type="text/javascript" src="https://demo-lookincasino.com/js/maps.js"></script>
    <script type="text/javascript" src="https://demo-lookincasino.com/js/service-filter.js"></script>

</body>
</html>