<?php include 'session.php';

$task = $_GET['task'];
if (!isset($_SESSION['tasks'][$task])) {
    echo "Tugas tidak ditemukan!";
    exit();
}

$time = $_SESSION['tasks'][$task];
?>
<!DOCTYPE html>
<html>
<head><title>Detail Tugas</title></head>
<body>
    <h1>Detail Tugas</h1>
    <p><strong><?= htmlspecialchars($task) ?></strong>: <?= htmlspecialchars($time) ?> jam</p>
    <a href="index.php">Kembali</a>
</body>
</html>
