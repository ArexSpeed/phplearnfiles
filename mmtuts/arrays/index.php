<?php
    include_once 'dbc.php';
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
        // $person = "Arex";
        // $people = array("Arex",'Nick',"John");
        // echo $people[0];

        //CONNECTING ARRAYS FROM DB
        // $sql = 'SELECT * FROM users';
        // $result = mysqli_query($conn,$sql);
        // $datas = array();
        // if(mysqli_num_rows($result)>0){
        //     while($row = mysqli_fetch_assoc($result)){
        //         $datas[] = $row;
        //     }
        // }

        // //print_r($datas)

        // foreach($datas as $data){
        //     echo $data['user_first'];
        // }

        // //INDEXED ARRAYS
        // $data = array("Danny","Jane","John");
        // echo $data[0];
        // //Associative arrays
        // $data = array("first" => "Danuel", "last" => 'Nilsen', 'age'=>25);
        // //multidimensional arrays
        // $data = array(array("dannuy","nilsen"),"john","jane");

        $data = array("first" => "Danuel", "last" => 'Nilsen', 'age'=>25);
        echo $data['first'];
     
    ?>
</body>
</html>