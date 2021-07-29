 <?php
    require('mysql_connection.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $query = "SELECT password FROM users WHERE username='" . $_POST['username'] . "'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) == 1) {
            if (password_verify($_POST['password'], $row['password'])) {
                $_SESSION["user"] = $_POST['username'];
                header("Location: home.php");
            } else {
                $_SESSION["wrongCredentials"] = true;
                header("Location: login.php");
            }
        } else {
            $_SESSION["wrongCredentials"] = true;
            header("Location: login.php");
        }
    } else {
        echo "<h1>404 Page not found</h1>";
    }
    ?>