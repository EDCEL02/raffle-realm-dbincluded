<?php
session_start();
$userID = $_SESSION['user_id'];

// Include your database connection file or establish a connection here
// Replace the placeholders with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raffle_realm";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productName = $_POST["productName"];
    $productStock = $_POST["productStock"];
    $drawType = $_POST["drawType"];
    $category = $_POST["category"];
    $ticketPrice = $_POST["ticketPrice"];
    $numTickets = $_POST["numTickets"];
    $productDescription = $_POST["productDescription"];
    $productSpecification = $_POST["productSpecification"];

    // Handle image uploads
    $thumbnailName = basename($_FILES["productImages"]["name"][0]);  // Use index 0 for Screenshot 1

    // Get the last product ID from the database
    $query = "SELECT MAX(ProductID) AS LastProductID FROM raffle_products";
    $result = $conn->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $lastProductID = $row['LastProductID'];

    // Increment the product ID for the new product
    $newProductID = $lastProductID + 1;

    // Create a folder with the name of the new product ID if it doesn't exist
    $productFolder = "../uploads/products/P{$newProductID}/";
    if (!file_exists($productFolder)) {
        mkdir($productFolder, 0777, true);
    }

    $thumbnailPath = $productFolder . $thumbnailName;
    move_uploaded_file($_FILES["productImages"]["tmp_name"][0], $thumbnailPath);

    // Handle multiple image uploads (Product Carousel)
    $carouselPaths = [];
    for ($i = 1; $i <= 6; $i++) {  // Start from index 1 for Screenshot 2 and continue up to index 6
        $carouselPath = $productFolder . $_FILES["productImages"]["name"][$i];
        move_uploaded_file($_FILES["productImages"]["tmp_name"][$i], $carouselPath);
        $carouselPaths[] = $carouselPath;
    }

    // Insert data into the database
    $sql = "INSERT INTO raffle_products (UserID, ProductName, DrawType, Category, Stock, PDThumbnail, PDImg1, PDImg2, PDImg3, PDImg4, PDImg5, PDImg6, PricePerTicket, TicketThreshold, ProductDescription, ProductSpecification, IsRaffled, TicketPurchased, TotalWinners) 
            VALUES (:userID, :productName, :drawType, :category, :productStock, :thumbnailPath, :carousel1, :carousel2, :carousel3, :carousel4, :carousel5, :carousel6, :ticketPrice, :numTickets, :productDescription, :productSpecification, 1, 0, 0)";

    try {
        $stmt = $conn->prepare($sql);
        // Bind parameters and execute the query
        $stmt->bindParam(':userID', $userID);
        $stmt->bindParam(':productName', $productName);
        $stmt->bindParam(':drawType', $drawType);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':productStock', $productStock);
        $stmt->bindParam(':thumbnailPath', $thumbnailPath);
        $stmt->bindParam(':carousel1', $carouselPaths[0]);
        $stmt->bindParam(':carousel2', $carouselPaths[1]);
        $stmt->bindParam(':carousel3', $carouselPaths[2]);
        $stmt->bindParam(':carousel4', $carouselPaths[3]);
        $stmt->bindParam(':carousel5', $carouselPaths[4]);
        $stmt->bindParam(':carousel6', $carouselPaths[5]);
        $stmt->bindParam(':ticketPrice', $ticketPrice);
        $stmt->bindParam(':numTickets', $numTickets);
        $stmt->bindParam(':productDescription', $productDescription);
        $stmt->bindParam(':productSpecification', $productSpecification);

        $stmt->execute();

        // Redirect to the seller dashboard or show a success message
        header("Location: ../seller-cart.php");
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
