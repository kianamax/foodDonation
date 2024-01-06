<?php
// delete_food.php

// delete_food.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['foodName'])) {
        $foodName = $data['foodName'];

        // Assuming you have a database connection here
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Perform deletion from the donations table
        $sql = "DELETE FROM donations WHERE foodName = '$foodName'";

        if ($conn->query($sql) === TRUE) {
            // Return a success response
            $response = ["success" => true, "message" => "Food item deleted successfully"];
            echo json_encode($response);
        } else {
            // Return an error response
            $response = ["success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error];
            echo json_encode($response);
        }

        $conn->close();
    } else {
        // Return an error response if foodName is not set
        $response = ["success" => false, "message" => "Food name not provided"];
        echo json_encode($response);
    }
}

?>
