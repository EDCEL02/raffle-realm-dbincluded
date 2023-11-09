<?php
// Include the password hashing function
include('hash.php');

// Assuming you have a connection to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raffle_realm";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile = $_POST['mobile'];

    // Hash the password
    $hashedPassword = hashPassword($password);

    // Check if username or email already exists
    $checkQuery = "SELECT * FROM user_accounts WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        echo '<script>
        var response = confirm("Username or email is already taken. Please choose another. Click OK to go back.");
        if(response){
            window.history.back();
        }
        </script>';
        exit();
    } else {
        // Proceed with inserting the new record
        $sql = "INSERT INTO user_accounts (username, email, password, first_name, last_name, mobile)
                VALUES ('$username', '$email', '$hashedPassword', '$first_name', '$last_name', '$mobile')";

        if ($conn->query($sql) === TRUE) {
            $lastUserID = $conn->insert_id;

            $sqlAddress = "INSERT INTO user_address (UserID)
                VALUES ('$lastUserID')";

            if ($conn->query($sqlAddress) === TRUE) {
                // Redirect to a new HTML file after successful record creation
                header("Location: ../login.php");
                exit();
            } else {
                echo "Error: " . $sqlAddress . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
