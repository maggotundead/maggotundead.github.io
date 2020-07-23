<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Индивидуальная страница казино | Новости</title>
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
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/suggestions-recommendations.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/players-rating.css">
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

            

            <section class="block block-individual-casino-news">
                <div class="wrap">
                    <div class="news-column">
                        <form class="search-form reviews-search-form">
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
                                </select>
                            </div>
                            <div class="sorting-button">
                                <span class="title">
                                    Сортировать:
                                </span>
                                <select>
                                    <option value="по нашим рекомендациям">
                                        по нашим рекомендациям
                                    </option>
                                    <option value="по мнению игроков">
                                        по мнению игроков
                                    </option>
                                    <option value="по рейтингу">
                                        по рейтингу
                                    </option>
                                    <option value="по оценке">
                                        по оценке
                                    </option>
                                </select>
                            </div>
                            <button class="submit-button" type="submit"></button>
                        </form>
                        <div class="news-list">
                            <div class="individual-news-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="info">
                                    <div class="block-title title">
                                        Eclipse Poker Tour в сентябре: 22 турнира, <br>
                                        3 TV-трансляции и 11 дней кэш-игры
                                    </div>
                                    <div class="rate-reviews-group">
                                        <div class="rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((4.0 * 16px) + (4 * 11px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">4.0</div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/reviews/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                    </div>
                                    <div class="date">
                                        19 мая 2019 
                                    </div>
                                    <div class="views">
                                        <span>3 123</span> просмотра
                                    </div>
                                    <div class="descr">
                                        С 10 по 20 сентября Eclipse принимает гостей на серии Belarus Poker Tour. Почему из года в год, несмотря на длинные расстояния, любители покера со всего мира приезжают в столицу Беларуси, за что BPT так любят игроки и какие сюрпризы в турнирном расписании приготовили организаторы серии на осень.
                                    </div>
                                    <a href="https://demo-lookincasino.com/individual-casino-event/" class="button blue news-link">
                                        Подробнее
                                    </a>
                                    <div class="comment-number">
                                        <span>23</span>
                                    </div>
                                    <div class="socials">
                                        <a href="/" target="_blank" rel="nofollow" class="social fb"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social insta"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social telegram"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social twitter"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social vk"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="individual-news-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="info">
                                    <div class="block-title title">
                                        Eclipse Poker Tour в сентябре: 22 турнира, <br>
                                        3 TV-трансляции и 11 дней кэш-игры
                                    </div>
                                    <div class="rate-reviews-group">
                                        <div class="rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((4.0 * 16px) + (4 * 11px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">4.0</div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/reviews/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                    </div>
                                    <div class="date">
                                        19 мая 2019 
                                    </div>
                                    <div class="views">
                                        <span>3 123</span> просмотра
                                    </div>
                                    <div class="descr">
                                        С 10 по 20 сентября Eclipse принимает гостей на серии Belarus Poker Tour. Почему из года в год, несмотря на длинные расстояния, любители покера со всего мира приезжают в столицу Беларуси, за что BPT так любят игроки и какие сюрпризы в турнирном расписании приготовили организаторы серии на осень.
                                    </div>
                                    <a href="https://demo-lookincasino.com/individual-casino-event/" class="button blue news-link">
                                        Подробнее
                                    </a>
                                    <div class="comment-number">
                                        <span>23</span>
                                    </div>
                                    <div class="socials">
                                        <a href="/" target="_blank" rel="nofollow" class="social fb"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social insta"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social telegram"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social twitter"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social vk"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="individual-news-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="info">
                                    <div class="block-title title">
                                        Eclipse Poker Tour в сентябре: 22 турнира, <br>
                                        3 TV-трансляции и 11 дней кэш-игры
                                    </div>
                                    <div class="rate-reviews-group">
                                        <div class="rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((4.0 * 16px) + (4 * 11px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">4.0</div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/reviews/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                    </div>
                                    <div class="date">
                                        19 мая 2019 
                                    </div>
                                    <div class="views">
                                        <span>3 123</span> просмотра
                                    </div>
                                    <div class="descr">
                                        С 10 по 20 сентября Eclipse принимает гостей на серии Belarus Poker Tour. Почему из года в год, несмотря на длинные расстояния, любители покера со всего мира приезжают в столицу Беларуси, за что BPT так любят игроки и какие сюрпризы в турнирном расписании приготовили организаторы серии на осень.
                                    </div>
                                    <a href="https://demo-lookincasino.com/individual-casino-event/" class="button blue news-link">
                                        Подробнее
                                    </a>
                                    <div class="comment-number">
                                        <span>23</span>
                                    </div>
                                    <div class="socials">
                                        <a href="/" target="_blank" rel="nofollow" class="social fb"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social insta"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social telegram"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social twitter"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social vk"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="individual-news-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="info">
                                    <div class="block-title title">
                                        Eclipse Poker Tour в сентябре: 22 турнира, <br>
                                        3 TV-трансляции и 11 дней кэш-игры
                                    </div>
                                    <div class="rate-reviews-group">
                                        <div class="rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((4.0 * 16px) + (4 * 11px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">4.0</div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/reviews/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                    </div>
                                    <div class="date">
                                        19 мая 2019 
                                    </div>
                                    <div class="views">
                                        <span>3 123</span> просмотра
                                    </div>
                                    <div class="descr">
                                        С 10 по 20 сентября Eclipse принимает гостей на серии Belarus Poker Tour. Почему из года в год, несмотря на длинные расстояния, любители покера со всего мира приезжают в столицу Беларуси, за что BPT так любят игроки и какие сюрпризы в турнирном расписании приготовили организаторы серии на осень.
                                    </div>
                                    <a href="https://demo-lookincasino.com/individual-casino-event/" class="button blue news-link">
                                        Подробнее
                                    </a>
                                    <div class="comment-number">
                                        <span>23</span>
                                    </div>
                                    <div class="socials">
                                        <a href="/" target="_blank" rel="nofollow" class="social fb"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social insta"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social telegram"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social twitter"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social vk"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="individual-news-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="info">
                                    <div class="block-title title">
                                        Eclipse Poker Tour в сентябре: 22 турнира, <br>
                                        3 TV-трансляции и 11 дней кэш-игры
                                    </div>
                                    <div class="rate-reviews-group">
                                        <div class="rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((4.0 * 16px) + (4 * 11px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">4.0</div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/reviews/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                    </div>
                                    <div class="date">
                                        19 мая 2019 
                                    </div>
                                    <div class="views">
                                        <span>3 123</span> просмотра
                                    </div>
                                    <div class="descr">
                                        С 10 по 20 сентября Eclipse принимает гостей на серии Belarus Poker Tour. Почему из года в год, несмотря на длинные расстояния, любители покера со всего мира приезжают в столицу Беларуси, за что BPT так любят игроки и какие сюрпризы в турнирном расписании приготовили организаторы серии на осень.
                                    </div>
                                    <a href="https://demo-lookincasino.com/individual-casino-event/" class="button blue news-link">
                                        Подробнее
                                    </a>
                                    <div class="comment-number">
                                        <span>23</span>
                                    </div>
                                    <div class="socials">
                                        <a href="/" target="_blank" rel="nofollow" class="social fb"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social insta"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social telegram"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social twitter"></a>
                                        <a href="/" target="_blank" rel="nofollow" class="social vk"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-controls">
                            <a href="/" class="button blue more-items-link">
                                Показать еще <span>20</span>
                            </a>
                            <div class="pagination">
                                <button class="page-button page-prev disabled"></button>
                                <a href="/" class="page-link">1</a>
                                <a href="/" class="page-link">2</a>
                                <a href="/" class="page-link">3</a>
                                <div class="page-link">...</div>
                                <a href="/" class="page-link">25</a>
                                <a href="/" class="page-link active">26</a>
                                <a href="/" class="page-link">27</a>
                                <div class="page-link">...</div>
                                <a href="/" class="page-link">253</a>
                                <a href="/" class="page-link">254</a>
                                <a href="/" class="page-link">255</a>
                                <button class="page-button page-next"></button>
                            </div>
                        </div>
                    </div>
                    <aside class="aside-column">
                        <div class="aside-group">
                            <div class="game-banner small" style="background-image: url('https://demo-lookincasino.com/img/game-full-banner.png');">
                                <div class="title">
                                    <span>Игра</span>
                                    высшей пробы
                                </div>
                                <a href="/" class="button white game-details-button">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                        <div class="aside-group">
                            <div class="block-title">
                                Календарь <br>
                                событий
                            </div>
                            <div class="aside-casino-news one-slide-aside-slider slider-top-controls">
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                Davut Guloglu & Tugba Ozay
                                            </div>
                                            <div class="date">
                                                20 сентября - 21 Сентября 2019
                                            </div>
                                            <div class="descr">
                                                Зажигательный концерт Турецких звезд. Казино Eclipse приглашает вас на зажигательный концерт
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                Davut Guloglu & Tugba Ozay
                                            </div>
                                            <div class="date">
                                                20 сентября - 21 Сентября 2019
                                            </div>
                                            <div class="descr">
                                                Зажигательный концерт Турецких звезд. Казино Eclipse приглашает вас на зажигательный концерт
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                Davut Guloglu & Tugba Ozay
                                            </div>
                                            <div class="date">
                                                20 сентября - 21 Сентября 2019
                                            </div>
                                            <div class="descr">
                                                Зажигательный концерт Турецких звезд. Казино Eclipse приглашает вас на зажигательный концерт
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                Davut Guloglu & Tugba Ozay
                                            </div>
                                            <div class="date">
                                                20 сентября - 21 Сентября 2019
                                            </div>
                                            <div class="descr">
                                                Зажигательный концерт Турецких звезд. Казино Eclipse приглашает вас на зажигательный концерт
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aside-group">
                            <div class="block-title">
                                Акции
                            </div>
                            <div class="aside-casino-news one-slide-aside-slider slider-top-controls">
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                20% скидка на кальян <br>
                                                от Eclipse Casino
                                            </div>
                                            <div class="date">
                                                20 сентября
                                            </div>
                                            <div class="descr">
                                                Зажигательный концерт Турецких звезд. Казино Eclipse приглашает вас на зажигательный концерт
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                20% скидка на кальян <br>
                                                от Eclipse Casino
                                            </div>
                                            <div class="date">
                                                20 сентября
                                            </div>
                                            <div class="descr">
                                                Зажигательный концерт Турецких звезд. Казино Eclipse приглашает вас на зажигательный концерт
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                20% скидка на кальян <br>
                                                от Eclipse Casino
                                            </div>
                                            <div class="date">
                                                20 сентября
                                            </div>
                                            <div class="descr">
                                                Зажигательный концерт Турецких звезд. Казино Eclipse приглашает вас на зажигательный концерт
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                20% скидка на кальян <br>
                                                от Eclipse Casino
                                            </div>
                                            <div class="date">
                                                20 сентября
                                            </div>
                                            <div class="descr">
                                                Зажигательный концерт Турецких звезд. Казино Eclipse приглашает вас на зажигательный концерт
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                20% скидка на кальян <br>
                                                от Eclipse Casino
                                            </div>
                                            <div class="date">
                                                20 сентября
                                            </div>
                                            <div class="descr">
                                                Зажигательный концерт Турецких звезд. Казино Eclipse приглашает вас на зажигательный концерт
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aside-group">
                            <div class="block-title">
                                Розыгрыши
                            </div>
                            <div class="aside-casino-news one-slide-aside-slider slider-top-controls">
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                Розыгрыш «Cosmic Eclipse» <br>
                                                от Eclipse Casino
                                            </div>
                                            <div class="date">
                                                20 сентября 2019
                                            </div>
                                            <div class="descr">
                                                Приняв участие в розыгрыше “Cosmic Eclipse Free Spins” от казино BetSafe игрок на протяжении 4-х дней ...
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                Розыгрыш «Cosmic Eclipse» <br>
                                                от Eclipse Casino
                                            </div>
                                            <div class="date">
                                                20 сентября 2019
                                            </div>
                                            <div class="descr">
                                                Приняв участие в розыгрыше “Cosmic Eclipse Free Spins” от казино BetSafe игрок на протяжении 4-х дней ...
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                Розыгрыш «Cosmic Eclipse» <br>
                                                от Eclipse Casino
                                            </div>
                                            <div class="date">
                                                20 сентября 2019
                                            </div>
                                            <div class="descr">
                                                Приняв участие в розыгрыше “Cosmic Eclipse Free Spins” от казино BetSafe игрок на протяжении 4-х дней ...
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="news-item">
                                        <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg')"></div>
                                        <div class="info">
                                            <div class="title">
                                                Розыгрыш «Cosmic Eclipse» <br>
                                                от Eclipse Casino
                                            </div>
                                            <div class="date">
                                                20 сентября 2019
                                            </div>
                                            <div class="descr">
                                                Приняв участие в розыгрыше “Cosmic Eclipse Free Spins” от казино BetSafe игрок на протяжении 4-х дней ...
                                            </div>
                                            <a href="/" class="link">
                                                Подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>

            <section class="block block-suggestions-recommendations">
                <div class="wrap">
                    <div class="suggestions-group">
                        <div class="block-title">
                            Мы предлагаем не только игорные заведения
                        </div>
                        <div class="suggestions-items">
                            <div class="suggestion-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="title">
                                    Отели
                                </div>
                            </div>
                            <div class="suggestion-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="title">
                                    Рестораны
                                </div>
                            </div>
                            <div class="suggestion-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="title">
                                    Развлечения
                                </div>
                            </div>
                            <div class="suggestion-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="title">
                                    Экскурсии
                                </div>
                            </div>
                            <div class="suggestion-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="title">
                                    Туры
                                </div>
                            </div>
                            <div class="suggestion-item">
                                <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                <div class="title">
                                    Недвижимость
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="recommendations-group">
                        <div class="block-title">
                            Вам также может понравиться
                        </div>
                        <div class="objects-group nearest-objects">
                            <div class="objects-group-head">
                                <div class="objects-group-title">
                                    Похожие объекты рядом
                                </div>
                                <a href="/" class="objects-group-link">Показать все</a>
                            </div>
                            <div class="objects-group-body">
                                <div class="object-item">
                                    <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
                                            Название отеля 1
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
                                        <a href="/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                        <div class="location-distance">
                                            3,6 км
                                        </div>
                                        <a href="/" class="button blue object-link">
                                            Обзор
                                        </a>
                                    </div>
                                </div>
                                <div class="object-item">
                                    <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
                                            Название отеля 2
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
                                        <a href="/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                        <div class="location-distance">
                                            3,6 км
                                        </div>
                                        <a href="/" class="button blue object-link">
                                            Обзор
                                        </a>
                                    </div>
                                </div>
                                <div class="object-item">
                                    <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
                                            Название отеля 3
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
                                        <a href="/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                        <div class="location-distance">
                                            3,6 км
                                        </div>
                                        <a href="/" class="button blue object-link">
                                            Обзор
                                        </a>
                                    </div>
                                </div>
                                <div class="object-item">
                                    <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
                                            Название отеля 4
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
                                        <a href="/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                        <div class="location-distance">
                                            3,6 км
                                        </div>
                                        <a href="/" class="button blue object-link">
                                            Обзор
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="objects-group recommended-objects">
                            <div class="objects-group-head">
                                <div class="objects-group-title">
                                    Рекомендовано 
                                </div>
                                <a href="/" class="objects-group-link">Показать все</a>
                            </div>
                            <div class="objects-group-body">
                                <div class="object-item">
                                    <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
                                            Название отеля 1
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
                                        <a href="/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                        <div class="location-distance">
                                            3,6 км
                                        </div>
                                        <a href="/" class="button blue object-link">
                                            Обзор
                                        </a>
                                    </div>
                                </div>
                                <div class="object-item">
                                    <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
                                            Название отеля 2
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
                                        <a href="/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                        <div class="location-distance">
                                            3,6 км
                                        </div>
                                        <a href="/" class="button blue object-link">
                                            Обзор
                                        </a>
                                    </div>
                                </div>
                                <div class="object-item">
                                    <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
                                            Название отеля 3
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
                                        <a href="/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                        <div class="location-distance">
                                            3,6 км
                                        </div>
                                        <a href="/" class="button blue object-link">
                                            Обзор
                                        </a>
                                    </div>
                                </div>
                                <div class="object-item">
                                    <div class="photo" style="background-image: url('https://demo-lookincasino.com/img/img-blue-dummy.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
                                            Название отеля 4
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
                                        <a href="/" class="reviews-link">
                                            <span class="value">138</span>
                                            <span>отзывов ›</span>
                                        </a>
                                        <div class="location-distance">
                                            3,6 км
                                        </div>
                                        <a href="/" class="button blue object-link">
                                            Обзор
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="block block-players-rating block-complex-rating block-visibility-animation">
                <div class="wrap">
                    <div class="block-title">
                        Рейтинг казино
                    </div>
                    <div class="rating-type-selectors">
                        <div class="rating-type-link rate active">
                            По оценке
                        </div>
                        <div class="rating-type-link users">
                            По мнению игроков
                        </div>
                        <div class="rating-type-link site">
                            По мнению сайта
                        </div>
                    </div>
                    <div class="rating-types-tabs">
                        <div class="rating-type-tab active">
                            <div class="players-rating-outer">
                                <div class="players-rating players-rating-slider">
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Eclipse Casino
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 37%"></span>
                                                <span class="value">3.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 1
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 27%"></span>
                                                <span class="value">2.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 2
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 42%"></span>
                                                <span class="value">4.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 3
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 57%"></span>
                                                <span class="value">5.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 4
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 65%"></span>
                                                <span class="value">6.5</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 5
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 80%"></span>
                                                <span class="value">8.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 6
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 90%"></span>
                                                <span class="value">9.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 7
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 22%"></span>
                                                <span class="value">2.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 8
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 41%"></span>
                                                <span class="value">4.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 9
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 58%"></span>
                                                <span class="value">5.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 10
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 21%"></span>
                                                <span class="value">2.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 11
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 90%"></span>
                                                <span class="value">9.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 12
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 47%"></span>
                                                <span class="value">4.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 13
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 55%"></span>
                                                <span class="value">5.5</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 14
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 22%"></span>
                                                <span class="value">2.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 15
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 77%"></span>
                                                <span class="value">7.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 16
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 10%"></span>
                                                <span class="value">10.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 17
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 18%"></span>
                                                <span class="value">1.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 18
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 24%"></span>
                                                <span class="value">2.4</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 19
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 67%"></span>
                                                <span class="value">6.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 20
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 90%"></span>
                                                <span class="value">9.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 21
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 47%"></span>
                                                <span class="value">4.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 22
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 80%"></span>
                                                <span class="value">8.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 23
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 66%"></span>
                                                <span class="value">6.6</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 24
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 60%"></span>
                                                <span class="value">6.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 25
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 54%"></span>
                                                <span class="value">5.4</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 26
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 11%"></span>
                                                <span class="value">1.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 27
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 50%"></span>
                                                <span class="value">5.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 28
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 32%"></span>
                                                <span class="value">3.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 29
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 92%"></span>
                                                <span class="value">9.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 30
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 44%"></span>
                                                <span class="value">4.4</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 31
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 58%"></span>
                                                <span class="value">5.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 32
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 68%"></span>
                                                <span class="value">6.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 33
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 73%"></span>
                                                <span class="value">7.3</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 34
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 61%"></span>
                                                <span class="value">6.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 35
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 55%"></span>
                                                <span class="value">5.5</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 36
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 29%"></span>
                                                <span class="value">2.9</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 37
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 97%"></span>
                                                <span class="value">9.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 38
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 40%"></span>
                                                <span class="value">4.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 39
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 48%"></span>
                                                <span class="value">4.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rating-type-tab">
                            <div class="players-rating-outer">
                                <div class="players-rating players-rating-slider">
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Eclipse Casino
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 37%"></span>
                                                <span class="value">3.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 1
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 27%"></span>
                                                <span class="value">2.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 2
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 42%"></span>
                                                <span class="value">4.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 3
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 57%"></span>
                                                <span class="value">5.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 4
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 65%"></span>
                                                <span class="value">6.5</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 5
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 80%"></span>
                                                <span class="value">8.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 6
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 90%"></span>
                                                <span class="value">9.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 7
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 22%"></span>
                                                <span class="value">2.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 8
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 41%"></span>
                                                <span class="value">4.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 9
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 58%"></span>
                                                <span class="value">5.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 10
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 21%"></span>
                                                <span class="value">2.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 11
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 90%"></span>
                                                <span class="value">9.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 12
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 47%"></span>
                                                <span class="value">4.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 13
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 55%"></span>
                                                <span class="value">5.5</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 14
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 22%"></span>
                                                <span class="value">2.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 15
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 77%"></span>
                                                <span class="value">7.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 16
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 10%"></span>
                                                <span class="value">10.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 17
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 18%"></span>
                                                <span class="value">1.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 18
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 24%"></span>
                                                <span class="value">2.4</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 19
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 67%"></span>
                                                <span class="value">6.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 20
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 90%"></span>
                                                <span class="value">9.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 21
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 47%"></span>
                                                <span class="value">4.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 22
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 80%"></span>
                                                <span class="value">8.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 23
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 66%"></span>
                                                <span class="value">6.6</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 24
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 60%"></span>
                                                <span class="value">6.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 25
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 54%"></span>
                                                <span class="value">5.4</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 26
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 11%"></span>
                                                <span class="value">1.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 27
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 50%"></span>
                                                <span class="value">5.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 28
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 32%"></span>
                                                <span class="value">3.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 29
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 92%"></span>
                                                <span class="value">9.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 30
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 44%"></span>
                                                <span class="value">4.4</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 31
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 58%"></span>
                                                <span class="value">5.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 32
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 68%"></span>
                                                <span class="value">6.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 33
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 73%"></span>
                                                <span class="value">7.3</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 34
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 61%"></span>
                                                <span class="value">6.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 35
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 55%"></span>
                                                <span class="value">5.5</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 36
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 29%"></span>
                                                <span class="value">2.9</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 37
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 97%"></span>
                                                <span class="value">9.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 38
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 40%"></span>
                                                <span class="value">4.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 39
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 48%"></span>
                                                <span class="value">4.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rating-type-tab">
                            <div class="players-rating-outer">
                                <div class="players-rating players-rating-slider">
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Eclipse Casino
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 37%"></span>
                                                <span class="value">3.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 1
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 27%"></span>
                                                <span class="value">2.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 2
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 42%"></span>
                                                <span class="value">4.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 3
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 57%"></span>
                                                <span class="value">5.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 4
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 65%"></span>
                                                <span class="value">6.5</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 5
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 80%"></span>
                                                <span class="value">8.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 6
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 90%"></span>
                                                <span class="value">9.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 7
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 22%"></span>
                                                <span class="value">2.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 8
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 41%"></span>
                                                <span class="value">4.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 9
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 58%"></span>
                                                <span class="value">5.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 10
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 21%"></span>
                                                <span class="value">2.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 11
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 90%"></span>
                                                <span class="value">9.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 12
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 47%"></span>
                                                <span class="value">4.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 13
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 55%"></span>
                                                <span class="value">5.5</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 14
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 22%"></span>
                                                <span class="value">2.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 15
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 77%"></span>
                                                <span class="value">7.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 16
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 10%"></span>
                                                <span class="value">10.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 17
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 18%"></span>
                                                <span class="value">1.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 18
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 24%"></span>
                                                <span class="value">2.4</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 19
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 67%"></span>
                                                <span class="value">6.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 20
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 90%"></span>
                                                <span class="value">9.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 21
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 47%"></span>
                                                <span class="value">4.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 22
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 80%"></span>
                                                <span class="value">8.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 23
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 66%"></span>
                                                <span class="value">6.6</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 24
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 60%"></span>
                                                <span class="value">6.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 25
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 54%"></span>
                                                <span class="value">5.4</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 26
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 11%"></span>
                                                <span class="value">1.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 27
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 50%"></span>
                                                <span class="value">5.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 28
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 32%"></span>
                                                <span class="value">3.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 29
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 92%"></span>
                                                <span class="value">9.2</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 30
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 44%"></span>
                                                <span class="value">4.4</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 31
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 58%"></span>
                                                <span class="value">5.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 32
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 68%"></span>
                                                <span class="value">6.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 33
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 73%"></span>
                                                <span class="value">7.3</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 34
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 61%"></span>
                                                <span class="value">6.1</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 35
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 55%"></span>
                                                <span class="value">5.5</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 36
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 29%"></span>
                                                <span class="value">2.9</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 37
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 97%"></span>
                                                <span class="value">9.7</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 38
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 40%"></span>
                                                <span class="value">4.0</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="rating-item">
                                            <div class="title">
                                                Casino 39
                                            </div>
                                            <div class="chart">
                                                <span class="bg" style="width: 48%"></span>
                                                <span class="value">4.8</span>
                                            </div>
                                            <a href="/" class="button white casino-link">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                </div>
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