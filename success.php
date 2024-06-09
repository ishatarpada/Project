<?php
include('config.php');

session_start();
$user_id = $_SESSION['user_id'];

if (!empty($_GET)) {
  if (isset($_SESSION['cart'])) {
    $_SESSION['purchased_courses'] = []; // Initialize array to store purchased courses

    foreach ($_SESSION['cart'] as $key => $item) {
      $_SESSION['purchased_courses'][] = $item['Item_Name']; // Add each purchased course to the array
      $_SESSION['txn_id'] = $_GET['tx'];
      $_SESSION['amount'] = $_GET['amt'];
      $_SESSION['currency'] = $_GET['cc'];
      $_SESSION['status'] = $_GET['st'];
      $_SESSION['payer_id'] = $_GET['payer_id'];
      $_SESSION['payer_email'] = $_GET['payer_email'];
      $_SESSION['payer_name'] = $_GET['first_name'] . ' ' . $_GET['last_name'];
      $_SESSION['instructor'] = $item['instructor'];

      // Determine the card type based on payment information
      // Add card type information
      if (isset($_GET['card_type'])) {
        $_SESSION['card_type'] = $_GET['card_type'];
      } else {
        $_SESSION['card_type'] = "visa";
      }

      $instructor_amount = $_SESSION['amount'] * 0.7;
      $admin_amount = $_SESSION['amount'] * 0.3;

      // Calculate total courses purchased
      $total_courses = count($_SESSION['purchased_courses']);

      date_default_timezone_set('Asia/Kolkata');

      // Construct the INSERT query for payments table
      $payment_sql = "INSERT INTO payments (payment_id, payer_id, payer_name, payer_email, course_name, currency, amount, status, created_at, user_id, total_course, Instructor_Username, card_used, instructor_amount, admin_amount) 
                            VALUES (
                                '" . $_SESSION['txn_id'] . "',
                                '" . $_SESSION['payer_id'] . "',
                                '" . $_SESSION['payer_name'] . "', 
                                '" . $_SESSION['payer_email'] . "', 
                                '" . implode(", ", $_SESSION['purchased_courses']) . "', 
                                '" . $_SESSION['currency'] . "', 
                                '" . $_SESSION['amount'] . "', 
                                '" . $_SESSION['status'] . "', 
                                '" . date('Y-m-d H:i:s') . "', 
                                '" . $user_id . "', 
                                '" . $total_courses . "', 
                                '" . $_SESSION['instructor'] . "', 
                                '" . $_SESSION['card_type'] . "', 
                                '" . $instructor_amount . "', 
                                '" . $admin_amount . "'
                            )";
      // Execute the INSERT query for payments table
      $payment_result = mysqli_query($conn, $payment_sql);

      if (!$payment_result) {
        // Error inserting payment details, display error message
        echo "Error: " . $payment_sql . "<br>" . mysqli_error($conn);
      } else {
        // Insert into instructor_payments table
        $instructor_payment_sql = "INSERT INTO instructor_payments (payment_id, payer_id, payer_name, payer_email, instructor_username, amount) 
                                           VALUES (
                                               '" . $_SESSION['txn_id'] . "', 
                                               '" . $_SESSION['payer_id'] . "',
                                               '" . $_SESSION['payer_name'] . "', 
                                               '" . $_SESSION['payer_email'] . "', 
                                               '" . $_SESSION['instructor'] . "', 
                                               '" . $instructor_amount . "'
                                           )";
        $instructor_payment_result = mysqli_query($conn, $instructor_payment_sql);

        if (!$instructor_payment_result) {
          echo "Error inserting instructor payment details: " . mysqli_error($conn);
        }

        // Insert into admin_payments table
        $admin_payment_sql = "INSERT INTO admin_payments (payment_id, payer_id, payer_name, payer_email, amount) 
                                      VALUES (
                                          '" . $_SESSION['txn_id'] . "',
                                          '" . $_SESSION['payer_id'] . "',
                                          '" . $_SESSION['payer_name'] . "', 
                                          '" . $_SESSION['payer_email'] . "',  
                                          '" . $admin_amount . "'
                                      )";
        $admin_payment_result = mysqli_query($conn, $admin_payment_sql);

        if (!$admin_payment_result) {
          echo "Error inserting admin payment details: " . mysqli_error($conn);
        }

        // Check if the payment insertion was successful
        if ($payment_result) {
          // Payment inserted successfully, update is_purchased to 1 in student_course table
          foreach ($_SESSION['cart'] as $key => $item) {
            $course_ID = $item['Item_ID'];
            $is_purchased = 1; // Set is_purchased to 1 since the course is purchased

            // Escape string values to prevent SQL injection
            $escaped_course_name = mysqli_real_escape_string($conn, $item['Item_Name']);
            $escaped_channel_name = mysqli_real_escape_string($conn, $item['Item_channelName']);
            $escaped_course_time = mysqli_real_escape_string($conn, $item['Item_time']);
            $escaped_course_language = mysqli_real_escape_string($conn, $item['Item_language']);
            $escaped_course_rating = mysqli_real_escape_string($conn, $item['Item_ratting']);
            $escaped_course_price = mysqli_real_escape_string($conn, $item['Item_prise']);
            $escaped_delete_price = mysqli_real_escape_string($conn, $item['Item_del_prise']);
            $escaped_course_description = mysqli_real_escape_string($conn, $item['Item_description']);
            $escaped_course_category = mysqli_real_escape_string($conn, $item['course_category']);
            $escaped_course_level = mysqli_real_escape_string($conn, $item['Item_Level']);
            $escaped_total_lecture = mysqli_real_escape_string($conn, $item['Item_total_lecture']);
            $escaped_instructor = mysqli_real_escape_string($conn, $item['instructor']);
            $escaped_instructor_img = mysqli_real_escape_string($conn, $item['instructor_img']);
            $escaped_course_img = mysqli_real_escape_string($conn, $item['Item_Img']);

            // Construct the UPDATE query for student_course table
            $update_sql = "UPDATE student_course 
                                        SET is_purchased = $is_purchased 
                                        WHERE user_id = $user_id 
                                        AND course_ID = $course_ID";

            // Execute the update query
            $update_result = mysqli_query($conn, $update_sql);

            if (!$update_result) {
              // Error updating is_purchased status, display error message
              echo "Error updating is_purchased: " . mysqli_error($conn);
            } else {
              // Update successful, proceed with other actions
              // echo "Course purchase status updated successfully!";

              // Construct the INSERT query for buy_course table
              $insert_sql = "INSERT INTO buy_course (course_id , course_name, instructor, price, duration, category, course_level) 
                                            VALUES ('$course_ID' , '$escaped_course_name', '$escaped_instructor', $escaped_course_price, '$escaped_course_time', '$escaped_course_category', '$escaped_course_level')";

              // Execute the INSERT query for buy_course table
              $insert_result = mysqli_query($conn, $insert_sql);

              if (!$insert_result) {
                // Error inserting course details, display error message
                echo "Error inserting course details: " . mysqli_error($conn);
              } else {
                // Course details inserted successfully
                // echo "Course details inserted successfully!";
              }
            }
          }
        } else {
          // Error inserting payment details, display error message
          echo "Error: " . $payment_sql . "<br>" . mysqli_error($conn);
        }

        // Payment details inserted successfully, now insert course details
        foreach ($_SESSION['cart'] as $key => $item) {
          // Retrieve course details from the session or fetch from database if needed
          $course_ID = $item['Item_ID'];
          $ID = $item['Item_ID'];
          $course_name = $item['Item_Name'];
          $channel_name = $item['Item_channelName'];
          $course_time = $item['Item_time'];
          $course_language = $item['Item_language'];
          $course_rating = $item['Item_ratting'];
          $course_price = $item['Item_prise'];
          $course_discount_price = $item['Item_del_prise'];
          $course_description = $item['Item_description'];
          $course_category = $item['course_category'];
          $course_level = $item['Item_Level'];
          $total_lecture = $item['Item_total_lecture'];
          $instructor = $item['instructor'];
          $instructor_img = $item['instructor_img'];
          $course_img = $item['Item_Img'];

          // Check if student_id is valid before inserting into student_course table
          if ($user_id) {
            $course_sql = "INSERT INTO student_course (course_ID, ID , course_name, course_description, course_category, course_level, course_language, course_rating , course_time, created_at, total_lecture, instructor, course_channel_name, instructor_img, price, delete_price, course_img,  user_id , is_purchased)
                                       VALUES (
                                           '$course_ID', 
                                           '$ID' ,
                                           '$course_name', 
                                           '$course_description', 
                                           '$course_category', 
                                           '$course_level', 
                                           '$course_language', 
                                           '$course_rating' ,
                                           '$course_time', 
                                           NOW(), 
                                           '$total_lecture', 
                                           '$instructor', 
                                           '$channel_name', 
                                           '$instructor_img', 
                                           '$course_price', 
                                           '$course_discount_price', 
                                           '$course_img',
                                           '$user_id' ,
                                            '1' )";

            $course_result = mysqli_query($conn, $course_sql);

            if (!$course_result) {
              echo "Error inserting course details into student_course: " . mysqli_error($conn);
            } else {
              // echo "Course details inserted successfully into student_course!";
            }
          } else {
            echo "Invalid user_id!";
          }
        }
      }
    }
  } else {
    // Cart is empty, display appropriate message
    echo "No items in the cart.";
  }
} else {
  echo "Invalid access!";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Success</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert script -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

  <!-- SweetAlert script -->
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Payment Successful!',
      text: 'Your payment has been processed successfully.',
      confirmButtonText: 'OK'
    }).then(() => {
      // Show the table after clicking OK
      document.getElementById('paymentDetails').style.display = 'block';
    });
  </script>

  <!-- Table to display payment details -->
  <div class="container mt-3">

    <h1 class="fw-bold text-success m-5 text-center">Payment Details</h1>

    <table class="table table-light table-hover align-middle mb-0">
      <thead>
        <tr>
          <th scope="col" class="border-0 bg-dark bg-gradient text-start py-3 text-light rounded-start fs-5">Invoice ID
          </th>
          <th scope="col" class="border-0 bg-dark bg-gradient text-start py-3 text-light fs-5">Course Name</th>
          <th scope="col" class="border-0 bg-dark bg-gradient text-start py-3 text-light fs-5">Amount</th>
          <th scope="col" class="border-0 bg-dark bg-gradient text-start py-3 text-light rounded-end fs-5">
            Payment
            Status
          </th>
        </tr>
      </thead>
      <tbody>
        <td class="fs-5 text-start py-5"><?php echo isset($_SESSION['txn_id']) ? $_SESSION['txn_id'] : ''; ?></td>

        <td class="fs-5 text-start">
          <?php echo isset($_SESSION['purchased_courses']) ? implode(', ', $_SESSION['purchased_courses']) : ''; ?>
        </td>
        <td class="fs-5 text-start"><?php echo isset($_SESSION['amount']) ? $_SESSION['amount'] : ''; ?></td>
        <td class="fs-5 text-start"><?php echo isset($_SESSION['status']) ? $_SESSION['status'] : ''; ?></td>
      </tbody>
    </table>

    <div>
      <button class="btn btn-danger btn-lg m-5 px-5"><a href="index.php" class="text-light text-decoration-none">Back</a></button>
    </div>
  </div>
</body>

</html>