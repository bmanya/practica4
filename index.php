<?php

session_start();
if (!isset($_SESSION['usuari'])) {
  $_SESSION['usuari'] = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currículum vitae</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"> <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" ><!--Bootstrap Icons-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #808080">
<div class="row mt-5 m-0">
        <div class="col-2"></div>
        <div class="col-4 mx-auto rounded mt-5" style="background-color: white;">        
            <form action="valida.php" class="p-3" method="post">
                <h5 class="mb-3">Log in with your account</h5>
                <!-- Name input -->
                <input name="name" type="text" class="form-control" placeholder="User">
              
                <!-- Password input -->
                <input name="pwd" type="password" class="form-control mt-3 " placeholder="Password"> 
              
                <div class="row mb-3 mt-2">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check mt-2">
                      <input class="form-check-input " type="checkbox"/>
                      <label class="form-check-label "> Remember me </label>
                    </div>
                  </div>
              
                  <div class="col mt-2">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>

                <div class="row container mx-auto">
                    <input type="submit" class="btn btn-block mb-3 ps-4 pe-4" style="background-color:#808080; color: white; border: 2px solid black;" role="button" href="valida.php">
                </div>

                <div class="row">
                        <h6>Don't have an account? <a href="registre.php">Sign up</a></h6>
                </div>
            </form>    
        </div>
        <div class="col-2">
        </div>    
</body>
</html>