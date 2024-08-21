<?php
session_start();
include './config/config.php';

$courseID = $_GET['id'];

// Check if user_id is set in the session
if (!isset($_SESSION['user_id'])) {
  die('User not logged in.');
}

$user_id = $_SESSION['user_id'];

// Use prepared statements to fetch user data
$stmt = $conn->prepare("SELECT * FROM user_registration WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$stmt = $conn->prepare("SELECT * FROM course WHERE course_ID = ?");
$stmt->bind_param("i", $courseID);
$stmt->execute();
$result1 = $stmt->get_result();
$row1 = $result1->fetch_assoc();

if (!$row) {
  die('User not found.');
}

// Get the current date in the desired format
$current_date = date("F j, Y");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Course Completion Certificate</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <style>
    .main-container {
      height: 100%;
      width: 100%;
      border-image: url('Assests/border.png') 90% round;
      border-image-repeat: stretch;
      border-image-slice: 40;
      border-image-width: 100px;
      border-image-outset: 10px 5px 15px 5px;
      /* line-height: 30px; */
      padding: 2% 10%;
      margin: 0;
    }

    .institute-name {
      color: #181857;
      text-align: center;
      font-size: 25px;
      font-weight: 600;
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

    @media print {
      .download {
        display: none;
      }
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-center align-items-center">
    <div class="container my-5 main-container rounded">
      <div class="container p-5">
        <p class="institute-name">MyCourse.io</p>
        <p class="text-center display-3 fw-bold certificate my-4">Certification</p>
        <p class="text-center container text-light fs-5 mx-auto title py-2 fw-semibold rounded">This
          is proudly presented to</p>
        <p class="display-5 text-center text-uppercase fw-medium border-bottom border-dark border-2"
          style="color: #181857;">
          <?php echo htmlspecialchars($row['user_name']); ?>
        </p>
        <p class="fw-semibold mx-auto">With dedication and hard
          work, you have achieved a significant milestone in this
          <b><?php echo htmlspecialchars($row1['course_title']); ?> course</b>. Your
          commitment to
          learning and growth is truly commendable. Congratulations on this
          remarkable achievement!
        </p>
        <div class="box d-flex justify-content-between mx-auto align-items-center">
          <div class="date fs-5 text-center">
            <?php echo $current_date; ?>
            <p class="border-bottom mt-2 mb-0"></p>
            <b>Date</b>
          </div>
          <div class="Signature fs-5 text-center">
            isha
            <p class="border-bottom mt-2 mb-0"></p>
            <b>Signature</b>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <button onclick="downloadCertificate()" class="download btn btn-lg btn-primary" name="download">Download
      Certificate</button>
  </div>

  <script>
    function downloadCertificate() {
      window.print();
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>