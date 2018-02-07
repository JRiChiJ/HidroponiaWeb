<?php
    $con = mysqli_connect("localhost", "root", "", "final");
    
    $username = $_POST["username"];
    //echo $username;
    
    $statement = mysqli_prepare($con, "SELECT id_usuario FROM usuario WHERE usuario = ?");
    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    

    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID);
        while(mysqli_stmt_fetch($statement)){
        $userID;
    }
    //echo $userID;

    $statement = mysqli_prepare($con, "SELECT id_sensorph FROM camahidroponica WHERE id_usuario = ?");
    mysqli_stmt_bind_param($statement, "i", $userID);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $id_sensorph);
        while(mysqli_stmt_fetch($statement)){
        $id_sensorph;
      

    }
    //echo $id_sensorph;
    $statement = mysqli_prepare($con, "SELECT id_sensortemp FROM camahidroponica WHERE id_usuario = ?");
    mysqli_stmt_bind_param($statement, "i", $userID);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $id_sensortemp);
        while(mysqli_stmt_fetch($statement)){
        $id_sensortemp;
      

    }
    //echo $id_sensortemp;

    $statement = mysqli_prepare($con, "SELECT valor FROM sensorph WHERE id_sensorph = ?");
    mysqli_stmt_bind_param($statement, "i", $id_sensorph);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $Ph);


    while(mysqli_stmt_fetch($statement)){
        $Ph;
      

    }

    $statement = mysqli_prepare($con, "SELECT valor FROM sensortemp WHERE id_sensortemp = ?");
    mysqli_stmt_bind_param($statement, "i", $id_sensortemp);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $temp);

    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["Ph"] = $Ph;
        //echo $Ph;
        $response["Temp"] = $temp;
        //echo $temp;

    }
    
    
    echo json_encode($response);
?>