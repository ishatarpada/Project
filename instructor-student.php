<?php
// session_start();
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>instructor student</title>

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

            <!-- course -->
            <div class="container-fluid my-2 mx-2 bg-light">
                <div class="title d-flex justify-content-between align-items-center">
                    <h1 class="fw-bold m-0 p-2">Student</h1>
                </div>
                <!-- search category -->
                <div class="container-fluid mt-4 mx-2 bg-light rounded">
                    <div class="row mx-5 g-3 align-items-center p-3 bg-body-tertiary justify-content-between">
                        <!-- Search bar -->
                        <div class="col-md-8 m-0">
                            <form class="rounded position-relative">
                                <input class="form-control bg-body py-2 fw-bold" type="search" placeholder="Search" aria-label="Search" />
                                <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                                    <i class="bi bi-search fs-6"></i>
                                </button>
                            </form>
                            <div id="searchResults" class="mt-3"></div>
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

                <div class="row g-5 container-fluid mx-auto mt-2">
                    <?php
                    // Include database connection
                    if (isset($_SESSION['username'])) {
                        include 'config.php';

                        // Get the session username
                        $instructor = $_SESSION['username'];

                        // SQL query to fetch distinct user IDs based on session instructor
                        $sql = "SELECT DISTINCT user_id FROM student_course WHERE instructor = ?";
                        $stmt = mysqli_prepare($conn, $sql);
                        mysqli_stmt_bind_param($stmt, "s", $instructor);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $userID = $row['user_id'];

                                // SQL query to fetch distinct user details based on user ID
                                $get_data = "SELECT * FROM user_registration WHERE user_id = ?";
                                $get_stmt = mysqli_prepare($conn, $get_data);
                                mysqli_stmt_bind_param($get_stmt, "i", $userID);
                                mysqli_stmt_execute($get_stmt);
                                $get_result = mysqli_stmt_get_result($get_stmt);

                                if ($get_row = mysqli_fetch_assoc($get_result)) {
                                    $profile_img = $get_row['profile_img'];
                                    $user_name = $get_row['user_name'];
                                    $city = $get_row['city'];
                                    $date = $get_row['created_at'];

                                    // SQL query to calculate total payments for the user
                                    $payment_sql = "SELECT SUM(amount) AS total_payments FROM payments WHERE user_id = ?";
                                    $payment_stmt = mysqli_prepare($conn, $payment_sql);
                                    mysqli_stmt_bind_param($payment_stmt, "i", $userID);
                                    mysqli_stmt_execute($payment_stmt);
                                    $payment_result = mysqli_stmt_get_result($payment_stmt);

                                    $total_payments = 0;
                                    if ($payment_row = mysqli_fetch_assoc($payment_result)) {
                                        $total_payments = $payment_row['total_payments'];
                                    }

                                    // SQL query to calculate total courses for the user
                                    $courses_sql = "SELECT SUM(total_course) AS course_total FROM payments WHERE user_id = ?";
                                    $courses_stmt = mysqli_prepare($conn, $courses_sql);
                                    mysqli_stmt_bind_param($courses_stmt, "i", $userID);
                                    mysqli_stmt_execute($courses_stmt);
                                    $courses_result = mysqli_stmt_get_result($courses_stmt);

                                    $total_courses = 0;
                                    if ($courses_row = mysqli_fetch_assoc($courses_result)) {
                                        $total_courses = $courses_row['course_total'];
                                    }
                    ?>
                                    <!-- Card item START -->
                                    <div class="col-md-4">
                                        <div class="card bg-transparent border my-2 shadow p-2">
                                            <!-- Card header -->
                                            <div class="card-header bg-transparent border-bottom d-flex justify-content-between align-items-center">
                                                <div class="d-sm-flex align-items-center">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-md flex-shrink-0 rounded-circle shadow" style="height: 60px; width: 60px;">
                                                        <img class="avatar-img rounded-circle" src="<?php echo $profile_img ?>" alt="Profile Image" style="height: 60px; width: 60px;">
                                                    </div>
                                                    <!-- Info -->
                                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                                        <h5 class="mb-0 "><a href="#" class="fs-3 text-dark fw-bolder"><?php echo $user_name ?></a></h5>
                                                        <span class="text-secondary fs-6"><i class="bi bi-geo-alt-fill me-1 mt-1"></i><?php echo $city ?></span>
                                                    </div>
                                                </div>
                                                <div class="view-details">
                                                    <button class="btn btn-md" style="background-color: #0c5c51;"><a href="view-details.php?id=<?php echo $userID ?>" class="fw-bold text-light">View
                                                            Details</a></button>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <!-- Payments -->
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-md bg-success bg-opacity-10 text-success-emphasis rounded-circle flex-shrink-0 d-flex justify-content-center align-items-center" style="height: 50px; width: 50px;">
                                                            <i class="bi bi-currency-dollar fs-4 fw-bold"></i>
                                                        </div>
                                                        <h6 class="mb-0 ms-2 fw-bolder fs-5">Payments</h6>
                                                    </div>
                                                    <span class="mb-0 fw-bold fs-4">$<?php echo number_format($total_payments, 2); ?></span>
                                                </div>

                                                <!-- Total courses -->
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-md bg-danger bg-opacity-10 text-danger-emphasis rounded-circle flex-shrink-0  d-flex justify-content-center align-items-center" style="height: 50px; width: 50px;"><i class="bi bi-journal-text  fs-4 fw-bold"></i></div>
                                                        <h6 class="mb-0 ms-2 fw-bolder fs-5">Total Course</h6>
                                                    </div>
                                                    <span class="mb-0 fw-bold fs-4"><?php echo $total_courses; ?></span>
                                                </div>

                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-transparent border-top">
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                    <!-- Rating star -->
                                                    <h6 class="mb-2 mb-sm-0 fs-5">
                                                        <i class="bi bi-calendar fa-fw text-orange me-2"></i><span class="fw-bold fs-4 me-2">Join at:</span>
                                                        <?php echo date('Y-m-d', strtotime($date)); ?>
                                                    </h6>
                                                    <!-- Buttons -->
                                                    <div class="text-end text-primary-hover">
                                                        <a href="#" class="btn btn-link text-body p-0 mb-0 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Message" aria-label="Message">
                                                            <i class="bi bi-envelope-fill fs-5"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Block" aria-label="Block">
                                                            <i class="bi bi-ban fs-5"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                    <?php
                                }
                            }
                        } else {

                            echo "<p>No users found.</p>";
                        }
                    }
                    ?>
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