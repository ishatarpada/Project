<?php
session_start();
$course_ID = isset($_GET['id']) ? $_GET['id'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Course</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
            <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="avatar-img rounded-circle" src="Assests/admin.jpg" alt="avatar" style="height: 50px; width: 50px" />
            </a>
            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3 user-list" aria-labelledby="profileDropdown">
              <!-- Profile info -->
              <li class="px-3 mb-3">
                <div class="d-flex align-items-center">
                  <div class="avatar me-3">
                    <img class="avatar-img rounded-circle shadow img-fluid" src="Assests/admin.jpg" alt="avatar" />
                  </div>
                  <div>
                    <a class="h6 text-decoration-none" href="#">Lori Ferguson</a>
                    <p class="small m-0">example@gmail.com</p>
                  </div>
                </div>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="account.php"><i class="bi bi-person fa-fw me-4"></i>Edit Profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="account.php"><i class="bi bi-gear fa-fw me-4"></i>Account Settings</a>
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

    <!-- title -->
    <div class="title bg-dark container-fluid py-5 mb-3">
      <div class="row py-3">
        <div class="col-12 text-center">
          <!-- Title -->
          <h1 class="text-white display-5 fw-bold">Upload Course Video</h1>
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



        <div class="course-curriculum my-2 p-2 card">
          <!-- Title -->
          <div class="card-title card-header fw-semibold fs-1 bg-dark bg-gradient text-light">Curriculum</div>

          <div class="card-body">
            <div class="row">
              <!-- Add Lecture Modal button -->
              <div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                <h5 class="mb-2 mb-sm-0 fs-4">Upload Lecture</h5>
                <button class="btn btn-sm bg-primary bg-opacity-10 text-primary fw-bold fs-6 rounded p-2" type="button" data-bs-toggle="modal" data-bs-target="#addLecture">
                  <i class="bi bi-plus-circle me-2"></i>
                  Add Lecture
                </button>
              </div>

              <!-- Add Lecture Modal -->
              <div class="modal fade" id="addLecture" tabindex="-1" aria-labelledby="addLectureLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-dark d-flex justify-content-between align-items-center">
                      <h5 class="modal-title text-white" id="addLectureLabel">Add Lecture</h5>
                      <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                    <!-- Add Lecture Form -->
                    <form class="row text-start g-3" action="upload_course.php" method="post">
                      <div class="modal-body">
                        <!-- Course name -->
                        <div class="col-12">
                          <label class="form-label">Course name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" placeholder="Enter course name" name="course_name" required>
                          <!-- Hidden course ID field -->
                          <input type="hidden" name="course_ID" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn bg-danger bg-opacity-10 text-danger my-0" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success my-0" name="addLecture">Save Lecture</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <?php
              // PHP code for fetching topics and subtopics
              include 'config.php';
              $course_ID = isset($_GET['id']) ? $_GET['id'] : '';

              // SQL query to fetch course details
              $sql = "SELECT * FROM upload_topic WHERE course_id = '{$course_ID}'";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                echo '<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">';
                while ($row = mysqli_fetch_assoc($result)) {
                  $topicID = $row['topicID'];
              ?>
                  <!-- Accordion Item START -->
                  <div class="accordion-item mb-3">
                    <h6 class="accordion-header font-base" id="heading-<?php echo $topicID; ?>">
                      <button class="accordion-button fw-bold rounded d-inline-block d-block pe-5 collapsed bg-body-tertiary fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $topicID; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $topicID; ?>">
                        <span><?php echo $row['course_name']; ?></span>
                      </button>


                    </h6>
                    <div id="collapse-<?php echo $topicID; ?>" class="accordion-collapse collapse show" aria-labelledby="heading-<?php echo $topicID; ?>" data-bs-parent="#accordionExample2">
                      <div class="accordion-body my-0">
                        <!-- PHP code for fetching subtopics -->
                        <?php
                        include 'config.php';
                        $course_ID = $_GET['id'];

                        // SQL query to fetch subtopics related to the topic
                        $sql_subtopics = "SELECT * FROM upload_subtopic WHERE topicID = {$topicID}";
                        $result_subtopics = mysqli_query($conn, $sql_subtopics);

                        if (mysqli_num_rows($result_subtopics) > 0) {
                          // Output data of each row
                          while ($topic_row = mysqli_fetch_assoc($result_subtopics)) {
                        ?>
                            <!-- Video item START -->
                            <div class="d-flex justify-content-between align-items-center my-0">
                              <div class="position-relative">
                                <a href="<?php echo $topic_row['topic_video_link'] ?>" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static bg-danger bg-opacity-10 rounded-circle">
                                  <i class="bi bi-play-fill text-danger ms-1 fw-bold" style="font-size: 1.5rem;"></i>
                                </a>
                                <span class="ms-2 mb-0 h6 fw-semibold"><?php echo $topic_row['topic_name'] ?></span>
                              </div>
                              <!-- Edit and cancel button -->
                              <div>
                                <a href="#" class="btn btn-sm rounded-circle fw-bold me-1" style="background-color: #0cbc8727;">
                                  <i class="bi bi-pencil-square m-1 fw-bold" style="font-size: 1.5rem; color: #0cbc87;"></i>
                                </a>
                                <button class="btn btn-sm bg-danger bg-opacity-10 rounded-circle mb-0">
                                  <i class="bi bi-x text-danger ms-1 fw-bold" style="font-size: 1.5rem;"></i>
                              </div>
                            </div>
                            <!-- Divider -->
                            <hr>
                            <!-- Video item END -->
                        <?php
                          }
                        } else {
                          echo "<p>No subtopics found for topic: {$row['course_name']}</p>";
                        }
                        ?>
                      </div>
                      <!-- Add Topic Button -->
                      <a href="#" class="btn btn-lg btn-dark text-nowrap m-2" data-bs-toggle="modal" data-bs-target="#addTopic-<?php echo $topicID; ?>">
                        <i class="bi bi-plus-circle me-2"></i>Add topic
                      </a>
                      <!-- Add Topic Modal -->
                      <div class="modal fade" id="addTopic-<?php echo $topicID; ?>" tabindex="-1" aria-labelledby="addTopicLabel-<?php echo $topicID; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header bg-dark d-flex justify-content-between align-items-center">
                              <h5 class="modal-title text-white" id="addTopicLabel-<?php echo $topicID; ?>">Add topic</h5>
                              <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close">
                                <i class="bi bi-x-lg"></i>
                              </button>
                            </div>
                            <form class="row text-start g-3" action="upload_course.php?id=<?php echo $course_ID; ?>" method="post">
                              <div class="modal-body">
                                <!-- Topic name -->
                                <div class="col-md-6">
                                  <label class="form-label">Topic name</label>
                                  <input class="form-control" type="text" placeholder="Enter topic name" name="topic_name" required>
                                </div>
                                <!-- Video link -->
                                <div class="col-md-6">
                                  <label class="form-label">Video link</label>
                                  <input class="form-control" type="text" placeholder="Enter Video link" name="topic_video_link" required>
                                </div>
                                <!-- Description -->
                                <div class="col-12 mt-3">
                                  <label class="form-label">Course description</label>
                                  <textarea class="form-control" rows="4" placeholder="" spellcheck="false" name="description" required></textarea>
                                </div>
                                <!-- Hidden fields for course ID and topic ID -->
                                <input type="hidden" name="course_id" value="<?php echo $course_ID; ?>">
                                <input type="hidden" name="topicID" value="<?php echo $topicID; ?>">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn bg-danger bg-opacity-10 text-danger-emphasis my-0" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success my-0" name="add_topic">Save topic</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- Add Topic Modal END -->
                    </div>
                  </div>
                  <!-- Accordion Item END -->
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
    </section>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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