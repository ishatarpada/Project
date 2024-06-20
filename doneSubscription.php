<?php
include('connection.php');

session_start();

if (!empty($_GET)) {
  if (isset($_GET['tx']) && !empty($_GET['tx'])) {
    $txn_id = $_GET['tx'];
    $payment_gross = $_GET['amt'];
    $currency_code = $_GET['cc'];
    $payment_status = $_GET['st'];

    // Validate session data and ensure required variables are set
    if (isset($_SESSION['user_id'], $_SESSION['subscription_type'], $_SESSION['payer_id'], $_SESSION['payer_name'], $_SESSION['payer_email'])) {
      $user_id = $_SESSION['user_id'];
      $subscription_type = $_SESSION['subscription_type'];
      $payer_id = $_SESSION['payer_id'];
      $payer_name = $_SESSION['payer_name'];
      $payer_email = $_SESSION['payer_email'];

      // Determine the subscription end date
      if ($subscription_type == 'monthly') {
        $end_date = date('Y-m-d H:i:s', strtotime('+1 month'));
      } else {
        $end_date = date('Y-m-d H:i:s', strtotime('+1 year'));
      }

      // Insert transaction data into the payments table
      $sql = "INSERT INTO payments (user_id, txn_id, payment_gross, currency_code, payment_status, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("issss", $user_id, $txn_id, $payment_gross, $currency_code, $payment_status);
      $stmt->execute();

      // Check if the user already has a subscription record
      $checkSubscriptionSql = "SELECT id FROM user_subscriptions WHERE user_id = ?";
      $checkSubscriptionStmt = $conn->prepare($checkSubscriptionSql);
      $checkSubscriptionStmt->bind_param("i", $user_id);
      $checkSubscriptionStmt->execute();
      $checkSubscriptionStmt->store_result();

      if ($checkSubscriptionStmt->num_rows > 0) {
        // Update existing subscription
        $updateSql = "UPDATE user_subscriptions SET subscription_status = 'active', valid_from = NOW(), valid_to = ?, modified = NOW() WHERE user_id = ?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("si", $end_date, $user_id);
        $updateStmt->execute();
      } else {
        // Insert new subscription record
        $insertSubscriptionSql = "INSERT INTO user_subscriptions (user_id, paypal_subscr_id, valid_from, valid_to, paid_amount, currency_code, subscriber_id, subscriber_name, subscriber_email, status, created) VALUES (?, ?, NOW(), ?, ?, ?, ?, ?, ?, 'active', NOW())";
        $insertSubscriptionStmt = $conn->prepare($insertSubscriptionSql);
        $insertSubscriptionStmt->bind_param("issssssss", $user_id, $txn_id, $end_date, $payment_gross, $currency_code, $payer_id, $payer_name, $payer_email);
        $insertSubscriptionStmt->execute();
      }

      // Close the statements and connection
      $stmt->close();
      $checkSubscriptionStmt->close();
      if (isset($updateStmt)) $updateStmt->close();
      if (isset($insertSubscriptionStmt)) $insertSubscriptionStmt->close();
      $conn->close();

      // Use JavaScript to display SweetAlert and show the table
      echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
      echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Payment Successful!',
          text: 'Your payment has been processed successfully.',
          confirmButtonText: 'OK'
        }).then(() => {
          document.getElementById('paymentDetails').style.display = 'block';
        });
      </script>";

      // Redirect to subscription success page or display success message
      header("Location: doneSubscription.php");
      exit();
    }
  }
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

  <div class="container mt-3">
    <div class="alert alert-success">
      <strong>Success!</strong> Payment has been successful
    </div>
  </div>

</body>

</html>
