<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Earning Chart</title>
  <!-- CDN links for JS libraries -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>

  <div class="col-md-6 shadow p-3 card mx-2">
    <h1 class="text-center fw-bold">Earning</h1>
    <?php
    include './config/config.php';
    $earningsData = array_fill(1, 12, 0); // Initialize all months with 0 earnings
    $sql = "SELECT MONTH(created_at) AS month, SUM(amount) AS total_earnings FROM payments GROUP BY MONTH(created_at)";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
      $earningsData[$row['month']] = $row['total_earnings'];
    }

    // Prepare labels and data arrays for Chart.js
    $earningsValues = array_values($earningsData);
    $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    ?>
    <div class="card-body">
      <?php
      // Check if there's data before creating the chart
      if (!empty(array_filter($earningsData))) {
      ?>
        <div id="earningChart" width="800" height="400"></div>
      <?php
      } else {
        echo "No earnings data found.";
      }
      ?>
    </div>
  </div>

  <script>
    <?php
    // Check if there's data before initializing the chart
    if (!empty(array_filter($earningsData))) {
    ?>
      console.log(<?php echo json_encode($earningsValues); ?>);
      console.log(<?php echo json_encode($months); ?>);

      var options = {
        chart: {
          height: 280, // Set chart height
          type: "area" // Define chart type as area
        },
        dataLabels: {
          enabled: false // Disable data labels on data points
        },
        series: [{
          name: "Earnings", // Set legend label
          data: <?php echo json_encode($earningsValues); ?> // Use actual earnings data
        }],
        fill: {
          type: "gradient", // Use gradient fill
          gradient: {
            shadeIntensity: 1, // Adjust gradient intensity
            opacityFrom: 0.7, // Set starting opacity
            opacityTo: 0.9, // Set ending opacity
            stops: [0, 90, 100] // Define color stops for gradient
          }
        },
        xaxis: {
          categories: <?php echo json_encode($months); ?> // Use actual month labels
        }
      };

      var chart = new ApexCharts(document.querySelector("#earningChart"), options);

      chart.render();
    <?php
    }
    ?>
  </script>
  <script src="Script/sidebar.js"></script>
</body>

</html>