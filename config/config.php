<?php

$hostname = "localhost";
$username = "root";
$password = "sql@123";
$database = "coursesystem";
$path = "http://localhost/courseRegistration/";

$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
