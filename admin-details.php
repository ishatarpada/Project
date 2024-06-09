<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-details</title>
  <!-- SweetAlert CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['info'])) {
    // Retrieve form data
    $full_name = $_POST['full_name'];
    $user_name = $_POST['username'];
    $mail_ID = $_POST['email'];
    $city = $_POST['location'];
    $phone_no = $_POST['phone_number'];
    $bio = $_POST['about_me'];
    $contact_information = $_POST['contact_information'];
    $expertise = $_POST['expertise'];

    // Handle file uploads
    $targetDir = "Assests/";
    $image = $_FILES['user_img']['name'];
    $timestamp = time();
    $targetFile = $targetDir . $timestamp . '_' . basename($image);

    $uploadOk = 1;
    $errors = [];
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["user_img"]["tmp_name"]);
    if ($check === false) {
        $uploadOk = 0;
        $errors[] = "File is not an image.";
    }

    if ($_FILES["user_img"]["size"] > 500000) {
        $uploadOk = 0;
        $errors[] = "Sorry, your file is too large.";
    }

    if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        $uploadOk = 0;
        $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    if ($uploadOk == 0) {
        echo "<script>
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: '" . implode("<br>", $errors) . "',
              });
              </script>";
    } else {
        if (move_uploaded_file($_FILES["user_img"]["tmp_name"], $targetFile)) {
            $user_img = $targetFile;

            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];

                // Retrieve admin_id based on the username from session
                $adminIdQuery = "SELECT admin_id FROM admin WHERE username='$username'";
                $stmt = mysqli_query($conn, $adminIdQuery);

                // If username doesn't exist, show error
                if (mysqli_num_rows($stmt) === 0) {
                    echo '<script>
                  Swal.fire({
                      title: "OOPS!",
                      text: "Username does not exist",
                      icon: "error"
                  }).then((result) => {
                      if (result.isConfirmed) {
                          window.location.href = "admin-details.php";
                      }
                  });
                  </script>';
                    exit();
                }

                $adminRow = mysqli_fetch_assoc($stmt);
                $admin_id = $adminRow['admin_id'];

                $sql = "UPDATE admin SET 
                                full_name=?, 
                                profile_picture=?, 
                                email=?, 
                                city=?, 
                                phone_no=?, 
                                bio=?, 
                                contact_information=?, 
                                expertise=? 
                                WHERE admin_id=?";

                $stmt = mysqli_prepare($conn, $sql);
                if ($stmt === false) {
                    die('Prepare failed: ' . htmlspecialchars(mysqli_error($conn)));
                }

                mysqli_stmt_bind_param($stmt, "ssssssssi", $full_name, $user_img, $mail_ID, $city, $phone_no, $bio, $contact_information, $expertise, $admin_id);
                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                    echo "<script>
                              Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Profile updated successfully.',
                                timer: 2000,
                                showConfirmButton: false
                              }).then(function() {
                                window.location = 'admin-dashboard.php';
                              });
                              </script>";
                } else {
                    echo 'Execute failed: ' . htmlspecialchars(mysqli_stmt_error($stmt));
                    echo "<script>
                              Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'There was an error updating your profile. Please try again.',
                              });
                              </script>";
                }
            } else {
                echo "<script>
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No user logged in. Please log in first.',
                      });
                      </script>";
            }
        } else {
            echo 'Upload failed: ' . htmlspecialchars(error_get_last()['message']);
            echo "<script>
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sorry, there was an error uploading your file.',
                  });
                  </script>";
        }
    }
}
?>

<!-- SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
