<!DOCTYPE html>
<html>
    <head>
        <title>Rejestracja</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    </head>
    <body id="top">
        <div class="wrapper col1">
        </div>
        <div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/dom.jpg');"> 
            <div class="row1">
                <header id="header" class="hoc clear"> 
                    <!-- ################################################################################################ -->
                    <div id="logo" class="fl_left">
                        <h1><a href="/sklep/index.php" style="font-family: Lobster"> yourHome</a></h1>
                    </div>
                    <nav id="mainav" class="fl_right">
                        <ul class="clear">
                            <li><a href="../index.php">Start</a></li>
                            <li><a href="sklep.php">Sklep</a></li>
                            <li><a href="regulamin.html">Regulamin</a></li>
                            <li ><a href="kontakt.html">Kontakt</a></li>
                            <li><a href="strKoszyk.php">Koszyk</a></li>
                        </ul>
                    </nav>
                </header>
            </div>
            <div id="breadcrumb" class="hoc clear" > 
                <ul>
                    <li><a href="/sklep/index.php">Home</a></li>
                    <li><a href="#">Logowanie</a></li>
                </ul>
            </div>
        </div>
        <div class="wrapper row3">
            <div class="content"> 
                <div class="rej" style="padding-left: 300px; padding-top: 50px">
                    <?php
                    require_once "../UserLog.php";
                    session_start();
                    ?>
                    <h2>Zaloguj się!</h2>
                    <form action="../loginForm.php" method="post">
                        <div class="block clear">
                            <label for="name">Login <span>*</span></label>
                            <input type="text" name="login" id="name" value="" size="22" required>
                        </div>

                        <div class="block clear">
                            <label for="email">Hasło <span>*</span></label>
                            <input type="text" name="pass" id="email" value="" size="22" required>
                        </div>
                        <div>
                            &nbsp;
                            <input type="submit" name="submit" value="Zaloguj mnie!">
                            &nbsp;
                            &nbsp;
                            <a href="../index.php">Powrót do strony głownej</a>
                            <a href="rejestracja.php"> / Rejestracja</a>
                            <br> <br> <br> <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="wrapper row5">
            <div id="copyright" class="hoc clear"> 

                <p class="fl_right">Aleksandra Radzik</p>
            </div>
        </div>
        <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
        <!-- JAVASCRIPTS -->
        <script src="../layout/scripts/jquery.min.js"></script>
        <script src="../layout/scripts/jquery.backtotop.js"></script>
        <script src="../layout/scripts/jquery.mobilemenu.js"></script>
        <!-- IE9 Placeholder Support -->
        <script src="../layout/scripts/jquery.placeholder.min.js"></script>
        <!-- / IE9 Placeholder Support -->
    </body>
</html>