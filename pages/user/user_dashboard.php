<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BMS - Resident Dashboard</title>
    <link rel="icon" type="image/png" href="../../assets/img/BMS.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/dashboard.css" />

</head>
<body>

<div class="sidebar">
    <div class="sidebar-header">
        <img src="../../assets/img/profile.jpg" alt="">
        <div>
            <h3>Lorebina C. Carrasco II</h3>
            <small>carrasco.lorebina85@gmail.com</small>
        </div>
    </div>

    <div class="sidebar-menu">
        <a href="#" class="active"><i class="bi bi-house-door"></i> Dashboard</a>
        <a href="#"><i class="bi bi-newspaper"></i> Request Service</a>
        <a href="#"><i class="bi bi-arrow-down-left"></i> Return to Homepage</a>
    </div>

    <div class="sidebar-bottom">
      <div><button title="Logout"><i class="bi bi-arrow-left"></i></button></div>
      <div class="medium-text">Logout</div>
    </div>
</div>

<div style="width:100%">

    <div class="header">
        <h1 class="header-title">RESIDENT <span class="green">DASHBOARD</span></h1>

        <div class="header-logos">
            <img src="../../assets/img/barangaygusalogo.png">
            <img src="../../assets/img/cdologo.png">
        </div>
    </div>

    <div class="content">
        <div class="grid">

            <div class="card">
                <h3>Profile</h3><br>

                <img src="../../assets/img/profile.jpg" class="profile-pic">

                <strong>Lorebina C. Carrasco II</strong><br>
                <p>Email: carrasco.lorebina85@gmail.com</p>
                <p>Occupation: IT Professional</p>
                <p>Family Income: 20,000 - 40,000</p>
                <p>Resident Since: 2010</p>

                <strong style="color:#2E9F43">ACCOUNT VERIFIED</strong><br>

                <button class="update-btn">Update</button>
            </div>

            <div>
                <section class="calendar-container">
                    <div class="calendar-header">
                        <button id="prev-month">&lt;</button>
                        <h2 id="month-year"></h2>
                        <button id="next-month">&gt;</button>
                    </div>

                    <div class="weekdays calendar-grid">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>

                    <div class="calendar-grid" id="calendar-grid"></div>
                </section>

                <div class="events">
                    <h3>EVENTS</h3>
                    <p>No events for today...</p>
                </div>
            </div>

        </div>
    </div>

</div>

<script src="../assets/js/calendar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>