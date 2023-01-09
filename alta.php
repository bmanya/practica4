<?php

require 'user.php';
require 'conect.php';

$conecta = new Connection();
$conecta->obrir();


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








    
  
$conecta->tancar();

?>