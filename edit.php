
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nim'])) {
        $nim = $_GET['nim'];

        $query_edit = "SELECT * FROM tabeldaftar WHERE nim = '$nim'";
        $result_edit = $koneksi->query($query_edit);

        if ($result_edit->num_rows > 0) {
            $row = $result_edit->fetch_assoc();
            $nim_edit = $row['nim'];
            $nama = $row['Nama'];
            $prodi = $row['Prodi'];
            $email = $row['Email'];
            $jk = $row['Jenis_Kelamin'];
            $alamat = $row['Alamat'];
        } else {
            echo "Data tidak ditemukan.";
            exit();
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $nim_edit = $_POST['nim_edit']; 
        $nim_baru = $_POST['nim'];
        $nama = $_POST['Nama'];
        $prodi = $_POST['Prodi'];
        $email = $_POST['Email'];
        $jk = $_POST['Jenis_Kelamin'];
        $alamat = $_POST['Alamat'];

        $query_check_nim = "SELECT * FROM tabeldaftar WHERE nim = '$nim_baru'";
        $result_check_nim = $koneksi->query($query_check_nim);

        if ($result_check_nim->num_rows > 0 && $nim_baru !== $nim_edit) {
            echo "NIM sudah ada dalam database. Harap gunakan NIM yang berbeda.";
        } else {

            $query_update = "UPDATE tabeldaftar SET nim = '$nim_baru', Nama = '$nama', Prodi = '$prodi' , Email ='$email', Jenis_Kelamin='$jk', Alamat ='$alamat' WHERE nim = '$nim_edit'";
            
            if ($koneksi->query($query_update) === TRUE) {
                echo "Data dengan NIM $nim_edit berhasil diperbarui.";

                header("Location: index.php");
                exit();
            } else {
                echo "Error: " . $query_update . "<br>" . $koneksi->error;
            }
        }
    }
    ?>

<form action="" method="post">
        <input type="hidden" name="nim_edit" value="<?php echo $nim_edit; ?>">
        <input type="text" id="nama" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>" required><br>
        <input type="text" id="nim" name="nim" value="<?php echo isset($_POST['nim']) ? $_POST['nim'] : ''; ?>" required><br>
        <input type="text" id="prodi" name="prodi" value="<?php echo isset($_POST['prodi']) ? $_POST['prodi'] : ''; ?>" required><br>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required><br>
        <input type="radio" id="check-lk" name="jk" for="check-lk" value="<?php echo isset($_POST['lakilaki']) ? $_POST['lakilaki'] : ''; ?>" required> Laki-Laki</label>
        <input type="radio" id="check-pr" name="jk" for="check-pr" value="<?php echo isset($_POST['perempuan']) ? $_POST['perempuan'] : ''; ?>" required> Perempuan</label>
        <textarea id="alamat" name="alamat" value="<?php echo isset($_POST['alamat']) ? $_POST['alamat'] : ''; ?>"required></textarea><br>
        <button type="submit" name="update">Update Data</button>
    </form>
    </div>
</body>
</html>