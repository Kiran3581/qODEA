<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "qodea_starter";

    $conn = mysqli_connect($server,$user,$pass,$dbname);

    if($conn->connect_error) {
        die("Connection Failed".$conn->connect_error);
    }

?>