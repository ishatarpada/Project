<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Instructor Details</title>

    <!-- css bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

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
            <?php include 'navbar.php' ?>
            
            <div>
                <h1 class="h3 mt-5 mb-2 mb-sm-0 text-center fw-bold fs-1">Instructor Detail</h1>
                <?php
                // Include database connection
                include 'config.php';

                // SQL query to fetch course details
                $sql = "SELECT * FROM Instructors";
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
                                            <div class="avatar avatar-xl my-2 d-flex justify-content-center align-items-center" style="height:200px; width:100%;">
                                                <img class="avatar-img rounded-circle border border-white border-3 shadow" src="<?php echo $row['ProfilePicture']; ?>" alt="" style="height:200px; width:200px;">
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