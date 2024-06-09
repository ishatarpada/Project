<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Course</title>

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
    <div class= "my-2">
        <div class="title">
            <p class="fs-1 fw-bold text-center">My Course</p>
        </div>
        <div class="mx-auto">
            <div class="d-flex justify-content-center align-items-center">
                <ul class="list-unstyled d-flex mx-auto px-2">
                    <li class="mx-2 text-center">
                        <a href="All-course.php" class="text-decoration-none text-dark p-1 fw-bold fs-5 text-nowrap">All Courses</a>
                    </li>
                    <li class="mx-2 text-center border-bottom border-danger border-3">
                        <a href="course.php" class="text-decoration-none text-dark p-1 fw-bold fs-5 text-nowrap">Courses</a>
                    </li>
                    <li class="mx-2 text-center">
                        <a href="wishlist-course.php" class="text-decoration-none text-dark p-1 fw-bold fs-5 text-nowrap">Wishlist</a>
                    </li>
                    <li class="mx-2 text-center">
                        <a href="complted-video.php" class="text-decoration-none text-dark p-1 fw-bold fs-5 text-nowrap">Completed</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- categories section -->
    <div class="container-fluid my-4 courses-section" style="width: 95%; margin: auto;">
        <!-- Tabs START -->
        <div class="course-categories">
            <ul class="nav nav-pills d-flex justify-content-between align-items-center flex-nowrap mb-4 p-3 bg-success bg-opacity-10 rounded course-list" id="course-pills-tab" role="tablist" style="width: auto; margin: auto;">
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light text-nowrap py-2 px-3 border-0 rounded fs-5 active text-wrap" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-1" type="button" role="tab" aria-controls="course-pills-tabs-1" aria-selected="true" style="background-color: #146659;">Mobile App Development</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-2" type="button" role="tab" aria-controls="course-pills-tabs-2" aria-selected="false" tabindex="-1" style="background-color: #146659;">Cyber Security</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-3" type="button" role="tab" aria-controls="course-pills-tabs-3" aria-selected="false" tabindex="-1" style="background-color: #146659;">Artificial Intelligence</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-4" type="button" role="tab" aria-controls="course-pills-tabs-4" aria-selected="false" tabindex="-1" style="background-color: #146659;">DevOps</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-5" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-5" type="button" role="tab" aria-controls="course-pills-tabs-5" aria-selected="false" tabindex="-1" style="background-color: #146659;">Software Developer</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-6" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-6" type="button" role="tab" aria-controls="course-pills-tabs-6" aria-selected="false" tabindex="-1" style="background-color: #146659;">Web Developer</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-7" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-7" type="button" role="tab" aria-controls="course-pills-tabs-7" aria-selected="false" tabindex="-1" style="background-color: #146659;">Data Analytics</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5 active" id="course-pills-tab-8" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-8" type="button" role="tab" aria-controls="course-pills-tabs-8" aria-selected="true" style="background-color: #146659;">DataBase</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-9" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-9" type="button" role="tab" aria-controls="course-pills-tabs-9" aria-selected="false" tabindex="-1" style="background-color: #146659;">Graphic Design</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-10" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-10" type="button" role="tab" aria-controls="course-pills-tabs-10" aria-selected="false" tabindex="-1" style="background-color: #146659;">Block Chain</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-11" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-11" type="button" role="tab" aria-controls="course-pills-tabs-11" aria-selected="false" tabindex="-1" style="background-color: #146659;">Maths & Logic</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-12" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-12" type="button" role="tab" aria-controls="course-pills-tabs-12" aria-selected="false" tabindex="-1" style="background-color: #146659;">English</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-13" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-13" type="button" role="tab" aria-controls="course-pills-tabs-13" aria-selected="false" tabindex="-1" style="background-color: #146659;">Fiance</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 me-sm-5" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-14" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-14" type="button" role="tab" aria-controls="course-pills-tabs-14" aria-selected="false" tabindex="-1" style="background-color: #146659;">Management</button>
                </li>
            </ul>
        </div>
        <!-- Tabs END -->

        <!-- Tabs content START -->
        <div class="tab-content" id="course-pills-tabContent">
            <!-- Content START -->
            <div class=" tab-pane fade show active" id="course-pills-tabs-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                <div class="courses-section my-1">
                    <div class="course-video rounded container-fluid">
                        <div class="course-video-boxs rounded py-2 d-flex flex-nowrap mx-auto justify-content-between">
                            <?php
                            $sql = "SELECT * FROM course WHERE course_status = 'approved' AND course_category = 'Mobile App Development'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $course_ID = $row['course_ID'];
                                    $course_title = $row['course_title'];
                                    $course_description = $row['course_description'];
                                    $course_category = $row['course_category'];
                                    $course_level = $row['course_level'];
                                    $course_language = $row['course_language'];
                                    $course_time = $row['course_time'];
                                    $total_lecture = $row['total_lecture'];
                                    $instructor = $row['instructor'];
                                    $channel_name = $row['channel_name'];
                                    $instructor_img = $row['instructor_img'];
                                    $course_price = $row['course_price'];
                                    $course_discount_price = $row['course_discount_price'];
                                    $course_img = $row['course_img'];
                                    $course_ratting = '4.5';
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="paid-webinar.php" class="text-decoration-none">
                                                    <img src="<?php echo $course_img; ?>" alt="<?php echo $course_title; ?>" class="border-0 position-absolute rounded" height="100%" width="100%" name="course_img">
                                                </a>
                                                <div class="heart-icon position-absolute top-0 end-0 rounded-circle py-1 px-2 m-2" style="background-color: #d5cfcf7c;">
                                                    <button class="text-decoration-none text-danger text-center btn btn-transparent p-0 m-0 border-0 outline-0" type="submit" name="wishlistBtn">
                                                        <?php
                                                        // Check if the session for wishlist is not started
                                                        if (!isset($_SESSION['wishlist']) || empty($_SESSION['wishlist'])) {
                                                            $heartIconClass = 'bi-heart'; // Show the empty heart icon
                                                        } else {
                                                            // Check if the item is already in the wishlist
                                                            $heartIconClass = in_array($course_ID, array_column($_SESSION['wishlist'], 'Item_ID')) ? 'bi-heart-fill' : 'bi-heart';
                                                        }
                                                        ?>
                                                        <i class="bi <?php echo $heartIconClass; ?> fs-5 wishlistBtn"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="video-content my-2">
                                                <a href="paid-webinar.php" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo $course_title; ?></p>
                                                </a>
                                                <div class="course-instructor d-flex align-items-center m-0 py-0 px-3 pt-1" name="course_channel_name">
                                                    <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                                    <p class="instructor-name fs-6 fw-semibold my-0 py-0"><?php echo $channel_name; ?></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="course-info m-0 text-secondary px-3 pt-1" name="course_info">
                                                        <?php echo $course_description; ?></p>
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
                                                <div class="d-flex justify-content-between px-2 mt-2">
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-clock text-danger me-2"></i><?php echo $course_time; ?></span>
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-table text-warning me-2"></i><?php echo $total_lecture; ?> lectures</span>
                                                </div>

                                                <hr class="divider mx-auto" style="width:90%">

                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <button class="btn bg-success bg-opacity-10 text-success mx-3 my-2 p-2 fw-bold fs-5" name="course_level" type="button"><?php echo $course_level; ?></button>
                                                    <button class="btn btn-dark mx-3 my-2 p-2 text-light fw-bold fs-5 addToCartBtn" name="addCart" type="submit">Add to Cart</button>
                                                </div>

                                            </div>
                                            <input type="hidden" name="course_ID" value="<?php echo $course_ID ?>">
                                            <input type="hidden" name="course_title" value="<?php echo $course_title; ?>">
                                            <input type="hidden" name="course_description" value="<?php echo $course_description; ?>">
                                            <input type="hidden" name="course_category" value="<?php echo $course_category; ?>">
                                            <input type="hidden" name="course_level" value="<?php echo $course_level; ?>">
                                            <input type="hidden" name="course_language" value="<?php echo $course_language; ?>">
                                            <input type="hidden" name="course_time" value="<?php echo $course_time; ?>">
                                            <input type="hidden" name="total_lecture" value="<?php echo $total_lecture; ?>">
                                            <input type="hidden" name="instructor" value="<?php echo $instructor; ?>">
                                            <input type="hidden" name="channel_name" value="<?php echo $channel_name; ?>">
                                            <input type="hidden" name="instructor_img" value="<?php echo $instructor_img; ?>">
                                            <input type="hidden" name="course_price" value="<?php echo $course_price; ?>">
                                            <input type="hidden" name="course_discount_price" value="<?php echo $course_discount_price; ?>">
                                            <input type="hidden" name="course_img" value="<?php echo $course_img; ?>">
                                            <input type="hidden" name="course_rating" value="4.5">
                                        </form>
                                    </div>
                            <?php
                                }
                            } else {
                                echo '<div class="alert alert-info fw-bold fs-5" role="alert">
                                No Course Available
                              </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content END -->

            <!-- Content START -->
            <div class="tab-pane fade" id="course-pills-tabs-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                <div class="courses-section my-1">
                    <div class="course-video rounded container-fluid">
                        <div class="course-video-boxs rounded py-2 d-flex flex-nowrap mx-auto justify-content-between">
                            <?php
                            $sql = "SELECT * FROM course WHERE course_status = 'approved' AND course_category = 'Cybersecurity'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $course_ID = $row['course_ID'];
                                    $course_title = $row['course_title'];
                                    $course_description = $row['course_description'];
                                    $course_category = $row['course_category'];
                                    $course_level = $row['course_level'];
                                    $course_language = $row['course_language'];
                                    $course_time = $row['course_time'];
                                    $total_lecture = $row['total_lecture'];
                                    $instructor = $row['instructor'];
                                    $channel_name = $row['channel_name'];
                                    $instructor_img = $row['instructor_img'];
                                    $course_price = $row['course_price'];
                                    $course_discount_price = $row['course_discount_price'];
                                    $course_img = $row['course_img'];
                                    $course_ratting = '4.5';
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="paid-webinar.php" class="text-decoration-none">
                                                    <img src="<?php echo $course_img; ?>" alt="<?php echo $course_title; ?>" class="border-0 position-absolute rounded" height="100%" width="100%" name="course_img">
                                                </a>
                                                <div class="heart-icon position-absolute top-0 end-0 rounded-circle py-1 px-2 m-2" style="background-color: #d5cfcf7c;">
                                                    <button class="text-decoration-none text-danger text-center btn btn-transparent p-0 m-0 border-0 outline-0" type="submit" name="wishlistBtn">
                                                        <?php
                                                        // Check if the item is already in the wishlist
                                                        $heartIconClass = in_array($course_ID, array_column($_SESSION['wishlist'], 'Item_ID')) ? 'bi-heart-fill' : 'bi-heart';
                                                        ?>
                                                        <i class="bi <?php echo $heartIconClass; ?> fs-5 wishlistBtn"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="video-content my-2">
                                                <a href="paid-webinar.php" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo $course_title; ?></p>
                                                </a>
                                                <div class="course-instructor d-flex align-items-center m-0 py-0 px-3 pt-1" name="course_channel_name">
                                                    <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                                    <p class="instructor-name fs-6 fw-semibold my-0 py-0"><?php echo $channel_name; ?></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="course-info m-0 text-secondary px-3 pt-1" name="course_info">
                                                        <?php echo $course_description; ?></p>
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
                                                <div class="d-flex justify-content-between px-2 mt-2">
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-clock text-danger me-2"></i><?php echo $course_time; ?></span>
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-table text-warning me-2"></i><?php echo $total_lecture; ?> lectures</span>
                                                </div>

                                                <hr class="divider mx-auto" style="width:90%">

                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <button class="btn bg-success bg-opacity-10 text-success mx-3 my-2 p-2 fw-bold fs-5" name="course_level" type="button"><?php echo $course_level; ?></button>
                                                    <button class="btn btn-dark mx-3 my-2 p-2 text-light fw-bold fs-5 addToCartBtn" name="addCart" type="submit">Add to Cart</button>
                                                </div>

                                            </div>
                                            <input type="hidden" name="course_ID" value="<?php echo $course_ID ?>">
                                            <input type="hidden" name="course_title" value="<?php echo $course_title; ?>">
                                            <input type="hidden" name="course_description" value="<?php echo $course_description; ?>">
                                            <input type="hidden" name="course_category" value="<?php echo $course_category; ?>">
                                            <input type="hidden" name="course_level" value="<?php echo $course_level; ?>">
                                            <input type="hidden" name="course_language" value="<?php echo $course_language; ?>">
                                            <input type="hidden" name="course_time" value="<?php echo $course_time; ?>">
                                            <input type="hidden" name="total_lecture" value="<?php echo $total_lecture; ?>">
                                            <input type="hidden" name="instructor" value="<?php echo $instructor; ?>">
                                            <input type="hidden" name="channel_name" value="<?php echo $channel_name; ?>">
                                            <input type="hidden" name="instructor_img" value="<?php echo $instructor_img; ?>">
                                            <input type="hidden" name="course_price" value="<?php echo $course_price; ?>">
                                            <input type="hidden" name="course_discount_price" value="<?php echo $course_discount_price; ?>">
                                            <input type="hidden" name="course_img" value="<?php echo $course_img; ?>">
                                            <input type="hidden" name="course_rating" value="4.5">
                                        </form>
                                    </div>
                            <?php
                                }
                            } else {
                                echo '<div class="alert alert-info fw-bold fs-5" role="alert">
                                No Course Available
                              </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content END -->

            <!-- Content START -->
            <div class="tab-pane fade" id="course-pills-tabs-3" role="tabpanel" aria-labelledby="course-pills-tab-3">
                <div class="courses-section my-1">
                    <div class="course-video rounded container-fluid">
                        <div class="course-video-boxs rounded py-2 d-flex flex-nowrap mx-auto justify-content-between">
                            <?php
                            $sql = "SELECT * FROM course WHERE course_status = 'approved' AND course_category = 'Artificial Intelligence'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $course_ID = $row['course_ID'];
                                    $course_title = $row['course_title'];
                                    $course_description = $row['course_description'];
                                    $course_category = $row['course_category'];
                                    $course_level = $row['course_level'];
                                    $course_language = $row['course_language'];
                                    $course_time = $row['course_time'];
                                    $total_lecture = $row['total_lecture'];
                                    $instructor = $row['instructor'];
                                    $channel_name = $row['channel_name'];
                                    $instructor_img = $row['instructor_img'];
                                    $course_price = $row['course_price'];
                                    $course_discount_price = $row['course_discount_price'];
                                    $course_img = $row['course_img'];
                                    $course_ratting = '4.5';
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="paid-webinar.php" class="text-decoration-none">
                                                    <img src="<?php echo $course_img; ?>" alt="<?php echo $course_title; ?>" class="border-0 position-absolute rounded" height="100%" width="100%" name="course_img">
                                                </a>
                                                <div class="heart-icon position-absolute top-0 end-0 rounded-circle py-1 px-2 m-2" style="background-color: #d5cfcf7c;">
                                                    <button class="text-decoration-none text-danger text-center btn btn-transparent p-0 m-0 border-0 outline-0" type="submit" name="wishlistBtn">
                                                        <?php
                                                        // Check if the item is already in the wishlist
                                                        $heartIconClass = in_array($course_ID, array_column($_SESSION['wishlist'], 'Item_ID')) ? 'bi-heart-fill' : 'bi-heart';
                                                        ?>
                                                        <i class="bi <?php echo $heartIconClass; ?> fs-5 wishlistBtn"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="video-content my-2">
                                                <a href="paid-webinar.php" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo $course_title; ?></p>
                                                </a>
                                                <div class="course-instructor d-flex align-items-center m-0 py-0 px-3 pt-1" name="course_channel_name">
                                                    <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                                    <p class="instructor-name fs-6 fw-semibold my-0 py-0"><?php echo $channel_name; ?></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="course-info m-0 text-secondary px-3 pt-1" name="course_info">
                                                        <?php echo $course_description; ?></p>
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
                                                <div class="d-flex justify-content-between px-2 mt-2">
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-clock text-danger me-2"></i><?php echo $course_time; ?></span>
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-table text-warning me-2"></i><?php echo $total_lecture; ?> lectures</span>
                                                </div>

                                                <hr class="divider mx-auto" style="width:90%">

                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <button class="btn bg-success bg-opacity-10 text-success mx-3 my-2 p-2 fw-bold fs-5" name="course_level" type="button"><?php echo $course_level; ?></button>
                                                    <button class="btn btn-dark mx-3 my-2 p-2 text-light fw-bold fs-5 addToCartBtn" name="addCart" type="submit">Add to Cart</button>
                                                </div>

                                            </div>
                                            <input type="hidden" name="course_ID" value="<?php echo $course_ID ?>">
                                            <input type="hidden" name="course_title" value="<?php echo $course_title; ?>">
                                            <input type="hidden" name="course_description" value="<?php echo $course_description; ?>">
                                            <input type="hidden" name="course_category" value="<?php echo $course_category; ?>">
                                            <input type="hidden" name="course_level" value="<?php echo $course_level; ?>">
                                            <input type="hidden" name="course_language" value="<?php echo $course_language; ?>">
                                            <input type="hidden" name="course_time" value="<?php echo $course_time; ?>">
                                            <input type="hidden" name="total_lecture" value="<?php echo $total_lecture; ?>">
                                            <input type="hidden" name="instructor" value="<?php echo $instructor; ?>">
                                            <input type="hidden" name="channel_name" value="<?php echo $channel_name; ?>">
                                            <input type="hidden" name="instructor_img" value="<?php echo $instructor_img; ?>">
                                            <input type="hidden" name="course_price" value="<?php echo $course_price; ?>">
                                            <input type="hidden" name="course_discount_price" value="<?php echo $course_discount_price; ?>">
                                            <input type="hidden" name="course_img" value="<?php echo $course_img; ?>">
                                            <input type="hidden" name="course_rating" value="4.5">
                                        </form>
                                    </div>
                            <?php
                                }
                            } else {
                                echo '<div class="alert alert-info fw-bold fs-5" role="alert">
                                No Course Available
                              </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content END -->

            <!-- Content START -->
            <div class="tab-pane fade" id="course-pills-tabs-4" role="tabpanel" aria-labelledby="course-pills-tab-4">
                <div class="courses-section my-1">
                    <div class="course-video rounded container-fluid">
                        <div class="course-video-boxs rounded py-2 d-flex flex-nowrap mx-auto justify-content-between">
                            <?php
                            $sql = "SELECT * FROM instructor_course WHERE course_status = 'approved' AND course_category = 'DevOps'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $course_ID = $row['course_ID'];
                                    $course_title = $row['course_title'];
                                    $course_description = $row['course_description'];
                                    $course_category = $row['course_category'];
                                    $course_level = $row['course_level'];
                                    $course_language = $row['course_language'];
                                    $course_time = $row['course_time'];
                                    $total_lecture = $row['total_lecture'];
                                    $instructor = $row['instructor'];
                                    $channel_name = $row['channel_name'];
                                    $instructor_img = $row['instructor_img'];
                                    $course_price = $row['course_price'];
                                    $course_discount_price = $row['course_discount_price'];
                                    $course_img = $row['course_img'];
                                    $course_ratting = '4.5';
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="paid-webinar.php" class="text-decoration-none">
                                                    <img src="<?php echo $course_img; ?>" alt="<?php echo $course_title; ?>" class="border-0 position-absolute rounded" height="100%" width="100%" name="course_img">
                                                </a>
                                                <div class="heart-icon position-absolute top-0 end-0 rounded-circle py-1 px-2 m-2" style="background-color: #d5cfcf7c;">
                                                    <button class="text-decoration-none text-danger text-center btn btn-transparent p-0 m-0 border-0 outline-0" type="submit" name="wishlistBtn">
                                                        <?php
                                                        // Check if the item is already in the wishlist
                                                        $heartIconClass = in_array($course_ID, array_column($_SESSION['wishlist'], 'Item_ID')) ? 'bi-heart-fill' : 'bi-heart';
                                                        ?>
                                                        <i class="bi <?php echo $heartIconClass; ?> fs-5 wishlistBtn"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="video-content my-2">
                                                <a href="paid-webinar.php" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo $course_title; ?></p>
                                                </a>
                                                <div class="course-instructor d-flex align-items-center m-0 py-0 px-3 pt-1" name="course_channel_name">
                                                    <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                                    <p class="instructor-name fs-6 fw-semibold my-0 py-0"><?php echo $channel_name; ?></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="course-info m-0 text-secondary px-3 pt-1" name="course_info">
                                                        <?php echo $course_description; ?></p>
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
                                                <div class="d-flex justify-content-between px-2 mt-2">
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-clock text-danger me-2"></i><?php echo $course_time; ?></span>
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-table text-warning me-2"></i><?php echo $total_lecture; ?> lectures</span>
                                                </div>

                                                <hr class="divider mx-auto" style="width:90%">

                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <button class="btn bg-success bg-opacity-10 text-success mx-3 my-2 p-2 fw-bold fs-5" name="course_level" type="button"><?php echo $course_level; ?></button>
                                                    <button class="btn btn-dark mx-3 my-2 p-2 text-light fw-bold fs-5 addToCartBtn" name="addCart" type="submit">Add to Cart</button>
                                                </div>

                                            </div>
                                            <input type="hidden" name="course_ID" value="<?php echo $course_ID ?>">
                                            <input type="hidden" name="course_title" value="<?php echo $course_title; ?>">
                                            <input type="hidden" name="course_description" value="<?php echo $course_description; ?>">
                                            <input type="hidden" name="course_category" value="<?php echo $course_category; ?>">
                                            <input type="hidden" name="course_level" value="<?php echo $course_level; ?>">
                                            <input type="hidden" name="course_language" value="<?php echo $course_language; ?>">
                                            <input type="hidden" name="course_time" value="<?php echo $course_time; ?>">
                                            <input type="hidden" name="total_lecture" value="<?php echo $total_lecture; ?>">
                                            <input type="hidden" name="instructor" value="<?php echo $instructor; ?>">
                                            <input type="hidden" name="channel_name" value="<?php echo $channel_name; ?>">
                                            <input type="hidden" name="instructor_img" value="<?php echo $instructor_img; ?>">
                                            <input type="hidden" name="course_price" value="<?php echo $course_price; ?>">
                                            <input type="hidden" name="course_discount_price" value="<?php echo $course_discount_price; ?>">
                                            <input type="hidden" name="course_img" value="<?php echo $course_img; ?>">
                                            <input type="hidden" name="course_rating" value="4.5">
                                        </form>
                                    </div>
                            <?php
                                }
                            } else {
                                echo '<div class="alert alert-info fw-bold fs-5" role="alert">
                                No Course Available
                              </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content END -->

            <!-- Content START -->
            <div class="tab-pane fade" id="course-pills-tabs-5" role="tabpanel" aria-labelledby="course-pills-tab-5">
                <div class="courses-section my-1">
                    <div class="course-video rounded container-fluid">
                        <div class="course-video-boxs rounded py-2 d-flex flex-nowrap mx-auto justify-content-between">
                            <?php
                            $sql = "SELECT * FROM course WHERE course_status = 'approved' AND course_category = 'Software Developer'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $course_ID = $row['course_ID'];
                                    $course_title = $row['course_title'];
                                    $course_description = $row['course_description'];
                                    $course_category = $row['course_category'];
                                    $course_level = $row['course_level'];
                                    $course_language = $row['course_language'];
                                    $course_time = $row['course_time'];
                                    $total_lecture = $row['total_lecture'];
                                    $instructor = $row['instructor'];
                                    $channel_name = $row['channel_name'];
                                    $instructor_img = $row['instructor_img'];
                                    $course_price = $row['course_price'];
                                    $course_discount_price = $row['course_discount_price'];
                                    $course_img = $row['course_img'];
                                    $course_ratting = '4.5';
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="paid-webinar.php" class="text-decoration-none">
                                                    <img src="<?php echo $course_img; ?>" alt="<?php echo $course_title; ?>" class="border-0 position-absolute rounded" height="100%" width="100%" name="course_img">
                                                </a>
                                                <div class="heart-icon position-absolute top-0 end-0 rounded-circle py-1 px-2 m-2" style="background-color: #d5cfcf7c;">
                                                    <button class="text-decoration-none text-danger text-center btn btn-transparent p-0 m-0 border-0 outline-0" type="submit" name="wishlistBtn">
                                                        <?php
                                                        // Check if the item is already in the wishlist
                                                        $heartIconClass = in_array($course_ID, array_column($_SESSION['wishlist'], 'Item_ID')) ? 'bi-heart-fill' : 'bi-heart';
                                                        ?>
                                                        <i class="bi <?php echo $heartIconClass; ?> fs-5 wishlistBtn"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="video-content my-2">
                                                <a href="paid-webinar.php" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo $course_title; ?></p>
                                                </a>
                                                <div class="course-instructor d-flex align-items-center m-0 py-0 px-3 pt-1" name="course_channel_name">
                                                    <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                                    <p class="instructor-name fs-6 fw-semibold my-0 py-0"><?php echo $channel_name; ?></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="course-info m-0 text-secondary px-3 pt-1" name="course_info">
                                                        <?php echo $course_description; ?></p>
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
                                                <div class="d-flex justify-content-between px-2 mt-2">
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-clock text-danger me-2"></i><?php echo $course_time; ?></span>
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-table text-warning me-2"></i><?php echo $total_lecture; ?> lectures</span>
                                                </div>

                                                <hr class="divider mx-auto" style="width:90%">

                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <button class="btn bg-success bg-opacity-10 text-success mx-3 my-2 p-2 fw-bold fs-5" name="course_level" type="button"><?php echo $course_level; ?></button>
                                                    <button class="btn btn-dark mx-3 my-2 p-2 text-light fw-bold fs-5 addToCartBtn" name="addCart" type="submit">Add to Cart</button>
                                                </div>

                                            </div>
                                            <input type="hidden" name="course_ID" value="<?php echo $course_ID ?>">
                                            <input type="hidden" name="course_title" value="<?php echo $course_title; ?>">
                                            <input type="hidden" name="course_description" value="<?php echo $course_description; ?>">
                                            <input type="hidden" name="course_category" value="<?php echo $course_category; ?>">
                                            <input type="hidden" name="course_level" value="<?php echo $course_level; ?>">
                                            <input type="hidden" name="course_language" value="<?php echo $course_language; ?>">
                                            <input type="hidden" name="course_time" value="<?php echo $course_time; ?>">
                                            <input type="hidden" name="total_lecture" value="<?php echo $total_lecture; ?>">
                                            <input type="hidden" name="instructor" value="<?php echo $instructor; ?>">
                                            <input type="hidden" name="channel_name" value="<?php echo $channel_name; ?>">
                                            <input type="hidden" name="instructor_img" value="<?php echo $instructor_img; ?>">
                                            <input type="hidden" name="course_price" value="<?php echo $course_price; ?>">
                                            <input type="hidden" name="course_discount_price" value="<?php echo $course_discount_price; ?>">
                                            <input type="hidden" name="course_img" value="<?php echo $course_img; ?>">
                                            <input type="hidden" name="course_rating" value="4.5">
                                        </form>
                                    </div>
                            <?php
                                }
                            } else {
                                echo '<div class="alert alert-info fw-bold fs-5" role="alert">
                                No Course Available
                              </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content END -->

            <!-- Content START -->
            <div class="tab-pane fade" id="course-pills-tabs-6" role="tabpanel" aria-labelledby="course-pills-tab-6">
                <div class="courses-section my-1">
                    <div class="course-video rounded container-fluid">
                        <div class="course-video-boxs rounded py-2 d-flex flex-nowrap mx-auto justify-content-between">
                            <?php
                            $sql = "SELECT * FROM instructor_course WHERE course_status = 'approved' AND course_category = 'Web Developer'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $course_ID = $row['course_ID'];
                                    $course_title = $row['course_title'];
                                    $course_description = $row['course_description'];
                                    $course_category = $row['course_category'];
                                    $course_level = $row['course_level'];
                                    $course_language = $row['course_language'];
                                    $course_time = $row['course_time'];
                                    $total_lecture = $row['total_lecture'];
                                    $instructor = $row['instructor'];
                                    $channel_name = $row['channel_name'];
                                    $instructor_img = $row['instructor_img'];
                                    $course_price = $row['course_price'];
                                    $course_discount_price = $row['course_discount_price'];
                                    $course_img = $row['course_img'];
                                    $course_ratting = '4.5';
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="paid-webinar.php" class="text-decoration-none">
                                                    <img src="<?php echo $course_img; ?>" alt="<?php echo $course_title; ?>" class="border-0 position-absolute rounded" height="100%" width="100%" name="course_img">
                                                </a>
                                                <div class="heart-icon position-absolute top-0 end-0 rounded-circle py-1 px-2 m-2" style="background-color: #d5cfcf7c;">
                                                    <button class="text-decoration-none text-danger text-center btn btn-transparent p-0 m-0 border-0 outline-0" type="submit" name="wishlistBtn">
                                                        <?php
                                                        // Check if the item is already in the wishlist
                                                        $heartIconClass = in_array($course_ID, array_column($_SESSION['wishlist'], 'Item_ID')) ? 'bi-heart-fill' : 'bi-heart';
                                                        ?>
                                                        <i class="bi <?php echo $heartIconClass; ?> fs-5 wishlistBtn"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="video-content my-2">
                                                <a href="paid-webinar.php" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo $course_title; ?></p>
                                                </a>
                                                <div class="course-instructor d-flex align-items-center m-0 py-0 px-3 pt-1" name="course_channel_name">
                                                    <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                                    <p class="instructor-name fs-6 fw-semibold my-0 py-0"><?php echo $channel_name; ?></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="course-info m-0 text-secondary px-3 pt-1" name="course_info">
                                                        <?php echo $course_description; ?></p>
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
                                                <div class="d-flex justify-content-between px-2 mt-2">
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-clock text-danger me-2"></i><?php echo $course_time; ?></span>
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-table text-warning me-2"></i><?php echo $total_lecture; ?> lectures</span>
                                                </div>

                                                <hr class="divider mx-auto" style="width:90%">

                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <button class="btn bg-success bg-opacity-10 text-success mx-3 my-2 p-2 fw-bold fs-5" name="course_level" type="button"><?php echo $course_level; ?></button>
                                                    <button class="btn btn-dark mx-3 my-2 p-2 text-light fw-bold fs-5 addToCartBtn" name="addCart" type="submit">Add to Cart</button>
                                                </div>

                                            </div>
                                            <input type="hidden" name="course_ID" value="<?php echo $course_ID ?>">
                                            <input type="hidden" name="course_title" value="<?php echo $course_title; ?>">
                                            <input type="hidden" name="course_description" value="<?php echo $course_description; ?>">
                                            <input type="hidden" name="course_category" value="<?php echo $course_category; ?>">
                                            <input type="hidden" name="course_level" value="<?php echo $course_level; ?>">
                                            <input type="hidden" name="course_language" value="<?php echo $course_language; ?>">
                                            <input type="hidden" name="course_time" value="<?php echo $course_time; ?>">
                                            <input type="hidden" name="total_lecture" value="<?php echo $total_lecture; ?>">
                                            <input type="hidden" name="instructor" value="<?php echo $instructor; ?>">
                                            <input type="hidden" name="channel_name" value="<?php echo $channel_name; ?>">
                                            <input type="hidden" name="instructor_img" value="<?php echo $instructor_img; ?>">
                                            <input type="hidden" name="course_price" value="<?php echo $course_price; ?>">
                                            <input type="hidden" name="course_discount_price" value="<?php echo $course_discount_price; ?>">
                                            <input type="hidden" name="course_img" value="<?php echo $course_img; ?>">
                                            <input type="hidden" name="course_rating" value="4.5">
                                        </form>
                                    </div>
                            <?php
                                }
                            } else {
                                echo '<div class="alert alert-info fw-bold fs-5" role="alert">
                                No Course Available
                              </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content END -->

            <!-- Content START -->
            <div class="tab-pane fade" id="course-pills-tabs-7" role="tabpanel" aria-labelledby="course-pills-tab-7">
                <div class="courses-section my-1">
                    <div class="course-video rounded container-fluid">
                        <div class="course-video-boxs rounded py-2 d-flex flex-nowrap mx-auto justify-content-between">
                            <?php
                            $sql = "SELECT * FROM course WHERE course_status = 'approved' AND course_category = 'Computing'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $course_ID = $row['course_ID'];
                                    $course_title = $row['course_title'];
                                    $course_description = $row['course_description'];
                                    $course_category = $row['course_category'];
                                    $course_level = $row['course_level'];
                                    $course_language = $row['course_language'];
                                    $course_time = $row['course_time'];
                                    $total_lecture = $row['total_lecture'];
                                    $instructor = $row['instructor'];
                                    $channel_name = $row['channel_name'];
                                    $instructor_img = $row['instructor_img'];
                                    $course_price = $row['course_price'];
                                    $course_discount_price = $row['course_discount_price'];
                                    $course_img = $row['course_img'];
                                    $course_ratting = '4.5';
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="paid-webinar.php" class="text-decoration-none">
                                                    <img src="<?php echo $course_img; ?>" alt="<?php echo $course_title; ?>" class="border-0 position-absolute rounded" height="100%" width="100%" name="course_img">
                                                </a>
                                                <div class="heart-icon position-absolute top-0 end-0 rounded-circle py-1 px-2 m-2" style="background-color: #d5cfcf7c;">
                                                    <button class="text-decoration-none text-danger text-center btn btn-transparent p-0 m-0 border-0 outline-0" type="submit" name="wishlistBtn">
                                                        <?php
                                                        // Check if the item is already in the wishlist
                                                        $heartIconClass = in_array($course_ID, array_column($_SESSION['wishlist'], 'Item_ID')) ? 'bi-heart-fill' : 'bi-heart';
                                                        ?>
                                                        <i class="bi <?php echo $heartIconClass; ?> fs-5 wishlistBtn"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="video-content my-2">
                                                <a href="paid-webinar.php" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo $course_title; ?></p>
                                                </a>
                                                <div class="course-instructor d-flex align-items-center m-0 py-0 px-3 pt-1" name="course_channel_name">
                                                    <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                                    <p class="instructor-name fs-6 fw-semibold my-0 py-0"><?php echo $channel_name; ?></p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <p class="course-info m-0 text-secondary px-3 pt-1" name="course_info">
                                                        <?php echo $course_description; ?></p>
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
                                                <div class="d-flex justify-content-between px-2 mt-2">
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-clock text-danger me-2"></i><?php echo $course_time; ?></span>
                                                    <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-table text-warning me-2"></i><?php echo $total_lecture; ?> lectures</span>
                                                </div>

                                                <hr class="divider mx-auto" style="width:90%">

                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <button class="btn bg-success bg-opacity-10 text-success mx-3 my-2 p-2 fw-bold fs-5" name="course_level" type="button"><?php echo $course_level; ?></button>
                                                    <button class="btn btn-dark mx-3 my-2 p-2 text-light fw-bold fs-5 addToCartBtn" name="addCart" type="submit">Add to Cart</button>
                                                </div>

                                            </div>
                                            <input type="hidden" name="course_ID" value="<?php echo $course_ID ?>">
                                            <input type="hidden" name="course_title" value="<?php echo $course_title; ?>">
                                            <input type="hidden" name="course_description" value="<?php echo $course_description; ?>">
                                            <input type="hidden" name="course_category" value="<?php echo $course_category; ?>">
                                            <input type="hidden" name="course_level" value="<?php echo $course_level; ?>">
                                            <input type="hidden" name="course_language" value="<?php echo $course_language; ?>">
                                            <input type="hidden" name="course_time" value="<?php echo $course_time; ?>">
                                            <input type="hidden" name="total_lecture" value="<?php echo $total_lecture; ?>">
                                            <input type="hidden" name="instructor" value="<?php echo $instructor; ?>">
                                            <input type="hidden" name="channel_name" value="<?php echo $channel_name; ?>">
                                            <input type="hidden" name="instructor_img" value="<?php echo $instructor_img; ?>">
                                            <input type="hidden" name="course_price" value="<?php echo $course_price; ?>">
                                            <input type="hidden" name="course_discount_price" value="<?php echo $course_discount_price; ?>">
                                            <input type="hidden" name="course_img" value="<?php echo $course_img; ?>">
                                            <input type="hidden" name="course_rating" value="4.5">
                                        </form>
                                    </div>
                            <?php
                                }
                            } else {
                                echo '<div class="alert alert-info fw-bold fs-5" role="alert">
                                No Course Available
                              </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content END -->
        </div>
        <!-- Tabs content END -->
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