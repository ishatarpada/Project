<?php 
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-in</title>
    <!--  SweetAlert script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require('PHPMailer/PHPMailer.php');
    require('PHPMailer/Exception.php');
    require('PHPMailer/SMTP.php');

    if (isset($_POST['register'])) {
        include 'config.php';

        $instructor = mysqli_real_escape_string($conn, $_POST['instructor']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        // Check if passwords match
        if ($password !== $confirmPassword) {
            echo '<script>
                Swal.fire({
                    title: "OOPS!",
                    text: "Password is not matched",
                    icon: "error"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "sign-up.html";
                    }
                });
                </script>';
            exit();
        }

        $hashedPassword = md5($password);
        $hashedConfirmPassword = md5($confirmPassword);

        // Generate a verification code3
        $verificationCode = md5(uniqid(rand(), true));

        $sql = "INSERT INTO Instructors (Instructor_Username, Email, password, confirm_password, email_verified, verification_code) VALUES ('$instructor', '$email', '$hashedPassword', '$hashedConfirmPassword', 0, '$verificationCode')"; // Set email_verified to 0 by default
        $result = mysqli_query($conn, $sql);

        if ($result) {
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
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'Verify Your Email Address';
                $mail->Body = "Please click the following link to verify your email address: <a href='http://localhost/courseregistration/verify_email.php?code=$verificationCode&email=" . urlencode($email) . "'>Verify Email</a>";


                $mail->send();
                echo '<script>
                Swal.fire({
                    title: "Good job!",
                    text: "Registration successful! Check your email for verification.",
                    icon: "success"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "instructor-fill-details.html";
                    }
                });
                </script>';
            } catch (Exception $e) {
                echo "Mailer Error: {$mail->ErrorInfo}";
            }

        } else {
            echo '<script>
            Swal.fire({
                title: "Oops!",
                text: "Registration failed. Please try again.",
                icon: "error"
            });
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "instructor-sign-in.html";   
                }
            });     
            </script>';
        }

        mysqli_close($conn);
    }
    ?>

</body>

</html>