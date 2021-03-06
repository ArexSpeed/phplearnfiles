<?php

include 'db/pdo.php';


if(array_key_exists('v',$_GET)){
    $module = $_GET['v'];
}else{
    $module = 'words';
}
$moduleDir = 'modules/'.$module.'.php';

if(file_exists($moduleDir)){
    ob_start();

    include($moduleDir);
    $content = ob_get_contents();
    ob_end_clean();

    include ('layout/admin.php');
}else{
    header("status: 404");
    echo "404";
}
?>

