<?php
session_start();
// Include your database connection file
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productId'];
    $ticketQuantity = $_POST['ticketQuantity'];
    $yourUserId = $_SESSION['user_id']; // Assuming you store the user ID in the session

    // Validate inputs if needed

    // Insert the tickets into the raffle_cart table
    $sql_insert = "INSERT INTO raffle_cart (UserID, ProductID, TicketCarted, IsOnDraw, IsPurchased, IsRemoved) VALUES ('$yourUserId', '$productId', '$ticketQuantity', 1, 0, 0)";

    if ($conn->query($sql_insert) === TRUE) {
        echo "Tickets added to cart successfully!";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }

    // Close the database connection if needed
 
} else {
    echo "Invalid request method!";
}
echo"<script>window.history.back();</script>";
$conn->close();
?>













































