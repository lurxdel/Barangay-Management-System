<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['role'])) {
    header("Location: ../../resident_login.php");
    exit;
}

if ($_SESSION['role'] !== 'Resident') {
    echo "<script>alert('Access denied: Residents only'); window.location.href='../../index.php';</script>";
    exit;
}
?>
