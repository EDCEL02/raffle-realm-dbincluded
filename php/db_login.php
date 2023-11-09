<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raffle_realm";
$_SESSION['UserID'] = 'your_value_here';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST['username'];
    $password = $_POST['password'];

    // Validate input to prevent SQL injection
    $usernameOrEmail = mysqli_real_escape_string($conn, $usernameOrEmail);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM user_accounts WHERE username = '$usernameOrEmail' OR email = '$usernameOrEmail'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Compare the entered password with the stored hashed password
        if (password_verify($password, $row['password'])) {
            // Password is correct, create a session
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['UserID']; // Assuming UserID is the correct column name
            
            // Redirect to a secure page after successful login
            header("Location: ../index1.php");
            exit();
        } else {
            echo "Invalid password. Please try again.";
            echo"<script>window.history.back();</script>";
            exit();
        }
    } else {
        echo "Invalid username or email. Please try again.";
        echo"<script>window.history.back();</script>";
        exit();
    }
}

$conn->close();
$_SESSION['UserID'] = $_SESSION['user_id'];
?>
