<?php
include_once "seting.inc.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM atlets WHERE name like '%$_POST[name]%'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $res[] = $row;
}
echo json_encode($res);
