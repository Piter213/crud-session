<?php include 'session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];
    $time = $_POST['time'];
    $_SESSION['tasks'][$task] = $time;
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Tambah Tugas</title></head>
<body>
    <h1>Tambah Tugas</h1>
    <form method="POST">
        Nama Tugas: <input type="text" name="task" required><br>
        Waktu (jam): <input type="number" name="time" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>
