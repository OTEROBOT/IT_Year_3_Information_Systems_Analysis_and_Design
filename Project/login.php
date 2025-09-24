<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']); // ใช้ MD5 ตาม schema

    $sql = "SELECT * FROM Student WHERE Username = '$username' AND Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['StdID'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['role'] = $row['UserRole'];

        if ($_SESSION['role'] == 'Admin') {
            header("Location: admin.php");
        } elseif ($_SESSION['role'] == 'Officer') {
            header("Location: officer.php");
        } elseif ($_SESSION['role'] == 'Member') {
            header("Location: member.php");
        }
        exit();
    } else {
        echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'); window.location='index.php';</script>";
    }
}

$conn->close();
?>