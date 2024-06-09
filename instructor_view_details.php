<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Instructor view Details</title>

  <!-- css bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- main css style link -->
  <link rel="stylesheet" href="Style/side-navbar.css" />

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
      <nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3" style="height: 80px">
        <div class="container-fluid p-0">
          <div class="d-flex justify-content-between align-items-center w-100">
            <!-- Top search START -->
            <div class="nav mx-3 my-xl-0 flex-nowrap align-items-center">
              <div class="nav-item w-100">
                <form class="position-relative">
                  <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search"
                    placeholder="Search" aria-label="Search" />
                  <button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y"
                    type="submit">
                    <i class="fas fa-search fs-6 text-primary"></i>
                  </button>
                </form>
              </div>
            </div>
            <!-- Top search END -->

            <div class="dropdown user-info ms-1 ms-lg-0 me-2 rounded-circle">
              <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside"
                data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="avatar-img rounded-circle" src="Assests/admin.jpg" alt="avatar"
                  style="height: 50px; width: 50px" />
              </a>
              <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3 user-list"
                aria-labelledby="profileDropdown">
                <!-- Profile info -->
                <li class="px-3 mb-3">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-3">
                      <img class="avatar-img rounded-circle shadow img-fluid" src="Assests/admin.jpg" alt="avatar" />
                    </div>
                    <div>
                      <a class="h6 text-decoration-none" href="#">Lori Ferguson</a>
                      <p class="small m-0">example@gmail.com</p>
                    </div>
                  </div>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="account.php"><i class="bi bi-person fa-fw me-4"></i>Edit Profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="account.php"><i class="bi bi-gear fa-fw me-4"></i>Account Settings</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-4"></i>Help</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item bg-danger-soft-hover" href="log-out.php"><i
                      class="bi bi-power fa-fw me-4 text-danger"></i>
                    <span class="text-danger">Log Out</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <div>
        <h1 class="h3 mt-5 mb-2 mb-sm-0 text-center fw-bold fs-1">Instructor Detail</h1>
        <?php

                $InstructorID = $_GET['id'];
                // Include database connection
                include 'config.php';

                // SQL query to fetch course details
                $sql = "SELECT * FROM Instructors WHERE InstructorID = $InstructorID";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
        <div class="container mt-3">
          <div class="card bg-transparent border rounded-3 h-100">

            <!-- Card header -->
            <div class="card-header bg-light border-bottom">
              <h5 class="card-header-title mb-0 fw-bolder">Personal Information</h5>
            </div>

            <!-- Card body START -->
            <div class="card-body">
              <!-- Profile picture -->


              <!-- Information START -->
              <div class="row">

                <!-- Information item -->
                <div class="col-md-6">
                  <div class="avatar avatar-xl my-2 d-flex justify-content-center align-items-center"
                    style="height:200px; width:100%;">
                    <img class="avatar-img rounded-circle border border-white border-3 shadow"
                      src="<?php echo $row['ProfilePicture']; ?>" alt="" style="height:200px; width:200px;">
                  </div>
                  <div class="info mx-5 mt-5">
                    <p class="mb-0 text-secondary"><?php echo $row['Bio']; ?></p>
                  </div>
                </div>

                <!-- Information item -->
                <div class="col-md-6">
                  <ul class="list-group list-group-flush my-2 bg-body-tertiary">

                    <li class="list-group-item  my-1 bg-transparent">
                      <span class="text-secondary fw-medium me-2">Full Name:</span>
                      <span class="h6 mb-0 fw-semibold"><?php echo $row['FirstName'] . ' ' . $row['LastName'] ?></span>
                    </li>

                    <li class="list-group-item  my-1 bg-transparent">
                      <span class="text-secondary fw-medium me-2">User Name:</span>
                      <span class="h6 mb-0 fw-semibold"><?php echo $row['Instructor_Username']; ?></span>
                    </li>

                    <li class="list-group-item  my-1 bg-transparent">
                      <span class="text-secondary fw-medium me-2">Mobile Number:</span>
                      <span class="h6 mb-0 fw-semibold"><?php echo $row['phone_No']; ?></span>
                    </li>

                    <li class="list-group-item  my-1 bg-transparent">
                      <span class="text-secondary fw-medium me-2">Email ID:</span>
                      <span class="h6 mb-0 fw-semibold"><?php echo $row['Email']; ?></span>
                    </li>

                    <li class="list-group-item  my-1 bg-transparent">
                      <span class="text-secondary fw-medium me-2">Location:</span>
                      <span class="h6 mb-0 fw-semibold"><?php echo $row['city']; ?></span>
                    </li>

                    <li class="list-group-item  my-1 bg-transparent">
                      <span class="text-secondary fw-medium me-2">Expertise:</span>
                      <span class="h6 mb-0 fw-semibold"><?php echo $row['Expertise']; ?></span>
                    </li>

                    <li class="list-group-item  my-1 bg-transparent">
                      <span class="text-secondary fw-medium me-2">Joining Date:</span>
                      <span class="h6 mb-0 fw-semibold"><?php echo date('Y-m-d', strtotime($row["JoinDate"])); ?></span>
                    </li>

                    <li class="list-group-item  my-1 bg-transparent">
                      <span class="text-secondary fw-medium me-2">active_courses:</span>
                      <span class="h6 mb-0 fw-semibold"><?php echo $row['active_courses']; ?></span>
                    </li>

                    <li class="list-group-item  my-1 bg-transparent">
                      <span class="text-secondary fw-medium me-2">pending_courses:</span>
                      <span class="h6 mb-0 fw-semibold"><?php echo $row['pending_courses']; ?></span>
                    </li>

                    <li class="list-group-item  my-1 bg-transparent">
                      <span class="text-secondary fw-medium me-2">total_courses:</span>
                      <span class="h6 mb-0 fw-semibold"><?php echo $row['total_courses']; ?></span>
                    </li>
                  </ul>
                </div>


              </div>
              <!-- Information END -->
            </div>
            <!-- Card body END -->
          </div>
        </div>
        <?php }
                } ?>
      </div>

      <div class="container my-5">
        <p class="border-0 bg-dark py-3 text-light rounded-start text-center fs-5">Course List</p>

        <?php
                // Include database connection
                include 'config.php';

                // Check if user_id is set and not empty
                if (isset($_GET['id']) && !empty($_GET['id'])) {
                    $InstructorID = $_GET['id'];
                    // SQL query to fetch course details for the specified user
                    $sql = "SELECT * FROM course WHERE instructor_ID = {$InstructorID}";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // Output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>
        <!-- course details -->
        <div class="card bg-light shadow border rounded-3 my-3 container">

          <!-- Catd header -->
          <div class="card-header bg-light border-bottom">
            <h5 class="card-header-title fs-4 fw-semibold m-0 p-1">The Complete <?php echo $row["course_title"]; ?>
              Course</h5>
          </div>

          <!-- Card body START -->
          <div class="card-body">

            <!-- Course image and info START -->
            <div class="row g-4">
              <!-- Course image -->
              <div class="col-md-6">
                <div class="d-flex justify-content-center align-items-center">
                  <img src='<?php echo $row['course_img']; ?>' class="rounded" alt=""
                    style="height:300px; width:450px;">
                </div>
                <p class="my-3 fw-medium text-secondary" style="font-size:18px;">
                  <?php echo $row["course_description"]; ?></p>
              </div>

              <!-- Course info and avatar -->
              <div class="col-md-6">
                <div class="d-flex align-items-center justify-content-between my-2">
                  <!-- avatar -->
                  <div class="d-flex align-items-center justify-content-start">
                    <!-- Avatar image -->
                    <div class="avatar avatar-md" style="height:70px; width:70px;">
                      <img class="avatar-img rounded-circle" src='<?php echo $row['instructor_img']; ?>' alt="avatar"
                        style="height:70px; width:70px;">
                    </div>
                    <div class="ms-sm-3 mt-2 mt-sm-0">
                      <h6 class="mb-0 fw-bold"><a href="#" class="text-decoration-none text-dark fs-4 text-uppercase">By
                          <?php echo $row["instructor"]; ?></a></h6>
                      <p class="mb-0  fw-bolder fs-5"><?php echo $row["channel_name"]; ?></p>
                    </div>
                  </div>

                  <!-- Price -->
                  <h5 class="mb-3 fw-bolder text-danger"><?php echo $row["course_price"]; ?></h5>

                </div>
                <!-- Info -->
                <ul class="list-group list-group-flush my-5 bg-body-tertiary">
                  <li class="list-group-item my-1 bg-transparent">
                    <span class="text-secondary fw-medium me-2">release date:</span>
                    <span class="h6 mb-0 fw-semibold"><?php echo date("Y-m-d", strtotime($row["created_at"])); ?></span>
                  </li>

                  <li class="list-group-item my-1 bg-transparent">
                    <span class="text-secondary fw-medium me-2">Total Hour:</span>
                    <span class="h6 mb-0 fw-semibold"><?php echo $row["course_time"]; ?></span>
                  </li>

                  <li class="list-group-item my-1 bg-transparent">
                    <span class="text-secondary fw-medium me-2">Language:</span>
                    <span class="h6 mb-0 fw-semibold"><?php echo $row["course_language"]; ?></span>
                  </li>
                  <li class="list-group-item my-1 bg-transparent">
                    <span class="text-secondary fw-medium me-2">Level:</span>
                    <span class="h6 mb-0 fw-semibold"><?php echo $row["course_level"]; ?></span>
                  </li>

                  <li class="list-group-item my-1 bg-transparent">
                    <span class="text-secondary fw-medium me-2">Total Lecture:</span>
                    <span class="h6 mb-0 fw-semibold"><?php echo $row["total_lecture"]; ?></span>
                  </li>

                  <li class="list-group-item my-1 bg-transparent">
                    <span class="text-secondary fw-medium me-2">Review:</span>
                    <span class="h6 mb-0 fw-semibold">4.5<i class="bi bi-star-fill text-warning ms-1"></i></span>
                  </li>

                </ul>
              </div>
            </div>
            <!-- Information END -->
          </div>
          <!-- Card body END -->
        </div>
        <?php
                        }
                    } else {
                        echo "No courses available for this user.";
                    }
                } else {
                    echo "User ID not specified.";
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