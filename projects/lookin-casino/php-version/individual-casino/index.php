<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Индивидуальная страница казино</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=1280">
    <link rel="shortcut icon" href="https://demo-lookincasino.com/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/general.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/header.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/slider-banner-homescreen.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/individual-casino.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/user-services-order.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/users-reviews-slider.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/aside.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/modal.css">





    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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

            <!-- <div class="breadcrumbs">
                <div class="wrap">
                    <a href="/" class="parent-link">Главная</a>
                    >
                    <span class="current-page">Казино Eclipse</span>
                </div>
            </div> -->

            <section class="block block-banner-slider" style="background-image: url('https://demo-lookincasino.com/img/one-casino-banner.jpg');">
                <div class="wrap">
                    <div class="banner-slider" id="banner-slider">
                        <div class="slide">
                            <div class="slide-content">
                                <div class="casino-logo">
                                    <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                    <span>
                                        ECLIPSE Casino
                                    </span>
                                </div>
                                <div class="casino-stats">
                                    <div class="stat-item green">
                                        <div class="circle" data-percent="84" data-color="#82ff17">
                                            <!-- <span>84%</span> -->
                                        </div>
                                        <div class="title">
                                            Рейтинг Игроков
                                        </div>
                                        <button class="button transparent">
                                            Бронирование тура
                                        </button>
                                    </div>
                                    <div class="stat-item yellow">
                                        <div class="circle" data-percent="93" data-color="#e3d107">
                                            <!-- <span>93%</span> -->
                                        </div>
                                        <div class="title">
                                            Рейтинг Сайта
                                        </div>
                                        <button class="button transparent">
                                            Сообщение
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-content">
                                <div class="casino-logo">
                                    <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                    <span>
                                        <strong>ECLIPSE</strong> Casino
                                    </span>
                                </div>
                                <div class="casino-stats">
                                    <div class="stat-item green">
                                        <div class="circle" data-percent="44" data-color="#82ff17">
                                            <!-- <span>84%</span> -->
                                        </div>
                                        <div class="title">
                                            Рейтинг Игроков
                                        </div>
                                        <button class="button transparent">
                                            Бронирование тура
                                        </button>
                                    </div>
                                    <div class="stat-item yellow">
                                        <div class="circle" data-percent="63" data-color="#e3d107">
                                            <!-- <span>93%</span> -->
                                        </div>
                                        <div class="title">
                                            Рейтинг Сайта
                                        </div>
                                        <button class="button transparent">
                                            Сообщение
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-content">
                                <div class="casino-logo">
                                    <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                    <span>
                                        <strong>ECLIPSE</strong> Casino
                                    </span>
                                </div>
                                <div class="casino-stats">
                                    <div class="stat-item green">
                                        <div class="circle" data-percent="57" data-color="#82ff17">
                                            <!-- <span>84%</span> -->
                                        </div>
                                        <div class="title">
                                            Рейтинг Игроков
                                        </div>
                                        <button class="button transparent">
                                            Бронирование тура
                                        </button>
                                    </div>
                                    <div class="stat-item yellow">
                                        <div class="circle" data-percent="31" data-color="#e3d107">
                                            <!-- <span>93%</span> -->
                                        </div>
                                        <div class="title">
                                            Рейтинг Сайта
                                        </div>
                                        <button class="button transparent">
                                            Сообщение
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-content">
                                <div class="casino-logo">
                                    <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                    <span>
                                        <strong>ECLIPSE</strong> Casino
                                    </span>
                                </div>
                                <div class="casino-stats">
                                    <div class="stat-item green">
                                        <div class="circle" data-percent="24" data-color="#82ff17">
                                            <!-- <span>84%</span> -->
                                        </div>
                                        <div class="title">
                                            Рейтинг Игроков
                                        </div>
                                        <button class="button transparent">
                                            Бронирование тура
                                        </button>
                                    </div>
                                    <div class="stat-item yellow">
                                        <div class="circle" data-percent="63" data-color="#e3d107">
                                            <!-- <span>93%</span> -->
                                        </div>
                                        <div class="title">
                                            Рейтинг Сайта
                                        </div>
                                        <button class="button transparent">
                                            Сообщение
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-content">
                                <div class="casino-logo">
                                    <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                    <span>
                                        <strong>ECLIPSE</strong> Casino
                                    </span>
                                </div>
                                <div class="casino-stats">
                                    <div class="stat-item green">
                                        <div class="circle" data-percent="84" data-color="#82ff17">
                                            <!-- <span>84%</span> -->
                                        </div>
                                        <div class="title">
                                            Рейтинг Игроков
                                        </div>
                                        <button class="button transparent">
                                            Бронирование тура
                                        </button>
                                    </div>
                                    <div class="stat-item yellow">
                                        <div class="circle" data-percent="93" data-color="#e3d107">
                                            <!-- <span>93%</span> -->
                                        </div>
                                        <div class="title">
                                            Рейтинг Сайта
                                        </div>
                                        <button class="button transparent">
                                            Сообщение
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-controls">
                        <button class="prev slick-arrow"></button>
                        <button class="next slick-arrow"></button>
                    </div>
                </div>
            </section>
            <section class="block block-menu">
                <div class="wrap">
                    <a href="https://demo-lookincasino.com/individual-casino/" class="home-link"></a>
                    <menu class="menu">
                        <a href="https://demo-lookincasino.com/individual-casino-news/" class="menu-link">
                            Новости
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-casino/" class="menu-link">
                            Казино
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-hotel/" class="menu-link">
                            Отель
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-restaurant/" class="menu-link">
                            Ресторан
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-guest-service/" class="menu-link">
                            Гостевой сервис
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-poker/" class="menu-link">
                            Покер
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-bets/" class="menu-link">
                            Ставки на спорт
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-lottery/" class="menu-link">
                            Розыгрыши
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-actions/" class="menu-link">
                            Акции
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-calendar/" class="menu-link">
                            Календарь событий
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-reviews/" class="menu-link">
                            Отзывы
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino-contacts/" class="menu-link">
                            Контакты
                        </a>
                    </menu>
                </div>
            </section>

            <!-- <section class="block block-services-order wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s"> -->
            <section class="block block-services-order">
                <div class="wrap">
                    <div class="services-order avia-tickets">
                        <div class="services-head">
                            <div class="head-text">
                                <div class="service-title">
                                    Запланируйте свой отдых в казино Eclipse
                                </div>
                                <div class="service-title-descr">
                                    Воспользуйтесь удобной системой бронирования. В случае возникновения вопросов, свяжитесь с нашим специалистом.
                                </div>
                            </div>
                            <button class="button help-link">
                                Нужна помощь
                            </button>
                        </div>
                        <div class="services-tabs-links">
                            <div class="menu-link avia-tickets active">
                                Авиабилеты
                            </div>
                            <div class="menu-link hotels">
                                Проживание
                            </div>
                            <div class="menu-link game-tour">
                                Игровой тур
                            </div>
                            <div class="menu-link restaurants">
                                Рестораны
                            </div>
                            <div class="menu-link entertainment">
                                Развлечения
                            </div>
                            <div class="menu-link cars-rent">
                                Аренда машин
                            </div>
                            <div class="menu-link yacht-charter">
                                Аренда яхт
                            </div>
                            <div class="menu-link transfer">
                                Трансфер от/до аэропорта
                            </div>
                        </div>
                        <div class="services-tabs">
                            <div class="service-tab avia-tickets active">
                                <div class="tab-title">
                                    Куда летим? <br>
                                    Найдите лучшие авиабилеты.
                                </div>
                                <div class="tab-descr">
                                    Сравните цены на сотнях сайтов сразу. <br>
                                    Выгодные предложения. Быстрый и удобный поиск.
                                </div>
                                <div class="service-type-forms-container">
                                    <div class="service-type-togglers">
                                        <div class="service-type-toggler round-trip active">
                                            Туда и Обратно
                                        </div>
                                        <div class="service-type-toggler one-way-trip">
                                            В одну сторону
                                        </div>
                                        <div class="service-type-toggler complex-trip">
                                            Составной маршрут
                                        </div>
                                    </div>
                                    <div class="service-order-form-tabs">
                                        <div class="service-order-form-tab-item round-trip-tab active">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group avia-tickets-from">
                                                    <div class="geo-input-group-title">
                                                        Откуда:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                </div>
                                                <div class="input-group geo-input-group avia-tickets-to">
                                                    <div class="geo-input-group-title">
                                                        Куда:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="Батуми (BUS)">
                                                </div>
                                                <div class="input-group date-input-group date-start">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Туда
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
                                                            Обратно
                                                        </div>
                                                        <div class="date-selected-value-group">
                                                            <span class="date-value">чт, 19.09</span>
                                                            <!-- <span class="time-value">10:00</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group client-amount-selector avia-tickets-client-amount">
                                                    <div class="input-group-selected client-amount-selected">
                                                        <span
                                                        class="selected-amount-value"
                                                        data-translate-title="человек"
                                                        >
                                                            1 человек
                                                        </span>
                                                        <span class="selected-ticket-type-value">
                                                            Класс премиум-эконом
                                                        </span>
                                                    </div>
                                                    <div class="input-group-dropdown client-amount-dropdown">
                                                        <div class="ticket-type-group">
                                                            <select class="ticket-type-selector">
                                                                <option value="Эконом-класс" selected="selected">
                                                                    Эконом-класс
                                                                </option>
                                                                <option value="Класс премиум-эконом">
                                                                    Класс премиум-эконом
                                                                </option>
                                                                <option value="Бизнес-класс">
                                                                    Бизнес-класс
                                                                </option>
                                                                <option value="Первый класс">
                                                                    Первый класс
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="client-amount-group">
                                                            <div class="client-amount-selector-buttons">
                                                                <div class="amount-selector-button-group">
                                                                    <div class="group-title">
                                                                        Взрослые
                                                                        <div class="age-label">
                                                                            18-64
                                                                        </div>
                                                                    </div>
                                                                    <div class="amount-selector-button">
                                                                        <div class="amount-number-control amount-number-decrease disabled">
                                                                            -
                                                                        </div>
                                                                        <input class="amount-number-input" type="number" value="1" min="0" max="10" name="">

                                                                        <div class="amount-number-control amount-number-increase">
                                                                            +
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="amount-selector-button-group">
                                                                    <div class="group-title">
                                                                        Пожилые люди
                                                                        <div class="age-label">
                                                                            65+
                                                                        </div>
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
                                                                <div class="amount-selector-button-group">
                                                                    <div class="group-title">
                                                                        Дети
                                                                        <div class="age-label">
                                                                            0-17
                                                                        </div>
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
                                                <button class="submit-button" type="submit"></button>

                                            </form>
                                        </div>
                                        <div class="service-order-form-tab-item one-way-trip-tab">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group avia-tickets-from">
                                                    <div class="geo-input-group-title">
                                                        Откуда:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                </div>
                                                <div class="input-group geo-input-group avia-tickets-to">
                                                    <div class="geo-input-group-title">
                                                        Куда:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="Батуми (BUS)">
                                                </div>
                                                <div class="input-group date-input-group date-start">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Туда
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
                                                <div class="input-group client-amount-selector avia-tickets-client-amount">
                                                    <div class="input-group-selected client-amount-selected">
                                                        <span
                                                        class="selected-amount-value"
                                                        data-translate-title="человек"
                                                        >
                                                            1 человек
                                                        </span>
                                                        <span class="selected-ticket-type-value">
                                                            Класс премиум-эконом
                                                        </span>
                                                    </div>
                                                    <div class="input-group-dropdown client-amount-dropdown">
                                                        <div class="ticket-type-group">
                                                            <select class="ticket-type-selector">
                                                                <option value="Эконом-класс" selected="selected">
                                                                    Эконом-класс
                                                                </option>
                                                                <option value="Класс премиум-эконом">
                                                                    Класс премиум-эконом
                                                                </option>
                                                                <option value="Бизнес-класс">
                                                                    Бизнес-класс
                                                                </option>
                                                                <option value="Первый класс">
                                                                    Первый класс
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="client-amount-group">
                                                            <div class="client-amount-selector-buttons">
                                                                <div class="amount-selector-button-group">
                                                                    <div class="group-title">
                                                                        Взрослые
                                                                        <div class="age-label">
                                                                            18-64
                                                                        </div>
                                                                    </div>
                                                                    <div class="amount-selector-button">
                                                                        <div class="amount-number-control amount-number-decrease disabled">
                                                                            -
                                                                        </div>
                                                                        <input class="amount-number-input" type="number" value="1" min="0" max="10" name="">

                                                                        <div class="amount-number-control amount-number-increase">
                                                                            +
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="amount-selector-button-group">
                                                                    <div class="group-title">
                                                                        Пожилые люди
                                                                        <div class="age-label">
                                                                            65+
                                                                        </div>
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
                                                                <div class="amount-selector-button-group">
                                                                    <div class="group-title">
                                                                        Дети
                                                                        <div class="age-label">
                                                                            0-17
                                                                        </div>
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
                                                <button class="submit-button" type="submit"></button>
                                            </form>
                                        </div>
                                        <div class="service-order-form-tab-item complex-trip-tab">
                                            <form class="order-form complex-order-form">
                                                <div class="form-rows">
                                                    <div class="form-row">
                                                        <div class="input-group geo-input-group avia-tickets-from">
                                                            <div class="geo-input-group-title">
                                                                Откуда:
                                                            </div>
                                                            <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                        </div>
                                                        <div class="input-group geo-input-group avia-tickets-to">
                                                            <div class="geo-input-group-title">
                                                                Куда:
                                                            </div>
                                                            <input type="text" name="" class="geo-input-group-value" placeholder="Батуми (BUS)">
                                                        </div>
                                                        <div class="input-group date-input-group date-start">
                                                            <div class="input-group-selected">
                                                                <div class="date-title">
                                                                    Туда
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
                                                        <div class="input-group client-amount-selector avia-tickets-client-amount">
                                                            <div class="input-group-selected client-amount-selected">
                                                                <span
                                                                class="selected-amount-value"
                                                                data-translate-title="человек"
                                                                >
                                                                    1 человек
                                                                </span>
                                                                <span class="selected-ticket-type-value">
                                                                    Класс премиум-эконом
                                                                </span>
                                                            </div>
                                                            <div class="input-group-dropdown client-amount-dropdown">
                                                                <div class="ticket-type-group">
                                                                    <select class="ticket-type-selector">
                                                                        <option value="Эконом-класс" selected="selected">
                                                                            Эконом-класс
                                                                        </option>
                                                                        <option value="Класс премиум-эконом">
                                                                            Класс премиум-эконом
                                                                        </option>
                                                                        <option value="Бизнес-класс">
                                                                            Бизнес-класс
                                                                        </option>
                                                                        <option value="Первый класс">
                                                                            Первый класс
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="client-amount-group">
                                                                    <div class="client-amount-selector-buttons">
                                                                        <div class="amount-selector-button-group">
                                                                            <div class="group-title">
                                                                                Взрослые
                                                                                <div class="age-label">
                                                                                    18-64
                                                                                </div>
                                                                            </div>
                                                                            <div class="amount-selector-button">
                                                                                <div class="amount-number-control amount-number-decrease disabled">
                                                                                    -
                                                                                </div>
                                                                                <input class="amount-number-input" type="number" value="1" min="0" max="10" name="">

                                                                                <div class="amount-number-control amount-number-increase">
                                                                                    +
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="amount-selector-button-group">
                                                                            <div class="group-title">
                                                                                Пожилые люди
                                                                                <div class="age-label">
                                                                                    65+
                                                                                </div>
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
                                                                        <div class="amount-selector-button-group">
                                                                            <div class="group-title">
                                                                                Дети
                                                                                <div class="age-label">
                                                                                    0-17
                                                                                </div>
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
                                                        <button class="submit-button" type="submit"></button>
                                                    </div>
                                                    <div class="form-row">
                                                        <button class="remove-form-row"></button>
                                                        <div class="input-group geo-input-group avia-tickets-from">
                                                            <div class="geo-input-group-title">
                                                                Откуда:
                                                            </div>
                                                            <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                        </div>
                                                        <div class="input-group geo-input-group avia-tickets-to">
                                                            <div class="geo-input-group-title">
                                                                Куда:
                                                            </div>
                                                            <input type="text" name="" class="geo-input-group-value" placeholder="Батуми (BUS)">
                                                        </div>
                                                        <div class="input-group date-input-group date-start">
                                                            <div class="input-group-selected">
                                                                <div class="date-title">
                                                                    Туда
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
                                                        </div><div class="input-group client-amount-selector avia-tickets-client-amount">
                                                            <div class="input-group-selected client-amount-selected">
                                                                <span
                                                                class="selected-amount-value"
                                                                data-translate-title="человек"
                                                                >
                                                                    1 человек
                                                                </span>
                                                                <span class="selected-ticket-type-value">
                                                                    Класс премиум-эконом
                                                                </span>
                                                            </div>
                                                            <div class="input-group-dropdown client-amount-dropdown">
                                                                <div class="ticket-type-group">
                                                                    <select class="ticket-type-selector">
                                                                        <option value="Эконом-класс" selected="selected">
                                                                            Эконом-класс
                                                                        </option>
                                                                        <option value="Класс премиум-эконом">
                                                                            Класс премиум-эконом
                                                                        </option>
                                                                        <option value="Бизнес-класс">
                                                                            Бизнес-класс
                                                                        </option>
                                                                        <option value="Первый класс">
                                                                            Первый класс
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="client-amount-group">
                                                                    <div class="client-amount-selector-buttons">
                                                                        <div class="amount-selector-button-group">
                                                                            <div class="group-title">
                                                                                Взрослые
                                                                                <div class="age-label">
                                                                                    18-64
                                                                                </div>
                                                                            </div>
                                                                            <div class="amount-selector-button">
                                                                                <div class="amount-number-control amount-number-decrease disabled">
                                                                                    -
                                                                                </div>
                                                                                <input class="amount-number-input" type="number" value="1" min="0" max="10" name="">

                                                                                <div class="amount-number-control amount-number-increase">
                                                                                    +
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="amount-selector-button-group">
                                                                            <div class="group-title">
                                                                                Пожилые люди
                                                                                <div class="age-label">
                                                                                    65+
                                                                                </div>
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
                                                                        <div class="amount-selector-button-group">
                                                                            <div class="group-title">
                                                                                Дети
                                                                                <div class="age-label">
                                                                                    0-17
                                                                                </div>
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
                                                        <button class="submit-button" type="submit"></button>
                                                    </div>
                                                    <div class="form-row">
                                                        <button class="remove-form-row"></button>
                                                        <div class="input-group geo-input-group avia-tickets-from">
                                                            <div class="geo-input-group-title">
                                                                Откуда:
                                                            </div>
                                                            <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                        </div>
                                                        <div class="input-group geo-input-group avia-tickets-to">
                                                            <div class="geo-input-group-title">
                                                                Куда:
                                                            </div>
                                                            <input type="text" name="" class="geo-input-group-value" placeholder="Батуми (BUS)">
                                                        </div>
                                                        <div class="input-group date-input-group date-start">
                                                            <div class="input-group-selected">
                                                                <div class="date-title">
                                                                    Туда
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
                                                        </div><div class="input-group client-amount-selector avia-tickets-client-amount">
                                                            <div class="input-group-selected client-amount-selected">
                                                                <span
                                                                class="selected-amount-value"
                                                                data-translate-title="человек"
                                                                >
                                                                    1 человек
                                                                </span>
                                                                <span class="selected-ticket-type-value">
                                                                    Класс премиум-эконом
                                                                </span>
                                                            </div>
                                                            <div class="input-group-dropdown client-amount-dropdown">
                                                                <div class="ticket-type-group">
                                                                    <select class="ticket-type-selector">
                                                                        <option value="Эконом-класс" selected="selected">
                                                                            Эконом-класс
                                                                        </option>
                                                                        <option value="Класс премиум-эконом">
                                                                            Класс премиум-эконом
                                                                        </option>
                                                                        <option value="Бизнес-класс">
                                                                            Бизнес-класс
                                                                        </option>
                                                                        <option value="Первый класс">
                                                                            Первый класс
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="client-amount-group">
                                                                    <div class="client-amount-selector-buttons">
                                                                        <div class="amount-selector-button-group">
                                                                            <div class="group-title">
                                                                                Взрослые
                                                                                <div class="age-label">
                                                                                    18-64
                                                                                </div>
                                                                            </div>
                                                                            <div class="amount-selector-button">
                                                                                <div class="amount-number-control amount-number-decrease disabled">
                                                                                    -
                                                                                </div>
                                                                                <input class="amount-number-input" type="number" value="1" min="0" max="10" name="">

                                                                                <div class="amount-number-control amount-number-increase">
                                                                                    +
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="amount-selector-button-group">
                                                                            <div class="group-title">
                                                                                Пожилые люди
                                                                                <div class="age-label">
                                                                                    65+
                                                                                </div>
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
                                                                        <div class="amount-selector-button-group">
                                                                            <div class="group-title">
                                                                                Дети
                                                                                <div class="age-label">
                                                                                    0-17
                                                                                </div>
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
                                                        <button class="submit-button" type="submit"></button>
                                                    </div>
                                                </div>
                                                <button class="add-trip-point">
                                                    + ДОБАВИТЬ
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-tab hotels">
                                <div class="tab-title">
                                    Комфортное проживание <br>
                                    на любой вкус
                                </div>
                                <div class="tab-descr">
                                    От уютных вилл и апартаментов <br>
                                    до стильных, современных отелей
                                </div>
                                <div class="service-type-forms-container offset">
                                    <div class="service-order-form-tabs">
                                        <div class="service-order-form-tab-item hotel-order-tab active">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group hotel-order-to">
                                                    <div class="geo-input-group-title">
                                                        Куда вы хотите поехать:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                </div>
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
                                                            <!-- <div class="calendar-item">
                                                                <input type="text" class="date-start-calendar" />
                                                            </div>
                                                            <div class="calendar-item">
                                                                <input type="text" class="date-end-calendar" />
                                                            </div> -->
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
                                                            <!-- <span class="time-value">10:00</span> -->
                                                        </div>
                                                    </div>
                                                    <!-- <div class="input-group-dropdown date-calendar-dropdown">
                                                        <div class="calendar-item">
                                                            <input type="text" class="date-calendar" hidden="hidden" />
                                                        </div>
                                                    </div> -->
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
                                                <button class="submit-button" type="submit"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-tab game-tour">
                                <div class="tab-title">
                                    Игровые премиум туры <br>
                                    в казино
                                </div>
                                <div class="tab-descr">
                                    Отдыхайте играючи - отправляйтесь в игровой тур с Lookin Casino. <br>
                                    Исключительный сервис для тех, кто ценит комфорт, время и деньги.
                                </div>
                                <div class="service-type-forms-container offset">
                                    <div class="service-order-form-tabs">
                                        <div class="service-order-form-tab-item tour-order-tab active">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group tour-order-to">
                                                    <div class="geo-input-group-title">
                                                        Куда вы хотите поехать:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                </div>
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
                                                            <!-- <div class="calendar-item">
                                                                <input type="text" class="date-start-calendar" />
                                                            </div>
                                                            <div class="calendar-item">
                                                                <input type="text" class="date-end-calendar" />
                                                            </div> -->
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
                                                            <!-- <span class="time-value">10:00</span> -->
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
                                                <button class="submit-button" type="submit"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-tab restaurants">
                                <div class="tab-title">
                                    Высокая кухня <br>
                                    лучших ресторанов
                                </div>
                                <div class="tab-descr">
                                    Удобный и быстрый поиск заведений, <br>
                                    бронирование столиков, подробное меню
                                </div>
                                <div class="service-type-forms-container offset">
                                    <!-- <div class="service-order-form-tabs"> -->
                                        <div class="service-order-form-tab-item restaurant-order-tab active">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group restaurant-location">
                                                    <div class="geo-input-group-title">
                                                        Место:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                </div>
                                                <div class="input-group geo-input-group dish-type">
                                                    <div class="geo-input-group-title">
                                                        Тип кухни:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="украинская">
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
                                                <button class="submit-button" type="submit"></button>
                                            </form>
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="service-tab entertainment">
                                <div class="tab-title">
                                    Концерты, розыгрыши, <br>
                                    экскурсии и развлечения
                                </div>
                                <div class="tab-descr">
                                    Откройте для себя лучшие развлечения с Lookin Casino. <br>
                                    Полный календарь событий, отдых для всей семьи.
                                </div>
                                <div class="service-type-forms-container offset">
                                    <!-- <div class="service-order-form-tabs"> -->
                                        <div class="service-order-form-tab-item entertainment-order-tab active">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group entertainment-location">
                                                    <div class="geo-input-group-title">
                                                        Место:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                </div>
                                                <div class="input-group geo-input-group entertainment-type">
                                                    <div class="geo-input-group-title">
                                                        Тип развлечений:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="опера">
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
                                                        <!-- <div class="time-value">10:00</div> -->
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
                                                                <!-- <input type="text" class="hour-picker" hidden="hidden" />
                                                                <input type="text" class="minutes-picker" hidden="hidden"/> -->
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
                                                <button class="submit-button" type="submit"></button>
                                            </form>
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="service-tab cars-rent">
                                <div class="tab-title">
                                    Аренда автомобиля <br>
                                    для любой поездки
                                </div>
                                <div class="tab-descr">
                                    Будьте независимыми от обстоятельств. Lookin Casino предоставит Вам <br>
                                    лучший автомобиль по выгодной цене. Ведь, то что Вам нужно, уже есть у нас
                                </div>
                                <div class="service-type-forms-container">
                                    <div class="service-type-togglers">
                                        <div class="service-type-toggler return-same-place active">
                                            Возврат в том же месте
                                        </div>
                                        <div class="service-type-toggler return-another-place">
                                            Возврат в другом месте
                                        </div>
                                    </div>
                                    <div class="service-order-form-tabs">
                                        <div class="service-order-form-tab-item return-same-place-tab active">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group car-pickup-location">
                                                    <div class="geo-input-group-title">
                                                        Место получения:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                </div>
                                                <!-- <div class="input-group geo-input-group car-return-location">
                                                    <div class="geo-input-group-title">
                                                        Куда:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                </div> -->
                                                <div class="input-group date-input-group date-start">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Получение
                                                        </div>
                                                        <div class="date-selected-value-group">
                                                            <span class="date-value">чт, 19.09</span>
                                                            <span class="time-value">10:00</span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-dropdown date-calendar-dropdown date-calendar-dropdown-double">
                                                        <div class="calendar-items">
                                                            <!-- <div class="calendar-item">
                                                                <input type="text" class="date-start-calendar" />
                                                            </div>
                                                            <div class="calendar-item">
                                                                <input type="text" class="date-end-calendar" />
                                                            </div> -->
                                                            <input type="text" class="date-range" hidden="hidden" />
                                                        </div>
                                                        <div class="time-items">
                                                            <div class="time-item time-start-item">
                                                                <div class="time-selector-buttons">
                                                                    <div class="time-selector-title">
                                                                        Получение:
                                                                    </div>
                                                                    <!-- <input type="text" class="hour-picker" hidden="hidden" />
                                                                    <input type="text" class="minutes-picker" hidden="hidden"/> -->
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
                                                            </div>
                                                            <div class="time-item time-finish-item">
                                                                <div class="time-selector-buttons">
                                                                    <div class="time-selector-title">
                                                                        Возврат:
                                                                    </div>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group date-input-group date-finish">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Возврат
                                                        </div>
                                                        <div class="date-selected-value-group">
                                                            <span class="date-value">чт, 19.09</span>
                                                            <span class="time-value">10:00</span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="input-group-dropdown date-calendar-dropdown">
                                                        <div class="calendar-item">
                                                            <input type="text" class="date-calendar" hidden="hidden" />
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <select class="input-group client-amount-selector client-amount-basic car-rent-type">
                                                    <option value="" selected="selected">
                                                        Без водителя
                                                    </option>
                                                    <option value="">
                                                        С водителем
                                                    </option>
                                                </select>
                                                <button class="submit-button" type="submit"></button>

                                            </form>
                                        </div>
                                        <div class="service-order-form-tab-item return-another-place-tab">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group car-pickup-location">
                                                    <div class="geo-input-group-title">
                                                        Место получения:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                </div>
                                                <div class="input-group geo-input-group car-return-location">
                                                    <div class="geo-input-group-title">
                                                        Место возврата:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                </div>
                                                <div class="input-group date-input-group date-start">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Получение
                                                        </div>
                                                        <div class="date-selected-value-group">
                                                            <span class="date-value">чт, 19.09</span>
                                                            <span class="time-value">10:00</span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-dropdown date-calendar-dropdown date-calendar-dropdown-double">
                                                        <div class="calendar-items">
                                                            <!-- <div class="calendar-item">
                                                                <input type="text" class="date-start-calendar" />
                                                            </div>
                                                            <div class="calendar-item">
                                                                <input type="text" class="date-end-calendar" />
                                                            </div> -->
                                                            <input type="text" class="date-range" hidden="hidden" />
                                                        </div>
                                                        <div class="time-items">
                                                            <div class="time-item time-start-item">
                                                                <div class="time-selector-buttons">
                                                                    <div class="time-selector-title">
                                                                        Получение:
                                                                    </div>
                                                                    <!-- <input type="text" class="hour-picker" hidden="hidden" />
                                                                    <input type="text" class="minutes-picker" hidden="hidden"/> -->
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
                                                            </div>
                                                            <div class="time-item time-finish-item">
                                                                <div class="time-selector-buttons">
                                                                    <div class="time-selector-title">
                                                                        Возврат:
                                                                    </div>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group date-input-group date-finish">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Возврат
                                                        </div>
                                                        <div class="date-selected-value-group">
                                                            <span class="date-value">чт, 19.09</span>
                                                            <span class="time-value">10:00</span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="input-group-dropdown date-calendar-dropdown">
                                                        <div class="calendar-item">
                                                            <input type="text" class="date-calendar" hidden="hidden" />
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <select class="input-group client-amount-selector client-amount-basic car-rent-type">
                                                    <option value="" selected="selected">
                                                        Без водителя
                                                    </option>
                                                    <option value="">
                                                        С водителем
                                                    </option>
                                                </select>
                                                <button class="submit-button" type="submit"></button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-tab yacht-charter">
                                <div class="tab-title">
                                    Найдите идеальную яхту <br>
                                    для отдыха
                                </div>
                                <div class="tab-descr">
                                    Окунитесь в море впечатлений. <br>
                                    Организовать морскую прогулку с Lookin Casino стало еще проще.
                                </div>
                                <div class="service-type-forms-container">
                                    <div class="service-type-togglers">
                                        <div class="service-type-toggler return-same-place active">
                                            Возврат в том же месте
                                        </div>
                                        <div class="service-type-toggler return-another-place">
                                            Возврат в другом месте
                                        </div>
                                    </div>
                                    <div class="service-order-form-tabs">
                                        <div class="service-order-form-tab-item return-same-place-tab active">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group car-pickup-location">
                                                    <div class="geo-input-group-title">
                                                        Место получения:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="Харьков (HRK)">
                                                </div>
                                                <!-- <div class="input-group geo-input-group car-return-location">
                                                    <div class="geo-input-group-title">
                                                        Куда:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                </div> -->
                                                <div class="input-group date-input-group date-start">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Получение
                                                        </div>
                                                        <div class="date-selected-value-group">
                                                            <span class="date-value">чт, 19.09</span>
                                                            <span class="time-value">10:00</span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-dropdown date-calendar-dropdown date-calendar-dropdown-double">
                                                        <div class="calendar-items">
                                                            <!-- <div class="calendar-item">
                                                                <input type="text" class="date-start-calendar" />
                                                            </div>
                                                            <div class="calendar-item">
                                                                <input type="text" class="date-end-calendar" />
                                                            </div> -->
                                                            <input type="text" class="date-range" hidden="hidden" />
                                                        </div>
                                                        <div class="time-items">
                                                            <div class="time-item time-start-item">
                                                                <div class="time-selector-buttons">
                                                                    <div class="time-selector-title">
                                                                        Получение:
                                                                    </div>
                                                                    <!-- <input type="text" class="hour-picker" hidden="hidden" />
                                                                    <input type="text" class="minutes-picker" hidden="hidden"/> -->
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
                                                            </div>
                                                            <div class="time-item time-finish-item">
                                                                <div class="time-selector-buttons">
                                                                    <div class="time-selector-title">
                                                                        Возврат:
                                                                    </div>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group date-input-group date-finish">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Возврат
                                                        </div>
                                                        <div class="date-selected-value-group">
                                                            <span class="date-value">чт, 19.09</span>
                                                            <span class="time-value">10:00</span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="input-group-dropdown date-calendar-dropdown">
                                                        <div class="calendar-item">
                                                            <input type="text" class="date-calendar" hidden="hidden" />
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <select class="input-group client-amount-selector client-amount-basic car-rent-type">
                                                    <option value="" selected="selected">
                                                        Без капитана
                                                    </option>
                                                    <option value="">
                                                        С капитаном
                                                    </option>
                                                </select>
                                                <button class="submit-button" type="submit"></button>

                                            </form>
                                        </div>
                                        <div class="service-order-form-tab-item return-another-place-tab">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group car-pickup-location">
                                                    <div class="geo-input-group-title">
                                                        Место получения:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                </div>
                                                <div class="input-group geo-input-group car-return-location">
                                                    <div class="geo-input-group-title">
                                                        Место возврата:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                </div>
                                                <div class="input-group date-input-group date-start">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Получение
                                                        </div>
                                                        <div class="date-selected-value-group">
                                                            <span class="date-value">чт, 19.09</span>
                                                            <span class="time-value">10:00</span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-dropdown date-calendar-dropdown date-calendar-dropdown-double">
                                                        <div class="calendar-items">
                                                            <!-- <div class="calendar-item">
                                                                <input type="text" class="date-start-calendar" />
                                                            </div>
                                                            <div class="calendar-item">
                                                                <input type="text" class="date-end-calendar" />
                                                            </div> -->
                                                            <input type="text" class="date-range" hidden="hidden" />
                                                        </div>
                                                        <div class="time-items">
                                                            <div class="time-item  time-start-item">
                                                                <div class="time-selector-buttons">
                                                                    <div class="time-selector-title">
                                                                        Получение:
                                                                    </div>
                                                                    <!-- <input type="text" class="hour-picker" hidden="hidden" />
                                                                    <input type="text" class="minutes-picker" hidden="hidden"/> -->
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
                                                            </div>
                                                            <div class="time-item  time-finish-item">
                                                                <div class="time-selector-buttons">
                                                                    <div class="time-selector-title">
                                                                        Возврат:
                                                                    </div>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group date-input-group date-finish">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Возврат
                                                        </div>
                                                        <div class="date-selected-value-group">
                                                            <span class="date-value">чт, 19.09</span>
                                                            <span class="time-value">10:00</span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="input-group-dropdown date-calendar-dropdown">
                                                        <div class="calendar-item">
                                                            <input type="text" class="date-calendar" hidden="hidden" />
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <select class="input-group client-amount-selector client-amount-basic car-rent-type">
                                                    <option value="" selected="selected">
                                                        Без капитана
                                                    </option>
                                                    <option value="">
                                                        С капитаном
                                                    </option>
                                                </select>
                                                <button class="submit-button" type="submit"></button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-tab transfer">
                                <div class="tab-title">
                                    Забронируйте такси от/до аэропорта
                                </div>
                                <div class="tab-descr">
                                    Удобный заказ трансфера до места проживания и обратно в аэропорт
                                </div>
                                <div class="service-type-forms-container offset">
                                    <div class="service-type-togglers">
                                        <div class="service-type-toggler one-way-trip active">
                                            В одну сторону
                                        </div>
                                        <div class="service-type-toggler return-trip">
                                            Возврат
                                        </div>
                                    </div>
                                    <div class="service-order-form-tabs">
                                        <div class="service-order-form-tab-item one-way-trip-tab active">
                                            <form class="order-form">
                                                <div class="input-group geo-input-group transfer-first-point">
                                                    <div class="geo-input-group-title">
                                                        Место получения:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                </div>
                                                <div class="input-group geo-input-group transfer-second-point">
                                                    <div class="geo-input-group-title">
                                                        Место возврата:
                                                    </div>
                                                    <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                </div>
                                                <div class="input-group date-input-group">
                                                    <div class="input-group-selected">
                                                        <div class="date-title">
                                                            Дата получения
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
                                                            Время получения
                                                        </div>
                                                        <div class="time-value">10:00</div>
                                                    </div>
                                                    <div class="input-group-dropdown time-dropdown">
                                                        <div class="time-item">
                                                            <div class="time-selector-buttons">
                                                                <div class="time-selector-title">
                                                                    Получение:
                                                                </div>
                                                                <!-- <input type="text" class="hour-picker" hidden="hidden" />
                                                                <input type="text" class="minutes-picker" hidden="hidden"/> -->
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
                                                <select class="input-group client-amount-selector client-amount-basic transfer-client-amount">
                                                    <option value="" selected="selected">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                </select>
                                                <button class="submit-button" type="submit"></button>
                                            </form>
                                        </div>
                                        <div class="service-order-form-tab-item return-trip-tab">
                                            <form class="order-form complex-order-form">
                                                <div class="form-rows">
                                                    <div class="form-row">
                                                        <div class="input-group geo-input-group transfer-first-point">
                                                            <div class="geo-input-group-title">
                                                                Место получения:
                                                            </div>
                                                            <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                        </div>
                                                        <div class="input-group geo-input-group transfer-second-point">
                                                            <div class="geo-input-group-title">
                                                                Место возврата:
                                                            </div>
                                                            <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                        </div>
                                                        <div class="input-group date-input-group">
                                                            <div class="input-group-selected">
                                                                <div class="date-title">
                                                                    Дата получения
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
                                                                    Время получения
                                                                </div>
                                                                <div class="time-value">10:00</div>
                                                            </div>
                                                            <div class="input-group-dropdown time-dropdown">
                                                                <div class="time-item">
                                                                    <div class="time-selector-buttons">
                                                                        <div class="time-selector-title">
                                                                            Получение:
                                                                        </div>
                                                                        <!-- <input type="text" class="hour-picker" hidden="hidden" />
                                                                        <input type="text" class="minutes-picker" hidden="hidden"/> -->
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
                                                        <select class="input-group client-amount-selector client-amount-basic transfer-client-amount">
                                                            <option value="" selected="selected">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                            <option value="">4</option>
                                                        </select>
                                                        <div class="empty-button-space"></div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="input-group geo-input-group transfer-first-point">
                                                            <div class="geo-input-group-title">
                                                                Место получения:
                                                            </div>
                                                            <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                        </div>
                                                        <div class="input-group geo-input-group transfer-second-point">
                                                            <div class="geo-input-group-title">
                                                                Место возврата:
                                                            </div>
                                                            <input type="text" name="" class="geo-input-group-value" placeholder="">
                                                        </div>
                                                        <div class="input-group date-input-group">
                                                            <div class="input-group-selected">
                                                                <div class="date-title">
                                                                    Дата получения
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
                                                                    Время получения
                                                                </div>
                                                                <div class="time-value">10:00</div>
                                                            </div>
                                                            <div class="input-group-dropdown time-dropdown">
                                                                <div class="time-item">
                                                                    <div class="time-selector-buttons">
                                                                        <div class="time-selector-title">
                                                                            Получение:
                                                                        </div>
                                                                        <!-- <input type="text" class="hour-picker" hidden="hidden" />
                                                                        <input type="text" class="minutes-picker" hidden="hidden"/> -->
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
                                                        <select class="input-group client-amount-selector client-amount-basic transfer-client-amount">
                                                            <option value="" selected="selected">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                            <option value="">4</option>
                                                        </select>
                                                        <button class="submit-button" type="submit">

                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="block block-about-equipment">
                <div class="wrap">
                    <div class="about-column">
                        <div class="column-group">
                            <div class="block-title">
                                О Казино
                            </div>
                            <div class="about-text">
                                <p>
                                    В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, Пунто- Банко, 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                </p>
                                <p>
                                    Кроме того, мы предлагаем три уникальных современных VIP-зала, каждый из которых демонстрирует высокий уровень индивидуальности и роскоши, предлагая панорамные виды на море. <br>
                                    В Казино ECLIPSE работает собственный Покерный Клуб. Гостей ждут поистине незабываемые ощущения!
                                </p>
                            </div>
                        </div>
                        <div class="column-group">
                            <div class="block-title">
                                Видео обзор
                            </div>
                            <div class="video-gallery slider-top-controls" id="video-gallery-slider">
                                <div class="video-gallery-slide">
                                    <!-- <div class="video-item" data-src="JMJXvsCLu6s" style="background-image: url(http://img.youtube.com/vi/JMJXvsCLu6s/maxresdefault.jpg);"> -->
                                    <div class="video-item" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item" data-src="cpfKxR_51DE" style="background-image: url(http://img.youtube.com/vi/cpfKxR_51DE/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/ylX7fcqEa8w/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/9ecQMuMKpzI/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/wDXq5KAwLOw/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                </div>
                                <div class="video-gallery-slide">
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/JMJXvsCLu6s/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/cpfKxR_51DE/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/ylX7fcqEa8w/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/9ecQMuMKpzI/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/wDXq5KAwLOw/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                </div>
                                <div class="video-gallery-slide">
                                    <!-- <div class="video-item" data-src="" style="background-image: url(http://img.youtube.com/vi/JMJXvsCLu6s/maxresdefault.jpg);"> -->
                                    <div class="video-item" data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/cpfKxR_51DE/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/ylX7fcqEa8w/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/9ecQMuMKpzI/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                    <!-- <div class="video-item"  data-src="" style="background-image: url(http://img.youtube.com/vi/wDXq5KAwLOw/maxresdefault.jpg);"> -->
                                    <div class="video-item"  data-src="" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                        <div class="item-bg"></div>
                                        <button class="item-open"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="equipment-column">
                        <div class="block-title">
                            Комплектация
                        </div>
                        <div class="equipment-stats">
                            <div class="equipment-item worktime">
                                <div class="title">
                                    Время работы
                                </div>
                                <div class="value">
                                    7/24
                                </div>
                            </div>
                            <div class="equipment-item square">
                                <div class="title">
                                    Площадь
                                </div>
                                <div class="value">
                                    2071m2
                                </div>
                            </div>
                            <div class="equipment-item tables">
                                <div class="title">
                                    Количество столов
                                </div>
                                <div class="value">
                                    91
                                </div>
                            </div>
                            <div class="equipment-item slots">
                                <div class="title">
                                    Количество слотов
                                </div>
                                <div class="value">
                                    130
                                </div>
                            </div>
                            <div class="equipment-item range">
                                <div class="title">
                                    Ассортимент игр
                                </div>
                                <div class="value">
                                    22
                                </div>
                            </div>
                            <div class="equipment-item minbet">
                                <div class="title">
                                    Ставки минимальные
                                </div>
                                <div class="value">
                                    20
                                </div>
                            </div>
                            <div class="equipment-item maxbet">
                                <div class="title">
                                    Ставки максимальные
                                </div>
                                <div class="value">
                                    100
                                </div>
                            </div>
                            <div class="equipment-item roulette">
                                <div class="title">
                                    Рулетка
                                </div>
                                <div class="value">
                                    23
                                </div>
                            </div>
                            <div class="equipment-item blackjack">
                                <div class="title">
                                    Блекджек
                                </div>
                                <div class="value">
                                    3
                                </div>
                            </div>
                            <div class="equipment-item poker">
                                <div class="title">
                                    Покер
                                </div>
                                <div class="value">
                                    7
                                </div>
                            </div>
                            <div class="equipment-item baccarat">
                                <div class="title">
                                    Баккара
                                </div>
                                <div class="value">
                                    2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="block block-gallery-rates block-visibility-animation">
                <div class="wrap">
                    <div class="gallery-column">
                        <div class="block-title">
                            Галерея
                        </div>
                        <div class="column-content">
                            <!-- <div class="gallery-slider" id="casino-gallery-slider">
                                <div class="slide">
                                    <img src="http://img.youtube.com/vi/JMJXvsCLu6s/maxresdefault.jpg">
                                </div>
                                <div class="slide">
                                    <img src="http://img.youtube.com/vi/cpfKxR_51DE/maxresdefault.jpg">
                                </div>
                                <div class="slide">
                                    <img src="http://img.youtube.com/vi/ylX7fcqEa8w/maxresdefault.jpg">
                                </div>
                                <div class="slide">
                                    <img src="http://img.youtube.com/vi/9ecQMuMKpzI/maxresdefault.jpg">
                                </div>
                                <div class="slide">
                                    <img src="http://img.youtube.com/vi/wDXq5KAwLOw/maxresdefault.jpg">
                                </div>
                                <div class="slide">
                                    <img src="http://img.youtube.com/vi/8Q61sKbx_pE/maxresdefault.jpg">
                                </div>
                            </div> -->
                            <!-- <div class="thumbs-slider" id="casino-thumbs-slider"> -->
                            <div class="slider-outer">
                                <div class="casino-photo-slider slider-top-controls" id="casino-photo-slider">

                                    <div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div><div class="slide">
                                        <img src="https://demo-lookincasino.com/img/img-blue-dummy.jpg">
                                    </div>
                                    <!-- <div class="slide">
                                        <img src="http://img.youtube.com/vi/cpfKxR_51DE/maxresdefault.jpg">
                                    </div>
                                    <div class="slide">
                                        <img src="http://img.youtube.com/vi/ylX7fcqEa8w/maxresdefault.jpg">
                                    </div>
                                    <div class="slide">
                                        <img src="http://img.youtube.com/vi/9ecQMuMKpzI/maxresdefault.jpg">
                                    </div>
                                    <div class="slide">
                                        <img src="http://img.youtube.com/vi/wDXq5KAwLOw/maxresdefault.jpg">
                                    </div>
                                    <div class="slide">
                                        <img src="http://img.youtube.com/vi/8Q61sKbx_pE/maxresdefault.jpg">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rates-column">
                        <div class="block-title">
                            Мнение Игроков
                        </div>
                        <div class="column-content">
                            <div class="place-item">
                                <div class="item-head">
                                    <div class="logo">
                                        <img src="https://demo-lookincasino.com/img/eclipse-logo-2.jpg">
                                    </div>
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
                                            <div class="stars-rate yellow stars-rate-current" style="width: calc((4.6 * 12px) + (4 * 7px))">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-params">
                                    <div class="parameter">
                                        <div class="parameter-title">
                                            Доверие
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
                                            Условие игр / Правила / Ставки
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
                                            Еда / качество / доступность
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
                                            Развлечения
                                        </div>
                                        <div class="parameter-value">
                                            4.3
                                        </div>
                                        <div class="parameter-bar">
                                            <div class="parameter-strip" style="width: calc(4.3 * 20%)"></div>
                                        </div>
                                    </div>
                                    <div class="parameter">
                                        <div class="parameter-title">
                                            Комфорт
                                        </div>
                                        <div class="parameter-value">
                                            4.8
                                        </div>
                                        <div class="parameter-bar">
                                            <div class="parameter-strip" style="width: calc(4.8 * 20%)"></div>
                                        </div>
                                    </div>
                                    <div class="parameter">
                                        <div class="parameter-title">
                                            Качество сервиса
                                        </div>
                                        <div class="parameter-value">
                                            4.6
                                        </div>
                                        <div class="parameter-bar">
                                            <div class="parameter-strip" style="width: calc(4.6 * 20%)"></div>
                                        </div>
                                    </div>
                                    <div class="parameter">
                                        <div class="parameter-title">
                                            Расположение
                                        </div>
                                        <div class="parameter-value">
                                            4.4
                                        </div>
                                        <div class="parameter-bar">
                                            <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rates-descr">
                                    Ваше мнение важно для нас!<br>
                                    Для того чтобы оценить казино, необходимо пройти <a href="/" class="modal-registration-button">регистрацию</a> или <a href="/" class="modal-login-button">войти</a> в свой аккаунт
                                </div>
                                <a href="https://demo-lookincasino.com/individual-casino-casino/" class="button white best-item-link">
                                    Обзор казино
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="block block-casino-news">
                <div class="wrap">
                    <div class="block-title">
                        Новости казино
                    </div>
                    <div class="news">
                        <a href="/" class="news-item article double-height" style="background-image: url('https://demo-lookincasino.com/img/article.jpg');">
                            <div class="overlay"></div>
                            <div class="title-descr">
                                50 долларов было в кармане у игрока в покер Арчи Караса...
                            </div>
                            <div class="date">
                                Август 22, 2019
                            </div>
                            <div class="comments">1</div>
                        </a>
                        <a href="/" class="news-item article main double-height double-width" style="background-image: url('https://demo-lookincasino.com/img/article.jpg');">
                            <div class="overlay"></div>
                            <div class="main-label">
                                Главная новость
                            </div>
                            <div class="title-descr">
                                Сумма всех значений ячеек (от 0 до 36) на классической рулетке, одной vиз самых популярных игр...
                            </div>
                            <div class="date">
                                Август 22, 2019
                            </div>
                            <div class="comments">7</div>
                        </a>
                        <a href="/" class="news-item article" style="background-image: url('https://demo-lookincasino.com/img/article.jpg');">
                            <div class="overlay"></div>
                            <div class="title-descr">
                                50 долларов было в кармане у игрока в покер Арчи Караса...
                            </div>
                            <div class="date">
                                Август 22, 2019
                            </div>
                            <div class="comments">31</div>
                        </a>
                        <div class="news-item list">
                            <a href="/" class="short-article">
                                <div class="photo"  style="background-image: url('https://demo-lookincasino.com/img/article.jpg');"></div>
                                <div class="info">
                                    <div class="title-descr">
                                        Why tech accelerators may  soon be as irrelevant as an MBA
                                    </div>
                                    <div class="date">
                                        Август 22, 2015
                                    </div>
                                </div>
                            </a>
                            <a href="/" class="short-article">
                                <div class="photo"  style="background-image: url('https://demo-lookincasino.com/img/article.jpg');"></div>
                                <div class="info">
                                    <div class="title-descr">
                                        Why tech accelerators may  soon be as irrelevant as an MBA
                                    </div>
                                    <div class="date">
                                        Август 22, 2015
                                    </div>
                                </div>
                            </a>
                            <a href="/" class="short-article">
                                <div class="photo"  style="background-image: url('https://demo-lookincasino.com/img/article.jpg');"></div>
                                <div class="info">
                                    <div class="title-descr">
                                        Why tech accelerators may  soon be as irrelevant as an MBA
                                    </div>
                                    <div class="date">
                                        Август 22, 2015
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- <section class="block block-main-news wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s"> -->
            <section class="block block-main-news">
                <div class="wrap">
                    <div class="block-title">
                        Новости: главные события
                    </div>
                    <div class="news-type-selectors">
                        <div class="news-type-link casino active">
                            Казино
                        </div>
                        <div class="news-type-link poker">
                            Покер
                        </div>
                        <div class="news-type-link bets">
                            Ставки на спорт
                        </div>
                        <div class="news-type-link actions">
                            Акции
                        </div>
                        <div class="news-type-link lottery">
                            Розыгрыши
                        </div>
                        <div class="news-type-link calendar">
                            Календарь событий
                        </div>
                    </div>
                    <div class="main-news-tabs">
                        <div class="news-type-tab casino active">
                            <div class="news-slider" id="tab-casino-news-slider">
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://demo-lookincasino.com/individual-casino-news/" class="button all-news-link">
                                Читать все новости
                            </a>
                        </div>
                        <div class="news-type-tab poker">
                            <div class="news-slider" id="tab-poker-news-slider">
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://demo-lookincasino.com/individual-casino-news/" class="button all-news-link">
                                Читать все новости
                            </a>
                        </div>
                        <div class="news-type-tab bets">
                            <div class="news-slider" id="tab-bets-news-slider">
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://demo-lookincasino.com/individual-casino-news/" class="button all-news-link">
                                Читать все новости
                            </a>
                        </div>
                        <div class="news-type-tab actions">
                            <div class="news-slider" id="tab-actions-news-slider">
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://demo-lookincasino.com/individual-casino-news/" class="button all-news-link">
                                Читать все новости
                            </a>
                        </div>
                        <div class="news-type-tab lottery">
                            <div class="news-slider" id="tab-lottery-news-slider">
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://demo-lookincasino.com/individual-casino-news/" class="button all-news-link">
                                Читать все новости
                            </a>
                        </div>
                        <div class="news-type-tab calendar">
                            <div class="news-slider" id="tab-calendar-news-slider">
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-group">
                                        <a href="/" class="left-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="title">
                                                Заголовок второй новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">1</div>
                                        </a>
                                        <a href="/" class="center-column news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <div class="main-label">
                                                Главная новость
                                            </div>
                                            <div class="title">
                                                Заголовок первой <br>
                                                главной новости
                                            </div>
                                            <div class="date">
                                                Август 22, 2019
                                            </div>
                                            <div class="comments">
                                                93
                                            </div>
                                        </a>
                                        <div class="right-column">
                                            <a href="/" class="news-item" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                                <div class="title">
                                                    Заголовок третьей новости
                                                </div>
                                                <div class="date">
                                                    Август 22, 2019
                                                </div>
                                                <div class="comments">
                                                    125
                                                </div>
                                            </a>
                                            <div class="short-news">
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
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
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            125
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/" class="short-news-item">
                                                    <div class="photo" style=" background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');"></div>
                                                    <div class="text">
                                                        <div class="title">
                                                            Маленький заголовок первой не главной новости
                                                        </div>
                                                        <div class="date">
                                                            Август 22, 2015
                                                        </div>
                                                        <div class="comments">
                                                            93
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://demo-lookincasino.com/individual-casino-news/" class="button all-news-link">
                                Читать все новости
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="block block-reviews">
                <div class="wrap">
                    <div class="block-head">
                        <div class="block-title">
                            Отзывы игроков
                        </div>
                    </div>
                    <div class="reviews-outer slider-top-controls">
                        <div class="slider-controls"></div>
                        <div class="reviews" id="reviews-slider">
                            <div class="review-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/user-blue-dummy.jpg');"></div>
                                <div class="author">
                                    Имя Фамилия 1
                                </div>
                                <div class="rate">
                                    <div class="stars-rate-group">
                                        <div class="stars-rate grey stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 16px) + (3 * 11px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <!--
                                            width: calc(( {{-- 3.5 --}} * 16px) + ( {{ -- 3 --}} * 11px))">
                                            16px ширина звезды
                                            11px зазор
                                            3.5 выводишь рейтинг
                                            и 3 округляешь рейтинг до целого меньшего
                                        -->
                                    </div>
                                    <div class="rate-number">3.5/5</div>
                                </div>
                                <div class="text">
                                    Решили зайти и немного поиграть, когда еще выпадет такой шанс? Внутри все сделано со вкусом. Очень дорого. Мы первый раз были в казино и это похоже на то как это показывают в фильмах про 11 друзей Оушена:))
                                </div>
                                <a href="https://demo-lookincasino.com/reviews/" class="link">
                                    Читать далее
                                </a>
                            </div>
                            <div class="review-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/user-blue-dummy.jpg');"></div>
                                <div class="author">
                                    Имя Фамилия 2
                                </div>
                                <div class="rate">
                                    <div class="stars-rate-group">
                                        <div class="stars-rate grey stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 16px) + (3 * 11px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <!--
                                            width: calc(( {{-- 3.5 --}} * 16px) + ( {{ -- 3 --}} * 11px))">
                                            16px ширина звезды
                                            11px зазор
                                            3.5 выводишь рейтинг
                                            и 3 округляешь рейтинг до целого меньшего
                                        -->
                                    </div>
                                    <div class="rate-number">3.5/5</div>
                                </div>
                                <div class="text">
                                    Решили зайти и немного поиграть, когда еще выпадет такой шанс? Внутри все сделано со вкусом. Очень дорого. Мы первый раз были в казино и это похоже на то как это показывают в фильмах про 11 друзей Оушена:))
                                </div>
                                <a href="https://demo-lookincasino.com/reviews/" class="link">
                                    Читать далее
                                </a>
                            </div>
                            <div class="review-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/user-blue-dummy.jpg');"></div>
                                <div class="author">
                                    Имя Фамилия 3
                                </div>
                                <div class="rate">
                                    <div class="stars-rate-group">
                                        <div class="stars-rate grey stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 16px) + (3 * 11px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <!--
                                            width: calc(( {{-- 3.5 --}} * 16px) + ( {{ -- 3 --}} * 11px))">
                                            16px ширина звезды
                                            11px зазор
                                            3.5 выводишь рейтинг
                                            и 3 округляешь рейтинг до целого меньшего
                                        -->
                                    </div>
                                    <div class="rate-number">3.5/5</div>
                                </div>
                                <div class="text">
                                    Решили зайти и немного поиграть, когда еще выпадет такой шанс? Внутри все сделано со вкусом. Очень дорого. Мы первый раз были в казино и это похоже на то как это показывают в фильмах про 11 друзей Оушена:))
                                </div>
                                <a href="https://demo-lookincasino.com/reviews/" class="link">
                                    Читать далее
                                </a>
                            </div>
                            <div class="review-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/user-blue-dummy.jpg');"></div>
                                <div class="author">
                                    Имя Фамилия 4
                                </div>
                                <div class="rate">
                                    <div class="stars-rate-group">
                                        <div class="stars-rate grey stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 16px) + (3 * 11px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <!--
                                            width: calc(( {{-- 3.5 --}} * 16px) + ( {{ -- 3 --}} * 11px))">
                                            16px ширина звезды
                                            11px зазор
                                            3.5 выводишь рейтинг
                                            и 3 округляешь рейтинг до целого меньшего
                                        -->
                                    </div>
                                    <div class="rate-number">3.5/5</div>
                                </div>
                                <div class="text">
                                    Решили зайти и немного поиграть, когда еще выпадет такой шанс? Внутри все сделано со вкусом. Очень дорого. Мы первый раз были в казино и это похоже на то как это показывают в фильмах про 11 друзей Оушена:))
                                </div>
                                <a href="https://demo-lookincasino.com/reviews/" class="link">
                                    Читать далее
                                </a>
                            </div>
                            <div class="review-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/user-blue-dummy.jpg');"></div>
                                <div class="author">
                                    Имя Фамилия 5
                                </div>
                                <div class="rate">
                                    <div class="stars-rate-group">
                                        <div class="stars-rate grey stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 16px) + (3 * 11px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <!--
                                            width: calc(( {{-- 3.5 --}} * 16px) + ( {{ -- 3 --}} * 11px))">
                                            16px ширина звезды
                                            11px зазор
                                            3.5 выводишь рейтинг
                                            и 3 округляешь рейтинг до целого меньшего
                                        -->
                                    </div>
                                    <div class="rate-number">3.5/5</div>
                                </div>
                                <div class="text">
                                    Решили зайти и немного поиграть, когда еще выпадет такой шанс? Внутри все сделано со вкусом. Очень дорого. Мы первый раз были в казино и это похоже на то как это показывают в фильмах про 11 друзей Оушена:))
                                </div>
                                <a href="https://demo-lookincasino.com/reviews/" class="link">
                                    Читать далее
                                </a>
                            </div>
                            <div class="review-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/user-blue-dummy.jpg');"></div>
                                <div class="author">
                                    Имя Фамилия 6
                                </div>
                                <div class="rate">
                                    <div class="stars-rate-group">
                                        <div class="stars-rate grey stars-rate-max">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 16px) + (3 * 11px))">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <!--
                                            width: calc(( {{-- 3.5 --}} * 16px) + ( {{ -- 3 --}} * 11px))">
                                            16px ширина звезды
                                            11px зазор
                                            3.5 выводишь рейтинг
                                            и 3 округляешь рейтинг до целого меньшего
                                        -->
                                    </div>
                                    <div class="rate-number">3.5/5</div>
                                </div>
                                <div class="text">
                                    Решили зайти и немного поиграть, когда еще выпадет такой шанс? Внутри все сделано со вкусом. Очень дорого. Мы первый раз были в казино и это похоже на то как это показывают в фильмах про 11 друзей Оушена:))
                                </div>
                                <a href="https://demo-lookincasino.com/reviews/" class="link">
                                    Читать далее
                                </a>
                            </div>
                        </div>
                        <div class="reviews-buttons">
                            <a href="https://demo-lookincasino.com/reviews/" class="button all-reviews-link">
                                Все отзывы
                            </a>
                            <a href="https://demo-lookincasino.com/reviews/" class="button white add-review-link">
                                Оставить отзыв
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="block block-map">
                <div class="wrap">
                    <div class="map-info">
                        <div class="map-info-title">
                            Контактные данные
                        </div>
                        <address class="address">
                            ул. Леха и Марии Качинских 1, Батуми, Грузия
                        </address>
                        <a href="tel:+995557110000" class="phone">
                            + 995 557 110 000
                        </a>
                        <div class="worktime">
                            Часы работы: пн-вс 24/7
                        </div>
                        <a href="mailto:info@lookincasino.com" class="mail">
                            info@lookincasino.com
                        </a>
                        <a href="mailto:info@eclipse.casino" class="mail">
                            info@eclipse.casino
                        </a>
                        <div class="socials">
                            <a href="/" target="_blank" rel="nofollow" class="social fb"></a>
                            <a href="/" target="_blank" rel="nofollow" class="social insta"></a>
                            <a href="/" target="_blank" rel="nofollow" class="social telegram"></a>
                            <a href="/" target="_blank" rel="nofollow" class="social twitter"></a>
                            <a href="/" target="_blank" rel="nofollow" class="social vk"></a>
                            <a href="/" target="_blank" rel="nofollow" class="social youtube"></a>
                        </div>
                    </div>
                </div>
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2982.310337820578!2d41.59635831533238!3d41.62742298904315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDM3JzM4LjciTiA0McKwMzUnNTQuOCJF!5e0!3m2!1sru!2sua!4v1569847829647!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="iframe"></iframe>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.js"></script>

    <!-- calendar -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/interaction/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/locales/ru.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/is-in-viewport/3.0.4/isInViewport.min.js"></script>
    <!-- <script src=""></script> -->
    <!-- calendar -->

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyAn1V1UtM1AQ-VbkRBJ7cFwoQNc3jfUXSU"></script>

    <script type="text/javascript" src="https://demo-lookincasino.com/js/jquery.formstyler.js"></script>
    <script type="text/javascript" src="https://demo-lookincasino.com/js/main.js"></script>
    <script type="text/javascript" src="https://demo-lookincasino.com/js/service-filter.js"></script>

    <script type="text/javascript" src="https://demo-lookincasino.com/js/maps.js"></script>
</body>
</html>