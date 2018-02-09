<?php include_once"inc/class.inc.php";
$events=new Events();
$register=new Register();
$select=new SelectZayavkaTime();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <?php
    include_once "inc/class.inc.php";
    ?>
</head>
<body>
<? include_once "inc/nav.inc.php"?>
<div class="container">
    <div class="row" >
        <div class="col-sm-12" id="inf">
            <?$events->EventMin()?>
        </div>

        <div><h4>Вкажіть учасників</h4>
            <? $register->addForm() ?>
        </div>
    </div>
    <div class="row">
        <div>
            <h4>Додано</h4>
            <table class="table table-striped">
                <tr>
                    <th>Прізвище Імя</th>
                    <th>Рік народження</th>
                    <th>Група</th>
                    <th>Розрд</th>
                    <th>Тренер</th>
                    <th>Команда</th>
                </tr>
                <?$select->selekt();?>
            </table>
            <button type="button" id="btn" class="btn btn-success btn-right">Зберегти</button>
        </div>

        <div class="col-*-*"></div>
        <div class="col-*-*"></div>
        <div class="col-*-*"></div>
    </div>

</div>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>
</body>
</html>
