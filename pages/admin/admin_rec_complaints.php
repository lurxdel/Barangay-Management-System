<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BMS - Admin Records Complaint</title>
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
            <div class="dept">IT Department</div>
        </div>
    </div>

    <div class="sidebar-menu">
        <a href="admin_dashboard.php"><i class="bi bi-house-door"></i> Dashboard</a>
        <a href="admin_announcement.php"><i class="bi bi-megaphone"></i> Announcement</a>
        <a href="admin_officials.php"><i class="bi bi-people"></i> Officials</a>
        <a href="admin_issuance.php"><i class="bi bi-bookmark"></i> Issuance</a>
        <div class="dropdown-container">
          <button class="dropdown-btn">
              <i class="bi bi-file-earmark-text"></i> Records
              <i class="bi bi-caret-down-fill dropdown-arrow"></i>
          </button>
          <div class="dropdown-content">
              <a href="admin_rec_residents.php">Residents</a>
              <a href="admin_rec_complaints.php">Complaints</a>
              <a href="admin_rec_blotter.php">Blotter</a>
          </div>
      </div>
        <a href="../../admin_login.php"><i class="bi bi-box-arrow-left"></i> Logout</a>
    </div>
</div>

<div style="width:100%">

    <div class="header">
        <div class="hamburger" onclick="toggleSidebar()">☰</div>
        <h1 class="header-title">RECORD <span class="green">COMPLAINT</span></h1>

        <div class="header-logos">
            <img src="../../assets/img/barangaygusalogo.png">
            <img src="../../assets/img/cdologo.png">
        </div>
    </div>

    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">

        <div class="search-box">
            <input type="text" placeholder="Search for Document Type..." class="form-control">
            <button><i class="bi bi-search"></i></button>
        </div>

        <div class="mt-2 mt-md-0">
            <button class="btn btn-secondary"><i class="bi bi-archive"></i> Archive</button>
        </div>

    <table>
        <tr>
            <th>Respondent Name</th>
            <th>Subject</th>
            <th>Details</th>
            <th>Date Filled</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>Resident 1</td>
            <td>Trash</td>
            <td>Piled up trash beside the street</td>
            <td>08/02/2025</td>
            <td>user1@email.com</td>
            <td>
                <button class="btn btn-sm btn-info me-1 text-white"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-primary me-1"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
        </tr>

        <tr>
            <td>Resident 2</td>
            <td>Water</td>
            <td>Overflowing water</td>
            <td>08/02/2025</td>
            <td>user2@gmail.com</td>
            <td>
                <button class="btn btn-sm btn-info me-1 text-white"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-primary me-1"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
        </tr>

        <tr>
            <td>Resident 3</td>
            <td>Dim Street Light</td>
            <td>Can't see the street properly</td>
            <td>08/04/2025</td>
            <td>user3@email.com</td>
            <td>
                <button class="btn btn-sm btn-info me-1 text-white"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-primary me-1"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
        </tr>

        <tr>
            <td>Resident 4</td>
            <td>Stray Dogs</td>
            <td>Stray dogs scattered in the street</td>
            <td>08/06/2025</td>
            <td>user4@email.com</td>
            <td>
                <button class="btn btn-sm btn-info me-1 text-white"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-primary me-1"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
        </tr>
    </table>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function toggleSidebar() {
    document.querySelector('.sidebar').classList.toggle('active');
}
document.querySelectorAll('.dropdown-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        this.parentElement.classList.toggle('active');
    });
});
</script>

</body>
</html>
