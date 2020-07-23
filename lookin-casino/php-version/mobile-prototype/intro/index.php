<?php ?>
<?php include_once '../access/check.php'; ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мобильный прототип Lookin Casino</title>

    <meta name="theme-color" content="#2862ac" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" href="intro/intro.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="wrap">
                <div class="logo">
                    <img src="https://demo-lookincasino.com/mobile-prototype/intro/intro/intro-logo.svg">
                </div>
                <div class="controls">
                    <a href="/" class="developer">
                        Контакты разработчика
                    </a>
                    <div class="select-wrapper">
                        <select>
                            <option selected disabled>RU</option>
                        </select>
                    </div>
                </div>
            </div>
        </header>
        <main style="background-image: url(https://demo-lookincasino.com/mobile-prototype/intro/intro/intro.jpg);">
            <div class="main-inner">
                <div class="text-content">
                    <div class="title">
                        Mobile прототип <br>
                        Lookin Casino
                    </div>
                    <div class="list-title">
                        Страницы прототипа
                    </div>
                    <!-- <div class="zero-page">
                        0. <span>Рабочий стол</span>  >
                    </div> -->
                    <ol class="menu">
                        <li>
                            <a href="https://demo-lookincasino.com/mobile-prototype/home/" target="iframe" >
                                Главная
                            </a>
                        </li>
                        <li>
                            <a href="https://demo-lookincasino.com/mobile-prototype/news/" target="iframe" >
                                Новости
                            </a>
                        </li>
                        <li>
                            <a href="https://demo-lookincasino.com/mobile-prototype/casino-review/" target="iframe" >
                                Обзор казино
                            </a>
                        </li>
                        <li>
                            <a href="https://demo-lookincasino.com/mobile-prototype/casino-rating/" target="iframe" >
                                Рейтинг казино
                            </a>
                        </li>
                        <li>
                            <a href="https://demo-lookincasino.com/mobile-prototype/poker/" target="iframe" >
                                Покер
                            </a>
                        </li>
                        <li>
                            <a href="https://demo-lookincasino.com/mobile-prototype/calendar/" target="iframe" >
                                Календарь событий
                            </a>
                            <ol>
                                <li>
                                    <a href="https://demo-lookincasino.com/mobile-prototype/calendar-event/" target="iframe" >
                                        Одно событие
                                    </a>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino/" target="iframe" >
                                Индивидуальная страница казино
                            </a>
                            <ol>
                                <li>
                                    <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino-casino/" target="iframe" >
                                        Казино
                                    </a>
                                </li>
                                <li>
                                    <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino-hotel/" target="iframe" >
                                        Отель
                                    </a>
                                </li>
                                <li>
                                    <a href="https://demo-lookincasino.com/mobile-prototype/individual-casino-restaurant/" target="iframe" >
                                        Ресторан
                                    </a>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
                <div class="phone-figure-content">
                    <div class="phone-figure">
                        <img src="intro/intro-phone.png">
                        <div class="phone-figure-text">
                            <i class="icon fas fa-info-circle"></i>
                            Кликните по иконке LC, <br>
                            чтобы посмотреть<br>
                            <span>прототип</span>
                        </div>
                        <a class="app-icon-link" href="https://demo-lookincasino.com/mobile-prototype/home/" target="iframe"></a>
                        <div class="phone-screen-iframe">
                            <iframe src="" name="iframe"></iframe>
                        </div>
                    </div>
                </div>
            </main>


        </main>
        <div class="copyright">
            Copyright © 2020 AGARTA ENTERPRISES LTD. All rights reserved
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $('.menu a, .app-icon-link').click(function() {
            $('.phone-screen-iframe').addClass('open');
        });
        // $('html').css('height', +$('.main-inner').height());
    </script>
</body>
</html>


