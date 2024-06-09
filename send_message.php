<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<?php
session_start();
include 'config.php';

if (isset($_POST['send_message'])) {
    $sender_id = $_SESSION['user_id']; // Assuming user_id is stored in session
    $receiver_id = $_POST['receiver_id'];
    echo $receiver_id;
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    // Validate receiver_id
    $sql = "SELECT user_id FROM user_registration WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $receiver_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        die("Error: Receiver ID does not exist.");
    }

    // Insert the message into the messages table
    $sql = "INSERT INTO messages (sender_id, receiver_id, subject , message) VALUES (?, ?, ? , ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiss", $sender_id, $receiver_id, $subject, $message);

    if ($stmt->execute()) {
        echo '<script>
        Swal.fire({
            title: "Send!",
            text: "Message send successfully",
            icon: "success"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "admin-dashboard.php";
            }
        });
        </script>';
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
</body>
</html>