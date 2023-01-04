<?php
session_start();
$servidor = "mysql-jordiciurana16.alwaysdata.net";
$usuari = "283018_jordi";
$contrasenya = "collserola7";
$dbnom = "jordiciurana16_practica2";
$siusuari = 0;

$conn = new mysqli($servidor, $usuari, $contrasenya, $dbnom);

if ($conn->connect_error) {
        die("Connection failed". $conn->connect_error);
}

if (isset($_POST["name"]) && isset($_POST["pwd"])) {
    $elnom = $_POST["name"];
    $lacontra = $_POST["pwd"];

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

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body style="background-color: #808080">

<?php if($siusuari == 1): ?>
      <a href="cv.php">VEURE CV</a>
<?php else: ?>
      <a href="index.php">Usuari o contrasenya incorrectes</a>

<?php endif; ?>
</body>
</html>