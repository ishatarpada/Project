<?php
// session_start();
include 'config.php';
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM user_registration WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Course Completion Certificate</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <style>
    .main-container {
      height: 100%;
      border-image: url('Assests/border.png') 90% round;
      border-image-repeat: stretch;
      border-image-slice: 40;
      border-image-width: 100px;
      border-image-outset: 10px 5px 15px 5px;
      line-height: 30px;
      padding: 2% 10%;
    }

    .institute-name {
      color: #181857;
      text-align: center;
      font-size: 50rem;
      font-weight: 600;
      border: 1px solid black;
      padding: 0%;
    }

    .certificate {
      color: #181857;
      font-family: "Pacifico", cursive;
      font-weight: 400;
      font-style: normal;
    }

    .title {
      background-color: #181857;
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-center my-5 align-items-center">
    <div class="container my-5 main-container rounded">
      <div class="container p-5">
        <p class="institute-name">MyCourse.io</p>
        <p class="text-center display-1 fw-bold certificate my-4">Certification</p>
        <p class="text-center container text-light fs-3 w-75 mx-auto title py-2 fw-semibold rounded">This
          is proudly presented to</p>
        <p class="display-2 text-center text-uppercase fw-medium border-bottom border-dark border-2" style="color: #181857;">
          <?php echo $row['user_name']; ?>
        </p>
        <p class="fs-4 fw-semibold mx-auto my-5">With dedication and hard
          work, you have achieved a significant milestone in this course. Your
          commitment to
          learning and growth is truly commendable. Congratulations on this
          remarkable achievement!</p>
        <div class="box d-flex justify-content-between w-75 mx-auto align-items-center mt-4">
          <div class="date fw-semibold fs-3">
            <p class="border-bottom"></p>
            Date
          </div>
          <div class="signature fw-semibold fs-3">
          <p class="border-bottom"></p>
            Signature
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

