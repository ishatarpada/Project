<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <!-- SweetAlert script -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php
    if (isset($_POST['login'])) {
        include './config/config.php';
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $pswd = $_POST['password'];
        $hashedPassword = md5($pswd); // Using MD5 hashing (not recommended for production)
        $sql = "SELECT * FROM user_registration WHERE user_name = '{$username}'";

        $result = mysqli_query($conn, $sql) or die("Query Failed");

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $password = $row['password'];
            $email = $row['mail_ID'];
            $user_id = $row['user_id'];

            if ($hashedPassword == $password) {
                // Insert login details into the user_login table
                $login_details = "INSERT INTO user_login (user_name, password) 
                                  VALUES ('$username', '$hashedPassword')"; // Assuming user_login has columns user_name and password

                $result_login = mysqli_query($conn, $login_details); // Execute the insert query

                if ($result_login) {
                    // Set session variables and redirect to dashboard after successful login
                    $_SESSION["username"] = $username;
                    $_SESSION["user_id"] = $user_id;
                    $_SESSION["email"] = $email;
                    $_SESSION["role"] = "user";
                    header("Location: index.php");
                    exit();
                } else {
                    // Display SweetAlert error message for login details insertion failure
                    echo '<script>
                            Swal.fire({
                                title: "Oops!",
                                text: "Failed to insert login details.",
                                icon: "error"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "login.html";
                                }
                            });
                        </script>';
                }
            } else {
                // Display SweetAlert error message for incorrect password
                echo '<script>
                        Swal.fire({
                            title: "Oops!",
                            text: "Password not matched.",
                            icon: "error"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "login.html";
                            }
                        });
                    </script>';
            }
        } else {
            // Display SweetAlert error message for username not found
            echo '<script>
                    Swal.fire({
                        title: "Oops!",
                        text: "Username not found.",
                        icon: "error"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "login.html";
                        }
                    });
                </script>';
        }
    }
    ?>
</body>

</html>