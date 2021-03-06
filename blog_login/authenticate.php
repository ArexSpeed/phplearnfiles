<?php

session_start();

require_once 'connect.php';
if(mysqli_connect_errno()){
    exit('Failed to connect to MySQL: '. mysqli_connect_error());
}

if(!isset($_POST['username'], $_POST['password'])){
    exit('Please fill both fields');
}

if($stmt = $conn->prepare('SELECT idUsers, pwdUsers FROM users WHERE uidUsers=?')){
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();
    if($stmt->num_rows>0){
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if(password_verify($_POST['password'], $password)){
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header("Location: home.php");
         }else{
             echo "Incorrect password!";
         }
    }else{
        echo "Incorrect username!";
    }

    $stmt->close();
}