<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/ico.png">
		<link rel="stylesheet" type="text/css" href="./css/estilos.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script type="text/javascript"  href="./js/scripts.js"></script>

    <title>Hidroponia Principal</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
<link href="../assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
		<header>
				<img src="./imagenes/hidrologo.jpg" id="logo">
				<a href="./carritodecompras.php" title="ver carrito de compras">
					<img src="./imagenes/carrito.png">
				</a>
			</header>
		<section>



	<?php
		include ("../config/conf.php");
	  $link = Conectarse();
		$re=mysqli_query($link,"select * from productos")or die(mysqli_error());
		while ($f=mysqli_fetch_array($re)) {
		?>
			<div class="producto">
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<a href="./detalles.php?id=<?php  echo $f['id'];?>">ver</a>
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
