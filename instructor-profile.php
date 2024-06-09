<?php
// session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>instructor Profile</title>

  <!-- css bootstrap link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- font-awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

  <div class="wrapper">
    <!-- header section -->
    <?php
        include 'instructor-sidebar.php';
        ?>


    <div class="main">

      <!-- navbar -->
      <nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3" style="height: 80px;">
        <div class="container-fluid p-0">
          <div class="d-flex justify-content-between align-items-center w-100">

            <!-- Top search START -->
            <div class="nav mx-3 my-xl-0 flex-nowrap align-items-center">
              <div class="nav-item w-100">
                <form class="position-relative">
                  <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search"
                    placeholder="Search" aria-label="Search">
                  <button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y"
                    type="submit"><i class="bi bi-search fs-6 text-primary"></i></button>
                </form>
              </div>
            </div>
            <!-- Top search END -->

            <div class="d-flex justify-content-end align-items-center">
              <div class="account">
                <p class="m-0 d-flex align-items-center">
                  <a href="instructor-login.html" class="text-decoration-none iconBtn text-dark">
                    <i class="bi bi-person-circle fs-3 me-3"></i>
                  </a>
                </p>
              </div>


              <div class="dropdown user-info ms-1 ms-lg-0 me-2 rounded-circle">
                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside"
                  data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php
                                    if (isset($_SESSION['username'])) {
                                        // Check if the user has an image set in the database
                                        $username = $_SESSION['username'];
                                        $sql = "SELECT ProfilePicture FROM Instructors WHERE Instructor_Username = '{$username}'";
                                        $result = mysqli_query($conn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            $avatar = $row['ProfilePicture'];
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
                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3 user-list"
                  aria-labelledby="profileDropdown">
                  <!-- Profile info -->
                  <li class="px-3 mb-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar me-3">
                        <img class="avatar-img rounded-circle shadow img-fluid" src="Assests/admin.jpg" alt="avatar">
                      </div>
                      <div>
                        <p class="small m-0">
                          <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></p>
                        <p class="small m-0">
                          <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'guest@example.com'; ?></p>

                      </div>
                    </div>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="account.php"><i class="bi bi-person fa-fw me-4"></i>Edit
                      Profile</a>
                  </li>
                  <li><a class="dropdown-item" href="account.php"><i class="bi bi-gear fa-fw me-4"></i>Account
                      Settings</a>
                  </li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-4"></i>Help</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item bg-danger-soft-hover" href="log-out.php"><i
                        class="bi bi-power fa-fw me-4 text-danger"></i>
                      <span class="text-danger">Log Out</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <div class="container p-0 mt-2">
        <p class="fs-2 fw-bold text-center account text-info-emphasis">Profile</p>
        <div class="container-fluid mx-0">

          <div class="fill-details-section mt-2 container-fluid mx-auto">
            <div class="container mx-auto">
              <!-- Edit profile START -->
              <div class="card bg-transparent rounded-3">
                <!-- Card header -->
                <div class="card-header bg-transparent border-bottom">
                  <h3 class="card-header-title mb-0 fs-5 fw-bold">Edit Profile</h3>
                </div>
                <!-- Card body START -->

                <div class="card-body px-4">
                  <!-- Form -->
                  <form class="row g-4" action="instructor-details.php" method="POST" enctype="multipart/form-data">
                    <!-- Profile picture -->
                    <div class="col-12 justify-content-start align-items-center p-1">
                      <!-- Profile picture input -->
                      <label class="form-label fw-bolder ms-2">Profile picture</label>
                      <div class="user-img rounded-circle position-relative m-0 ms-4" style="height: 80px; width:80px;">
                        <!-- Image Display -->
                        <?php
                                                if (isset($_SESSION['username'])) {
                                                    $username = $_SESSION['username'];
                                                    $sql = "SELECT * FROM Instructors WHERE Instructor_Username = '{$username}'";
                                                    $result = mysqli_query($conn, $sql);
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $profile_img = $row['ProfilePicture'];
                                                        $first_name = $row['FirstName'];
                                                        $last_name = $row['LastName'];
                                                        $user_name = $row['Instructor_Username'];
                                                        $mail_ID = $row['Email'];
                                                        $phone_no = $row['phone_No'];
                                                        $city = $row['city'];
                                                        $about_me = $row['Bio'];
                                                        $experience = $row['experience'];
                                                        $ContactInformation = $row['ContactInformation'];
                                                        $expertise = $row['Expertise'];
                                                    }
                                                } else {
                                                    // Default profile image and static details
                                                    $profile_img = 'Assets/i-1.jpg';
                                                    $first_name = "Lori";
                                                    $last_name = "Glory";
                                                    $user_name = "lori glory";
                                                    $mail_ID = "glory123@gmail.com";
                                                    $phone_no = "7832459120";
                                                    $city = "America";
                                                    $about_me = "About me...";
                                                    $experience = "experience";
                                                    $ContactInformation = "ContactInformation";
                                                    $expertise = "Expertise";
                                                }
                                                ?>
                        <img src="<?php echo $profile_img; ?>" alt=""
                          class="position-absolute top-0 start-0 rounded-circle" height="80px" width="80px">

                        <!-- Camera Icon -->
                        <div
                          class="camera-icon position-absolute bottom-0 end-0 px-1 rounded-circle bg-dark bg-opacity-10">
                          <!-- Hidden File Input -->
                          <input type="file" id="fileInput" style="display: none;" accept="Assets/*" name="user_img">

                          <!-- Camera Icon Link -->
                          <label for="fileInput" class="text-decoration-none text-light">
                            <i class="bi bi-camera text-dark fs-4"></i>
                          </label>
                        </div>
                      </div>
                    </div>

                    <!-- Full name -->
                    <div class="col-12 p-1">
                      <label class="form-label fw-bolder">Full name</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="first_name" value="<?php echo $first_name; ?>"
                          id="first_name">
                        <input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>"
                          id="last_name">
                      </div>
                    </div>

                    <!-- Username -->
                    <div class="col-md-6 p-1">
                      <label class="form-label fw-bolder">Username</label>
                      <div class="input-group">
                        <span class="input-group-text">Eduport.com</span>
                        <input type="text" class="form-control" name="username" id="username"
                          value="<?php echo $user_name; ?>">
                      </div>
                    </div>

                    <!-- Email id -->
                    <div class="col-md-6 p-1">
                      <label class="form-label fw-bolder">Email id</label>
                      <input class="form-control" type="email" name="email" value="<?php echo $mail_ID; ?>"
                        id="mail_ID">
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
                      <textarea class="form-control" rows="3" name="about_me"
                        id="about_me"><?php echo $about_me; ?></textarea>
                      <div class="form-text fw-bold">Brief description for your profile.</div>
                    </div>

                    <!-- Expertise -->
                    <div class="col-12 p-1">
                      <label class="form-label fw-bolder">Expertise</label>
                      <textarea class="form-control" rows="3" name="expertise"
                        id="Expertise"><?php echo $expertise; ?></textarea>
                      <div class="form-text fw-bold">Brief description for your Expertise.</div>
                    </div>

                    <!-- Address-->
                    <div class="col-md-6 p-1">
                      <label class="form-label fw-bolder">Address</label>
                      <textarea class="form-control" rows="3" name="ContactInformation"
                        value=""><?php echo $ContactInformation; ?></textarea>
                    </div>

                    <!-- experience -->
                    <div class="col-md-6 p-1">
                      <label class="form-label fw-bolder">experience</label>
                      <textarea class="form-control" rows="3" name="experience"
                        value=""><?php echo $experience; ?></textarea>
                    </div>

                    <!-- Save button -->
                    <div class="d-sm-flex justify-content-end">
                      <button class="btn btn-primary mb-0" type="submit" name="info">Save changes</button>
                    </div>

                  </form>
                </div>
                <!-- Card body END -->
              </div>
              <!-- Edit profile END -->

              <div class="row g-4 mt-3">

                <!-- Password change START -->
                <div class="col-lg-6 pb-0">
                  <form action="student-details.php" method="post" enctype="multipart/form-data">
                    <div class="card border bg-transparent rounded-3">
                      <!-- Card header -->
                      <div class="card-header bg-transparent border-bottom">
                        <h5 class="card-header-title mb-0">Update password</h5>
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
                        <!-- Button -->
                        <div class="d-flex justify-content-end mt-4">
                          <button type="submit" class="btn btn-primary mb-0" name="changePass">Change password</button>
                        </div>
                      </div>
                      <!-- Card body END -->
                    </div>
                  </form>
                </div>
                <!-- Password change end -->

                <!-- Social media profile START -->
                <div class="col-lg-6">
                  <div class="card bg-transparent border rounded-3">
                    <!-- Card header -->
                    <div class="card-header bg-transparent border-bottom">
                      <h5 class="card-header-title mb-0">Social media profile</h5>
                    </div>

                    <form action="instructor-details.php" method="post" enctype="multipart/form-data">
                      <!-- Card body START -->
                      <div class="card-body">
                        <!-- Linkedin ID -->
                        <div class="mb-3">
                          <label class="form-label fw-bolder"><i class="bi bi-linkedin me-2 text-primary"></i>linkedin
                            link</label>
                          <input class="form-control" type="text" value="linkedin" value="Enter ID" name="linkedin_ID">
                        </div>

                        <!-- portfolio ID -->
                        <div class="mb-3">
                          <label class="form-label fw-bolder"><i
                              class="bi bi-file-earmark-person-fill me-2 text-primary"></i>portfolio
                            link</label>
                          <input class="form-control" type="text" value="portfolio link" name="portfolio_link">
                        </div>

                        <!-- Github ID -->
                        <div class="mb-3">
                          <label class="form-label fw-bolder"><i class="bi bi-github me-2"></i>Github ID</label>
                          <input class="form-control" type="text" value="github ID" name="github_ID">
                        </div>

                        <!-- behance ID -->
                        <div class="mb-3">
                          <label class="form-label fw-bolder"><i
                              class="bi bi-behance me-2 rounded-circle p-1 bg-primary text-light"></i>Behance
                            ID</label>
                          <input class="form-control" type="text" value="behance ID" name="behance_ID">
                        </div>

                        <!-- Button -->
                        <div class="d-flex justify-content-end mt-4">
                          <button type="submit" class="btn btn-primary mb-0" name="uploadDetails">Save changes</button>
                        </div>
                      </div>
                      <!-- Card body END -->
                    </form>
                  </div>
                </div>
                <!-- Social media profile END -->

                <!-- EMail change START -->
                <div class="col-lg-6 m-0 p-0">
                  <div class="card bg-transparent border rounded-3">
                    <!-- Card header -->
                    <div class="card-header bg-transparent border-bottom">
                      <h5 class="card-header-title mb-0">Update email</h5>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <form action="update-mail.php" method="post">
                        <!-- Email -->
                        <label class="form-label fw-bolder">Enter your current email id</label>
                        <input class="form-control" type="email" value="<?php echo $mail_ID; ?>" name="currentMail">

                        <!-- Email -->
                        <label class="form-label fw-bolder">Enter your new email id</label>
                        <input class="form-control" type="email" value="Enter new email" name="newMail">
                        <div class="d-flex justify-content-end mt-4">
                          <button type="submit" class="btn btn-primary mb-0" name="updateMail">Update email</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- EMail change end -->
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- js bootstrap link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>