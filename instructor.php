<?php
include './config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>instructor</title>

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

            <!-- course -->
            <div class="container-fluid my-2 mx-2 bg-light">
                <div class="title d-flex justify-content-between align-items-center">
                    <h1 class="fw-bold m-0 p-2">Instructors</h1>
                </div>
                <!-- search category -->
                <div class="container-fluid mt-4 mx-2 bg-light rounded">
                    <div class="row mx-5 g-3 align-items-center p-3 bg-body-tertiary justify-content-between">
                        <!-- Search bar -->
                        <div class="col-md-8 m-0">
                            <form class="rounded position-relative">
                                <input class="form-control bg-body py-2 fw-bold" type="search" placeholder="Search" name="search"
                                    aria-label="Search" />
                                <button
                                    class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                    type="submit">
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

                <div class="container-fluid mt-2">
                    <div class="table-responsive border-0 rounded-3">
                        <!-- Table START -->
                        <table class="table table-light table-hover align-middle p-4 mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="bg-dark p-4 fs-5 text-light rounded-start">Profile Picture</th>
                                    <th scope="col" class="bg-dark p-4 fs-5 text-light">Username</th>
                                    <th scope="col" class="bg-dark p-4 fs-5 text-light">City</th>
                                    <th scope="col" class="bg-dark p-4 fs-5 text-light">Joined At</th>
                                    <th scope="col" class="bg-dark p-4 fs-5 text-light rounded-end">Actions</th>
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
                                $sql = "SELECT * FROM Instructors";
                                if (!empty($search_query)) {
                                    $sql .= " WHERE Instructor_Username LIKE '%$search_query%'";
                                }
                                $sql .= " ORDER BY InstructorID ASC";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    // Output data of each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        if (isset($_SESSION)) {
                                            $profile_img = $row['ProfilePicture'];
                                            $user_name = $row['Instructor_Username'];
                                            $city = $row['city'];
                                            $date = $row['JoinDate'];
                                        } else {
                                            $profile_img = "Assests/admin.jpg";
                                            $user_name = "abc";
                                            $city = "India";
                                            $date = "11-11-2011";
                                        }
                                ?>
                                        <tr>
                                            <td><img src="<?php echo $profile_img ?>" alt="Profile Image" style="height:60px; width:60px;"
                                                    class="rounded-circle"></td>
                                            <td class="pt-4 fw-bolder"><?php echo $user_name ?></td>
                                            <td class="pt-4 fw-bolder"><?php echo $city ?></td>
                                            <td class="pt-4 fw-bolder"><?php echo date('Y-m-d', strtotime($date)); ?></td>
                                            <td>
                                                <a href="instructor_view_details.php?id=<?php echo $row['InstructorID'] ?>"
                                                    class="btn btn-lg text-light" style="background-color: #0c5c51;">View Details</a>
                                                <!-- Add other actions here -->
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No users found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
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