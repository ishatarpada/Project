<?php

include './config/config.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Course Earning</title>

  <!-- css bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- main css style link -->
  <link rel="stylesheet" href="Style/side-navbar.css" />

  <link rel="stylesheet" href="Style/admin-course.css" />

  <!-- font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <?php
    include 'sidebar.php'
    ?>

    <div class="main bg-body-tertiary">

      <!-- navbar -->
      <?php include 'navbar.php' ?>

      <!-- Earning -->
      <div class="container-fluid my-2 mx-2 bg-light">
        <div class="title d-flex justify-content-between align-items-center">
          <h1 class="fw-bold mx-3 mb-3">Earning</h1>
        </div>
      </div>

      <div class="container-fluid mx-2 shadow mb-5">
        <p class="text-dark fw-bold fs-4">Payment Details</p>
        <div class="row bg-body-tertiary my-2 rounded">
          <div class="col-12">
            <div class="card bg-transparent rounded-3 mt-1 border-0">
              <!-- Card body START -->
              <div class="card-body">
                <div class="table-responsive border-0 rounded-3">
                  <!-- Table START -->
                  <table class="table table-light table-hover align-middle mb-0">
                    <thead>
                      <tr>
                        <th scope="col" class="border-0 bg-dark py-3 text-light rounded-start fs-6">Invoice ID</th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light fs-6">Course Name</th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light fs-6">Date</th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light fs-6">Payment Method</th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light fs-6">Amount</th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light fs-6 text-center">Status</th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light text-center rounded-end fs-6">Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // SQL query to fetch course details for the logged-in user
                      $sql = "select * from payments";
                      $result = mysqli_query($conn, $sql);

                      if (mysqli_num_rows($result) > 0) {
                        // Output data of each payment
                        while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <tr>
                        <td>

                          <h6 class="mb-0 ms-3 table-responsive-title fw-bold py-3">
                            <a href="#" class="text-dark text-decoration-none"><?php echo $row["payment_id"]; ?></a>
                          </h6>
                        </td>
                        <td>
                          <!-- Title -->
                          <h6 class="mb-0 ms-3 table-responsive-title fw-bold">
                            <a href="#" class="text-dark text-decoration-none">
                              <?php echo $row["course_name"]; ?>
                            </a>
                          </h6>
                        </td>

                        <td class="fw-bolder"><?php echo date('Y-m-d', strtotime($row["created_at"])); ?></td>
                        <td class="fw-bolder">
                          <p class="d-flex justify-content-start align-items-center my-auto">
                            <?php
                                if ($row["card_used"] == "visa") {
                                  echo '<img src="Assests/visa.svg" class="img-fluid me-2" alt="" style="height:40px; width:40px;">';
                                } else {
                                  echo '<img src="Assests/other_card.svg" class="img-fluid me-2" alt="" style="height:40px; width:40px;">';
                                }
                                ?>
                          </p>
                        </td>
                        <td class="fw-bolder"><?php echo $row["amount"]; ?></td>
                        <td class="fw-bolder"><?php echo $row["status"]; ?></td>
                        <td>
                          <a href="download_receipt.php?id=<?php echo $row['payment_id'] ?>"
                            class="download-link text-light d-flex justify-content-center">
                            <i class="bi bi-download fs-4 fw-bold bg-danger px-2 rounded-circle text-center"></i>
                          </a>
                        </td>

                      </tr>
                      <?php
                        }
                      } else {
                        echo "<tr><td colspan='4'>No courses found</td></tr>";
                      }
                      // Close the database connection
                      mysqli_close($conn);
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="Script/sidebar.js"></script>
  <!-- JavaScript libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>