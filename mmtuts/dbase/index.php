

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Signup</h2>
<form action="includes/err.php" method='POST'>
    <?
        if(isset($_GET['first'])) {
            $first = $_GET['first'];
            echo ' <input type="text" name="first" id="" placeholder="First Name" value="'.$first.'"><br>';
        } else{
            echo ' <input type="text" name="first" id="" placeholder="First Name"><br>';
        }
        if(isset($_GET['last'])) {
            $last = $_GET['last'];
            echo ' <input type="text" name="last" id="" placeholder="Last Name" value="'.$last.'"><br>';
        } else{
            echo ' <input type="text" name="last" id="" placeholder="Last Name"><br>';
        }
        if(isset($_GET['uid'])) {
            $uid = $_GET['uid'];
            echo ' <input type="text" name="uid" id="" placeholder="User Name" value="'.$uid.'"><br>';
        } else{
            echo ' <input type="text" name="uid" id="" placeholder="User Name"><br>';
        }
    ?>
    <input type="text" name="email" id="" placeholder="Email"><br>
    <input type="password" name="pwd" id="" placeholder="Password"><br>
    <button type="submit" name="submit">Sign Up</button>
</form>
    
<?php
    //first method (do not remeber filled field)
    // $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // if(strpos($fullUrl, "signup=empty") == true){
    //     echo "<p class='error'>You did not fill in all fields!</p>";
    //     exit();
    // }elseif(strpos($fullUrl, "signup=char") == true){
    //     echo "<p class='error'>You used invaild characters!</p>";
    //     exit();
    // }elseif(strpos($fullUrl, "signup=email") == true){
    //     echo "<p class='error'>You use invalid email!</p>";
    //     exit();
    // }elseif(strpos($fullUrl, "signup=success") == true){
    //     echo "<p class='success'>You have benn signed up!</p>";
    //     exit();
    // }

    if(!isset($_GET['signup'])){
        exit();
    }
    else{
        $signupCheck = $_GET['signup'];

        if($signupCheck == "empty"){
            echo "<p class='error'>You did not fill in all fields!</p>";
           exit();
        }
        elseif($signupCheck == "char"){
            echo "<p class='error'>You used invaild characters!</p>";
           exit();
        }
        elseif($signupCheck == "email"){
            echo "<p class='error'>You used invaild email!</p>";
           exit();
        }
        elseif($signupCheck == "success"){
            echo "<p class='error'>You have benn signed up!</p>";
           exit();
        }
    }
?>

</body>
</html>