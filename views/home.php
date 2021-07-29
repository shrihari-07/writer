<?php
require("mysql_connection.php");
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

        <!-- Link for home.css stylesheet -->
        <link rel="stylesheet" href="../public/css/home_page.css">
        <title>Home | Writer</title>
    </head>

    <body>
        <div id="home-container">
            <div class="home-nav-bar">
                <div class="logo">
                    <a href="home.php">
                        Writer
                    </a>
                </div>
                <div class="home-nav-items">
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
            <div class="user-post-container">
                <?php
                $query = "SELECT * FROM UserPosts ORDER BY id DESC";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $truncatedBlog = substr($row["blogText"], 0, 255);
                ?>
                        <div class="post">
                            <div class="username">
                                <div class="user-info">
                                    <img style="height: 25px;" src="../public/assets/user.png" alt="user-avatar" />
                                    <p><?php echo $row["username"] ?></p>
                                </div>
                                <p><?php echo $row["blogDate"] ?></p>
                            </div>
                            <div class="post-image">                  
                                <img src="../uploads/<?php echo $row["imageName"] ?>" />
                            </div>
                            <div class="blog-text">
                                <a href="user_blog.php?id=<?php echo $row['id'] ?>">
                                    <h3><?php echo $row["title"] ?></h3>
                                </a>
                                <p><?php echo $truncatedBlog ?> .....</p>
                                <a href="user_blog.php?id=<?php echo $row['id'] ?>"><button href="home.php">Read More</button></a>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="no-posts">
                        <h2>No posts yet ...</h2>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </body>

    </html>
<?php
}
?>