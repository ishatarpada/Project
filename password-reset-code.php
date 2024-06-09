<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>password reset</title>
    <!-- SweetAlert script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    // Include your database connection file before using $conn
    include 'config.php';

    if (isset($_POST["submit"])) {
        // Generate a unique token for the password reset
        $resetToken = md5(uniqid(rand(), true));

        // Retrieve the email from the form
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        // Update the verification code (reset token) in the database
        $update_token_query = "UPDATE user_registration SET verification_code = '$resetToken' WHERE mail_ID = '$email'";
        $update_token_result = mysqli_query($conn, $update_token_query);

        if ($update_token_result) {
            // Send the password reset email
            $mail_sent = send_password_reset($email, $resetToken);

            if ($mail_sent) {
                $_SESSION['status'] = "Password reset link sent successfully";
                echo '<script>
                    Swal.fire({
                        title: "Success!",
                        text: "Password reset link sent successfully",
                        icon: "success"
                    }).then(() => {
                        window.location.href = "change-password.php";
                    });
                    </script>';
            } else {
                $_SESSION['status'] = "Failed to send reset link. Please try again later.";
                echo '<script>
                    Swal.fire({
                        title: "Error!",
                        text: "Failed to send reset link. Please try again later.",
                        icon: "error"
                    }).then(() => {
                        window.location.href = "login.html";
                    });
                    </script>';
            }
        } else {
            $_SESSION['status'] = "Something went wrong";
            echo '<script>
                Swal.fire({
                    title: "Error!",
                    text: "Something went wrong",
                    icon: "error"
                }).then(() => {
                    window.location.href = "login.html";
                });
                </script>';
        }
    } else if (isset($_GET['token']) && isset($_GET['email'])) {
        $token = mysqli_real_escape_string($conn, $_GET['token']);
        $email = mysqli_real_escape_string($conn, $_GET['email']);

        $check_token = "SELECT mail_ID FROM user_registration WHERE mail_ID = '$email' AND verification_code = '$token'";
        $check_token_run = mysqli_query($conn, $check_token);

        if (mysqli_num_rows($check_token_run) > 0) {
            // Token is valid, redirect to update password page
            $_SESSION['status'] = "You can now update your password";
            echo '<script>
                Swal.fire({
                    title: "Success!",
                    text: "You can now update your password",
                    icon: "success"
                }).then(() => {
                    window.location.href = "update-password.php?email=' . $email . '&token=' . $token . '";
                });
                </script>';
        } else {
            // Token is invalid, show error message and redirect to login page
            $_SESSION['status'] = "Invalid reset link";
            echo '<script>
                Swal.fire({
                    title: "Error!",
                    text: "Invalid reset link",
                    icon: "error"
                }).then(() => {
                    window.location.href = "login.html";
                });
                </script>';
        }
    }

    function send_password_reset($email, $token)
    {
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/SMTP.php';

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ishatarpada@gmail.com';
            $mail->Password = 'fsbl ojcl kvmk wpbe';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Enable verbose debug output
            // $mail->SMTPDebug = 2;

            $mail->setFrom('ishatarpada@gmail.com', 'MyCourse.io');
            // $mail->addAddress($get_email);
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Reset Password';
            $mail->Body = "Click here to reset your password: <a href='http://localhost/courseregistration/update-password.php?token=$token&email=$email'>Reset link</a>";

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    ?>

</body>

</html>