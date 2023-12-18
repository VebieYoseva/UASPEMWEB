<?php
include 'koneksi.php';
if (!isset($_SESSION['user'])) {
    header('location:index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UASPEMWEB</title>
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
            id="table"
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
            <section class="container">
             <?php
             $page = @$_GET['page'];
             if (file_exists($page.'.php')) {
                include $page.'.php';
            }else {
                include 'home.php';
            }
            ?>
            </section>
</body>
</html>