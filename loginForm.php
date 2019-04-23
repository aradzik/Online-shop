<?php
require_once "Baza.php";
require_once "UserLog.php";
session_start();
if (filter_input(INPUT_POST, 'submit')) {
    $bd = new Baza("localhost", "root", "", "users");
    $name = $_REQUEST['login'];
    $pass = $_REQUEST['pass'];
    $hashpass = hash('md5', $pass);
    $user = UserLog::login($name, $hashpass, $bd, 'user');
    if ($user == null)
       ?>
    <meta http-equiv="refresh" content="0; URL=pages/rejestracja.php">
    <?php
}
if (isset($_SESSION["userOK"])) {
    $user = unserialize($_SESSION['userOK']);?>
    <meta http-equiv="refresh" content="0; URL=index.php">
    <?php
    //tworenie tabeli
    $sql = "CREATE TABLE koszyk(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nazwa VARCHAR(32), cena INT(10), zdj VARCHAR(32));";
    $bd->insert($sql);
} else
    //UserLog::loginForm("#");

?>
