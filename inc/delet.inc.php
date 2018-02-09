<?php
include_once "seting.inc.php";
if ($_GET['del']){
    $sql="DELETE FROM atlets_time_registration WHERE id_atlets='$_GET[del]' && id_events='$_GET[event]'";
    $res = mysqli_query($conn, $sql);
}
header("Location:/register.php?event=$_GET[event]");
