<?php

include "koneksi.php"; 

    if (isset($POST['submit'])){
        $nama =$_POST['nama'];
        $nim=$POST['nim'];
        $prodi=$POST['prodi'];
        $email=$POST['email'];
        $jk=$POST['jk'];
        $alamat=$POST['alamat'];
        if($nama =="" || $nim =="" || $prodi=="" ||$email =="" || $alamat =="" ){
            echo"<script>alert('Ada form yang belum diisi!');</script>";
        }else{
            mysqli_query($koneksi, "INSERT INTO tabeldaftar (Nama, nim, Prodi, Email, Jenis_Kelamin, Alamat) VALUES ('$nama', '$nim', '$prodi', '$email', '$jk, $alamat)");
            echo"<script>alert('Data berhasil ditambahkan'); document.location = 'tabel.php';</script>";
        }
        }
        ?>    
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
    <div class="Formulir">
    <section class="container">
    <header> Formulir Pendaftaran </header>
    <form method="post" class="form" id="form">
        <div class="input-box">
            <label for="nama">Nama </label>
            <input type="text" id="nama" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>" required><br>
        </div>
        <div class="input-box">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" value="<?php echo isset($_POST['nim']) ? $_POST['nim'] : ''; ?>" required><br>
        </div>
        <div class="input-box">
            <label for="prodi">Program Studi </label>
            <input type="text" id="prodi" name="prodi" value="<?php echo isset($_POST['prodi']) ? $_POST['prodi'] : ''; ?>" required><br>
        </div>
        <div class="input-box">
            <label for="email">Email </label>
            <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required><br>
        </div>
        <div class="jk-box">
            <label form="jk"> Jenis Kelamin</label>
        <div class="jk">
            <input type="radio" id="check-lk" name="jk" for="check-lk" value="<?php echo isset($_POST['lakilaki']) ? $_POST['lakilaki'] : ''; ?>" required> Laki-Laki</label>
        </div>
        <div class="jk">
            <input type="radio" id="check-pr" name="jk" for="check-pr" value="<?php echo isset($_POST['perempuan']) ? $_POST['perempuan'] : ''; ?>" required> Perempuan</label>
        </div>
        <div class="input-box">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" value="<?php echo isset($_POST['alamat']) ? $_POST['alamat'] : ''; ?>"required></textarea><br>
        </div>
            <input type="submit" value="SUBMIT">
    </form></div>
    </section>

    <footer class="footer">
        <p> Vebie Yoseva @ 2023</p>
    </footer>
</div>
</div>
    
</body>
</html>