<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../admin_login.php");
    exit;
}
?>