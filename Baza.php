<?php

class Baza {

    private $mysqli; //uchwyt do BD

    public function __construct($serwer, $user, $pass, $baza) {
        $this->mysqli = new mysqli($serwer, $user, $pass, $baza);
        // sprawdz połączenie 
        if ($this->mysqli->connect_errno) {
            printf("Nie udało sie połączenie z serwerem: %s\n", $mysqli->connect_error);
            exit();
        }

       /* if ($this->mysqli->set_charset("utf8")) {
            print("Działa");
        }*/
    }

//koniec funkcji konstruktora

    function __destruct() {
        $this->mysqli->close();
    }

    public function select($sql, $pola) {
        $tresc = "";
        if ($result = $this->mysqli->query($sql)) {
            $ilepol = count($pola); //ile pól
            $ile = $result->num_rows; //ile wierszy
            // pętla po wyniku zapytania $results
            $tresc .= "<table><tbody>";
            while ($row = $result->fetch_object()) {
                $tresc .= "<tr>";
                for ($i = 0; $i < $ilepol; $i++) {
                    $p = $pola[$i];
                    $tresc .= "<td>" . $row->$p . "</td>";
                }
                $tresc .= "</tr>";
            }
            $tresc .= "</table></tbody>";
            $result->close(); // zwolnij pamięć 
        }
        return $tresc;
    }
    public function rekordy($sql){
        $result = $this->mysqli->query($sql);
  @          $ile = $result->num_rows; 
            return $ile;
    }
        public function selectZdj($sql, $pola) {
 
        $tresc = "";
        if ($result = $this->mysqli->query($sql)) {
            $ilepol = count($pola); //ile pól
            $ile = $result->num_rows; //ile wierszy
            // pętla po wyniku zapytania $results
           
            while ($row = $result->fetch_object()) {
                for ($i = 0; $i < $ilepol; $i++) {
                    $p = $pola[$i];
                    $tresc .= $row->$p ;
                }
            }
           
            $result->close(); // zwolnij pamięć 
        }
        return $tresc;
    }
     
 public function insert($sql)
                {
                    //$sql = "INSERT INTO `klienci` VALUES ('$name, '$pass')";
                    $this->mysqli->query($sql);  
                }
                
                
    public function delete($sql) {
      
        $this->mysqli->query($sql);
    }
function getMysqli() {
return $this->mysqli;
}
}

//koniec klasy Baza
?>