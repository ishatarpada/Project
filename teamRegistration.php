<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team Register Process</title>
    <!-- SweetAlert script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require('PHPMailer/PHPMailer.php');
    require('PHPMailer/Exception.php');
    require('PHPMailer/SMTP.php');

    if (isset($_POST['teamReg'])) {
        include 'config.php';

        $email = mysqli_real_escape_string($conn, $_POST['mail']);
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $phoneNo = mysqli_real_escape_string($conn, $_POST['phoneNo']);
        $peoples = mysqli_real_escape_string($conn, $_POST['peoples']);
        $domainName = mysqli_real_escape_string($conn, $_POST['domainName']);
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        // Check if passwords match
        if ($password !== $confirmPassword) {
            echo '<script>
                Swal.fire({
                    title: "OOPS!",
                    text: "Password does not match",
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

        // Generate a verification code
        $verificationCode = md5(uniqid(rand(), true));

        $sql = "INSERT INTO team_registration (work_email, first_name, last_name, job_title, phone_number, number_of_people, sub_domain, password,confirmPassword , email_verified, verification_code) 
                VALUES ('$email', '$fname', '$lname', '$title', '$phoneNo', '$peoples', '$domainName', '$hashedPassword', '$hashedConfirmPassword' , 0, '$verificationCode')";

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
                        window.location.href = "Subscription.php";
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
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "teamRegistration.php";
                }
            });
            </script>';
        }

        mysqli_close($conn);
    }
    ?>
</body>
</html>
