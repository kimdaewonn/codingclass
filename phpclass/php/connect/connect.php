<?php
    $host = "localhost";
    $user = "dw530";
    $pw = "eoqkr53062!";
    $db = "dw530";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
        // echo "database connect true";
    }
?>