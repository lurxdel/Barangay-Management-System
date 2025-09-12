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

  <section class="header-banner">
    <div class="overlay">
      <h1>Resident Registration</h1>
    </div>
  </section>

  <section class="registration-form">
    <h2>FILL OUT THE REGISTRATION FORM</h2>
    <form action="backend/register_resident.php" method="POST">
      
      <div class="form-row">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="mname" placeholder="Middle Name">
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="text" name="sname" placeholder="Suffix Name">
      </div>

      <div class="form-row">
        <select name="gender" required>
          <option value="">Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>

        <input type="date" name="bdate" placeholder="Birth Date" required>
        <input type="text" name="bplace" placeholder="Birth Place" required>
      </div>

      <div class="form-row">
        <input type="text" name="occupation" placeholder="Occupation">
        <select name="voter_status" required>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
        <select name="purok" required>
          <option value="">Select Purok</option>
          <option value="Purok 1">Purok 1</option>
          <option value="Purok 2">Purok 2</option>
          <option value="Purok 3">Purok 3</option>
        </select>
        <input type="text" name="resident_since" placeholder="Resident Since">
      </div>

      <div class="form-row">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <div class="form-row">
        <select name="income" required>
          <option value="">Family Income</option>
          <option value="Below PHP 10,000">Below PHP 10,000</option>
          <option value="PHP 10,000 - 20,000">PHP 10,000 - 20,000</option>
          <option value="PHP 20,000+">PHP 20,000+</option>
        </select>
        <select name="family_head" required>
          <option value="">Family Head</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
      </div>

      <p class="note">Please be informed that your registration to Barangay Gusa portal will be reviewed. We will notify you via email regarding your account status.</p>

      <button type="submit">REGISTER NOW</button>
    </form>
    <p style="text-align:center; margin-top:20px;">
      <a href="user_login.php">Back to Login</a>
    </p>
  </section>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
