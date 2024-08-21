<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- SweetAlert script -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php
    // Include your database connection file
    include './config/config.php';

    if (isset($_POST["login"])) {
        $username = $_POST["admin_name"];
        $password = $_POST["password"];

        // SQL query to fetch the user's salt and hashed password
        $sql = "SELECT password_hash, salt FROM admin WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($stored_password_hash, $stored_salt);
        $stmt->fetch();
        $stmt->close();

        if ($stored_password_hash && $stored_salt) {
            // Hash the entered password with the stored salt
            $hashed_password = hash('sha256', $password . $stored_salt);

            // Check if the hashed password matches the stored hash
            if ($hashed_password === $stored_password_hash) {
                echo "Login successful";
                // Start session and set session variables
                $_SESSION["username"] = $username;
                $_SESSION["role"] = "admin";

                echo '<script>
              Swal.fire({
                  title: "Success!",
                  text: "You can now login",
                  icon: "success",
                  confirmButtonText: "OK"
              }).then(() => {
                  window.location.href = "admin-dashboard.php";
              });
              </script>';
                exit();
            } else {
                // Passwords do not match
                handleLoginError();
            }
        } else {
            // Admin with the entered username not found
            handleLoginError();
        }

        mysqli_stmt_close($stmt);
    }

    function handleLoginError()
    {
        echo '<script>
      Swal.fire({
          title: "Error!",
          text: "Invalid username or password",
          icon: "error"
      }).then(() => {
          window.location.href = "admin-login.html";
      });
      </script>';
        exit();
    }
    ?>
</body>

</html>