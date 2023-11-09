<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the cartInputs data from the POST request
    $cartInputs = $_POST['cartInputs'];

    // Update the session variable
    $_SESSION['cartInputs'] = $cartInputs;

    // Respond with a success message or any other data you need
    echo json_encode(['status' => 'success']);
} else {
    // Respond with an error for non-POST requests
    echo json_encode(['status' => 'error']);
}
?>
