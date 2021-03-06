<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <a href="#">
                <img src="logo.png" alt="">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <div>
                <?php
                        if(isset($_SESSION['userId'])){
                            echo '                <form action="includes/logout_inc.php" method="post">
                            <button type="submit" name="logout-submit">Log out</button>
                            </form>';
                        }
                        else{
                            echo '<form action="includes/login_inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="Username/Email...">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" name="login-submit">Login</button>
                            </form>
                            <a href="signup.php">Sign up</a>';
                        }

            ?>

            </div>
        </nav>
    </header>