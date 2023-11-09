<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raffle Realm</title>
    <link href="img/RR.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

    <header>
        <div class="header-logo">
            <a href="index.php">
                <img src="img/RR.png" alt="Logo">
                <span>Log In</span>
            </a>
        </div>
    </header>

    <div class="middle">
        <div class="container">
            <div class="left">
                <!-- Content for the left div -->
            </div>
            <div class="right">
                <div class="login-form">
                    <form action="php/db_login.php" method="post"> <!-- Update the action attribute with the correct PHP file -->
                        <h1>Log In</h1>
                        <div class="form-group">
                            <input type="text" id="username" name="username" placeholder="Username/ Email">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit">Login</button>
                        <p><a href="#">Forgot Password?</a></p>
                        <div class="social-login">
                            <button class="facebook-login">Facebook</button>
                            <button class="google-login">Google</button>
                        </div>
                        <p>New to Raffle Realm? <a href="signup.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
