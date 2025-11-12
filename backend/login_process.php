<?php
session_start();
require_once 'config.php';

// ...existing code...
// Retrieve and sanitize form data
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? ''; // only for admin_login.php

// Basic validation
if (empty($email) || empty($password)) {
    echo "<script>alert('Email and password are required'); window.history.back();</script>";
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Invalid email format'); window.history.back();</script>";
    exit();
}

// Find the user by email
$user = $usersCollection->findOne(['email' => $email]);

if ($user) {
    // Prepare stored password
    $stored = isset($user['password']) ? (string)$user['password'] : '';

    if ($stored === '') {
        echo "<script>alert('Account has no password set'); window.history.back();</script>";
        exit();
    }

    // Verify password
    $verified = password_verify($password, $stored);

    if ($verified) {
        // Optional: match role (if admin)
        if (!empty($role) && isset($user['role']) && $user['role'] !== $role) {
            echo "<script>alert('Invalid role'); window.history.back();</script>";
            exit();
        }

        // Regenerate session id and store session
        session_regenerate_id(true);
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'] ?? 'User';

        // Redirect based on role
        if (isset($user['role']) && $user['role'] === 'Barangay Captain') {
            header("Location: ../pages/admin/admin_dashboard.php");
        } else {
            header("Location: ../user_dashboard.php");
        }
        exit();
    } else {
        echo "<script>alert('Incorrect password'); window.history.back();</script>";
        exit();
    }
} else {
    echo "<script>alert('User not found'); window.history.back();</script>";
    exit();
}
// ...existing code...
?>