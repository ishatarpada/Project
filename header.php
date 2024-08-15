<?php
session_start(); // Ensure session is started at the beginning

include 'config.php';

// Check if the user is logged in and set session variables
if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $_SESSION['role'] = 'student'; // Set the role to 'student'

    // Fetch user profile image from the database
    $sql = "SELECT * FROM user_registration WHERE user_name = '{$username}'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $avatar = !empty($row['profile_img']) ? $row['profile_img'] : 'Assests/admin.jpg';
    } else {
        $avatar = 'Assests/admin.jpg';
    }
} else {
    // If user is not logged in, set default values
    $username = 'Guest User';
    $email = 'guest@example.com';
    $avatar = 'Assests/admin.jpg';
}

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cartItemCount = count($_SESSION['cart']);
} else {
    $cartItemCount = 0; // Set default count to 0 if cart is empty or not set
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/header.css">
    <link rel="stylesheet" href="Style/media-query.css">
</head>

<body>
    <div class="header-container">
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid">
                <!-- Navbar Brand -->
                <a class="navbar-brand fw-bold logo-name" href="index.php">
                    <img src="Assests/course.png" alt="Logo" width="80" height="50" class="d-inline-block align-text-top">
                </a>

                <!-- Navbar Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Navigation Links -->
                    <!-- dropdown menu -->
                    <ul class="navbar-nav navbar-categary mx-auto mb-2 mb-lg-0 mx-lg-4 fs-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle rounded menu-name fw-bold px-2" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-ui-radios-grid me-2"></i>
                                <span class="me-1">Category</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu dropend w-100 p-0">
                                    <a href="#" data-bs-toggle="dropdown"
                                        class="dropdown-item dropdown-toggle d-flex justify-content-center align-items-center">
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
                                    <a href="#" data-bs-toggle="dropdown"
                                        class="dropdown-item dropdown-toggle d-flex justify-content-center align-items-center">
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
                                    <a href="#" data-bs-toggle="dropdown"
                                        class="dropdown-item dropdown-toggle d-flex justify-content-center align-items-center">
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
                                    <a href="#" data-bs-toggle="dropdown"
                                        class="dropdown-item dropdown-toggle d-flex justify-content-center align-items-center">
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
                                    <a href="#" data-bs-toggle="dropdown"
                                        class="dropdown-item dropdown-toggle d-flex justify-content-center align-items-center">
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
                                <input class="form-control pe-5 bg-transparent text-light" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button
                                    class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                    type="submit">
                                    <i class="bi bi-search fs-6 "></i>
                                </button>
                            </form>
                        </div>
                    </div>


                    <!-- Icons and User Profile Dropdown -->
                    <div class="icons mx-auto mb-2 mb-lg-0 mx-lg-4 my-2 d-flex justify-content-center align-items-center">
                        <!-- Notification and Cart icons -->
                        <a href="notification.php" class="text-decoration-none text-dark me-3 iconBtn"><i
                                class="bi bi-bell-fill fs-4 me-1"></i><span class="name fw-medium">Notification</span></a>
                        <a href="cart.php" class="text-decoration-none text-dark me-3 iconBtn"><i
                                class="bi bi-cart fs-3 me-2 position-relative">
                                <!-- Cart item count -->
                                <?php if ($cartItemCount > 0) : ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger"
                                        style="padding: 4px 8px;"><?php echo $cartItemCount; ?></span>
                                <?php endif; ?>
                            </i></a>

                        <!-- User Profile Dropdown -->
                        <div class="dropdown user-info ms-1 ms-lg-0 me-2 rounded-circle">
                            <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="avatar-img rounded-circle" src="<?php echo $avatar; ?>" alt="avatar" height="50px"
                                    width="50px">
                            </a>
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3 user-list"
                                aria-labelledby="profileDropdown">
                                <!-- Profile info -->
                                <li class="px-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-3">
                                            <img class="avatar-img rounded-circle" src="<?php echo $avatar; ?>" alt="avatar" height="50px"
                                                width="50px">
                                        </div>
                                        <div>
                                            <a class="h6 text-decoration-none fw-bold fs-5" href="#"><?php echo $username; ?></a>
                                            <p class="small m-0 fw-medium"><?php echo $email; ?></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="w-75 mx-auto">
                                    <hr class="dropdown-divider">
                                </li>

                                <!-- Dropdown items -->
                                <li><a class="dropdown-item fw-medium" href="All-course.php"><i class="bi bi-laptop me-4"></i>My
                                        Courses</a></li>
                                <li><a class="dropdown-item fw-medium" href="cart.php"><i class="bi bi-cart fa-fw me-4"></i>My Cart</a>
                                </li>
                                <li><a class="dropdown-item fw-medium" href="wishlist-course.php"><i
                                            class="bi bi-heart wishlistBtn me-4" fa-fw me-4"></i>Wishlist</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item fw-medium" href="profile.php"><i class="bi bi-person fa-fw me-4"></i>Edit
                                        Profile</a>
                                </li>
                                <li><a class="dropdown-item fw-medium" href="payment.php"><i class="bi bi-gear fa-fw me-4"></i>Account
                                        Settings</a>
                                </li>
                                <li><a class="dropdown-item fw-medium" href="notification.php"><i
                                            class="bi bi-bell fa-fw me-4"></i>notification</a>
                                </li>
                                <li><a class="dropdown-item fw-medium" href="help.php"><i
                                            class="bi bi-info-circle fa-fw me-4"></i>Help</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item fw-medium bg-danger-soft-hover" href="log-out.php"><i
                                            class="bi bi-power fa-fw me-4 text-danger"></i>
                                        <span class="text-danger">Log Out</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Bootstrap JavaScript and Your Custom Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script/main.js"></script>
</body>

</html>