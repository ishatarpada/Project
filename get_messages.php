<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
</head>
<body>
    <div id="messages-container">
        <?php
        // Include database connection
        include 'config.php';

        // Fetch messages from the database
        $sql = "SELECT * FROM messages ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="message">';
                echo '<strong>' . $row['sender'] . '</strong>: ' . $row['message'] . '<br>';
                echo '<small>' . $row['created_at'] . '</small>';
                echo '</div>';
            }
        } else {
            echo 'No messages found';
        }

        // Close database connection
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
