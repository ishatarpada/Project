<?php
include 'config.php';
session_start();
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cartItemCount = count($_SESSION['cart']);
} else {
    $cartItemCount = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>

    <!-- css bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- css for large screen -->
    <link rel="stylesheet" href="Style/media-query.css">

</head>

<body>

    <!-- content -->

    <!-- main section -->
    <div class="container-fluid main-container p-0 mb-5">

        <!-- background - image -->
        <div class="banner-img"></div>

        <!-- header section -->
        <div class="header-container bg-transparent p-2">
            <nav class="navbar navbar-expand-xl">
                <div class="container-fluid p-0 justify-content-between">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-animation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <a class="navbar-brand fw-bold text-light logo-name" href="index.php">
                        <img src="Assests/course.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                        MyCourses.io
                    </a>
                    <div class="phoneIcons mx-auto mt-2 d-flex justify-content-center align-items-center">
                        <!-- Notification Bell Icon -->
                        <a href="notification.php" class="btn btn-transparent text-decoration-none text-secondary fw-bolder p-1">
                            <i class="bi bi-bell fs-4 me-1"></i>
                        </a>
                        <!-- cart icon -->
                        <a href="cart.php" class="btn btn-transparent text-center text-decoration-none text-secondary fw-bolder p-1">
                            <i class="bi bi-cart fs-3 me-2 position-relative">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger" style="padding: 4px 8px;">
                                    <?php if ($cartItemCount > 0) : ?>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger" style="padding: 5px 8px;">
                                            <?php echo $cartItemCount; ?>
                                            <span class="visually-hidden">items in cart</span>
                                        </span>
                                    <?php endif; ?>
                                    <span class="visually-hidden">items in cart</span>
                                </span>
                            </i>
                        </a>
                        <!-- Search Icon -->
                        <a href="search.html" class="btn btn-transparent text-decoration-none text-secondary fw-bolder p-1">
                            <i class="bi bi-search fs-4 me-1"></i>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarCollapse">

                        <!-- dropdown menu -->
                        <ul class="navbar-nav navbar-categary mx-auto mb-2 mb-lg-0 mx-lg-4 fs-5">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle rounded menu-name fw-bold px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-ui-radios-grid me-2"></i>
                                    <span class="me-1">Category</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu dropend w-100 p-0">
                                        <a href="#" data-bs-toggle="dropdown" class="dropdown-item dropdown-toggle d-flex justify-content-center align-items-center">
                                            <div class="fw-bold ms-0 me-auto">
                                                Design
                                                <p class="fw-normal">All About website Design of Course </p>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        illustration
                                                        <p class="fw-normal">How to be great illustrator </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        Graphic Design
                                                        <p class="fw-normal">Make more benefits from Design </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        UI/UX Design
                                                        <p class="fw-normal">Make Design for website and apps </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend w-100 p-0">
                                        <a href="#" data-bs-toggle="dropdown" class="dropdown-item dropdown-toggle d-flex justify-content-center align-items-center">
                                            <div class="fw-bold ms-0 me-auto">
                                                programming
                                                <p class="fw-normal">Website and Mobile Programming</p>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        illustration
                                                        <p class="fw-normal">How to be great illustrator </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        Graphic Design
                                                        <p class="fw-normal">Make more benefits from Design </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        UI/UX Design
                                                        <p class="fw-normal">Make Design for website and apps </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend w-100 p-0">
                                        <a href="#" data-bs-toggle="dropdown" class="dropdown-item dropdown-toggle d-flex justify-content-center align-items-center">
                                            <div class="fw-bold ms-0 me-auto">
                                                Business & Marketing
                                                <p class="fw-normal">Website and Mobile Programming</p>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu sub-menu ">
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        illustration
                                                        <p class="fw-normal">How to be great illustrator </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        Graphic Design
                                                        <p class="fw-normal">Make more benefits from Design </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        UI/UX Design
                                                        <p class="fw-normal">Make Design for website and apps </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend w-100 p-0">
                                        <a href="#" data-bs-toggle="dropdown" class="dropdown-item dropdown-toggle d-flex justify-content-center align-items-center">
                                            <div class="fw-bold ms-0 me-auto">
                                                Photos & Video
                                                <p class="fw-normal">Website and Mobile Programming</p>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        illustration
                                                        <p class="fw-normal">How to be great illustrator </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        Graphic Design
                                                        <p class="fw-normal">Make more benefits from Design </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        UI/UX Design
                                                        <p class="fw-normal">Make Design for website and apps </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend w-100 p-0">
                                        <a href="#" data-bs-toggle="dropdown" class="dropdown-item dropdown-toggle d-flex justify-content-center align-items-center">
                                            <div class="fw-bold ms-0 me-auto">
                                                Writing
                                                <p class="fw-normal">Website and Mobile Programming</p>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        illustration
                                                        <p class="fw-normal">How to be great illustrator </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        Graphic Design
                                                        <p class="fw-normal">Make more benefits from Design </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">
                                                    <div class="fw-bold me-3">
                                                        UI/UX Design
                                                        <p class="fw-normal">Make Design for website and apps </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>


                        <!-- search box -->
                        <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center search-container mx-auto">
                            <div class="nav-item w-100">
                                <form class="position-relative">
                                    <input class="form-control pe-5 bg-transparent text-light" type="search" placeholder="Search" aria-label="Search">
                                    <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                                        <i class="bi bi-search fs-6 "></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- cart and notification and account icon -->
                        <div class="icons mx-auto mb-2 mb-lg-0 mx-lg-4 my-2 d-flex justify-content-center align-items-center">

                            <p class="m-0 d-flex align-items-center">
                                <a href="notification.php" class="text-decoration-none text-light me-3 iconBtn"><i class="bi bi-bell-fill fs-4 me-1"></i><span class="name fw-semibold">Notification</span>
                                </a>
                            </p>
                            <p class="m-0 d-flex align-items-center">
                                <a href="cart.php" class="text-decoration-none text-light me-3 iconBtn">
                                    <i class="bi bi-cart fs-3 me-2 position-relative">
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger" style="padding: 4px 8px;">
                                            <?php if ($cartItemCount > 0) : ?>
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger" style="padding: 5px 8px;">
                                                    <?php echo $cartItemCount; ?>
                                                    <span class="visually-hidden">items in cart</span>
                                                </span>
                                            <?php endif; ?>
                                            <span class="visually-hidden">items in cart</span>
                                        </span>
                                    </i>
                                </a>
                            </p>
                            <p class="m-0 d-flex align-items-center"><a href="login.html" class="text-decoration-none text-light me-3 iconBtn"><i class="bi bi-person-circle fs-4 me-1"></i><span class="name fw-semibold">Account</span>
                                </a></p>
                        </div>

                        <!-- user-profile -->
                        <div class="dropdown user-info ms-1 ms-lg-0 me-2 rounded-circle">
                            <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                if (isset($_SESSION['username'])) {
                                    // Check if the user has an image set in the database
                                    $username = $_SESSION['username'];
                                    $sql = "SELECT profile_img FROM user_registration WHERE user_name = '{$username}'";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result && mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        $avatar = $row['profile_img'];
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
                                            <?php
                                            if (isset($avatar)) {
                                                echo '<img class="avatar-img rounded-circle" src="' . $avatar . '" alt="avatar" height="50px" width="50px">';
                                            } else {
                                                echo '<img class="avatar-img rounded-circle" src="Assests/admin.jpg" alt="avatar" height="50px" width="50px">';
                                            }
                                            ?>
                                        </div>
                                        <div>
                                            <?php
                                            if (isset($_SESSION["username"])) {
                                                echo '<a class="h6 text-decoration-none fw-bold fs-5" href="#">' . $_SESSION["username"] . '</a>';
                                            } else {
                                                echo '<a class="h6 text-decoration-none fw-bold fs-5" href="#">Lori Stamen</a>';
                                            }
                                            ?>

                                            <?php
                                            if (isset($_SESSION["email"])) {
                                                echo '<a class="h6 text-decoration-none" href="#">' . $_SESSION["email"] . '</a>';
                                            } else {
                                                echo '<a class="h6 text-decoration-none" href="#">Loristamen@gmail.com</a>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="All-course.php"><i class="bi bi-laptop me-4"></i>My
                                        Courses</a>
                                </li>
                                <li><a class="dropdown-item" href="cart.php"><i class="bi bi-cart fa-fw me-4"></i>My
                                        Cart</a>
                                </li>
                                <li><a class="dropdown-item" href="wishlist-course.php"><i class="bi bi-heart wishlistBtn me-4" fa-fw me-4"></i>Wishlist</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="profile.php"><i class="bi bi-person fa-fw me-4"></i>Edit
                                        Profile</a>
                                </li>
                                <li><a class="dropdown-item" href="payment.php"><i class="bi bi-gear fa-fw me-4"></i>Account
                                        Settings</a>
                                </li>
                                <li><a class="dropdown-item" href="notification.php"><i class="bi bi-bell fa-fw me-4"></i>notification</a>
                                </li>
                                <li><a class="dropdown-item" href="Pricing.php"><i class="bi bi-wallet-fill fa-fw me-4"></i>Pricing</a>
                                </li>
                                <li><a class="dropdown-item" href="help.php"><i class="bi bi-info-circle fa-fw me-4"></i>Help</a>
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
            </nav>
        </div>

        <!-- banner section -->
        <div class="banner-content container w-75">
            <h1 class="mb-3 display-3 text-light fw-bold">What do you want to learn?</h1>
            <p class="mb-3 fs-3  fw-medium text-light">Grow your skill with the most reliable online courses and
                certifications</p>
        </div>

        <!-- search box -->
        <div class="container search-section bg-body-tertiary py-2 mt-4 border-rounded">
            <div class="row py-3">
                <div class="col-lg-4  my-auto">
                    <form action="#">
                        <input class="form-control pe-5 bg-transparent w-100 mx-auto" type="search" placeholder="Find courses, skills, software, etc" aria-label="Search">
                    </form>
                </div>
                <div class="col-lg-3 my-auto categories ">
                    <form action="#">
                        <select class="form-select mx-auto w-100 bg-transparent" aria-label="select example">
                            <option selected>Categories</option>
                            <option value="development" id="development">Development</option>
                            <option value="design" id="design">Design</option>
                            <option value="marketing" id="marketing">Marketing</option>
                            <option value="IT & software" id="IT & Software">IT & Software</option>
                            <option value="maths & Logic" id="maths">Maths & Logic</option>
                            <option value="AI" id="ai">AI</option>
                        </select>
                    </form>
                </div>
                <div class="col-lg-3 my-auto topics">
                    <select class="form-select mx-auto w-100 bg-transparent" aria-label="select example">
                        <option selected>Topics</option>
                        <option value="HTML_CSS_JAVASCRIPT" class="development">HTML , CSS ,
                            JAVASCRIPT</option>
                        <option value="Python" class="development">Python</option>
                        <option value="Ruby" class="development">Ruby</option>
                        <option value="Node.js" class="development">Node.js</option>
                        <option value="Rails" class="development">Rails</option>
                        <option value="React-js" class="development">React-js</option>
                        <option value="Angular.js" class="development">Angular.js</option>
                        <option value="Vue.js" class="development">Vue.js</option>
                        <option value="dJango" class="development">dJango</option>
                        <option value="Flask" class="development">Flask</option>
                        <option value="Swift" class="development">Swift</option>
                        <option value="Objective-C" class="development">Objective-C</option>
                        <option value="Java/Kotlin" class="development">Java/Kotlin</option>
                        <option value="Xamarin" class="development">Xamarin</option>
                        <option value="React-native" class="development">React-native</option>
                        <option value="Firebase" class="development">Firebase</option>
                        <option value="Realm" class="development">Realm</option>
                        <option value="SQLite" class="development">SQlite</option>
                        <option value="PostgreSQL" class="development">PostgreSQL</option>
                        <option value="MySQL" class="development">SQlite</option>
                        <option value="Xamarin" class="development">Xamarin</option>
                        <option value="UI/UX" class="design">UI/UX</option>
                        <option value="Color Theory" class="design">Color Theory</option>
                        <option value="adobeXD" class="design">AdobeXD</option>
                        <option value="sketch" class="design">Sketch</option>
                        <option value="Figma" class="design">Figma</option>
                        <option value="Networking Basics" class="IT & Software">Networking Basics
                        </option>
                        <option value="Cloud Computing" class="IT & Software">Cloud Computing
                        </option>
                        <option value="sql" class="IT & Software">sql</option>
                        <option value="MongoDb" class="IT & Software">MongoDb</option>
                        <option value="version control (GIT/SVN)" class="IT & Software">version
                            control (GIT/SVN)</option>
                        <option value="SDLC" class="IT & Software">SDLC</option>
                        <option value="CI/CD" class="IT & Software">Continuous
                            Integration/Continuous Deployment (CI/CD)</option>
                        <option value="Agile Methodologies" class="IT & Software">Agile
                            Methodologies</option>
                        <option value="Algorithms and Data Structures" class="maths">Algorithms and
                            Data Structures</option>
                        <option value="Discrete Mathematics" class="maths">Discrete Mathematics
                        </option>
                        <option value="Computational Complexity" class="maths">Computational
                            Complexity</option>
                        <option value="Logic Gates and Boolean Algebra" class="maths">Logic Gates
                            and Boolean Algebra</option>
                        <option value="Probability and Statistics" class="maths">Probability and
                            Statistics</option>
                        <option value="Machine Learning Basics" class="ai">Machine Learning Basics
                        </option>
                        <option value="Neural Networks" class="ai">Neural Networks</option>
                        <option value="NLP" class="ai">Natural Language Processing (NLP)</option>
                        <option value="Computer Vision" class="ai">Computer Vision</option>
                        <option value="AI Ethics and Bias" class="ai">AI Ethics and Bias</option>
                    </select>
                </div>
                <div class="col-lg-2 my-auto search-btn d-flex justify-content-center align-items-center">
                    <button type="button" class="btn fw-bolder fs-5">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Continue Watching section  -->
    <div class="continue-section my-3 mx-auto">
        <div class="continue-title text-start">
            <p class="fw-bold fs-2 m-0">Complete Your Course</p>
            <p class="fw-medium text-secondary">We know the best things for You.Top picks for You.</p>
        </div>
        <div class="d-flex flex-nowrap p-0 continue-watching">
            <div class="continue-watching-part m-1 p-1">
                <div class="continue-img position-relative">
                    <a href="unpaid-offline.php" class="text-decoration-none">
                        <img src="Assests/continue-img-1.jpg" alt="" class="border rounded-2 position-absolute top-0 start-0" height="100%" width="100%">
                        <i class="bi bi-three-dots-vertical fs-5 fw-bold text-light position-absolute top-0 mt-1 me-2 end-0"></i>
                        <div class="progress position-absolute bottom-0 start-0 w-100" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                            <div class="progress-bar bg-danger w-75 p-0"></div>
                        </div>
                    </a>
                </div>
                <div class="continue-text my-2 px-3">
                    <a href="unpaid-offline.php" class="text-decoration-none text-dark">
                        <div class="continue-title p-0">
                            <p class="fw-bold fs-5 p-0 m-0 lh-base">Java Programming Beginner</p>
                        </div>
                        <div class="continue-instructor d-flex py-0 px-3 pt-1">
                            <i class="bi bi-person-circle me-3 my-0"></i>
                            <p class="m-0 fw-medium text-secondary">Kitani Studio</p>
                        </div>
                        <div class="completed-text px-2 mt-1">
                            <p class="fw-normal">4/10 Videos Completed</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="continue-watching-part m-1 p-1">
                <a href="paid-offline.php" class="text-decoration-none">
                    <div class="continue-img position-relative">
                        <img src="Assests/continue-img-2.webp" alt="" class="border rounded-2 position-absolute top-0 start-0" height="100%" width="100%">
                        <i class="bi bi-three-dots-vertical fs-5 fw-bold text-light position-absolute top-0 mt-1 me-2 end-0"></i>
                        <div class="progress position-absolute bottom-0 start-0 w-100" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                            <div class="progress-bar bg-danger w-50 p-0"></div>
                        </div>
                    </div>
                </a>
                <div class="continue-text my-2 px-3">
                    <a href="paid-offline.php" class="text-decoration-none text-dark">
                        <div class="continue-title p-0">
                            <p class="fw-bold fs-5 p-0 m-0 lh-base">Swift Programming Beginner</p>
                        </div>
                        <div class="continue-instructor d-flex py-0 px-3 pt-1">
                            <i class="bi bi-person-circle me-3 my-0"></i>
                            <p class="m-0 fw-medium text-secondary">Kitani Studio</p>
                        </div>
                        <div class="completed-text px-2 mt-1">
                            <p class="fw-normal">4/10 Videos Completed</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="continue-watching-part m-1 p-1">
                <a href="unpaid-offline.php" class="text-decoration-none">
                    <div class="continue-img position-relative">
                        <img src="Assests/continue-img-3.jpg" alt="" class="border rounded-2 position-absolute top-0 start-0" height="100%" width="100%">
                        <i class="bi bi-three-dots-vertical fs-5 fw-bold text-light position-absolute top-0 mt-1 me-2 end-0"></i>
                        <div class="progress position-absolute bottom-0 start-0 w-100" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                            <div class="progress-bar bg-danger w-25 p-0"></div>
                        </div>
                    </div>
                </a>
                <div class="continue-text my-2 px-3">
                    <a href="unpaid-offline.php" class="text-decoration-none text-dark">
                        <div class="continue-title p-0">
                            <p class="fw-bold fs-5 p-0 m-0 lh-base">Wordpress for Beginner</p>
                        </div>
                        <div class="continue-instructor d-flex py-0 px-3 pt-1">
                            <i class="bi bi-person-circle me-3 my-0"></i>
                            <p class="m-0 fw-medium text-secondary">Kitani Studio</p>
                        </div>
                        <div class="completed-text px-2 mt-1">
                            <p class="fw-normal">4/10 Videos Completed</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="continue-watching-part m-1 p-1">
                <a href="paid-offline.php" class="text-decoration-none">
                    <div class="continue-img position-relative">
                        <img src="Assests/continue-img-1.jpg" alt="" class="border rounded-2 position-absolute top-0 start-0" height="100%" width="100%">
                        <i class="bi bi-three-dots-vertical fs-5 fw-bold text-light position-absolute top-0 mt-1 me-2 end-0"></i>
                        <div class="progress position-absolute bottom-0 start-0 w-100" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                            <div class="progress-bar bg-danger w-75 p-0"></div>
                        </div>
                    </div>
                </a>
                <div class="continue-text my-2 px-3">
                    <a href="paid-offline.php" class="text-decoration-none text-dark">
                        <div class="continue-title p-0">
                            <p class="fw-bold fs-5 p-0 m-0 lh-base">Java Programming Beginner</p>
                        </div>
                        <div class="continue-instructor d-flex py-0 px-3 pt-1">
                            <i class="bi bi-person-circle me-3 my-0"></i>
                            <p class="m-0 fw-medium text-secondary">Kitani Studio</p>
                        </div>
                        <div class="completed-text px-2 mt-1">
                            <p class="fw-normal">4/10 Videos Completed</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- categories section -->
    <div class="container-fluid my-4 courses-section" style="width: 95%; margin: auto;">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fs-1 fw-bold">Most Popular Courses</h2>
                <p class="fw-medium fs-5 text-secondary m-0">We know the best things for You. Top picks for You.</p>
            </div>
        </div>

        <!-- Tabs START -->
        <div class="course-categories">
            <ul class="nav nav-pills d-flex justify-content-between flex-nowrap mb-4 p-3 bg-success bg-opacity-10 rounded course-list" id="course-pills-tab" role="tablist" style="width: 95%; margin: auto;">
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 my-0 me-sm-5 rounded" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-1" type="button" role="tab" aria-controls="course-pills-tabs-1" aria-selected="true" style="background-color: #146659;">Mobile App Development</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 my-0 me-sm-5 rounded" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-2" type="button" role="tab" aria-controls="course-pills-tabs-2" aria-selected="false" tabindex="-1" style="background-color: #146659;">Cyber Security</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 my-0 me-sm-5 rounded" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-3" type="button" role="tab" aria-controls="course-pills-tabs-3" aria-selected="false" tabindex="-1" style="background-color: #146659;">Artificial Intelligence</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 my-0 me-sm-5 rounded" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-4" type="button" role="tab" aria-controls="course-pills-tabs-4" aria-selected="false" tabindex="-1" style="background-color: #146659;">DevOps</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 my-0 me-sm-5 rounded" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-5" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-5" type="button" role="tab" aria-controls="course-pills-tabs-5" aria-selected="false" tabindex="-1" style="background-color: #146659;">Software Developer</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 my-0 me-sm-5 rounded" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-6" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-6" type="button" role="tab" aria-controls="course-pills-tabs-6" aria-selected="false" tabindex="-1" style="background-color: #146659;">Web Developer</button>
                </li>
                <!-- Tab item -->
                <li class="text-light me-2 text-nowrap shadow-none border-0 my-0 me-sm-5 rounded" role="presentation">
                    <button class="text-light py-2 px-3 border-0 rounded fs-5" id="course-pills-tab-7" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-7" type="button" role="tab" aria-controls="course-pills-tabs-7" aria-selected="false" tabindex="-1" style="background-color: #146659;">Computing</button>
                </li>
            </ul>
        </div>
        <!-- Tabs END -->

        <!-- Tabs content START -->
        <div class="tab-content" id="course-pills-tabContent">
            <!-- Content START -->
            <div class="tab-pane fade show active" id="course-pills-tabs-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
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
                                    $video_url = $row['video_url'];

                                    // Check if the user is logged in
                                    if (isset($_SESSION['user_id'])) {
                                        // User is logged in, proceed with the course purchase check
                                        $user_id = $_SESSION['user_id']; // Get the user ID from the session
                                        $course_id = $row['course_ID']; // Assuming $row contains the course details

                                        // Query to check if the course is purchased
                                        $query = "SELECT is_purchased FROM student_course WHERE user_id = ? AND course_ID = ?";
                                        $stmt = $conn->prepare($query);
                                        $stmt->bind_param("ii", $user_id, $course_id);
                                        $stmt->execute();
                                        $purchase_result = $stmt->get_result();
                                        $purchase_row = $purchase_result->fetch_assoc();

                                        // Check if purchase_row is not null before accessing is_purchased
                                        $is_purchased = $purchase_row && $purchase_row['is_purchased'] == 1;

                                        // Set the URL based on whether the course is purchased
                                        $url = $is_purchased ? "course_video.php?id=$course_id" : "buy_course_video.php?id=$course_id";
                                    } else {
                                        // User is not logged in, redirect to the buy course video page
                                        $url = "buy_course_video.php?id=$course_ID";
                                    }
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="<?php echo $url; ?>" class="text-decoration-none">
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
                                                <a href="<?php echo $url; ?>" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo htmlspecialchars($course_title); ?>
                                                    </p>
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
                <div class="courses-section my-2">
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
                                    $video_url = $row['video_url'];

                                    // Check if the user is logged in
                                    if (isset($_SESSION['user_id'])) {
                                        // User is logged in, proceed with the course purchase check
                                        $user_id = $_SESSION['user_id']; // Get the user ID from the session
                                        $course_id = $row['course_ID']; // Assuming $row contains the course details

                                        // Query to check if the course is purchased
                                        $query = "SELECT is_purchased FROM student_course WHERE user_id = ? AND course_ID = ?";
                                        $stmt = $conn->prepare($query);
                                        $stmt->bind_param("ii", $user_id, $course_id);
                                        $stmt->execute();
                                        $purchase_result = $stmt->get_result();
                                        $purchase_row = $purchase_result->fetch_assoc();

                                        // Check if purchase_row is not null before accessing is_purchased
                                        $is_purchased = $purchase_row && $purchase_row['is_purchased'] == 1;

                                        // Set the URL based on whether the course is purchased
                                        $url = $is_purchased ? "course_video.php?id=$course_id" : "buy_course_video.php?id=$course_id";
                                    } else {
                                        // User is not logged in, redirect to the buy course video page
                                        $url = "buy_course_video.php?id=$course_ID";
                                    }
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="<?php echo $url; ?>" class="text-decoration-none">
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
                                                <a href="<?php echo $url; ?>" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo htmlspecialchars($course_title); ?>
                                                    </p>
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
                <div class="courses-section my-2">
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
                                    $video_url = $row['video_url'];

                                    // Check if the user is logged in
                                    if (isset($_SESSION['user_id'])) {
                                        // User is logged in, proceed with the course purchase check
                                        $user_id = $_SESSION['user_id']; // Get the user ID from the session
                                        $course_id = $row['course_ID']; // Assuming $row contains the course details

                                        // Query to check if the course is purchased
                                        $query = "SELECT is_purchased FROM student_course WHERE user_id = ? AND course_ID = ?";
                                        $stmt = $conn->prepare($query);
                                        $stmt->bind_param("ii", $user_id, $course_id);
                                        $stmt->execute();
                                        $purchase_result = $stmt->get_result();
                                        $purchase_row = $purchase_result->fetch_assoc();

                                        // Check if purchase_row is not null before accessing is_purchased
                                        $is_purchased = $purchase_row && $purchase_row['is_purchased'] == 1;

                                        // Set the URL based on whether the course is purchased
                                        $url = $is_purchased ? "course_video.php?id=$course_id" : "buy_course_video.php?id=$course_id";
                                    } else {
                                        // User is not logged in, redirect to the buy course video page
                                        $url = "buy_course_video.php?id=$course_ID";
                                    }
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="<?php echo $url; ?>" class="text-decoration-none">
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
                                                <a href="<?php echo $url; ?>" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo htmlspecialchars($course_title); ?>
                                                    </p>
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
                <div class="courses-section my-2">
                    <div class="course-video rounded container-fluid">
                        <div class="course-video-boxs rounded py-2 d-flex flex-nowrap mx-auto justify-content-between">
                            <?php
                            $sql = "SELECT * FROM course WHERE course_status = 'approved' AND course_category = 'DevOps'";
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
                                    $video_url = $row['video_url'];

                                    // Check if the user is logged in
                                    if (isset($_SESSION['user_id'])) {
                                        // User is logged in, proceed with the course purchase check
                                        $user_id = $_SESSION['user_id']; // Get the user ID from the session
                                        $course_id = $row['course_ID']; // Assuming $row contains the course details

                                        // Query to check if the course is purchased
                                        $query = "SELECT is_purchased FROM student_course WHERE user_id = ? AND course_ID = ?";
                                        $stmt = $conn->prepare($query);
                                        $stmt->bind_param("ii", $user_id, $course_id);
                                        $stmt->execute();
                                        $purchase_result = $stmt->get_result();
                                        $purchase_row = $purchase_result->fetch_assoc();

                                        // Check if purchase_row is not null before accessing is_purchased
                                        $is_purchased = $purchase_row && $purchase_row['is_purchased'] == 1;

                                        // Set the URL based on whether the course is purchased
                                        $url = $is_purchased ? "course_video.php?id=$course_id" : "buy_course_video.php?id=$course_id";
                                    } else {
                                        // User is not logged in, redirect to the buy course video page
                                        $url = "buy_course_video.php?id=$course_ID";
                                    }
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="<?php echo $url; ?>" class="text-decoration-none">
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
                                                <a href="<?php echo $url; ?>" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo htmlspecialchars($course_title); ?>
                                                    </p>
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
            <div class="tab-pane fade show" id="course-pills-tabs-5" role="tabpanel" aria-labelledby="course-pills-tab-5">
                <div class="courses-section my-2">
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
                                    $video_url = $row['video_url'];

                                    // Check if the user is logged in
                                    if (isset($_SESSION['user_id'])) {
                                        // User is logged in, proceed with the course purchase check
                                        $user_id = $_SESSION['user_id']; // Get the user ID from the session
                                        $course_id = $row['course_ID']; // Assuming $row contains the course details

                                        // Query to check if the course is purchased
                                        $query = "SELECT is_purchased FROM student_course WHERE user_id = ? AND course_ID = ?";
                                        $stmt = $conn->prepare($query);
                                        $stmt->bind_param("ii", $user_id, $course_id);
                                        $stmt->execute();
                                        $purchase_result = $stmt->get_result();
                                        $purchase_row = $purchase_result->fetch_assoc();

                                        // Check if purchase_row is not null before accessing is_purchased
                                        $is_purchased = $purchase_row && $purchase_row['is_purchased'] == 1;

                                        // Set the URL based on whether the course is purchased
                                        $url = $is_purchased ? "course_video.php?id=$course_id" : "buy_course_video.php?id=$course_id";
                                    } else {
                                        // User is not logged in, redirect to the buy course video page
                                        $url = "buy_course_video.php?id=$course_ID";
                                    }
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="<?php echo $url; ?>" class="text-decoration-none">
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
                                                <a href="<?php echo $url; ?>" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo htmlspecialchars($course_title); ?>
                                                    </p>
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
            <div class="tab-pane fade show" id="course-pills-tabs-6" role="tabpanel" aria-labelledby="course-pills-tab-6">
                <div class="courses-section my-2">
                    <div class="course-video rounded container-fluid">
                        <div class="course-video-boxs rounded py-2 d-flex flex-nowrap mx-auto justify-content-between">
                            <?php
                            $sql = "SELECT * FROM course WHERE course_status = 'approved' AND course_category = 'Web Developer'";
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
                                    $video_url = $row['video_url'];

                                    // Check if the user is logged in
                                    if (isset($_SESSION['user_id'])) {
                                        // User is logged in, proceed with the course purchase check
                                        $user_id = $_SESSION['user_id']; // Get the user ID from the session
                                        $course_id = $row['course_ID']; // Assuming $row contains the course details

                                        // Query to check if the course is purchased
                                        $query = "SELECT is_purchased FROM student_course WHERE user_id = ? AND course_ID = ?";
                                        $stmt = $conn->prepare($query);
                                        $stmt->bind_param("ii", $user_id, $course_id);
                                        $stmt->execute();
                                        $purchase_result = $stmt->get_result();
                                        $purchase_row = $purchase_result->fetch_assoc();

                                        // Check if purchase_row is not null before accessing is_purchased
                                        $is_purchased = $purchase_row && $purchase_row['is_purchased'] == 1;

                                        // Set the URL based on whether the course is purchased
                                        $url = $is_purchased ? "course_video.php?id=$course_id" : "buy_course_video.php?id=$course_id";
                                    } else {
                                        // User is not logged in, redirect to the buy course video page
                                        $url = "buy_course_video.php?id=$course_ID";
                                    }
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="<?php echo $url; ?>" class="text-decoration-none">
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
                                                <a href="<?php echo $url; ?>" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo htmlspecialchars($course_title); ?>
                                                    </p>
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
            <div class="tab-pane fade show" id="course-pills-tabs-7" role="tabpanel" aria-labelledby="course-pills-tab-7">
                <div class="courses-section my-2">
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
                                    $video_url = $row['video_url'];

                                    // Check if the user is logged in
                                    if (isset($_SESSION['user_id'])) {
                                        // User is logged in, proceed with the course purchase check
                                        $user_id = $_SESSION['user_id']; // Get the user ID from the session
                                        $course_id = $row['course_ID']; // Assuming $row contains the course details

                                        // Query to check if the course is purchased
                                        $query = "SELECT is_purchased FROM student_course WHERE user_id = ? AND course_ID = ?";
                                        $stmt = $conn->prepare($query);
                                        $stmt->bind_param("ii", $user_id, $course_id);
                                        $stmt->execute();
                                        $purchase_result = $stmt->get_result();
                                        $purchase_row = $purchase_result->fetch_assoc();

                                        // Check if purchase_row is not null before accessing is_purchased
                                        $is_purchased = $purchase_row && $purchase_row['is_purchased'] == 1;

                                        // Set the URL based on whether the course is purchased
                                        $url = $is_purchased ? "course_video.php?id=$course_id" : "buy_course_video.php?id=$course_id";
                                    } else {
                                        // User is not logged in, redirect to the buy course video page
                                        $url = "buy_course_video.php?id=$course_ID";
                                    }
                            ?>
                                    <div class="video-box rounded mx-3 shadow">
                                        <form action="manage_cart.php" method="post">
                                            <div class="video-img position-relative card-header">
                                                <a href="<?php echo $url; ?>" class="text-decoration-none">
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
                                                <a href="<?php echo $url; ?>" class="text-decoration-none text-dark">
                                                    <p class="course-name m-0 fw-bolder px-3 pt-1 fs-5" name="course_name">
                                                        <?php echo htmlspecialchars($course_title); ?>
                                                    </p>
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

    <!-- instructor section -->
    <div class="instructor-section container my-5">
        <div class="instructor-title mx-3">
            <p class="fw-bold fs-2">Popular Instructor</p>
            <p class="fw-medium fs-5 text-secondary">We know the best things for You. Top picks for You.</p>

        </div>
        <div class="instructor-info d-flex">
            <div class="instructor-part mx-2 my-1">
                <div class="instructor position-relative">
                    <div class="instructor-img position-absolute">
                        <img src="Assests/Instructor-1.png" alt="" height="100%" width="100%">
                    </div>
                    <div class="instructor-name bg-transparent position-absolute top-0 start-0 text-center d-flex justify-content-center align-items-end">
                        <div>
                            <p class="fs-4 text-light fw-bold m-0">Alexander Bastian</p>
                            <p class="fw-medium text-light">Expert Mobile Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="instructor-part mx-2 my-1">
                <div class="instructor position-relative">
                    <div class="instructor-img position-absolute">
                        <img src="Assests/Instructor-2.png" alt="" height="100%" width="100%">
                    </div>
                    <div class="instructor-name bg-transparent position-absolute top-0 start-0 text-center d-flex justify-content-center align-items-end">
                        <div>
                            <p class="fs-4 text-light fw-bold m-0">Labie Carthaline</p>
                            <p class="fw-medium text-light">Marketing Specialist</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="instructor-part mx-2 my-1">
                <div class="instructor position-relative">
                    <div class="instructor-img position-absolute">
                        <img src="Assests/Instructor-3.png" alt="" height="100%" width="100%">
                    </div>
                    <div class="instructor-name bg-transparent position-absolute top-0 start-0 text-center d-flex justify-content-center align-items-end">
                        <div>
                            <p class="fs-4 text-light fw-bold m-0">Jonathan Doe</p>
                            <p class="fw-medium text-light">Financial Strategist</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="instructor-part mx-2 my-1">
                <div class="instructor position-relative">
                    <div class="instructor-img position-absolute">
                        <img src="Assests/Instructor-4.png" alt="" height="100%" width="100%">
                    </div>
                    <div class="instructor-name bg-transparent position-absolute top-0 start-0 text-center d-flex justify-content-center align-items-end">
                        <div>
                            <p class="fs-4 text-light fw-bold m-0">Kitani Sarasvati</p>
                            <p class="fw-medium text-light">Film Maker & Director</p>
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


    <!-- javascript link -->

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- js external link -->
    <script src="Script/main.js"></script>
    <script src="Script/wishlist.js"></script>

</body>

</html>