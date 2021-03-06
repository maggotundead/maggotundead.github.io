<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Бек офис - для игровых заведений | Главная</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=1200">
    <link rel="shortcut icon" href="https://demo-lookincasino.com/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/brands.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/solid.min.css" rel="stylesheet">

    <!-- Calendar -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.css">


    <link rel="stylesheet" href="https://demo-lookincasino.com/backoffice/css/backoffice-general.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/backoffice/css/backoffice-header.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/backoffice/css/backoffice-menu.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/backoffice/css/backoffice-blocks.css">
    <link rel="stylesheet" href="https://demo-lookincasino.com/backoffice/css/backoffice-footer.css">

</head>
<body>

    <div class="wrapper">
        <header class="header">
            <div class="wrap">
                <div class="left-column logo">
                    <img src="https://demo-lookincasino.com/backoffice/img/logo-white.png">
                </div>
                <div class="center-column">
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
                </div>
                <div class="right-column">                    
                    <div class="chat-link">
                        <i class="fas fa-comment"></i>
                    </div>
                    <div class="notifications-link">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="user-group">
                        <div class="user-photo">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="user-info">
                            Имя <br>
                            Фамилия
                        </div>
                    </div>
                    <div class="settings-link">
                        <i class="fas fa-cog"></i>
                    </div>
                    <a href="https://presentation-lookincasino.com/option/" class="logout-link">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>
        </header>

        <main class="backoffice-content">
            <div class="wrap">
                <div class="content-block backoffice-category-selectors">
                    <div class="category-selectors-head">
                        <div class="user-photo" style="background-image: url('https://demo-lookincasino.com/backoffice/img/user-dummy.png');"></div>
                        <div class="user-info">
                            <div class="user-title">
                                Имя Фамилия
                            </div>
                            <div class="user-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Страна, Город
                            </div>
                        </div>
                    </div>
                    <div class="category-selectors-group">
                        <div class="category-group-title">
                            Основное
                        </div>
                        <div class="category-group-links">
                            <a href="/" class="category-group-link active">
                                <div class="icon">
                                    <i class="fas fa-th"></i>
                                </div>
                                Главная
                            </a>
                            <a href="/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                Бронирования
                            </a>
                            <a href="/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                Мои заказы
                            </a>
                            <a href="/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                Мои отзывы
                            </a>
                            <a href="/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                Накопительный счет
                            </a>
                            <a href="/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                Новости
                            </a>
                            <a href="/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                Промокоды и акции
                            </a>
                            <a href="/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                Способы оплаты
                            </a>
                        </div>
                    </div>
                    <div class="category-selectors-group">
                        <div class="category-group-title">
                            Пользовательское
                        </div>
                        <div class="category-group-links">
                            <a href="/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                Избранное
                            </a>
                            <a href="/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                                Настройки
                            </a>
                        </div>
                    </div>
                    <div class="category-selectors-group">
                        <div class="category-group-title">
                            Смена профиля
                        </div>
                        <div class="category-group-links">
                            <a href="https://demo-lookincasino.com/backoffice/backoffice-forplayers-mainpage/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                Бекофис для игроков
                            </a>
                            <a href="https://demo-lookincasino.com/backoffice/backoffice-foraffiliates-mainpage/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                Бекофис для джанкетов
                            </a>
                            <a href="https://demo-lookincasino.com/backoffice/backoffice-forgamblings-mainpage/" class="category-group-link">
                                <div class="icon">
                                    <i class="fas fa-dice-five"></i>
                                </div>
                                Бекофис для казино
                            </a>
                        </div>
                    </div>
                </div>
                <div class="page-blocks backoffice-for-gamblings">
                    <div class="block-charts-statistic">
                        <div class="content-block players-amount">
                            <div class="title">
                                Общее количество игроков
                            </div>
                            <div class="balance-details">
                                <div class="info">
                                    <div class="balance-value">
                                        <div class="icon">
                                            <i class="fas fa-user-friends"></i>
                                        </div>
                                        5432
                                    </div>
                                    <div class="progress positive">
                                        30.34%
                                    </div>
                                </div>
                                <div class="graph">
                                    <img src="https://demo-lookincasino.com/backoffice/img/chart-dummy-positive.png">
                                </div>
                            </div>
                        </div>
                        <div class="content-block today-registrations">
                            <div class="title">
                                Количество регистраций сегодня
                            </div>
                            <div class="balance-details">
                                <div class="info">
                                    <div class="balance-value">
                                        <div class="icon">
                                            <i class="fas fa-user-check"></i>
                                        </div>
                                        174
                                    </div>
                                    
                                    <div class="progress negative">
                                        20.02%
                                    </div>
                                </div>
                                <div class="graph">
                                    <img src="https://demo-lookincasino.com/backoffice/img/chart-dummy-negative.png">
                                </div>
                            </div>
                        </div>
                        <div class="content-block booking-tours">
                            <div class="title">
                                Количество забронированных туров
                            </div>
                            <div class="balance-details">
                                <div class="info">
                                    <div class="balance-value">
                                        <div class="icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        39
                                    </div>
                                    <div class="progress neutral">
                                        0%
                                    </div>
                                </div>
                                <div class="graph">
                                    <img src="https://demo-lookincasino.com/backoffice/img/chart-dummy-neutral.png">
                                </div>
                            </div>
                        </div>

                        <div class="content-block general-statistic">
                            <div class="title">
                                Статистика и отчеты
                            </div>
                            <label class="live-update-switcher">
                                <input type="checkbox" class="checkbox-default" checked hidden>
                                <span class="checkbox-text">
                                    Live update:
                                </span>
                                <span class="checkbox-custom"></span>
                            </label>
                            <div class="statisctic-main-chart">
                                <img src="https://demo-lookincasino.com/backoffice/img/chart-dummy-general.png" style="pointer-events: none;">
                            </div>
                        </div>
                    </div>
                    
                    <div class="content-block block-calendar-events">
                        <div class="calendar-head">
                            <div class="title">
                                Календарь
                            </div>
                        </div>
                        <div class="calendar-body">
                            <div id="calendar"></div>
                            <div class="events-list">
                                <div class="event-group today">
                                    <div class="event-group-title">
                                        Сегодня
                                    </div>
                                    <div class="event-group-list">
                                        <div class="event-item">
                                            Все события отмеченные в календаре выводятся списком
                                        </div>
                                        <div class="event-item">
                                            Все события отмеченные в календаре выводятся списком
                                        </div>
                                        <div class="event-item">
                                            Все события отмеченные в календаре выводятся списком
                                        </div>
                                    </div>
                                </div>
                                <div class="event-group tomorrow">
                                    <div class="event-group-title">
                                        Завтра
                                    </div>
                                    <div class="event-group-list">
                                        <div class="empty">
                                            Нет событий
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="calendar-control">
                            <button class="button white-bluelight add-event-button">
                                Добавить
                            </button>
                            <a href="/" class="all-events-link">
                                Ещё события
                            </a>
                        </div>
                    </div>

                    <div class="content-block block-players">
                        <div class="player-type-links">
                            <div class="player-type-link players-base active">
                                База игроков
                            </div>
                            <div class="player-type-link new-players">
                                Новые игроки
                            </div>
                        </div>
                        <div class="player-tabs">
                            <div class="player-tab active">
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="player-tab">
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="player-item">
                                    <div class="column photo">
                                        <img src="https://demo-lookincasino.com/backoffice/img/user-dummy.png">
                                    </div>
                                    <div class="column title">
                                        Eclipsе Casino
                                    </div>
                                    <div class="column deposit">
                                        $2 187
                                    </div>
                                    <div class="column contacts">
                                        ул. Леха и Марии Качинских 1, Батуми, Грузия.
                                        <a href="/">
                                            + 995 557 110 000
                                        </a>
                                    </div>
                                    <div class="column details">
                                        <a href="https://demo-lookincasino.com/individual-casino/" class="button white-bluelight player-link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/" class="all-items-link">
                            Показать все
                        </a>
                    </div>

                    <div class="crm-cms-education-group">
                        <div class="content-block block-crm">
                            <div class="title">
                                CRM
                            </div>
                            <div class="crm-list">
                                <div class="control-links crm-control">
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-filter"></i>
                                        </div>
                                        Воронка продаж
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                        Чат и звонки 
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-inbox"></i>
                                        </div>
                                        Открытые задачи 
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        Рабочий календарь
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-bullhorn"></i>
                                        </div>
                                        Маркетинг 
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-align-center"></i>
                                        </div>
                                        Живая лента
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-th"></i>
                                        </div>
                                        Еще...
                                    </div>
                                </div>
                                <div class="control-content crm-content">
                                    <img src="https://demo-lookincasino.com/backoffice/img/crm-dummy.png">
                                </div>
                            </div>
                        </div>
                        <div class="content-block block-cms">
                            <div class="title">
                                CMS
                            </div>
                            <div class="cms-list">
                                <div class="control-links cms-control">
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-cog"></i>
                                        </div>
                                        Управление сайтом
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-ad"></i>
                                        </div>
                                        Баннеры
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-image"></i>
                                        </div>
                                        Фото
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-video"></i>
                                        </div>
                                        Видео
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-align-left"></i>
                                        </div>
                                        Текст / описание
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                        Траффик
                                    </div>
                                    <div class="control-link">
                                        <div class="icon">
                                            <i class="fas fa-th"></i>
                                        </div>
                                        Еще...
                                    </div>
                                </div>
                                <div class="control-content cms-content">
                                    <img src="https://demo-lookincasino.com/backoffice/img/cms-dummy.png">
                                </div>
                            </div>
                        </div>
                        <div class="content-block block-education">
                            <div class="title">
                                Обучение
                            </div>
                            <div class="education-items">
                                <div class="education-item">
                                    <div class="icon">
                                        <i class="far fa-file-alt"></i>
                                    </div>
                                    Заголовок обучающего документа или статьи
                                </div>
                                <div class="education-item">
                                    <div class="icon">
                                        <i class="far fa-image"></i>
                                    </div>
                                    Обучающее фото или галерея
                                </div>
                                <div class="education-item">
                                    <div class="icon">
                                        <i class="far fa-folder"></i>
                                    </div>
                                    Папка с обучающими материалами
                                </div>
                                <div class="education-item">
                                    <div class="icon">
                                        <i class="far fa-play-circle"></i>
                                    </div>
                                    Обучающее <br>
                                    видео
                                </div>
                            </div>
                            <a href="/" class="all-items-link">
                                Показать все
                            </a>
                        </div>
                    </div>
                    
                    <div class="content-block block-instruments">
                        <div class="title">
                            Инструменты
                        </div>
                        <div class="instruments-list">
                            <div class="platforms">
                                <a href="/" class="platform-item facebook">
                                    <div class="title">
                                        Facebook
                                    </div>
                                    <div class="progress">
                                        +23.89%
                                    </div>
                                    <div class="icon">
                                        <i class="fab fa-facebook"></i>
                                    </div>
                                </a>
                                <a href="/" class="platform-item push">
                                    <div class="title">
                                        Push <br>
                                        уведомления 
                                    </div>
                                    <div class="progress">
                                        +85.12%
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-comment-alt"></i>
                                    </div>
                                </a>
                                <a href="/" class="platform-item instagram">
                                    <div class="title">
                                        Instagram
                                    </div>
                                    <div class="progress">
                                        -3.12%
                                    </div>
                                    <div class="icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                                <a href="/" class="platform-item sms">
                                    <div class="title">
                                        SMS <br>
                                        рассылка
                                    </div>
                                    <div class="progress">
                                        -43.56%
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-sms"></i>
                                    </div>
                                </a>
                                <a href="/" class="platform-item twitter">
                                    <div class="title">
                                        Twitter
                                    </div>
                                    <div class="progress">
                                        0%
                                    </div>
                                    <div class="icon">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                </a>
                                <a href="/" class="platform-item email">
                                    <div class="title">
                                        Email <br>
                                        рассылка
                                    </div>
                                    <div class="progress">
                                        +20%
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="messengers">
                                <a href="/" class="messenger-item whatsapp">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/backoffice/img/chat-whatsapp.png">
                                    </div>
                                    <div class="title">
                                        Whats App
                                    </div>
                                </a>
                                <a href="/" class="messenger-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/backoffice/img/chat-telegram.png">
                                    </div>
                                    <div class="title">
                                        Telegram
                                    </div>
                                </a>
                                <a href="/" class="messenger-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/backoffice/img/chat-viber.png">
                                    </div>
                                    <div class="title">
                                        Viber
                                    </div>
                                </a>
                                <a href="/" class="messenger-item">
                                    <div class="icon">
                                        <img src="https://demo-lookincasino.com/backoffice/img/chat-live.png">
                                    </div>
                                    <div class="title">
                                        Live чат
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content-block block-chat">
                        <div class="chat-head">
                            <div class="chat-companion">
                                <div class="chat-companion-photo" style="background-image: url('');"></div>
                                <div class="chat-companion-title">
                                    Имя Фамилия
                                </div>
                            </div>
                            <div class="chat-head-controls">
                                <button class="chat-control-button favorites">
                                    <i class="fas fa-star"></i>
                                </button>
                                <button class="chat-control-button notifications">
                                    <i class="fas fa-bell"></i>
                                </button>
                                <button class="chat-control-button call">
                                    <i class="fas fa-phone"></i>
                                </button>
                            </div>
                        </div>
                        <div class="chat-body">
                            <div class="message user-message">
                                <div class="message-time">
                                    04:12
                                </div>
                                <div class="message-text">
                                    Первое сообщение
                                </div>
                            </div>
                            <div class="message my-message">
                                <div class="message-time">
                                    10:18
                                </div>
                                <div class="message-text">
                                    Мое второе длинное сообщение в  ответ
                                </div>
                            </div>
                            <div class="message user-message">
                                <div class="message-time">
                                    12:42
                                </div>
                                <div class="message-text">
                                    Третье сообщение в ответ на второе
                                </div>
                            </div>
                        </div>
                        <div class="chat-message-form">
                            <textarea class="chat-textarea" placeholder="Начните вводить текст"></textarea>
                            <button class="send-message">
                                <i class="fas fa-location-arrow"></i>
                            </button>
                        </div>
                    </div>
                    <div class="content-block block-news">
                        <div class="title">
                            Новости
                        </div>
                        <div class="news-list">
                            <a href="/" class="short-news-item">
                                <div class="photo"  style="background-image: url('https://demo-lookincasino.com/backoffice/img/img-blue-dummy.jpg');"></div>
                                <div class="info">
                                    <div class="news-title">
                                        Маленький заголовок первой не главной новости
                                    </div>
                                    <div class="date">
                                        Август 22, 2015
                                    </div>
                                    <div class="comments">1</div>
                                </div>
                            </a>
                            <a href="/" class="short-news-item">
                                <div class="photo"  style="background-image: url('https://demo-lookincasino.com/backoffice/img/img-blue-dummy.jpg');"></div>
                                <div class="info">
                                    <div class="news-title">
                                        Маленький заголовок первой не главной новости
                                    </div>
                                    <div class="date">
                                        Август 22, 2015
                                    </div>
                                    <div class="comments">12</div>
                                </div>
                            </a>
                            <a href="/" class="short-news-item">
                                <div class="photo"  style="background-image: url('https://demo-lookincasino.com/backoffice/img/img-blue-dummy.jpg');"></div>
                                <div class="info">
                                    <div class="news-title">
                                        Маленький заголовок первой не главной новости
                                    </div>
                                    <div class="date">
                                        Август 22, 2015
                                    </div>
                                    <div class="comments">1</div>
                                </div>
                            </a>
                            <a href="/" class="short-news-item">
                                <div class="photo"  style="background-image: url('https://demo-lookincasino.com/backoffice/img/img-blue-dummy.jpg');"></div>
                                <div class="info">
                                    <div class="news-title">
                                        Маленький заголовок первой не главной новости
                                    </div>
                                    <div class="date">
                                        Август 22, 2015
                                    </div>
                                    <div class="comments">12</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer-top">
                <div class="wrap">
                    <div class="footer-column left">
                        <div class="text">
                            <p>
                                Разработчик: Маркетинговое агентство B2B Gambling www.b2bgambling.ru Lookin Casino является зарегистрированным брендом и торговой маркой компании Agarta Enterprises Ltd № MC 21071 / KKTC / Girne / www.agartaltd.com.
                            </p>
                            <p>
                                Свои вопросы и пожелания по сотрудничеству Вы можете задавать: <a href="mailto:info@lookincasino.com">info@lookincasino.com</a>
                            </p>
                            <p>
                                Сайт регулируется исходя от Федерального закона от 29.12.2006 №244-Ф3 (ред.от 01.05.2016) О государственном регулировании деятельности по организации и проведению азартных игр и о внесении изменений в некоторые законодательные акты Российской Федерации.
                            </p>
                        </div>
                    </div>
                    <div class="footer-column center">
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
                            <div class="brand-logo gambling">
                                <img src="https://demo-lookincasino.com/backoffice/img/gambling-logo.png">
                            </div>
                            <div class="brand-logo agarta">
                                <img src="https://demo-lookincasino.com/backoffice/img/agarta-logo.png">
                            </div>
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
                    <div class="footer-column right">
                        <div class="text">
                            <p>
                                © Agarta Enterprises Ltd, 2019 г. Все права защищены. <br>
                                Любое копирование информации, должно сопровождаться
                                ссылкой на источник. 
                            </p>
                            <p>
                                Agarta Enterprises Ltd не является службой бронирования и не взимает плату за услуги с пользователей своего сайта. Компания Agarta Enterprises Ltd не несет ответственности за содержимое внешних сайтов. В специальных предложениях не указаны налоги и сборы.
                            </p>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.js"></script>

    <!-- calendar -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/interaction/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/locales/ru.js"></script>

    <script type="text/javascript" src="https://demo-lookincasino.com/backoffice/js/main.js"></script>
</body>
</html>