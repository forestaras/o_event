<?php
include_once "inc/class.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>O_Evenor</title>
</head>
<body>
<? include_once "inc/nav.inc.php"?>
<div class="page-header">
    <h1>Створені вами змагання</h1>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Назва</th>
            <th>Дата проведення</th>
            <th>Місце проведення</th>
            <th>Дата завершення заявки</th>
            <th>Заявлено</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td><span class="glyphicon glyphicon-ok" ></span></td>
            <td>Чемпіонат Області</td>
            <td>06.12.2018</td>
            <td>м.Луцьк</td>
            <td>04.12.2018</td>
            <td><?php Events::EventCountRegistration(All,2)?></td>
            <? SelectZayavkaTime::selekt(1);?>
            <td><span class="glyphicon glyphicon-pencil" ></span></td>
            <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
        </tr>
    </table>
</div>
<div class="content">
    <div class="row event">
        <div class="col-sm-8">
            <div >
                <h3>Чемпіонат області</h3>
                <div class="col-sm-3 event_info">6 Листопала 2018</div>
                <div class="col-sm-9 event_info">м.Луцьк</div>
                <p>Тут буде якийсь текст щось типу коротка інформація про змагання і всяке таке кароче хто що захоче.</p>
            </div>
        </div>
        <div class="col-sm-4 text-center">
            <button type="button" class="btn btn-success btn_event_info">Реєстрація</button>
            <h4>Учасників</h4>
            <h3>8</h3>
        </div>
    </div>
    <div class="row event">
        <div class="col-sm-8">
            <div >
                <h3>Чемпіонат області</h3>
                <div class="col-sm-3 event_info">6 Листопала 2018</div>
                <div class="col-sm-9 event_info">м.Луцьк</div>
                <p>Тут буде якийсь текст щось типу коротка інформація про змагання і всяке таке кароче хто що захоче.</p>
            </div>
        </div>
        <div class="col-sm-4 text-center">
            <button type="button" class="btn btn-success btn_event_info">Реєстрація</button>
            <h4>Учасників</h4>
            <h3>8</h3>
        </div>
    </div>
    <div class="row event">
        <div class="col-sm-8">
            <div >
                <h3>Чемпіонат області</h3>
                <div class="col-sm-3 event_info">6 Листопала 2018</div>
                <div class="col-sm-9 event_info">м.Луцьк</div>
                <p>Тут буде якийсь текст щось типу коротка інформація про змагання і всяке таке кароче хто що захоче.</p>
            </div>
        </div>
        <div class="col-sm-4 text-center">
            <button type="button" class="btn btn-success btn_event_info">Реєстрація</button>
            <h4>Учасників</h4>
            <h3>8</h3>
        </div>
    </div>
</div>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>