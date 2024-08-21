<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Course Details</title>

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

      <?php

      // $course_ID = $_GET['id'];
      // Include database connection
      include './config/config.php';

      // SQL query to fetch course details
      $sql = "SELECT * FROM course";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <!-- course details -->
      <div class="card bg-light shadow border rounded-3 my-3 container">

        <!-- Catd header -->
        <div class="card-header bg-light border-bottom d-flex justify-content-between align-items-center">
          <h5 class="card-header-title fs-4 fw-semibold m-0 p-1">The Complete <?php echo $row["course_title"]; ?> Course
          </h5>
          <div class="d-flex justify-content-end flex-wrap align-items-center">
            <button class="btn btn-warning  btn-lg"><a href="edit-course.php?id=<?php echo $row['course_ID'] ?>"
                class="text-decoration-none text-light">Edit Course</a></button>
            <button class="btn btn-success  btn-lg m-2"><a
                href="upload_course_video.php?id=<?php echo $row['course_ID'] ?>"
                class="text-decoration-none text-light">Upload Video</a></button>
          </div>
        </div>

        <!-- Card body START -->
        <div class="card-body">

          <!-- Course image and info START -->

          <div class="row g-4">
            <!-- Course image -->
            <div class="col-md-6">

              <div class="d-flex justify-content-center align-items-center">
                <img src='<?php echo $row['course_img']; ?>' class="rounded" alt="" style="height:300px; width:450px;">
              </div>

              <p class="my-3 fw-medium text-secondary" style="font-size:18px;"><?php echo $row["course_description"]; ?>
              </p>
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
                  <span class="h6 mb-0 fw-semibold"><?php echo $row["channel_name"]; ?></span>
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
                  <span class="text-secondary fw-medium me-2">Skills:</span>
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
      <?php }
      } ?>

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