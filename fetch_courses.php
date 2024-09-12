<?php

include 'config/config.php';

$category = $_GET['category'];
$topic = $_GET['topic'];

$sql = "SELECT * FROM course WHERE course_category = ? AND course_title LIKE ?";
$stmt = $conn->prepare($sql);
$topicParam = '%' . $topic . '%';
$stmt->bind_param('ss', $category, $topicParam);
$stmt->execute();

$result = $stmt->get_result();
$courses = [];
while($row = $result->fetch_assoc()) {
    $courses[] = $row;
}

header('Content-Type: application/json');
echo json_encode($courses);

$stmt->close();
$conn->close();
?>
