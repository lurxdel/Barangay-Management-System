<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">Barangay Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="margin-right: -95px;">
                <li class="nav-item"><a href="index.php" class="nav-link <?php if($currentPage == 'index.php') echo 'active'; ?>">Home</a></li>
                <li class="nav-item"><a href="announcement.php" class="nav-link <?php if($currentPage == 'announcement.php') echo 'active'; ?>">Announcements</a></li>
                <li class="nav-item"><a href="officials.php" class="nav-link <?php if($currentPage == 'officials.php') echo 'active'; ?>">Officials</a></li>
                <li class="nav-item"><a href="issuance.php" class="nav-link <?php if($currentPage == 'issuance.php') echo 'active'; ?>">Issuance</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link <?php if($currentPage == 'contact.php') echo 'active'; ?>">Contact</a></li>
                <li class="nav-item"><a href="calendar.php" class="nav-link <?php if($currentPage == 'calendar.php') echo 'active'; ?>">Calendar</a></li>

                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="logout.php" class="btn btn-success ms-3">Logout (<?php echo $_SESSION['username']; ?>)</a></li>
                <?php else: ?>
                    <li><a href="resident_login.php" class="btn btn-success ms-3">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
