<?php 
    $db_user = "root";
    $db_server = "localhost";
    $db_pass = "";
    $db_name = "userdb";
    $connection = "";


    try {
        $connection = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch (Exception $e) {
        echo "". $e->getMessage();
    }
    if($connection){
        echo"Connection established";
    }
?>