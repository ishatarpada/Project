<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Courses Category</title>

  <!-- css bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- main css style link -->
  <link rel="stylesheet" href="Style/side-navbar.css" />
</head>

<body>
  <div class="wrapper">
    <?php
    include 'sidebar.php'
    ?>

    <div class="main bg-body-tertiary">

      <!-- navbar -->
      <?php include 'navbar.php' ?>

      <div class="fill-details-section mt-2 container-fluid mx-auto">
        <div class="container mx-auto">
          <!-- Edit profile START -->
          <div class="card bg-light.bg-gradient rounded-3">
            <!-- Card header -->
            <div class="card-header bg-transparent border-bottom">
              <h3 class="card-header-title mb-0 fs-5 fw-bold">Edit Profile</h3>
            </div>
            <!-- Card body START -->

            <div class="card-body px-4">
              <!-- Form -->
              <form class="row g-4" action="admin-details.php" method="POST" enctype="multipart/form-data">
                <!-- Profile picture -->
                <div class="col-12 justify-content-start align-items-center p-1">
                  <label class="form-label fw-bolder ms-2">Profile picture</label>
                  <div class="user-img rounded-circle position-relative m-0 ms-4" style="height: 80px; width: 80px;">
                    <!-- Image Display -->
                    <?php
                    include 'config.php';
                    $sql = "SELECT * FROM admin";
                    $result = mysqli_query($conn, $sql);
                    if ($result && mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_assoc($result);
                      $full_name = $row['full_name'];
                      $profile_picture = $row['profile_picture'];
                      $user_name = $row['username'];
                      $mail_ID = $row['email'];
                      $city = $row['city'];
                      $phone_no = $row['phone_no'];
                      $bio = $row['bio'];
                      $expertise = $row['expertise'];
                      $contact_information = $row['contact_information'];
                    } else {
                      // Default profile image and static details
                      $profile_picture = 'Assets/user-profile.png';
                      $full_name = "Lori Glory";
                      $user_name = "lori glory";
                      $mail_ID = "glory123@gmail.com";
                      $phone_no = "7832459120";
                      $city = "America";
                      $bio = "About me...";
                      $expertise = "expertise.....";
                      $contact_information = "Address....";
                    }
                    ?>
                    <img src="<?php echo $profile_picture; ?>" alt="" class="position-absolute top-0 start-0 rounded-circle border" style="height: 80px; width: 80px;">
                    <div class="camera-icon position-absolute bottom-0 end-0 px-1 rounded-circle">
                      <input type="file" id="fileInput" style="display: none;" accept="Assets/*" name="user_img">
                      <label for="fileInput" class="text-decoration-none text-dark bg-dark bg-opacity-10 rounded-circle px-1 py-0">
                        <i class="bi bi-camera fs-3"></i>
                      </label>
                    </div>
                  </div>
                </div>

                <!-- Full name -->
                <div class="col-12 p-1">
                  <label class="form-label fw-bolder">Full name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="full_name" value="<?php echo $full_name; ?>" id="full_name">
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
                  <textarea class="form-control" rows="3" name="about_me" id="bio"><?php echo $bio; ?></textarea>
                  <div class="form-text fw-bold">Brief description for your profile.</div>
                </div>

                <!-- Expertise -->
                <div class="col-12 p-1">
                  <label class="form-label fw-bolder">Expertise</label>
                  <textarea class="form-control" rows="3" name="expertise" id="expertise"><?php echo $expertise; ?></textarea>
                </div>

                <!-- Contact information -->
                <div class="col-12 p-1">
                  <label class="form-label fw-bolder">Contact information</label>
                  <textarea class="form-control" rows="3" name="contact_information" id="contact_information"><?php echo $contact_information; ?></textarea>
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
                <div class="card border  bg-light.bg-gradient rounded-3">
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

            <!-- EMail change START -->
            <div class="col-lg-6 mt-3 p-0">
              <div class="card  bg-light.bg-gradient border rounded-3">
                <!-- Card header -->
                <div class="card-header bg-transparent border-bottom">
                  <h5 class="card-header-title mb-0">Update email</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <form action="update-mail.php" method="post">
                    <!-- Email -->
                    <label class="form-label fw-bolder">Enter your current email id</label>
                    <input class="form-control" type="email" value="Enter current email" name="currentMail">

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

  <script src="Script/sidebar.js"></script>
  <!-- JavaScript libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>