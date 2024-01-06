<!-- donation_history.php -->

<?php
include('common_functions.php');

$result = getDonationHistory();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h2>Donation History</h2>

        <?php
        if ($result->num_rows > 0) {
            echo "<table class='table'>
                    <thead>
                        <tr>
                            <th>Food Name</th>
                            <th>Quantity</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['foodName']}</td>
                        <td>{$row['quantity']}</td>
                        <td>{$row['timestamp']}</td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "No donations yet.";
        }
        ?>

    </div>

</body>
</html>
