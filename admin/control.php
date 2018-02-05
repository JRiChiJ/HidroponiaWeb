<?php
    ob_start();
    session_start();
    include("../config/conf.php");
    print_r($_POST);
    $login=$_POST["inputEmail"];
    $pass=md5($_POST["inputPassword"]);
    $link=Conectarse();
    $ssql="Select id, login, password from usuario where login='".$login ."' and password='".$pass."'";
    $resultado = mysqli_query($link,$ssql) or die ("No se pudo ejecutar la consulta.<br> MySQL dijo -> ". mysqli_error()." - ".mysqli_error());
    $userfound=mysqli_num_rows($resultado);
    $row=mysqli_fetch_array($resultado);
    $_SESSION['cod']=$row[0];
    if ($userfound==0)
    {
            header("Location: index.php?LoginError=si");
    }
    else
    {
        $_SESSION["login"]=$login;


            header("Location: dashboard.php");
        }
    mysqli_close($link);
?>
