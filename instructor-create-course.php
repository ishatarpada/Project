<?php
session_start();
include './config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>instructor Create Course</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="Style/createCourse.css">
</head>

<body>
  <div class="main">
    <!-- navbar -->
    <nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3 shadow">
      <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center w-100">
          <!-- logo -->
          <div class="logo mx-2">
            <a href="admin-dashboard.html" class="text-decoration-none text-dark">
              <img src="Assests/course.png" alt="" class="img-fluid" />
              <span class="fw-bold fs-3">myCourse.io</span>
            </a>
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
                    <p class="small m-0"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?>
                    </p>
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
    </nav>

    <!-- title -->
    <div class="title bg-dark container-fluid py-5 mb-3">
      <div class="row py-3">
        <div class="col-12 text-center">
          <!-- Title -->
          <h1 class="text-white display-5 fw-bold">Submit a new Course</h1>
          <p class="text-white mb-0 fw-">
            Read our
            <a href="#" class="text-white"><u>"Before you create a course"</u></a>
            article before submitting!
          </p>
        </div>
      </div>
    </div>

    <!-- course step -->
    <section>
      <div class="container my-5">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <!-- Content -->
            <p class="text-center text-dark-emphasis">
              Use this interface to add a new Course to the portal. Once you
              are done adding the item it will be reviewed for quality. If
              approved, your course will appear for sale and you will be
              informed by email that your course has been accepted.
            </p>
          </div>
        </div>

        <!-- card -->
        <div class="card my-2">
          <div class="card-body">
            <form action="instructor-add_course.php" method="POST" class="container my-2" enctype="multipart/form-data">
              <div class="row g-3">
                <p class="fw-semibold fs-3 m-0 p-0">Course Details</p>
                <div class="col-12">
                  <label for="courseTitle" class="form-label fw-normal">Course Title</label>
                  <input type="text" class="form-control fw-normal" id="courseTitle" placeholder="course title"
                    name="course_title" required>
                </div>
                <div class="col-12">
                  <label for="description" class="form-label fw-normal">Short Description</label>
                  <textarea type="text" class="form-control fw-normal" id="description" placeholder="Enter keyword"
                    name="course_description" required></textarea>
                </div>
                <div class="col-md-6">
                  <label for="courseCategory" class="form-label fw-normal">Course Category</label>
                  <select class="form-select fw-normal" aria-label="Default select example" name="course_category"
                    required>
                    <option selected>Select Category</option>
                    <option value="Cybersecurity">Cybersecurity</option>
                    <option value="Mobile App Development">Mobile App Development</option>
                    <option value="Artificial Intelligence">Artificial Intelligence</option>
                    <option value="Software Developer">Software Developer</option>
                    <option value="Web Developer">Web Developer</option>
                    <option value="Data Analytics">Data Analytics</option>
                    <option value="Database">Database</option>
                    <option value="Graphics Design">Graphics Design</option>
                    <option value="Blockchain">Blockchain</option>
                    <option value="DevOps">DevOps</option>
                    <option value="Maths & Logic">Maths & Logic</option>
                    <option value="English">English</option>
                    <option value="Fiance">Fiance</option>
                    <option value="Management">Management</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="courseLevel" class="form-label fw-normal">Course Level</label>
                  <select class="form-select fw-normal" aria-label="Default select example" name="course_level"
                    required>
                    <option selected>Select Course Level</option>
                    <option value="Advance">Advance</option>
                    <option value="All Level">All Level</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="courseLanguage" class="form-label fw-normal">Course Language</label>
                  <select class="form-select fw-normal" aria-label="Default select example" name="course_language"
                    required>
                    <option selected>select course Language</option>
                    <option value="French">French</option>
                    <option value="English">English</option>
                    <option value="Hindi">Hindi</option>
                  </select>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-start mt-5">
                  <div class="form-check form-switch form-check-md">
                    <input class="form-check-input" type="checkbox" id="checkPrivacy1">
                    <label class="form-check-label fw-normal " for="checkPrivacy1">Check this for featured
                      course</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-normal">Course time</label>
                  <input class="form-control fw-normal" type="text" placeholder="Enter course time" name="course_time"
                    required>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-normal">Total lecture</label>
                  <input class="form-control fw-normal" type="text" placeholder="Enter total lecture"
                    name="total_lecture" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-normal">Instructor Name</label>
                  <input class="form-control fw-normal" type="text" placeholder="Enter Instructor name"
                    name="instructor"
                    value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?>" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-normal">Channel Name </label>
                  <input class="form-control fw-normal" type="text" placeholder="Enter channel name" name="channel_name"
                    required>
                </div>
                <div class="col-12">
                  <label class="form-label fw-normal">Upload instructor image</label>
                  <div class="input-group mb-3">
                    <input type="file" class="form-control text-secondary" id="inputGroupFile01" name="instructor_img"
                      required>
                    <label class="input-group-text text-secondary fw-semibold">.png / .jpg / .JPEG</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-normal">Course price</label>
                  <input type="text" class="form-control fw-normal" placeholder="Enter course price" name="course_price"
                    required>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-normal">Discount price</label>
                  <input class="form-control fw-normal" type="text" placeholder="Enter discount" name="discount_price"
                    required>
                  <div class="col-12 mt-1 mb-0">
                    <div class="form-check small mb-0">
                      <input class="form-check-input" type="checkbox" id="checkBox1">
                      <label class="form-check-label" for="checkBox1">
                        Enable this Discount
                      </label>
                    </div>
                  </div>
                </div>
                <!-- Upload image START -->
                <div class="col-12">
                  <div
                    class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-secondary position-relative rounded-3"
                    style="border-style: dashed; border-width: 2px;">
                    <!-- Image -->
                    <img src="Assests/gallery.svg" alt="" style="height: 50px; width: 50px;">
                    <div>
                      <h6 class="my-2 fw-bold">Upload course image here, or<a href="#!"
                          class="text-primary text-decoration-none"> Browse</a></h6>
                      <label style="cursor:pointer;">
                        <span>
                          <input class="form-control stretched-link" type="file" name="course_img" id="image"
                            accept="image/gif, image/jpeg, image/png" required>
                        </span>
                      </label>

                      <p class="small mb-0 mt-2 text-secondary fw-semibold"><b class="text-dark me-2">Note:</b> Only
                        JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to
                        4:3 to fit our thumbnails/previews.</p>
                    </div>
                  </div>

                  <!-- Button -->
                  <div class="d-sm-flex justify-content-end mt-2">
                    <button type="button" class="btn btn-sm bg-danger bg-opacity-10 text-danger fw-bold mb-3">Remove
                      image</button>
                  </div>
                </div>
                <!-- Upload image END -->

                <!-- Upload video START -->
                <div class="col-12">
                  <h5 class="py-3 fw-semibold fs-3 m-0">Upload video</h5>
                  <!-- Input -->
                  <div class="col-12 mt-4 mb-5">
                    <label class="form-label text-secondary fw-semibold">Video URL</label>
                    <input class="form-control text-secondary fw-medium" type="text" placeholder="Enter video url"
                      name="video_url">
                  </div>
                  <!-- <div class="position-relative my-4 text-secondary">
                            <hr>
                            <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0">Or</p>
                        </div>
        
                        <div class="col-12">
                            <label class="form-label text-secondary fw-semibold">Upload video</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control text-secondary" id="inputGroupFile01" name="video_mp4">
                                <label class="input-group-text text-secondary">.mp4</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control text-secondary" id="inputGroupFile02" name="video_webm">
                                <label class="input-group-text text-secondary">.WebM</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control text-secondary" id="inputGroupFile03" name="video_ogg">
                                <label class="input-group-text text-secondary">.OGG</label>
                            </div>
                        </div> -->

                  <!-- Preview -->
                  <h5 class="mt-4">Video preview</h5>
                  <div class="position-relative">
                    <!-- Image -->
                    <img src="Assests/video-preview.jpg" class="rounded-4" alt="" height="700px" width="100%">
                    <div class="position-absolute top-50 start-50 translate-middle">
                      <!-- Video link -->
                      <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                        class="btn btn-lg text-danger btn-round  btn-white-shadow rounded-circle bg-light fs-4 pt-0"
                        height="50px" width="50px" data-glightbox="" data-gallery="video-tour">
                        <i class="bi bi-play-fill text-danger text-center fw-bold mt-0"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Upload video END -->
                <div class="col-12">
                  <div class="d-flex justify-content-end mt-3">
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </section>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

  <!-- Custom JavaScript -->
  <script src="Script/nextPrev.js"></script>
  <script>
    // jQuery function to handle tab switching
    $(document).ready(function() {
      $('#list-media-list').on('click', function(e) {
        e.preventDefault();
        $(this).tab('show');
      });
    });
  </script>
</body>

</html>