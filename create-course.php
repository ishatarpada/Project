<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>create course</title>

  <link rel="stylesheet" href="Style/createCourse.css">

  <!-- css bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
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
        <div class="card my-5">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center p-4" id="list-tab" role="tablist">
              <div class="detail">
                <button class="btn bg-info-subtle rounded-circle ms-4 fw-bold btn-lg list outline-0 border-0">
                  <a class="active text-info-emphasis text-decoration-none" id="list-details-list" data-bs-toggle="list" href="#list-details" role="tab" aria-controls="list-details">1</a>
                </button>
                <p class="fw-bolder m-0" id="list-details-list" data-bs-toggle="list" href="#list-details" role="tab" aria-controls="list-details"><a href="" class="text-decoration-none text-info-emphasis">Course Details</a></p>
              </div>
              <div class="line"></div>
              <div class="media">
                <button class="btn bg-primary-subtle rounded-circle fw-bold btn-lg ms-4 list outline-0 border-0">
                  <a class="text-decoration-none text-primary-emphasis" id="list-media-list" data-bs-toggle="list" href="#list-media" role="tab" aria-controls="list-media">2</a>
                </button>
                <p class="fw-bolder m-0"><a class="text-decoration-none text-primary-emphasis" id="list-media-list" data-bs-toggle="list" href="#list-media" role="tab" aria-controls="list-media">Course Media</a></p>
              </div>
              <div class="line"></div>
              <div class="Curriculum">
                <button class="btn bg-primary-subtle rounded-circle fw-bold btn-lg ms-4 list outline-0 border-0">
                  <a class="text-decoration-none text-primary-emphasis" id="list-curriculum-list" data-bs-toggle="list" href="#list-curriculum" role="tab" aria-controls="list-curriculum">3</a>
                </button>
                <p class="fw-bolder m-0"><a id="list-curriculum-list" data-bs-toggle="list" href="#list-curriculum" role="tab" aria-controls="list-curriculum" class="text-decoration-none text-primary-emphasis">Curriculum</a></p>
              </div>
              <div class="line ms-2"></div>
              <div class="info">
                <button class="btn bg-primary-subtle rounded-circle fw-bold btn-lg ms-5 list outline-0 border-0">
                  <a class="text-decoration-none text-primary-emphasis" id="list-info-list" data-bs-toggle="list" href="#list-info" role="tab" aria-controls="list-info">4</a>
                </button>
                <p class="fw-bolder m-0"><a id="list-info-list" data-bs-toggle="list" href="#list-info" role="tab" aria-controls="list-info" class="text-decoration-none text-primary-emphasis">Additional Information</a></p>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form action="course-info.php" method="post">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-details" role="tabpanel" aria-labelledby="list-details-list">
                  <div class="course-details">
                    <h5 class="card-title py-3 fw-semibold fs-1">Course Details</h5>
                    <hr class="divider">
                    <div class="row g-3">
                      <div class="col-12">
                        <label for="courseTitle" class="form-label fw-normal">Course Title</label>
                        <input type="text" class="form-control fw-normal" id="courseTitle" placeholder="course title" name="courseTitle">
                      </div>
                      <div class="col-12">
                        <label for="description" class="form-label fw-normal">Short Description</label>
                        <textarea type="text" class="form-control fw-normal" id="description" placeholder="Enter keyword" name="courseDescription"></textarea>
                      </div>
                      <div class="col-md-6">
                        <label for="courseCategory" class="form-label fw-normal">Course Category</label>
                        <select class="form-select fw-normal" aria-label="Default select example" name="courseCategory">
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
                        <select class="form-select fw-normal" aria-label="Default select example" name="courseLevel">
                          <option selected>Select Course Level</option>
                          <option value="1">Advance</option>
                          <option value="2">All Level</option>
                          <option value="3">Beginner</option>
                          <option value="4">Intermediate</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="courseLanguage" class="form-label fw-normal">Course Language</label>
                        <select class="form-select fw-normal" aria-label="Default select example" name="courseLanguage">
                          <option selected>select course Language</option>
                          <option value="1">French</option>
                          <option value="2">English</option>
                          <option value="3">Hindi</option>
                        </select>
                      </div>
                      <div class="col-md-6 d-flex align-items-center justify-content-start mt-5">
                        <div class="form-check form-switch form-check-md">
                          <input class="form-check-input" type="checkbox" id="checkPrivacy1">
                          <label class="form-check-label fw-normal " for="checkPrivacy1">Check this for featured course</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-normal">Course time</label>
                        <input class="form-control fw-normal" type="text" placeholder="Enter course time" name="courseTime">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-normal">Total lecture</label>
                        <input class="form-control fw-normal" type="text" placeholder="Enter total lecture" name="totalLecture">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-normal">Instructor Name</label>
                        <input class="form-control fw-normal" type="text" placeholder="Enter Instructor name" name="instructor">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-normal">Channel Name </label>
                        <input class="form-control fw-normal" type="text" placeholder="Enter channel name" name="channelName">
                      </div>
                      <div class="col-12">
                        <label class="form-label fw-normal">Upload channel logo</label>
                        <div class="input-group mb-3">
                          <input type="file" class="form-control text-secondary" id="inputGroupFile01" name="channelLogo">
                          <label class="input-group-text text-secondary fw-semibold">.png / .jpg / .JPEG</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-normal">Course price</label>
                        <input type="text" class="form-control fw-normal" placeholder="Enter course price" name="coursePrice">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-normal">Discount price</label>
                        <input class="form-control fw-normal" type="text" placeholder="Enter discount" name="discountPrice">
                        <div class="col-12 mt-1 mb-0">
                          <div class="form-check small mb-0">
                            <input class="form-check-input" type="checkbox" id="checkBox1">
                            <label class="form-check-label" for="checkBox1">
                              Enable this Discount
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex justify-content-end mt-3">
                          <button class="btn btn-primary btn-lg" type="button" onclick="nextPage('list-details', 'list-media')">Next</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="list-media" role="tabpanel" aria-labelledby="list-media-list">
                  <div class="course-media">
                    <!-- Title -->
                    <h4 class="card-title py-3 fw-semibold fs-1">Course media</h4>

                    <hr> <!-- Divider -->

                    <div class="row">
                      <!-- Upload image START -->
                      <div class="col-12">
                        <div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-secondary position-relative rounded-3" style="border-style: dashed; border-width: 2px;">
                          <!-- Image -->
                          <img src="Assests/gallery.svg" alt="" style="height: 50px; width: 50px;">
                          <div>
                            <h6 class="my-2 fw-bold">Upload course image here, or<a href="#!" class="text-primary text-decoration-none"> Browse</a></h6>
                            <label style="cursor:pointer;">
                              <span>
                                <input class="form-control stretched-link" type="file" name="my-image" id="image" accept="image/gif, image/jpeg, image/png" name="courseImg">
                              </span>
                            </label>
                            <p class="small mb-0 mt-2 text-secondary fw-semibold"><b class="text-dark me-2">Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
                          </div>
                        </div>

                        <!-- Button -->
                        <div class="d-sm-flex justify-content-end mt-2">
                          <button type="button" class="btn btn-sm bg-danger bg-opacity-10 text-danger fw-bold mb-3">Remove image</button>
                        </div>
                      </div>
                      <!-- Upload image END -->

                      <!-- Upload video START -->
                      <div class="col-12">
                        <h5 class="py-3 fw-semibold fs-3 m-0">Upload video</h5>
                        <!-- Input -->
                        <div class="col-12 mt-4 mb-5">
                          <label class="form-label text-secondary fw-semibold">Video URL</label>
                          <input class="form-control text-secondary fw-medium" type="text" placeholder="Enter video url" name="videoURL">
                        </div>
                        <div class="position-relative my-4 text-secondary">
                          <hr>
                          <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0">Or</p>
                        </div>

                        <div class="col-12">
                          <label class="form-label text-secondary fw-semibold">Upload video</label>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control text-secondary" id="inputGroupFile01" name="videomp4">
                            <label class="input-group-text text-secondary">.mp4</label>
                          </div>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control text-secondary" id="inputGroupFile02" name="videowebm">
                            <label class="input-group-text text-secondary">.WebM</label>
                          </div>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control text-secondary" id="inputGroupFile03" name="videoogg">
                            <label class="input-group-text text-secondary">.OGG</label>
                          </div>
                        </div>

                        <!-- Preview -->
                        <h5 class="mt-4">Video preview</h5>
                        <div class="position-relative">
                          <!-- Image -->
                          <img src="Assests/video-preview.jpg" class="rounded-4" alt="" height="700px" width="100%">
                          <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Video link -->
                            <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round  btn-white-shadow rounded-circle bg-light fs-4 pt-0" height="50px" width="50px" data-glightbox="" data-gallery="video-tour">
                              <i class="bi bi-play-fill text-danger text-center fw-bold mt-0"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- Upload video END -->

                      <!-- Step 2 button -->
                      <div class="d-flex justify-content-between mt-3">
                        <button class="btn btn-success btn-lg" type="button" onclick="prevPage('list-media', 'list-details')">Previous</button>
                        <button class="btn btn-primary btn-lg" type="button" onclick="nextPage('list-media', 'list-curriculum')">Next</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="list-curriculum" role="tabpanel" aria-labelledby="list-curriculum-list">
                  <div class="course-curriculum">

                    <!-- Title -->
                    <h4 class="card-title py-3 fw-semibold fs-1">Curriculum</h4>

                    <hr> <!-- Divider -->

                    <div class="row">
                      <!-- Add Lecture Modal button -->
                      <div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                        <h5 class="mb-2 mb-sm-0 fs-4">Upload Lecture</h5>
                        <button class="btn btn-sm bg-primary bg-opacity-10 text-primary fw-bold fs-6 rounded p-2" type="button" data-bs-toggle="modal" data-bs-target="#addLecture">
                          <i class="bi bi-plus-circle me-2"></i>
                          Add Lecture
                        </button>
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="addLecture" tabindex="-1" aria-labelledby="addLectureLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header bg-dark d-flex justify-content-between align-items-center">
                              <h5 class="modal-title text-white" id="addLectureLabel">Add Lecture</h5>
                              <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close">
                                <i class="bi bi-x-lg"></i>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form class="row text-start g-3">
                                <!-- Course name -->
                                <div class="col-12">
                                  <label class="form-label">Course name <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="Enter course name">
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-danger bg-opacity-10 text-danger my-0" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-success my-0">Save Lecture</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Edit lecture START -->
                      <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">

                        <!-- Item START -->
                        <div class="accordion-item mb-3">
                          <h6 class="accordion-header font-base" id="heading-1">
                            <button class="accordion-button fw-bold rounded d-inline-block d-block pe-5 collapsed bg-body-tertiary fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                              <span>Introduction of Digital Marketing</span>
                            </button>
                          </h6>

                          <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                            <!-- Topic START -->
                            <div class="accordion-body mt-3">
                              <!-- Video item START -->
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="position-relative">
                                  <a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static bg-danger bg-opacity-10 rounded-circle">
                                    <i class="bi bi-play-fill text-danger ms-1 fw-bold" style="font-size: 1.5rem;"></i>
                                  </a>
                                  <span class="ms-2 mb-0 h6 fw-semibold">Introduction</span>
                                </div>
                                <!-- Edit and cancel button -->
                                <div>
                                  <a href="#" class="btn btn-sm rounded-circle fw-bold me-1 mb-1 mb-md-0" style="background-color: #0cbc8727;">
                                    <i class="bi bi-pencil-square m-1 fw-bold" style="font-size: 1.5rem; color: #0cbc87;"></i>
                                  </a>
                                  <button class="btn btn-sm bg-danger bg-opacity-10 rounded-circle mb-0">
                                    <i class="bi bi-x text-danger ms-1 fw-bold" style="font-size: 1.5rem;"></i>
                                </div>
                              </div>
                              <!-- Divider -->
                              <hr>
                              <!-- Video item END -->

                              <!-- Video item START -->
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="position-relative">
                                  <a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static  bg-danger bg-opacity-10 rounded-circle">
                                    <i class="bi bi-play-fill text-danger ms-1 fw-bold" style="font-size: 1.5rem;"></i>
                                  </a>
                                  <span class="ms-2 mb-0 h6 fw-semibold">What is Digital Marketing</span>
                                </div>
                                <!-- Edit and cancel button -->
                                <div>
                                  <a href="#" class="btn btn-sm rounded-circle fw-bold me-1 mb-1 mb-md-0" style="background-color: #0cbc8727;">
                                    <i class="bi bi-pencil-square m-1 fw-bold" style="font-size: 1.5rem; color: #0cbc87;"></i>
                                  </a>
                                  <button class="btn btn-sm bg-danger bg-opacity-10 rounded-circle mb-0">
                                    <i class="bi bi-x text-danger ms-1 fw-bold" style="font-size: 1.5rem;"></i>
                                </div>
                              </div>
                              <!-- Divider -->
                              <hr>
                              <!-- Video item END -->

                              <!-- Add topic -->
                              <a href="#" class="btn btn-lg btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic">
                                <i class="bi bi-plus-circle me-2"></i>Add topic
                              </a>

                              <!-- Modal -->
                              <div class="modal fade" id="addTopic" tabindex="-1" aria-labelledby="addTopicLabel" aria-modal="true" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header bg-dark d-flex justify-content-between align-items-center">
                                      <h5 class="modal-title text-white" id="addTopicLabel">Add topic</h5>
                                      <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="bi bi-x-lg"></i>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form class="row text-start g-3">
                                        <!-- Topic name -->
                                        <div class="col-md-6">
                                          <label class="form-label">Topic name</label>
                                          <input class="form-control" type="text" placeholder="Enter topic name">
                                        </div>
                                        <!-- Video link -->
                                        <div class="col-md-6">
                                          <label class="form-label">Video link</label>
                                          <input class="form-control" type="text" placeholder="Enter Video link">
                                        </div>
                                        <!-- Description -->
                                        <div class="col-12 mt-3">
                                          <label class="form-label">Course description</label>
                                          <textarea class="form-control" rows="4" placeholder="" spellcheck="false"></textarea>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="col-6 mt-3">
                                          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <!-- Free button -->
                                            <input type="radio" class="btn-check" name="options" id="option1" checked="">
                                            <label class="btn btn-sm btn-light bg-primary bg-opacity-10 text-primary-emphasis fw-bold border-0 m-0" for="option1">Free</label>
                                            <!-- Premium button -->
                                            <input type="radio" class="btn-check" name="options" id="option2">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0" for="option2">Premium</label>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn bg-danger bg-opacity-10 text-danger-emphasis my-0" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-success my-0">Save topic</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Topic END -->
                          </div>
                        </div>
                        <!-- Item END -->

                        <!-- Item START -->
                        <div class="accordion-item mb-3">
                          <h6 class="accordion-header font-base" id="heading-2">
                            <button class="accordion-button fw-bold rounded d-inline-block d-block pe-5 collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                              Customer Life cycle
                            </button>
                          </h6>

                          <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample2" style="">
                            <div class="accordion-body mt-3">
                              <!-- Add topic -->
                              <a href="#" class="btn btn-lg btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic1">
                                <i class="bi bi-plus-circle me-2"></i>Add topic
                              </a>

                              <!-- Modal -->
                              <div class="modal fade" id="addTopic1" tabindex="-1" aria-labelledby="addTopicLabel" aria-modal="true" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header bg-dark d-flex justify-content-between align-items-center">
                                      <h5 class="modal-title text-white" id="addTopicLabel">Add topic</h5>
                                      <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="bi bi-x-lg"></i>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form class="row text-start g-3">
                                        <!-- Topic name -->
                                        <div class="col-md-6">
                                          <label class="form-label">Topic name</label>
                                          <input class="form-control" type="text" placeholder="Enter topic name">
                                        </div>
                                        <!-- Video link -->
                                        <div class="col-md-6">
                                          <label class="form-label">Video link</label>
                                          <input class="form-control" type="text" placeholder="Enter Video link">
                                        </div>
                                        <!-- Description -->
                                        <div class="col-12 mt-3">
                                          <label class="form-label">Course description</label>
                                          <textarea class="form-control" rows="4" placeholder="" spellcheck="false"></textarea>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="col-6 mt-3">
                                          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <!-- Free button -->
                                            <input type="radio" class="btn-check" name="options" id="option1" checked="">
                                            <label class="btn btn-sm btn-light bg-primary bg-opacity-10 text-primary-emphasis fw-bold border-0 m-0" for="option1">Free</label>
                                            <!-- Premium button -->
                                            <input type="radio" class="btn-check" name="options" id="option2">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0" for="option2">Premium</label>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn bg-danger bg-opacity-10 text-danger-emphasis my-0" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-success my-0">Save topic</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Item END -->

                        <!-- Item START -->
                        <div class="accordion-item mb-3">
                          <h6 class="accordion-header font-base" id="heading-3">
                            <button class="accordion-button fw-bold rounded d-block pe-5 fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                              How much should I offer the sellers?
                            </button>
                          </h6>
                          <!-- Body -->
                          <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="heading-3" data-bs-parent="#accordionExample2" style="">
                            <div class="accordion-body mt-3">
                              <!-- Add topic -->
                              <a href="#" class="btn btn-lg btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic2">
                                <i class="bi bi-plus-circle me-2"></i>Add topic
                              </a>

                              <!-- Modal -->
                              <div class="modal fade" id="addTopic2" tabindex="-1" aria-labelledby="addTopicLabel" aria-modal="true" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header bg-dark d-flex justify-content-between align-items-center">
                                      <h5 class="modal-title text-white" id="addTopicLabel">Add topic</h5>
                                      <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="bi bi-x-lg"></i>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form class="row text-start g-3">
                                        <!-- Topic name -->
                                        <div class="col-md-6">
                                          <label class="form-label">Topic name</label>
                                          <input class="form-control" type="text" placeholder="Enter topic name">
                                        </div>
                                        <!-- Video link -->
                                        <div class="col-md-6">
                                          <label class="form-label">Video link</label>
                                          <input class="form-control" type="text" placeholder="Enter Video link">
                                        </div>
                                        <!-- Description -->
                                        <div class="col-12 mt-3">
                                          <label class="form-label">Course description</label>
                                          <textarea class="form-control" rows="4" placeholder="" spellcheck="false"></textarea>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="col-6 mt-3">
                                          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <!-- Free button -->
                                            <input type="radio" class="btn-check" name="options" id="option1" checked="">
                                            <label class="btn btn-sm btn-light bg-primary bg-opacity-10 text-primary-emphasis fw-bold border-0 m-0" for="option1">Free</label>
                                            <!-- Premium button -->
                                            <input type="radio" class="btn-check" name="options" id="option2">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0" for="option2">Premium</label>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn bg-danger bg-opacity-10 text-danger-emphasis my-0" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-success my-0">Save topic</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Item END -->

                      </div>
                      <!-- Edit lecture END -->

                      <!-- Step 3 button -->
                      <div class="d-flex justify-content-between">
                        <button class="btn btn-success btn-lg" type="button" onclick="prevPage('list-curriculum', 'list-media')">Previous</button>
                        <button class="btn btn-primary btn-lg" type="button" onclick="nextPage('list-curriculum', 'list-info')">Next</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade " id="list-info" role="tabpanel" aria-labelledby="list-info-list">
                  <div class="course-info">
                    <!-- Title -->
                    <h4 class="fw-bold fs-3">Additional information</h4>

                    <hr> <!-- Divider -->

                    <div class="row g-4">

                      <!-- Edit faq START -->
                      <div class="col-12">
                        <div class="bg-body-tertiary border rounded p-2 p-sm-4">
                          <div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                            <h5 class="mb-2 mb-sm-0 fw-semibold">Upload FAQs</h5>
                            <!-- Modal Trigger Button -->
                            <a href="#" class="btn btn-sm bg-primary text-primary bg-opacity-10 fw-bold mb-0" data-bs-toggle="modal" data-bs-target="#addQuestion">
                              <i class="bi bi-plus-circle me-2"></i>Add Question
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="addQuestion" tabindex="-1" aria-labelledby="addQuestionLabel" aria-modal="true" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header bg-dark d-flex justify-content-between align-items-center">
                                    <h5 class="modal-title text-white" id="addQuestionLabel">Add FAQ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form class="row text-start g-3">
                                      <!-- Question -->
                                      <div class="col-12">
                                        <label class="form-label">Question</label>
                                        <input class="form-control" type="text" placeholder="Write a question">
                                      </div>
                                      <!-- Answer -->
                                      <div class="col-12 mt-3">
                                        <label class="form-label">Answer</label>
                                        <textarea class="form-control" rows="4" placeholder="Write an answer" spellcheck="false"></textarea>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn bg-danger bg-opacity-10 text-danger my-0" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success my-0">Save Question</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>

                          <div class="row g-4">
                            <div class="col-12">
                              <div class="bg-body p-3 p-sm-4 border rounded">
                                <!-- Item 1 -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center mb-2">
                                  <!-- Question -->
                                  <h6 class="mb-0 fw-bold fs-5">How Digital Marketing Work?</h6>
                                  <!-- Edit and cancel button -->
                                  <div class="align-middle">
                                    <a href="#" class="btn btn-sm rounded-circle fw-bold " style="background-color: #0cbc8727;">
                                      <i class="bi bi-pencil-square m-1 fw-bold" style="font-size: 1.2rem; color: #0cbc87;"></i>
                                    </a>
                                    <button class="btn btn-sm bg-danger bg-opacity-10 rounded-circle">
                                      <i class="bi bi-x text-danger ms-1 fw-bold" style="font-size: 1.2rem;"></i>
                                    </button>
                                  </div>
                                </div>
                                <!-- Content -->
                                <p class=" text-secondary fw-semibold">Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed.</p>
                              </div>
                            </div>

                            <div class="col-12">
                              <div class="bg-body p-4 border rounded">
                                <!-- Item 2 -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center mb-2">
                                  <!-- Question -->
                                  <h6 class="mb-0 fw-bold fs-5">How Digital Marketing Work?</h6>
                                  <!-- Button -->
                                  <div class="align-middle">
                                    <a href="#" class="btn btn-sm rounded-circle fw-bold " style="background-color: #0cbc8727;">
                                      <i class="bi bi-pencil-square m-1 fw-bold" style="font-size: 1.2rem; color: #0cbc87;"></i>
                                    </a>
                                    <button class="btn btn-sm bg-danger bg-opacity-10 rounded-circle">
                                      <i class="bi bi-x text-danger ms-1 fw-bold" style="font-size: 1.2rem;"></i>
                                    </button>
                                  </div>
                                </div>
                                <!-- Content -->
                                <p class="fw-semibold text-secondary">Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Edit faq END -->

                      <!-- Tags START -->
                      <div class="col-12">
                        <div class="bg-light border rounded p-4">
                          <h5 class="mb-0 fw-bold fs-4">Tags</h5>
                          <!-- Comment -->
                          <div class="mt-3">
                            <form action="#">
                              <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                            </form>
                            <span class="small fw-medium ">Maximum of 14 keywords. Keywords should all be in lowercase. e.g. javascript, react, marketing</span>
                          </div>
                        </div>
                      </div>
                      <!-- Tags START -->

                      <!-- Reviewer START -->
                      <div class="col-12">
                        <div class="bg-light border rounded p-4">
                          <h5 class="mb-0">Message to a reviewer</h5>

                          <!-- Comment -->
                          <div class="mt-3">
                            <textarea class="form-control" rows="4" placeholder="Write a message" spellcheck="false"></textarea>
                            <div class="form-check mb-0 mt-2">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">
                                Any images, sounds, or other assets that are not my own work, have been appropriately licensed for use in the file preview or main course. Other than these items, this work is entirely my own and I have full rights to sell it here.
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Reviewer START -->

                      <!-- Step 4 button -->
                      <div class="d-md-flex justify-content-between align-items-start mt-4">
                        <button class="btn btn-success btn-lg" type="button" onclick="prevPage('list-info', 'list-curriculum')">Previous</button>
                        <button class="btn btn-light btn-lg me-auto ms-md-2 mb-2 mb-md-0">Preview Course</button>
                        <div class="text-md-end">
                          <a href="" class="btn btn-success btn-lg mb-2 mb-sm-0" type="Submit">Submit a Course</a>
                          <p class="mb-0 small mt-1">Once you click "Submit a Course", your course will be uploaded and marked as pending for review.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </section>
  </div>



  <script src="Script/nextPrev.js"></script>
  <!-- jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#list-media-list').on('click', function(e) {
        e.preventDefault();
        $(this).tab('show');
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>