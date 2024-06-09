<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personalization</title>

    <!-- css bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- account css style link -->
    <link rel="stylesheet" href="Style/account.css">

    <!-- model css style link -->
    <link rel="stylesheet" href="Style/model.css">

    <!-- header css style link -->
    <link rel="stylesheet" href="Style/header.css">

    <!-- css for large screen -->
    <link rel="stylesheet" href="Style/media-query.css">

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <!-- header section -->
    <?php
    include 'header.php';
    ?>

    <div class="account-container
     mt-2">
        <p class="fs-4 fw-bold text-center account text-info-emphasis">My Account</p>
        <div class="container-fluid">
            <div class="account-tabMenu d-flex justify-content-center
                align-items-center mt-1">
                <ul class="list-unstyled d-flex">
                    <li class="mx-3">
                        <a href="profile.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Profile</a>
                    </li>
                    <li class="mx-3">
                        <a href="personalization.php" class="text-decoration-none fs-5 text-dark fw-bold p-1  border-bottom border-danger border-3">Personalization</a>
                    </li>
                    <li class="mx-3">
                        <a href="payment.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Payment Methods</a>
                    </li>
                    <li class="mx-3">
                        <a href="payment-details.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Payment-history</a>
                    </li>
                    <li class="mx-3">
                        <a href="notification.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Notifications</a>
                    </li>
                    <li class="mx-3">
                        <a href="reminder.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Reminder</a>
                    </li>
                </ul>
            </div>

            <!-- explore course -->
            <div class="model-section bg-light">
                <div class="explore-title text-center fs-5 fw-bold pt-2 text-dark">
                    <p>Pick 3 Categories you Want to Explore</p>
                </div>
                <div class="container-fluid d-flex flex-wrap justify-content-center align-items-center mx-auto my-2">
                    <div class="explore-section m-1 position-relative explore-img rounded" id="explore-category">
                        <img src="Assests/programming.png" alt="" class="position-absolute top-0 start-0" height="100%" width="100%">
                        <div class="text-light fs-5 fw-bold position-absolute text-center bottom-0 explore-content w-75 p-0 m-2">
                            Programming</div>
                        <div class="check-icon position-absolute top-0 end-0 m-2" id="check-icon">
                            <a href="#" class="text-decoration-none"><i class="bi bi-check-circle-fill"></i></a>
                        </div>
                    </div>
                    <div class="explore-section m-1 position-relative explore-img rounded">
                        <img src="Assests/Design.png" alt="" class="position-absolute top-0 start-0" height="100%" width="100%">
                        <div class="text-light fs-5 fw-bold position-absolute text-center bottom-0 explore-content w-75 p-0 m-2">
                            Design</div>
                        <div class="check-icon position-absolute top-0 end-0 m-2">
                            <a href="#" class="text-decoration-none"><i class="bi bi-check-circle-fill"></i></a>
                        </div>
                    </div>
                    <div class="explore-section m-1 position-relative explore-img rounded">
                        <img src="Assests/Fiance.png" alt="" class="position-absolute top-0 start-0" height="100%" width="100%">
                        <div class="text-light fs-5 fw-bold position-absolute text-center bottom-0 explore-content w-75 p-0 m-2">
                            Fiance</div>
                        <div class="check-icon position-absolute top-0 end-0 m-2">
                            <a href="#" class="text-decoration-none"><i class="bi bi-check-circle-fill"></i></a>
                        </div>
                    </div>
                    <div class="explore-section m-1 position-relative explore-img rounded">
                        <img src="Assests/Marketing.png" alt="" class="position-absolute top-0 start-0" height="100%" width="100%">
                        <div class="text-light fs-5 fw-bold position-absolute text-center bottom-0 explore-content w-75 p-0 m-2">
                            Marketing</div>
                        <div class="check-icon position-absolute top-0 end-0 m-2">
                            <a href="#" class="text-decoration-none"><i class="bi bi-check-circle-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid d-flex flex-wrap justify-content-center align-items-center mx-auto my-2">
                    <div class="explore-section m-1 position-relative explore-img rounded">
                        <img src="Assests/Music.png" alt="" class="position-absolute top-0 start-0" height="100%" width="100%">
                        <div class="text-light fs-5 fw-bold position-absolute text-center bottom-0 explore-content w-75 p-0 m-2">
                            Music</div>
                        <div class="check-icon position-absolute top-0 end-0 m-2">
                            <a href="#" class="text-decoration-none"><i class="bi bi-check-circle-fill"></i></a>
                        </div>
                    </div>
                    <div class="explore-section m-1 position-relative explore-img rounded">
                        <img src="Assests/Writing.png" alt="" class="position-absolute top-0 start-0" height="100%" width="100%">
                        <div class="text-light fs-5 fw-bold position-absolute text-center bottom-0 explore-content w-75 p-0 m-2">
                            Writing</div>
                        <div class="check-icon position-absolute top-0 end-0 m-2">
                            <a href="#" class="text-decoration-none"><i class="bi bi-check-circle-fill"></i></a>
                        </div>
                    </div>
                    <div class="explore-section m-1 position-relative explore-img rounded">
                        <img src="Assests/Film.png" alt="" class="position-absolute top-0 start-0" height="100%" width="100%">
                        <div class="text-light fs-5 fw-bold position-absolute text-center bottom-0 explore-content w-75 p-0 m-2">
                            Film</div>
                        <div class="check-icon position-absolute top-0 end-0 m-2">
                            <a href="#" class="text-decoration-none"><i class="bi bi-check-circle-fill"></i></a>
                        </div>
                    </div>
                    <div class="explore-section m-1 position-relative explore-img rounded">
                        <img src="Assests/Photography.png" alt="" class="position-absolute top-0 start-0" height="100%" width="100%">
                        <div class="text-light fs-5 fw-bold position-absolute text-center bottom-0 explore-content w-75 p-0 m-2">
                            Photography</div>
                        <div class="check-icon position-absolute top-0 end-0 m-2">
                            <a href="#" class="text-decoration-none"><i class="bi bi-check-circle-fill"></i></a>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center my-2">
                    <button type="button" class="btn text-light px-5" id="okBtn">OK</button>
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

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>