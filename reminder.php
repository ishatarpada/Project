<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reminder</title>

  <!-- css bootstrap link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <!-- bootstrap icon link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- main css style link -->
  <link rel="stylesheet" href="Style/style.css">

  <!-- account css style link -->
  <link rel="stylesheet" href="Style/account.css">

  <!-- header css style link -->
  <link rel="stylesheet" href="Style/header.css">

  <!-- css for large screen -->
  <link rel="stylesheet" href="Style/media-query.css">

  <!-- font-awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

  <!-- header section -->
  <?php
  include 'header.php';
  ?>

  <div class="account-container
         mt-2">
    <p class="fs-4 fw-bold text-center account text-info-emphasis">My Account</p>
    <div class="container-fluid">
      <div class="account-tabMenu d-flex justify-content-center
                align-items-center mt-1">
        <ul class="list-unstyled d-flex">
          <li class="mx-3">
            <a href="profile.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Profile</a>
          </li>
          <li class="mx-3">
            <a href="personalization.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Personalization</a>
          </li>
          <li class="mx-3">
            <a href="payment.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Payment Methods</a>
          </li>
          <li class="mx-3">
            <a href="payment-details.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Payment-history</a>
          </li>
          <li class="mx-3">
            <a href="notification.php" class="text-decoration-none fs-5 text-dark fw-bold p-1">Notifications</a>
          </li>
          <li class="mx-3">
            <a href="reminder.php" class="text-decoration-none fs-5 text-dark fw-bold p-1  border-bottom border-danger border-3">Reminder</a>
          </li>
        </ul>
      </div>

      <div class="card border bg-transparent rounded-3 container-fluid my-5">
        <!-- Header START -->
        <div class="card-header bg-transparent border-bottom">
            <div class="row justify-content-between align-middle">
                <!-- Title -->
                <div class="col-12">
                    <h3 class="card-header-title mb-2 mb-sm-0 fw-bold ">Reminder</h3>
                </div>
            </div>
        </div>
        <!-- Header END -->

        <!-- Reviews START -->
        <?php
        // Include database connection
        include 'config.php';
        $user_id = $_SESSION['user_id'];

        // SQL query to fetch course details
        $sql = "SELECT * FROM messages WHERE receiver_id = $user_id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // Output data of each row
          while ($row = mysqli_fetch_assoc($result)) {
            $date = $row['created_at'];
            $subject = $row['subject'];
            $message = $row['message'];
        ?>
            <div class="card-body mt-2 mt-sm-4">
              <!-- Review item START -->
              <div class="d-sm-flex">
                <!-- Avatar image -->
                <img class="avatar avatar-lg rounded-circle float-start me-3 img-fluid" src="Assests/admin.jpg" alt="avatar" style="height: 70px; width:70px">
                <div>
                  <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                    <!-- Title -->
                    <div>
                      <h5 class="m-0 fw-bold fs-4">Mycourse.io</h5>
                      <span class="me-3 small fw-semibold"><?php echo $date; ?></span>
                    </div>
                  </div>
                  <!-- Content -->
                  <h5><span class="text-body fw-semibold">Review on:</span> <?php echo $subject; ?></h5>
                  <p><?php echo $message; ?></p>

                </div>
              </div>
              <!-- Divider -->
              <hr>
              <!-- Review item END -->
            </div>
        <?php }
        } ?>
      </div>
    </div>


    <!-- footer -->
    <?php
    include 'footer.php';
    ?>

    <!-- js external link -->
    <script src="Script/main.js"></script>

    <!-- js bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>