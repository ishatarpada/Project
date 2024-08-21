<?php
session_start();
ob_start(); // Start output buffering

include './config/config.php';

require_once('TCPDF-main/tcpdf.php'); // Include TCPDF library

// Set PDF page orientation, unit, and format if not defined elsewhere
if (!defined('PDF_PAGE_ORIENTATION')) define('PDF_PAGE_ORIENTATION', 'P');
if (!defined('PDF_UNIT')) define('PDF_UNIT', 'mm');
if (!defined('PDF_PAGE_FORMAT')) define('PDF_PAGE_FORMAT', 'A4');

// Create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Payment Receipt');
$pdf->SetSubject('Payment Receipt');
$pdf->SetKeywords('Receipt, Payment');

// Add a page
$pdf->AddPage();

// Fetch payment details using PHP
$payment_id = isset($_GET["id"]) ? $_GET["id"] : ""; // Get payment ID from URL parameter
$payment_id = mysqli_real_escape_string($conn, $payment_id); // Sanitize the input
$sql = "SELECT * FROM payments WHERE payment_id = '{$payment_id}'";

// Debug output for troubleshooting
echo $payment_id; // Check if payment_id is being received
echo $sql; // Check the generated SQL query

$result = mysqli_query($conn, $sql);

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Payment Receipt</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <div class="container" style="padding: 20px;">
        <div class="content">
        <h2 style="font-weight: bold; font-size: 24px; border-bottom: 2px solid #000; text-align: center;">Payment Receipt</h2>
        <div class="invoice" style="margin-top: 20px;">';

// Check if the payment ID is not empty and is in the correct format
if (!empty($payment_id) && mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $html .= '
            <div class="invoice-info">
                <p style="text-align: right; ">' . $row["payer_name"] . '<br>' . date('Y-m-d', strtotime($row["created_at"]))  . '</p>
            </div>
            <table class="invoice-items" style="border-collapse: collapse;">
        <thead>
        <tr style="border: 1px solid black;">
            <th style="background-color: #1c1c1c; color: white; font-size: 20px; text-align: center; padding: 20px; margin:20px;">Invoice ID</th>
            <th style="background-color: #1c1c1c; color: white; font-size: 20px; text-align: center;  padding: 20px; margin:20px;">Course Name</th>
            <th style="background-color: #1c1c1c; color: white; font-size: 20px; text-align: center;  padding: 20px; margin:20px;">Amount</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="border: 1px solid black; padding : 10px;">
                <td>' . $row["payment_id"] . '</td>
                <td>' . $row["item_name"] . '</td>
                <td style="text-align:center;">' . $row["amount"] . '</td>
            </tr>
        </tbody>
    </table> ';
        $html .= '
    <div class="invoice-info" style="text-align: right;">
        <p style="font-size: 20px;">Total: ' . $row["amount"] . '</p>
    </div>';
    }
} else {
    // Handle invalid payment ID (e.g., display an error message)
    $html .= '<div class="alert alert-danger">Invalid payment ID</div>';
}

$html .= '
            </div>
        </div>
    </div>
</body>
</html>';

$pdf->writeHTML($html, true, false, true, false, ''); // Write HTML content to PDF

// Close output buffering and send PDF as download
ob_end_clean(); // Clean (erase) the output buffer and turn off output buffering

// Output the PDF as a download
$pdf->Output('payment-receipt.pdf', 'D');

exit; // Exit script