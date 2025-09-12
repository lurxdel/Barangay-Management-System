<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">Barangay Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="announcement.php" class="nav-link">Announcements</a></li>
                <li class="nav-item"><a href="officials.php" class="nav-link">Officials</a></li>
                <li class="nav-item"><a href="issuance.php" class="nav-link">Issuance</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="calendar.php" class="nav-link">Calendar</a></li>

                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="logout.php" class="btn btn-success ms-3">Logout (<?php echo $_SESSION['username']; ?>)</a></li>
                <?php else: ?>
                    <li><a href="user_login.php" class="btn btn-success ms-3">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
