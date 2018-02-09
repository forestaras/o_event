<?php
include_once "seting.inc.php";
session_start();
class User
{
    public function uaser()
    {
        global $conn;
        $sql = "SELECT * FROM  user WHERE login='$_POST[login]'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        if ($_POST['login'] == $row['login'] && $_POST['pass'] == $row['pass'] && $_POST['login'] && $_POST['pass']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['relogin'] = $row['login'];
            $_SESSION['repass'] = $row['pass'];
            $_SESSION['pass'] = $_POST['pass'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['meil'] = $row['meil'];
        }
    }

    public function autenf()
    {
        if ($_SESSION['login'] == $_SESSION['relogin'] && $_SESSION['pass'] == $_SESSION['repass'] && $_SESSION['login'] && $_SESSION['pass']) {
            return "Пароль ок";
        }
    }

    public function userExit()
    {
        if ($_GET['exit'] = 'exit') {
            session_unset();
            session_destroy();
        }
    }
}
class Event
{
    public $event;

    public function event()
    {
        global $conn;
        $sql = "SELECT * FROM  event";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        while ($row = mysqli_fetch_assoc($res)) {
            $mas[] = $row;
        }
        $this->event = $mas;
    }
}
class SelectRegist
{
    public $registration;

    public function select()
    {
        global $conn;
        global $user_id;
        $x = $_GET['event'];
        $sql = "SELECT * FROM  atlets_registration r INNER JOIN atlets a ON r.id_atlets=a.id_atlets WHERE id_events='$x'";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($res)) {
            $mas[] = $row;
        }
        $this->registration = $mas;
    }

    public $event;

    public function event()
    {
        global $conn;
        $x = $_GET['event'];
        $sql = "SELECT * FROM  event WHERE id_event='$x'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $this->event = $row;
    }
}
class SelectZayavkaTime
{
    public $arr;

    public function selekt()
    {
        global $conn;
        global $user_id;
        $sql = "SELECT * FROM  atlets_time_registration t INNER JOIN atlets a ON t.id_atlets=a.id_atlets WHERE t.id_user='$_SESSION[id_user]' && t.id_events='$_GET[event]'";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr><td>$row[name]</td><td>$row[birth]</td><td>$row[grup]</td><td>$row[rozryad]</td><td>$row[trener]</td><td>$row[club]</td>
<td><a href='inc/delet.inc.php?del=$row[id_atlets]&event=$row[id_events]'><span class='glyphicon glyphicon-remove del' value='$row[id_atlets]' ></span><a></td></tr>";
        }
    }

    public function selektAll()
    {
        global $conn;
        global $user_id;
        $sql = "SELECT * FROM  atlets_time_registration t INNER JOIN atlets a ON t.id_atlets=a.id_atlets WHERE t.id_events='$_GET[event]'";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr><td>$row[name]</td><td>$row[birth]</td><td>$row[grup]</td><td>$row[rozryad]</td><td>$row[trener]</td><td>$row[club]</td></tr>";
        }
    }
}
////
class Events
{

    public function eventsg()
    {
        global $conn;
        $sql = "SELECT * FROM  event";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        while ($row = mysqli_fetch_assoc($res)) {
            echo
            "<div class='row event'>
    <div class='col-sm-8'>
        <div >
            <h3>$row[title]</h3>
            <div class='col-sm-3 event_info'>$row[data]</div>
            <div class='col-sm-9 event_info'>$row[location]</div>
            <p>$row[info]</p>
        </div>
    </div>
    <div class='col-sm-4 text-center'>
        <a href='event.php?event=$row[id_event]'><button type='button' class='btn btn-success btn_event_info '>Реєстрація</button></a>
        <h4>Учасників</h4>
        <h3>8</h3>
    </div>
</div>";
        }
    }
    public function EventMin(){
        global $conn;
        $sql = "SELECT * FROM  event WHERE id_event='$_GET[event]'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
            echo"<div class='col-sm-8 event'>
    <h3>$row[title]</h3>
    <div class='col-sm-4 event_info'>$row[data]</div>
    <div class='col-sm-8 event_info'>$row[location]</div>
    <p>$row[info]</p>
     </div>";
    }

    public function BottonRegister(){
        echo "<a href='register.php?event=$_GET[event]'><button type='button' class='btn btn-success right'>Реєстрація</button></a>";
    }
}
class EventSpisok{
    public function select()
    {
        global $conn;
        global $user_id;
        $x = $_GET['event'];
        $sql = "SELECT * FROM  atlets_registration r INNER JOIN atlets a ON r.id_atlets=a.id_atlets WHERE id_events='$x'";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>
                    <td>1</td>
                    <td>{$row['name']}</td>
                    <td>{$row['grup']}</td>
                    <td>{$row['birth']}</td>
                    <td>{$row['rozryad']}</td>
                    <td>{$row['club']}</td>
                    <td>{$row['trener']}</td>
                    </tr>";
        }
    }
}
class Register{
    public function add()
    {
        global $x;
        global $conn;
        $time = time();
        foreach ($x as $ar) {
            $sql = "INSERT INTO atlets_time_registration (id_user,id_atlets,id_events,timestamp,grup)VALUE ('$ar[id_user]','$ar[id_atlets]','$ar[id_events]','$time','$ar[grup]')";
            $res = mysqli_query($conn, $sql);
        }

    }
    public function addForm(){
        echo "
      <form action='inc/add.inc.php' method='post' id='text'>
        <table>
          <tr>
            <th>Прізвище Імя</th>
            <th>Рік народження</th>
            <th>Група</th>
            <th>Розрд</th>
            <th>Тренер</th>
            <th>Команда</th>
        </tr>
        <tr >
            <input type='text' name='id_user' id='id_user' value='$_SESSION[id_user]' hidden>
            <input type='text' name='id_atlets' id='id_atlets'>
            <input type='text' name='id_events' id='id_events' value='$_GET[event]' hidden>
            <td><input type='text' name='name' id='name' class='form-control input-sm'></td>
            <td><input type='text' name='birth' id='birth' class='form-control input-sm'></td>
            <td><input type='text' name='grup' id='grup' class='form-control input-sm'></td>
            <td><select class='form-control input-sm' id='rozryad' name='rozryad'>
                    <option>бр</option>
                    <option>3-ю</option>
                    <option>2-ю</option>
                    <option>1-ю</option>
                    <option>ІІІ</option>
                    <option>ІІ</option>
                    <option>І</option>
                    <option>КМСУ</option>
                    <option>МСУ</option>
                </select></td>
            <td><input type='text' name='trener' id='trener' class='form-control input-sm'></td>
            <td><input type='text' name='club' id='club' class='form-control input-sm'></td>
            <td><input type='submit' id='submit' value='Додати' class='form-control input-sm' validate(form)></td>
        </tr >
    </table>
</form>";
    }
    public function atlets(){
        global $conn;
        global $x;
        foreach ($x as $ar) {
            $sql = "INSERT INTO atlets (name,birth,rozryad,trener,club)VALUE ('$ar[name]','$ar[birth]','$ar[rozryad]','$ar[trener]','$ar[club]')";
            $res = mysqli_query($conn, $sql);
        }
    }
    public function edit()
    {
        global $conn;
        global $x;
        foreach ($x as $ar) {
            $sql = "UPDATE atlets
SET 
birth='$ar[birth]',
rozryad='$ar[rozryad]',
trener='$ar[trener]',
club='$ar[club]'
WHERE id_atlets='$ar[id_atlets]'";
            $res = mysqli_query($conn, $sql);
        }
    }
}