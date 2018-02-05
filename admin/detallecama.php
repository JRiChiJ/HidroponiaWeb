<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="./imagenes/hidrologo.jpg" id="logo">
		  <a href="./carritodecompracama.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>

    <?php
  		include ("../config/conf.php");
  	  $link=Conectarse();
  		$re=mysqli_query($link,"select * from cama_hidroponica where id=".$_GET['id'])or die(mysql_error());
  		while ($f=mysqli_fetch_array($re)) {
  		?>

  			<center>
  				<img src="./productos/<?php echo $f['imagen'];?>"><br>
  				<span><?php echo $f['modelo'];?></span><br>
  				<span>Precio: <?php echo $f['precio'];?></span><br>
  				<a href="./carritodecompracama.php?id=<?php  echo $f['id'];?>">Añadir al carrito de compras</a>
  			</center>

  	<?php
  		}
  	?>




	</section>
</body>
</html>
