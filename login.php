<?php
include "koneksi.php";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);

    if ($username == "" || $password == "") {
      echo"<script>alert('Data belum di isi'); document.location = 'login.php';</script>";
    }else {
      $login = mysqli_query($koneksi, "SELECT * FROM user where username='$username' AND password='$password'");

      if (mysqli_num_rows($login)) {
          $_SESSION['user'] = mysqli_fetch_array($login);
          echo"<script>alert('Berhasil Login'); document.location = 'index.php';</script>";
      }else {
        echo"<script>alert('Username/Password Salah!'); document.location = 'login.php';</script>";
    }
  }
}elseif (isset($_POST['signup'])) {
    $username= $_POST['username'];
    $password= sha1($_POST['password']);

    $user = mysqli_query($koneksi,"SELECT * FROM user");
    $data = mysqli_fetch_array($user);


    if ($username == "" || $password == "") {
        echo"<script>alert('Data tidak boleh kosong');</script>";
    }else{
        if ($username != $data['username']) {
        mysqli_query($koneksi, "INSERT INTO user(username, password) VALUES ('$username','$password')");
        echo"<script>alert('Berhasil Daftar'); document.location = 'login.php';</script>";
        
        }else {
            echo"<script>alert('Gagal. Silahkan Coba Lagi'); document.location = 'login.php';</script>";
        }
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="utama">
    <header>
    <nav class="atas">
    <img src="logosm.jpeg" height="50" width="200">
    <div class="panel">
        <h1> Universitas SM</h1>
        <p> Kelas Seni Universitas SM</p>
    </div>
    </nav>
    </header>

    <div class="login">
    <div class="loginuser">
       <h1> Login</h1> 
       <form method="post" enctype="multipart/form-data">
          <input type="text" name="username" placeholder="Username" required />
          <input type="password" name="password" placeholder="Password" required />
          <input type="submit" value="Login" name="login" />
          <a href="index.php">Beranda</a>
        </form>
    </div> 
    </div>
    <footer class="footer">
        <p> Vebie Yoseva @ 2023</p>
    </footer>
    <script src="script.js"></script>
</div>
</body>
</html>