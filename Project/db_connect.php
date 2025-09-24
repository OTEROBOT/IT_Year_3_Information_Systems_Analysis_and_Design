<?php
$servername = "localhost";
$username = "root"; // default XAMPP user
$password = ""; // default XAMPP password
$dbname = "club_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>