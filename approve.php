<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve Course</title>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
    <?php

    $course_ID = $_GET['id'];

    include 'config.php';

    // SQL query to update the course status
    $sql = "UPDATE course SET course_status = 'Approved' WHERE course_ID = {$course_ID}";

    // Execute the query
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    // SQL query to update the course status in the instructor_course table
    $approve_sql = "UPDATE instructor_course SET course_status = 'Approved' WHERE course_ID = {$course_ID}";

    // Execute the query
    $approve_result = mysqli_query($conn, $approve_sql) or die("Query Unsuccessful");

    // Check if the update was successful
    if ($result && $approve_result) {
        // Use SweetAlert to show a success message
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Course Approved',
                text: 'The course has been approved successfully.',
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = 'http://localhost/courseregistration/admin-course.php';
            });
        </script>";
    } else {
        // Use SweetAlert to show an error message
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An error occurred. Course approval failed.',
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = 'http://localhost/courseregistration/admin-course.php';
            });
        </script>";
    }
    ?>
</body>

</html>