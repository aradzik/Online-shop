<?php
include_once "UserLog.php";
require_once "Baza.php";
session_start();
$db = new Baza('localhost', 'root', '', 'users');

if (isset($_SESSION["userOK"])) {
    $old_user = unserialize($_SESSION["userOK"]); //czy nastąpiło logowanie
    if ($old_user != null) {
       // echo "<p>Wylogowano użytkownika:" . $old_user->getName() . " </p>";
        ?>
    <meta http-equiv="refresh" content="0; URL=index.php">
    <?php
        unset($_SESSION["userOK"]);
        $old_user->logout();
        //usuwanie tabeli
      $sql = "DROP TABLE koszyk;";
      $db->delete($sql); 
    }
} else
    echo "Użytkownik niezalogowany.<br />";
?>
