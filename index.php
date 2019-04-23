<!DOCTYPE html>
<html>
<head>
<title>yourHome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> 

</head>
<body id="top">
<div class="wrapper col1">
  <div id="topbar">
     <div id="clientlogin">
     <?php
                    require_once "UserLog.php";
                    session_start();
                  
                    if (isset($_SESSION["userOK"])) {
                        $user = unserialize($_SESSION["userOK"]);
                        echo "Użytkownik zalogowany jako:" . $user->getName() . "<br/>";
                         ?>
                        <a href="wyloguj.php" style="color: #999999"><font size="2"><u>Wyloguj</u></font></a> <?php
                    } 
                    else{
                         ?>
                        <form action="loginForm.php" method="post">   
           <!--  <form action="' . $link . '" method="post" />-->  
        <fieldset>
          <legend>Site Login</legend>
         <input  name="login" placeholder="login"/>
          <input type="password" name="pass" placeholder="hasło"/>
          <input type="submit" name="submit" id="login" value="Idź" />
        
        </fieldset>
          <a href="pages/rejestracja.php" style="color: #999999"><font size="2"><u>Rejestracja</u></font></a>
      </form>
          <?php
             } ?>      
         </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Idź" />
        </fieldset>
      </form>
    </div>    
  </div>

</div>

<!-- Top Background Image Wrapper -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/dom.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php" style="font-family: Lobster"> yourHome</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Start</a></li>
          <li><a href="pages/sklep.php">Sklep</a></li>
          <li><a href="pages/regulamin.php">Regulamin</a></li>
          <li><a href="pages/kontakt.php">Kontakt</a></li>
          <li><a href="pages/strKoszyk.php">Koszyk</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>

  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <h2 class="heading">Aby Twój dom był przytulniejszy...</h2>
      <p>Nasze produkty są najwyższej jakości.</p>
      <footer><a class="btn medium" href="#przenies">Więcej</a></footer>
    </article>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
  <!-- ################################################################################################ -->
</div>

<div id="przenies" class="wrapper row3">
  <main class="hoc container clear"> 
      <div id="galeria"  >      
          <a><h1>O nas:</h1></a>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p>
              Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
          </p>
          <p>
              Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
          </p>
          <p>
              Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
          </p>

      <div class="fotorama"> 
  <img src="images/demo/backgrounds/1.jpg">
  <img src="images/demo/backgrounds/2.jpg">
  <img src="images/demo/backgrounds/3.jpg">
  <img src="images/demo/backgrounds/4.jpg">
</div>
           </div>
  </main>
</div>


<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 

    <p class="fl_right">Aleksandra Radzik</p>
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>