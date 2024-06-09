<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Courses Category</title>

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
  <div class="wrapper">
    <?php
    include 'sidebar.php'
    ?>

    <div class="main bg-body-tertiary">

      <!-- navbar -->
      <?php include 'navbar.php' ?>

      <!-- course -->
      <div class="container-fluid my-2 mx-2 bg-light">
        <div class="title d-flex justify-content-between align-items-center">
          <h1 class="fw-bold m-0 p-2">
            Course
            <span class="bg-warning-subtle bg-opacity-10 text-warning-emphasis fw-semibold fs-5 px-3 py-1 rounded">5</span>
          </h1>
          <button class="btn btn-primary btn-lg me-5">
            <a href="create-course.html" class="text-decoration-none text-light">Create Course</a>
          </button>
        </div>
      </div>

      <!-- search category -->
      <div class="container-fluid mt-4 mx-2 bg-light rounded">
        <div class="row mx-5 g-3 align-items-center p-3 bg-body-tertiary justify-content-between">
          <!-- Search bar -->
          <div class="col-md-8 m-0">
            <form class="rounded position-relative">
              <input class="form-control bg-body py-2 fw-bold" type="search" name="search_query" placeholder="Search" aria-label="Search" />
              <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                <i class="bi bi-search fs-6"></i>
              </button>
            </form>
          </div>

          <!-- Select option -->
          <div class="col-md-3 m-0">
            <!-- Short by filter -->
            <form>
              <select name="" id="" class="form-select p-2 fw-bolder">
                <option value="sort by">Sort By</option>
                <option value="">Accepted</option>
                <option value="">Newest</option>
                <option value="">Oldest</option>
                <option value="">Rejected</option>
              </select>
            </form>
          </div>
        </div>
      </div>

      <!-- course table -->
      <div class="container-fluid">
        <div class="row bg-body-tertiary my-2 rounded">
          <div class="col-12 mx-0 px-0">
            <div class="card bg-transparent rounded-3 mt-1 border-0 mx-0 px-0 container-fluid">
              <!-- Card body START -->
              <div class="card-body mx-1">
                <div class="table-responsive border-0 rounded-3">
                  <!-- Table START -->
                  <table class="table table-light table-hover align-middle p-4 mb-0">
                    <!-- Table head -->
                    <thead>
                      <tr>
                        <th scope="col" class="border-0 bg-dark py-3 text-light rounded-start fw-bolder fs-4">
                          Course Name
                        </th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light fw-bolder fs-4">
                          Instructor
                        </th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light fw-bolder fs-4">
                          Rating
                        </th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light fw-bolder fs-4">
                          Enrolled
                        </th>
                        <th scope="col" class="border-0 bg-dark py-3 text-light fw-bolder fs-4 rounded-end">
                          Action
                        </th>
                      </tr>
                    </thead>

                    <?php
                    include 'config.php';

                    // Get the search query from the form submission
                    $search_query = isset($_GET['search_query']) ? $_GET['search_query'] : '';

                    // SQL query to fetch course details with search filter
                    $sql = "SELECT * FROM course WHERE course_title LIKE '%$search_query%'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // Output data of each row
                      while ($row = mysqli_fetch_assoc($result)) { ?>

                        <tbody>
                          <tr>
                            <!-- Course item -->
                            <td>
                              <div class="d-flex align-items-center py-3">
                                <!-- Image -->
                                <div class="w-60px">
                                  <img src=" <?php echo $row["course_img"]; ?>" class="rounded" style="height: 50px; width: 50px" alt />
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2 table-responsive-title fw-bold">
                                  <a href="#" class="text-dark text-decoration-none"> <?php echo $row["course_title"]; ?></a>
                                </h6>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-60px">
                                  <img src=" <?php echo $row["instructor_img"]; ?>" class="rounded-circle" style="height: 50px; width: 50px" alt />
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2 table-responsive-title fw-bolder">
                                  <a href="#" class="text-dark-emphasis text-decoration-none"> <?php echo $row["instructor"]; ?></a>
                                </h6>
                              </div>
                            </td>
                            <!-- rating item -->
                            <td>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-half text-warning"></i>
                            </td>

                            <!-- enrolled item -->
                            <td>
                              <p class="text-secondary py-2 fw-semibold m-0">
                                15567
                              </p>
                            </td>

                            <!-- Action item -->
                            <td>
                              <button class="btn btn-sm bg-success bg-opacity-10 text-success fw-bolder mb-0 py-2 px-3">
                                <a href="edit-course.php?id=<?php echo $row['course_ID'] ?>" class="text-success">
                                  Edit
                                </a>
                              </button>
                              <button class="btn btn-sm bg-danger bg-opacity-10 text-danger fw-bolder mb-0 py-2 px-3">
                                <a href="course-detail.php?id=<?php echo $row['course_ID'] ?>" class="text-danger fw-bold">
                                  View
                                </a>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                    <?php }
                    } else {
                      echo '<tbody class="border-0">
                        <tr class="border-0 bg-dark py-3 text-light fw-bolder fs-4">
                          <td colspan="5" class=" border-0 text-center py-3 alert alert-dark" role="alert">No results found.</td>
                        </tr>
                      </tbody>';
                    }
                    ?>
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