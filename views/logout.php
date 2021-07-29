<?php
    session_start();

    if(!isset($_SESSION["user"])){
        echo "<h1>404 Page not found</h1>";
    } else {
        session_destroy();
        header("Location:login.php");
    }
?>