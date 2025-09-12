<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = md5($_POST['password']); 
    $role     = $_POST['role'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND role='$role'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;
        header("Location: ../pages/admin/dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid login credentials!'); window.location.href='../login.php';</script>";
    }
}
?>
