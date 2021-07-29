<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Montserrat&display=swap" rel="stylesheet" />

    <!-- Link to the login.css stylesheet -->
    <link rel="stylesheet" href="../public/css/login.css" />
    <title>Login</title>
</head>

<body>
    <div class="login-outer-div">
        <div class="login-inner-div">
            <div class="login-head-div">
                <h1>Writer</h1>
            </div>
            <div class="login-div">
                <form class="form-container" action="process_login.php" method="post">
                    <div class="login-preivileges">
                        <p>Login to continue.</p>
                    </div>
                    <input class="form-control" type="username" name="username" placeholder="Username" required />
                    <input class="form-control" type="password" name="password" placeholder="Password" required />
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
        <div class="login-account-div">
            <p>
                Don't have an account?
                <a style="text-decoration: none; color: #3695f7; font-weight: bold" href="signup.php">
                    Sign Up
                </a>
            </p>
        </div>
        <?php
        if ($_SESSION["wrongCredentials"]) {
        ?>
            <div class="login-error">
                <p>Username and Password doesn't match, please try again.</p>
            </div>
        <?php
            $_SESSION["wrongCredentials"] = false;
        }
        ?>
    </div>
</body>

</html>