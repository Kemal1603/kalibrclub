<? include 'config.php'?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>
        <?php if(empty($title)): ?>
            Страйкбольный клуб Калибр
        <?php else: echo $title;
        endif; ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Страйкбольный клуб калибр, прокат, корпоратив, праздники, скидки и акции">
    <meta name="keywords" content="страйкбол, телефон, контакты, адреса, стоимасть, сценарии">
    <!--Fonts-->
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation -->
    <link href="/css/animate.css" rel="stylesheet">

    <!-- Slider -->
    <link href="/css/slick.css" rel="stylesheet">

    <link href="/css/magnific-popup.css" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">
</head>

<body>



<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="col-md-10">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#header-navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        Меню
                    </button>
                    <a class="scroll-link navbar-brand visible-lg visible-md visible-sm" href="/#start">
                        <img src="/img/Logo.png" alt="логотип" class="img-responsive">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="header-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/#airsoft">Страйкбол</a></li>
                        <li><a href="/#playgrounds">Площадки</a></li>
                        <li><a href="/#prices">Цены</a></li>
                        <li class="dropdown">
                            <a href="javascript:void(null)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Игры <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="scroll-link" href="#airsoft">Страйкбол</a></li>
                                <li><a class="scroll-link" href="/paintball">Пейнтбол</a></li>
                                <li><a class="scroll-link" href="/archery_tag">Лучный бой</a></li>
                                <li><a class="scroll-link" href="/lasertag">Лазертаг</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 phone-area text-center visible-lg visible-md">
                <a class="phone" href="tel:+375293084081">+375 (29) 308 40 81</a>
                <a class="phone" href="tel:+375295368904">+375 (29) 536 89 04</a>
            </div>
        </div>
    </nav>
</header>