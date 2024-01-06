<!-- checkout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (your existing head section) ... -->
</head>
<body>
    <div class="container mt-4">
        <h2>Checkout</h2>

        <?php
        $foodName = isset($_GET['foodName']) ? $_GET['foodName'] : '';
        $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : '';

        if ($foodName && $quantity) {
            echo "<p>You are requesting {$quantity} units of {$foodName}. Proceed with the checkout process.</p>";

            echo "<button class='btn btn-primary' onclick='submitForm()'>Confirm</button>";
            echo "<a href='available_food.php' class='btn btn-danger'>Decline</a>";

            echo "<div id='confirmationStatus'></div>";
        } else {
            echo "<p>Invalid food details. Please go back and try again.</p>";
        }
        ?>

        <script>
            function submitForm() {
                document.getElementById('confirmationStatus').innerHTML = "<p class='text-info'>Pending Confirmation...</p>";

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
                        console.log(data.message);
                    } else {
                        console.error(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        </script>
    </div>

    <!-- ... (your existing script includes) ... -->
</body>
</html>
