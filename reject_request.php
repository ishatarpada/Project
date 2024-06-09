<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reject Request</title>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
    <?php

    $InstructorID = $_GET['id'];

    include 'config.php';

    // SQL query to delete the course
    $sql = "DELETE FROM Instructors WHERE InstructorID = {$InstructorID}";

    // Execute the query
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    // Close the database connection
    $conn->close();

    // Check if the deletion was successful
    if ($result) {
        // Use SweetAlert to show a success message
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Instructor Request Reject ',
                text: 'The Instructor Request  has been Rejected successfully.',
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = 'http://localhost/courseregistration/instructor-request.php';
            });
        </script>";
    } else {
        // Use SweetAlert to show an error message
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An error occurred. Request Rejection failed.',
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = 'http://localhost/courseregistration/instructor-request.php';
            });
        </script>";
    }
    ?>
</body>

</html>