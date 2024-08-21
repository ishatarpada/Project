<?php
// session_start();
include './config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>instructor Orders</title>

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
    include 'instructor-sidebar.php'
    ?>

    <div class="main bg-body-tertiary">
      <!-- navbar -->
      <nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3" style="height: 80px;">
        <div class="container-fluid p-0">
          <div class="d-flex justify-content-between align-items-center w-100">

            <!-- Top search START -->
            <div class="nav mx-3 my-xl-0 flex-nowrap align-items-center">
              <div class="nav-item w-100">
                <form class="position-relative">
                  <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search"
                    placeholder="Search" aria-label="Search">
                  <button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y"
                    type="submit"><i class="bi bi-search fs-6 text-primary"></i></button>
                </form>
              </div>
            </div>
            <!-- Top search END -->

            <div class="d-flex justify-content-end align-items-center">
              <div class="account">
                <p class="m-0 d-flex align-items-center">
                  <a href="instructor-login.html" class="text-decoration-none iconBtn text-dark">
                    <i class="bi bi-person-circle fs-3 me-3"></i>
                  </a>
                </p>
              </div>


              <div class="dropdown user-info ms-1 ms-lg-0 me-2 rounded-circle">
                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside"
                  data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php
                  if (isset($_SESSION['username'])) {
                    // Check if the user has an image set in the database
                    $username = $_SESSION['username'];
                    $sql = "SELECT ProfilePicture FROM Instructors WHERE Instructor_Username = '{$username}'";
                    $result = mysqli_query($conn, $sql);
                    if ($result && mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_assoc($result);
                      $avatar = $row['ProfilePicture'];
                      // Check if the avatar is not empty
                      if (!empty($avatar)) {
                        echo '<img class="avatar-img rounded-circle" src="' . $avatar . '" alt="avatar" height="50px" width="50px">';
                      } else {
                        echo '<img class="avatar-img rounded-circle" src="Assests/admin.jpg" alt="avatar" height="50px" width="50px">';
                      }
                    } else {
                      echo '<img class="avatar-img rounded-circle" src="Assests/admin.jpg" alt="avatar" height="50px" width="50px">';
                    }
                  } else {
                    echo '<img class="avatar-img rounded-circle" src="Assests/admin.jpg" alt="avatar" height="50px" width="50px">';
                  }
                  ?>
                </a>
                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3 user-list"
                  aria-labelledby="profileDropdown">
                  <!-- Profile info -->
                  <li class="px-3 mb-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar me-3">
                        <img class="avatar-img rounded-circle shadow img-fluid" src="Assests/admin.jpg" alt="avatar">
                      </div>
                      <div>
                        <p class="small m-0">
                          <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></p>
                        <p class="small m-0">
                          <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'guest@example.com'; ?></p>

                      </div>
                    </div>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="account.php"><i class="bi bi-person fa-fw me-4"></i>Edit
                      Profile</a>
                  </li>
                  <li><a class="dropdown-item" href="account.php"><i class="bi bi-gear fa-fw me-4"></i>Account
                      Settings</a>
                  </li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-4"></i>Help</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item bg-danger-soft-hover" href="log-out.php"><i
                        class="bi bi-power fa-fw me-4 text-danger"></i>
                      <span class="text-danger">Log Out</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>


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
                        <th scope="col" class="border-0 bg-dark py-3 text-light fs-6">Status</th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light fs-6">Details</th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light rounded-end fs-6">Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      // Check if the session is set
                      if (isset($_SESSION['username'])) {
                        include 'config.php'; // Include your database connection file
                        $username = $_SESSION['username'];

                        // SQL query to fetch payment details for this course
                        $payment_sql = "SELECT * FROM payments WHERE Instructor_Username = '$username'";
                        $payment_result = mysqli_query($conn, $payment_sql);

                        if ($payment_result && mysqli_num_rows($payment_result) > 0) {
                          // Output data of each payment for this course
                          while ($payment_row = mysqli_fetch_assoc($payment_result)) {
                      ?>
                            <tr>
                              <td>
                                <h6 class="mb-0 ms-3 table-responsive-title fw-bold py-3">
                                  <a href="#"
                                    class="text-dark text-decoration-none"><?php echo $payment_row["payment_id"]; ?></a>
                                </h6>
                              </td>
                              <td>
                                <!-- Title -->
                                <h6 class="mb-0 ms-3 table-responsive-title fw-bold">
                                  <a href="#" class="text-dark text-decoration-none">
                                    <?php echo $payment_row["course_name"]; ?>
                                  </a>
                                </h6>
                              </td>
                              <td class="fw-bolder"><?php echo date('Y-m-d', strtotime($payment_row["created_at"])); ?></td>
                              <td class="fw-bolder"><?php echo $payment_row["amount"]; ?></td>
                              <td class="fw-bolder">
                                <p class="d-flex justify-content-start align-items-center my-auto">
                                  <?php
                                  if ($payment_row["card_used"] == "visa") {
                                    echo '<img src="Assests/visa.svg" class="img-fluid me-2" alt="" style="height:40px; width:40px;">';
                                  } else {
                                    echo '<img src="Assests/other_card.svg" class="img-fluid me-2" alt="" style="height:40px; width:40px;">';
                                  }
                                  ?>
                                </p>
                              </td>

                              <td class="fw-bolder"><?php echo $payment_row["status"]; ?></td>
                              <td>
                                <div class="d-flex justify-content-start align-items-center">
                                  <a href="order-details.php?id=<?php echo $payment_row['payment_id'] ?>"
                                    class="text-decoration-none btn btn-lg btn-info text-light  fw-semibold mx-2">Details</a>
                                </div>
                              </td>
                              <td>
                                <a href=" download_receipt.php?id=<?php echo $payment_row['payment_id'] ?>"
                                  class="download-link text-light d-flex justify-content-start">
                                  <i class="bi bi-download fs-4 fw-bold bg-danger px-2 rounded-circle text-center"></i>
                                </a>
                              </td>
                            </tr>
                      <?php
                          }
                        } else {
                          echo "<tr><td colspan='7'>No payments found for this course</td></tr>";
                        }

                        // Close the database connection
                        mysqli_close($conn);
                      } else {
                        echo "<tr><td colspan='7'>Please log in to view your courses.</td></tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- Card body END -->
            </div>
          </div>
        </div>
      </div>



    </div>
  </div>

  <script src="Script/sidebar.js"></script>
  <script src="Script/search.js"></script>
  <!-- JavaScript libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- Bootstrap JS for tooltips -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  </script>



</body>

</html>