<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

     /* function generateKey(){
        $keyLength = 8;
        $str = "1234567890abcdefghijklmnoprstuvwxyz()/$"

        //$randStr = str_shuffle($str);//shuffle of string
        $randStr = substr(str_shuffle($str),0, $keyLength);

        return $randStr;
    } */

   /*  function generateKey(){
        $randStr = uniqid('arek', true); //true dodaje jeszcze wiecej znaków
                
        return $randStr;
    } */
    
    //funkcja checkKeys i generate zrobiona by generowac nowe haslo, ale w bazie sprawdza czy nie ma juz takiego i wymysla takie by sie nie powtorzyło
    $conn = mysqli_connect('localhost','root','','phpreg');

    function checkKeys($conn, $randStr){
        $sql = "SELECT * FROM keyen";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            if($row['lit'] == $randStr){
                $keyExist = true;
                break;
            }else{
                $keyExist = false;
            }
        }

        return $keyExist;
    }

    function generateKey($conn){
        $keyLength = 8;
        $str = "1234567890abcdefghijklmnoprstuvwxyz()/$";

        $randStr = substr(str_shuffle($str),0, $keyLength);

        $checkKey = checkKeys($conn, $randStr);

        while($checkKey == true){
            $randStr = substr(str_shuffle($str),0, $keyLength);
            $checkKey = checkKeys($conn, $randStr);
        }

        return $randStr;

    }
    echo generateKey($conn);



?>
</body>
</html>