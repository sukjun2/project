<?php
    $host = "tjrwns3650";
    $user = "tjrwns3650";
    $pass = "rla1wjd!";
    $db = "tjrwns3650";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");
    if(mysqli_connect_errno()){
        echo "Database Connect False";
    } else {
        echo "Database Connect True";
    }
?>