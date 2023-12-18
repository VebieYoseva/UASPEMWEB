<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablepage</title>
    <link rel="stylesheet" href="tablestyle.css">
</head>
<body>
    <div class="daftar">
    <div class="data">
       <h1> Data Mahasiswa</h1> 
    <table class="table" border="1" id="tabeldaftar">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $daftar = mysqli_query($koneksi,"SELECT * FROM tabeldaftar ORDER BY nim ASC");
        while ($data = mysqli_fetch_array($daftar)) {         
        ?>
        <tr>
            <td><?php echo $data['Nama']; ?></td>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['Prodi']; ?></td>
            <td><?php echo $data['Email']; ?></td>
            <td><?php echo $data['Jenis_Kelamin']; ?></td>
            <td><?php echo $data['Alamat']; ?></td>
            <td>
                <a class="btn" href="?page=edit&&id=<?php echo $data['nim']?>">Edit</a>
                <a class="btn_del" href="?page=delete&&id=<?php echo $data['nim']?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>    
    </div> 
    </div>
    <footer class="footer">
        <p> Vebie Yoseva @ 2023</p>
    </footer>
</div>
</body>
</html>