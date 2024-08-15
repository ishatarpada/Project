<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
  header('Location: admin-login.html');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Course Registration</title>

  <!-- css bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- main css style link -->
  <link rel="stylesheet" href="Style/side-navbar.css" />

  <!-- font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <aside id="sidebar" class="bg-dark" style="width: 80px">
      <div class="d-flex">
        <button class="toggle-btn" type="button">
          <i class="bi bi-grid fw-bold fs-2 me-1"></i>
        </button>
        <div class="sidebar-logo">
          <span><a href="admin-dashboard.php" class="fs-4 fw-bold text-light">Dashboard</a></span>
        </div>
      </div>
      <ul class="sidebar-nav">
        <li class="sidebar-item mb-3">
          <a href="#" class="sidebar-link collapsed has-dropdown d-flex align-items-center" data-bs-toggle="collapse"
            data-bs-target="#course" aria-expanded="false" aria-controls="course">
            <i class="bi bi-basket fw-bold fs-4 me-3"></i>
            <span class="fw-medium fs-5">My Course</span>
          </a>
          <ul id="course" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
              <a href="admin-course.php" class="sidebar-link fs-6 ms-4">All Course</a>
            </li>
            <li class="sidebar-item">
              <a href="admin-course-category.php" class="sidebar-link fs-6 ms-4">Course Category</a>
            </li>
            <li class="sidebar-item">
              <a href="admin-course-detail.php" class="sidebar-link fs-6 ms-4">Course Details</a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item mb-3">
          <a href="student.php" class="sidebar-link">
            <i class="bi bi-person-fill fw-bold fs-4 me-3"></i>
            <span class="fw-medium fs-5">Student</span>
          </a>
        </li>
        <li class="sidebar-item mb-3">
          <a href="#" class="sidebar-link collapsed has-dropdown d-flex align-items-center" data-bs-toggle="collapse"
            data-bs-target="#instructor" aria-expanded="false" aria-controls="instructor">
            <i class="bi bi-person-circle fw-bold fs-4 me-3"></i>
            <span class="fw-medium fs-5">Instructor</span>
          </a>
          <ul id="instructor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
              <a href="instructor.php" class="sidebar-link fs-6 ms-4">Instructor</a>
            </li>
            <li class="sidebar-item">
              <a href="all_instructor_details.php" class="sidebar-link fs-6 ms-4">Instructor Details</a>
            </li>
            <li class="sidebar-item">
              <a href="instructor-request.php" class="sidebar-link fs-6 ms-4">Instructor Request</a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item mb-3">
          <a href="admin-message.php" class="sidebar-link">
            <i class="bi bi-chat-dots fw-bold fs-4 me-3"></i>
            <span class="fw-medium fs-5">Messages</span>
          </a>
        </li>
        <li class="sidebar-item mb-3">
          <a href="admin-reviews.php" class="sidebar-link">
            <i class="bi bi-chat-left-text fw-bold fs-4 me-3"></i>
            <span class="fw-medium fs-5">Reviews</span>
          </a>
        </li>
        <li class="sidebar-item mb-3">
          <a href="admin-earning.php" class="sidebar-link">
            <i class="bi bi-bar-chart fw-bold fs-4 me-3"></i>
            <span class="fw-medium fs-5">Earning</span>
          </a>
        </li>
        <li class="sidebar-item mb-3">
          <a href="admin-profile.php" class="sidebar-link">
            <i class="bi bi-person-fill fw-bold fs-4 me-3"></i>
            <span class="fw-medium fs-5">Admin Profile</span>
          </a>
        </li>
        <li class="sidebar-item mb-3">
          <a href="admin-setting.php" class="sidebar-link">
            <i class="bi bi-person-gear fw-bold fs-4 me-3"></i>
            <span class="fw-medium fs-5">Admin Setting</span>
          </a>
        </li>
      </ul>
      <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
          <i class="bi bi-power fw-bold fs-4 me-3"></i>
          <span class="fw-medium fs-5">Logout</span>
        </a>
      </div>
    </aside>
  </div>

  <script src="Script/sidebar.js"></script>
  <!-- JavaScript libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>