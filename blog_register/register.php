<?php

$host = 'localhost';
$user = 'root';
$pwd = '';
$dbName = 'phpreg';

$conn = mysqli_connect($host,$user,$pwd,$dbName);
if(mysqli_connect_errno()){
    exit('Failed to connect to MySQL: '.mysqli_connect_error());
}

if(!isset($_POST['username'], $_POST['password'], $_POST['email'])){
    exit('Please fill all forms!');
}

if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
    exit("Plese complete the reg form");
}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    exit('Email is not valid');
}
if(preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0){
    exit('username is not valid');
}


if($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username=?')){
    $stmt -> bind_param('s',$_POST['username']);
    $stmt-> execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        echo 'Username exists, plaese choose another';
    }
    else{
        //insert new account
        if ($stmt = $conn->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            echo 'You have successfully registered, you can now login!';
        } else {
            // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
        }
    }
    $stmt->close();
}else{
    //smf is wrong with sql statement
    echo 'Could not prepare statement';
}
$conn->close();