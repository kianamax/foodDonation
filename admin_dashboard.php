<!-- admin_dashboard.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Adjust styling as needed */
        body {
            font-family: 'Roboto', sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
            color: #fff;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f8f9fa;
        }

        .content {
            margin-left: 250px;
            padding: 16px;
        }

        /* Add new styles for notification tab */
        .notification-tab {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="donation_history.php"><i class="fas fa-history"></i> Donation History</a>
        <a href="available_food_admin.php"><i class="fas fa-utensils"></i> Available Food</a>
        <!-- Add more links as needed -->
        <a href="index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Page content -->
    <div class="content">
        <h2>Admin Dashboard</h2>
        <!-- Dashboard content goes here -->
    </div>

    <!-- Notification tab for pending confirmations -->
    <div class="notification-tab" onclick="openNotifications()">
        <i class="fas fa-bell"></i> Notifications
        <!-- Display the number of pending confirmations -->
        <span id="notificationCount" class="badge badge-light">0</span>
    </div>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JavaScript for handling notifications -->
    <script>
        function openNotifications() {
            // Simulate opening a notification panel (you can replace this with your implementation)
            alert('Open notifications panel');
        }
    </script>
</body>
</html>
