<?php
require_once("mysql_connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imageName = $_FILES["blogImage"]["name"];
    $imageType = $_FILES["blogImage"]["type"];
    $curentDate = date("Y-m-d");
    if ($_FILES["blogImage"]["error"] == 0) {
        if ($imageType == "image/jpeg" || $imageType == "image/png") {
            move_uploaded_file($_FILES["blogImage"]["tmp_name"], "../uploads/$imageName");
            $query = "INSERT INTO UserPosts(username, title, imageName, blogText, blogDate)
                    VALUES ('" . $_SESSION['user'] . "', '" . $_POST['title'] . "', '" . $imageName . "', '" . $_POST['blogText'] . "', 
                    '" . $curentDate . "')";
            $result = mysqli_query($con, $query);
            header("Location: home.php");
        } else {
            header("Location:create_post.php?type=Not an image");
        }
    } else {
        header("Location:create_post.php?error=Error occured in uploading image");
    }
} else {
    echo "<h1>404 Page Not Found</h1>";
}
?>