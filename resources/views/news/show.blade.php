<? include '/config.php' ?>
        <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Новости клуба</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Страйбольный клуб Калибр-большие площадки, уникальные сценарии для детей и взрослых. Скидки и акции постоянным клиентам">
    <meta name="keywords"
          content="страйкбол в минске игра клуб безопастность скидки акции лучшие площадки сценарии">

    <meta name='yandex-verification' content='6b3052ced8ebe54a'/>

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

    <style>
        #prices .wr_quest td {
            padding-right: 20px;
            padding-bottom: 8px;
        }
    </style>
</head>

<body>

<!-- <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-121487-2eqv8';</script>
 -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-75321635-2', 'auto');
    ga('send', 'pageview');

</script>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?139"></script>

<!-- VK Widget -->
<!-- <div id="vk_community_messages"></div>
<script type="text/javascript">
    VK.Widgets.CommunityMessages("vk_community_messages", 29007502, {
        expandTimeout: "40000",
        tooltipButtonText: "Есть вопрос?"
    });
</script>  -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter37227705 = new Ya.Metrika({
                    id: 37227705,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/37227705" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->


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
                    <a class="scroll-link navbar-brand visible-lg visible-md visible-sm" href="#start">
                        <img src="/img/Logo.png" alt="логотип" class="img-responsive">
                    </a>

                </div>
                <div class="collapse navbar-collapse" id="header-navigation">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a class="scroll-link" href="/">Главная</a></li>


                        <li><a class="strong" href="https://vk.com/kalibrclub"><img src="/img/icons/1.png" alt="VK"></a>
                        </li>
                        <li><a class="strong" href="https://www.facebook.com/kalibrclub"><img src="/img/icons/2.png"
                                                                                              alt="facebook"></a></li>
                        <li><a class="strong" href="https://www.instagram.com/kalibrclub/"><img src="/img/icons/3.png"
                                                                                                alt="insta"></a></li>
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

<section id="we_are_happy">
    <div class="container">
        <div class="row text-center">
            <h1>{{$each_news->title}}</h1>

            <img src="/storage/news_img/{{ $each_news->img }}" alt="">
            
            <h3>{{$each_news->body}}</h3>
        </div>
    </div>
</section>




<section id="we_are_happy">
    <div class="container">
        <div class="row text-center">
            <h1>страйкбольный клуб калибр</h1>
            <h3>мы будем рады видеть вас на своих играх!</h3>
        </div>
    </div>
</section>

<script src="/js/aos.js"></script>


<script>
    AOS.init({
        duration: 1000
    });
</script>

<?php include "footer.php" ?>
