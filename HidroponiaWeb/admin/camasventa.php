<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/ico.png">
		<link rel="stylesheet" type="text/css" href="./css/camasventa.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script type="text/javascript"  href="./js/scripts.js"></script>

    <title>Camas Principal</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
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
          <p>
         <a href="./carritodecompracama.php" class="btn btn-info btn-lg">
           <span class="glyphicon glyphicon-piggy-bank"></span> Carrito
         </a>
       </p>
        </div>
      </nav>
		<section>



	<?php
		include ("../config/conf.php");
	  $link = Conectarse();
		$re=mysqli_query($link,"select * from cama_hidroponica")or die(mysqli_error());
		while ($f=mysqli_fetch_array($re)) {
		?>
			<div class="producto">
			<center>
        <img class="rounded-circle" src="./productos/<?php echo $f['imagen'];?>" alt="Generic placeholder image" width="140" height="140">
				<span><?php echo $f['modelo'];?></span><br>
        <p><a class="btn btn-success" href="./detallecama.php?id=<?php  echo $f['id'];?>" role="button">View &raquo;</a></p>
			</center>
		</div>
	<?php
		}
	?>




	</section>


    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>

  </body>
</html>
