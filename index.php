<?php include_once"inc/class.inc.php";
$events=new Events();
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
<div class="jumbotron">
    <h1>Вітаємо на сайті О_Event</h1>
    <p>Сайт онлайн реєстрації на події зі спортивного орієнтування</p>
    <p><a class='btn btn-primary btn-lg' href='user.html' role='button'>Укійти для реєстрації</a></p>
</div>
<div class="page-header">
    <h1>Найблищі події </h1>
</div>
<div class="content">
<?php $events->eventsg();?>
</div>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer >
</body>
</html>

