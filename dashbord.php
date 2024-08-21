<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>

  <!-- css bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- main css style link -->
  <link rel="stylesheet" href="Style/side-navbar.css" />

  <!-- css for large screen -->
  <link rel="stylesheet" href="Style/media-query.css" />

  <!-- font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <?php include 'sidebar.php' ?>

    <div class="main">

      <!-- navbar -->
      <?php include 'navbar.php' ?>

      <!-- chart -->
      <div class="row g-4 container-fluid m-2">
        <!-- Top instructors START -->
        <div class="col-lg-6 col-xxl-4">
          <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
              <h5 class="card-header-title fw-bold fs-4">Top Instructors</h5>
              <a href="#" class="btn btn-link p-0 mb-0 text-decoration-none fw-bold btn-primary fs-5">View all</a>
            </div>

            <?php
                        // Include database connection
                        include './config/config.php';

                        // SQL query to fetch user details
                        $sql = "SELECT * FROM Instructors";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // Output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                $profile_img = $row['ProfilePicture'];
                                $user_name = $row['Instructor_Username'];
                                $user_id = $row['InstructorID'];
                                $city = $row['city'];
                        ?>
            <!-- Card body START -->
            <div class="card-body px-4">
              <!-- Instructor item START -->
              <div class="d-sm-flex justify-content-between align-items-center">
                <!-- Avatar and info -->
                <div class="d-sm-flex align-items-center">
                  <!-- Avatar -->
                  <div class="avatar avatar-md flex-shrink-0 me-3" style="height: 50px; width: 50px">
                    <img class="avatar-img rounded-circle" src="<?php echo $profile_img ?>"
                      style="height: 50px; width: 50px" alt="avatar" />
                  </div>
                  <!-- Info -->
                  <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                    <h6 class="mb-1 fw-bold">
                      <?php echo $user_name ?><i class="bi bi-patch-check-fill text-info small ms-1"></i>
                    </h6>
                    <ul class="list-inline mb-0 small">
                      <li class="list-inline-item text-secondary fw-bolder me-2 mb-1 mb-sm-0">
                        <i class="bi bi-journal-text text-danger-emphasis me-1"></i>25 Courses
                      </li>
                      <li class="list-inline-item text-secondary fw-bolder me-2 mb-1 mb-sm-0">
                        <i class="bi bi-star-fill text-warning me-1"></i>4.5/5.0
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Button -->
                <a href="#" class="btn btn-sm btn-dark mb-0 fw-bolder">View</a>
              </div>
              <!-- Instructor item END -->

              <hr />
              <!-- Divider -->
              <!-- Card body END -->
            </div>
            <?php }
                        }
                        ?>
          </div>
        </div>
        <!-- Top instructors END -->

        <!-- Notice Board START -->
        <div class="col-lg-6 col-xxl-4">
          <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-bottom p-4">
              <h5 class="card-header-title fw-bold fs-4">Notice board</h5>
            </div>

            <!-- Card body START -->
            <div class="card-body p-4">
              <div class="custom-scrollbar">
                <div class="os-padding">
                  <!-- Notice Board item START -->
                  <div class="d-flex justify-content-between position-relative">
                    <div class="d-sm-flex">
                      <div
                        class="icon-lg bg-success bg-opacity-10 text-success text-center rounded-2 flex-shrink-0  d-flex justify-content-center align-items-center me-2"
                        style="height: 50px; width: 50px">
                        <i class="bi bi-person-circle fs-4"></i>
                      </div>
                      <!-- Info -->
                      <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                        <h6 class="mb-0">
                          <a href="#" class="stretched-link fw-bold text-dark">Join New Instructor</a>
                        </h6>
                        <p class="mb-0 text-secondary fw-bolder">
                          Amongst moments do in arrived Fat weddings believed
                          prospect
                        </p>
                        <span class="small text-secondary fw-medium">5 min ago</span>
                      </div>
                    </div>
                  </div>
                  <!-- Notice Board item END -->

                  <hr />
                  <!-- Divider -->

                  <!-- Notice Board item START -->
                  <div class="d-flex justify-content-between position-relative">
                    <div class="d-sm-flex">
                      <div
                        class="icon-lg bg-warning bg-opacity-10 text-warning text-center rounded-2 flex-shrink-0  d-flex justify-content-center align-items-center me-2"
                        style="height: 50px; width: 50px">
                        <i class="bi bi-journal fs-4"></i>
                      </div>
                      <!-- Info -->
                      <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                        <h6 class="mb-0">
                          <a href="#" class="stretched-link text-dark fw-bold">Update New Course</a>
                        </h6>
                        <p class="mb-0 text-secondary fw-bolder">
                          Arrived Fat weddings believed prospect
                        </p>
                        <span class="small text-secondary fw-medium">4 hour ago</span>
                      </div>
                    </div>
                  </div>
                  <!-- Notice Board item END -->

                  <hr />
                  <!-- Divider -->

                  <!-- Notice Board item START -->
                  <div class="d-flex justify-content-between position-relative">
                    <div class="d-sm-flex">
                      <div
                        class="icon-lg bg-info bg-opacity-10 text-info text-center rounded-2 flex-shrink-0  d-flex justify-content-center align-items-center me-2"
                        style="height: 50px; width: 50px">
                        <i class="bi bi-journal-text fs-4"></i>
                      </div>
                      <!-- Info -->
                      <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                        <h6 class="mb-0">
                          <a href="#" class="stretched-link text-dark fw-bold">Update Syllabus</a>
                        </h6>
                        <p class="mb-0 text-secondary fw-bolder">
                          Arrived Fat weddings believed prospect
                        </p>
                        <span class="small text-secondary fw-medium">2 days ago</span>
                      </div>
                    </div>
                  </div>
                  <!-- Notice Board item END -->

                  <hr />
                  <!-- Divider -->

                  <!-- Notice Board item START -->
                  <div class="d-flex justify-content-between position-relative">
                    <div class="d-sm-flex">
                      <div
                        class="icon-lg bg-danger bg-opacity-10 text-danger text-center rounded-2 flex-shrink-0  d-flex justify-content-center align-items-center me-2"
                        style="height: 50px; width: 50px">
                        <i class="bi bi-globe fs-4"></i>
                      </div>
                      <!-- Info -->
                      <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                        <h6 class="mb-0">
                          <a href="#" class="stretched-link text-dark fw-bold">Update New Feature</a>
                        </h6>
                        <p class="mb-0 text-secondary fw-bolder">
                          Arrived Fat weddings believed prospect
                        </p>
                        <span class="small text-secondary fw-medium">3 days ago</span>
                      </div>
                    </div>
                  </div>
                  <!-- Notice Board item END -->
                </div>
              </div>
            </div>
            <!-- Card body END -->

            <!-- Card footer START -->
            <div class="card-footer border-top">
              <div class="alert alert-success d-flex align-items-center mb-0 py-2">
                <div>
                  <small class="mb-0">45 more notices listed</small>
                </div>
                <div class="ms-auto">
                  <a class="btn btn-sm btn-success-soft mb-0" href="#!">
                    View all
                  </a>
                </div>
              </div>
            </div>
            <!-- Card footer START -->
          </div>
        </div>
        <!-- Notice Board END -->

        <!-- Ticket START -->
        <div class="col-xxl-4 col-lg-6">
          <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
              <h5 class="card-header-title fs-4 fw-bold">Support Requests</h5>
              <a href="#" class="btn btn-link text-primary text-decoration-none fw-bold fs-5 p-0 mb-0">View all</a>
            </div>

            <!-- Card body START -->
            <div class="card-body p-4">
              <!-- Ticket item START -->
              <div class="d-flex justify-content-between position-relative">
                <div class="d-sm-flex">
                  <!-- Avatar -->
                  <div class="avatar avatar-md flex-shrink-0 me-2" style="height: 50px; width: 50px">
                    <img class="avatar-img rounded-circle" style="height: 50px; width: 50px" src="Assests/i-1.jpg"
                      alt="avatar" />
                  </div>
                  <!-- Info -->
                  <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                    <h6 class="mb-0">
                      <a href="#" class="stretched-link fw-bold text-dark">Lori Stevens</a>
                    </h6>
                    <p class="mb-0 text-secondary fw-bolder">
                      New ticket #759 from Lori Stevens for General Enquiry
                    </p>
                    <span class="small text-secondary fw-medium">8 hour ago</span>
                  </div>
                </div>
              </div>
              <!-- Ticket item END -->

              <hr />
              <!-- Divider -->

              <!-- Ticket item START -->
              <div class="d-flex justify-content-between position-relative">
                <div class="d-sm-flex">
                  <!-- Avatar -->
                  <div class="avatar avatar-md flex-shrink-0 me-3">
                    <div class="avatar-img rounded-circle bg-info bg-opacity-10 me-2" style="height: 50px; width: 50px">
                      <span
                        class="text-info position-absolute text-center top-25 start-0 translate-middle fw-bold ms-4 mt-4">DB</span>
                    </div>
                  </div>
                  <!-- Info -->
                  <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                    <h6 class="mb-0">
                      <a href="#" class="stretched-link text-dark fw-bold">Dennis Barrett</a>
                    </h6>
                    <p class="mb-0 text-secondary fw-bolder">
                      Comment from Billy Vasquez on ticket #659
                    </p>
                    <span class="small text-secondary fw-medium">8 hour ago</span>
                  </div>
                </div>
              </div>
              <!-- Ticket item END -->

              <hr />
              <!-- Divider -->

              <!-- Ticket item START -->
              <div class="d-flex justify-content-between position-relative">
                <div class="d-sm-flex">
                  <!-- Avatar -->
                  <div class="avatar avatar-md flex-shrink-0 me-3">
                    <div class="avatar-img rounded-circle bg-danger bg-opacity-10 me-2"
                      style="height: 50px; width: 50px">
                      <span
                        class="text-danger position-absolute text-center top-25 start-0 translate-middle fw-bold ms-4 mt-4">WB</span>
                    </div>
                  </div>
                  <!-- Info -->
                  <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                    <h6 class="mb-0">
                      <a href="#" class="stretched-link text-dark fw-bold">Dennis Barrett</a>
                    </h6>
                    <p class="mb-0 text-secondary fw-normal">
                      <b>Webestica</b> assign you a new ticket for
                      <b>Eduport theme</b>
                    </p>
                    <span class="small text-secondary">5 hour ago</span>
                  </div>
                </div>
              </div>
              <!-- Ticket item END -->

              <hr />
              <!-- Divider -->

              <!-- Ticket item START -->
              <div class="d-flex justify-content-between position-relative">
                <div class="d-sm-flex">
                  <!-- Avatar -->
                  <div class="avatar avatar-md flex-shrink-0 me-2" style="height: 50px; width: 50px">
                    <img class="avatar-img rounded-circle" style="height: 50px; width: 50px" src="Assests/i-4.jpg"
                      alt="avatar" />
                  </div>
                  <!-- Info -->
                  <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                    <h6 class="mb-0">
                      <a href="#" class="stretched-link fw-bold text-dark">Dennis Barrett</a>
                    </h6>
                    <p class="mb-0 text-secondary fw-bold">
                      Thanks for contact us with your issues.
                    </p>
                    <span class="small text-secondary">9 hour ago</span>
                  </div>
                </div>
              </div>
              <!-- Ticket item END -->

              <hr />
              <!-- divider -->

              <!-- Ticket item START -->
              <div class="d-flex justify-content-between position-relative">
                <div class="d-sm-flex">
                  <!-- Avatar -->
                  <div class="avatar avatar-md flex-shrink-0 me-3">
                    <div class="avatar-img rounded-circle bg-danger bg-opacity-10 me-2"
                      style="height: 50px; width: 50px">
                      <span
                        class="text-danger position-absolute text-center top-25 start-0 translate-middle fw-bold ms-4 mt-4">WB</span>
                    </div>
                  </div>
                  <!-- Info -->
                  <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                    <h6 class="mb-0">
                      <a href="#" class="stretched-link text-dark fw-bold">Dennis Barrett</a>
                    </h6>
                    <p class="mb-0 text-secondary fw-normal">
                      <b>Webestica</b> assign you a new ticket for
                      <b>Eduport theme</b>
                    </p>
                    <span class="small text-secondary">5 hour ago</span>
                  </div>
                </div>
              </div>
              <!-- Ticket item END -->
            </div>
            <!-- Card body END -->
          </div>
        </div>
        <!-- Ticket END -->
      </div>
    </div>
  </div>

  <script src="Script/sidebar.js"></script>
  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
  <!-- Include Bootstrap bundle -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <!-- Your other scripts -->

  <script>
  // Initialize Bootstrap dropdowns
  var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
  var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl);
  });
  </script>
</body>

</html>