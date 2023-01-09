<?php

require 'user.php';

$servidor = "mysql-bernatmanya.alwaysdata.net";
$usuari = "283645";
$contrasenya = "collserola";
$dbnom = "bernatmanya_usuaris";
$conn = new mysqli($servidor, $usuari, $contrasenya, $dbnom);

if ($conn->connect_error) {
        die("Connection failed". $conn->connect_error);
}


    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['user'])) {

      $elnom = $_POST['name'];
      $elsurname = $_POST['surname'];
      $eluser = $_POST['user'];
      $lacontra = $_POST['password'];
      $elmail = $_POST['email'];
      
      $comprovador = 0;
  
      $usufructuari = new User($eluser, $lacontra, $elmail, $elnom, $elsurname);
      $usufructuari->save();
    
    } 
    else {
    echo'no ho has posat tot o algo';
    echo "<a href='index.php'>Tornar a l'inici</a>";
    }  








    
  
$conn->close();

?>