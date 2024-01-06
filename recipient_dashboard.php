<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipient Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 56px; /* Add space for fixed navbar */
        }
        .container {
            margin-top: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Recipient Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Received Donations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Donation History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Welcome</h4>
            <p class="card-text">Thank you for being part of our community.</p>
            
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Received Donations</h4>
            <!-- Display received donations here -->
            <ul>
                <!-- Add more items dynamically based on data -->
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Donation History</h4>
            <!-- Link to navigate to the donation history page -->
            <a href="donation_history.php">View Full Donation History</a>
        </div>
    </div>

    <!-- New card for available food -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Available Food</h4>
            <!-- Link to navigate to the available food page -->
            <a href="available_food_recipient.php">View Available Food</a>
        </div>
    </div>

    <!-- ... Other Cards ... -->

</div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
