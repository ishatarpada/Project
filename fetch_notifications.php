<?php
include 'config.php';

$sql = "SELECT * FROM notifications ORDER BY created_at DESC";
$result = $conn->query($sql);

$notifications = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $notifications[] = $row;
    }
}

echo json_encode($notifications);
?>
