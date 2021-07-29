<?php
require_once("mysql_connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectQuery = "SELECT username FROM users WHERE 
        username='" . $_POST["username"] . "'";
    $selectQueryResult = mysqli_query($con, $selectQuery);
    if (mysqli_num_rows($selectQueryResult)) {
        $_SESSION["usernameExists"] = true;
        header("Location:signup.php");
    } else {
        $query = "INSERT INTO users VALUES ('" . $_POST['email'] . "', 
                '" . $_POST['username'] . "', 
                '" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "')";
        mysqli_query($con, $query);
        $_SESSION["user"] = $_POST["username"];
        header("location:home.php");
    }
} else {
    echo "<h1>404 Page not found</h1>";
}
?>
