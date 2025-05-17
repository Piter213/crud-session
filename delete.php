<?php include 'session.php';

$task = $_GET['task'];
unset($_SESSION['tasks'][$task]);

header('Location: index.php');
exit();
