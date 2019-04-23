<?php

include_once "../Baza.php";
require_once "kontakt.php";
$db = new Baza('localhost', 'root', '', 'users');

if (filter_input(INPUT_POST, 'submit')) {
    $nick = $_REQUEST['nick'];
    $email = $_REQUEST['email'];
    $comment = $_REQUEST['comment'];
    
    $sql = "insert into kom values (NULL, '$nick', '$email', '$comment' );";
    $db->insert($sql);
    ?>
        <meta http-equiv="refresh" content="0; URL=../pages/kontakt.php">
        <?php
}
