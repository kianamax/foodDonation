<?php
include('common_functions.php');

$result = getAvailableFood();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Food (Recipient)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h2>Available Food (Recipient)</h2>

        <?php
        if ($result->num_rows > 0) {
            echo "<table class='table'>
                    <thead>
                        <tr>
                            <th>Food Name</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['foodName']}</td>
                        <td>{$row['quantity']}</td>
                        <td><a href='checkout.php?foodName={$row['foodName']}&quantity={$row['quantity']}' class='btn btn-primary'>Request</a></td>
                      </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p>No available food items at the moment.</p>";
        }
        ?>

    </div>

</body>
</html>
