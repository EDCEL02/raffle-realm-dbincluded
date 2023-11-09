<?php
session_start();
include 'db_connect.php'; // Make sure to include your database connection file

// Check if the session array is set
if (isset($_SESSION['decrementedProductIDs'])) {
    // Iterate through each ProductID in the session array
    foreach ($_SESSION['decrementedProductIDs'] as $productID) {
        // Perform the database query to get potential winners
        $selectQuery = "SELECT UserID, TicketCarted FROM raffle_cart WHERE ProductID = $productID AND IsOnDraw = 1 AND IsRemoved = 0 AND IsPurchased = 1";

        $result = $conn->query($selectQuery);

        if ($result->num_rows > 0) {
            // Generate a random number to pick a winner
            $randomWinnerIndex = mt_rand(0, $result->num_rows - 1);

            // Fetch all potential winners into an array
            $potentialWinners = $result->fetch_all(MYSQLI_ASSOC);

            // Get the lucky winner based on the random index
            $luckyWinner = $potentialWinners[$randomWinnerIndex];
            $luckyUserID = $luckyWinner['UserID'];

            // Update IsWon to 1 for the lucky winner
            $updateIsWonQuery = "UPDATE raffle_cart SET IsWon = 1 WHERE ProductID = $productID AND UserID = $luckyUserID";
            $conn->query($updateIsWonQuery);

            // Update IsOnDraw to 0 for all items with corresponding ProductID
            $updateIsOnDrawQuery = "UPDATE raffle_cart SET IsOnDraw = 0 WHERE ProductID = $productID AND IsOnDraw = 1 AND IsRemoved = 0";
            $conn->query($updateIsOnDrawQuery);

            // Insert the winner into raffle_winners table
            $insertWinnerQuery = "INSERT INTO raffle_winners (UserID, ProductID, Status, IsDelivered) VALUES ($luckyUserID, $productID, 'Preparing to ship by seller', 0)";
            $conn->query($insertWinnerQuery);

            $updateTotalWinnersQuery = "UPDATE raffle_products SET TotalWinners = TotalWinners + 1 WHERE ProductID = $productID";
            $conn->query($updateTotalWinnersQuery);

            echo "Winner selected: UserID $luckyUserID for ProductID $productID!";
        } else {
            echo "No potential winners for ProductID $productID.";
        }
    }

    // Reset the session array at the end
    $_SESSION['decrementedProductIDs'] = array();
} else {
    // Handle the case where the session array is not set
    echo "Session array 'decrementedProductIDs' not set!";
}

// Close the database connection
$conn->close();

?>
