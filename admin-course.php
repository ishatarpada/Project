<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Course</title>

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
                    <h1 class="fw-bold mx-3 mb-3">Course</h1>
                    <button class="btn btn-primary btn-lg me-5"><a href="create-course.html" class="text-decoration-none text-light">Create Course</a></button>
                </div>
                <div class="row g-4 container-fluid">
                    <!-- Counter item -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="d-flex justify-content-center align-items-center p-5 bg-primary-subtle bg-opacity-10 rounded-3 card-1">
                            <div class="ms-4">
                                <div class="d-flex">
                                    <span class="mb-0 h6 fw-bold fs-6">Total Courses</span>
                                </div>
                                <h5 class="purecounter mb-0 fw-bold display-4 text-center text-primary-emphasis">
                                    <?php
                                    $sql1 = "SELECT course_title FROM course";
                                    $result1 = mysqli_query($conn, $sql1);

                                    // Count the number of rows (courses) returned by the query
                                    $count = mysqli_num_rows($result1);

                                    echo $count;
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- Counter item -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="d-flex justify-content-center align-items-center p-5 bg-success-subtle bg-opacity-10 rounded-3 card-1">
                            <div class="ms-4">
                                <div class="d-flex">
                                    <span class="mb-0 h6 fw-bold fs-6">Activated Courses</span>
                                </div>
                                <h5 class="purecounter mb-0 fw-bold display-4 text-center text-success-emphasis">
                                    <?php
                                    $sql1 = "SELECT course_title FROM course WHERE status = 'active'";
                                    $result1 = mysqli_query($conn, $sql1);

                                    // Count the number of rows (courses) returned by the query
                                    $count = mysqli_num_rows($result1);

                                    echo $count;
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- Counter item -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="d-flex justify-content-center align-items-center p-5 bg-warning-subtle bg-opacity-10 rounded-3 card-1">
                            <div class="ms-4">
                                <div class="d-flex">
                                    <span class="mb-0 h6 fw-bold fs-6">Pending Courses</span>
                                </div>
                                <h5 class="purecounter mb-0 fw-bold display-4 text-center text-warning-emphasis">
                                    <?php
                                    $sql1 = "SELECT course_title FROM course WHERE status = 'pending'";
                                    $result1 = mysqli_query($conn, $sql1);

                                    // Count the number of rows (courses) returned by the query
                                    $count = mysqli_num_rows($result1);

                                    echo $count;
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- search category -->
            <div class="container-fluid mt-4 mx-2 bg-light rounded">
                <div class="row mx-5 g-3 align-items-center p-3 bg-body-tertiary justify-content-between">
                    <!-- Search bar -->
                    <div class="col-md-8 m-0">
                        <form class="rounded position-relative" method="GET" action="">
                            <input class="form-control bg-body py-2 fw-bold" type="search" placeholder="Search" aria-label="Search" name="search" />
                            <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                                <i class="fas fa-search fs-6"></i>
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
                                <div class="table-responsive border-0 mx-0 px-0 rounded-3">
                                    <!-- Table START -->
                                    <table class="table table-light table-hover align-middle p-4 mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 bg-dark py-3 text-light rounded-start fs-6">Course Name</th>
                                                <th scope="col" class="border-0 bg-dark py-3 text-light fs-6">Instructor</th>
                                                <th scope="col" class="border-0 bg-dark py-3 text-light fs-6">Added Date</th>
                                                <th scope="col" class="border-0 bg-dark py-3 text-light fs-6">Type</th>
                                                <th scope="col" class="border-0 bg-dark py-3 text-light fs-6">price</th>
                                                <th scope="col" class="border-0 bg-dark py-3 text-light fs-6 text-center">View</th>
                                                <th scope="col" class="border-0 bg-dark py-3 text-light text-center rounded-end fs-6">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Include database connection
                                            include 'config.php';

                                            // Check if the search query is set
                                            $search_query = "";
                                            if (isset($_GET['search'])) {
                                                $search_query = $_GET['search'];
                                            }

                                            // SQL query to fetch course details
                                            $sql = "SELECT * FROM course";
                                            if (!empty($search_query)) {
                                                $sql .= " WHERE course_title LIKE '%$search_query%'";
                                            }
                                            $sql .= " ORDER BY course_ID DESC";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                // Output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center py-3">
                                                                <!-- Image -->
                                                                <div class="w-60px">
                                                                    <img src='<?php echo $row['course_img']; ?>' class="rounded" style="height: 50px; width: 50px;" alt="Course Image">
                                                                </div>
                                                                <!-- Title -->
                                                                <h6 class="mb-0 ms-3 table-responsive-title fw-bold">
                                                                    <a href="#" class="text-dark text-decoration-none"><?php echo $row["course_title"]; ?></a>
                                                                </h6>
                                                            </div>

                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center py-3">
                                                                <!-- Image -->
                                                                <div class="w-60px">
                                                                    <img src='<?php echo $row['instructor_img']; ?>' class="rounded-circle" style="height: 50px; width: 50px" alt />
                                                                </div>
                                                                <!-- Title -->
                                                                <h6 class="mb-0 ms-3 table-responsive-title fw-bold">
                                                                    <a href="#" class="text-dark text-decoration-none">
                                                                        <?php echo $row["instructor"]; ?>
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                        </td>

                                                        <td class="fw-bolder"><?php echo date('Y-m-d', strtotime($row["created_at"])); ?></td>
                                                        <td class="fw-bolder"><?php echo $row["course_level"]; ?></td>
                                                        <td class="fw-bolder"><?php echo $row["course_price"]; ?></td>
                                                        <td>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <a href="course-detail.php?id=<?php echo $row['course_ID'] ?>" class="text-decoration-none btn fw-semibold mx-2 btn-lg" style="background-color: #15739867; color:#103c4e;">Details</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($row['course_status'] == 'pending') {
                                                                // Show Approve and Reject buttons for pending courses
                                                            ?>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <a href="approve.php?id=<?php echo $row['course_ID'] ?>" class="text-decoration-none btn bg-success bg-opacity-10 text-success-emphasis fw-semibold mx-2 btn-lg">Approve</a>
                                                                    <a href="reject.php?id=<?php echo $row['course_ID'] ?>" class="text-decoration-none btn bg-danger bg-opacity-10 text-danger-emphasis fw-semibold mx-2 btn-lg">Reject</a>
                                                                </div>
                                                            <?php
                                                            } else {
                                                                // Show Approved button for approved courses
                                                            ?>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <a href="#" class="text-decoration-none btn fw-semibold mx-2 btn-lg" style="background-color: #6e42c142; color:#6f42c1;">Approved</a>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>

                                                    </tr>
                                            <?php
                                                }
                                            } else {
                                                echo "<tr><td colspan='4'>No courses found</td></tr>";
                                            }
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