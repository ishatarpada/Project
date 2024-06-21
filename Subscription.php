<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscription</title>
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


  <div class="container-fluid">
    <div class="row my-5">
      <div class="col-md-7 px-5">
        <h1 class="text-center font-serif fw-bold">Checkout</h1>
        <p class="text-center font-serif fs-4 fw-semibold">Personal Plan</p>
        <div class="d-flex justify-content-center align-items-center">
          <div>
            <div class="row">
              <div class="form-check col-md-5 mx-3 hover:bg-slate-300 p-5 border">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="monthlyRadio" value="1200">
                <p class="text-nowrap fw-bold m-0">Monthly Access</p>
                <p class="text-nowrap text-secondary m-0 fs-5">₹ 1200/mo</p>
                <p class="text-nowrap text-secondary m-0 fw-semibold">billed Monthly</p>
              </div>
              <div class="form-check col-md-5 mx-3 hover:bg-slate-300 p-5 border">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="yearlyRadio" value="850">
                <p class="text-nowrap fw-bold m-0">Yearly Access</p>
                <p class="text-nowrap text-secondary m-0 fs-5">₹ 850/y</p>
                <p class="text-nowrap text-secondary m-0 fw-semibold">billed yearly</p>
              </div>
              <div class="form-check col-md-5 mx-3 hover:bg-slate-300 p-5 border">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="teamPlanRadio" value="1167">
                <p class="text-nowrap fw-bold m-0">Team Plan Access</p>
                <p class="text-nowrap text-secondary m-0 fs-5">₹ 1,167 a month per user/mo</p>
                <p class="text-nowrap text-secondary m-0 fw-semibold">billed Monthly</p>
              </div>
              <div class="form-check col-md-5 mx-3 hover:bg-slate-300 p-5 border">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="enterprisePlanRadio" value="2000">
                <p class="text-nowrap fw-bold m-0">Enterprise Plan Access</p>
                <p class="text-nowrap text-secondary m-0 fs-5">₹ 2,000 a month per user/mo</p>
                <p class="text-nowrap text-secondary m-0 fw-semibold">billed Monthly</p>
              </div>
            </div>
            <ul class="mt-5">
              <li class="fw-semibold mb-3"><i class="bi bi-check-circle me-2 text-green-500"></i> Access to over 11,000 of our top courses in tech, business, and more</li>
              <li class="fw-semibold mb-3"><i class="bi bi-check-circle me-2 text-green-500"></i> Hands-on learning experiences to build your skills</li>
              <li class="fw-semibold mb-3"><i class="bi bi-check-circle me-2 text-green-500"></i> Course recommendations to help you start learning faster</li>
            </ul>
          </div>
        </div>
        <div class="d-flex justify-content-center align-items-center my-5 p-3">
          <div class="row mt-3 container">
            <h1 class="font-serif fw-bold">Billing Address</h1>
            <div class="col">
              <label class="fw-bold font-sans">Country</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col">
              <label class="fw-bold font-sans">State</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="container mt-5">
              <h6 class="fw-bold font-serif fs-4 my-3">
                <i class="bi bi-credit-card me-3"></i>Payment Method
              </h6>
              <!-- Form START -->
              <form class="row text-start g-3 container">
                <!-- card name -->
                <div class="col-12">
                  <label class="form-label fw-bold fs-5">Card Name <span class="text-danger">*</span></label>
                  <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Name on card">
                  </div>
                </div>
                <!-- Card number -->
                <div class="col-12">
                  <label class="form-label  fw-bold fs-5">Card Number <span class="text-danger">*</span></label>
                  <div class="position-relative">
                    <input type="text" class="form-control" placeholder="xxxx xxxx xxxx xxxx">
                    <img src="Assests/visa.svg" class="img-fluid position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block h-12 w-12" alt="">
                  </div>
                </div>
                <!-- Expiration Date -->
                <div class="col-md-6">
                  <label class="form-label fw-bold fs-5">Expiration date <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <input type="text" class="form-control" maxlength="2" placeholder="Month">
                    <input type="text" class="form-control" maxlength="4" placeholder="Year">
                  </div>
                </div>
                <!--Cvv code  -->
                <div class="col-md-6">
                  <label class="form-label fw-bold fs-5">CVV / CVC <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" maxlength="3" placeholder="xxx">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 bg-secondary bg-opacity-10 p-5">

        <div class="w-50">
          <p class="fw-bold font-serif fs-1">Summary</p>

          <p class="fw-medium border-bottom p-2">Yearly Access : ₹<span id="price">1200</span> p/mo</p>
          <p class="fw-bold p-2">Total : ₹<span id="totalPrice">1200</span> p/mo</p>

          <p>Cancel anytime by visiting the Subscriptions page in your account.</p>

          <p>By clicking “Start subscription” you agree to our <u class="text-green-500">Terms</u> and are enrolling in automatic payments of the subscription fee of ₹10,200/year (plus applicable transaction fees) that will start today and continue until you cancel. No refunds or credits for partial subscription periods unless required by law.</p>

          <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
            <input type="hidden" name="cmd" value="_xclick-subscriptions">
            <input type="hidden" name="business" value="sb-qm47aw29883037@business.example.com">
            <input type="hidden" name="item_name" value="Course Subscription">
            <input type="hidden" name="currency_code" value="INR">
            <input type="hidden" name="return" value="http://localhost/courseregistration/doneSubscription.php">
            <input type="hidden" name="cancel_return" value="http://localhost/courseregistration/cancelSubscription.php">

            <div class="mb-3">
              <label for="subscriptionType" class="form-label">Subscription Type</label>
              <select id="subscriptionType" name="subscriptionType" class="form-select" onchange="setSubscriptionPrice(this)">
                <option value="monthly">Monthly</option>
                <option value="yearly">Yearly</option>
                <option value="team">team</option>
                <option value="enterprise">enterprise</option>
              </select>
            </div>

            <input type="hidden" id="a3" name="a3" value="1200"> <!-- Subscription amount -->
            <input type="hidden" id="p3" name="p3" value="1"> <!-- Subscription duration -->
            <input type="hidden" id="t3" name="t3" value="M"> <!-- Subscription unit (M for month, Y for year) -->

            <div class="bg-green-500 p-2 text-center fw-bold text-white">
              <button type="submit" class="btn text-white fw-bold">Start Subscription</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>


  <!-- footer -->
  <?php
  include 'footer.php';
  ?>

  <!-- script file link -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const monthlyRadio = document.getElementById('monthlyRadio');
      const yearlyRadio = document.getElementById('yearlyRadio');
      const teamPlanRadio = document.getElementById('teamPlanRadio');
      const enterprisePlanRadio = document.getElementById('enterprisePlanRadio');
      const totalPriceElement = document.getElementById('totalPrice');
      const priceElement = document.getElementById('price');

      // Function to update the total price
      function updateTotalPrice() {
        if (monthlyRadio.checked) {
          totalPriceElement.textContent = monthlyRadio.value;
          priceElement.textContent = monthlyRadio.value;
        } else if (yearlyRadio.checked) {
          priceElement.textContent = yearlyRadio.value;
          totalPriceElement.textContent = yearlyRadio.value;
        } else if (teamPlanRadio.checked) {
          priceElement.textContent = teamPlanRadio.value;
          totalPriceElement.textContent = teamPlanRadio.value;
        } else if (enterprisePlanRadio.checked) {
          priceElement.textContent = enterprisePlanRadio.value;
          totalPriceElement.textContent = enterprisePlanRadio.value;
        }
      }

      // Add event listeners to the radio buttons
      monthlyRadio.addEventListener('change', updateTotalPrice);
      yearlyRadio.addEventListener('change', updateTotalPrice);
      teamPlanRadio.addEventListener('change', updateTotalPrice);
      enterprisePlanRadio.addEventListener('change', updateTotalPrice);

      // Initial update to set the default value
      updateTotalPrice();
    });

    function setSubscriptionPrice(select) {
      const a3 = document.getElementById('a3');
      const p3 = document.getElementById('p3');
      const t3 = document.getElementById('t3');

      if (select.value === 'monthly') {
        a3.value = '1200'; // Monthly price
        p3.value = '1'; // Duration is 1
        t3.value = 'M'; // Unit is month
      } else if (select.value === 'yearly') {
        a3.value = '850'; // Yearly price
        p3.value = '1'; // Duration is 1
        t3.value = 'Y'; // Unit is year
      } else if (select.value === 'team') {
        a3.value = '1167'; // Team plan monthly price per user
        p3.value = '1'; // Duration is 1
        t3.value = 'M'; // Unit is month
      } else if (select.value === 'enterprise') {
        a3.value = '2000'; // Enterprise plan monthly price per user
        p3.value = '1'; // Duration is 1
        t3.value = 'M'; // Unit is month
      }
    }
  </script>

  <script src="Script/main.js"></script>

  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>