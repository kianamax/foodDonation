<!-- checkout.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h2>Checkout</h2>

        <?php
        // Retrieve food details from the URL
        $foodName = isset($_GET['foodName']) ? $_GET['foodName'] : '';
        $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : '';

        if ($foodName && $quantity) {
            echo "<p>You are requesting {$quantity} units of {$foodName}. Proceed with the checkout process.</p>";

            // Add buttons for confirmation and decline
            echo "<button class='btn btn-primary' onclick='submitForm()'>Confirm</button>";
            echo "<a href='available_food.php' class='btn btn-danger'>Decline</a>";

            // Display area for confirmation status
            echo "<div id='confirmationStatus'></div>";

        } else {
            echo "<p>Invalid food details. Please go back and try again.</p>";
        }
        ?>

        <!-- checkout.php (update this JavaScript at the end) -->
        <!-- checkout.php (update this JavaScript at the end) -->
<script>
    function submitForm() {
        // Simulate the confirmation process (you will replace this with AJAX to update the database)
        // For now, we'll just display a pending confirmation message
        document.getElementById('confirmationStatus').innerHTML = "<p class='text-info'>Pending Confirmation...</p>";

        // Simulate sending the request to the admin
        fetch('notify_admin.php', {
            method: 'POST',
            body: JSON.stringify({ foodName, quantity }),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Display a success message or handle as needed
                document.getElementById('confirmationStatus').innerHTML = "<p class='text-success'>Confirmation sent successfully</p>";
                console.log(data.message);
            } else {
                // Display an error message or handle as needed
                document.getElementById('confirmationStatus').innerHTML = "<p class='text-danger'>Error: " + data.message + "</p>";
                console.error(data.message);
            }
        })
        .catch(error => {
            document.getElementById('confirmationStatus').innerHTML = "<p class='text-danger'>Error: " + error + "</p>";
            console.error('Error:', error);
        });
    }
</script>

    </div>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
