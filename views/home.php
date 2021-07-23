<?php
session_start();
if (!isset($_SESSION["user"])) {
    echo "<h1>404 Page not found</h1>";
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Montserrat&display=swap" rel="stylesheet" />

        <!-- FontAwesome CDN -->
        <script src="https://kit.fontawesome.com/c5891fcd06.js" crossorigin="anonymous"></script>

        <!-- Link to home.css stylesheet -->
        <link rel="stylesheet" href="../public/css/home.css">
        <title>Writer | Home</title>
    </head>

    <body>
        <div id="home">
            <div class="home-nav">
                <div class="logo">
                    <a href="home.php">
                        <h1>Writer</h1>
                    </a>
                </div>
                <div class="home-nav-items">
                    <a style="color: black;" href="home.php"><img src="../public/assets/home.png"></img></a>
                    <a style="color: black;" href="create_post.php"><img src="../public/assets/plus-sign.png"></img></a>
                    <a style="color: black;" href="user.php"><img src="../public/assets/user.png"></img></a>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php
}
?>