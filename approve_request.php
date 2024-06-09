<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve Request</title>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
    <?php

    $InstructorID = $_GET['id'];

    include 'config.php';

    // SQL query to update the course status
    $sql = "UPDATE Instructors SET approve_request = '1' WHERE InstructorID = {$InstructorID}";

    // Execute the query
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    // Check if the update was successful
    if ($result ) {
        // Use SweetAlert to show a success message
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Request  Approved',
                text: 'The Instructor Request has been approved successfully.',
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
                text: 'An error occurred. Instructor Request approval failed.',
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