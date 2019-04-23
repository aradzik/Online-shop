<?php
include_once "../Baza.php";
session_start();
$db = new Baza('localhost', 'root', '', 'users');
$ile = $db->rekordy("select * from koszyk ");
$min = $db->selectZdj("select id from koszyk limit 1",["id"]);
$max = $db->selectZdj("select id from koszyk order by id DESC limit 1",["id"]);
for($i=$min;$i<=$max;$i++){
   if (filter_input(INPUT_POST, 'usun' . $i . '')) {
    $sql= "DELETE FROM `koszyk` WHERE `koszyk`.`id` = $i";

    $db->delete($sql);
  
     ?>
        <meta http-equiv="refresh" content="0; URL=../pages/strKoszyk.php">
        <?php
} 
}

if (filter_input(INPUT_POST, 'a1')) {
    if (isset($_SESSION["userOK"])) {

        $db = new Baza('localhost', 'root', '', 'users');
        $nazwa = $db->selectZdj("select * from produkty where id=1 ", ["nazwa"]);
        $cena = $db->selectZdj("select * from produkty where id=1", ["cena"]);
        $zdj = $db->selectZdj("select * from produkty where id=1 ", ["zdjecie"]);

        $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
        $db->insert($sql);
        ?>
        <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
        <?php
    } else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
}
if (filter_input(INPUT_POST, 'a2')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
        $nazwa = $db->selectZdj("select * from produkty where id=2 ", ["nazwa"]);
        $cena = $db->selectZdj("select * from produkty where id=2", ["cena"]);
        $zdj = $db->selectZdj("select * from produkty where id=2 ", ["zdjecie"]);

        $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
        $db->insert($sql);
        ?>
        <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
        <?php
    } else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
}
if (filter_input(INPUT_POST, 'a3')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
        $nazwa = $db->selectZdj("select * from produkty where id=3 ", ["nazwa"]);
        $cena = $db->selectZdj("select * from produkty where id=3", ["cena"]);
        $zdj = $db->selectZdj("select * from produkty where id=3 ", ["zdjecie"]);

        $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
        $db->insert($sql);
        ?>
        <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
        <?php
    } else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
}
if (filter_input(INPUT_POST, 'a4')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
        $nazwa = $db->selectZdj("select * from produkty where id=4 ", ["nazwa"]);
        $cena = $db->selectZdj("select * from produkty where id=4 ", ["cena"]);
        $zdj = $db->selectZdj("select * from produkty where id=4 ", ["zdjecie"]);

        $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
        $db->insert($sql);
        ?>
        <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
        <?php
    } else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
}
if (filter_input(INPUT_POST, 'a5')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
        $nazwa = $db->selectZdj("select * from produkty where id=5 ", ["nazwa"]);
        $cena = $db->selectZdj("select * from produkty where id=5", ["cena"]);
        $zdj = $db->selectZdj("select * from produkty where id=5 ", ["zdjecie"]);

        $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
        $db->insert($sql);
        ?>
        <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
        <?php
    } else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
}
if (filter_input(INPUT_POST, 'a6')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
        $nazwa = $db->selectZdj("select * from produkty where id=6 ", ["nazwa"]);
        $cena = $db->selectZdj("select * from produkty where id=6 ", ["cena"]);
        $zdj = $db->selectZdj("select * from produkty where id=6 ", ["zdjecie"]);

        $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
        $db->insert($sql);
        ?>
        <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
        <?php
    } else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
}
if (filter_input(INPUT_POST, 'a7')) {
    if (isset($_SESSION["userOK"])) {
         $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=7 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=7 ", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=7 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
   
}
if (filter_input(INPUT_POST, 'a8')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=8 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=8 ", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=8 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a9')) {
    if (isset($_SESSION["userOK"])) {
       $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=9 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=9", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=9 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php 
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a10')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=10 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=10", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=10 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a11')) {
    if (isset($_SESSION["userOK"])) {
         $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=11 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=11", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=11 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
   
}
if (filter_input(INPUT_POST, 'a12')) {
    if (isset($_SESSION["userOK"])) {
         $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=12 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=12", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=12 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
   
}
if (filter_input(INPUT_POST, 'a13')) {
     if (isset($_SESSION["userOK"])) {
         $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=13 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=13", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=13 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
     }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a14')) {
     if (isset($_SESSION["userOK"])) {
          $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=14 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=14", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=14 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
     }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
   
}
if (filter_input(INPUT_POST, 'a15')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=15 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=15", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=15 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a16')) {
     if (isset($_SESSION["userOK"])) {
         $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=16 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=16", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=16 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
     }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a17')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=17 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=17", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=17 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a18')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=18 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=18", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=18 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a19')) {
     if (isset($_SESSION["userOK"])) {
         $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=19 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=19", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=19 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
     }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a20')) {
    if (isset($_SESSION["userOK"])) {
       $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=20 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=20", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=20 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php 
    }
    else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a21')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=21 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=21", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=21 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    } else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a22')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=22 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=22", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=22 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a23')) {
    if (isset($_SESSION["userOK"])) {
        $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=23 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=23", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=23 ", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
    }else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}
if (filter_input(INPUT_POST, 'a24')) {
     if (isset($_SESSION["userOK"])) {
         $db = new Baza('localhost', 'root', '', 'users');
    $nazwa = $db->selectZdj("select * from produkty where id=24 ", ["nazwa"]);
    $cena = $db->selectZdj("select * from produkty where id=24", ["cena"]);
    $zdj = $db->selectZdj("select * from produkty where id=24", ["zdjecie"]);

    $sql = "insert into koszyk values (NULL, '$nazwa', '$cena', '$zdj' );";
    $db->insert($sql);
    ?>
    <meta http-equiv="refresh" content="0; URL=../pages/sklep.php">
    <?php
     }
     else {
        ?><meta http-equiv="refresh" content="0; URL=../pages/logowanie.php"><?php
    }
    
}