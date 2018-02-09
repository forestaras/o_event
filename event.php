<?php include_once"inc/class.inc.php";
$events=new Events();
$spisok=new SelectZayavkaTime();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="css/style.css" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <title>O_Evenor</title>
</head>
<body>
<? include_once "inc/nav.inc.php"?>
<div class="col-lg-12">
    <div class="col-sm-8 content">
        <? $events->EventMin() ?>
        <h3>Зареєстровано <? Events::EventCountRegistration($_GET['event'])?> учасників</h3>
        <div class="col-sm-4 container text-center">
            <? $events->BottonRegister() ?>

        </div>
        <div class="col-sm-12">
            <h4>Ч-21</h4>
            <table class="table table-striped">
                <tr>
                    <th>Прізвище Імя</th>
                    <th>Рік народження</th>
                    <th>Група</th>
                    <th>Розрд</th>
                    <th>Тренер</th>
                    <th>Команда</th>
                </tr>
                <?php
                $spisok->selektAll();
                ?>
            </table>
        </div>
    </div>
    <div class="col-sm-4 right-meny">

    </div>
</div>
<!--<footer class="container-fluid text-center">-->
<!--<p>Footer Text</p>-->
<!--</footer>-->

</body>
</html>