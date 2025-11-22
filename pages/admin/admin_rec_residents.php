<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BMS - Admin Records Resident</title>
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
        <h1 class="header-title">RECORD <span class="green">RESIDENTS</span></h1>

        <div class="header-logos">
            <img src="../../assets/img/barangaygusalogo.png">
            <img src="../../assets/img/cdologo.png">
        </div>
    </div>

    <div class="content">
        <div class="search-box">
            <input type="text" placeholder="Search for Document Type...">
            <button><i class="bi bi-search"></i></button>
        </div>

    <table>
        <tr>
            <th>Resident Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Purok</th>
            <th>Contact No.</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>Resident 1</td>
            <td>20</td>
            <td>Female</td>
            <td>Purok 1</td>
            <td>09123456789</td>
            <td><span class="status pending">Pending</span></td>
            <td>
                <button class="btn btn-sm btn-info me-1 text-white"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-primary me-1"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
        </tr>

        <tr>
            <td>Resident 2</td>
            <td>19</td>
            <td>Female</td>
            <td>Purok 2</td>
            <td>09123456909</td>
            <td><span class="status ready">Verified</span></td>
            <td>
                <button class="btn btn-sm btn-info me-1 text-white"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-primary me-1"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
        </tr>

        <tr>
            <td>Resident 3</td>
            <td>30</td>
            <td>Male</td>
            <td>Purok 6</td>
            <td>09123451239</td>
            <td><span class="status pending">Pending</span></td>
            <td>
                <button class="btn btn-sm btn-info me-1 text-white"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-primary me-1"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
        </tr>

        <tr>
            <td>Resident 4</td>
            <td>51</td>
            <td>Female</td>
            <td>Purok 5</td>
            <td>09123451039</td>
            <td><span class="status ready">Verified</span></td>
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
