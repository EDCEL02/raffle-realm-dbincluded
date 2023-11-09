<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Add the viewport meta tag -->
    <title>Raffle Realm</title>
    <link href="img/RR.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Link to your external CSS file -->
</head>
<body>

    <header>
        <div class = "header-logo">
            <a href = "index.php">
                <img src = "img/RR.png" alt ="Logo">
                <span>Sign Up</span>
            </a>
        </div>
        
    </header>


    <div class = "middle">
        <div class="container">
            <div class="left">
                <!-- Content for the left div -->           
            </div>
            <div class="right">
                <div class="db_login-form">
                    
                    <form action = "php/db_signup.php" method ="post" onsubmit="return validateForm()">
                        <h1>Sign Up</h1>
                        <div class="form-group">
                            <input type="text" id="first_name" name="first_name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                        </div>

                        <div class="form-group">
                            <input type="text" id="mobile" name="mobile" placeholder="Mobile Number">
                        </div>

                        <div class="form-group">
                            <input type="text" id="username" name="username" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <input type="text" id="email" name="email" placeholder="E-mail">
                        </div>

                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Password">  
                        </div>

                        <div class="form-group">
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">  
                        </div>

                        <button type="submit">Sign Up</button>
                        <p><a href="#">Forgot Password?</a></p>
                        <div class="social-login">
                            <button class="facebook-login">Facebook</button>
                            <button class="google-login"> Google</button>
                        </div>
                        <p>Already have an account? <a href="login.php">Log In</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</body>
<script>
    function validateForm() {
        var firstName = document.getElementById("first_name").value;
        var lastName = document.getElementById("last_name").value;
        var mobile = document.getElementById("mobile").value;
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;

        // Check if any field is empty
        if (firstName === '' || lastName === '' || mobile === '' || username === '' || email === '' || password === '' || confirmPassword === '') {
            alert("All fields are required. Please fill in all the fields.");
            return false;
        }

        // Validate First Name
        if (!/^[a-zA-Z\s'-]+$/.test(firstName)) {
            alert("First Name should only contain letters, spaces, apostrophes, and dashes.");
            return false;
        }

        // Validate Mobile Number
        if (!/^\d+$/.test(mobile)) {
            alert("Mobile Number should not contain letters.");
            return false;
        }

        // Validate Email
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            alert("Invalid email format.");
            return false;
        }

        // Validate Passwords
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        return true;
    }
</script>

</html>