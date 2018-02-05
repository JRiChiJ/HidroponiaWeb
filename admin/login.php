<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../assets/img/ico.png">
        <title>Login Hidroponia</title>
        <!-- Bootstrap core CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../assets/css/signin.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
      <link href='https://inhabitat.com/wp-content/blogs.dir/1/files/2017/11/Hydroponic-Vegetables.jpg' rel='stylesheet' type='text/css'>
      <div class="wrapper"> </div>
            <div class="pager">
                <?php
                    $error=$_GET['LoginError'];
                    if($error == 'si'){
                        ?>
                <div class="col-sm-3 alert alert-danger">
                    <strong>Error!</strong> Valores ingresados incorrectos.
                </div>
                        <?php
                    }
                ?>
                <form class="form-signin" action="control.php" method="post">
                    <h2 class="form-signin-heading">Inicie Sesi&oacute;n</h2>
                    <label for="inputEmail" class="sr-only">Usuario</label>
                    <input type="text" name="inputEmail" id="inputEmail" class="form-control" placeholder="User" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-success btn-block" type="submit" name="Ingresar">Ingresar</button>
                </form>
            </div>
        </div> <!-- /container -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
