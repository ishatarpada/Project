<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most Selling Courses</title>
    <!-- CDN link for Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="col-md-5 mx-2 card shadow">
    <h1 class="text-center fw-bold">Course Selling</h1>
        <div class="container">
            <canvas id="salesChart" width="400" height="400"></canvas>
        </div>

        <?php
        // Your PHP code to fetch data from the database
        // Execute the SQL query to get the top selling courses
        include 'config.php';
        $sql = "SELECT course_name, COUNT(*) as sales_count
            FROM payments
            GROUP BY course_name
            ORDER BY sales_count DESC
            LIMIT 10"; // Limiting to top 5 courses
        $result = mysqli_query($conn, $sql);

        // Initialize arrays to store course names and sales counts
        $courseNames = [];
        $salesCounts = [];

        // Fetch data and populate the arrays
        while ($row = mysqli_fetch_assoc($result)) {
            $courseNames[] = $row['course_name'];
            $salesCounts[] = $row['sales_count'];
        }
        ?>

    </div>
    <script>
        // JavaScript code to render the donut chart using Chart.js
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($courseNames); ?>,
                datasets: [{
                    label: 'Sales Count',
                    data: <?php echo json_encode($salesCounts); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                cutout: '80%',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'right'
                    }
                }
            }
        });
    </script>
</body>

</html>