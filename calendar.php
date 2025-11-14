<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="assets/img/BMS.png">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php include 'includes/nav.php'; ?>

    <section class="header-banner" style="display: flex; align-items: center; justify-content: center;">
        <div class="overlay" style="display: flex; align-items: center; gap: 20px;">
        <h1>Barangay</h1> 
        <h3>Calendar</h3>
        </div>
    </section>

    <section class="calendar-container">
    <div class="calendar-header">
        <button id="prev-month">&lt;</button>
        <h2 id="month-year"></h2>
        <button id="next-month">&gt;</button>
    </div>
    
    <div class="calendar-grid" id="calendar-grid">
    </div>
    </section>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>


<script src="assets/js/calendar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>