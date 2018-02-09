<?php
include_once "class.inc.php";
$event=new Events();
$register=new Register();
$event->addEvent();
echo "Вітаємо $_SESSION[login] ви успішно додали змагання $_POST[title] які відбудуться $_POST[data] в $_POST[lokation].";
echo "<br>Дутальна інформація <br>";
print_r($_POST);