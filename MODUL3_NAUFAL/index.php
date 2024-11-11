<?php
//error_reporting(0);
include('includes/dbconnection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>U-WIBU|||Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="vendors/chartist/chartist.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="css/style.css">
  <!-- End layout styles -->

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
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="d-sm-flex align-items-baseline report-summary-header">
                        <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="row report-inner-cards-wrapper mb-5">
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <?php
                        // Koneksi database
                        $sql2 = "SELECT * FROM tb_student";
                        $result2 = mysqli_query($conn, $sql2);

                        // Hitung total murid
                        $totstu = mysqli_num_rows($result2);
                        ?>
                        <span class="report-title">Total Murid</span>
                        <h4><?php echo htmlentities($totstu); ?></h4>
                        <a href="manage-students.php"><span class="report-count"> Lihat Murid</span></a>
                      </div>
                      <div class="inner-card-icon bg-danger">
                        <i class="icon-user"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <?php
                        $sql2 = "SELECT COUNT(DISTINCT jurusan) AS total_jurusan FROM tb_student";
                        $result2 = mysqli_query($conn, $sql2);
                        $row2 = mysqli_fetch_assoc($result2);
                        $total_jurusan = $row2['total_jurusan'];
                        ?>
                        <span class="report-title">Total Jurusan</span>
                        <h4><?php echo htmlentities($total_jurusan); ?></h4>
                        <a href="#"><span class="report-count"> Lihat Jurusan</span></a>
                      </div>
                      <div class="inner-card-icon bg-success">
                        <i class="icon-notebook"></i> <!-- Ikon buku catatan -->
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <?php
                        $sql2 = "SELECT COUNT(DISTINCT angkatan) AS total_angkatan FROM tb_student";
                        $result2 = mysqli_query($conn, $sql2);
                        $row2 = mysqli_fetch_assoc($result2);
                        $total_angkatan = $row2['total_angkatan'];
                        ?>

                        <span class="report-title">Total Angkatan</span>
                        <h4><?php echo htmlentities($total_angkatan); ?></h4>
                        <a href="#"><span class="report-count"> Lihat Angkatan</span></a>
                      </div>
                      <div class="inner-card-icon bg-warning">
                        <i class="icon-graduation"></i>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-12">
                    <div class="col-md-6">
                      <h5>Distribusi Angkatan</h5>
                      <canvas id="angkatanPieChart"></canvas>
                    </div>
                    <div class="col-md-6">
                      <h5>Distribusi Jurusan</h5>
                      <canvas id="jurusanDoughnatChart"></canvas>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once('includes/footer.php'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <?php
  // Query untuk data jurusan
  $sql = "SELECT jurusan, COUNT(*) AS count FROM tb_student GROUP BY jurusan";
  $result = mysqli_query($conn, $sql);

  $jurusanLabels = [];
  $jurusanCounts = [];

  while ($jurusan = mysqli_fetch_assoc($result)) {
    $jurusanLabels[] = $jurusan['jurusan'];
    $jurusanCounts[] = $jurusan['count'];
  }

  // Query untuk data angkatan
  $sql = "SELECT angkatan, COUNT(*) AS count FROM tb_student GROUP BY angkatan ORDER BY angkatan ASC";
  $result = mysqli_query($conn, $sql);

  $angkatanLabels = [];
  $angkatanCounts = [];

  while ($angkatan = mysqli_fetch_assoc($result)) {
    $angkatanLabels[] = $angkatan['angkatan'];
    $angkatanCounts[] = $angkatan['count'];
  }
  ?>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const ctx = document.getElementById('angkatanPieChart').getContext('2d');
      const angkatanPieChart = new Chart(ctx, {
        type: 'pie', // Menggunakan Pie Chart
        data: {
          labels: <?php echo json_encode($angkatanLabels); ?>,
          datasets: [{
            label: 'Number of Students',
            data: <?php echo json_encode($angkatanCounts); ?>,
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
            hoverOffset: 4
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            tooltip: {
              enabled: true
            }
          }
        }
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const ctx = document.getElementById('jurusanDoughnatChart').getContext('2d');
      const jurusanDoughnatChart = new Chart(ctx, {
        type: 'doughnut', // Mengubah tipe chart menjadi doughnut
        data: {
          labels: <?php echo json_encode($jurusanLabels); ?>,
          datasets: [{
            label: 'Number of Students',
            data: <?php echo json_encode($jurusanCounts); ?>,
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
            hoverOffset: 4
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            tooltip: {
              enabled: true
            }
          }
        }
      });
    });
  </script>
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