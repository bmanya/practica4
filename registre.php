<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currículum vitae</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"> <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" ><!--Bootstrap Icons-->
</head>
<body style="background-color: #808080">

<?php if(!empty($message)): ?>
      <p><?= $message ?></p>
<?php endif; ?>

<div class="row mt-5 m-0">
        <div class="col-2"></div>
        <div class="col-4 mx-auto rounded mt-5" style="background-color: white;">        
            <form action="alta.php" method="post" class="p-3">
                <h5 class="mb-3">Create an account</h5>
                <!-- Name input -->
                <input type="text" name="name" class="form-control" placeholder="Name">
              
                <!-- Surname input -->
                <input type="text" name="surname" class="form-control mt-3 " placeholder="Surname">
                
                <!-- User input-->
                <input type="text" name="user" class="form-control mt-3" placeholder="User">

                <!-- Mail input-->
                <input type="text" name="email" class="form-control mt-3" placeholder="Mail">
              
                <!-- Password input -->
                <input type="password" name="password" class="form-control mt-3 " placeholder="Password"> 
              
                <div class="row mb-3 mt-2">
                </div>

                <div class="row container mx-auto">
                    <button type="submit" class="btn btn-block mb-3 ps-4 pe-4" style="background-color:#808080; color: white; 
                    border: 2px solid black;">Sign up</button>
                </div>
            </form>    
        </div>
        <div class="col-2">
        </div>    
</body>
</html>