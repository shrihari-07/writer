 <?php
    require('mysql_connection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $userName = stripslashes($_REQUEST['username']);    // removes backslashes
        $userName = mysqli_real_escape_string($con, $userName);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM users WHERE username='".$userName."'
                     AND password='".$password."'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION["user"] = $userName;
            header("location: home.php");
        } else {
            header("location: login.php?login=error");
        }
    }
?>