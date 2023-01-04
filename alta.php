<?php

$servidor = "mysql-bernatmanya.alwaysdata.net";
$usuari = "283645";
$contrasenya = "collserola";
$dbnom = "bernatmanya_usuaris";
$conn = new mysqli($servidor, $usuari, $contrasenya, $dbnom);

if ($conn->connect_error) {
        die("Connection failed". $conn->connect_error);
}

class User {
  
  public $id;
  public $username;
  public $password;
  public $email;
  
  
  public function __construct($username, $password, $email) {
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
  }

  public function save() {
    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['user'])) {

      $elnom = $_POST['name'];
      $elsurname = $_POST['surname'];
      $eluser = $_POST['user'];
      $lacontra = $_POST['password'];
      $elmail = $_POST['email'];
      
      $comprovador = 0;
  
    $sql = "INSERT INTO Registre(Name, Surname, User, Mail, Password) VALUES ('$elnom', '$elsurname', '$eluser', '$elmail', '$lacontra')";
    $stmt = $conn->prepare($sql);

    if($conn->query($sql) === TRUE) {
      echo "Nou usuari creat";
      echo "<a href='index.php'>Tornar a l'inici</a>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
  } 
  else {
    echo'no ho has posat tot o algo';
    echo "<a href='index.php'>Tornar a l'inici</a>";
  }  
}

}





    
  
$conn->close();

?>