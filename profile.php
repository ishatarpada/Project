<?php
// session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

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

    <!-- css for media query file -->
    <link rel="stylesheet" href="Style/media-query.css">

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <!-- header section -->
    <?php
    include 'header.php';
    ?>


    <div class="account-container p-0 mt-2">
        <p class="fs-4 fw-bold text-center account text-info-emphasis">My Account</p>
        <div class="container-fluid mx-0">
            <div class="account-tabMenu d-flex justify-content-center align-items-center mt-1">
                <ul class="list-unstyled d-flex">
                    <li class="mx-3">
                        <a href="profile.php" class="text-decoration-none fs-5 text-dark fw-bold p-1 border-bottom border-danger border-3">Profile</a>
                    </li>
                    <li class="mx-3">
                        <a href="personalization.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Personalization</a>
                    </li>
                    <li class="mx-3">
                        <a href="payment.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Payment Methods</a>
                    </li>
                    <li class="mx-3">
                        <a href="payment-details.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Payment History</a>
                    </li>
                    <li class="mx-3">
                        <a href="notification.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Notifications</a>
                    </li>
                    <li class="mx-3">
                        <a href="reminder.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Reminder</a>
                    </li>
                </ul>
            </div>

            <div class="fill-details-section mt-2 container-fluid mx-auto">
                <div class="container mx-auto">
                    <!-- Edit profile START -->

                    <!-- CARD START -->
                    <div class="card bg-transparent rounded-3 container px-0 border shadow">
                        <form action="student-details.php" method="POST" enctype="multipart/form-data">

                            <!-- Card header -->
                            <div class="card-header bg-dark bg-gradient py-3 border-bottom">
                                <h3 class="card-header-title mb-0 fs-4 fw-bold text-light">Edit Profile</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body px-4">
                                <!-- Profile picture -->
                                <div class="col-12 justify-content-start align-items-center p-1">
                                    <label class="form-label fw-bolder ms-2">Profile picture</label>
                                    <div class="user-img rounded-circle position-relative m-0 ms-4" style="height: 80px; width: 80px;">
                                        <!-- Image Display -->
                                        <?php
                                        if (isset($_SESSION['username'])) {
                                            $username = $_SESSION['username'];
                                            $sql = "SELECT * FROM user_registration WHERE user_name = '{$username}'";
                                            $result = mysqli_query($conn, $sql);
                                            if ($result && mysqli_num_rows($result) > 0) {
                                                $row = mysqli_fetch_assoc($result);
                                                $profile_img = $row['profile_img'];
                                                $first_name = $row['first_name'];
                                                $last_name = $row['last_name'];
                                                $user_name = $row['user_name'];
                                                $mail_ID = $row['mail_ID'];
                                                $phone_no = $row['phone_No'];
                                                $city = $row['city'];
                                                $about_me = $row['about_me'];
                                            }
                                        } else {
                                            // Default profile image and static details
                                            $profile_img = 'Assets/user-profile.png';
                                            $first_name = "Lori";
                                            $last_name = "Glory";
                                            $user_name = "lori glory";
                                            $mail_ID = "glory123@gmail.com";
                                            $phone_no = "7832459120";
                                            $city = "America";
                                            $about_me = "About me...";
                                        }
                                        ?>
                                        <img src="<?php echo $profile_img; ?>" alt="" class="position-absolute top-0 start-0 rounded-circle" style="height: 80px; width: 80px;">
                                        <!-- Camera Icon -->
                                        <div class="camera-icon position-absolute bottom-0 end-0 px-1 rounded-circle">
                                            <!-- Hidden File Input -->
                                            <input type="file" id="fileInput" style="display: none;" accept="Assets/*" name="user_img">
                                            <!-- Camera Icon Link -->
                                            <label for="fileInput" class="text-decoration-none text-light">
                                                <i class="bi bi-camera"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Full name -->
                                <div class="col-12 p-1">
                                    <label class="form-label fw-bolder">Full name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="first_name" value="<?php echo $first_name; ?>" id="first_name">
                                        <input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>" id="last_name">
                                    </div>
                                </div>

                                <!-- Username -->
                                <div class="col-md-6 p-1">
                                    <label class="form-label fw-bolder">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Eduport.com</span>
                                        <input type="text" class="form-control" name="username" id="username" value="<?php echo $user_name; ?>">
                                    </div>
                                </div>

                                <!-- Email id -->
                                <div class="col-md-6 p-1">
                                    <label class="form-label fw-bolder">Email id</label>
                                    <input class="form-control" type="email" name="email" value="<?php echo $mail_ID; ?>" id="mail_ID">
                                </div>

                                <!-- Phone number -->
                                <div class="col-md-6 p-1">
                                    <label class="form-label fw-bolder">Phone number</label>
                                    <input type="text" class="form-control" name="phone_number" value="<?php echo $phone_no; ?>">
                                </div>

                                <!-- Location -->
                                <div class="col-md-6 p-1">
                                    <label class="form-label fw-bolder">Location</label>
                                    <input class="form-control" type="text" name="location" value="<?php echo $city; ?>" id="city">
                                </div>

                                <!-- About me -->
                                <div class="col-12 p-1">
                                    <label class="form-label fw-bolder">About me</label>
                                    <textarea class="form-control" rows="3" name="about_me" id="about_me"><?php echo $about_me; ?></textarea>
                                    <div class="form-text fw-bold">Brief description for your profile.</div>
                                </div>
                            </div>

                            <!-- CARD FOOTER -->
                            <div class="card-footer p-1">
                                <!-- Save button -->
                                <div class="d-sm-flex justify-content-end">
                                    <button class="btn btn-dark btn-lg px-4 mb-0" type="submit" name="info">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Edit profile END -->
                </div>


                <div class="row container mx-auto">
                    <div class="col-md-6">

                        <!--10TH STD Education Details START -->
                        <div class="card border bg-transparent rounded-3 my-5 container px-0">
                            <form action="education-details.php" method="post" enctype="multipart/form-data">
                                <!-- PHP Code for Retrieving 10th Standard Details -->
                                <?php
                                if (isset($_SESSION['user_id'])) {
                                    $user_id = $_SESSION['user_id'];
                                    $sql = "SELECT * FROM student_education_details WHERE student_id = '{$user_id}'";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result && mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        $tenthSchoolName = $row['tenth_school_name'];
                                        $tenth_board = $row['tenth_board'];
                                        $tenth_year_of_passing = $row['tenth_year_of_passing'];
                                        $tenth_percentage = $row['tenth_percentage'];
                                        $tenth_grade = $row['tenth_grade'];
                                    }
                                } else {
                                    // Default values
                                    $tenthSchoolName = "enter your 10th standard school name";
                                    $tenth_board = "10th standard board name";
                                    $tenth_year_of_passing = "enter your 10th standard passing year";
                                    $tenth_percentage = "10th standard percentage";
                                    $tenth_grade = "10th standard grade";
                                }
                                ?>
                                <!-- Card header -->
                                <div class="card-header bg-dark bg-gradient py-3 border-bottom mx-0">
                                    <h5 class="card-header-title mx-0 fw-bold text-light fs-4">10th Standard Details</h5>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row p-2">
                                        <!-- 10th Standard Form Fields -->
                                        <div class="form-group col-12 p-1 px-4">
                                            <label class="form-label fw-bolder" for="tenthSchoolName">10th School Name</label>
                                            <input type="text" class="form-control" id="tenthSchoolName" name="tenth_school_name" maxlength="100" value="<?php echo $tenthSchoolName ?>">
                                        </div>
                                        <div class="form-group col-12 p-1 px-4">
                                            <label class="form-label fw-bolder" for="tenthBoard">10th Board</label>
                                            <input type="text" class="form-control" id="tenthBoard" name="tenth_board" maxlength="50" value="<?php echo $tenth_board ?>">
                                        </div>
                                        <div class="form-group col-12 p-1 px-4">
                                            <label class="form-label fw-bolder" for="tenthYearOfPassing">10th Year of Passing</label>
                                            <input type="number" class="form-control" id="tenthYearOfPassing" name="tenth_year_of_passing" value="<?php echo $tenth_year_of_passing ?>">
                                        </div>
                                        <div class="form-group col-12 p-1 px-4">
                                            <label class="form-label fw-bolder" for="tenthPercentage">10th Percentage</label>
                                            <input type="number" step="0.01" class="form-control" id="tenthPercentage" name="tenth_percentage" value="<?php echo $tenth_percentage ?>">
                                        </div>
                                        <div class="form-group col-12 p-1 px-4">
                                            <label class="form-label fw-bolder" for="tenthGrade">10th Grade</label>
                                            <input type="text" class="form-control" id="tenthGrade" name="tenth_grade" value="<?php echo $tenth_grade ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer p-1">
                                    <!-- Save Button -->
                                    <div class="d-sm-flex justify-content-end">
                                        <button class="btn btn-dark btn-lg px-4 mb-0" type="submit" name="tenthDetails">Save</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- 10th std Education Details END -->
                    </div>

                    <div class="col-md-6">
                        <!-- 12th Standard Details START -->
                        <div class="card border bg-transparent rounded-3 my-5 container px-0">
                            <form action="education-details.php" method="post" enctype="multipart/form-data">
                                <?php
                                if (isset($_SESSION['user_id'])) {
                                    $user_id = $_SESSION['user_id'];
                                    $sql = "SELECT * FROM student_education_details WHERE student_id = '{$user_id}'";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result && mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        $twelveth_school_name = $row['twelveth_school_name'];
                                        $twelveth_board = $row['twelveth_board'];
                                        $twelveth_year_of_passing = $row['twelveth_year_of_passing'];
                                        $twelveth_percentage = $row['twelveth_percentage'];
                                        $twelveth_grade = $row['twelveth_grade'];
                                    }
                                } else {
                                    // Default profile image and static details
                                    $twelveth_school_name = "enter your 12th standard school name";
                                    $twelveth_board = "12th standard board name";
                                    $twelveth_year_of_passing = "enter your 12th standard passing year ";
                                    $twelveth_percentage = "12th standard percentage";
                                    $twelveth_grade = "12th standard grade";
                                }
                                ?>

                                <!-- Card header -->
                                <div class="card-header bg-dark bg-gradient py-3 border-bottom mx-0">
                                    <h5 class="card-header-title mx-0 fw-bold text-light fs-4">12th Standard Details</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <div class="row p-2">
                                        <!-- 12th Standard Details -->
                                        <div class="form-group col-12 p-1 px-4">
                                            <label class="form-label fw-bolder" for="twelfthSchoolName">12th School Name</label>
                                            <input type="text" class="form-control" id="twelfthSchoolName" name="twelfth_school_name" maxlength="100" value="<?php echo $twelveth_school_name ?>">
                                        </div>
                                        <div class="form-group col-12 p-1 px-4">
                                            <label class="form-label fw-bolder" for="twelfthBoard">12th Board</label>
                                            <input type="text" class="form-control" id="twelfthBoard" name="twelfth_board" maxlength="50" value="<?php echo $twelveth_board ?>">
                                        </div>
                                        <div class="form-group col-12 p-1 px-4">
                                            <label class="form-label fw-bolder" for="twelfthYearOfPassing">12th Year of Passing</label>
                                            <input type="number" class="form-control" id="twelfthYearOfPassing" name="twelfth_year_of_passing" value="<?php echo $twelveth_year_of_passing ?>">
                                        </div>
                                        <div class="form-group col-12 p-1 px-4">
                                            <label class="form-label fw-bolder" for="twelfthPercentage">12th Percentage</label>
                                            <input type="number" step="0.01" class="form-control" id="twelfthPercentage" name="twelfth_percentage" value="<?php echo $twelveth_percentage ?>">
                                        </div>
                                        <div class="form-group col-12 p-1 px-4">
                                            <label class="form-label fw-bolder" for="twelfthGrade">12th Grade</label>
                                            <input type="text" class="form-control" id="twelfthGrade" name="twelfth_grade" maxlength="2" value="<?php echo $twelveth_grade ?>">
                                        </div>
                                    </div>
                                </div>

                                <!-- card footer -->
                                <div class="card-footer p-1">
                                    <!-- Save button -->
                                    <div class="d-sm-flex justify-content-end">
                                        <button class="btn btn-dark btn-lg px-4 mb-0" type="submit" name="twelfth_details">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- 12th Standard Details END -->

                    </div>
                </div>


                <!-- College Details START -->
                <div class="card border bg-transparent rounded-3 my-5 container px-0">
                    <form action="education-details.php" method="post" enctype="multipart/form-data">
                        <?php
                        if (isset($_SESSION['user_id'])) {
                            $user_id = $_SESSION['user_id'];
                            $sql = "SELECT * FROM student_education_details WHERE student_id = '{$user_id}'";
                            $result = mysqli_query($conn, $sql);
                            if ($result && mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                $collegeName = $row['college_name'];
                                $collage_level = $row['collage_level'];
                                $collegeDegree = $row['college_degree'];
                                $collegeYearOfPassing = $row['college_year_of_passing'];
                                $collegeSPI = $row['college_SPI'];
                                $collegeCPI = $row['college_CPI'];
                            }
                        } else {
                            // Default profile image and static details
                            $collegeName = "enter your Collage name";
                            $collage_level = "Collage";
                            $collegeDegree = "enter yor degree name";
                            $collegeYearOfPassing = "passing year of Collage";
                            $collegeSPI = "collage SPI";
                            $collegeCPI = "collage CPI";
                        }
                        ?>
                        <!-- Card header -->
                        <div class="card-header bg-dark bg-gradient py-3 border-bottom mx-0">
                            <h5 class="card-header-title mx-0 fw-bold text-light fs-4">College Details</h5>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body">
                            <div class="row p-2">
                                <!-- College Details -->
                                <div class="form-group col-md-6 p-1 px-4">
                                    <label class="form-label fw-bolder" for="collegeName">College Name</label>
                                    <input type="text" class="form-control" id="collegeName" name="college_name" maxlength="100" value="<?php echo "$collegeName"; ?>">
                                </div>
                                <div class="form-group col-md-6 p-1 px-4">
                                    <label class="form-label fw-bolder" for="collegeDegree">College Degree</label>
                                    <input type="text" class="form-control" id="collegeDegree" name="college_degree" maxlength="50" value="<?php echo "$collegeDegree"; ?>">
                                </div>
                                <div class="form-group col-md-6 p-1 px-4">
                                    <label class="form-label fw-bolder" for="collegeYearOfPassing">College Year of Passing</label>
                                    <input type="number" class="form-control" id="collegeYearOfPassing" name="college_year_of_passing" value="<?php echo "$collegeYearOfPassing"; ?>">
                                </div>
                                <div class="form-group col-md-6 p-1 px-4">
                                    <label class="form-label fw-bolder" for="collegeSPI">College SPI</label>
                                    <input type="number" class="form-control" id="collegeSPI" name="college_SPI" value="<?php echo "$collegeSPI"; ?>">
                                </div>
                                <div class="form-group col-md-6 p-1 px-4">
                                    <label class="form-label fw-bolder" for="collegeCPI">College CPI</label>
                                    <input type="number" class="form-control" id="collegeCPI" name="college_CPI" value="<?php echo "$collegeCPI"; ?>">
                                </div>
                            </div>
                        </div>

                        <!-- card footer -->
                        <div class="card-footer p-1">
                            <!-- Save button -->
                            <div class="d-sm-flex justify-content-end">
                                <button class="btn btn-dark btn-lg px-4 mb-0" type="submit" name="collegeDetails">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- College Details END -->
            </div>
        </div>
    </div>

    <!-- Education Details  end -->

    <div class="row g-4 mt-3 container mx-auto">

        <!-- Password change START -->
        <div class="col-lg-6 pb-0 mb-3">
            <form action="student-details.php" method="post" enctype="multipart/form-data">
                <div class="card border bg-transparent rounded-3 container px-0">
                    <!-- Card header -->
                    <div class="card-header bg-dark border-bottom bg-gradient">
                        <h5 class="card-header-title mb-0 text-light fs-4 py-2">Update password</h5>
                    </div>
                    <!-- Card body START -->
                    <div class="card-body">
                        <!-- Current password -->
                        <div class="mb-3">
                            <label class="form-label fw-bolder">Current password</label>
                            <input class="form-control" type="password" value="Enter current password" name="currentPass">
                        </div>
                        <!-- New password -->
                        <div class="mb-3">
                            <label class="form-label fw-bolder"> Enter new password</label>
                            <div class="input-group">
                                <input class="form-control" type="password" value="Enter new password" name="newPass">
                                <span class="input-group-text p-0 bg-transparent">
                                    <i class="far fa-eye cursor-pointer p-2 w-40px"></i>
                                </span>
                            </div>
                            <div class="rounded mt-1" id="psw-strength"></div>
                        </div>
                        <!-- Confirm password -->
                        <div>
                            <label class="form-label fw-bolder">Confirm new password</label>
                            <input class="form-control" type="password" value="Enter new password" name="confirmPass">
                        </div>

                    </div>
                    <!-- Card body END -->

                    <div class="card-footer">
                        <!-- Button -->
                        <div class="d-flex justify-content-end ">
                            <button type="submit" class="btn btn-dark btn-lg px-4 mb-0" name="changePass">Change password</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Password change end -->

        <!-- Social media profile START -->
        <div class="col-lg-6">
            <div class="card bg-transparent border rounded-3 container px-0">
                <!-- Card header -->
                <div class="card-header bg-dark bg-gradient border-bottom">
                    <h5 class="card-header-title mb-0 fs-4 text-light py-2">Social media profile</h5>
                </div>

                <form action="student-details.php" method="post" enctype="multipart/form-data">
                    <!-- Card body START -->
                    <div class="card-body">
                        <!-- Facebook username -->
                        <div class="mb-3">
                            <label class="form-label fw-bolder"><i class="bi bi-linkedin me-2 text-primary"></i>Enter Linkedin ID</label>
                            <input class="form-control" type="text" value="loristev" value="Enter username" name="facebook_username">
                        </div>

                        <!-- Twitter username -->
                        <div class="mb-3">
                            <label class="form-label fw-bolder"><i class="bi bi-github me-2"></i>Enter Github ID</label>
                            <input class="form-control" type="text" value="loristev" value="Enter username" name="twitter_username">
                        </div>

                        <!-- Instagram username -->
                        <div class="mb-3">
                            <label class="form-label fw-bolder"><i class="bi bi-behance me-2 rounded-circle p-1 bg-primary text-light"></i>Enter Behance ID</label>
                            <input class="form-control" type="text" value="loristev" value="Enter username" name="instagram_username">
                        </div>


                    </div>
                    <!-- Card body END -->

                    <div class="card-footer">
                        <!-- Button -->
                        <div class="d-flex justify-content-end ">
                            <button type="submit" class="btn btn-dark btn-lg px-4 mb-0" name="uploadDetails">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Social media profile END -->

        <!-- EMail change START -->
        <div class="col-lg-6 m-0 p-0">
            <div class="card bg-transparent border rounded-3 container px-0">
                <form action="update-mail.php" method="post">
                    <!-- Card header -->
                    <div class="card-header bg-dark bg-gradient border-bottom">
                        <h5 class="card-header-title mb-0 text-light py-2 fs-4">Update email</h5>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- Email -->
                        <label class="form-label fw-bolder">Enter your current email id</label>
                        <input class="form-control" type="email" value="Enter current email" name="currentMail">

                        <!-- Email -->
                        <label class="form-label fw-bolder">Enter your new email id</label>
                        <input class="form-control" type="email" value="Enter new email" name="newMail">

                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end mt-0">
                            <button type="submit" class="btn btn-dark mb-0 btn-lg px-4" name="updateMail">Update email</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- EMail change end -->
    </div>

    </div>
    </div>
    </div>


    <!-- footer -->
    <?php include 'footer.php'; ?>

    <!-- js external link -->
    <script src="Script/main.js"></script>

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>