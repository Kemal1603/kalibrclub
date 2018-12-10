
<footer>
    <div class="container">
        <div class="col-sm-3 text-center">
            <h2>страйкбольный клуб</h2>
            <h1>калибр</h1>
        </div>
        <div class="col-sm-3">
            <a class="phone" href="tel:+375293084081">+375 (29) 308 40 81</a>
            <a class="phone" href="tel:+375295368904">+375 (29) 536 89 04</a>
        </div>
        <div class="col-sm-3">
            <a href="/#airsoft">Страйкбол</a>
            <a href="/#playgrounds">Площадки</a>
            <a href="/#prices">Цены</a>
            <a href="/#archery-tag">Лучный бой</a>
        </div>
        <div class="col-sm-3">
            <p>разработка сайта: <a href="http://ilavista.by/">ilavista</a></p>
        </div>
    </div>
</footer>

<div class="capture-form-back" id="order_call_back">
    <div class="capture-form text-center animated fadeInDown" id="order_call">
        <form action="sendmail.php" method="post">
            <div class="form-group" >
                <label for="inputNameCapture">Ваше имя</label>
                <input type="text" class="form-control" required name="name" id="inputNameCapture" >
            </div>
            <div class="form-group">
                <label for="inputTelCapture">Ваш номер телефона</label>
                <input type="tel" class="form-control" required name="tel" id="inputTelCapture" >
            </div>
            <button type="submit" class="btn btn-primary">Оставить заявку</button>
        </form>
        <hr>
        <a href="javascript:void(0)" class="close-capture-form" onclick="capture_form_hide()">закрыть</a>
    </div>
</div>

<div class="capture-form-back" id="learn_more_back">
    <div class="capture-form text-center animated fadeInDown" id="learn_more">
        <h2 class="text-center">Связаться с нами</h2>
        <h4>записаться на игру, а также уточнить <br>все интересующие вас вопросы вы можете по телефонам</h4>
        <h2>+375 (29) 308 40 81</h2>
        <h2>+375 (29) 536 89 04</h2>
        <h4>или оставьте заявку в форме внизу и мы вам перезвоним</h4>
        <form action="sendmail.php" method="post">
            <div class="form-group">
                <label for="inputNameLearnMore">Ваше имя</label>
                <input type="text" class="form-control" name="name" id="inputNameLearnMore">
            </div>
            <div class="form-group">
                <label for="inputTelLearnMore">Ваш номер телефона</label>
                <input type="tel" class="form-control" name="tel" id="inputTelLearnMore">
            </div>
            <button type="submit" class="btn btn-primary red">Оставить заявку</button>
        </form>
        <hr>
        <a href="javascript:void(0)" class="close-capture-form" onclick="learn_more_hide()">закрыть</a>
    </div>
</div>


<script src="/js/jquery-1.12.2.min.js"></script>

<script src="/js/bootstrap.min.js"></script>
<!-- Slider -->
<script src="/js/slick.min.js"></script>

<script src="/js/magnific-popup.js"></script>

<!-- Main JS File -->
<script src="/js/main.js"></script>

</body>
</html>