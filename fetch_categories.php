<?php
include 'config/config.php';


$sql = "SELECT DISTINCT course_category FROM course";
$result = $conn->query($sql);

$categories = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $categories[] = $row['course_category'];
    }
}

echo json_encode($categories);

$conn->close();
?>
