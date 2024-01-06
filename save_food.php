<?php
// save_food.php

// Assuming you have a database connection here
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $foodName = $_POST["foodName"];
    $quantity = $_POST["quantity"];

    // Assuming you have a session variable for the logged-in donor
    session_start();
    $username = $_SESSION["username"];

    // Perform database insertion
    $sql = "INSERT INTO donations (username, foodName, quantity , timestamp) VALUES ('$username', '$foodName','$quantity', NOW())";

    if ($conn->query($sql) === TRUE) {
        // Return a success response
        $response = ["success" => true, "message" => "Food added successfully"];
        echo json_encode($response);
    } else {
        // Return an error response
        $response = ["success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error];
        echo json_encode($response);
    }
} else {
    // Return an error response if the request method is not POST
    $response = ["success" => false, "message" => "Invalid request method"];
    echo json_encode($response);
}

$conn->close();

?>
