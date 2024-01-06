<?php
// process_request.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
    // Sanitize and validate form data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $location = mysqli_real_escape_string($conn, $_POST["location"]);
    $foodName = mysqli_real_escape_string($conn, $_POST["foodName"]);
    $quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);

    // Perform database insertion into the requests table
    $sql = "INSERT INTO requests (name, phone, location, foodName, quantity, timestamp) 
            VALUES ('$name', '$phone', '$location', '$foodName', '$quantity', NOW())";

    if ($conn->query($sql) === TRUE) {
        // Return a success response
        $response = ["success" => true, "message" => "Request processed successfully"];
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
