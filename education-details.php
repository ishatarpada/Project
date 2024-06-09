<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eduaction Details</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
</head>

<body>
<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];

    // Function to execute the insert query and handle success/error response
    function executeInsertQuery($sql, $conn)
    {
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                  Swal.fire({
                      title: 'Success!',
                      text: 'Your education details have been saved.',
                      icon: 'success',
                      confirmButtonText: 'OK'
                  }).then(() => {
                      window.location.href = 'profile.php';
                  });
              </script>";
        } else {
            echo "<script>
                  Swal.fire({
                      title: 'Error!',
                      text: 'There was an error saving your education details: " . $conn->error . "',
                      icon: 'error',
                      confirmButtonText: 'OK'
                  }).then(() => {
                      window.location.href = 'profile.php';
                  });
              </script>";
        }
    }

    function executeUpdateQuery($sql, $conn)
    {
        if ($conn->query($sql) === TRUE) {
            echo "<script>
            Swal.fire({
                title: 'Success!',
                text: 'Your education details have been saved.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'profile.php';
            });
        </script>";
        } else {
            echo "<script>
            Swal.fire({
                title: 'Error!',
                text: 'There was an error saving your education details: " . $conn->error . "',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'profile.php';
            });
        </script>";
        }
    }

    if (isset($_POST['tenthDetails'])) {
        $tenthSchoolName = $_POST['tenth_school_name'];
        $tenthBoard = $_POST['tenth_board'];
        $tenthYearOfPassing = $_POST['tenth_year_of_passing'];
        $tenthPercentage = $_POST['tenth_percentage'];
        $tenthGrade = $_POST['tenth_grade'];

        $sql = "INSERT INTO student_education_details (student_id, ten_education_level, tenth_school_name, tenth_board, tenth_year_of_passing, tenth_percentage, tenth_grade) 
                  VALUES ('$user_id', '10th', '$tenthSchoolName', '$tenthBoard', '$tenthYearOfPassing', '$tenthPercentage', '$tenthGrade')";

        executeInsertQuery($sql, $conn);
    }

    if (isset($_POST['twelfth_details'])) {
        $twelfthSchoolName = $_POST['twelfth_school_name'];
        $twelfthBoard = $_POST['twelfth_board'];
        $twelfthYearOfPassing = $_POST['twelfth_year_of_passing'];
        $twelfthPercentage = $_POST['twelfth_percentage'];
        $twelfthGrade = $_POST['twelfth_grade'];

        $sql = "UPDATE student_education_details 
                SET twelveth_school_name = '$twelfthSchoolName', 
                    twelveth_board = '$twelfthBoard', 
                    twelve_education_level = '12th',
                    twelveth_year_of_passing = '$twelfthYearOfPassing', 
                    twelveth_percentage = '$twelfthPercentage', 
                    twelveth_grade = '$twelfthGrade' 
                WHERE student_id = '$user_id'";

        executeUpdateQuery($sql, $conn);
    }

    if (isset($_POST['collegeDetails'])) {
        $collegeName = $_POST['college_name'];
        $collegeDegree = $_POST['college_degree'];
        $collegeYearOfPassing = $_POST['college_year_of_passing'];
        $collegeSPI = $_POST['college_SPI'];
        $collegeCPI = $_POST['college_CPI'];

        $sql = "UPDATE student_education_details 
                SET college_name = '$collegeName', 
                    collage_level = 'College',
                    college_degree = '$collegeDegree', 
                    college_year_of_passing = '$collegeYearOfPassing', 
                    college_SPI = '$collegeSPI', 
                    college_CPI = '$collegeCPI' 
                WHERE student_id = '$user_id'";

        executeUpdateQuery($sql, $conn);
    }
}

$conn->close();
?>

</body>

</html>