<?php
session_start();
include 'db_connect.php';

// Assuming you've already set $_SESSION['user_id'] and $_SESSION['currentProductID'] somewhere before this point
$userID = $_SESSION['user_id'];
$currentProductID = $_SESSION['currentProductID'];
echo $userID;
echo $currentProductID;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the dynamicQuantity is set in the POST data
    if (isset($_POST['dynamicQuantity'])) {
        // Retrieve the dynamic quantity value
        $dynamicQuantity = $_POST['dynamicQuantity'];
        echo $dynamicQuantity;

        // Insert into raffle_cart table
        $sql_insert = "INSERT INTO raffle_cart (UserID, ProductID, TicketCarted, IsOnDraw, IsPurchased, IsRemoved, IsWon) VALUES ('$userID', '$currentProductID', '$dynamicQuantity', 1, 0, 0, 0)";

        if ($conn->query($sql_insert) === TRUE) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    } else {
        // Handle the case when dynamicQuantity is not set
        echo "Dynamic Quantity is not set in the form.";
    }
} else {
    // Handle the case when the form is not submitted using POST
    echo "Form not submitted.";
}

echo '<script>window.history.back();</script>';


// Close the database connection
$conn->close();
?>
