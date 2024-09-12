<?php
include 'config/config.php';

$course_id = $_GET['course_id'];

$sql = "SELECT * FROM course WHERE course_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $course_id);
$stmt->execute();

$result = $stmt->get_result();
$course = $result->fetch_assoc();

header('Content-Type: application/json');
echo json_encode($course);

$stmt->close();
$conn->close();
?>
