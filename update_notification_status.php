<?php
include 'config.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "UPDATE notifications SET status='read' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Notification updated successfully";
    } else {
        echo "Error updating notification: " . $conn->error;
    }
}
?>
