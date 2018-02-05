<?php
    include("../config/conf.php");
    $link = Conectarse();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/ico.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hidroponia Principal</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Hydro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="camasventa.php">Camas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactanos.php">Contactanos</a>
            </li>
          </ul>
        </div>
      </nav>
<br><br><br><br>
      <main role="main" class="inner cover">
        <body>

                                  <form name="form1" class="w3-container w3-card-4 w3-light-grey w3-text-green w3-margin" action="" method="post">

                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                                          <div class="w3-rest">
                                              <label for="Nombre" class="sr-only">Nombre</label>
                                              <input type="text" name="nombre" id="Nombre" class="form-control" placeholder="Nombre" required autofocus>
                                          </div>
                                  </div>
                                  <div class="w3-row w3-section">
                                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                                        <div class="w3-rest">
                                      <label for="Apellido" class="sr-only">Apellido</label>
                                      <input type="text" name="apellido" id="inputDesc" class="form-control" placeholder="Apellido" required autofocus>
                                        </div>
                                  </div>
                                  <div class="w3-row w3-section">
                                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                                    <div class="w3-rest">
                                      <label for="login" class="sr-only">Login</label>
                                      <input type="text" name="email" id="inputDesc" class="form-control" placeholder="Email" required autofocus>
                                    </div>
                                </div>
                                <div class="w3-row w3-section">
                                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
                                  <div class="w3-rest">
                                      <label for="password" class="sr-only">Password</label>
                                      <input type="text" name="telefono" id="inputDesc" class="form-control" placeholder="Telefono" required autofocus>
                                    </div>
                                    </div>
                                    <div class="w3-row w3-section">
                                      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                                      <div class="w3-rest">
                                      <label for="pregunta" class="sr-only">Pregunta</label>
                                        <input type="text" name="mensaje" id="inputDesc" class="form-control" placeholder="Mensaje" required autofocus>
                                    </div>
                                  </div>
                                      <br>

                                      <button name="Enviar" class="w3-button w3-block w3-section w3-green w3-ripple w3-padding" type="submit">Enviar</button>
                                  </form>


                          <br>
                          <br>
                          <?php
                          if (isset($_POST['Enviar'])) {

                              $Nombre = $_POST['nombre'];
                              $Apellido = $_POST['apellido'];
                              $Email = $_POST['email'];
                              $Telefono = $_POST['telefono'];
                              $Mensaje = $_POST['mensaje'];


                              if ($Nombre == "" && $Apellido=="" && $Telefono=="" && $Mensaje=="") {
                                  echo '<script type="text/javascript">
                                  alert("Debe rellenar todos los campos!. ");
                                  document.form1.Nombre.focus();
                                  </script>';
                              } else {
                                  //INSERT INTO `curso`.`tblusuarios` (`idUsuario`, `Nombre`, `Apellido`, `login`, `password`, `pregunta`, `respuesta`) VALUES (NULL, 'juan', 'banegas', 'jbanegas', MD5('jbanegas'), '1', '1');
                                  $SqlI = mysqli_query($link,"Insert into contactanos(`nombre`, `apellido`, `email`, `telefono`, `mensaje`)"
                                          . " values('" . $Nombre . "','" . $Apellido . "','" . $Email . "','" . $Telefono . "','" . $Mensaje . "')")
                                          or die("sadasdasdas " . mysqli_errno() . " - " . mysqli_error());
                              }
                          }
                          ?>

</body>
</html>

          </main>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
