<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Course</title>

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- search css file -->
    <link rel="stylesheet" href="Style/search.css">

    <!-- Course css file -->
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

        <div class="course-header">
            <div class="course-sort mx-auto d-flex justify-content-between align-items-center flex-wrap mt-2">
                <div class="row sort-part-1 justify-content-between align-items-center mx-auto">
                    <div class="col-lg-3 col-md-3 my-2">
                        <form action="#">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All Related</option>
                                <option value="1">Programming</option>
                                <option value="2">Design</option>
                                <option value="3">Marketing</option>
                                <option value="3">Fiance</option>
                                <option value="3">UI/UX</option>
                                <option value="3">AI</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 my-2">
                        <form action="#">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All Duration</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 my-2">
                        <form action="#">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All Level</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 my-2">
                        <form action="#">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>English</option>
                                <option value="1">Hindi</option>
                                <option value="2">Tamil</option>
                                <option value="3">Gujarati</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="apply-btn sort-part-2 my-2">
                    <form action="#">
                        <button type="button" class="btn btn-danger px-2 w-100">Apply</button>
                    </form>
                </div>
            </div>

            <div class="course-filter mx-auto mt-2">
                <div class="row">
                    <div class="col-lg-8 my-2">
                        <p class="m-0 text-secondary-emphasis">Showing 2,312 results of Kitani Studio</p>
                    </div>
                    <div class="col-lg-3 my-2">
                        <form action="#">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Top Rated</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <div class="course-title p-2">
                <p class="fs-3 fw-bold m-0">Top Result</p>
                <span class="text-secondary">We Know best things for you . Top Pics For you</span>
            </div>
        </div>

        <div class="all-courses-section mx-auto mt-4">
            <div class="course-video my-3 container-fluid">
                <div class="course-video-boxs py-2 d-flex mx-auto">
                    <div class="video-box  mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/vue-js.jpg" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                        </div>
                        <div class="video-content  my-2">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">VUE JS SCRATCH COURSE</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>

                        </div>
                    </div>
                    <div class="video-box   mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/ui-ux.jpg" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                        </div>
                        <div class="video-content  my-2 px-3 pt-1">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">UI DESIGN FOR BEGINNERS</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>
                        </div>
                    </div>
                    <div class="video-box   mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/react-native.jpg" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                        </div>
                        <div class="video-content  my-2 px-3 pt-1">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">MOBILE DEV REACT NATIVE</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>
                        </div>
                    </div>
                    <div class="video-box   mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/web-devlopment.jpg" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                            <div class="progress position-absolute bottom-0 start-0 w-100" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                <div class="progress-bar bg-danger w-100 p-0"></div>
                            </div>
                        </div>
                        <div class="video-content  my-2 px-3 pt-1">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">WEBSITE DEV ZERO TO HERO</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="course-video my-3 container-fluid">
                <div class="course-video-boxs py-2 d-flex mx-auto">
                    <div class="video-box  mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/swift.webp" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                        </div>
                        <div class="video-content  my-2">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">SWIFT Programming</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>

                        </div>
                    </div>
                    <div class="video-box   mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/java.jpg" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                            <div class="progress position-absolute bottom-0 start-0 w-100" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                <div class="progress-bar bg-danger w-50 p-0"></div>
                            </div>
                        </div>
                        <div class="video-content  my-2 px-3 pt-1">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">JAVA BEGINNERS</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>
                        </div>
                    </div>
                    <div class="video-box   mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/uber-clone.png" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                            <div class="progress position-absolute bottom-0 start-0 w-100" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                <div class="progress-bar bg-danger w-25 p-0"></div>
                            </div>
                        </div>
                        <div class="video-content  my-2 px-3 pt-1">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">MAKE UBER CLONE APP</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>
                        </div>
                    </div>
                    <div class="video-box   mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/wordpress.jpg" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                        </div>
                        <div class="video-content  my-2 px-3 pt-1">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">WORDPRESS COURSE</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="course-video my-3 container-fluid">
                <div class="course-video-boxs py-2 d-flex mx-auto">
                    <div class="video-box  mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/node-js.jpg" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                        </div>
                        <div class="video-content  my-2">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">Node-Js Programming</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>

                        </div>
                    </div>
                    <div class="video-box   mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/mongo-db.png" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                            <div class="progress position-absolute bottom-0 start-0 w-100" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                <div class="progress-bar bg-danger w-100 p-0"></div>
                            </div>
                        </div>
                        <div class="video-content  my-2 px-3 pt-1">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">Mongo-DB</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>
                        </div>
                    </div>
                    <div class="video-box   mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/react.png" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>

                        </div>
                        <div class="video-content  my-2 px-3 pt-1">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">React JS</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>


                        </div>
                    </div>
                    <div class="video-box   mx-2">
                        <div class="video-img  position-relative">
                            <img src="Assests/dot-net.jpg" alt="" class="border-0 position-absolute top-0" height=" 100%" width="100%">
                            <div class="menu-icon position-absolute rounded-circle top-0 end-0 m-2 p-1">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-three-dots-vertical"></i></a>
                            </div>
                            <div class="person-icon position-absolute end-0 bottom-0 rounded-circle p-1 m-3">
                                <a href="#" class="text-decoration-none text-light"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="heart-icon position-absolute top-0 start-0 rounded-circle py-1 px-2 m-2">
                                <a href="#" class="text-decoration-none text-danger"><i class="bi bi-heart-fill"></i></a>
                            </div>
                            <div class="progress position-absolute bottom-0 start-0 w-100" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                <div class="progress-bar bg-danger w-25 p-0"></div>
                            </div>
                        </div>
                        <div class="video-content  my-2 px-3 pt-1">
                            <p class="course-name  m-0 fw-bolder px-3 pt-1">Asp.net COURSE</p>
                            <div class="course-instructor  d-flex align-items-center m-0 py-0 px-3 pt-1">
                                <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                                <p class="instructor-name  fs-6 fw-medium my-0 py-0">Kitani Studio
                                </p>
                            </div>
                            <p class="course-info trending-course-info m-0 text-secondary px-3 pt-1">More than 8yr
                                Experience as Illustrator.
                                Learn
                                how to becoming
                                professional Illustrator Now...</p>
                            <div class="course-ratting trending-course-ratting d-flex m-0 py-0 px-3 pt-1">
                                <div class="rating-icon trending-rating-icon d-flex py-1">
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-fill me-1 text-warning"></i>
                                    <i class="bi bi-star-half me-1 text-warning"></i>
                                </div>
                                <p class="rating-ratio trending-rating-ratio py-1 my-0">
                                    (1.4K)
                                </p>
                            </div>
                            <p class="course-price trending-course-price fw-bold m-0 px-3 pt-1">$24.92 <del class="ms-2 text-secondary fw-normal">$32.90</del></p>

                        </div>
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