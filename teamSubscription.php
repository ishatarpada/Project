<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Team Subscription</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

  <div class="nav d-flex justify-content-between align-items-center p-3 shadow">
    <p class="fw-bold fs-4 d-flex m-0"><img src="Assests/course.png" alt="" class="me-3"><span>myCourse.IO</span></p>
    <p class="fw-bold fs-4 m-0"><a href="Pricing.php" class="text-decoration-none  text-green-500">Cancel</a></p>
  </div>


  <div class="container my-5">
    <div class="row my-5">
      <div class="col-md-6 p-5">
        <h1 class="font-serif fw-bold text-5xl mb-5">Drive your team's success</h1>
        <p class="fs-4 mb-5">Join Team Plan today and upskill your employees.</p>
        <ul class="mb-5">
          <li class="mb-2"><i class="bi bi-check fs-4 text-green-600 me-1"></i> For teams and organizations of 2-20 people</li>
          <li class="mb-2"><i class="bi bi-check fs-4 text-green-600 me-1"></i> On-demand access to 11,000+ top courses</li>
          <li class="mb-2"><i class="bi bi-check fs-4 text-green-600 me-1"></i> Custom logo and URL</li>
        </ul>
        <p class="fw-semibold text-green-500 fs-4 mb-3">Training 21 or more people? Request a Demo.</p>
        <h4 class="fw-bold">Trusted by</h4>
        <div class="d-flex justify-center items-center flex-wrap p-3">
          <img src="https://business.udemy.com/wp-content/uploads/2023/11/volkswagen-logo-11-2023.png" alt="" class="h-24 w-24 me-3 mb-3">
          <img src="https://business.udemy.com/wp-content/uploads/2023/11/samsung-logo-11-2023.png" alt="" class="h-24 w-24 me-3 mb-3">
          <img src="https://business.udemy.com/wp-content/uploads/2023/11/cisco-logo-11-2023.png" alt="" class="h-24 w-24 me-3 mb-3">
          <img src="https://business.udemy.com/wp-content/uploads/2023/11/att-logo-11-2023.png" alt="" class="h-24 w-24 me-3 mb-3">
          <img src="https://business.udemy.com/wp-content/uploads/2023/11/pg-logo-11-2023.png" alt="" class="h-24 w-24 me-3 mb-3">
          <img src="https://business.udemy.com/wp-content/uploads/2023/11/hpe-logo-11-2023.png" alt="" class="h-24 w-24 me-3 mb-3">
          <img src="https://business.udemy.com/wp-content/uploads/2023/11/citi-logo-11-2023.png" alt="" class="h-24 w-24 me-3 mb-3">
          <img src="https://business.udemy.com/wp-content/uploads/2023/11/ericsson-logo-11-2023.png" alt="" class="h-24 w-24 me-3 mb-3">
        </div>
      </div>
      <div class="col-md-6 p-5 bg-secondary bg-opacity-10">
        <form class="row g-3" action="teamRegistration.php" method="post">
          <div class="col-md-12">
            <label for="mail" class="form-label fw-bold">Work Email</label>
            <input type="email" class="form-control fw-semibold" id="mail" name="mail">
          </div>
          <div class="col-md-6">
            <label for="fname" class="form-label fw-bold">First Name</label>
            <input type="text" class="form-control fw-semibold" id="fname" name="fname">
          </div>
          <div class="col-md-6">
            <label for="lname" class="form-label fw-bold">Last Name</label>
            <input type="text" class="form-control fw-semibold" id="lname" name="lname">
          </div>
          <div class="col-md-6">
            <label for="title" class="form-label fw-bold">Job Title</label>
            <input type="text" class="form-control fw-semibold" id="title" name="title">
          </div>
          <div class="col-md-6">
            <label for="phoneNo" class="form-label fw-bold">Phone Number</label>
            <input type="tel" class="form-control fw-semibold" id="phoneNo" name="phoneNo">
          </div>
          <div class="col-md-12">
            <label for="peoples" class="form-label fw-bold">Number Of People to Train</label>
            <select id="peoples" class="form-select" name="peoples">
              <option selected>Choose...</option>
              <option value="1-100">1-5</option>
              <option value="100-1000">5-10</option>
              <option value="1-10">1-10</option>
              <option value="myself">Myself</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="domainName" class="form-label fw-bold">Sub Domain</label>
            <input type="text" class="form-control fw-semibold" id="domainName" name="domainName" placeholder="https://udemy.com">
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label fw-bold">Password</label>
            <input type="password" class="form-control fw-semibold" id="password" name="password">
          </div>
          <div class="col-md-6">
            <label for="confirm_password" class="form-label fw-bold">Confirm Password</label>
            <input type="password" class="form-control fw-semibold" id="confirm_password" name="confirm_password">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-dark w-100 py-2" name="teamReg">Sign Up</button>
          </div>
        </form>

      </div>
    </div>
  </div>


  <!-- footer -->
  <?php
  include 'footer.php';
  ?>

  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>