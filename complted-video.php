<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Video</title>

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- course css file -->
    <link rel="stylesheet" href="Style/course.css">

    <!-- header css file -->
    <link rel="stylesheet" href="Style/header.css">

    <!-- css for large screen -->
    <link rel="stylesheet" href="Style/media-query.css">

    <!-- css bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <!-- header section -->
    <?php
    include 'header.php';
    ?>


    <!-- course section -->
    <div class="course-container my-2">
        <div class="title">
            <p class="fs-3 fw-bold text-center">My Course</p>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <ul class="list-unstyled d-flex justify-content-between align-items-center mx-auto px-2">
                <li class="mx-2 text-center">
                    <a href="All-course.php" class="text-decoration-none text-dark p-1 fw-bold fs-5 text-nowrap">All Courses</a>
                </li>
                <li class="mx-2 text-center">
                    <a href="course.php" class="text-decoration-none text-dark p-1 fw-bold fs-5 text-nowrap">Courses</a>
                </li>
                <li class="mx-2 text-center">
                    <a href="wishlist-course.php" class="text-decoration-none text-dark p-1 fw-bold fs-5 text-nowrap">Wishlist</a>
                </li>
                <li class="mx-2 text-center border-bottom border-danger border-3">
                    <a href="complted-video.php" class="text-decoration-none text-dark p-1 fw-bold fs-5 text-nowrap">Completed</a>
                </li>
            </ul>
        </div>

        <div class="course-filter mx-auto my-2">
            <div class="row">
                <div class="col-lg-8 my-2">
                    <p class="m-0 fw-bold fs-4">My Course</p>
                    <span class="text-secondary fw-semibold fs-5">List of Your Course</span>
                </div>
                <div class="col-lg-2 my-2">
                    <form action="#">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>All Related</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </form>
                </div>
                <div class="col-lg-2 my-2">
                    <form action="#">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Recently Add</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>

        <div class="all-courses-section mx-auto my-4">
            <div class="course-video my-3 container-fluid">
                <div class="course-video my-5 container-fluid shadow">
                    <div class="course-video-boxs py-2 d-flex mx-auto flex-nowrap">
                        <?php
                        $sql = "SELECT * FROM course WHERE course_status = 'approved' AND Completed = 1";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Start looping through courses
                            while ($row = $result->fetch_assoc()) {
                                // Extract course data
                                $course_title = $row['course_title'];
                                $course_description = $row['course_description'];
                                $channel_name = $row['channel_name'];
                                $course_price = $row['course_price'];
                                $course_discount_price = $row['course_discount_price'];
                                $course_img = $row['course_img'];
                                $course_level = $row['course_level'];

                                // Start HTML template for each course
                        ?>
                                <div class="video-box m-2 shadow">
                                    <form action="manage_cart.php" method="post">
                                        <div class="video-img position-relative card-header">
                                            <a href="paid-webinar.php" class="text-decoration-none">
                                                <img src="<?php echo $course_img; ?>" alt="<?php echo $course_title; ?>" class="border-0 position-absolute rounded-5" height="100%" width="100%" name="course_img">
                                            </a>
                                            <div class="heart-icon position-absolute top-0 end-0 rounded-circle py-1 px-2 m-2" style="background-color: #d5cfcf7c;">
                                                <button class="text-decoration-none text-danger text-center btn btn-transparent p-0 m-0 border-0 outline-0" type="submit" name="wishlistBtn">
                                                    <i class="bi bi-heart wishlistBtn fs-5"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="video-content my-2">
                                            <a href="paid-webinar.php" class="text-decoration-none text-dark">
                                                <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name"><?php echo $course_title; ?></p>
                                            </a>
                                            <div class="course-instructor d-flex align-items-center m-0 py-0 px-3 pt-1" name="course_channel_name">
                                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                                <p class="instructor-name fs-6 fw-medium my-0 py-0"><?php echo $channel_name; ?></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="course-info m-0 text-secondary px-3 pt-1" name="course_info"><?php echo $course_description; ?></p>
                                            </div>
                                            <div class="course-ratting d-flex m-0 py-0 px-3 pt-1" name="course_rating">
                                                <div class="rating-icon d-flex py-1">
                                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                                </div>
                                                <p class="rating-ratio py-1 my-0">(1.4K)</p>
                                            </div>
                                            <div class="text-decoration-none d-flex justify-content-start align-items-center" name="course_prise">
                                                <h1 class="course-price text-dark fw-bold m-0 px-3 pt-1 fs-5">$<?php echo $course_price; ?>
                                                    <del class="ms-2 text-secondary fw-normal fs-6" name="del_prise">$<?php echo $course_discount_price; ?></del>
                                                </h1>
                                            </div>
                                            <hr class="divider mx-auto" style="width:90%">

                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <button class="btn bg-success bg-opacity-10 text-success mx-3 my-2 p-2 fw-bold fs-5" name="course_level" type="button"><?php echo $course_level; ?></button>
                                                <button class="btn btn-dark mx-3 my-2 p-2 text-light fw-bold fs-5 addToCartBtn" name="addCart" type="submit">Add to Cart</button>
                                            </div>

                                        </div>
                                        <input type="hidden" name="course_img" value="<?php echo $course_img; ?>">
                                        <input type="hidden" name="course_name" value="<?php echo $course_title; ?>">
                                        <input type="hidden" name="course_channel_name" value="<?php echo $channel_name; ?>">
                                        <input type="hidden" name="course_level" value="<?php echo $course_level; ?>">
                                        <input type="hidden" name="course_info" value="<?php echo $course_description; ?>">
                                        <input type="hidden" name="course_rating" value="(1.4K)">
                                        <input type="hidden" name="course_prise" value="<?php echo $course_price; ?>">
                                        <input type="hidden" name="del_prise" value="<?php echo $course_discount_price; ?>">
                                    </form>
                                </div>
                        <?php
                            }
                        } else {
                            echo '<div class="alert alert-dark mx-auto fw-bold fs-4" role="alert">
                                    Not completed the courses
                                </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- join us section -->
    <?php
    include 'join-us.php';
    ?>

    <!-- footer -->
    <?php
    include 'footer.php';
    ?>


    <!-- js external link -->
    <script src="Script/main.js"></script>

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>