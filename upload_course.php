<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Course</title>
  <!-- SweetAlert CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
<?php
session_start();

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addLecture'])) {
        // Process lecture addition
        $course_ID = isset($_POST['course_ID']) ? $_POST['course_ID'] : null;
        $courseName = mysqli_real_escape_string($conn, $_POST['course_name']);

        // Check if $course_ID is a valid integer
        if (!is_numeric($course_ID)) {
            echo "Invalid course ID.";
            exit;
        }

        // Insert course name into upload_topic table using prepared statement
        $stmt = $conn->prepare("INSERT INTO upload_topic (course_name, course_id) VALUES (?, ?)");
        $stmt->bind_param("si", $courseName, $course_ID);

        if ($stmt->execute()) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Course Name',
                    text: 'Course name inserted successfully!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(() => {
                    window.location.href = 'http://localhost/courseregistration/upload_course_video.php?id=$course_ID';
                });
                </script>";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } elseif (isset($_POST['add_topic'])) {
        // Process topic addition
        $topic_name = $_POST['topic_name'];
        $video_link = $_POST['topic_video_link'];
        $description = $_POST['description'];
        $course_id = $_POST['course_id'];
        $topicID = $_POST['topicID'];

        // Insert topic details into upload_subtopic table
        $stmt = $conn->prepare("INSERT INTO upload_subtopic (course_id, topicID, topic_name, topic_video_link, description) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $course_id, $topicID, $topic_name, $video_link, $description);

        if ($stmt->execute()) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Topic Added',
                    text: 'Topic details inserted successfully!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(() => {
                    window.location.href = 'http://localhost/courseregistration/upload_course_video.php?id=$course_id';
                });
            </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Invalid request method or topic details not provided.";
    }
}
?>

</body>

</html>
