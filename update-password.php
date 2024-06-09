<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>update password</title>
  <!--  SweetAlert script -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<?php
session_start();

include 'config.php'; // Include your database connection file

if (isset($_POST["update"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $_POST["confirm_password"]);

    // Validate password and confirm password
    if ($password != $confirm_password) {
        $_SESSION['status'] = "Passwords do not match";
        header("Location: change-password.php");
        exit();
    }

    // Hash the password before storing it in the database
    $hashed_password = md5($password);
    $hashed_confirmPassword = md5($confirm_password);

    $update_password = "UPDATE user_registration SET password = '$hashed_password', confirmPassword = '$hashed_confirmPassword' WHERE mail_ID = '$email'";

    $update_password_run = mysqli_query($conn, $update_password);

    if ($update_password_run) {
        $_SESSION['status'] = "Password updated successfully";
        echo '<script>
        Swal.fire({
            title: "yeah!",
            text: "Password updated successfully !..",
            icon: "success"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "login.html";
            }
        });
        </script>';
        exit();
    } else {
        $_SESSION['status'] = "Failed to update password";
        echo '<script>
        Swal.fire({
            title: "OOPS!",
            text: "Failed to update password",
            icon: "error"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "change-password.php";
            }
        });
        </script>';
        exit();
    }
} else {
    $_SESSION['status'] = "Invalid request";
    echo '<script>
    Swal.fire({
        title: "OOPS!",
        text: "Invalid request",
        icon: "error"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "change-password.php";
        }
    });
    </script>';
    exit();
}

?>

</body>

</html>