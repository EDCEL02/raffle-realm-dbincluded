<?php
session_start();
include 'db_connect.php';

// Check if cartInputs is set in the session
if (isset($_SESSION['cartInputs'])) {
    $cartInputs = $_SESSION['cartInputs'];

    // Output the contents of $cartInputs before processing
    echo "Before processing: ";
    var_dump($cartInputs);

    foreach ($cartInputs as $cartInput) {
        $cartID = $cartInput['cartID'];
        $ticketCarted = $cartInput['ticketCarted'];

        // Update raffle_cart table
        $updateCartQuery = "UPDATE raffle_cart SET IsPurchased = 1, TicketCarted = $ticketCarted WHERE CartID = $cartID";
        if (!mysqli_query($conn, $updateCartQuery)) {
            die("Error updating raffle_cart: " . mysqli_error($conn));
        }

        // Retrieve ProductID based on CartID
        $getProductIDQuery = "SELECT ProductID FROM raffle_cart WHERE CartID = $cartID";
        $result = mysqli_query($conn, $getProductIDQuery);

        if (!$result) {
            die("Error fetching ProductID: " . mysqli_error($conn));
        }

        $row = mysqli_fetch_assoc($result);
        $productID = $row['ProductID'];

        // Update raffle_products table
        $updateProductQuery = "UPDATE raffle_products SET TicketPurchased = TicketPurchased + $ticketCarted WHERE ProductID = $productID";
        if (!mysqli_query($conn, $updateProductQuery)) {
            die("Error updating raffle_products: " . mysqli_error($conn));
        }

        echo "CartID: $cartID, TicketCarted: $ticketCarted, ProductID: $productID<br>";
    }

    // Output the contents of $cartInputs after processing
    echo "After processing: ";
    var_dump($cartInputs);

    // Clear cartInputs from the session after processing
    unset($_SESSION['cartInputs']);

    echo "Tickets uploaded successfully.";
} else {
    echo "No cartInputs found in the session.";
}

// Close the database connection



foreach ($cartInputs as $cartInput) {
    $cartID = $cartInput['cartID'];
    $ticketCarted = $cartInput['ticketCarted'];

    // Fetch ProductID from raffle_cart
    $getProductIDQuery = "SELECT ProductID FROM raffle_cart WHERE CartID = $cartID";
    $result = mysqli_query($conn, $getProductIDQuery);

    if (!$result) {
        die("Error fetching ProductID: " . mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($result);
    $productId = $row['ProductID'];

    // Now you have $productId, you can use it in your existing code
    // ...

    echo "CartID: $cartID, TicketCarted: $ticketCarted, ProductID: $productId<br>";
    
}






















session_start(); // Start the session

$sql_fetch = "SELECT * FROM raffle_products";
$result = $conn->query($sql_fetch);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productIds = $row['ProductID'];
        $ticketPurchased = $row['TicketPurchased'];
        $ticketThreshold = $row['TicketThreshold'];
        $stock = $row['Stock'];

        if ($ticketPurchased < $ticketThreshold) {
            continue; // Skip to the next iteration if TicketThreshold is not exceeded
        }

        // Reset TicketPurchased to 0
        $sql_reset = "UPDATE raffle_products SET TicketPurchased = 0 WHERE ProductID = '$productIds'";
        if ($conn->query($sql_reset) === TRUE) {
            echo "TicketPurchased reset to 0 for ProductID: $productIds!<br>";

            // Check Stock and decrement if greater than or equal to 1
            if ($stock >= 1) {
                $sql_decrement_stock = "UPDATE raffle_products SET Stock = Stock - 1 WHERE ProductID = '$productIds'";
                if ($conn->query($sql_decrement_stock) === TRUE) {
                    echo "Stock decremented by 1 for ProductID: $productIds!<br>";

                    // Store ProductID in session array
                    $_SESSION['decrementedProductIDs'][] = $productIds;

                } else {
                    echo "Error decrementing Stock for ProductID: $productIds - " . $conn->error . "<br>";
                }
            }

            // Fetch data again to check Stock and set IsRaffled to 0 if Stock is 0
            $sql_fetch_again = "SELECT Stock FROM raffle_products WHERE ProductID = '$productIds'";
            $result_again = $conn->query($sql_fetch_again);

            if ($result_again->num_rows > 0) {
                $row_again = $result_again->fetch_assoc();
                $stock_again = $row_again['Stock'];

                // Check if Stock is 0 and set IsRaffled to 0
                if ($stock_again == 0) {
                    $sql_set_is_raffled = "UPDATE raffle_products SET IsRaffled = 0 WHERE ProductID = '$productIds'";
                    if ($conn->query($sql_set_is_raffled) === TRUE) {
                        echo "IsRaffled set to 0 for ProductID: $productIds!<br>";
                    } else {
                        echo "Error setting IsRaffled to 0 for ProductID: $productIds - " . $conn->error . "<br>";
                    }
                }
            } else {
                echo "Error fetching Stock for ProductID: $productIds - " . $conn->error . "<br>";
            }
        } else {
            echo "Error resetting TicketPurchased for ProductID: $productIds - " . $conn->error . "<br>";
        }
    }

    // Include find_winner.php directly
    include('find_winner.php');

} else {
    echo "No rows found in raffle_products table!<br>";
}


echo"<script>window.history.back();</script>";
exit();
?>
