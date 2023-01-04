<?php

$servidor = "mysql-jordiciurana16.alwaysdata.net";
$usuari = "283018_jordi";
$contrasenya = "collserola7";
$dbnom = "jordiciurana16_practica2";
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

    $sql = "INSERT INTO Registre(Name, Surname, User, Mail, Password) VALUES ('$elnom', '$elsurname', '$eluser', '$elmail', '$lacontra')";
    $stmt = $conn->prepare($sql);

    if($conn->query($sql) === TRUE) {
      echo "Nou usuari creat";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo'no ho has posat tot o algo';
  }  
  
$conn->close();

?>