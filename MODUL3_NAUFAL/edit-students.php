<?php
include('includes/dbconnection.php'); // Koneksi database
include('includes/function.php');

// Buatkan perkondisian untuk menangkap 'id' mahasiswa dengan metode GET


    // Ambil data mahasiswa berdasarkan ID
    


    if (isset($_POST['submit'])) {
        editStudent($id);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>U-WIBU || Edit Student</title>
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
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include_once('includes/header.php'); ?>
        <div class="page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include_once('includes/sidebar.php'); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Edit Student </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Edit Student</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Edit Student</h4>
                                    <form class="forms-sample" action="" method="post">
                                        <div class="form-group">
                                            <label for="stuname">Student Name</label>
                                            <input type="text" name="stuname" class="form-control" value="<?php echo $student['nama']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="stuid">NIM</label>
                                            <input type="text" name="stuid" class="form-control" value="<?php echo $student['nim']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="stuclass">Jurusan</label>
                                            <select name="stuclass" class="form-control" required>
                                                <option value="Teknik Domain Expansion" <?php if ($student['jurusan'] == 'Teknik Domain Expansion') echo 'selected'; ?>>Teknik Domain Expansion</option>
                                                <option value="Ilmu Pengendalian Chuunibyou" <?php if ($student['jurusan'] == 'Ilmu Pengendalian Chuunibyou') echo 'selected'; ?>>Ilmu Pengendalian Chuunibyou</option>
                                                <option value="Psikologi Hubungan Anime" <?php if ($student['jurusan'] == 'Psikologi Hubungan Anime') echo 'selected'; ?>>Psikologi Hubungan Anime</option>
                                                <option value="Manajemen Isekai" <?php if ($student['jurusan'] == 'Manajemen Isekai') echo 'selected'; ?>>Manajemen Isekai</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="stuangkatan">Angkatan</label>
                                            <input type="number" name="stuangkatan" class="form-control" value="<?php echo $student['angkatan']; ?>" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include_once('includes/footer.php'); ?>
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/select2/select2.min.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
</body>

</html>
