<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>instructor Login</title>
    <!-- SweetAlert script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    if (isset($_POST['login'])) {
        include 'config.php';
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pswd = $_POST['password'];
        $hashedPassword = md5($pswd);

        // Retrieve password and approve_request value from database
        $sql = "SELECT password, approve_request , email_verified FROM Instructors WHERE Instructor_Username = '{$username}'";
        $result = mysqli_query($conn, $sql) or die("Query Failed");

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $password = $row['password'];
            $approve_request = $row['approve_request'];
            $email_verified = $row['email_verified'];

            if ($hashedPassword == $password && $approve_request == 1 && $email_verified == 1) {
                // Set session variables and redirect to instructor dashboard after successful login
                $_SESSION["username"] = $username;
                $_SESSION["email"] = $email;
                $_SESSION["role"] = "Instructors";

                // Update last login time
                $query = "UPDATE Instructors SET LastLogin = NOW() WHERE Instructor_Username = '$username'";
                if (mysqli_query($conn, $query)) {
                    echo '<script>
                    Swal.fire({
                        title: "Success!",
                        text: "Login successful!",
                        icon: "success"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "instructor-dashboard.php";
                        }
                    });
                </script>';
                    exit();
                } else {
                    echo "Error updating last login time: " . mysqli_error($conn);
                }

                // Display SweetAlert success message

            } elseif ($hashedPassword != $password) {
                // Display SweetAlert error message for incorrect password
                echo '<script>
                        Swal.fire({
                            title: "Oops!",
                            text: "Password not matched.",
                            icon: "error"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "instructor-login.html";
                            }
                        });
                    </script>';
            } elseif ($approve_request != 1) {
                // Display SweetAlert error message for instructor not approved
                echo '<script>
                        Swal.fire({
                            title: "Oops!",
                            text: "Your account is not yet approved.",
                            icon: "error"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "instructor-login.html";
                            }
                        });
                    </script>';
            } elseif ($email_verified != 1) {
                // Display SweetAlert error message for instructor not approved
                echo '<script>
                      Swal.fire({
                          title: "Oops!",
                          text: "Your mail id in not verified.",
                          icon: "error"
                      }).then((result) => {
                          if (result.isConfirmed) {
                              window.location.href = "instructor-login.html";
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
                            window.location.href = "instructor-login.html";
                        }
                    });
                </script>';
        }
    }
    ?>
</body>

</html>