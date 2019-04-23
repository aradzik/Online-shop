<!DOCTYPE html>
<html>
    <head>
        <title>Koszyk</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    </head>
    <body id="top">
        <div class="wrapper col1">
            <div id="topbar">
                <div id="clientlogin">
                    <?php
                    require_once "../UserLog.php";
                    session_start();

                    if (isset($_SESSION["userOK"])) {
                        $user = unserialize($_SESSION["userOK"]);
                        echo "Użytkownik zalogowany jako:" . $user->getName() . "<br/>";
                        ?>
                        <a href="../wyloguj.php" style="color: #999999"><font size="2"><u>Wyloguj</u></font></a> <?php
                    } else {
                        ?>
                        <form action="../loginForm.php" method="post">   

                            <fieldset>
                                <legend>Site Login</legend>
                                <input  name="login" placeholder="login"/>
                                <input type="password" name="pass" placeholder="hasło"/>
                                <input type="submit" name="submit" id="login" value="Idź" />

                            </fieldset>
                            <a href="pages/rejestracja.php" style="color: #999999"><font size="2"><u>Rejestracja</u></font></a>
                        </form>
                    <?php }
                    ?>      
                </div>
                <div id="search">
                    <form action="#" method="post">
                        <fieldset>
                            <legend>Site Search</legend>
                            <input type="text" value="Search Our Website&hellip;"  onfocus="this.value = (this.value == 'Search Our Website&hellip;') ? '' : this.value;" />
                            <input type="submit" name="go" id="go" value="GO" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/dom.jpg');"> 
            <div class="row1">
                <header id="header" class="hoc clear"> 
                    <div id="logo" class="fl_left">
                        <h1><a href="/sklep/index.php" style="font-family: Lobster"> yourHome</a></h1>
                    </div>
                    <nav id="mainav" class="fl_right">
                        <ul class="clear">
                            <li><a href="../index.php">Start</a></li>
                            <li><a href="sklep.php">Sklep</a></li>
                            <li><a href="regulamin.php">Regulamin</a></li>
                            <li ><a href="kontakt.php">Kontakt</a></li>
                            <li class="active"><a href="strKoszyk.php">Koszyk</a></li>
                        </ul>
                    </nav>
                </header>
            </div>
            <div id="breadcrumb" class="hoc clear" > 
                <ul>
                    <li><a href="/sklep/index.php">Home</a></li>
                    <li><a href="#">Koszyk</a></li>
                </ul>
            </div>
        </div>
        <div class="wrapper row3">
            <main class="hoc container clear">
                <h6>Koszyk</h6>
                <?php
                if (isset($_SESSION["userOK"])) {
                    include_once "../Baza.php";

                    $ob = new Baza("localhost", "root", "", "users");
                    $ile = $ob->rekordy("select * from koszyk ");
                    $min = $ob->selectZdj("select id from koszyk limit 1", ["id"]);
                    $max = $ob->selectZdj("select id from koszyk order by id DESC limit 1", ["id"]);
                    ?>
                    <?php if ($ile != 0) {
                        ?>
                        <table>
                            <?php
                            ?> <tr> </tr> 
                            <td>Nazwa</td>
                            <td>Cena</td>
                            <td>Zdjęcie</td>
                            <tr> &nbsp </tr>
                            <tr> </tr> 
                            <?php
                            for ($i = $min; $i <= $max; $i++) {
                                ?>
                                <td><?php echo $ob->selectZdj("select * from koszyk where id='" . $i . "' ", ["nazwa"]); ?></td><?php ?>
                                <td><?php echo $ob->selectZdj("select * from koszyk where id='" . $i . "' ", ["cena"]); ?><?php echo "zł " ?></td><?php $zdj = $ob->selectZdj("select * from koszyk where id='" . $i . "' ", ["zdj"]); ?>
                                <td><?php echo '<img src="../images/produkty/miniatury/' . $zdj . '"  >'; ?></td>
                                <td><div id="comments"><?php echo ' <form action="../pages/koszyk.php" method="post"><input type="submit" name="usun' . $i . '" value="Usuń"></form>'; ?></div> </td><?php ?>
                                <tr> </tr><?php
                }
                            ?>
                        </table> <h6><?php
                    echo"Do zapłaty: ";
                    $razem = 0;
                    for ($i = $min; $i <= $max; $i++) {
                        $suma = $ob->selectZdj("select cena from koszyk where id='" . $i . "' ", ["cena"]);
                        @ $razem = $razem + $suma;
                    }
                    echo $razem;
                            ?>
                        </h6>
                        <?php
                    } else {
                        ?>
                        </table> <h6><?php
                echo"Nie masz nic w koszyku! ";
                        ?>
                        </h6>
                        <?php
                    }
                } else {
                    echo "Zaloguj się lub zarejestruj aby korzystać z koszyka! "
                    ?><br><br><a href="logowanie.php">Zaloguj się!</a><a href="rejestracja.php"> / Rejestracja</a><?php }
                ?>
            </main>
        </div>
        <div class="wrapper row5">
            <div id="copyright" class="hoc clear"> 

                <p class="fl_right">Aleksandra Radzik</p>
            </div>
        </div>
        <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

        <script src="../layout/scripts/jquery.min.js"></script>
        <script src="../layout/scripts/jquery.backtotop.js"></script>
        <script src="../layout/scripts/jquery.mobilemenu.js"></script>
        <script src="../layout/scripts/jquery.placeholder.min.js"></script>

    </body>
</html>