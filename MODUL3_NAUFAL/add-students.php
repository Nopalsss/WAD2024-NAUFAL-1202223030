<?php
include('includes/dbconnection.php'); // Pastikan menggunakan mysqli_connect
include('includes/function.php');

if (isset($_POST['submit'])) {
  
  //Panggil suatu fungsi untuk menambahkan mahasiswa baru ke database
  addStudent();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>U-WIBU || Add Students</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- Layout styles -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="">
    <!-- partial:partials/_navbar.html -->
    <?php include_once('includes/header.php'); ?>
    <!-- partial -->
    <div class="page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Add Students </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Add Students</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="text-align: center;">Add Students</h4>
                  <!-- Buatkan formulir untuk menambahkan siswa baru -->
                   <form class="form" action="" method = "POST">
                    <div class="form-group">
                      <label for="stuname">Student Name</label>
                      <input type="text" name="stuname" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="stuid">NIM</label>
                      <input type="text" name="stuid" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="stuclass">Jurusan</label>
                      <select name="stuclass" class="form-control" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="Teknik Domain Expansion">Teknik Domain Expansion</option>
                        <option value="Ilmu Pengendalian Chuunibyou">Ilmu Pengendalian Chuunibyou</option>
                        <option value="Psikologi Hubungan Anime">Psikologi Hubungan Anime</option>
                        <option value="Manajemen Isekai">Manajemen Isekai</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="stuangkatan">Angkatan</label>
                      <input type="number" name="stuangkatan" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Add</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include_once('includes/footer.php'); ?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/moment/moment.min.js"></script>
  <script src="vendors/daterangepicker/daterangepicker.js"></script>
  <script src="vendors/chartist/chartist.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>

</html>