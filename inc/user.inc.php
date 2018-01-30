<?php
include_once "class.inc.php";
$user=new User();
$user->uaser();
if ($_GET['exit']){
    session_unset();
    session_destroy();
}
header('Location:/index.php');