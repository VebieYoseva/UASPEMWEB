<?php
include 'koneksi.php';
if (isset($_SESSION['user'])) {
    header('location:user.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homestyle.css">
</head>
<body>
       <div class="utama"> 
        <header>    
        <nav class="navbar">
                <li><a href="?page=homepage" class="
                        <?php 
                        if (!isset($_GET['page'])) { 
                            echo "nav_active"; 
                        }elseif($_GET['page'] == 'homepage'){
                            echo "nav_active";
                        } 
                        ?>
                        ">Beranda</a>
                        <hr class="nav 
                        <?php 
                        if (!isset($_GET['page'])){ 
                            echo "nav_active"; 
                        }elseif($_GET['page'] == 'homepage'){
                            echo "nav_active";
                        }
                        ?>"
                        id="home"></li>
                        <?php
                    if(isset($_SESSION['user'])){
                    ?>
                <li>
                    <a href="?page=formulir" class="
                    <?php
                    if(isset($_GET['page'])){
                        if ($_GET['page'] == 'formulir'){ 
                            echo "active";
                        } 
                    }
                    ?>
                    "> Formulir </a>
                    <hr class="nav 
                    <?php 
                    if(isset($_GET['page'])){
                        if($_GET['page'] == 'formulir'){
                            echo "nav_active";
                        }
                    }
                    ?>"
                    id="form">
                </li>
                <li>
                    <a href="?page=tabel"
                    <?php 
                    if(isset($_GET['page'])){
                        if ($_GET['page'] == 'tabel'){
                            echo "class='active'";
                        }
                    }
                    ?>
                    >Tabel </a>
                    <hr class="nav 
                    <?php 
                    if(isset($_GET['page'])){
                        if($_GET['page'] == 'tabel'){
                            echo "nav_active";
                        }
                    }
                    ?>"
                    id="tabeldaftar"
                    ></li>
                    <?php
                    }

                    if (isset($_SESSION['user'])) {
                    ?>
                    <li>
                        <a
                        href="logout.php"
                        >
                        Logout
                        </a>
                        <hr
                        class="nav"
                        id="login"
                        >
                    </li>
                    <?php
                    }else{
                    ?>
                    <li>
                        <a
                        href="login.php"
                        >
                        Login
                        </a>
                        <hr
                        class="nav"
                        id="login"
                        >
                    </li>
                    <?php
                    }
                    ?>
                    </nav>
            <nav class="atas">
            <img src="logosm.jpeg" height="50" width="200">
            <div class="panel">
                <h1> Universitas SM</h1>
                <p> UKM Seni Universitas SM</p>
            </div>
            </nav>
            </header>
            <section>
        
        <?php
          $page = @$_GET['page'];
          if (file_exists($page.'.php')) {
            include $page.'.php';
          }else {
            include 'homepage.php';
          }
          ?>
    </section>
            <div class="Tentang">
            <p> Haloo Sahabat Seni!!! Kamu bingung untuk mengembangkan minat dan bakat kamu dalam bidang seni??
                Ayo bergabung dengan kami UKM Seni Universitas SM ! Kami akan membantu teman- teman semua untuk memberikan wadah untuk mengekspresikan diri dan berkembang bersama sesama seniman serta berpartisipasi dalam berbagai kegiatan seni yang seru. 
                Mari bergabung menjadi bagian dari perjalanan seni yang menginspirasi!
            </p>
            <div class="artis">
                <img src="poto1.jpeg" class="pict">
                <img src="poto2.jpeg" class="pict">
                <img src="poto3.jpeg" class="pict">
            </div>
        </div>
            <footer class="footer">
                <p> Vebie Yoseva @ 2023</p>
            </footer>
        <script src="script.js"></script>
</body>
</html>