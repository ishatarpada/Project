<?php
include 'config.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkout</title>

  <!-- bootstrap css file link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- css file link -->
  <link rel="stylesheet" href="Style/style.css">

  <!-- header file link -->
  <link rel="stylesheet" href="Style/header.css">

  <!-- cart file link -->
  <link rel="stylesheet" href="Style/checkout.css">

  <!-- media query file link -->
  <link rel="stylesheet" href="Style/media-query.css">

  <link rel="stylesheet" type="text/css" href="https://www.paypalobjects.com/webstatic/en_US/developer/docs/css/cardfields.css" />

  <!-- paypal js script -->
  <script src="https://www.paypal.com/sdk/js?client-id=AXtwvxd3YWqCn1CWrLuWytq0xj2Ez5apSzpOXxL4ZFb1SZCRur5XS5yCN-KcThZP8cVUgba_ZdAKUKXY&components=card-fields,buttons,funding-eligibility">
  </script>

  <!-- SweetAlert script -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

  <!-- header section -->
  <?php
  include 'header.php';
  ?>


  <!-- checkout page -->
  <div class="checkout-container container mt-5">
    <h1 class="text-center fw-bold display-3">Checkout</h1>

    <div class="payment-container container rounded px-3 py-1">
      <div class="title d-flex justify-content-between align-items-center flex-wrap p-2">
        <p class="p-0 m-0 fw-bold fs-2">Payment Method</p>
        <a href="#" class="btn btn-sm add-btn fw-bold mb-0" data-bs-toggle="modal" data-bs-target="#addNewCard">Add new
          card</a>
        <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="addNewcardLabel">Add card</h5>
                <button type="button" class="btn-close btn btn-outline-light" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="row text-start g-3">

                  <!-- Card number -->
                  <div class="col-12">
                    <label class="form-label">Card Number <span class="text-danger">*</span></label>
                    <div class="position-relative">
                      <input type="text" class="form-control" maxlength="16" placeholder="xxxx xxxx xxxx xxxx">
                      <img src="Assests/visa.svg" class="position-absolute top-50 end-0 translate-middle-y me-2" alt="">
                    </div>
                  </div>
                  <!-- Expiration Date -->
                  <div class="col-md-6">
                    <label class="form-label">Expire date <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="text" class="form-control" maxlength="2" placeholder="Month">
                      <input type="text" class="form-control" maxlength="4" placeholder="Year">
                    </div>
                  </div>
                  <!--Cvv code  -->
                  <div class="col-md-6">
                    <label class="form-label">CVV / CVC <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" maxlength="3" placeholder="xxx">
                  </div>
                  <!-- Card name -->
                  <div class="col-12">
                    <label class="form-label">Name on Card <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" aria-label="name of card holder" placeholder="Name of card holder">
                  </div>
                  <!-- Check box -->
                  <div class="col-md-12">
                    <div class="form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Secuarely save card
                        and details</label>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger my-0" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success my-0">Save Card</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="processed-container panel-box container mt-3 px-5 pb-5 rounded">

      <div class="panel">

        <!-- <form action="#" method="post"> -->

        <!-- course-info -->
        <div class="courseInfo">
          <div class="cart-section">
            <?php
            $total = 0;
            $del_total = 0;
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $key => $item) {
                $total = $total + (float) $item['Item_prise'];
            ?>
                <div class="course-part-1 d-flex justify-content-start align-items-center flex-wrap p-2 my-2">
                  <div class="course-img me-1" style="height: 180px; width:300px;">
                    <img src="<?php echo htmlspecialchars($item['Item_Img']); ?>" alt="" width="100%" height="100%" class="rounded-3">
                  </div>
                  <div class="course-info me-2">
                    <div class="course-title">
                      <p class="course-name m-0 fw-bolder px-3 pt-1"><?php echo $item['Item_Name']; ?></p>
                    </div>
                    <div class="course-channel d-flex justify-content-start align-items-center ms-3 pt-1">
                      <i class="bi bi-person-circle fs-6 me-3 my-0 py-0" style="color: #3dcbb1;"></i>
                      <p class="instructor-name fs-6 fw-medium my-0 py-0"><?php echo $item['Item_channelName']; ?></p>
                    </div>
                    <div class="course-prise ms-3 p-1 d-flex justify-content-start align-items-center">
                      <p class="m-0 fw-bold fs-5 me-2" style="color: #3dcbb1;"><?php echo $item['Item_prise']; ?></p>
                      <p class="m-0 text-center"><del><?php echo $item['Item_del_prise']; ?></del></p>
                    </div>
                  </div>
                  <div class="course-remove ms-auto">
                    <form method="post" action="manage_cart.php">
                      <input type="hidden" name="item_key" value="<?php echo $key; ?>">
                      <input type="hidden" name="item_name" value="<?php echo $item['Item_Name']; ?>">
                      <button type="submit" class="btn btn-danger btn-lg" name="removeCourse">Remove</button>
                    </form>


                  </div>
                </div>

                <hr>
            <?php
              }
            }
            ?>
          </div>
        </div>

        <div class="total-box panel-title">
          <p class="fw-bold text-secondary fs-2 d-flex justify-content-end align-items-center m-0">Total</p>
          <p class="fw-bold text-danger fs-1 d-flex justify-content-end align-items-center m-0">
            <?php echo '$' . number_format($total, 2); ?></p>
        </div>

        <div class="checkout-box panel-title d-flex justify-content-end align-items-center">
          <?php
          require_once 'config.php'; // Include your database connection file

          $username = $_SESSION['username'];

          // Prepare and execute a query to get the user_id based on the username
          $sql = "SELECT user_id FROM user_registration WHERE user_name = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("s", $username);
          $stmt->execute();
          $result = $stmt->get_result();

          if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user_id = $row['user_id'];

            // Check if the user has already purchased the course
            $sql1 = "SELECT course_name FROM student_course WHERE user_id = ?";
            $stmt1 = $conn->prepare($sql1);
            $stmt1->bind_param("i", $user_id);
            $stmt1->execute();
            $result1 = $stmt1->get_result();

            if ($result1 && $result1->num_rows > 0) {
              while ($purchased_course_row = $result1->fetch_assoc()) {
                $purchased_course_sql = "SELECT is_purchased FROM student_course WHERE course_name = ?";
                $purchased_course_stmt = $conn->prepare($purchased_course_sql);
                $purchased_course_stmt->bind_param("s", $purchased_course_row["course_name"]);
                $purchased_course_stmt->execute();
                $purchased_course_result = $purchased_course_stmt->get_result();

                if ($purchased_course_result && $purchased_course_result->num_rows > 0) {
                  $purchased_course_row = $purchased_course_result->fetch_assoc();
                  // $course_name = $purchased_course_row["course_name"];
                  $is_purchased = $purchased_course_row['is_purchased'];

                  if ($is_purchased == 1) {
                    // Course is already purchased, show a success message and redirect
                    echo "<script>
              Swal.fire({
                icon: 'warning',
                title: 'Already Purchased',
                text: 'Course already purchased.'
              }).then((result) => {
                if (result.isConfirmed) {
                window.location.href = 'http://localhost/courseregistration/index.php';
              });
            </script>";
                  } else {
          ?>

                    <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                      <input type="hidden" name="business" value="sb-ue2eh27310939@business.example.com">
                      <?php
                      // Include all cart items in PayPal form
                      if (isset($_SESSION['cart'])) {
                        $index = 1;
                        foreach ($_SESSION['cart'] as $key => $item) {
                      ?>
                          <input type="hidden" name="item_name_<?php echo $index; ?>" value="<?php echo $item['Item_Name']; ?>">
                          <input type="hidden" name="amount_<?php echo $index; ?>" value="<?php echo $item['Item_prise']; ?>">
                      <?php
                          $index++;
                        }
                      }
                      ?>
                      <input type="hidden" name="currency_code" value="USD">
                      <input type="hidden" name="no_shipping" value="1">
                      <input type="hidden" name="cmd" value="_cart">
                      <input type="hidden" name="upload" value="1">
                      <input type="hidden" name="return" value="http://localhost/courseregistration/success.php">
                      <input type="hidden" name="cancel_return" value="http://localhost/courseregistration/cancel.php">
                      <button type="submit" class="btn btn-dark btn-lg">Processed</button>
                    </form>
          <?php
                  }
                } else {
                  echo "Error fetching purchased course information."; // Example error message
                }
              }
            } else {
              echo "User not found."; // Example error message
            }
            // Close database connection
            $stmt1->close();
            $stmt->close();
            $conn->close();
          }
          ?>
        </div>

        <!-- </form> -->
      </div>
    </div>

  </div>


  <!-- script file link -->
  <script src="Script/payment.js"></script>

  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>