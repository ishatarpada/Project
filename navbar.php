  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Admin Dashboard</title>

      <!-- css bootstrap link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

      <!-- bootstrap icon link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

      <!-- main css style link -->
      <link rel="stylesheet" href="Style/side-navbar.css" />

      <!-- css for large screen -->
      <link rel="stylesheet" href="Style/media-query.css" />

      <!-- font awesome cdn -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  </head>

  <body>

      <!-- navbar -->
      <nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3" style="height: 80px">
          <div class="container-fluid p-0">
              <div class="d-flex justify-content-between align-items-center w-100">
                  <!-- Top search START -->
                  <div class="nav mx-3 my-xl-0 flex-nowrap align-items-center">
                      <div class="nav-item w-100">
                          <form class="position-relative">
                              <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search" />
                              <button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit">
                                  <i class="bi bi-search fs-6 text-primary"></i>
                              </button>
                          </form>
                      </div>
                  </div>
                  <!-- Top search END -->

                  <div class="dropdown user-info ms-1 ms-lg-0 me-2 rounded-circle">
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
                    } else {
                      // Default profile image and static details
                      $profile_picture = 'Assets/user-profile.png';
                      $full_name = "Lori Glory";
                      $user_name = "lori glory";
                      $mail_ID = "glory123@gmail.com";
                    }
                    ?>
                      <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                          <img class="avatar-img rounded-circle" src="<?php echo $profile_picture ?>" alt="avatar" style="height: 50px; width: 50px" />
                      </a>
                      <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3 user-list" aria-labelledby="profileDropdown">
                          <!-- Profile info -->
                          <li class="px-3 mb-3">
                              <div class="d-flex align-items-center">
                                  <div class="avatar me-3">
                                      <img class="avatar-img rounded-circle shadow img-fluid" src="<?php echo $profile_picture ?>" alt="avatar"  style="height: 50px; width: 50px"/>
                                  </div>
                                  <div>
                                      <a class="h6 text-decoration-none" href="#"><?php echo $full_name ?></a>
                                      <p class="small m-0"><?php echo $mail_ID ?></p>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <hr class="dropdown-divider" />
                          </li>
                          <li>
                              <a class="dropdown-item" href="admin-profile.php"><i class="bi bi-person fa-fw me-4"></i>Edit Profile</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="admin-setting.php"><i class="bi bi-gear fa-fw me-4"></i>Account Settings</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-4"></i>Help</a>
                          </li>
                          <li>
                              <hr class="dropdown-divider" />
                          </li>
                          <li>
                              <a class="dropdown-item bg-danger-soft-hover" href="log-out.php"><i class="bi bi-power fa-fw me-4 text-danger"></i>
                                  <span class="text-danger">Log Out</span></a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </nav>

      <!-- Include jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Include Popper.js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
      <!-- Include Bootstrap bundle -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
      <!-- Your other scripts -->

      <script>
          // Initialize Bootstrap dropdowns
          var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
          var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
              return new bootstrap.Dropdown(dropdownToggleEl);
          });
      </script>
  </body>

  </html>