<?php
session_start();
include_once 'dbh.php';
$id = $_SESSION['id'];

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allow = array('jpg','jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allow)){
        if($fileError===0){
            if($fileSize<500000){
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE profileimg SET status=0 WHERE userid='$id'";
                $result = mysqli_query($conn, $sql);
                header("Location: index.php?uploadsuccess");
            }else{
                echo 'Your file is too big';
            }
        }else{
            echo "there was an error uploading";
        }
    }else{
        echo 'You cannot upload files of this type!';
    }
}