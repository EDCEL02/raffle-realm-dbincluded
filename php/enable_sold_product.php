<?php
session_start();
include 'db_connect.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productId'];

    // Echo the productId
    echo "Product ID: $productId";

    // Assuming your $conn is the database connection
    $updateQuery = "UPDATE raffle_products SET IsRaffled = 1 WHERE ProductID = $productId";
    $conn->query($updateQuery);

    // You can also echo a response if needed
    header('Location: ../seller-cart2.php');
    exit(); // Make sure to exit after sending the header to prevent further script execution
}

?>