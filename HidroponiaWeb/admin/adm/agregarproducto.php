<?php
session_start();
	include ("../../config/conf.php");
	$link=Conectarse();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<header>
		<img src="../imagenes/hidrologo.png" id="logo">
		<a href="../carritodecompras.php" title="ver carrito de compras">
			<img src="../imagenes/carrito.png">
		</a>
	</header>
	<section>
	<nav class="menu2">
	  <menu>
	    <li><a href="../">Inicio</a></li>
		  <li><a href="../admin.php">Ultimas Compras</a></li>
	    <li><a href="#" class="selected">Agregar</a></li>
	    <li><a href="./modificar.php" >Modificar</a></li>
	    <li><a href="./login/cerrar.php">Salir</a></li>
	  </menu>
	</nav>

	<center><h1>Agregar un Nuevo Producto</h1></center>
	<form action="altaproducto.php" method = "post" enctype="multipart/form-data">
		<fieldset>
			Nombre<br>
			<input type="text" name="nombre">
		</fieldset>
		<fieldset>
			Descripción<br>
			<input type="text" name="descripcion">
		</fieldset>
		<fieldset>
			Imagen<br>
			<input type="file" name="file">
		</fieldset>
			<fieldset>
				Precio<br>
			<input type="text" name="precio">
		</fieldset>
		<fieldset>
			Tipo<br>
		<div class="btn-group" data-toggle="buttons">
<label class="btn btn-primary active">
<input type="radio" name="option1" id="option1" autocomplete="off" value="1" > Semilla
</label>
<label class="btn btn-primary">
<input type="radio" name="option2" id="option2" autocomplete="off" value="2"> Solucion
</label>
</div>
</fieldset>


		<input type="submit" name="accion" value="Enviar" class="aceptar">


	</form>
	</section>
</body>
</html>
