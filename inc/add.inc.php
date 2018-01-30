<?php
include_once "class.inc.php";
$register=new Register();
$x[]=$_POST;
if($_POST['id_atlets']==0){// створення масиву для додавання в тимчасову таблицю
    $register->atlets();
    $register->add();
}
else{
    $register->edit();
    $register->add();
}
header("Location: ../register.php?event=$_POST[id_events]");