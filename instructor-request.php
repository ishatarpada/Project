<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instructor Requests</title>

    <!-- CSS Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- Main CSS style link -->
    <link rel="stylesheet" href="Style/side-navbar.css" />
    <link rel="stylesheet" href="Style/admin-course.css" />
</head>

<body>
    <div class="wrapper">
        <?php include 'sidebar.php'; ?>

        <div class="main bg-body-tertiary">

            <!-- Navbar -->
            <?php include 'navbar.php'; ?>

            <!-- Course -->
            <div class="container-fluid my-2 mx-2 bg-light">
                <div class="title d-flex justify-content-between align-items-center">
                    <h1 class="fw-bold mx-3 mb-3">Instructor Request</h1>
                </div>
            </div>

            <!-- Course Table -->
            <div class="container-fluid px-5 my-3">
                <?php

                include "config.php";

                // SQL query to fetch course details
                $sql = "SELECT * FROM Instructors ORDER BY InstructorID DESC";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="container mt-3">
                            <div class="card bg-transparent border rounded-3 h-100">

                                <!-- Card header -->
                                <div class="card-header bg-light border-bottom d-flex justify-content-between align-items-center">
                                    <h5 class="card-header-title mb-0 fw-bolder">Personal Information</h5>
                                    <div>
                                        <?php if ($row['approve_request'] == '0') { ?>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="approve_request.php?id=<?php echo $row['InstructorID'] ?>" class="text-decoration-none btn bg-success bg-opacity-10 text-success-emphasis fw-semibold mx-2 btn-lg">Approve</a>
                                                <a href="reject_request.php?id=<?php echo $row['InstructorID'] ?>" class="text-decoration-none btn bg-danger bg-opacity-10 text-danger-emphasis fw-semibold mx-2 btn-lg">Reject</a>
                                            </div>
                                        <?php } else { ?>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="#" class="text-decoration-none btn fw-semibold mx-2 btn-lg" style="background-color: #6e42c142; color:#6f42c1;">Approved</a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Profile picture -->


                                    <!-- Information START -->
                                    <div class="row">

                                        <!-- Information item -->
                                        <div class="col-md-12">
                                            <div class="avatar avatar-xl my-2 d-flex justify-content-center align-items-center" style="height:200px; width:100%;">
                                                <img class="avatar-img rounded-circle border border-white border-3 shadow" src="<?php echo $row['ProfilePicture']; ?>" alt="" style="height:200px; width:200px;">
                                            </div>

                                            <ul class="list-group list-group-flush my-2 bg-body-tertiary">

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
                                            </ul>

                                            <div class="info">
                                                <p class="mb-0 text-dark"><?php echo $row['Instructor_details']; ?></p>
                                            </div>
                                            
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
        </div>
    </div>

    <!-- Modal Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>