<?php
// session_start();
// session_destroy();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist Course</title>

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
    <div class="course-container mt-2">
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
                <li class="mx-2 text-center border-bottom border-danger border-3">
                    <a href="wishlist-course.php" class="text-decoration-none text-dark p-1 fw-bold fs-5 text-nowrap">Wishlist</a>
                </li>
                <li class="mx-2 text-center">
                    <a href="complted-video.php" class="text-decoration-none text-dark p-1 fw-bold fs-5 text-nowrap">Completed</a>
                </li>
            </ul>
        </div>

        <div class="course-filter container mx-auto my-2">
            <div class="row">
                <div class="col-lg-8 my-1">
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

        <div class="all-courses-section mx-auto my-2">
            <div class="course-video my-3 container-fluid">
                <div class="course-video-boxs py-2 d-flex flex-wrap container mx-auto">
                    <?php
                    if (isset($_SESSION['wishlist']) && isset($_SESSION['user_id']) && !empty($_SESSION['wishlist'])) {
                        foreach ($_SESSION['wishlist'] as $key => $item) {
                    ?>
                            <div class="video-box m-2 rounded shadow" style="width: 350px;">
                                <form action="manage_cart.php" method="post">
                                    <div class="video-img  position-relative" style="height: 225px; width: 350px;">
                                        <img src="<?php echo htmlspecialchars($item['Item_Img']); ?>" alt="" class="border-0 position-absolute top-0 rounded" height=" 100%" width="100%">
                                        <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                            <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                        <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                            <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                                        </div>
                                        <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                            <button class="text-decoration-none text-danger btn btn-transparent m-0 p-0 border-0 outline-0 removeBtn" type="submit" name="removeBtn">
                                                <?php
                                                // Check if the item is already in the wishlist
                                                $heartIconClass = in_array($item['Item_ID'], array_column($_SESSION['wishlist'], 'Item_ID')) ? 'bi-heart-fill' : 'bi-heart';
                                                ?>
                                                <i class="bi <?php echo $heartIconClass; ?> fs-5"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="video-content  my-2">
                                        <p class="course-name  m-0 fw-bolder px-3 pt-1">
                                            <?php echo $item['Item_Name']; ?>
                                        </p>
                                        <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                            <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                            <p class="instructor-name  fs-6 fw-medium my-0 py-0">
                                                <?php echo $item['Item_channelName']; ?>
                                            </p>
                                        </div>
                                        <p class="course-info trending-course-info m-0 text-secondary px-3 pt-2">
                                            <?php echo $item['Item_description']; ?>
                                        </p>
                                        <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                            <div class="rating-icon trending-rating-icon d-flex py-1">
                                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                                <i class="bi bi-star-half me-1 text-warning"></i>
                                            </div>
                                            <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                                <?php echo $item['Item_ratting']; ?>
                                            </p>
                                        </div>
                                        <div class="course-price trending-course-price d-flex justify-content-start align-items-center fw-bold m-0 px-3 pt-1">
                                            <p class="m-0 fw-bold fs-4 me-2" style="color: #3dcbb1;">
                                                <?php echo $item['Item_prise']; ?>
                                            </p>
                                            <p class="m-0 text-center"><del>
                                                    <?php echo $item['Item_del_prise']; ?>
                                                </del>
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between px-2 mt-2">
                                            <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-clock text-danger me-2"></i><?php echo  $item['Item_time']; ?></span>
                                            <span class="h6 fw-light mb-0 fw-semibold"><i class="bi bi-table text-warning me-2"></i><?php echo $item['Item_total_lecture']; ?> lectures</span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="course_img" value="<?php echo htmlspecialchars($item['Item_Img']); ?>">
                                    <input type="hidden" name="course_name" value="<?php echo $item['Item_Name']; ?>">
                                    <input type="hidden" name="course_channel_name" value=" <?php echo $item['Item_channelName']; ?>">
                                    <input type="hidden" name="course_rating" value="<?php echo $item['Item_ratting']; ?>">
                                    <input type="hidden" name="course_prise" value="<?php echo $item['Item_prise']; ?>">
                                    <input type="hidden" name="del_prise" value="<?php echo $item['Item_del_prise']; ?>">
                                    <input type="hidden" name="course_time" value="<?php echo $item['Item_time']; ?>">
                                    <input type="hidden" name="total_lecture" value="<?php echo $item['Item_total_lecture']; ?>">
                                </form>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>


    <!-- join us section -->
    <div class="join-section container my-5">
        <div class="join-part container-fluid position-relative my-2">
            <div class="mask-img position-absolute end-0 top-0">
                <img src="Assests/Mask Group.png" alt="" width="100%" height="100%">
            </div>
            <div class="row join-content position-absolute w-100">
                <div class="col-lg-6 m-auto">
                    <p class="text-light fw-bold fs-3 m-0">Join and get amazing discount</p>
                    <p class="fw-bolder fs-6 m-0">With our responsive themes and mobile and desktop apps</p>
                </div>
                <div class="col-lg-3 m-auto">
                    <form class="position-relative bg-primary-subtle rounded my-4">
                        <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                        <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                            <i class="bi bi-search fs-6 text-light"></i>
                        </button>
                    </form>
                </div>
                <div class="col-lg-2 m-auto subscribeBtn">
                    <button type="button" class=" subscribe-button btn btn-secondary text-light border border-0">Subscribe</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="container-fluid mb-0 mt-5 py-5">
        <div class=" row footer-content my-2">
            <div class="col-lg-3 m-auto footer-logo">
                <div class="container-fluid justify-content-center align-items-center d-flex">
                    <a class="navbar-brand fw-bold mx-auto logo" href="#">
                        <img src="Assests/course.png" class="img-fluid me-2" alt="">
                        <span class="logo-name text-light fw-bolder">MyCourse.io</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-9 mx-auto footer-list">
                <div class="row p-2 align-items-center">
                    <div class="col-lg-5 mx-auto">
                        <ul class="m-auto p-0">
                            <li class="my-2 text-center"><a href="#" class="text-decoration-none text-light">Web
                                    Programming</a>
                            </li>
                            <li class="my-2 text-center"><a href="#" class="text-decoration-none text-light">Mobile
                                    Programming</a>
                            </li>
                            <li class="my-2 text-center"><a href="#" class="text-decoration-none text-light">Java
                                    Beginner</a></li>
                            <li class="my-2 text-center"><a href="#" class="text-decoration-none text-light">PHP
                                    Beginner</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mx-auto">
                        <ul class="m-auto p-0">
                            <li class="my-2 text-center"><a href="#" class="text-decoration-none text-light">Adobe
                                    Illustrator</a>
                            </li>
                            <li class="my-2 text-center"><a href="#" class="text-decoration-none text-light">Adobe
                                    Photoshop</a></li>
                            <li class="my-2 text-center"><a href="#" class="text-decoration-none text-light">Design
                                    Logo</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 mx-auto">
                        <ul class="m-auto p-0">
                            <li class="my-2 text-center"><a href="#" class="text-decoration-none text-light">Writing</a>
                            </li>
                            <li class="my-2 text-center"><a href="#" class="text-decoration-none text-light">Photography</a></li>
                            <li class="my-2 text-center"><a href="#" class="text-decoration-none text-light">Video
                                    Making</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="w-75 text-secondary mx-auto my-2">
        <div class="copyright-section">
            <div class="row container mx-auto mt-5">
                <div class="col-lg-9">
                    <p class="my-2 p-2">Copyright © MyCourse.io 2024. All Rights Reserved</p>
                </div>
                <div class="col-lg-3 justify-content-end">
                    <div class="footer-icon d-flex justify-content-end my-2">
                        <i class="bi bi-instagram me-3 p-2"></i>
                        <i class="bi bi-twitter me-3 p-2"></i>
                        <i class="bi bi-facebook me-3 p-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- js external link -->
    <script src="Script/main.js"></script>
    <script src="Script/wishlist.js"></script>

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>