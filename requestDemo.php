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
    <div class="row">
      <div class="col-md-6 px-5">
        <h1 class="font-serif fw-bold text-5xl mb-5">Get your demo</h1>
        <p class="fs-4 mb-5">Tell us your needs and we’ll start on a custom plan to drive results.</p>
        <ul class="mb-5">
          <h2>With Udemy as your learning partner, you can:</h2>
          <li class="mb-2"><i class="bi bi-check fs-4 text-green-600 me-1"></i>Train your entire workforce with over 26,000+ courses in 15 languages</li>
          <li class="mb-2"><i class="bi bi-check fs-4 text-green-600 me-1"></i> Prep employees for over 200 industry-recognized certification exams </li>
          <li class="mb-2"><i class="bi bi-check fs-4 text-green-600 me-1"></i> Develop highly skilled tech teams in risk-free practice environments </li>
          <li class="mb-2"><i class="bi bi-check fs-4 text-green-600 me-1"></i> Identify emerging skills gaps, learning trends, and industry benchmarks </li>
          <li class="mb-2"><i class="bi bi-check fs-4 text-green-600 me-1"></i> Integrate content with your existing learning management system </li>
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
      <div class="col-md-6 px-5 bg-secondary bg-opacity-10 py-2 ">
        <form class="row g-3" action="Subscription.php">
          <h1 class="font-serif fw-bold mb-3">Request Form</h1>
          <hr>
          <div class="col-md-6">
            <label for="name" class="form-label fw-bold">First Name</label>
            <input type="text" class="form-control fw-semibold" id="name">
          </div>
          <div class="col-md-6">
            <label for="name" class="form-label fw-bold">Last Name</label>
            <input type="text" class="form-control fw-semibold" id="name">
          </div>
          <div class="col-md-12">
            <label for="mail" class="form-label fw-bold">Work Email</label>
            <input type="email" class="form-control fw-semibold" id="mail">
          </div>
          <div class="col-md-12">
            <label for="number" class="form-label fw-bold">Phone Number</label>
            <input type="tel" class="form-control fw-semibold" id="number">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label fw-bold">Select City</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>Ahmadabad</option>
              <option>Vadodara</option>
              <option>Surat</option>
              <option>Rajkot</option>
            </select>
          </div>
          <div class="col-md-12">
            <label for="title" class="form-label fw-bold">Company Name</label>
            <input type="text" class="form-control fw-semibold" id="title">
          </div>
          <div class="col-md-6">
            <label for="inputState" class="form-label fw-bold">Select City</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>Ahmadabad</option>
              <option>Vadodara</option>
              <option>Surat</option>
              <option>Rajkot</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="inputState" class="form-label fw-bold">Select City</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>Ahmadabad</option>
              <option>Vadodara</option>
              <option>Surat</option>
              <option>Rajkot</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="inputState" class="form-label fw-bold">Select City</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>Ahmadabad</option>
              <option>Vadodara</option>
              <option>Surat</option>
              <option>Rajkot</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="title" class="form-label fw-bold">Company Name</label>
            <input type="text" class="form-control fw-semibold" id="title">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label fw-bold">Number Of people train</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>1-100</option>
              <option>100-1000</option>
              <option>1-10</option>
              <option>my self</option>
            </select>
          </div>
          <div class="col-md-6">
            <textarea  class="form-control fw-semibold w-100" rows="5" cols="60">What are your organization's training needs? (Optional)</textarea>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-dark w-100 py-2">Sign in</button>
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