<?php
    
    $connect = mysqli_connect("localhost", "root", "", "final");
    
    $name = $_POST["Nombre"];
    $lastname = $_POST["Apellido"];
    $email  = $_POST["Email"];
    $username =$_POST["Usuario"];
    $password = $_POST["Password"];
    //echo md5($password);


    function registerUser() {
        global $connect, $username, $password, $name, $lastname, $email; 
        $passwordHash = md5($password);
        //$passwordHash = hash('md5', $password);
        //echo $passwordHash;
        $statement = mysqli_prepare($connect, "INSERT INTO persona (nombre, apellido, email) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($statement, "sss",$name, $lastname, $email);
        mysqli_stmt_execute($statement);

        $last_id = mysqli_insert_id($connect);

        $statement = mysqli_prepare($connect, "INSERT INTO  usuario(usuario,password,id_persona) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($statement, "sss",$username, $passwordHash, $last_id);
        mysqli_stmt_execute($statement);

        mysqli_stmt_close($statement);     
    }
    function usernameAvailable() {
        global $connect, $username;
        //echo "algo";
        //echo $username;
        $statement = mysqli_prepare($connect, "SELECT id_usuario FROM usuario WHERE usuario = ?"); 
        mysqli_stmt_bind_param($statement, "s", $username);
        mysqli_stmt_execute($statement);
        
        mysqli_stmt_bind_result($statement, $id);
        while(mysqli_stmt_fetch($statement)){
        $id;
      

    }
    //echo $id;

        mysqli_stmt_store_result($statement);


        $count = mysqli_stmt_num_rows($statement);

        mysqli_stmt_close($statement); 
        if ($count < 1){
            return true; 
        }else {
            return false; 
        }
    }
    $response = array();
    $response["success"] = false;  
    if (usernameAvailable()){
        registerUser();
        $response["success"] = true;  
    }
    //else 
        //echo "yiyi";
    
    echo json_encode($response);
?>