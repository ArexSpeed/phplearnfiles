<?php
 include_once 'includes/dbh_inc.php'
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

<?php
$data = "Admin";
//created a template
$sql = "SELECT * FROM users WHERE user_id=?";
//create a prepared statement
$stmt = mysqli_stmt_init($conn);
//prepare the prepRED STATMENT
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL statment faild";
}else{
    //bind parameters to the placeholder
    mysqli_stmt_bind_param($stmt,'s', $data);
    //Run parameters inside database
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_assoc($result)){
        echo $row['user_uid'] . "<br>";
    }
}




    
?>

</body>
</html>