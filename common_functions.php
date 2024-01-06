<?php
// common_functions.php

function getAvailableFood() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query to fetch available food
    $sql = "SELECT foodName, quantity FROM donations";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error retrieving data: " . $conn->error);
    }

    $conn->close();

    return $result;
}

function getDonationHistory() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query to fetch donation history
    $sql = "SELECT foodName, quantity, timestamp FROM donations";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error retrieving data: " . $conn->error);
    }

    $conn->close();

    return $result;
}
function getPendingConfirmations() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM notifications WHERE status = 'Pending'";
    $result = $conn->query($sql);

    $conn->close();

    return $result;
}
?>
