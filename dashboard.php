<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodSavers Donor Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Your custom styles go here */
        body {
            padding-top: 56px; /* Add space for fixed navbar */
        }

        #sidebar {
            position: fixed;
            height: 100%;
            width: 250px;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
            color: white;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        #sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        #sidebar a:hover {
            background-color: #495057;
        }

        #sidebar .active {
            background-color: #007bff;
        }

        /* Hide content by default */
        .content-section {
            display: none;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <nav id="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#" onclick="showContent('dashboard')"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="showContent('foodDonations')"><i class="fas fa-donate"></i> Food Donations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="showContent('progress')"><i class="fas fa-chart-bar"></i> Progress</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="showContent('events')"><i class="far fa-calendar-alt"></i> Upcoming Events</a>
            </li>
<li class="nav-item">
    <a class="nav-link" href="#" onclick="showContent('donationHistory')"><i class="fas fa-history"></i> Donation History</a>
</li>

            <!-- Add more links as needed -->
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <div id="dashboard" class="content-section">
            <h2>Welcome, [Donor Name]!</h2>
            <p>Thank you for your continuous support. Your contributions make a significant impact on our community.</p>
            <h3>Your Donor Stats</h3>
            <p>Total Donations: [Total Donations]</p>
            <p>Meals Provided: [Meals Provided]</p>
        </div>
        <div id="foodDonations" class="content-section">
            <h2>Food Donations</h2>
            <!-- Form for adding food to the database -->
            <form id="foodForm">
                <!-- Form for adding food to the database -->
                    <div class="form-group">
                        <label for="foodName">Food Name:</label>
                        <input type="text" class="form-control" id="foodName" name="foodName" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>
                <!-- Note: "timestamp" should be a hidden field populated using JavaScript -->
                <input type="hidden" id="timestamp" name="timestamp">
                <button type="submit" class="btn btn-primary">Add Food</button>
            </form>
        </div>
        <div id="progress" class="content-section">
            <h2>Progress</h2>
            <!-- Chart to display distribution statistics -->
            <canvas id="distributionChart" width="400" height="200"></canvas>
        </div>
        <div id="events" class="content-section">
            <h2>Upcoming Events</h2>
            <p>Join our upcoming events and make an even greater impact!</p>
            <!-- List upcoming events here -->
            <ul>
                <li>Event 1: [Event Details]</li>
                <li>Event 2: [Event Details]</li>
                <!-- Add more events as needed -->
            </ul>
        </div>

<div id="donationHistory" class="content-section">
    <?php include 'donation_history.php'; ?>
</div>

    </div>

    <script>
        // Your JavaScript code goes here
        // Initialize Chart.js and add your chart configuration
        var ctx = document.getElementById('distributionChart').getContext('2d');
        var distributionChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Category 1', 'Category 2', 'Category 3'],
                datasets: [{
                    label: 'Distribution Statistics',
                    data: [12, 19, 3], // Replace with your actual data from the database
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

       // Add an event listener for the foodForm submission
document.getElementById('foodForm').addEventListener('submit', function (event) {
    event.preventDefault();

    // Fetch form values
    var foodName = document.getElementById('foodName').value;
    var quantity = document.getElementById('quantity').value;

    // Create a FormData object and append form data
    var formData = new FormData();
    formData.append('foodName', foodName);
    formData.append('quantity', quantity);

    // Perform AJAX request to save data to the database
    fetch('save_food.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
        // Optionally update the chart or perform other actions
        // Assuming you have a function to update the chart, replace updateChartWithData with the actual function name
        updateChartWithData(distributionChart, data); // Update the chart with new data
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});

        // Function to update the chart with new data
        function updateChartWithData(chart, newData) {
            // Assuming newData is an array with updated data
            chart.data.datasets[0].data = newData;
            chart.update(); // Update the chart
        }

        // Function to show/hide content based on the selected link
        function showContent(section) {
            // Hide all content sections
            document.querySelectorAll('.content-section').forEach(function (content) {
                content.style.display = 'none';
            });

            // Show the selected content section
            document.getElementById(section).style.display = 'block';
        }
    </script>
</body>
</html>
