<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Details</title>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['info'])) {
        // Retrieve form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $location = $_POST['location'];
        $about_me = mysqli_real_escape_string($conn, $_POST['about_me']);


        // Handle file uploads

        // Define the target directory for uploads
        $targetDir = "Assests/";

        // Get the names of the uploaded images
        $image = $_FILES['user_img']['name'];

        // Generate timestamps for image filenames
        $timestamp = time();

        // Generate target file paths with timestamps
        $targetFile = $targetDir . $timestamp . '_' . basename($image);

        // Check if form data is valid for file uploads
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if images are valid
        $check = getimagesize($_FILES["user_img"]["tmp_name"]);
        if ($check === false) {
            $errors[] = "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["user_img"]["size"] > 500000) {
            $errors[] = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            // Display errors with SweetAlert
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        html: '" . implode("<br>", $errors) . "',
                    });
                </script>";
        } else {
            // Upload files if everything is okay
            if (move_uploaded_file($_FILES["user_img"]["tmp_name"], $targetFile)) {
                // Set the image paths for database insertion
                $user_img = $targetDir . basename($image);

                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    // Proceed with database insertion

                    // SQL query to update data in the database
                    $sql = "UPDATE user_registration 
                SET first_name='$first_name', 
                last_name='$last_name', 
                profile_img='$user_img', 
                user_name='$username', 
                mail_ID='$email', 
                phone_No='$phone_number', 
                city='$location', 
                about_me='$about_me' 
                WHERE user_name = '{$username}'";
                    // Assuming user_id=1 for testing

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        // Profile updated successfully, show SweetAlert notification and redirect
                        echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Profile updated successfully.',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(function() {
                            window.location.href = 'http://localhost/courseregistration/index.php';
                        });
                    </script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            } else {
                echo "Sorry, there was an error uploading your files.";
            }
        }
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['changePass'])) {
        // Retrieve form data
        $currentPassword = $_POST['currentPass'];
        $newPassword = $_POST['newPass'];
        $confirmPassword = $_POST['confirmPass'];

        // Get the user's ID from the session (assuming you have stored it during login)
        $user_id = 1; // Replace this with actual user ID retrieval logic

        // Retrieve the current password from the database
        $sql = "SELECT password FROM user_registration WHERE user_id = $user_id";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row['password'];

            // Verify if the current password matches the stored password
            if (md5($currentPassword) === $storedPassword) {
                // Hash the new password before updating using MD5
                $hashedPassword = md5($newPassword);

                // Update the password in the database
                $updateSql = "UPDATE user_registration SET password='$hashedPassword' WHERE user_id = $user_id";

                if (mysqli_query($conn, $updateSql)) {
                    // Password updated successfully, show SweetAlert notification
                    echo '<script>
                            Swal.fire({
                                title: "Success!",
                                text: "Password updated successfully.",
                                icon: "success",
                                button: "OK"
                            }).then(function() {
                                // Redirect to index.php after alert is closed
                                window.location.href = "index.php";
                            });
                          </script>';
                } else {
                    // Error updating password
                    echo '<script>
                            Swal.fire({
                                title: "Error!",
                                text: "Error updating password: ' . mysqli_error($conn) . '",
                                icon: "error",
                                button: "OK"
                            });
                          </script>';
                }
            } else {
                // Current password does not match
                echo '<script>
                        Swal.fire({
                            title: "Error!",
                            text: "Current password is incorrect.",
                            icon: "error",
                            button: "OK"
                        });
                      </script>';
            }
        } else {
            // Error retrieving current password
            echo '<script>
                    Swal.fire({
                        title: "Error!",
                        text: "Failed to retrieve current password.",
                        icon: "error",
                        button: "OK"
                    });
                  </script>';
        }
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uploadDetails'])) {
        // Retrieve form data
        $linkedin_id = $_POST['facebook_username'];
        $github_id = $_POST['twitter_username'];
        $behance_link = $_POST['instagram_username'];

       

        // SQL query to update data in the user_registration table
        $sql = "UPDATE user_registration 
                SET linkedin_id = '$linkedin_id', 
                    github_id = '$github_id', 
                    behance_link = '$behance_link'
                WHERE user_id = $user_id";

        if (mysqli_query($conn, $sql)) {
            // Data updated successfully
            echo
            '<script>
                            Swal.fire({
                                title: "Success!",
                                text: "Details added successfully.",
                                icon: "success",
                                button: "OK"
                            }).then(function() {
                                // Redirect to index.php after alert is closed
                                window.location.href = "index.php";
                            });
                          </script>';
        } else {
            // Error updating data
            $error_message = mysqli_error($conn); // Get the error message
            echo '<script>
            Swal.fire({
                title: "Error!",
                text: "Error updating data: ' . $error_message . '",
                icon: "error",
                button: "OK"
            });
          </script>';
        }
    }


    ?>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>