<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>verify Email</title>
    <!--  SweetAlert script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    include 'config.php';

    if (isset($_GET['code']) && isset($_GET['email'])) {
        $verificationCode = $_GET['code'];
        $email = $_GET['email'];

        // Verify email
        $sql = "UPDATE user_registration SET email_verified = 1 WHERE mail_ID = '$email' AND verification_code = '$verificationCode'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>
            Swal.fire({
                title: "Good job!",
                text: "Email verified successfully.",
                icon: "success"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "index.php";
                }
            });
        </script>';
        } else {
            echo '<script>
            Swal.fire({
                title: "Oops!",
                text: "Verification failed. Please try again.",
                icon: "error"
            });
        </script>';
        }
    } else {
        echo '<script>
        Swal.fire({
            title: "Oops!",
            text: "Invalid verification link.",
            icon: "error"
        });
    </script>';
    }

    if (isset($_GET['code']) && isset($_GET['email'])) {
        $verificationCode = $_GET['code'];
        $email = $_GET['email'];

        // Verify email
        $sql = "UPDATE Instructors SET email_verified = 1 WHERE Email = '$email' AND verification_code = '$verificationCode'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>
            Swal.fire({
                title: "Good job!",
                text: "Email verified successfully.",
                icon: "success"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "index.php";
                }
            });
        </script>';
        } else {
            echo '<script>
            Swal.fire({
                title: "Oops!",
                text: "Verification failed. Please try again.",
                icon: "error"
            });
        </script>';
        }
    } else {
        echo '<script>
        Swal.fire({
            title: "Oops!",
            text: "Invalid verification link.",
            icon: "error"
        });
    </script>';
    }

    mysqli_close($conn);

    ?>
</body>

</html>