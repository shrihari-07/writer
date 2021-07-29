<?php
require_once("mysql_connection.php");
session_start();

if (!isset($_SESSION["user"])) {
    echo "<h1>404 Page not found</h1>";
} else {
    $query = "SELECT * FROM UserPosts WHERE id='" . $_GET['id'] . "'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
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

        <!-- Link for the user_blog.css stylesheet -->
        <link rel="stylesheet" href="../public/css/user_blog.css">
        <title>Blog | <?php echo $row['title']; ?></title>
    </head>

    <body>
        <div id="user-blog-container">
            <div class="blog-nav-bar">
                <div class="logo">
                    <a href="home.php">
                        Writer
                    </a>
                </div>
                <div class="blog-nav-items">
                    <a href="home.php">
                        <img src="../public/assets/home.png" alt="home" />
                    </a>
                    <a href="create_post.php">
                        <img src="../public/assets/plus-sign.png" alt="plus-sign" />
                    </a>
                    <a href="logout.php">
                        <img src="../public/assets/log-out.png" alt="log-out" />
                    </a>
                </div>
            </div>
            <div class="blog-container">
                <?php
                $query = "SELECT * FROM UserPosts WHERE id = '" . $_GET['id'] . "'";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="blog-image">
                    <img class="image-name" src="../uploads/<?php echo $row['imageName'] ?>" />
                </div>
                <div class="user-info">
                    <p>By: <?php echo $row['username'] ?></p>
                    <p><?php echo $row['blogDate'] ?></p>
                </div>
                <div class="text">
                    <h2><?php echo $row['title'] ?></h2>
                    <p><?php echo $row['blogText'] ?></p>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
}
?>