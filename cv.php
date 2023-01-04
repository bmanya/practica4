<?php
session_start();
$nom = $_SESSION["usuari"][0];
$cognom = $_SESSION["usuari"][1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currículum vitae</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"> <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" ><!--Bootstrap Icons-->
</head>
<body>
  <div>  
    <header>
          <div style="position: absolute; right:0; display: flex; margin: 1%; flex-direction: column;">
            <ul class="nav nav-pills" style="list-style: none;">
              <li class="nav-item me-3 mt-1" style="font-size: 1.3rem;"><?php echo $nom;?>&nbsp<?php echo $cognom;?></li>
              <li class="nav-item"><form action="logout.php"><button class="btn btn-light">Logout</button></form></li>

            </ul>
          </div>
          <h2 class="p-5 text-center"><?php echo"" ?></h2>
          
    </header>

    <div class="container containerfoto">
      <img class="img-fluid rounded-circle lafoto" src="fotodelpibe.jpg" alt="Una foto d'un noi que no existeix">
    </div>
  </div>   
  <div class="container" style="margin-top: 15px;">
      <div class="row">
        <div class="col-sm-4">
          <div class="row mt-5 pt-5"><h7 class="mb-1 mt-5"><i class="bi bi-chevron-double-right"></i>&nbsp;Dades personals</h7><hr>
            <ul class="list-unstyled">
              <li><i class="bi bi-person-fill"></i>&nbsp;Jordi Manyà</li>
              <li><i class="bi bi-house-door-fill"></i>&nbsp;Carrer del Sol, 09431, Barcelona</li>
              <li><i class="bi bi-telephone-fill"></i>&nbsp;543 783 404</li>
              <li><i class="bi bi-envelope-fill"></i>&nbsp;jmanya@gmail.com</li>
              <li><i class="bi bi-calendar-month"></i>&nbsp;12/08/2002</li>
              <li><i class="bi bi-flag-fill"></i>&nbsp;Catalunya</li>
              <li><i class="bi bi-phone"></i>&nbsp;937 655 320</li>
              <li><i class="bi bi-people-fill"></i>&nbsp;Solter</li>
              <li><i class="bi bi-stoplights-fill"></i>&nbsp;Classe C</li>
            </ul>
          </div>
          <div class="row"><h7 class="mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Habilitats</h7><hr>
            <div class="row mb-1">
              <div class="col">Disciplina</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:75%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">Lideratge</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:75%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">Visionari</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:75%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">Números</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:100%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">Relacions Públiques</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:50%"></div></div>
            </div>
          </div>
          <div class="row"><h7 class="mt-2 mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Idiomes</h7><hr>
            <div class="row mb-1">
              <div class="col">Català</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:100%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">Français</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:75%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">English</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:75%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">Español</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:50%"></div></div>
            </div>
          </div>
          <div class="row"><h7 class="mt-2 mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Informàtica</h7><hr>
            <div class="row mb-1">
              <div class="col">Excel</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:100%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">Word</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:75%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">DelBol</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:50%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">Contalux</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:75%"></div></div>
            </div>
            <div class="row mb-1">
              <div class="col">Cegit</div>
              <div class="col"><div class="progress progress-bar mt-1 bg-secondary" style="width:25%"></div></div>
            </div>
          </div>
          <div class="row"><h7 class="mt-2 mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Competències</h7><hr>
            <ul class="list-unstyled">
              <li><i class="bi bi-caret-right-fill"></i>&nbsp;Comuniació</li>
              <li><i class="bi bi-caret-right-fill"></i>&nbsp;Treball en equip</li>
          </div>
        </div>
        <div class="ps-5 col-sm-8">
          <div class="row"><h7 class="mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Perfil</h7><hr>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum consequatur quaerat, perferendis quis cumque culpa. A adipisci consectetur suscipit laborum sapiente, impedit, in non atque ea architecto earum sed quae quia eligendi ex iure assumenda est repellendus dolor at recusandae sint nesciunt, voluptatibus provident! Eaque labore ipsa nihil quis?</p>
          </div>
          <div class="row"><h7 class="mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Experiència laboral</h7><hr>
              <div class="row">
                <div class="col-4"><p>01/2017 - Present</p></div>
                <div class="col-8"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis libero quisquam explicabo dignissimos, nemo rem voluptatum ullam reprehenderit sit sapiente officia eligendi unde veritatis cumque id eum facere quo est nobis totam error laborum?</p></div>
              </div>
              <div class="row">
                <div class="col-4"><p>08/2016 - 12/2016</p></div>
                <div class="col-8"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, aut.</p>
                  <ul>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                    <li>consectetur adipisicing elit nostrum.</li>
                    <li>Libero inventore sunt placeat cum.</li>
                    <li>Lorem, ipsum dolor sit amet inventore sunt placeat elit</li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-4"><p>01/2015 - 07/2016</p></div>
                <div class="col-8"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis libero quisquam explicabo dignissimos, nemo rem voluptatum ullam reprehenderit sit sapiente officia eligendi unde veritatis cumque id eum facere quo est nobis totam error laborum?</p></div>
              </div>
          </div>
          <div class="row"><h7 class="mb-1"><i class="bi bi-chevron-double-right"></i>&nbsp;Educació</h7><hr>
            <div class="row">
              <div class="col-4"><p>08/208 - Present</p></div>
              <div class="col-8"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis libero quisquam explicabo dignissimos, nemo rem voluptatum ullam reprehenderit sit sapiente officia eligendi unde veritatis cumque id eum facere quo est nobis totam error laborum?</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
<footer>
  <div class="container">
    <p>Pàgina 1/2</p>
  </div>
</footer>
</html>