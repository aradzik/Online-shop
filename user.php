<?php
    if (filter_input(INPUT_POST, 'submit')) { 
     include_once "Baza.php";
    $db = new Baza('localhost', 'root', '', 'users');

    $login = filter_input(INPUT_POST, 'login');
    $pass = filter_input(INPUT_POST, 'pass');
    $hashpass = hash('md5', $pass);
    $name = filter_input(INPUT_POST, 'name');
    $surname = filter_input(INPUT_POST, 'surname');
    $email = filter_input(INPUT_POST, 'email');
    
        $filters = array(
            'login' => array('filter' => FILTER_VALIDATE_REGEXP,
                'options' => ['regexp' => '/^[a-z0-9]{3,25}$/']),
            'pass' => array('filter' => FILTER_VALIDATE_REGEXP,
                'options' => ['regexp' => '/^(?=.*[0-9])[a-zA-Z0-9!@#$%^&*]{6,19}$/']),
            'name' => array('filter' => FILTER_VALIDATE_REGEXP,
                'options' => ['regexp' => '/^[A-Z]{1}[a-zęółńżźćą]{1,30}$/']),
            'surname' => array('filter' => FILTER_VALIDATE_REGEXP,
                'options' => ['regexp' => '/^[A-Z]{1}[a-zęółńżźćą]{1,30}$/']),
            'email' => array('filter' => FILTER_VALIDATE_EMAIL),
            );
        $myInputs = filter_input_array(INPUT_POST,$filters);
        $validateError="";
 
        foreach($myInputs as $key=>$val){
 
            if ($val===false){
                $validateError.=$key." ";
            }
        }
 
        if ($validateError===""){
            $message = "Rejestracja przebiegła pomyślnie";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $hashpass = hash('md5', $pass);
            
            $sql = "insert into user values ('$login', '$hashpass', '$name', '$surname', '$email' );";
            $db->insert($sql);
            ?><meta http-equiv="refresh" content="0; URL=index.php"><?php
        }
        else {
            $message = "Wprowadziłeś niepoprawne dane! ";
            echo "<script type='text/javascript'>alert('$message');</script>";
            ?><meta http-equiv="refresh" content="0; URL=pages/rejestracja.php"><?php
        }
    }