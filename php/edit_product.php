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
    $productId = $_POST["editProductId"];
    $productName = $_POST["productName"];
    $drawType = $_POST["drawType"];
    $category = $_POST["category"];
    $productStock = $_POST["productStock"];
    $ticketPrice = $_POST["ticketPrice"];
    $numTickets = $_POST["numTickets"];
    $productDescription = $_POST["productDescription"];
    $productSpecification = $_POST["productSpecification"];

    // Handle image uploads
    if (!empty($_FILES["productImages"]["tmp_name"][0])) {
        $thumbnailName = basename($_FILES["productImages"]["name"][0]); // Use index 0 for Product Thumbnail

        // Create a folder with the name of the product ID if it doesn't exist
        $productFolder = "../uploads/products/P{$productId}/";
        if (!file_exists($productFolder)) {
            mkdir($productFolder, 0777, true);
        }

        $thumbnailPath = $productFolder . $thumbnailName;
        move_uploaded_file($_FILES["productImages"]["tmp_name"][0], $thumbnailPath);
    } else {
        $thumbnailPath = '';
    }

    // Handle multiple image uploads (Product Carousel)
    $carouselPaths = [];
    for ($i = 1; $i <= 6; $i++) { // Start from index 1 for Product Carousel and continue up to index 6
        $carouselPath = $productFolder . $_FILES["productImages"]["name"][$i];
        if (!empty($_FILES["productImages"]["tmp_name"][$i])) {
            move_uploaded_file($_FILES["productImages"]["tmp_name"][$i], $carouselPath);
            $carouselPaths[] = $carouselPath;
        }
    }

    // Update the corresponding row in the database
    $sql = "UPDATE raffle_products SET 
    ProductName = COALESCE(NULLIF(:productName, ''), ProductName),
    DrawType = COALESCE(NULLIF(:drawType, ''), DrawType),
    Category = COALESCE(NULLIF(:category, ''), Category),
    Stock = COALESCE(NULLIF(:productStock, ''), Stock),
    PricePerTicket = COALESCE(NULLIF(:ticketPrice, ''), PricePerTicket),
    TicketThreshold = COALESCE(NULLIF(:numTickets, ''), TicketThreshold),
    PDThumbnail = COALESCE(NULLIF(:thumbnailPath, ''), PDThumbnail),
    PDImg1 = COALESCE(NULLIF(:carousel1, ''), PDImg1),
    PDImg2 = COALESCE(NULLIF(:carousel2, ''), PDImg2),
    PDImg3 = COALESCE(NULLIF(:carousel3, ''), PDImg3),
    PDImg4 = COALESCE(NULLIF(:carousel4, ''), PDImg4),
    PDImg5 = COALESCE(NULLIF(:carousel5, ''), PDImg5),
    PDImg6 = COALESCE(NULLIF(:carousel6, ''), PDImg6),
    ProductDescription = COALESCE(NULLIF(:productDescription, ''), ProductDescription),
    ProductSpecification = COALESCE(NULLIF(:productSpecification, ''), ProductSpecification)
    WHERE ProductID = :productId";


    try {
        $stmt = $conn->prepare($sql);
        // Bind parameters and execute the query
        $stmt->bindParam(':productId', $productId);
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

        // Redirect or show a success message
        echo '<script>window.history.back();</script>';
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}

?>
