<?php include_once"inc/class.inc.php";
$events=new Events();
$spisok=new EventSpisok();
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
        <div class="col-sm-4 container text-center">
            <? $events->BottonRegister() ?>
        </div>
        <div class="col-sm-12">
            <h4>Ч-21</h4>
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Прізвище імя</th>
                    <th>Група</th>
                    <th>Рік наородження</th>
                    <th>Розряд</th>
                    <th>Команда</th>
                    <th>Тренер</th>
                </tr>
                <?php
                $spisok->select();
                ?>

                <tr>
                    <td>2</td>
                    <td>Мельник Тарас</td>
                    <td>Ч-21</td>
                    <td>1993</td>
                    <td>МСУ</td>
                    <td>Вовки</td>
                    <td>Мельник В.С.</td>
                </tr>
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