<?php
session_start();

// Check if user is logged in
if(isset($_SESSION['user_id'])) {
    // Fetch user details from the database (replace with your actual database connection and query)
    $user_id = $_SESSION['user_id'];
    // Assuming you have a database connection already established
    
    include 'config.php';

    $query = "SELECT user_name, mail_ID FROM user_registration WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['user_name'];
        $email = $row['mail_ID'];
    }
} else {
    // Redirect to login page or handle as needed
    header("Location: login.php");
    exit();
}
?>
