<!-- notify_admin.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"));

    $foodName = mysqli_real_escape_string($conn, $data->foodName);
    $quantity = mysqli_real_escape_string($conn, $data->quantity);

    $sql = "INSERT INTO notifications (foodName, quantity, status) 
            VALUES ('$foodName', '$quantity', 'Pending')";

    if ($conn->query($sql) === TRUE) {
        $response = ["success" => true, "message" => "Notification sent successfully"];
        echo json_encode($response);
    } else {
        $response = ["success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error];
        echo json_encode($response);
    }
} else {
    $response = ["success" => false, "message" => "Invalid request method"];
    echo json_encode($response);
}

$conn->close();
?>
