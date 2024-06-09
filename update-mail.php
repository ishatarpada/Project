<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update mail</title>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require('PHPMailer/PHPMailer.php');
    require('PHPMailer/Exception.php');
    require('PHPMailer/SMTP.php');

    // Check if the form is submitted and the updateMail button is clicked
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updateMail'])) {
        // Retrieve form data
        $currentEmail = $_POST['currentMail'];
        $newEmail = $_POST['newMail'];

        // Get the user's ID from the session (assuming you have stored it during login)
        $user_id = 2; // Change this as per your application's logic

        // Fetch the actual current email from the database
        $sqlCurrentEmail = "SELECT mail_ID , verification_code FROM user_registration WHERE user_id = $user_id";
        $resultCurrentEmail = mysqli_query($conn, $sqlCurrentEmail);

        // Check if the query was successful and rows were returned
        if ($resultCurrentEmail && mysqli_num_rows($resultCurrentEmail) > 0) {
            $row = mysqli_fetch_assoc($resultCurrentEmail);
            $currentEmailFromDB = $row['mail_ID'];
            $verificationCode = $row['verification_code'];

            // Check if the entered current email matches the one from the database
            if ($currentEmail == $currentEmailFromDB) {
                // SQL query to update email in the user_registration table and set email_verified to 0
                $updateSql = "UPDATE user_registration SET mail_ID = '$newEmail', email_verified = 0 WHERE user_id = $user_id";

                // Execute the update query
                if (mysqli_query($conn, $updateSql)) {
                    // Email updated successfully, send verification email
                    $mail = new PHPMailer(true);
                    try {
                        // Configure PHPMailer for sending emails
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'ishatarpada@gmail.com'; // Update with your email username
                        $mail->Password = 'fsbl ojcl kvmk wpbe'; // Update with your email password
                        $mail->SMTPSecure = 'tls';
                        $mail->Port = 587;

                        $mail->setFrom('ishatarpada@gmail.com', 'MyCourse.io');
                        $mail->addAddress($newEmail); // Send verification email to the new email
                        $mail->isHTML(true);
                        $mail->Subject = 'Verify Your Email Address';
                        $mail->Body = "Please click the following link to verify your email address: <a href='http://localhost/courseregistration/verify_email.php?code=$verificationCode&email=" . urlencode($newEmail) . "'>Verify Email</a>";

                        $mail->send();

                        // Display success message and redirect
                        echo '<script>
                        Swal.fire({
                            title: "Good job!",
                            text: "Email updated successfully! Check your email for verification.",
                            icon: "success"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "http://localhost/courseregistration/profile.php";
                            }
                        });
                    </script>';
                    } catch (Exception $e) {
                        // Error handling for PHPMailer
                        echo "Mailer Error: {$mail->ErrorInfo}";
                    }
                } else {
                    // Error updating email in the database
                    echo '<script>
                    Swal.fire({
                        title: "Error!",
                        text: "Error updating email: ' . mysqli_error($conn) . '",
                        icon: "error",
                        button: "OK"
                    });
                </script>';
                }
            } else {
                // Current email entered does not match the one in the database
                echo '<script>
                Swal.fire({
                    title: "Error!",
                    text: "Current email is incorrect.",
                    icon: "error",
                    button: "OK",
                });
            </script>';
            }
        } else {
            // Failed to fetch current email from the database
            echo '<script>
            Swal.fire({
                title: "Error!",
                text: "Failed to retrieve current email from the database.",
                icon: "error",
                button: "OK",
            });
        </script>';
        }
    }

    ?>

    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>