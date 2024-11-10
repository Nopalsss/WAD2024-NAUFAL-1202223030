<?php
// tangkap nilai MK_KI1201, MK_KU1202, dan MK_KU1102 yang ada pada form html
// silakan taruh code kalian di bawah
// **********************  1  ************************** 
if ((isset($_POST['submit']))){
    $MK_KI1201 = $_POST["MK_KI1201"];
    $MK_KU1202 = $_POST["MK_KU1202"];
    $MK_KU1102 = $_POST["MK_KU1102"];
    
}
// **********************  1  ************************** 


// buatkan sebuah perkondisian  
// jika MK_KI1201 atau MK_KU1202 atau MK_KU1102 kosong maka akan muncul pesan error
// silakan taruh code kalian di bawah
// **********************  2  ************************** 
if (empty($MK_KI1201) || empty($MK_KU1202) | empty($MK_KU1102)){
    $error = "Nilai MK Tidak Boleh Kosong";
}
// **********************  2  ************************** 


// buatkanlah perkondisian jika nilainya memenuhi akan mendapatkan peminatan yang sesuai di jurnal, 
// Untuk nilai peminatan sesuai dengan kondisi yang tertera pada jurnal
// silakan taruh code kalian di bawah
// **********************  3  ************************** 
$nilaiA = "A";
$nilaiAB = "AB";
$nilaiB = "B";
$nilaiBC = "BC";
$nilaiC = "C";


if (($MK_KU1202 == $nilaiA || $MK_KU1202 == $nilaiAB) && ($MK_KU1102 == $nilaiB || $MK_KU1102 == $nilaiAB )){
    $hasil = "Mahasiswa dapat mengambil peminatan Kimia Pangan";
}elseif($MK_KI1201 == $nilaiA){
    $hasil = "Mahasiswa dapat mengambil peminatan Kimia Umum";
}
// **********************  3  ************************** 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peminatan</title>
    <!-- Letakkan link bootstrap dibawah ini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
  </head>
  <body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Pilih Peminatan
                </div>
                <div class="card-body">
                <h3>Masukkan nilai mata kuliah anda pada form dibawah ini</h3>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="MK_KI1201" class="form-label">MK_KI1201</label>
                            <select class="form-select" id="MK_KI1201" name="MK_KI1201" aria-label="Default select example">
                                <option selected value="">Masukkan Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="MK_KU1202" class="form-label">MK_KU1202</label>
                            <select class="form-select" id="MK_KU1202" name="MK_KU1202" aria-label="Default select example">
                                <option selected value="">Masukkan Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="MK_KU1102" class="form-label">MK_KU1102</label>
                            <select class="form-select" id="MK_KU1102" name="MK_KU1102" aria-label="Default select example">
                                <option selected value="">Masukkan Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <div class="submit">
                            <button class="btn btn-primary" name='submit' type="submit">Submit form</button>
                        </div>
                    </form>

                    <?php
                    // Hasil dari peminatan yang didapatkan taruh di sini yaaa!!  
                    // silakan taruh code kalian di bawah 
                    //  **********************  4  **************************     
                        if(!empty($hasil)){
                            echo "<div class='alert alert-success'>$hasil</div";
                        }
                    ?>
                    <!-- //  **********************  4  **************************     

+
                    // Hasil pesan error nya taruh di sini yaaa!!   
                    // silakan taruh code kalian di bawah 
                    //  **********************  5  **************************      -->
                    <?php       
                        if(!empty($error)){
                            echo "<div class='alert alert-danger'>$error</div";
                        }
                    //  **********************  5  **************************     
                    ?>

                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    
  </body>
</html>