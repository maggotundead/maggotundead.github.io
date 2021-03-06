<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Lookin Casino | Demo</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta id="viewport" name="viewport" content="width=1200">
    <link rel="shortcut icon" href="https://demo-lookincasino.com/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQueryFormStyler/2.0.2/jquery.formstyler.theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />





    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.css"> -->



    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/general.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/welcome-modal-banner.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/header.css">

    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/home.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/user-services-order.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/players-rating.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/aside.css">

    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://demo-lookincasino.com/css/modal.css">
</head>
<body class="">
    
    <div class="loader" style="position: fixed; left: 0; top: 0; display: flex; align-items: center; justify-content: center; right: 0; bottom: 0; background-color: #fff; z-index: 99999;">
        <img src="https://demo-lookincasino.com/img/loader.svg">
    </div>


    <div class="welcome-banner open">
        <div class="welcome-banner-overlay"></div>
        <div class="welcome-banner-body">
            <div class="banner-item banner-desktop">
                <div class="banner-slide active">
                    <button class="close"></button>
                    <div class="welcome-banner-logo">
                        <img src="https://demo-lookincasino.com/img/welcome-banner-logo.png">
                    </div>
                    <div class="welcome-banner-text">
                        <div class="welcome-banner-title">
                            Добро пожаловать
                        </div>
                        <div class="welcome-banner-descr">
                            в демонстрационную версию основного прототипа информационной системы для игроков и владельцев игорного бизнеса
                        </div>
                    </div>
                    <div class="banner-controls">
                        <div class="slider-dots">
                            <div class="slide-dot active"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                        </div>
                        <button class="control-link next-slide">
                            Далее
                        </button>
                    </div>
                </div>
                <div class="banner-slide">
                    <button class="close"></button>
                    <div class="welcome-banner-logo">
                        <img src="https://demo-lookincasino.com/img/welcome-banner-logo.png">
                    </div>
                    <div class="welcome-banner-text">
                        <div class="welcome-banner-title">
                            Всё под рукой
                        </div>
                        <div class="welcome-banner-advantages">
                            <div class="advantage-item">
                                <div class="icon">
                                    <img src="https://demo-lookincasino.com/img/welcome-banner-star.png">
                                </div>
                                <div class="title">
                                    Рейтинг игровых заведений
                                </div>
                            </div>
                            <div class="advantage-item">
                                <div class="icon">
                                    <img src="https://demo-lookincasino.com/img/welcome-banner-search.png">
                                </div>
                                <div class="title">
                                    Удобная система поиска казино
                                </div>
                            </div>
                            <div class="advantage-item">
                                <div class="icon">
                                    <img src="https://demo-lookincasino.com/img/welcome-banner-dice.png">
                                </div>
                                <div class="title">
                                    Бронирование игровых туров
                                </div>
                            </div>
                            <div class="advantage-item">
                                <div class="icon">
                                    <img src="https://demo-lookincasino.com/img/welcome-banner-bag.png">
                                </div>
                                <div class="title">
                                    Гостевой сервис
                                </div>
                            </div>
                            <div class="advantage-item">
                                <div class="icon">
                                    <img src="https://demo-lookincasino.com/img/welcome-banner-gift.png">
                                </div>
                                <div class="title">
                                    Участие в акциях и розыгрышах
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="banner-controls">
                        <div class="slider-dots">
                            <div class="slide-dot"></div>
                            <div class="slide-dot active"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                        </div>
                        <button class="control-link next-slide">
                            Далее
                        </button>
                    </div>
                </div>
                <div class="banner-slide">
                    <button class="close"></button>
                    <div class="welcome-banner-logo">
                        <img src="https://demo-lookincasino.com/img/welcome-banner-logo.png">
                    </div>
                    <div class="welcome-banner-text">
                        <div class="welcome-banner-title">
                            Выбирайте лучшее
                        </div>
                        <div class="welcome-banner-descr">
                            Удобная система бронирования авиабилетов, отелей и ресторанов. Трансфер до казино, аренда автомобилей и яхт. Элитная недвижимость. Развлечения на любой вкус.
                        </div>
                    </div>
                    <div class="banner-controls">
                        <div class="slider-dots">
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot active"></div>
                            <div class="slide-dot"></div>
                        </div>
                        <button class="control-link next-slide">
                            Далее
                        </button>
                    </div>
                </div>
                <div class="banner-slide">
                    <button class="close"></button>
                    <div class="welcome-banner-logo">
                        <img src="https://demo-lookincasino.com/img/welcome-banner-logo.png">
                    </div>
                    <div class="welcome-banner-text">
                        <div class="welcome-banner-title">
                            Это удобно
                        </div>
                        <div class="welcome-banner-descr">
                            Мобильное приложение для IOS и Android. Ежедневное обновление новостной ленты, прямые трансляции розыгрышей и турниров, максимально подробный календарь событий.
                        </div>
                    </div>
                    <div class="banner-controls">
                        <div class="slider-dots">
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot active"></div>
                        </div>
                        <button class="control-link open-site-link">
                            На сайт
                        </button>
                    </div>
                </div>
            </div>
            <div class="banner-item banner-mobile">
                <div class="banner-slide active">
                    <button class="close"></button>
                    <div class="welcome-banner-logo">
                        <img src="https://demo-lookincasino.com/img/welcome-banner-mobile-logo.png">
                    </div>
                    <div class="welcome-banner-text">
                        <div class="welcome-banner-title">
                            Добро пожаловать
                        </div>
                        <div class="welcome-banner-descr">
                            в демонстрационную версию основного прототипа информационной системы для игроков и владельцев игорного бизнеса
                        </div>
                    </div>
                    <div class="banner-controls">
                        <div class="slider-dots">
                            <div class="slide-dot active"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                        </div>
                        <button class="control-link next-slide">
                            Далее
                        </button>
                    </div>
                </div>
                <div class="banner-slide">
                    <button class="close"></button>
                    <div class="welcome-banner-logo">
                        <img src="https://demo-lookincasino.com/img/welcome-banner-mobile-logo.png">
                    </div>
                    <div class="welcome-banner-text">
                        <div class="welcome-banner-title">
                            Всё под рукой
                        </div>
                        <div class="welcome-banner-advantages">
                            <div class="advantage-item">
                                <div class="icon">
                                    <img src="https://demo-lookincasino.com/img/welcome-banner-mobile-star.png">
                                </div>
                                <div class="title">
                                    Рейтинг игровых заведений
                                </div>
                            </div>
                            <div class="advantage-item">
                                <div class="icon">
                                    <img src="https://demo-lookincasino.com/img/welcome-banner-mobile-search.png">
                                </div>
                                <div class="title">
                                    Удобная система поиска казино
                                </div>
                            </div>
                            <div class="advantage-item">
                                <div class="icon">
                                    <img src="https://demo-lookincasino.com/img/welcome-banner-mobile-dice.png">
                                </div>
                                <div class="title">
                                    Бронирование игровых туров
                                </div>
                            </div>
                            <div class="advantage-item">
                                <div class="icon">
                                    <img src="https://demo-lookincasino.com/img/welcome-banner-mobile-bag.png">
                                </div>
                                <div class="title">
                                    Гостевой сервис
                                </div>
                            </div>
                            <div class="advantage-item">
                                <div class="icon">
                                    <img src="https://demo-lookincasino.com/img/welcome-banner-mobile-gift.png">
                                </div>
                                <div class="title">
                                    Участие в акциях и розыгрышах
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="banner-controls">
                        <div class="slider-dots">
                            <div class="slide-dot"></div>
                            <div class="slide-dot active"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                        </div>
                        <button class="control-link next-slide">
                            Далее
                        </button>
                    </div>
                </div>
                <div class="banner-slide">
                    <div class="close"></div>
                    <div class="welcome-banner-logo">
                        <img src="https://demo-lookincasino.com/img/welcome-banner-mobile-logo.png">
                    </div>
                    <div class="welcome-banner-text">
                        <div class="welcome-banner-title">
                            Выбирайте лучшее
                        </div>
                        <div class="welcome-banner-descr">
                            Удобная система бронирования авиабилетов, отелей и ресторанов. Трансфер до казино, аренда автомобилей и яхт. Элитная недвижимость. Развлечения на любой вкус.
                        </div>
                    </div>
                    <div class="banner-controls">
                        <div class="slider-dots">
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot active"></div>
                            <div class="slide-dot"></div>
                        </div>
                        <button class="control-link next-slide">
                            Далее
                        </button>
                    </div>
                </div>
                <div class="banner-slide">
                    <div class="close"></div>
                    <div class="welcome-banner-logo">
                        <img src="https://demo-lookincasino.com/img/welcome-banner-mobile-logo.png">
                    </div>
                    <div class="welcome-banner-text">
                        <div class="welcome-banner-title">
                            Это удобно
                        </div>
                        <div class="welcome-banner-descr">
                            Мобильное приложение для IOS и Android. Ежедневное обновление новостной ленты, прямые трансляции розыгрышей и турниров, максимально подробный календарь событий.
                        </div>
                    </div>
                    <div class="banner-controls">
                        <div class="slider-dots">
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot"></div>
                            <div class="slide-dot active"></div>
                        </div>
                        <button class="control-link open-site-link">
                            На сайт
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
            <div class="header-bottom">
                <div class="wrap">
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
            <div class="block block-main-homescreen">
                <div class="wrap">
                    <div class="left-column">
                        <h1 class="title">
                            Лучшие игорные заведения: кого выбрать?
                        </h1>
                        <div class="title-descr">
                            Наши консультанты помогут вам подобрать казино и ответят на вопросы
                        </div>
                        <div class="search-form">
                            <label class="input-label">
                                <input type="text" name="" class="input" placeholder="Введите название казино или любое ключевое слово ">
                            </label>
                            <button class="search-button"></button>
                        </div>
                        <a href="/" class="advanced-search-link">
                            Расширенный поиск казино
                        </a>
                        <div class="casino-features-slider-outer block-banner-slider">
                            <div class="casino-features-slider" id="casino-features-slider">
                                <div class="slide">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/feature-icon-1.png">
                                        </div>
                                        <div class="text">
                                            <div class="slide-title">
                                                Lookin Casino это:
                                            </div>
                                            <div class="slide-text">
                                                Рейтинг игровых заведений, простая и удобная система поиска казино. Бронирование игровых туров, гостевой сервис, участие в акциях и розыгрышах
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/feature-icon-2.png">
                                        </div>
                                        <div class="text">
                                            <div class="slide-title">
                                                Lookin Casino это:
                                            </div>
                                            <div class="slide-text">
                                                Удобная система бронирования авиабилетов, отелей и ресторанов. Трансфер до казино, аренда яхт. Элитная недвижимость, дома и апартаменты. Развлечения на любой вкуc
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/feature-icon-3.png">
                                        </div>
                                        <div class="text">
                                            <div class="slide-title">
                                                Lookin Casino это:
                                            </div>
                                            <div class="slide-text">
                                                Ежедневное обновление новостной ленты про игорный бизнес, прямые трансляции розыгрышей и турниров, максимально подробный календарь событий
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/feature-icon-4.png">
                                        </div>
                                        <div class="text">
                                            <div class="slide-title">
                                                Lookin Casino это:
                                            </div>
                                            <div class="slide-text">
                                                Первое и единственное мобильное приложение с рейтингом и обзором казино для IOS и Android. Встроенные push уведомления, система live комментариев с возможностью публикаций фото и видео контента
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/feature-icon-5.png">
                                        </div>
                                        <div class="text">
                                            <div class="slide-title">
                                                Lookin Casino это:
                                            </div>
                                            <div class="slide-text">
                                                Международная рекламно-информационная система для игроков и владельцев игорного бизнеса. Охват более 25 стран, целевая аудитория более 10 000 000 человек
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
                    </div>
                    <div class="right-column auth-group">
                            <div class="title">
                                Вход в Lookin Casino
                            </div>
                            <div class="descr">
                                Войдите или зарегистрируйтесь, чтобы получить полный доступ к базе казино
                            </div>
                            <button class="button white login-button">
                                Войти
                            </button>
                            <button class="button transparent registration-button">
                                Зарегистрироваться
                            </button>
                            <a href="/" class="help-link">
                                Как зарегистрироваться
                            </a>
                    </div>
                </div>
            </div>


            <section class="block block-services-order">
                <div class="wrap">
                    <div class="services-order avia-tickets">
                        <div class="services-head">
                            <div class="head-text">
                                <div class="service-title">
                                    Запланируйте свой отдых в лучших мировых казино
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


            <section class="block block-best-gambling-establishments">
                <div class="wrap">
                    <div class="establishments-head">
                        <div class="left-column">
                            <div class="block-title">
                                Лучшие игорные заведения от «Lookin Casino»
                            </div>
                            <div class="establishment-type-links">
                                <div class="establishment-type-link casino active">
                                    Казино
                                </div>
                                <div class="establishment-type-link poker-club">
                                    Покер клубы
                                </div>
                                <div class="establishment-type-link bookmaker">
                                    Букмекерские конторы
                                </div>
                            </div>
                            <div class="title-descr">
                                Независимый обзор - рейтинг игорных заведений от редакции сайта, подкрепленный отзывами пользователей и игроков
                            </div>
                        </div>
                        <div class="right-column head-links">
                            <!-- <a href="https://demo-lookincasino.com/home/" class="button blue reviews-link"> -->
                            <a href="/" class="button blue reviews-link">
                                Отзывы игроков
                            </a>
                            <a href="/" class="info-link info-rating-link">
                                Как мы оцениваем?
                            </a>
                        </div>
                    </div>
                    <div class="establishments-body">
                        <div class="best-establishments-tabs">
                            <div class="establishment-tab casino active">
                                <div class="establishment-list-head">
                                    <div class="column establishment">
                                        Казино
                                    </div>
                                    <div class="column rate">
                                        Оценка
                                    </div>
                                    <div class="column descr">
                                        Описание
                                    </div>
                                    <div class="column review">
                                        Обзор
                                    </div>
                                    <div class="column rating">
                                        Рейтинг
                                    </div>
                                </div>
                                <div class="establishment-list-body">
                                    <div class="establishment-list-item">
                                        <div class="column establishment">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
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
                                            <div class="rate-number">4.6/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор казино
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор казино
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор казино
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор казино
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор казино
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор казино
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор казино
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор казино
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="establishment-tab poker-club">
                                <div class="establishment-list-head">
                                    <div class="column establishment">
                                        Покер клуб
                                    </div>
                                    <div class="column rate">
                                        Оценка
                                    </div>
                                    <div class="column descr">
                                        Описание
                                    </div>
                                    <div class="column review">
                                        Обзор
                                    </div>
                                    <div class="column rating">
                                        Рейтинг
                                    </div>
                                </div>
                                <div class="establishment-list-body">
                                    <div class="establishment-list-item">
                                        <div class="column establishment">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
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
                                            <div class="rate-number">4.6/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор клуба
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор клуба
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор клуба
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор клуба
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор клуба
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор клуба
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор клуба
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор клуба
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="establishment-tab bookmaker">
                                <div class="establishment-list-head">
                                    <div class="column establishment">
                                        Букмекер
                                    </div>
                                    <div class="column rate">
                                        Оценка
                                    </div>
                                    <div class="column descr">
                                        Описание
                                    </div>
                                    <div class="column review">
                                        Обзор
                                    </div>
                                    <div class="column rating">
                                        Рейтинг
                                    </div>
                                </div>
                                <div class="establishment-list-body">
                                    <div class="establishment-list-item">
                                        <div class="column establishment">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
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
                                            <div class="rate-number">4.6/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор букмекера
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор букмекера
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор букмекера
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор букмекера
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор букмекера
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор букмекера
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор букмекера
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                    <div class="establishment-list-item">
                                        <div class="column establishment empty">
                                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                                        </div>
                                        <div class="column rate">
                                            <div class="stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="rate-number">3.5/5</div>
                                        </div>
                                        <div class="column descr">
                                            В комфортной атмосфере гостей ждут азартные игры
                                        </div>
                                        <div class="column review">
                                            <a href="https://demo-lookincasino.com/individual-casino/" class="button blue casino-review-link">
                                                Обзор букмекера
                                            </a>
                                        </div>
                                        <div class="column rating">
                                            <a href="https://demo-lookincasino.com/casino-rating/" class="button grey casino-rating-link">
                                                Рейтинг
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aside-column">
                            <div class="game-banner full" style="background-image: url('https://demo-lookincasino.com/img/game-full-banner.png');">
                                <div class="title">
                                    <span>Игра</span>
                                    высшей пробы
                                </div>
                                <a href="/" class="button white game-details-button">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="block block-casino-world-map">
                <div class="wrap">
                    <div class="block-title">
                        Международная система поиска казино
                    </div>
                    <div class="map-control-buttons">
                        <a href="https://demo-lookincasino.com/map/" class="map-show-button">
                            Показать карту
                        </a>
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
                    </div>
                    <form class="search-form">
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
                    </form>
                    <!-- Карта реализованная через фонизображение -->
                    <div class="map-image-group">
                        <div class="map-image">
                            <img src="https://demo-lookincasino.com/img/map-image.png">
                        </div>
                        <div class="map-items">

                            <div class="map-item size-1 blue" style="left: 49.8%; top: 47%; ">
                                <div class="map-item-marker">
                                    <span>Casino 1</span>
                                </div>
                                <div class="map-item-popup">
                                    <button class="close"></button>
                                    <div class="head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="contacts">
                                            <address class="address">
                                                ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                            </address>
                                            <a href="tel:+ 995 557 110 000" class="phone">
                                                + 995 557 110 000
                                            </a>
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, <!-- Пунто- Банко, --> 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                        </div>
                                    </div>
                                    <div class="params">
                                        <div class="param-item square">
                                            <div class="title">
                                                Площадь
                                            </div>
                                            <div class="value">
                                                2071m2
                                            </div>
                                        </div>
                                        <div class="param-item range">
                                            <div class="title">
                                                Ассортимент игр
                                            </div>
                                            <div class="value">
                                                22
                                            </div>
                                        </div>
                                        <div class="param-item tables">
                                            <div class="title">
                                                Количество столов
                                            </div>
                                            <div class="value">
                                                91
                                            </div>
                                        </div>
                                        <div class="param-item slots">
                                            <div class="title">
                                                Количество слотов
                                            </div>
                                            <div class="value">
                                                130
                                            </div>
                                        </div>
                                        <div class="param-item minbet">
                                            <div class="title">
                                                Ставки минимальные
                                            </div>
                                            <div class="value">
                                                20
                                            </div>
                                        </div>
                                        <div class="param-item maxbet">
                                            <div class="title">
                                                Ставки максимальные
                                            </div>
                                            <div class="value">
                                                100
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <div class="stats">
                                            <div class="rating-item stat-item green">
                                                <div class="title">
                                                    Рейтинг Игроков
                                                </div>
                                                <div class="circle" data-percent="84" data-color="#82ff17">
                                                </div>
                                            </div>
                                            <div class="rating-item stat-item yellow">

                                                <div class="title">
                                                    Рейтинг Сайта
                                                </div>
                                                <div class="circle" data-percent="93" data-color="#e3d107">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link" target="_blank">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-item size-6 blue-light" style="left: 19.7%; top: 56%;">
                                <div class="map-item-marker">
                                    <span>Casino 2</span>
                                </div>
                                <div class="map-item-popup">
                                    <button class="close"></button>
                                    <div class="head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="contacts">
                                            <address class="address">
                                                ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                            </address>
                                            <a href="tel:+ 995 557 110 000" class="phone">
                                                + 995 557 110 000
                                            </a>
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, <!-- Пунто- Банко, --> 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                        </div>
                                    </div>
                                    <div class="params">
                                        <div class="param-item square">
                                            <div class="title">
                                                Площадь
                                            </div>
                                            <div class="value">
                                                2071m2
                                            </div>
                                        </div>
                                        <div class="param-item range">
                                            <div class="title">
                                                Ассортимент игр
                                            </div>
                                            <div class="value">
                                                22
                                            </div>
                                        </div>
                                        <div class="param-item tables">
                                            <div class="title">
                                                Количество столов
                                            </div>
                                            <div class="value">
                                                91
                                            </div>
                                        </div>
                                        <div class="param-item slots">
                                            <div class="title">
                                                Количество слотов
                                            </div>
                                            <div class="value">
                                                130
                                            </div>
                                        </div>
                                        <div class="param-item minbet">
                                            <div class="title">
                                                Ставки минимальные
                                            </div>
                                            <div class="value">
                                                20
                                            </div>
                                        </div>
                                        <div class="param-item maxbet">
                                            <div class="title">
                                                Ставки максимальные
                                            </div>
                                            <div class="value">
                                                100
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <div class="stats">
                                            <div class="rating-item stat-item green">
                                                <div class="title">
                                                    Рейтинг Игроков
                                                </div>
                                                <div class="circle" data-percent="84" data-color="#82ff17">
                                                </div>
                                            </div>
                                            <div class="rating-item stat-item yellow">

                                                <div class="title">
                                                    Рейтинг Сайта
                                                </div>
                                                <div class="circle" data-percent="93" data-color="#e3d107">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link" target="_blank">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-item size-5 blue" style="left: 23.7%; top: 48%;">
                                <div class="map-item-marker ">
                                    <span>Casino 3</span>
                                </div>
                                <div class="map-item-popup">
                                    <button class="close"></button>
                                    <div class="head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="contacts">
                                            <address class="address">
                                                ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                            </address>
                                            <a href="tel:+ 995 557 110 000" class="phone">
                                                + 995 557 110 000
                                            </a>
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, <!-- Пунто- Банко, --> 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                        </div>
                                    </div>
                                    <div class="params">
                                        <div class="param-item square">
                                            <div class="title">
                                                Площадь
                                            </div>
                                            <div class="value">
                                                2071m2
                                            </div>
                                        </div>
                                        <div class="param-item range">
                                            <div class="title">
                                                Ассортимент игр
                                            </div>
                                            <div class="value">
                                                22
                                            </div>
                                        </div>
                                        <div class="param-item tables">
                                            <div class="title">
                                                Количество столов
                                            </div>
                                            <div class="value">
                                                91
                                            </div>
                                        </div>
                                        <div class="param-item slots">
                                            <div class="title">
                                                Количество слотов
                                            </div>
                                            <div class="value">
                                                130
                                            </div>
                                        </div>
                                        <div class="param-item minbet">
                                            <div class="title">
                                                Ставки минимальные
                                            </div>
                                            <div class="value">
                                                20
                                            </div>
                                        </div>
                                        <div class="param-item maxbet">
                                            <div class="title">
                                                Ставки максимальные
                                            </div>
                                            <div class="value">
                                                100
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <div class="stats">
                                            <div class="rating-item stat-item green">
                                                <div class="title">
                                                    Рейтинг Игроков
                                                </div>
                                                <div class="circle" data-percent="84" data-color="#82ff17">
                                                </div>
                                            </div>
                                            <div class="rating-item stat-item yellow">

                                                <div class="title">
                                                    Рейтинг Сайта
                                                </div>
                                                <div class="circle" data-percent="93" data-color="#e3d107">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link" target="_blank">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-item size-3 blue-light" style="left: 56.2%; top: 37%;">
                                <div class="map-item-marker">
                                    <span>Eclipse Casino Batumi</span>
                                </div>
                                <div class="map-item-popup">
                                    <button class="close"></button>
                                    <div class="head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="contacts">
                                            <address class="address">
                                                ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                            </address>
                                            <a href="tel:+ 995 557 110 000" class="phone">
                                                + 995 557 110 000
                                            </a>
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, <!-- Пунто- Банко, --> 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                        </div>
                                    </div>
                                    <div class="params">
                                        <div class="param-item square">
                                            <div class="title">
                                                Площадь
                                            </div>
                                            <div class="value">
                                                2071m2
                                            </div>
                                        </div>
                                        <div class="param-item range">
                                            <div class="title">
                                                Ассортимент игр
                                            </div>
                                            <div class="value">
                                                22
                                            </div>
                                        </div>
                                        <div class="param-item tables">
                                            <div class="title">
                                                Количество столов
                                            </div>
                                            <div class="value">
                                                91
                                            </div>
                                        </div>
                                        <div class="param-item slots">
                                            <div class="title">
                                                Количество слотов
                                            </div>
                                            <div class="value">
                                                130
                                            </div>
                                        </div>
                                        <div class="param-item minbet">
                                            <div class="title">
                                                Ставки минимальные
                                            </div>
                                            <div class="value">
                                                20
                                            </div>
                                        </div>
                                        <div class="param-item maxbet">
                                            <div class="title">
                                                Ставки максимальные
                                            </div>
                                            <div class="value">
                                                100
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <div class="stats">
                                            <div class="rating-item stat-item green">
                                                <div class="title">
                                                    Рейтинг Игроков
                                                </div>
                                                <div class="circle" data-percent="84" data-color="#82ff17">
                                                </div>
                                            </div>
                                            <div class="rating-item stat-item yellow">

                                                <div class="title">
                                                    Рейтинг Сайта
                                                </div>
                                                <div class="circle" data-percent="93" data-color="#e3d107">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link" target="_blank">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-item size-1 blue-light popup-top-offset" style="left: 19.8%; top: 27%; ">
                                <div class="map-item-marker">
                                    <span>Casino 4</span>
                                </div>
                                <div class="map-item-popup">
                                    <button class="close"></button>
                                    <div class="head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="contacts">
                                            <address class="address">
                                                ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                            </address>
                                            <a href="tel:+ 995 557 110 000" class="phone">
                                                + 995 557 110 000
                                            </a>
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, <!-- Пунто- Банко, --> 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                        </div>
                                    </div>
                                    <div class="params">
                                        <div class="param-item square">
                                            <div class="title">
                                                Площадь
                                            </div>
                                            <div class="value">
                                                2071m2
                                            </div>
                                        </div>
                                        <div class="param-item range">
                                            <div class="title">
                                                Ассортимент игр
                                            </div>
                                            <div class="value">
                                                22
                                            </div>
                                        </div>
                                        <div class="param-item tables">
                                            <div class="title">
                                                Количество столов
                                            </div>
                                            <div class="value">
                                                91
                                            </div>
                                        </div>
                                        <div class="param-item slots">
                                            <div class="title">
                                                Количество слотов
                                            </div>
                                            <div class="value">
                                                130
                                            </div>
                                        </div>
                                        <div class="param-item minbet">
                                            <div class="title">
                                                Ставки минимальные
                                            </div>
                                            <div class="value">
                                                20
                                            </div>
                                        </div>
                                        <div class="param-item maxbet">
                                            <div class="title">
                                                Ставки максимальные
                                            </div>
                                            <div class="value">
                                                100
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <div class="stats">
                                            <div class="rating-item stat-item green">
                                                <div class="title">
                                                    Рейтинг Игроков
                                                </div>
                                                <div class="circle" data-percent="84" data-color="#82ff17">
                                                </div>
                                            </div>
                                            <div class="rating-item stat-item yellow">

                                                <div class="title">
                                                    Рейтинг Сайта
                                                </div>
                                                <div class="circle" data-percent="93" data-color="#e3d107">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link" target="_blank">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-item size-2 blue popup-right popup-top-offset" style="left: 79.8%; top: 27%; ">
                                <div class="map-item-marker">
                                    <span>Casino 5</span>
                                </div>
                                <div class="map-item-popup">
                                    <button class="close"></button>
                                    <div class="head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="contacts">
                                            <address class="address">
                                                ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                            </address>
                                            <a href="tel:+ 995 557 110 000" class="phone">
                                                + 995 557 110 000
                                            </a>
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, <!-- Пунто- Банко, --> 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                        </div>
                                    </div>
                                    <div class="params">
                                        <div class="param-item square">
                                            <div class="title">
                                                Площадь
                                            </div>
                                            <div class="value">
                                                2071m2
                                            </div>
                                        </div>
                                        <div class="param-item range">
                                            <div class="title">
                                                Ассортимент игр
                                            </div>
                                            <div class="value">
                                                22
                                            </div>
                                        </div>
                                        <div class="param-item tables">
                                            <div class="title">
                                                Количество столов
                                            </div>
                                            <div class="value">
                                                91
                                            </div>
                                        </div>
                                        <div class="param-item slots">
                                            <div class="title">
                                                Количество слотов
                                            </div>
                                            <div class="value">
                                                130
                                            </div>
                                        </div>
                                        <div class="param-item minbet">
                                            <div class="title">
                                                Ставки минимальные
                                            </div>
                                            <div class="value">
                                                20
                                            </div>
                                        </div>
                                        <div class="param-item maxbet">
                                            <div class="title">
                                                Ставки максимальные
                                            </div>
                                            <div class="value">
                                                100
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <div class="stats">
                                            <div class="rating-item stat-item green">
                                                <div class="title">
                                                    Рейтинг Игроков
                                                </div>
                                                <div class="circle" data-percent="84" data-color="#82ff17">
                                                </div>
                                            </div>
                                            <div class="rating-item stat-item yellow">

                                                <div class="title">
                                                    Рейтинг Сайта
                                                </div>
                                                <div class="circle" data-percent="93" data-color="#e3d107">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link" target="_blank">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-item size-3 blue-light popup-right popup-bottom-offset" style="left: 82.8%; top: 81%; ">
                                <div class="map-item-marker">
                                    <span>Casino 6</span>
                                </div>
                                <div class="map-item-popup">
                                    <button class="close"></button>
                                    <div class="head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="contacts">
                                            <address class="address">
                                                ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                            </address>
                                            <a href="tel:+ 995 557 110 000" class="phone">
                                                + 995 557 110 000
                                            </a>
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, <!-- Пунто- Банко, --> 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                        </div>
                                    </div>
                                    <div class="params">
                                        <div class="param-item square">
                                            <div class="title">
                                                Площадь
                                            </div>
                                            <div class="value">
                                                2071m2
                                            </div>
                                        </div>
                                        <div class="param-item range">
                                            <div class="title">
                                                Ассортимент игр
                                            </div>
                                            <div class="value">
                                                22
                                            </div>
                                        </div>
                                        <div class="param-item tables">
                                            <div class="title">
                                                Количество столов
                                            </div>
                                            <div class="value">
                                                91
                                            </div>
                                        </div>
                                        <div class="param-item slots">
                                            <div class="title">
                                                Количество слотов
                                            </div>
                                            <div class="value">
                                                130
                                            </div>
                                        </div>
                                        <div class="param-item minbet">
                                            <div class="title">
                                                Ставки минимальные
                                            </div>
                                            <div class="value">
                                                20
                                            </div>
                                        </div>
                                        <div class="param-item maxbet">
                                            <div class="title">
                                                Ставки максимальные
                                            </div>
                                            <div class="value">
                                                100
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <div class="stats">
                                            <div class="rating-item stat-item green">
                                                <div class="title">
                                                    Рейтинг Игроков
                                                </div>
                                                <div class="circle" data-percent="84" data-color="#82ff17">
                                                </div>
                                            </div>
                                            <div class="rating-item stat-item yellow">

                                                <div class="title">
                                                    Рейтинг Сайта
                                                </div>
                                                <div class="circle" data-percent="93" data-color="#e3d107">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link" target="_blank">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-item size-4 blue popup-right" style="left: 75.8%; top: 41%; ">
                                <div class="map-item-marker">
                                    <span>Casino 7</span>
                                </div>
                                <div class="map-item-popup">
                                    <button class="close"></button>
                                    <div class="head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="contacts">
                                            <address class="address">
                                                ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                            </address>
                                            <a href="tel:+ 995 557 110 000" class="phone">
                                                + 995 557 110 000
                                            </a>
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, <!-- Пунто- Банко, --> 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                        </div>
                                    </div>
                                    <div class="params">
                                        <div class="param-item square">
                                            <div class="title">
                                                Площадь
                                            </div>
                                            <div class="value">
                                                2071m2
                                            </div>
                                        </div>
                                        <div class="param-item range">
                                            <div class="title">
                                                Ассортимент игр
                                            </div>
                                            <div class="value">
                                                22
                                            </div>
                                        </div>
                                        <div class="param-item tables">
                                            <div class="title">
                                                Количество столов
                                            </div>
                                            <div class="value">
                                                91
                                            </div>
                                        </div>
                                        <div class="param-item slots">
                                            <div class="title">
                                                Количество слотов
                                            </div>
                                            <div class="value">
                                                130
                                            </div>
                                        </div>
                                        <div class="param-item minbet">
                                            <div class="title">
                                                Ставки минимальные
                                            </div>
                                            <div class="value">
                                                20
                                            </div>
                                        </div>
                                        <div class="param-item maxbet">
                                            <div class="title">
                                                Ставки максимальные
                                            </div>
                                            <div class="value">
                                                100
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <div class="stats">
                                            <div class="rating-item stat-item green">
                                                <div class="title">
                                                    Рейтинг Игроков
                                                </div>
                                                <div class="circle" data-percent="84" data-color="#82ff17">
                                                </div>
                                            </div>
                                            <div class="rating-item stat-item yellow">

                                                <div class="title">
                                                    Рейтинг Сайта
                                                </div>
                                                <div class="circle" data-percent="93" data-color="#e3d107">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link" target="_blank">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-item size-3 blue-light popup-bottom-offset" style="left: 52%; top: 82%; ">
                                <div class="map-item-marker">
                                    <span>Casino 8</span>
                                </div>
                                <div class="map-item-popup">
                                    <button class="close"></button>
                                    <div class="head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="contacts">
                                            <address class="address">
                                                ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                            </address>
                                            <a href="tel:+ 995 557 110 000" class="phone">
                                                + 995 557 110 000
                                            </a>
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, <!-- Пунто- Банко, --> 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                        </div>
                                    </div>
                                    <div class="params">
                                        <div class="param-item square">
                                            <div class="title">
                                                Площадь
                                            </div>
                                            <div class="value">
                                                2071m2
                                            </div>
                                        </div>
                                        <div class="param-item range">
                                            <div class="title">
                                                Ассортимент игр
                                            </div>
                                            <div class="value">
                                                22
                                            </div>
                                        </div>
                                        <div class="param-item tables">
                                            <div class="title">
                                                Количество столов
                                            </div>
                                            <div class="value">
                                                91
                                            </div>
                                        </div>
                                        <div class="param-item slots">
                                            <div class="title">
                                                Количество слотов
                                            </div>
                                            <div class="value">
                                                130
                                            </div>
                                        </div>
                                        <div class="param-item minbet">
                                            <div class="title">
                                                Ставки минимальные
                                            </div>
                                            <div class="value">
                                                20
                                            </div>
                                        </div>
                                        <div class="param-item maxbet">
                                            <div class="title">
                                                Ставки максимальные
                                            </div>
                                            <div class="value">
                                                100
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <div class="stats">
                                            <div class="rating-item stat-item green">
                                                <div class="title">
                                                    Рейтинг Игроков
                                                </div>
                                                <div class="circle" data-percent="84" data-color="#82ff17">
                                                </div>
                                            </div>
                                            <div class="rating-item stat-item yellow">

                                                <div class="title">
                                                    Рейтинг Сайта
                                                </div>
                                                <div class="circle" data-percent="93" data-color="#e3d107">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link" target="_blank">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-item size-3 blue popup-bottom-offset" style="left: 30%; top: 83%; ">
                                <div class="map-item-marker">
                                    <span>Casino 9</span>
                                </div>
                                <div class="map-item-popup">
                                    <button class="close"></button>
                                    <div class="head">
                                        <div class="logo">
                                            <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                        </div>
                                        <div class="contacts">
                                            <address class="address">
                                                ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                            </address>
                                            <a href="tel:+ 995 557 110 000" class="phone">
                                                + 995 557 110 000
                                            </a>
                                        </div>
                                        <div class="descr">
                                            В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, <!-- Пунто- Банко, --> 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                        </div>
                                    </div>
                                    <div class="params">
                                        <div class="param-item square">
                                            <div class="title">
                                                Площадь
                                            </div>
                                            <div class="value">
                                                2071m2
                                            </div>
                                        </div>
                                        <div class="param-item range">
                                            <div class="title">
                                                Ассортимент игр
                                            </div>
                                            <div class="value">
                                                22
                                            </div>
                                        </div>
                                        <div class="param-item tables">
                                            <div class="title">
                                                Количество столов
                                            </div>
                                            <div class="value">
                                                91
                                            </div>
                                        </div>
                                        <div class="param-item slots">
                                            <div class="title">
                                                Количество слотов
                                            </div>
                                            <div class="value">
                                                130
                                            </div>
                                        </div>
                                        <div class="param-item minbet">
                                            <div class="title">
                                                Ставки минимальные
                                            </div>
                                            <div class="value">
                                                20
                                            </div>
                                        </div>
                                        <div class="param-item maxbet">
                                            <div class="title">
                                                Ставки максимальные
                                            </div>
                                            <div class="value">
                                                100
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <div class="stats">
                                            <div class="rating-item stat-item green">
                                                <div class="title">
                                                    Рейтинг Игроков
                                                </div>
                                                <div class="circle" data-percent="84" data-color="#82ff17">
                                                </div>
                                            </div>
                                            <div class="rating-item stat-item yellow">

                                                <div class="title">
                                                    Рейтинг Сайта
                                                </div>
                                                <div class="circle" data-percent="93" data-color="#e3d107">
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link" target="_blank">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Карта, запрограмированная через Google Maps Api и массив данных -->
                    <!-- <div class="map-wrapper">
                        <div class="map-item-popup">
                            <button class="close"></button>
                            <div class="head">
                                <div class="logo">
                                    <img src="https://demo-lookincasino.com/img/eclipse-logo.png">
                                </div>
                                <div class="contacts">
                                    <address class="address">
                                        ул. Леха и Марии Качинских 1,  Батуми, Грузия.
                                    </address>
                                    <a href="tel:+ 995 557 110 000" class="phone">
                                        + 995 557 110 000
                                    </a>
                                </div>
                                <div class="descr">
                                    В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, Пунто- Банко, 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.
                                </div>
                            </div>
                            <div class="params">
                                <div class="param-item square">
                                    <div class="title">
                                        Площадь
                                    </div>
                                    <div class="value">
                                        2071m2
                                    </div>
                                </div>
                                <div class="param-item range">
                                    <div class="title">
                                        Ассортимент игр
                                    </div>
                                    <div class="value">
                                        22
                                    </div>
                                </div>
                                <div class="param-item tables">
                                    <div class="title">
                                        Количество столов
                                    </div>
                                    <div class="value">
                                        91
                                    </div>
                                </div>
                                <div class="param-item slots">
                                    <div class="title">
                                        Количество слотов
                                    </div>
                                    <div class="value">
                                        130
                                    </div>
                                </div>
                                <div class="param-item minbet">
                                    <div class="title">
                                        Ставки минимальные
                                    </div>
                                    <div class="value">
                                        20
                                    </div>
                                </div>
                                <div class="param-item maxbet">
                                    <div class="title">
                                        Ставки максимальные
                                    </div>
                                    <div class="value">
                                        100
                                    </div>
                                </div>
                            </div>
                            <div class="rating">
                                <div class="stats">
                                    <div class="rating-item stat-item green">
                                        <div class="title">
                                            Рейтинг Игроков
                                        </div>
                                        <div class="circle" data-percent="84" data-color="#82ff17">
                                        </div>
                                    </div>
                                    <div class="rating-item stat-item yellow">

                                        <div class="title">
                                            Рейтинг Сайта
                                        </div>
                                        <div class="circle" data-percent="93" data-color="#e3d107">
                                        </div>
                                    </div>
                                </div>
                                <a href="/" class="button white casino-link" target="_blank">
                                    Обзор казино
                                </a>
                            </div>
                        </div> 

                         <div class="casino-rating-map" id="casino-rating-map"></div>
                         
                    </div> -->
                </div>
            </section>


            <section class="block block-three-columns-recommendations">
                <div class="wrap">
                    <div class="content-column advantages">

                        <!-- <div class="column-items-groups"> -->
                            <div class="column-items-group">
                                <div class="block-title">
                                    Используйте все возможности Lookin Casino
                                </div>
                                <div class="column-items advantage-items">
                                    <div class="advantage-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/advantage-item-1.png">
                                        </div>
                                        <div class="descr">
                                            Сравнивайте предложения игорных заведений. Выбирайте лучшее по рейтингу и отзывам игроков
                                        </div>
                                    </div>
                                    <div class="advantage-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/advantage-item-2.png">
                                        </div>
                                        <div class="descr">
                                            Планируйте отдых для всей семьи, используйте удобный фильтр для поиска авиабилетов, отелей, ресторанов, развлекательных мероприятий
                                        </div>
                                    </div>
                                    <div class="advantage-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/advantage-item-3.png">
                                        </div>
                                        <div class="descr">
                                            Задавайте вопросы и получайте ответы через удобный колл центр.
                                        </div>
                                    </div>
                                    <div class="advantage-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/advantage-item-4.png">
                                        </div>
                                        <div class="descr">
                                            Используйте мобильное приложение, чтобы быть в курсе всех событий
                                        </div>
                                    </div>
                                    <div class="advantage-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/advantage-item-5.png">
                                        </div>
                                        <div class="descr">
                                            Участвуйте в акциях и розыгрышах. Получайте приятные бонусы и подарки от игорных заведений
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-items-group">
                                <div class="block-title">
                                    Поделитесь своим мнением <br>
                                    с другими игроками
                                </div>
                                <div class="column-items share-items">
                                    <div class="share-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/icon-share-rate.png">
                                        </div>
                                        <a href="/" class="descr">
                                            Оценить игорное заведение
                                        </a>
                                    </div>
                                    <div class="share-item">
                                        <div class="icon">
                                            <img src="https://demo-lookincasino.com/img/icon-share-review.png">
                                        </div>
                                        <a href="/" class="descr">
                                            Написать отзыв
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="content-column offers">
                        <!-- <div class="column-items-groups"> -->
                            <div class="column-items-group">
                                <div class="block-title">
                                    Популярные спецпредложения
                                </div>
                                <div class="column-items offer-items">
                                    <div class="offer-group">
                                        <div class="offer-group-title">
                                            Лучшие заведения для игры в рулетку
                                        </div>
                                        <a href="/" class="offer-group-link">
                                            Показать все
                                        </a>
                                        <div class="offer-group-outer">
                                            <div class="offer-group-slider">
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/tourism-item.jpg);">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Eclipse Casino
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Рулетка 1
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Рулетка 2
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Рулетка 3
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Рулетка 4
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="slider-controls">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offer-group">
                                        <div class="offer-group-title">
                                            Лучшие заведение для игры в покер
                                        </div>
                                        <a href="/" class="offer-group-link">
                                            Показать все
                                        </a>
                                        <div class="offer-group-outer">
                                            <div class="offer-group-slider">
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/tourism-item.jpg);">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Eclipse Casion
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Покер клуб 1
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Покер клуб 2
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Покер клуб 3
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Покер клуб 4
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="slider-controls">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offer-group">
                                        <div class="offer-group-title">
                                            Лучшие заведения для ставок на спорт
                                        </div>
                                        <a href="/" class="offer-group-link">
                                            Показать все
                                        </a>
                                        <div class="offer-group-outer">
                                            <div class="offer-group-slider">
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/tourism-item.jpg);">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Eclipse Casino
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Букмекер 1
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Букмекер 2
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Букмекер 3
                                                    </div>
                                                </a>
                                                <a href="/" class="offer-item">
                                                    <div class="offer-item-photo" style="background-image: url(https://demo-lookincasino.com/img/news-dummy.jpg);">
                                                        <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                                    </div>
                                                    <div class="offer-item-title">
                                                        Букмекер 4
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="slider-controls">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/" class="all-items-link">
                                        Все спецпредложения
                                    </a>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="content-column activities">
                        <!-- <div class="column-items-groups"> -->
                            <div class="column-items-group">
                                <div class="block-title">
                                    Избранные направления <br>
                                    для игорного туризма
                                </div>
                                <div class="column-items game-tourism-items">
                                    <a href="/" class="tourism-item">
                                        <div class="tourism-item-photo" style="background-image: url('https://demo-lookincasino.com/img/tourism-item.jpg');"></div>
                                        <div class="tourism-item-title">
                                            Eclipse Casino
                                        </div>
                                    </a>
                                    <a href="/" class="tourism-item">
                                        <div class="tourism-item-photo" style="background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                        </div>
                                        <div class="tourism-item-title">
                                            Casino 1
                                        </div>
                                    </a>
                                    <a href="/" class="tourism-item">
                                        <div class="tourism-item-photo" style="background-image: url('https://demo-lookincasino.com/img/news-dummy.jpg');">
                                            <img src="https://demo-lookincasino.com/img/image-icon-dummy.png">
                                        </div>
                                        <div class="tourism-item-title">
                                            Casino 2
                                        </div>
                                    </a>
                                </div>
                                <a href="/" class="all-items-link">
                                    Все направления
                                </a>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </section>

            <section class="block block-mobile-app">
                <div class="wrap">
                    <div class="phone-figure"></div>
                    <div class="app-text">
                        <div class="app-title">
                            Мобильное приложение Единой информационной <br>
                            системы в сфере игорного бизнеса
                        </div>
                        <div class="app-descr">
                            Находите информацию про казино, сохраняя параметры поиска в закладки приложения. Будьте в курсе всех событий по интересующим вас казино. Встроенная система аналитики позволяет найти лучшие казино и забронировать игровой тур в 2 клика.
                        </div>
                        <div class="app-images">
                            <a href="/" class="store-link" target="blank" rel="nofollow">
                                <img src="https://demo-lookincasino.com/img/app-store.png">
                            </a>
                            <a href="/" class="store-link" rel="nofollow">
                                <img src="https://demo-lookincasino.com/img/google-play.png">
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="block block-best-places block-visibility-animation">
                <div class="wrap">
                    <div class="block-title">
                        Лучшие заведения месяца
                    </div>
                    <div class="place-type-selectors">
                        <div class="place-type-link casino active">
                            Казино
                        </div>
                        <div class="place-type-link poker-club">
                            Покер клубы
                        </div>
                        <div class="place-type-link bookmaker">
                            Букмекерские конторы
                        </div>
                        <div class="place-type-link hotel">
                            Отели
                        </div>
                        <div class="place-type-link restaurant">
                            Рестораны
                        </div>
                    </div>
                    <div class="best-places-tabs">
                        <div class="place-type-tab casino active">
                            <div class="place-type-slider" id="tab-best-casino-slider">
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/eclipse-logo-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Eclipse Casino
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button best-item-link">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.0
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Casino 1
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
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
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доверие
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Условие игр / Правила / Ставки
                                                </div>
                                                <div class="parameter-value">
                                                    3.7
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.7 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / качество / доступность
                                                </div>
                                                <div class="parameter-value">
                                                    3.5
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.5 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Развлечения
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
                                                    Комфорт
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
                                                    Качество сервиса
                                                </div>
                                                <div class="parameter-value">
                                                    2.6
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.6 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Расположение
                                                </div>
                                                <div class="parameter-value">
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button best-item-link">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    2.5
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Casino 2
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((2.5 * 12px) + (2 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доверие
                                                </div>
                                                <div class="parameter-value">
                                                    2.9
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.9 * 20%)"></div>
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
                                                    1.5
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(1.5 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Развлечения
                                                </div>
                                                <div class="parameter-value">
                                                    2.3
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.3 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Комфорт
                                                </div>
                                                <div class="parameter-value">
                                                    3.8
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.8 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Качество сервиса
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
                                                    Расположение
                                                </div>
                                                <div class="parameter-value">
                                                    3.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.4 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button best-item-link">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.1
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Casino 3
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((4.1 * 12px) + (4 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доверие
                                                </div>
                                                <div class="parameter-value">
                                                    3.9
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.9 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Условие игр / Правила / Ставки
                                                </div>
                                                <div class="parameter-value">
                                                    2.7
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.7 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / качество / доступность
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
                                                    Развлечения
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
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
                                                    3.6
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.6 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Расположение
                                                </div>
                                                <div class="parameter-value">
                                                    2.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.4 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button best-item-link">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>

                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.0
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Casino 4
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button best-item-link">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    2.5
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Casino 5
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((2.5 * 12px) + (2 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доверие
                                                </div>
                                                <div class="parameter-value">
                                                    2.9
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.9 * 20%)"></div>
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
                                                    1.5
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(1.5 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Развлечения
                                                </div>
                                                <div class="parameter-value">
                                                    2.3
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.3 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Комфорт
                                                </div>
                                                <div class="parameter-value">
                                                    3.8
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.8 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Качество сервиса
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
                                                    Расположение
                                                </div>
                                                <div class="parameter-value">
                                                    3.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.4 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button best-item-link">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.1
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Casino 6
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((4.1 * 12px) + (4 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доверие
                                                </div>
                                                <div class="parameter-value">
                                                    3.9
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.9 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Условие игр / Правила / Ставки
                                                </div>
                                                <div class="parameter-value">
                                                    2.7
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.7 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / качество / доступность
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
                                                    Развлечения
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
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
                                                    3.6
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.6 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Расположение
                                                </div>
                                                <div class="parameter-value">
                                                    2.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.4 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button best-item-link">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.0
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Casino 7
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button best-item-link">
                                            Обзор казино
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-type-tab poker-club">
                            <div class="place-type-slider" id="tab-best-poker-clubs-slider">
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/eclipse-logo-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Eclipse Casino
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                        <a href="/" class="button best-item-link">
                                            Обзор покер клуба
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.0
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Покер клуб 1
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                        <a href="/" class="button best-item-link">
                                            Обзор покер клуба
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Покер клуб 2
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                        <a href="/" class="button best-item-link">
                                            Обзор покер клуба
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.0
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Покер клуб 3
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                        <a href="/" class="button best-item-link">
                                            Обзор покер клуба
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.0
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Покер клуб 4
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                        <a href="/" class="button best-item-link">
                                            Обзор покер клуба
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Покер клуб 5
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                        <a href="/" class="button best-item-link">
                                            Обзор покер клуба
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.0
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Покер клуб 6
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                        <a href="/" class="button best-item-link">
                                            Обзор покер клуба
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-type-tab bookmaker">
                            <div class="place-type-slider" id="tab-best-bookmakers-slider">
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/eclipse-logo-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Eclipse Casino
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доверие
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
                                                    Линия / Правила / Ставки
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
                                                    Доступность
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
                                                    Акции / Бонусы
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
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
                                        <a href="/" class="button best-item-link">
                                            Обзор букмекера
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.7
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Букмекер 1
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доверие
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
                                                    Линия / Правила / Ставки
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
                                                    Доступность
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Акции / Бонусы
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
                                                    4.9
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.9 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Качество сервиса
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                                </div>
                                            </div>
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
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор букмекера
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.2
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Букмекер 2
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                                    Линия / Правила / Ставки
                                                </div>
                                                <div class="parameter-value">
                                                    4.1
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.1 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доступность
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
                                                    Акции / Бонусы
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
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
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
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор букмекера
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.7
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Букмекер 3
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доверие
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
                                                    Линия / Правила / Ставки
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
                                                    Доступность
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Акции / Бонусы
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
                                                    4.9
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.9 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Качество сервиса
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                                </div>
                                            </div>
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
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор букмекера
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.2
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Букмекер 4
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                                    Линия / Правила / Ставки
                                                </div>
                                                <div class="parameter-value">
                                                    4.1
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.1 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доступность
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
                                                    Акции / Бонусы
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
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
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
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор букмекера
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.7
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Букмекер 5
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доверие
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
                                                    Линия / Правила / Ставки
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
                                                    Доступность
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Акции / Бонусы
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
                                                    4.9
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.9 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Качество сервиса
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                                </div>
                                            </div>
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
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор букмекера
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.2
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Букмекер 6
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
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
                                                    Линия / Правила / Ставки
                                                </div>
                                                <div class="parameter-value">
                                                    4.1
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.1 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доступность
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
                                                    Акции / Бонусы
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
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
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
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор букмекера
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.7
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Букмекер 7
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Доверие
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
                                                    Линия / Правила / Ставки
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
                                                    Доступность
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Акции / Бонусы
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
                                                    4.9
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.9 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Качество сервиса
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                                </div>
                                            </div>
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
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор букмекера
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-type-tab hotel">
                            <div class="place-type-slider" id="tab-best-hotels-slider">
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/eclipse-logo-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.5
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Eclipse Casino
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Услуги и удобства
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
                                                    Еда / Качество
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
                                                    Стиль отеля
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
                                                    Оснащённость номера
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
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
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Расположение
                                                </div>
                                                <div class="parameter-value">
                                                    4.1
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.1 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор отеля
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Отель 1
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Услуги и удобства
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
                                                    Еда / Качество
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
                                                    Стиль отеля
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
                                                    Оснащённость номера
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
                                        <a href="/" class="button best-item-link">
                                            Обзор отеля
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.4
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Отель 2
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Услуги и удобства
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
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
                                                    Стиль отеля
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Оснащённость номера
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
                                                    4.3
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.3 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Расположение
                                                </div>
                                                <div class="parameter-value">
                                                    4.5
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.5 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор отеля
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Отель 3
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Услуги и удобства
                                                </div>
                                                <div class="parameter-value">
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Стиль отеля
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
                                                    Оснащённость номера
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
                                                    4.5
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.5 * 20%)"></div>
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
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор отеля
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Отель 4
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Услуги и удобства
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
                                                    Еда / Качество
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
                                                    Стиль отеля
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
                                                    Оснащённость номера
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
                                        <a href="/" class="button best-item-link">
                                            Обзор отеля
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.4
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Отель 5
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Услуги и удобства
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
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
                                                    Стиль отеля
                                                </div>
                                                <div class="parameter-value">
                                                    4.4
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.4 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Оснащённость номера
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
                                                    4.3
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.3 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Расположение
                                                </div>
                                                <div class="parameter-value">
                                                    4.5
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.5 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор отеля
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Отель 6
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Услуги и удобства
                                                </div>
                                                <div class="parameter-value">
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Стиль отеля
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
                                                    Оснащённость номера
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
                                                    4.5
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.5 * 20%)"></div>
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
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор отеля
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-type-tab restaurant">
                            <div class="place-type-slider" id="tab-best-restaurants-slider">
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/eclipse-logo-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Eclipse Casino
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
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
                                                    Обслуживание
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
                                                    Стиль ресторана
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
                                                    Диапазон цен
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
                                                    Атмосфера
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
                                        <a href="/" class="button best-item-link">
                                            Обзор ресторана
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.2
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Ресторан 1
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Обслуживание
                                                </div>
                                                <div class="parameter-value">
                                                    4.1
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.1 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Стиль ресторана
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
                                                    Диапазон цен
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
                                                    Комфорт
                                                </div>
                                                <div class="parameter-value">
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Атмосфера
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
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор ресторана
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    3.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Ресторан 2
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
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
                                                    Обслуживание
                                                </div>
                                                <div class="parameter-value">
                                                    3.7
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.7 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Стиль ресторана
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
                                                    Диапазон цен
                                                </div>
                                                <div class="parameter-value">
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
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
                                                    Атмосфера
                                                </div>
                                                <div class="parameter-value">
                                                    2.6
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.6 * 20%)"></div>
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
                                        <a href="/" class="button best-item-link">
                                            Обзор ресторана
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    3.8
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Ресторан 3
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
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
                                                    Обслуживание
                                                </div>
                                                <div class="parameter-value">
                                                    3.7
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.7 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Стиль ресторана
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Диапазон цен
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
                                                    2.8
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.8 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Атмосфера
                                                </div>
                                                <div class="parameter-value">
                                                    3.5
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.5 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Расположение
                                                </div>
                                                <div class="parameter-value">
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор ресторана
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    4.2
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Ресторан 4
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Обслуживание
                                                </div>
                                                <div class="parameter-value">
                                                    4.1
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.1 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Стиль ресторана
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
                                                    Диапазон цен
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
                                                    Комфорт
                                                </div>
                                                <div class="parameter-value">
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Атмосфера
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
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор ресторана
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    3.6
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Ресторан 5
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
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
                                                    Обслуживание
                                                </div>
                                                <div class="parameter-value">
                                                    3.7
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.7 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Стиль ресторана
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
                                                    Диапазон цен
                                                </div>
                                                <div class="parameter-value">
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
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
                                                    Атмосфера
                                                </div>
                                                <div class="parameter-value">
                                                    2.6
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.6 * 20%)"></div>
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
                                        <a href="/" class="button best-item-link">
                                            Обзор ресторана
                                        </a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="place-item">
                                        <div class="item-head">
                                            <div class="logo">
                                                <img src="https://demo-lookincasino.com/img/logo-dummy-2.jpg">
                                            </div>
                                            <div class="rate-value-group">
                                                <div class="rate-title">
                                                    средняя<br>
                                                    оценка
                                                </div>
                                                <div class="rate-value">
                                                    3.8
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Ресторан 6
                                            </div>
                                            <div class="item-stars stars-rate-group">
                                                <div class="stars-rate grey stars-rate-max">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="stars-rate yellow stars-rate-current" style="width: calc((3.5 * 12px) + (3 * 7px))">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-params">
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Еда / Качество
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
                                                    Обслуживание
                                                </div>
                                                <div class="parameter-value">
                                                    3.7
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.7 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Стиль ресторана
                                                </div>
                                                <div class="parameter-value">
                                                    4.2
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.2 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Диапазон цен
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
                                                    2.8
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(2.8 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Атмосфера
                                                </div>
                                                <div class="parameter-value">
                                                    3.5
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(3.5 * 20%)"></div>
                                                </div>
                                            </div>
                                            <div class="parameter">
                                                <div class="parameter-title">
                                                    Расположение
                                                </div>
                                                <div class="parameter-value">
                                                    4.0
                                                </div>
                                                <div class="parameter-bar">
                                                    <div class="parameter-strip" style="width: calc(4.0 * 20%)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/" class="button best-item-link">
                                            Обзор ресторана
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                            <a href="https://demo-lookincasino.com/news/" class="button all-news-link">
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
                            <a href="https://demo-lookincasino.com/news/" class="button all-news-link">
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
                            <a href="https://demo-lookincasino.com/news/" class="button all-news-link">
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
                            <a href="https://demo-lookincasino.com/news/" class="button all-news-link">
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
                            <a href="https://demo-lookincasino.com/news/" class="button all-news-link">
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
                            <a href="https://demo-lookincasino.com/news/" class="button all-news-link">
                                Читать все новости
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="block block-why-choose-us">
                <div class="wrap">
                    <div class="block-title">
                        Почему выбирают Lookin Casino
                    </div>
                    <div class="advantages">
                        <div class="advantage-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/img/icon-advantage-1.png">
                            </div>
                            <div class="title">
                                Актуально
                            </div>
                            <div class="descr">
                                Мы ежедневно собираем и обновляем базу игорных заведений. Казино, Покер клубы, Букмекерские конторы, Лотереи
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="advantage-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/img/icon-advantage-2.png">
                            </div>
                            <div class="title">
                                Экономно
                            </div>
                            <div class="descr">
                                Вы сможете найти выгодные предложения, что сэкономит не только ваши деньги, но и время. Авиабилеты, отели, рестораны
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="advantage-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/img/icon-advantage-3.png">
                            </div>
                            <div class="title">
                                Надежно
                            </div>
                            <div class="descr">
                                Все данные, которые вы оставляете на сайте и в мобильном приложении защищены и находятся на закрытых серверах
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="advantage-item">
                            <div class="icon">
                                <img src="https://demo-lookincasino.com/img/icon-advantage-4.png">
                            </div>
                            <div class="title">
                                Удобно
                            </div>
                            <div class="descr">
                                Все что вам необходимо всегда под рукой. Независимый рейтинг и обзор игорных заведений, отзывы игроков, календарь событий
                            </div>
                        </div>
                    </div>
                    <div class="poll">
                        <div class="title">
                            Поделитесь мнением о качестве работы единой информационной системы
                        </div>
                        <button class="button blue poll-button">
                            Перейти к опросу
                        </button>
                    </div>
                </div>
            </section>

            <section class="block block-casino-players-rating  block-visibility-animation">
                <div class="wrap">
                    <div class="block-casino-list">
                        <div class="block-title">
                            Обзор казино
                        </div>
                        <div class="casino-list">
                            <div class="list-item">
                                Eclipse Casino
                            </div>
                            <div class="list-item">
                                Casino 1
                            </div>
                            <div class="list-item">
                                Casino 2
                            </div>
                            <div class="list-item">
                                Casino 3
                            </div>
                            <div class="list-item">
                                Casino 4
                            </div>
                            <div class="list-item">
                                Casino 5
                            </div>
                            <div class="list-item">
                                Casino 6
                            </div>
                            <div class="list-item">
                                Casino 7
                            </div>
                        </div>
                        <a href="https://demo-lookincasino.com/casino-review/" class="button blue details-button">
                            Подробнее
                        </a>
                    </div>

                    <div class="block-players-rating block-visibility-animation">
                        <div class="block-title">
                            Рейтинг казино
                        </div>
                        <a href="https://demo-lookincasino.com/casino-rating/" class="button blue title-details-button">
                            Подробнее
                        </a>
                        <div class="players-rating-outer">
                            <div class="players-rating casino-players-rating-slider slider-top-controls" id="casino-players-rating-slider">
                                <div class="slide">
                                    <div class="rating-item">
                                        <div class="title">
                                            Eclipse Casino
                                        </div>
                                        <div class="chart">
                                            <span class="bg" style="width: 37%"></span>
                                            <span class="value">3.7</span>
                                        </div>
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
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
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white casino-link">
                                            Перейти
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="block block-logos-slider">
                <div class="wrap">
                    <div class="logos-slider" id="logos-slider">
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/eclipse-logo-2.jpg">
                            <div class="title">
                                ECLIPSE
                            </div>
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                            <div class="title">Casino 1</div>
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                            <div class="title">Casino 2</div>
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                            <div class="title">Casino 3</div>
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                            <div class="title">Casino 4</div>
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                            <div class="title">Casino 5</div>
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                            <div class="title">Casino 6</div>
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                            <div class="title">Casino 7</div>
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                            <div class="title">Casino 8</div>
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                            <div class="title">Casino 9</div>
                        </a>
                        <a href="https://demo-lookincasino.com/individual-casino/" class="slide-item">
                            <img src="https://demo-lookincasino.com/img/logo-dummy.jpg">
                            <div class="title">Casino 10</div>
                        </a>
                    </div>
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