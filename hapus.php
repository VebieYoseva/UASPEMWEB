<?php
mysqli_query($koneksi," DELETE FROM tabeldaftar WHERE nim = '$_GET[nim]'");
echo"<script>alert('Data berhasil dihapus'); document.location = '?page=tabel';</script>";
?>