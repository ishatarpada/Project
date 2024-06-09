<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update course</title>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>

    <?php
    // Include database connection
    include 'config.php';

    // Initialize variables for potential errors
    $errors = [];

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $course_ID = $_GET['id'];

        // Sanitize input data to prevent SQL injection
        $course_title = mysqli_real_escape_string($conn, $_POST['course_title']);
        $course_description = mysqli_real_escape_string($conn, $_POST['course_description']);
        $course_category = mysqli_real_escape_string($conn, $_POST['course_category']);
        $course_level = mysqli_real_escape_string($conn, $_POST['course_level']);
        $course_language = mysqli_real_escape_string($conn, $_POST['course_language']);
        $course_time = mysqli_real_escape_string($conn, $_POST['course_time']);
        $total_lecture = mysqli_real_escape_string($conn, $_POST['total_lecture']);
        $instructor = mysqli_real_escape_string($conn, $_POST['instructor']);
        $channel_name = mysqli_real_escape_string($conn, $_POST['channel_name']);
        $course_price = floatval($_POST['course_price']);
        $discount_price = mysqli_real_escape_string($conn, $_POST['discount_price']);
        $video_url = mysqli_real_escape_string($conn, $_POST['video_url']);

        // Handle file uploads

        // Define the target directory for uploads
        $targetDir = "Assests/";

        // Get the names of the uploaded images
        $image1 = $_FILES['instructor_img']['name'];
        $image2 = $_FILES['course_img']['name'];

        // Generate timestamps for image filenames
        $timestamp1 = time();
        $timestamp2 = time();

        // Generate target file paths with timestamps
        $targetFile1 = $targetDir . $timestamp1 . '_' . basename($image1);
        $targetFile2 = $targetDir . $timestamp2 . '_' . basename($image2);

        // Check if form data is valid for file uploads
        $uploadOk = 1;
        $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));
        $imageFileType2 = strtolower(pathinfo($targetFile2, PATHINFO_EXTENSION));

        // Check if images are valid
        $check1 = getimagesize($_FILES["instructor_img"]["tmp_name"]);
        $check2 = getimagesize($_FILES["course_img"]["tmp_name"]);
        if ($check1 === false || $check2 === false) {
            $errors[] = "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["instructor_img"]["size"] > 500000 || $_FILES["course_img"]["size"] > 500000) {
            $errors[] = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
            && $imageFileType1 != "gif" && $imageFileType2 != "jpg" && $imageFileType2 != "png"
            && $imageFileType2 != "jpeg" && $imageFileType2 != "gif"
        ) {
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
            if (
                move_uploaded_file($_FILES["instructor_img"]["tmp_name"], $targetFile1) &&
                move_uploaded_file($_FILES["course_img"]["tmp_name"], $targetFile2)
            ) {
                // Set the image paths for database insertion
                $instructor_img = $targetDir . basename($image1);
                $course_img = $targetDir . basename($image2);

                // Proceed with database insertion
                // Sanitize other form data before inserting into the database

                // SQL query to insert data into the database
                $sql = "UPDATE course SET 
                course_title = '$course_title',
                course_description = '$course_description',
                course_category = '$course_category',
                course_level = '$course_level',
                course_language = '$course_language',
                course_time = '$course_time',
                total_lecture = '$total_lecture',
                instructor = '$instructor',
                channel_name = '$channel_name',
                instructor_img = '$instructor_img',
                course_price = '$course_price',
                course_discount_price = '$discount_price',
                course_img = '$course_img',
                video_url = '$video_url'
                WHERE course_ID = '$course_ID'";


                if (mysqli_query($conn, $sql)) {
                    // Course added successfully, show SweetAlert notification and redirect
                    echo "<script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Course update successfully.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(function() {
                                window.location.href = 'http://localhost/courseregistration/admin-course.php';
                            });
                        </script>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Sorry, there was an error uploading your files.";
            }
        }
    }
    ?>

</body>

</html>