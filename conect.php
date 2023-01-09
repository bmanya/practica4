<?php

class Connection {
  
  private $servidor;
  private $usuari;
  private $contrasenya;
  private $dbnom;
  private $conn;
  
  
  public function __construct() {
    $this->servidor = "mysql-bernatmanya.alwaysdata.net";
    $this->usuari = "283645";
    $this->contrasenya = "collserola";
    $this->dbnom = "bernatmanya_usuaris";
  }

  public function obrir() {
   
    $this->$conn = new mysqli($this->servidor, $this->usuari, $this->contrasenya, $this->dbnom);

    if ($this->$conn->connect_error) {
        die("Connection failed". $this->$conn->connect_error);
    }
  
    
  } 
  public function tancar(){

    $this->$conn->close();


}


}


?>