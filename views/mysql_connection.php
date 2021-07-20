<?php
    $server = "localhost";
    $userName = "root";
    $password = "";
    $database = "writerDB";

    $con = mysqli_connect($server, $userName, $password, $database);
    if(!$con) {
        die("Could not connect to the database: ".mysqli_connect_error());
    }
?>
