<?php
	include ("../../config/conf.php");
	$link=Conectarse();
	if($_POST['Caso']=="Eliminar"){
		mysqli_query($link,"delete from productos where Id=".$_POST['Id']);
		unlink("../productos/".$_POST['Imagen']);
		echo 'El producto se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){
		mysqli_query($link,"update productos set Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
		mysqli_query($link,"update productos set Descripcion='".$_POST['Descripcion']."' where Id=".$_POST['Id']);
		mysqli_query($link,"update productos set Precio='".$_POST['Precio']."' where Id=".$_POST['Id']);
		echo 'El producto se ha modificado';
	}

?>
