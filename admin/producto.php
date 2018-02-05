<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/ico.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Hidroponia Principal</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
<link href="../assets/css/producto.css" rel="stylesheet">
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
              <a class="nav-link" href="#">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactanos.php">Contactanos</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="carritodecompras.php">Carrito</a>
            </li>

          </ul>
        </div>
      </nav>

      <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
          <div class="w3-container w3-center">
                 <h1>Venta de Productos</h1>
        </div>
      </main>
      <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'London')">Camas</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">Semillas</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Nutrientes</button>
      </div>

      <div id="London" class="w3-container w3-border city">
        <div class="w3-container">
          <h2>Modelos de camas</h2>
          <div class="w3-panel w3-card w3-center"><h1>Modelo 1</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>Codiog-Cama</th>
                  <th>Modelo</th>
                  <th>Sensor-Temperatura</th>
                  <th>Sensor-PH</th>
                  <th>Sensor-Temporizador</th>
                  <th><button class="w3-button w3-black">Comprar</button></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>md3</td>
                  <td>hdk1</td>
                  <td>ddm4</td>
                  <td>thu7</td>
                </tr>
              </tbody>
            </table>

          </div>
          <div class="w3-panel w3-card-2 w3-center"><p>Modelo 2</p>
            <table class="table">
              <thead>
                <tr>
                  <th>Codiog-Cama</th>
                  <th>Modelo</th>
                  <th>Sensor-Temperatura</th>
                  <th>Sensor-PH</th>
                  <th>Sensor-Temporizador</th>
                  <th><button class="w3-button w3-black">Comprar</button></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>4</td>
                  <td>md3</td>
                  <td>hdk1</td>
                  <td>ddm4</td>
                  <td>thu7</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="w3-panel w3-card-4"><p>Modelo 3</p></div>
        </div>
      </div>

      <div id="Paris" class="w3-container w3-border city" style="display:none">
        <div class="w3-container">
          <h2>Semillas</h2>
          <div class="w3-panel w3-card w3-center"><h1>Semilla</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>Codigo-Producto</th>
                  <th>Nombre</th>
                  <th>Tipo</th>
                  <th>Presentacion</th>
                  <th>Marca</th>
                  <th><button class="w3-button w3-black">Comprar</button></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Tomate</td>
                  <td>Arbolito</td>
                  <td>Bolsa</td>
                  <td>Agroinf</td>
                </tr>
              </tbody>
            </table>

          </div>
          <div class="w3-panel w3-card-2 w3-center"><h1>Semilla 2</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>Codigo-Producto</th>
                  <th>Nombre</th>
                  <th>Tipo</th>
                  <th>Presentacion</th>
                  <th>Marca</th>
                  <th><button class="w3-button w3-black">Comprar</button></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Tomate</td>
                  <td>Arbolito</td>
                  <td>Bolsa</td>
                  <td>Agroinf</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="w3-panel w3-card-4"><p>Modelo 3</p></div>
        </div>
      </div>

      <div id="Tokyo" class="w3-container w3-border city" style="display:none">
        <div class="w3-container">
          <h2>Nutrientes</h2>
          <div class="w3-panel w3-card w3-center"><h1>Solucion 1</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>Codigo-Producto</th>
                  <th>Nombre</th>
                  <th>Tipo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>PH-Control</td>
                  <td>Liquido-Desarollo</td>
                </tr>
              </tbody>
            </table>

          </div>
          <div class="w3-panel w3-card-2 w3-center"><h1>Solucion 2</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>Codigo-Producto</th>
                  <th>Nombre</th>
                  <th>Tipo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>PH-Control</td>
                  <td>Liquido-Desarollo</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="w3-panel w3-card-4"><p>Solucion 3</p></div>
        </div>
      </div>
    </div>

<script>
function openCity(evt, cityName) {
 var i, x, tablinks;
 x = document.getElementsByClassName("city");
 for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
 }
 tablinks = document.getElementsByClassName("tablink");
 for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
 }
 document.getElementById(cityName).style.display = "block";
 evt.currentTarget.className += " w3-red";
}
</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
