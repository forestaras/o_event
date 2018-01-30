<?php
include_once "class.inc.php";
$register=new Register();
$x[]=$_POST;
if($_POST['id_atlets']==0) {
    $register->atlets();
}
    $sql = "SELECT * FROM atlets WHERE name='$_POST[name]'";
    $result = mysqli_query($conn, $sql);
    while ($rowo = mysqli_fetch_assoc($result)) {
        $res[] = $rowo;
    }
    echo json_encode($res);
