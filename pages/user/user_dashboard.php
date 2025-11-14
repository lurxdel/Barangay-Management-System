<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>
  <p>You are logged in as <?php echo $_SESSION['email']; ?>.</p>
  <a href="../../backend/logout.php">Logout</a>
</body>
</html>
