<?
include "header.php"
?>

<?php
if ((isset($_POST['name'])) && (isset($_POST['tel']))):
    $name = $_POST['name'];
    $tel = $_POST['tel'];
	
    mail("vel3084081@gmail.com", "Заявка с сайта", "Имя: $name \nКонтакты: $tel");
    ?>
    <div class="call-order-form">
        <div class="container">
            <div class="row text-center">
                <h1>Ваша заявка принята. Вам перезвонит наш менеджер.</h1>
                <a class="btn btn-default" href="/">Назад</a>
            </div>
        </div>
    </div>

<?php else: ?>
    <div class="call-order-form">
        <div class="container">
            <div class="row text-center">
                <h1>Ваше сообщение не отправлено</h1>
                <a class="btn btn-default" href="/">Назад</a>
            </div>
        </div>
    </div>
<? endif; ?>
<?
include "footer.php"
?>