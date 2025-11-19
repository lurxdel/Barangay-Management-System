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
            <h3>Officials</h3>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="fw-bold mb-4">Elected <span class="text-success">Officials</span></h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card announcement-card p-3">
                        <img src="assets/img/announcement1.jpg" class="mb-3 w-100" />
                        <div>
                            <h6 class="mt-2">Barangay Captain</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card announcement-card p-3">
                        <img src="assets/img/announcement2.jpg" class="mb-3 w-100" />
                        <div>
                            <h6 class="mt-2">Barangay Kagawad</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card announcement-card p-3">
                        <img src="assets/img/announcement2.jpg" class="mb-3 w-100" />
                        <div>
                            <h6 class="mt-2">Sangguniang Kabataan</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card announcement-card p-3">
                        <img src="assets/img/announcement2.jpg" class="mb-3 w-100" />
                        <div>
                            <h6 class="mt-2">Barangay Secretary</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card announcement-card p-3">
                        <img src="assets/img/announcement2.jpg" class="mb-3 w-100" />
                        <div>
                            <h6 class="mt-2">Barangay Treasurer</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing...</p>
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