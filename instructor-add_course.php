<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>instructor add course</title>
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
        $targetDir = "Assests/";
        $image1 = $_FILES['instructor_img']['name'];
        $image2 = $_FILES['course_img']['name'];
        $timestamp1 = time();
        $timestamp2 = time();
        $targetFile1 = $targetDir . $timestamp1 . '_' . basename($image1);
        $targetFile2 = $targetDir . $timestamp2 . '_' . basename($image2);
        $uploadOk = 1;
        $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));
        $imageFileType2 = strtolower(pathinfo($targetFile2, PATHINFO_EXTENSION));
        $check1 = getimagesize($_FILES["instructor_img"]["tmp_name"]);
        $check2 = getimagesize($_FILES["course_img"]["tmp_name"]);
        if ($check1 === false || $check2 === false) {
            $errors[] = "File is not an image.";
            $uploadOk = 0;
        }
        if ($_FILES["instructor_img"]["size"] > 500000 || $_FILES["course_img"]["size"] > 500000) {
            $errors[] = "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if (
            $imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
            && $imageFileType1 != "gif" && $imageFileType2 != "jpg" && $imageFileType2 != "png"
            && $imageFileType2 != "jpeg" && $imageFileType2 != "gif"
        ) {
            $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
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
            if (
                move_uploaded_file($_FILES["instructor_img"]["tmp_name"], $targetFile1) &&
                move_uploaded_file($_FILES["course_img"]["tmp_name"], $targetFile2)
            ) {
                $instructor_img = $targetDir . basename($image1);
                $course_img = $targetDir . basename($image2);

                $get_id_query = "SELECT InstructorID FROM Instructors WHERE Instructor_Username = '$instructor'";
                $query_result = mysqli_query($conn, $get_id_query);
                if ($query_result && mysqli_num_rows($query_result) > 0) {
                    $row = mysqli_fetch_assoc($query_result);
                    $instructor_ID = $row['InstructorID'];

                    $sql1 = "INSERT INTO course (course_title, course_description, course_category, course_level, course_language, course_time, total_lecture, instructor, channel_name, instructor_img, course_price, course_discount_price, course_img, video_url , instructor_ID) VALUES ('$course_title', '$course_description', '$course_category', '$course_level', '$course_language', '$course_time', '$total_lecture', '$instructor', '$channel_name', '$instructor_img', '$course_price', '$discount_price', '$course_img', '$video_url' , '$instructor_ID')";

                    $result1 = mysqli_query($conn, $sql1);

                    // Fetch the inserted course_id
                    $course_id = mysqli_insert_id($conn);

                    if ($result1) {
                        $sql2 = "INSERT INTO instructor_course (instructor_ID, course_ID , course_title, course_description, course_category, course_level, course_language, course_time, total_lecture, instructor_Username, channel_name, instructor_img, course_price, course_discount_price, course_img, video_url) VALUES ('$instructor_ID', '$course_id'  , '$course_title', '$course_description', '$course_category', '$course_level', '$course_language', '$course_time', '$total_lecture', '$instructor', '$channel_name', '$instructor_img', '$course_price', '$discount_price', '$course_img', '$video_url')";

                        $result2 = mysqli_query($conn, $sql2);

                        if ($result2) {
                            echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Course added successfully.',
                            timer: 2000,
                            showConfirmButton: false
                            }).then(function() {
                                window.location.href = 'http://localhost/courseregistration/instructor-course.php';
                            });
                            </script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                } else {
                    echo "Error: " . $get_id_query . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Sorry, there was an error uploading your files.";
            }
        }
    }
    ?>


</body>

</html>