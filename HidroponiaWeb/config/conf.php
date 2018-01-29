<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Conectarse(){

    $con = @mysqli_connect("localhost","root","hola70859604");
    if (!$con){
        die("Error al intentar conectarse con el servidor MySQL. ".mysqli_error()) ;
        exit();
    }
    $db_select = mysqli_select_db($con,"usuarioprueba");
    if (!$db_select){
        die("No se pudo conectar con la Base de datos. ".mysqli_error()) ;
        exit();
    }
    return $con;
}

?>
