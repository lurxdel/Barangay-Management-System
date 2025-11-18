<?php 
session_start(); 
require_once 'config.php'; 


// Retrieve and sanitize form data
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

// If a role is posted (admin form), it will be used. Absence => resident form.
$postedRole = trim($_POST['role'] ?? '');
$isResidentForm = $postedRole === '';

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

if (!$user) {
    echo "<script>alert('User not found'); window.history.back();</script>";
    exit();
}

// Prepare stored password
$stored = isset($user['password']) ? (string)$user['password'] : '';

if ($stored === '') {
    echo "<script>alert('Account has no password set'); window.history.back();</script>";
    exit();
}

// Verify password
if (!password_verify($password, $stored)) {
    echo "<script>alert('Incorrect password'); window.history.back();</script>";
    exit();
}

// Check role
$userRole = isset($user['role']) ? $user['role'] : 'Resident';

if ($isResidentForm) {
    if ($userRole === 'Barangay Staff') {
        echo "<script>alert('Invalid role for this login form. Use Administrator Login.'); window.location.href='../resident_login.php';</script>";
        exit();
    }
} else {
    // Role posted (admin form)
    if ($postedRole !== '' && $userRole !== $postedRole) {
        echo "<script>alert('Invalid role for this account'); window.history.back();</script>";
        exit();
    }
}

// Successful login: regenerate session id and set session
session_regenerate_id(true);
$_SESSION['email'] = $user['email'];
$_SESSION['role'] = $userRole;

// Redirect based on role
if ($userRole === 'Barangay Staff') {
    header("Location: ../pages/admin/admin_dashboard.php");
} else {
    header("Location: ../pages/resident/resident_dashboard.php");
}
exit();

// ...existing code...
?>
