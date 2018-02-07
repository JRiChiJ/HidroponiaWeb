
<?php
    
    $con = mysqli_connect("localhost", "root", "", "final");
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    //echo $password;
    
    $statement = mysqli_prepare($con, "SELECT password FROM usuario WHERE usuario = ?");
    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement,$colPassword);
    
    $response = array();
    $response["success"] = false; 
    
    while(mysqli_stmt_fetch($statement)){
        $colPassword;
    }
    //echo $colPassword;
    //echo "espacio";
    //echo md5($password);

    
    
    
        if (md5($password)===$colPassword) {
            
            $response["success"] = true;  
        }
    
    echo json_encode($response);
?>