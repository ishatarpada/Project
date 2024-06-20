<?php
// Include the database configuration file
include_once 'config.php';

// Get the current date
$current_date = date('Y-m-d H:i:s');

// Update subscription status to inactive for expired subscriptions
$updateSql = "UPDATE users SET subscription_status = 'inactive' WHERE subscription_end_date <= ? AND subscription_status = 'active'";
$updateStmt = $conn->prepare($updateSql);
$updateStmt->bind_param("s", $current_date);
$updateStmt->execute();

// Close the statement and connection
$updateStmt->close();
$conn->close();
?>
