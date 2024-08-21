<?php
include './config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instructor dashboard</title>

    <!-- css bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/instructor-dashboard.css">

    <!-- css for large screen -->
    <link rel="stylesheet" href="Style/media-query.css">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>


    <div class="wrapper">

        <?php
        include 'instructor-sidebar.php';
        ?>


        <div class="main">

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


            <section class="my-2 p-0 container">

                <div class="container">
                    <div class="row">
                        <!-- Profile banner START -->
                        <div class="col-12">
                            <div class="card bg-transparent card-body p-0 border-0">
                                <div class="row d-flex justify-content-between">
                                    <!-- Avatar -->
                                    <div class="col-auto mt-4 mt-md-0 me-5">
                                        <div class="avatar avatar-xxl mt-n3 me-3">

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
                                                        echo '<img class="avatar-img rounded-circle" src="' . $avatar . '" alt="avatar" style="height: 100px; width: 100px;">';
                                                    } else {
                                                        echo '<img class="avatar-img rounded-circle" src="Assests/admin.jpg" alt="avatar" style="height: 100px; width: 100px;">';
                                                    }
                                                } else {
                                                    echo '<img class="avatar-img rounded-circle" src="Assests/admin.jpg" alt="avatar" style="height: 100px; width: 100px;">';
                                                }
                                            } else {
                                                echo '<img class="avatar-img rounded-circle" src="Assests/admin.jpg" alt="avatar" style="height: 100px; width: 100px;">';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!-- Profile info -->
                                    <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                        <div>
                                            <h1 class="my-1 fs-4 fw-bolder">
                                                <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?>
                                                <i class="bi bi-patch-check-fill text-info small ms-2"></i>
                                            </h1>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item h6 fw-medium me-3 mb-1 mb-sm-0">
                                                    <i class="bi bi-star-fill text-warning me-2"></i>4.5/5.0
                                                </li>
                                                <li class="list-inline-item h6 fw-medium me-3 mb-1 mb-sm-0">
                                                    <i class="bi bi-mortarboard-fill text-warning me-2"></i>12k
                                                    Enrolled Students
                                                </li>
                                                <li class="list-inline-item h6 fw-medium me-3 mb-1 mb-sm-0">
                                                    <i class="bi bi-journal-album text-primary me-2"></i>25
                                                    Courses
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Button -->
                                        <div class="d-flex align-items-center mt-2 mt-md-0">
                                            <a href="instructor-create-course.php" class="btn btn-lg btn-dark mb-0">Create
                                                a
                                                course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Profile banner END -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- search category -->
            <div class="container-fluid mt-4 mx-2 bg-light rounded">
                <div class="row mx-5 g-3 align-items-center p-3 bg-body-tertiary justify-content-between">
                    <!-- Search bar -->
                    <div class="col-md-8 m-0">
                        <form class="rounded position-relative">
                            <input class="form-control bg-body py-2 fw-bold" type="search" placeholder="Search" aria-label="Search" />
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit">
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
            <div class="container-fluid px-5">
                <div class="row bg-body-tertiary mx-3 my-2 rounded">
                    <p class="fw-bold px-5 pt-2 fs-2">Courses</p>
                    <div class="col-12">
                        <div class="card bg-transparent rounded-3 mt-1 border-0">
                            <!-- Card body START -->
                            <div class="card-body">
                                <div class="table-responsive border-0 rounded-3">
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
                                                <th scope="col" class="border-0 bg-dark py-3 text-light text-center rounded-end fs-6">Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Check if the session is set
                                            if (isset($_SESSION['username'])) {
                                                // Include database connection
                                                include 'config.php';
                                                $username = $_SESSION['username'];

                                                // SQL query to fetch course details
                                                $sql = "SELECT * FROM instructor_course WHERE instructor_Username = '$username'";
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
                                                                        <img src='<?php echo $row['course_img']; ?>' class="rounded"
                                                                            style="height: 50px; width: 50px;" alt="Course Image">
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
                                                                        <img src='<?php echo $row['instructor_img']; ?>' class="rounded-circle"
                                                                            style="height: 50px; width: 50px" alt />
                                                                    </div>
                                                                    <!-- Title -->
                                                                    <h6 class="mb-0 ms-3 table-responsive-title fw-bold">
                                                                        <a href="#" class="text-dark text-decoration-none">
                                                                            <?php echo $row["instructor_Username"]; ?>
                                                                        </a>
                                                                    </h6>
                                                                </div>
                                                            </td>

                                                            <td class="fw-bolder"><?php echo date('Y-m-d', strtotime($row["created_at"])); ?></td>
                                                            <td class="fw-bolder"><?php echo $row["course_level"]; ?></td>
                                                            <td class="fw-bolder"><?php echo $row["course_price"]; ?></td>
                                                            <td>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <a href="course-detail.php?id=<?php echo $row['course_ID'] ?>"
                                                                        class="text-decoration-none btn fw-semibold mx-2 btn-lg"
                                                                        style="background-color: #15739867; color:#103c4e;">Details</a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if ($row['course_status'] == 'pending') {
                                                                    // Show Approve and Reject buttons for pending courses
                                                                ?>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                                        <a href="#"
                                                                            class="text-decoration-none btn bg-success bg-opacity-10 text-success-emphasis fw-semibold mx-2 btn-lg">Approve</a>
                                                                        <a href="#"
                                                                            class="text-decoration-none btn bg-danger bg-opacity-10 text-danger-emphasis fw-semibold mx-2 btn-lg">Reject</a>
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                    // Show Approved button for approved courses
                                                                ?>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                                        <a href="#" class="text-decoration-none btn fw-semibold mx-2 btn-lg"
                                                                            style="background-color: #6e42c142; color:#6f42c1;">Approved</a>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                            <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='7'>No courses found</td></tr>";
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