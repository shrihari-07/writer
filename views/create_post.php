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

        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- FontAwesome CDN -->
        <script src="https://kit.fontawesome.com/c5891fcd06.js" crossorigin="anonymous"></script>

        <!-- Link to the create_post.css stylesheet -->
        <link rel="stylesheet" href="../public/css/create_post.css">
        <title>New Post</title>
    </head>

    <body>
        <div id="create-post">
            <div class="back-button-div">
                <a href="home.php"><button><i class="fas fa-long-arrow-alt-left"></i> Back</button></a>
            </div>
            <div class="create-post-body">
                <div class="blog-vector-img">
                    <img src="../public/assets/Stuck at Home - To Do List.png" alt="person standing beside a notepad" />
                </div>
                <div class="create-post-form">
                    <form action="process_create_post.php" method="post" enctype="multipart/form-data">
                        <?php echo "<h2>Hello " . $_SESSION["user"] . " ...</h2>"; ?>
                        <div class="mb-4 mt-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-4">
                            <label for="formFile" class="form-label">Upload image</label>
                            <input class="form-control" type="file" name="blogImage" id="formFile">                        
                        </div>
                        <div class="mb-4">
                            <label for="blog-textarea" class="form-label">Type the blog text</label>
                            <textarea class="form-control" id="blog-textarea" name="blogText" rows="7" required></textarea>
                        </div>
                        <button type="submit">Post</button>
                        <button type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
}
?>