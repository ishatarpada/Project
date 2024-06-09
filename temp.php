<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
ob_start(); // Start output buffering

include 'config.php';
require_once('TCPDF-main/tcpdf.php'); // Include TCPDF library

// Create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Course Completion Certificate');
$pdf->SetSubject('Course Completion Certificate');
$pdf->SetKeywords('Certificate, Course Completion');

// Add a page
$pdf->AddPage();

// Fetch course completion details using PHP
$course_id = isset($_GET["id"]) ? $_GET["id"] : ""; // Get course ID from URL parameter
$course_id = mysqli_real_escape_string($conn, $course_id); // Sanitize the input
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM user_registration WHERE user_id = '{$user_id}'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Bootstrap CSS link
    $bootstrap_css = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';
    // Include external CSS file
    $css_file = 'Style/certificate.css';
    $css_link = '<link href="' . $css_file . '" rel="stylesheet">';

    // HTML content with Bootstrap classes and custom CSS
    $html = '
    <html>
    <head>
      ' . $bootstrap_css . '
      ' . $css_link . '
      <style>
        /* You can add additional styles here */
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
              ' . $row['user_name'] . '
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
    </body>
    </html>
    ';

    // Write HTML content to PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Close output buffering and send PDF as download
    ob_end_clean(); // Clean (erase) the output buffer and turn off output buffering

    // Output the PDF as a download
    $pdf->Output('course-completion-certificate.pdf', 'D');

    exit; // Exit script
} else {
  echo 'Error: Unable to fetch user data or user not found.';
}
