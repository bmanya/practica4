<?php

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
    $servidor = "mysql-bernatmanya.alwaysdata.net";
    $usuari = "283645";
    $contrasenya = "collserola";
    $dbnom = "bernatmanya_usuaris";
    $conn = new mysqli($servidor, $usuari, $contrasenya, $dbnom);

    if ($conn->connect_error) {
        die("Connection failed". $conn->connect_error);
    }
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
    $conn->close();
  } 
}


?>