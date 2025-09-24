<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'Officer') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แดชบอร์ดฝ่ายทะเบียนกิจกรรม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;700&family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <img src="LgUDRU.png" alt="โลโก้มหาวิทยาลัยราชภัฏอุดรธานี" width="120" class="mb-3">
            <h2 class="text-primary">ยินดีต้อนรับ, <?php echo $_SESSION['username']; ?> (Officer)</h2>
        </div>
        <div class="card p-4 shadow-lg">
            <p class="lead text-muted">ที่นี่คือหน้าสำหรับฝ่ายทะเบียน คุณสามารถจัดการกิจกรรมและสมาชิกได้</p>
            <div class="d-flex justify-content-center mt-4">
                <a href="logout.php" class="btn btn-danger">ออกจากระบบ</a>
            </div>
        </div>
    </div>
</body>
</html>