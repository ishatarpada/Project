<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order Details</title>

  <!-- css bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- main css style link -->
  <link rel="stylesheet" href="Style/side-navbar.css" />

  <link rel="stylesheet" href="Style/admin-course.css" />

  <!-- font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
  <div class="wrapper  bg-body-tertiary" style="font-family: sans-serif;">

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
                  <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search">
                  <button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="bi bi-search fs-6 text-primary"></i></button>
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
                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
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
                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3 user-list" aria-labelledby="profileDropdown">
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
                  <li><a class="dropdown-item bg-danger-soft-hover" href="log-out.php"><i class="bi bi-power fa-fw me-4 text-danger"></i>
                      <span class="text-danger">Log Out</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <!-- course details -->
      <div class="card bg-light shadow border rounded-3 my-3 container">
        <!-- Catd header -->
        <div class="card-header bg-light border-bottom">
          <h5 class="card-header-title fs-4 fw-semibold m-0 p-1">Payment Details</h5>
        </div>

        <?php
        if (isset($_GET['id'])) {
          $payment_id = $_GET['id'];
          // Include database connection
          include 'config.php';

          // SQL query to fetch payment details
          $payment_sql = "SELECT * FROM payments WHERE payment_id = '$payment_id'";
          $payment_result = mysqli_query($conn, $payment_sql);


          if ($payment_result && mysqli_num_rows($payment_result) > 0) {
            // Output data of each payment for this course
            while ($payment_row = mysqli_fetch_assoc($payment_result)) {
              $course_name = $payment_row['course_name'];

              // SQL query to fetch course details for this payment
              $course_sql = "SELECT * FROM course WHERE course_title = '$course_name'";
              $course_result = mysqli_query($conn, $course_sql);

              if ($course_result && mysqli_num_rows($course_result) > 0) {
                // Output data of the course
                $course_row = mysqli_fetch_assoc($course_result);
        ?>
                <div class="card bg-transparent rounded-3 mt-1 border-0">
                  <!-- Card body START -->
                  <div class="card-body">
                    <div class="card-body">

                      <div class="d-flex align-items-center justify-content-between my-2">
                        <h6 class="mb-0 fw-bold"><a href="#" class="text-decoration-none text-dark fs-4 text-uppercase">By
                            <?php echo $payment_row["payer_name"]; ?></a></h6>
                        <!-- Price -->
                        <h5 class="mb-3 fw-bolder text-danger"><?php echo $course_row["course_price"]; ?></h5>
                      </div>
                      <!-- Info -->
                      <div class="row">
                        <ul class="list-group list-group-flush  bg-body-tertiary col-md-5">

                          <li class="list-group-item my-1 bg-transparent">
                            <span class="text-secondary fw-medium me-2">Invoice ID:</span>
                            <span class="h6 mb-0 fw-semibold"><?php echo $payment_row["payment_id"]; ?></span>
                          </li>

                          <li class="list-group-item my-1 bg-transparent">
                            <div class="d-flex align-items-center justify-content-start flex-wrap">
                              <span class="text-secondary fw-medium me-2">Instructor: </span>
                              <!-- Avatar image -->
                              <div class="avatar avatar-md me-3" style="height:40px; width:40px;">
                                <img class="avatar-img rounded" src='<?php echo $course_row['instructor_img']; ?>' alt="avatar" style="height:40px; width:40px;">
                              </div>
                              <span class="h6 mb-0 fw-semibold"><?php echo $course_row["instructor"]; ?></span>
                            </div>
                          </li>

                          <li class="list-group-item my-1 bg-transparent">
                            <div class="d-flex align-items-center justify-content-start flex-wrap">
                              <span class="text-secondary fw-medium me-2">Course Name:</span>
                              <!-- Avatar image -->
                              <div class="avatar avatar-md me-3" style="height:40px; width:40px;">
                                <img class="avatar-img rounded" src='<?php echo $course_row['course_img']; ?>' alt="avatar" style="height:40px; width:40px;">
                              </div>
                              <span class="h6 mb-0 fw-semibold"><?php echo $payment_row["course_name"]; ?></span>
                            </div>
                          </li>

                          <li class="list-group-item my-1 bg-transparent">
                            <span class="text-secondary fw-medium me-2">Date:</span>
                            <span class="h6 mb-0 fw-semibold"><?php echo date('Y-m-d', strtotime($payment_row["created_at"])); ?></span>
                          </li>

                        </ul>

                        <ul class="list-group list-group-flush bg-body-tertiary col-md-5">
                          <li class="list-group-item my-1 bg-transparent">
                            <span class="text-secondary fw-medium me-2">Amount:</span>
                            <span class="h6 mb-0 fw-semibold"><?php echo $payment_row["amount"]; ?></span>
                          </li>

                          <li class="list-group-item  bg-transparent">
                            <span class="text-secondary fw-medium me-2">Payment Method:</span>
                            <span class="h6 mb-0 fw-semibold">
                              <?php
                              if ($payment_row["card_used"] == "visa") {
                                echo '<img src="Assests/visa.svg" class="img-fluid me-2" alt="" style="height:40px; width:40px;">';
                              } else {
                                echo '<img src="Assests/other_card.svg" class="img-fluid me-2" alt="" style="height:40px; width:40px;">';
                              }
                              ?>
                            </span>
                          </li>


                          <li class="list-group-item my-1 bg-transparent">
                            <span class="text-secondary fw-medium me-2">Action:</span>
                            <span class="h6 mb-0 fw-semibold" style="height: 40px;">
                              <a href="download_receipt.php?id=<?php echo $payment_row['payment_id'] ?>" class="download-link text-light">
                                <i class="bi bi-download fs-4 fw-bold bg-danger px-2 rounded-circle"></i>
                              </a>
                            </span>
                          </li>

                          <li class="list-group-item my-1 bg-transparent">
                            <span class="text-secondary fw-medium me-2">Status:</span>
                            <span class="h6 mb-0 fw-semibold"><?php echo $payment_row["status"]; ?></span>
                          </li>

                        </ul>
                      </div>
                      <!-- Information END -->
                    </div>
                  </div>
                </div>

        <?php
              } else {
                echo "<tr><td colspan='7'>No course found for this payment</td></tr>";
              }
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