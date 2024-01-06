<?php
include('common_functions.php');

$result = getAvailableFood();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Food (Admin)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h2>Available Food (Admin)</h2>

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
                echo "<tr id='row-{$row['foodName']}'>
                        <td>{$row['foodName']}</td>
                        <td>{$row['quantity']}</td>
                        <td><button onclick='deleteFood(\"{$row['foodName']}\")' class='btn btn-danger'>Delete</button></td>
                      </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p>No available food items at the moment.</p>";
        }
        ?>

    </div>

    <!-- Add this JavaScript at the end -->
    <!-- available_food_admin.php (Add this JavaScript at the end) -->
<script>
    function deleteFood(foodName) {
        // You can use AJAX to send a request to delete the food item
        // Example using Fetch API:
        fetch('delete_food.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ foodName: foodName }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Remove the deleted row from the table
                const tableRow = document.getElementById(`row-${foodName}`);
                if (tableRow) {
                    tableRow.remove();
                }

                // Optionally, display a success message
                alert(data.message);
            } else {
                // Display an error message
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>


</body>
</html>
