<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raffle_realm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['cartID'])) {
    $cartID = $_POST['cartID'];

    // Perform the database update
    $updateQuery = "UPDATE raffle_cart SET IsRemoved = 1 WHERE CartID = $cartID";

    // Execute the query (make sure to handle errors appropriately)
    $conn->query($updateQuery);
    
    // You can send a response if needed
    echo "Cart item removed successfully!";
    echo '<script>window.location.href = document.referrer;</script>';
}
?>