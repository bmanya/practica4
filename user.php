<?php

require 'conect.php';

class User {
  
  public $elnom;
  public $username;
  public $password;
  public $email;
  public $surname;
  
  
  public function __construct($username, $password, $email, $elnom, $surname) {
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    $this->$elnom = $elnom;
    $this->$surname = $surname;
  }

  public function save() {
    $conecta = new Connection();
    $conecta->obrir();


    $a = $this->$elnom;
    $b = $this->$surname;
    $c = $this->username;
    $d = $this->email;
    $e = $this->password;
  
    $sql = "INSERT INTO Registre(Name, Surname, User, Mail, Password) VALUES ('$a', '$b', '$c', '$d', '$e')";
    $stmt = $conn->prepare($sql);

    if($conn->query($sql) === TRUE) {
      echo "Nou usuari creat";
      echo "<a href='index.php'>Tornar a l'inici</a>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conecta->tancar();
  } 
  public function get(){

    $sql = "SELECT User, Password, Name, Surname FROM Registre";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
  
        while($row = $result->fetch_assoc()) {
            
            if ($row["User"] == $elnom && $row["Password"] == $lacontra) {
                $_SESSION["usuari"][0] = $row["Name"];
                $_SESSION["usuari"][1] = $row["Surname"];
                $_SESSION["usuari"][2] = $row["User"];
                $siusuari = 1;
                
            }
        }
    } else {
        echo "0 results";
    }



}


}


?>