<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Лучный бой в Минске | клуб «Калибр»</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Развлекись и получи новые впечатления во время активного и безопасного командного лучного боя">
    <meta name="keywords"
          content="игры лучный бой луки archery tag Минск Беларусь играть цены бронировать">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&amp;subset=cyrillic" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/magnific-popup.css" rel="stylesheet">

    <link href="/css/archery.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">

        <div id="logo-box">
            <a href="/archery_tag">
                <div class="inner-box">
                    <img src="/img/Logo.png" alt="Логотип калибр клуб">
                </div>
            </a>
        </div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="main-navigation">

            <ul class="nav navbar-nav navbar-right">
                <li class="visible-lg visible-md"><a href="#about">Об игре</a></li>
                <li><a href="/archery_tag/#prices">Цены</a></li>
                <li><a href="/archery_tag/#places">Площадки</a></li>
                <li><a class="strong" href="javascript:void(0)" onclick="learn_more_form_show()">Записаться</a></li>
            </ul>

            <div class="phone-box visible-lg visible-md">
                <div class="inner-box">
                    <a href="tel:+375 (29) 308 40 81">+375 (29) 308 40 81</a>
                    <a href="tel:+375 (29) 536 89 04">+375 (29) 536 89 04</a>
                </div>
            </div>

        </div>

    </div>
</nav>

<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100vh;">

    <?php
    if ((isset($_POST['name'])) && (isset($_POST['tel']))):
        $name = $_POST['name'];
        $tel = $_POST['tel'];

        mail("vel3084081@gmail.com", "Заявка с сайта (Лучный бой)", "Имя: $name \nКонтакты: $tel");
        ?>
        <div class="call-order-form">
            <div class="container">
                <div class="row text-center">
                    <h1>Ваша заявка принята. Вам перезвонит наш менеджер.</h1>
                    <a class="btn btn-default" href="/archery_tag">Назад</a>
                </div>
            </div>
        </div>

    <?php else: ?>
        <div class="call-order-form">
            <div class="container">
                <div class="row text-center">
                    <h1>Ваше сообщение не отправлено</h1>
                    <a class="btn btn-default" href="/archery_tag">Назад</a>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>

<script src="/js/jquery-1.12.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/magnific-popup.js"></script>

<script>
    function learn_more_form_show() {
        $('#learn_more_back').css({'display': 'flex'});
        $('#learn_more').css({'display': 'block'});
    }

    function learn_more_hide() {
        $('#learn_more_back').css({'display': 'none'});
        $('#learn_more').css({'display': 'none'});
    }
</script>

</body>
</html>
