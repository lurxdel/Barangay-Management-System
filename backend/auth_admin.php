<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['role'])) {
    header("Location: ../../admin_login.php");
    exit;
}

if ($_SESSION['role'] !== 'Barangay Staff') {
    echo "<script>alert('Access denied: Admins only'); window.location.href='../../index.php';</script>";
    exit;
}
?>
