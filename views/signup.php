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

    <!-- Link to the signup.css stylesheet -->
    <link rel="stylesheet" href="../public/css/signup.css">
    <title>SignUp</title>
</head>

<body>
    <div class="signup-outer-div">
        <div class="signup-inner-div">
            <div class="signup-head-div">
                <h1>Writer</h1>
            </div>
            <div class="signup-div">
                <form class="form-container" action="process_signup.php" method="post">
                    <div class="signup-preivileges">
                        <p>Sign up to see blog posts from other users.</p>
                    </div>
                    <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                    <button type="submit">Sign Up</button>
                    <div class="terms">
                        <p>
                            By signing up, you agree to our <span class="bold-terms">Terms , Data Policy</span> and <span class="bold-terms">Cookies Policy .</span>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="signup-account-div">
            <p>
                Have an account?
                <a style="text-decoration: none; color: #3695F7; font-weight: bold" href="login.php">
                    Log In
                </a>
            </p>
        </div>
    </div>
</body>

</html>
