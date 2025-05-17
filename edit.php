<?php include 'session.php';

$oldTask = $_GET['task'];
if (!isset($_SESSION['tasks'][$oldTask])) {
    echo "Tugas tidak ditemukan!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newTask = $_POST['task'];
    $time = $_POST['time'];
    unset($_SESSION['tasks'][$oldTask]);
    $_SESSION['tasks'][$newTask] = $time;
    header('Location: index.php');
    exit();
}

$time = $_SESSION['tasks'][$oldTask];
?>
<!DOCTYPE html>
<html>
<head><title>Edit Tugas</title></head>
<body>
    <h1>Edit Tugas</h1>
    <form method="POST">
        Nama Tugas: <input type="text" name="task" value="<?= htmlspecialchars($oldTask) ?>" required><br>
        Waktu (jam): <input type="number" name="time" value="<?= htmlspecialchars($time) ?>" required><br>
        <button type="submit">Update</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>
