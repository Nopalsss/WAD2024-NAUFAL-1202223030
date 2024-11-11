<?php

include("dbconnection.php");

// buatkan function addStudent()
function addStudent()
{
    // variabel global
    global $conn;

    // Silakan buat variabel di bawah dengan data yang diambil dari form
    $stuname = $_POST["stuname"];
    $stuid = $_POST["stuid"];
    $stuclass = $_POST["stuclass"];
    $stuangkatan = $_POST["stuangkatan"];

        

    // Periksa apakah NIM sudah ada
    $ret = mysqli_query($conn, "SELECT nim  FROM tb_student WHERE nim='$stuid'");

    if (mysqli_num_rows($ret) == 0) {
        // Masukkan data ke tabel tb_student
        $query = "INSERT INTO tb_student (nama, nim, jurusan, angkatan) VALUES ('$stuname','$stuid','$stuclass','$stuangkatan')";
        $result = mysqli_query($conn, $query);

        if ($result){
            echo "<result>window.location.herf='manage-student.php' data mahasiswa berhasil ditambahkan </result>";
        }else{
            echo '<script>alert("Something Went Wrong. Please try again.")</script>';
        }



        /**
         * Buatlah logika untuk Memeriksa hasil dari operasi penambahan data mahasiswa.
         * 
         * Jika operasi berhasil, menampilkan pesan bahwa mahasiswa telah ditambahkan
         * dan mengarahkan pengguna ke halaman 'add-students.php'.
         * Jika operasi gagal, menampilkan pesan kesalahan.
         * Jika NIM sudah ada, menampilkan pesan bahwa NIM sudah ada.
         */
        
        

        
        }
}

function editStudent($id) {
    global $conn;

    // Ambil input dari form dan simpan dalam variabel
    

    // Update data mahasiswa berdasarkan ID
    $query = "";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Student data has been updated.")</script>';
        echo "<script>window.location.href ='manage-students.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}


?>