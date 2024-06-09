<?php 
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instructor Fill Details</title>
    <!--  SweetAlert script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php
    if (isset($_POST['info'])) { // Changed from 'register' to 'info' to match the button name
        include 'config.php';

        // Handle file uploads
        $targetDir = "Assests/";
        $image = $_FILES['instructor_img']['name'];
        $timestamp = time();
        $targetFile = $targetDir . $timestamp . '_' . basename($image);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["instructor_img"]["tmp_name"]);

        // Check if images are valid
        if ($check === false) {
            $errors[] = "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["instructor_img"]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES["instructor_img"]["tmp_name"], $targetFile)) {
                $instructor_img = $targetDir . basename($targetFile); // Changed from 'image' to 'targetFile'

                // Retrieve other form data
                $instructor_username = mysqli_real_escape_string($conn, $_POST['instructor_username']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
                $details = mysqli_real_escape_string($conn, $_POST['details']);

                // Check if the username exists
                $get_username = "SELECT Instructor_Username FROM Instructors WHERE Instructor_Username = '$instructor_username'";
                $usernameResult = mysqli_query($conn, $get_username);

                // If username doesn't exist, show error
                if (mysqli_num_rows($usernameResult) === 0) {
                    echo '<script>
                            Swal.fire({
                                title: "OOPS!",
                                text: "Username does not exist",
                                icon: "error"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "instructor-fill-details.php";
                                }
                            });
                            </script>';
                    exit();
                }

                // Update instructor details in the database
                $sql = "UPDATE Instructors SET ProfilePicture = '$instructor_img', Email = '$email', phone_No = '$phone_number', instructor_details = '$details' WHERE Instructor_Username = '$instructor_username'";
                $result = mysqli_query($conn, $sql);

                // Check if the update was successful
                if ($result) {
                    echo '<script>
                            Swal.fire({
                                title: "Good job!",
                                text: "Thank you for filling the information",
                                icon: "success"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "instructor-login.html";
                                }
                            });   
                            </script>';

                } else {
                    // If the update failed, show error message
                    echo '<script>
                            Swal.fire({
                                title: "Oops!",
                                text: "Registration failed. Please try again.",
                                icon: "error"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "instructor-sign-in.html";   
                                }
                            });     
                            </script>';
                }

            } else {
                $errors[] = "Sorry, there was an error uploading your file.";
                // Display errors with SweetAlert
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: '" . implode("<br>", $errors) . "',
                        });
                    </script>";
            }
        }

        mysqli_close($conn);
    }
    ?>

</body>

</html>
