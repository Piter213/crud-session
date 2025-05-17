<?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Work Tracker</title></head>
<body>
    <h1>Daftar Tugas</h1>
    <a href="add.php">Tambah Tugas</a>
    <ul>
        <?php foreach ($_SESSION['tasks'] as $task => $time): ?>
            <li>
                <strong><?= htmlspecialchars($task) ?></strong>: <?= htmlspecialchars($time) ?> jam
                [<a href="view.php?task=<?= urlencode($task) ?>">Lihat</a>]
                [<a href="edit.php?task=<?= urlencode($task) ?>">Edit</a>]
                [<a href="delete.php?task=<?= urlencode($task) ?>">Hapus</a>]
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
