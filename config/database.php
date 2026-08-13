<?php
$host = 'localhost';
$dbname = 'internship_management_system';
$username = 'root';
$password = '';



$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

// study more about charsets and their codes eg utf8
mysqli_set_charset($conn, "utf8");
echo "Connected succefully";
?>