<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Registration</title>

  <!-- CSS Bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Main CSS style link -->
  <link rel="stylesheet" href="Style/side-navbar.css" />

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

  <aside id="sidebar" class="bg-dark">
    <div class="d-flex">
      <button class="toggle-btn" type="button">
        <i class="bi bi-grid fw-bold fs-2 me-2"></i>
      </button>
      <div class="sidebar-logo">
        <a href="instructor-dashboard.php">MyCourse.io</a>
      </div>
    </div>
    <ul class="sidebar-nav">
      <li class="sidebar-item mb-2">
        <a href="instructor-course.php" class="sidebar-link">
          <i class="bi bi-basket fw-bold fs-4 me-2"></i>
          <span class="fw-medium fs-5">My Course</span>
        </a>
      </li>
      <li class="sidebar-item mb-2">
        <a href="instructor-student.php" class="sidebar-link">
          <i class="bi bi-people fw-bold fs-4 me-2"></i>
          <span class="fw-medium fs-5">Student</span>
        </a>
      </li>
      <li class="sidebar-item mb-2">
        <a href="instructor-order.php" class="sidebar-link">
          <i class="bi bi-folder-check fw-bold fs-4 me-2"></i>
          <span class="fw-medium fs-5">Orders</span>
        </a>
      </li>
      <li class="sidebar-item mb-2">
        <a href="#" class="sidebar-link">
          <i class="bi bi-star fw-bold fs-4 me-2"></i>
          <span class="fw-medium fs-5">Reviews</span>
        </a>
      </li>
      <li class="sidebar-item mb-2">
        <a href="instructor-profile.php" class="sidebar-link">
          <i class="bi bi-pencil-square fw-bold fs-4 me-2"></i>
          <span class="fw-medium fs-5">Edit Profile</span>
        </a>
      </li>
      <li class="sidebar-item mb-2">
        <a href="instructor-earning.php" class="sidebar-link">
          <i class="bi bi-wallet2 fw-bold fs-4 me-2"></i>
          <span class="fw-medium fs-5">Payouts</span>
        </a>
      </li>
    </ul>
    <div class="sidebar-footer">
      <a href="logout.php" class="sidebar-link">
        <i class="bi bi-power text-danger fw-bold fs-4 me-2"></i>
        <span class="fw-medium text-danger fs-5">Logout</span>
      </a>
    </div>
  </aside>

  <script src="Script/sidebar.js"></script>
  <!-- JavaScript libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>

