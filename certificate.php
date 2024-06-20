<?php
session_start();
ob_start(); // Start output buffering to prevent any output before PDF generation

$courseId = $_GET['id'];

function fetch_data($conn, $user_id)
{
    $output = '';
    $sql = "SELECT * FROM user_registration WHERE user_id = '{$user_id}'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $output = $row['user_name'];
    }
    return $output;
}

function fetch_name($conn, $courseId)
{
    $ans = '';
    $sql = "SELECT * FROM course WHERE course_ID = '{$courseId}'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $ans = $row['course_title'];
    }
    return $ans;
}


require_once('TCPDF-main/tcpdf.php');

include 'config.php'; // Include database configuration
$user_id = $_SESSION['user_id'];

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

$user_name = fetch_data($conn, $user_id);
$course_name = fetch_name($conn, $courseId); // Replace this with dynamic data if needed

// Define the border image path (use absolute path)
$border_image_path = __DIR__ . '/Assests/border.jpg'; // Ensure the path is correct

// Check if the image exists
if (!file_exists($border_image_path)) {
    ob_end_clean(); // Clean the buffer
    die('Border image not found.');
}

// Add a background image for the border effect
$pdf->Image($border_image_path, 10, 10, $pdf->getPageWidth() - 20, $pdf->getPageHeight() - 20, '', '', '', false, 300, '', false, false, 0);

// Set margins to create a space for the border
$pdf->SetMargins(20, 20, 20);

// Add HTML content for the certificate
$html = <<<EOD
    <style>
        .main-container{
            height: 100%;
        }

        .institute-name {
            color: #181857;
            text-align: center;
            font-size: 35px;
            font-weight: 600;
            margin-top :10px;
        }

        .certificate{
            color: #181857;
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
            text-align: center;
            font-size: 30px;
        }

        .title{
            background-color: #181857;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 30px;
            border:1px solid black;
        }

       .box {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .border-bottom {
            border-bottom: 2px solid #000;
        }

        .text-center {
            text-align: center;
        }

        .text-end {
            text-align: end;
        }

        .fw-medium {
            font-weight: 500;
        }

        .fs-4 {
            font-size: 16px;
        }

        .fs-3 {
            font-size: 18px;
        }

        .fw-semibold {
            font-weight: 600;
        }

        .mx-auto {
            margin: 0 auto;
        }

        .w-75 {
            width: 75%;
        }

        .mt-4 {
            margin-top: 1.5rem;
        }

        .my-5 {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
    </style>
    <div class="main-container">
        <p class="institute-name" style="border:1px solid black">MyCourse.io</p>
        <p class="certificate">Certification</p>
        <p class="fs-5 fw-semibold mx-auto w-75 text-center">$course_name course</p>
        <p class="title">This is proudly presented to</p>
        <p class="fs-4 fw-semibold mx-auto w-75 text-center border-bottom">$user_name</p>
        <p class="fs-4 fw-semibold mx-auto my-5 text-center">With dedication and hard work, you have achieved a significant milestone in this course. Your commitment to learning and growth is truly commendable. Congratulations on this remarkable achievement!</p>
        <div class="box  w-75 mx-auto mt-4">
            <div class="date fw-semibold fs-3 text-end">
                <p class="border-bottom"></p>
                Date
            </div>
            <div class="signature fw-semibold fs-3 text-end">
                <p class="border-bottom"></p>
                Signature
            </div>
        </div>
    </div>
EOD;

// Write HTML content to PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF as a download
ob_end_clean(); // Clean the buffer
$pdf->Output('course-completion-certificate.pdf', 'D');

exit;
?>
