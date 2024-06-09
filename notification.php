<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>

    <!-- css bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- bootstrap icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- main css style link -->
    <link rel="stylesheet" href="Style/style.css">

    <!-- account css style link -->
    <link rel="stylesheet" href="Style/account.css">

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
                        <a href="personalization.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Personalization</a>
                    </li>
                    <li class="mx-3">
                        <a href="payment.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Payment Methods</a>
                    </li>
                    <li class="mx-3">
                        <a href="payment-details.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Payment-history</a>
                    </li>
                    <li class="mx-3">
                        <a href="notification.php" class="text-decoration-none fs-5 text-dark fw-bold p-1  border-bottom border-danger border-3">Notifications</a>
                    </li>
                    <li class="mx-3">
                        <a href="reminder.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Reminder</a>
                    </li>
                </ul>
            </div>

            <!-- Notification -->
            <div class="notification-box px-3 border rounded my-5">
                <div class="notification-setting d-flex justify-content-between align-items-center my-4 px-2">
                    <p class="notification-title fw-bold fs-4 text-dark-emphasis m-0 p-0">Turn on the Notification
                    </p>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="form-check-input">
                    </div>
                </div>
                <div class="show-notification m-0" id="show-notification">
                    <div class="notification-section d-flex justify-content-between align-items-center flex-nowrap">
                        <p class="p-0 m-0 fw-bold text-dark ms-5 fs-4 d-flex justify-content-center align-items-center flex-nowrap">Notification</p>
                        <p class="p-0 m-0 d-flex justify-content-center align-items-center flex-nowrap fw-bold text-dark">Mark as all read <button type="button" class="btn btn-sm border-0 outline-0" onclick="markAllRead()"><img src="Assests/read.gif" alt="" class="img-fluid mx-2"></button></p>
                    </div>
                    <hr>

                    <?php
                    // Include database connection
                    include 'config.php';

                    // SQL query to fetch course details
                    $sql = "SELECT * FROM course WHERE upload_course = 1";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // Output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="container-fluid  mb-4 py-1">
                                <div class="notification px-1 d-flex justify-content-between align-items-center rounded mx-2 my-0 py-0">
                                    <div class="notification-img me-2 d-flex justify-content-center align-items-center my-0">
                                        <img src="<?php echo $row['course_img']; ?>" alt="" class="bg-warning img-fluid me-2 rounded-circle" style="height:50px ; width:50px">
                                        <span class="ms-1 fs-5 fw-medium text-dark"><?php echo $row['course_title']; ?> is launched now</span>
                                    </div>
                                    <div class="notification-file d-flex justify-content-center align-items-center my-0">
                                        <a href="#" class="text-decoration-none text-danger fw-bold"><i class="bi bi-x-square mx-2 fs-4"></i></a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                    <?php }
                    } ?>

                    <div class="messages-container border">

                    </div>

                </div>
            </div>
        </div>


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