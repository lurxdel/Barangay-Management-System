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
        <h3>Announcements</h3>
    </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card announcement-card p-3">
                        <img src="assets/img/announcement1.png" class="mb-3 w-100" />
                        <div>
                            <span class="badge bg-success">25 August</span>
                            <h6 class="mt-2" style = "font-weight: 600;">National Heroes Day</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                            <a href="#" class="text-success">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card announcement-card p-3">
                        <img src="assets/img/announcement2.png" class="mb-3 w-100" />
                        <div>
                            <span class="badge bg-success">28 August</span>
                            <h6 class="mt-2" style = "font-weight: 600;">Higalaay Fiestival 2025 </h6>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                            <a href="#" class="text-success">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card announcement-card p-3">
                        <img src="assets/img/announcement3.png" class="mb-3 w-100" />
                        <div>
                            <span class="badge bg-success">1 September</span>
                            <h6 class="mt-2" style = "font-weight: 600;">Paskong Handog</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                            <a href="#" class="text-success">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>