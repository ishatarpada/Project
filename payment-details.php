<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Details</title>

  <!-- css bootstrap link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- main css style link -->
  <link rel="stylesheet" href="Style/style.css">

  <!-- account css style link -->
  <link rel="stylesheet" href="Style/account.css">

  <!-- header css style link -->
  <link rel="stylesheet" href="Style/header.css">

  <!-- css for large screen -->
  <link rel="stylesheet" href="Style/media-query.css">

  <!-- font-awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

  <!-- header section -->
  <?php
  include 'header.php';
  ?>

  <div class="account-container
         mt-2">
    <p class="fs-4 fw-bold text-center account text-info-emphasis">My Account</p>
    <div class="container-fluid">
      <div class="account-tabMenu d-flex justify-content-center align-items-center mt-1">
        <ul class="list-unstyled d-flex">
          <li class="mx-3">
            <a href="profile.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Profile</a>
          </li>
          <li class="mx-3">
            <a href="personalization.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Personalization</a>
          </li>
          <li class="mx-3">
            <a href="payment.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Payment Methods</a>
          </li>
          <li class="mx-3">
            <a href="payment-details.php" class="text-decoration-none fs-5 text-dark fw-bold p-1 border-bottom border-danger border-3">Payment-history</a>
          </li>
          <li class="mx-3">
            <a href="notification.php" class="text-decoration-none fs-5 text-dark fw-bold p-1 ">Notifications</a>
          </li>
          <li class="mx-3">
            <a href="reminder.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Reminder</a>
          </li>
        </ul>
      </div>


      <!-- total Payment -->
      <?php
      include('config.php');
      ?>


      <div class="container-fluid mb-5">
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

                      // SQL query to fetch course details
                      if (isset($_SESSION['user_id'])) {
                        $user_id = $_SESSION['user_id'];

                        // SQL query to fetch course details for the logged-in user
                        $sql = "SELECT * FROM payments WHERE user_id = $user_id";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                          // Output data of each payment
                          while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                            <tr>
                              <td>

                                <h6 class="mb-0 ms-3 table-responsive-title fw-bold py-3">
                                  <a href="#" class="text-dark text-decoration-none"><?php echo $row["id"]; ?></a>
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
                                <a href="download_receipt.php?id=<?php echo $row['payment_id'] ?>" class="download-link text-light d-flex justify-content-center">
                                  <i class="bi bi-download fs-4 fw-bold bg-danger px-2 rounded-circle text-center"></i>
                                </a>
                              </td>

                            </tr>
                      <?php
                          }
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

  <!-- footer -->
  <?php
  include 'footer.php';
  ?>


  <!-- js external link -->
  <script src="Script/main.js"></script>

  <!-- js bootstrap link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>