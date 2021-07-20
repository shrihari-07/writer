<?php
    require_once("mysql_connection.php");
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $query = "INSERT INTO users VALUES ('" . $_POST['email'] . "', 
            '" . $_POST['username'] . "', '" . $_POST['password'] . "')";
        $result = mysqli_query($con, $query);
        echo $result;
        $_SESSION["user"] = $_POST["username"];
        header("location:home.php");
    } else {
        echo "<h1>404 Page not found</h1>";
    }
?>
