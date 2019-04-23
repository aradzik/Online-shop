<!DOCTYPE html>
<html>
    <head>
        <title>Kontakt</title>
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
                            <li class="active"><a href="kontakt.php">Kontakt</a></li>
                            <li><a href="strKoszyk.php">Koszyk</a></li>
                        </ul>
                    </nav>
                    </header>
            </div>
              <div id="breadcrumb" class="hoc clear" > 
                  <ul>
                    <li><a href="/sklep/index.php">Home</a></li>
                    <li><a href="#">Kontakt</a></li>
                </ul>
               </div>
           <div class="wrapper row3">
            <main class="hoc container clear"> 
                 <div class="content"> 
                     <h1>Kontakt</h1>
                   
                    <p>yourHome</p>
                    <p>ul. Popieluszki 13A</p>
                    <p>20-130 Lublin</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.148118311211!2d22.534179415210506!3d51.253182137080366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472259de6930e291%3A0x90d908193d97c64b!2sKsi%C4%99dza+Jerzego+Popie%C5%82uszki%2C+Lublin!5e0!3m2!1spl!2spl!4v1517172947540" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <br>
                     <br>
                      <br>
                       <br>
                        <br>
                         <br>
                    <div id="comments">
                        <h2>Komentarze</h2>
                        <ul>
                            <li>
                                <article>
                                    <header>
                                        <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                                        <address>
                                           <a>user1</a>
                                        </address>
                                          </header>
                                    <div class="comcont">
                                        <p>Polecam serdecznie, super sklep!</p>  </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <header>
                                        <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                                        <address>
                                            <a>user2</a>
                                        </address>
                                           </header>
                                    <div class="comcont">
                                        <p> Wszystko zgodne z opisem.</p>  </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <header>
                                        <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                                        <address>
                                             <a>user3</a>
                                        </address>
                                            </header>
                                    <div class="comcont">
                                        <p> Jestem w 100% zadowolony, na pewno jescze tu coś kupie!</p>     </div>
                                </article>
                            </li>
                        
                            <?php 
                            include_once "../Baza.php";
                            $db = new Baza('localhost', 'root', '', 'users');
                            $ile = $db->rekordy("select * from kom ");
                            for($i=1;$i<=$ile;$i++){
                           
                            ?>
                            <li>
                                <article>
                                    <header>
                                        <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                                        <address>
                                             <a><?php
                                                echo $nazwa = $db->selectZdj("select * from kom where id='" . $i . "' ", ["nick"]); ?>
                                             </a>
                                        </address>
                                            </header>
                                    <div class="comcont">
                                        <p> <?php
                                                echo $nazwa = $db->selectZdj("select * from kom where id='" . $i . "' ", ["komentarz"]); ?></p>     </div>
                                </article>
                            </li>
                            <?php 
                            }
                            ?>
                          
                        </ul>
                        <h2>Napisz komentarz</h2>
                        <form action="komentarz.php" method="post">
                            <div class="one_third first">
                                <label for="name">Nick <span>*</span></label>
                                <input type="text" name="nick" id="name" value="" size="22" required>
                            </div>
                            <div class="one_third">
                                <label for="email">e-mail <span>*</span></label>
                                <input type="email" name="email" id="email" value="" size="22" required>
                            </div>
                            <div class="block clear">
                                <label for="comment">Twój komentarz:</label>
                                <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Wyslij">
                                &nbsp;
                                <input type="reset" name="reset" value="Resetuj">
                            </div>
                        </form>
                    </div>
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