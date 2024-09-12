<?php
include 'config/config.php';

$category = $_GET['category'];


$sql = $conn->prepare("SELECT DISTINCT course_title FROM course WHERE course_category = ?");
$sql->bind_param("s", $category);
$sql->execute();
$result = $sql->get_result();

$topics = [];
while($row = $result->fetch_assoc()) {
    $topics[] = $row['course_title'];
}

echo json_encode($topics);

$conn->close();
?>
