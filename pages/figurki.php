<!DOCTYPE html>
<html>
    <head>
        <title>Sklep</title>
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
            <!-- ################################################################################################ -->
            <div class="row1">
                <header id="header" class="hoc clear"> 
                    <!-- ################################################################################################ -->
                    <div id="logo" class="fl_left">
                        <h1><a href="/sklep/index.php" style="font-family: Lobster"> yourHome</a></h1>
                    </div>
                    <nav id="mainav" class="fl_right">
                        <ul class="clear">
                            <li class="active"><a href="/sklep/index.php">Start</a></li>
                            <li><a href="sklep.php">Sklep</a></li>
                            <li><a href="regulamin.php">Regulamin</a></li>
                            <li><a href="kontakt.php">Kontakt</a></li>
                            <li><a href="strKoszyk.php">Koszyk</a></li>
                        </ul>
                    </nav>
                </header>
            </div>
            <div id="breadcrumb" class="hoc clear" > 
                <ul>
                    <li><a href="/sklep/index.php">Home</a></li>
                    <li><a href="#">Sklep</a></li>
                </ul>
            </div>
        </div>
        <div class="wrapper row3">
            <main class="hoc container clear"> 
                <div class="sidebar one_quarter first"> 
                    <h6>Znajdź swoj produkt:</h6>
                    <nav class="sdb_holder">
                        <ul>
                            <li><a href="sklep.php">Wszystko</a></li>
                            <li><a href="../pages/wiszace.php" >Dodatki wiszące</a>
                                <ul>
                                    <li><a href="../pages/lustra.php">Lustra</a></li>
                                    <li><a href="../pages/obrazy.php">Obrazy</a></li>
                                    <li><a href="../pages/ramki.php">Ramki</a></li>
                                </ul>
                            </li>
                            <li><a href="../pages/stojace.php">Dodatki stojące</a>
                                <ul>
                                    <li><a href="../pages/doniczki.php">Doniczki</a></li>
                                    <li><a href="../pages/figurki.php">Figurki</a>
                                        <ul>
                                            <li><a href="../pages/wew.php">Wewnętrzne</a></li>
                                            <li><a href="../pages/zew.php">Zewnetrzne</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="../pages/lezace.php">Dodatki leżące</a>
                                <ul>
                                    <li><a href="../pages/dywany.php">Dywany</a></li>
                                    <li><a href="../pages/wycieraczki.php">Wycieraczki</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="sdb_holder">
                        <h6>Lorem ipsum dolor</h6>
                        <address>
                            Full Name<br>
                            Address Line 1<br>
                            Address Line 2<br>
                            Town/City<br>
                            Postcode/Zip<br>
                            <br>
                            Tel: xxxx xxxx xxxxxx<br>
                            Email: <a href="#">contact@domain.com</a>
                        </address>
                    </div>
                    <div class="sdb_holder">
                        <article>
                            <h6>Lorem ipsum dolor</h6>
                            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit</a></li>
                                <li>Etiam vel sapien et</li>
                                <li><a href="#">Etiam vel sapien et</a></li>
                            </ul>
                            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
                            <p class="more"><a href="#">Continue Reading &raquo;</a></p>
                        </article>
                    </div>
                </div>
                <div class="content three_quarter"> 
                    <table>
                        <?php
                        echo "Produkty:";
                        include_once "../Baza.php";
                        $ob = new Baza("localhost", "root", "", "users");

                        for ($i = 7; $i <= 12; $i++) {
                            ?> <tr> </tr><?php
                            ?><td><?php echo $ob->selectZdj("select * from produkty where id='" . $i . "' ", ["opis"]);
                            ?>
                                <br/>
                                <?php echo "Cena: " ?>
                                <?php echo $ob->selectZdj("select * from produkty where id='" . $i . "' ", ["cena"]); ?>
                                <?php echo "zł " ?>
                                <br/> <br/>
                                <?php echo ' <form action="../pages/koszyk.php" method="post"><input type="submit" name="a' . $i . '" value="Dodaj do koszyka" /></form>'; ?>

                            </td><?php
                            $zdj = $ob->selectZdj("select * from produkty where id='" . $i . "' ", ["zdjecie"]);
                            ?><td><?php echo '<img src="../images/produkty/' . $zdj . '" width="5px" height="5px"   >'; ?></td><?php
                            ?> <tr> </tr><?php
                        }
                        ?>
                    </table>
                </div>
                <div class="clear"></div>
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