<?php

class UserLog {

    private $name;
    private $pass;
    private $log = false;

    function __construct($name, $pass) {
        $this->name = $name;
        $this->pass = $pass;
    }

    public function getName() {
        return $this->name;
    }

    public function logout() {
        $this->log = false;
        $_SESSION = array();
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 42000, '/');
        }
        session_destroy();
    }

    static function loginForm($link) {
// $link – wartość atrybutu action dla formularza logowania
        echo '<div><h3>Zaloguj się:</h3>';
        echo '<form action="' . $link . '" method="post" />';
        ?>         Name: <br/><input type="text" name="name"
                          /><br />
        Password: <br/><input type="password" name="pass" />
        <br />
        <input type="submit" name="submit" value="Login" />  
        <input type="reset" value="Anuluj" />
        </form>
    <?php
    }

    static function login($name, $pass, $bd, $table) {   //$bd - uchwyt do BD, $table – nazwa tabeli z uzytkownikami w bazie
        $user = null;
        if (($name !== "") && ($pass !== "")) {
            $sql = "select * from " . $table . " where login='" . $name . "'and pass='" . $pass . "' ";
            if ($result = $bd->getMysqli()->query($sql)) {
                $ile = $result->num_rows; //ile wierszy
                if ($ile == 1) { //użytkownik zalogowany
                    $user = new UserLog($name, $pass);
                    $user->log = true;
                    $_SESSION["userOK"] = serialize($user);
                }
                $result->close(); /* zwolnij pamięć */
            }
        } return $user;
    }

}
