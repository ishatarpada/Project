<?php

include 'config.php';

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: cart.html");
    exit();
} else {
    header("Location: login.html");
    exit();
}
