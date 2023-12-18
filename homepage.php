<?php
if(isset($_SESSION['user'])){
?>
<div class="conten">
    <div class="desc">
        <h1>Hai!! Selamat Datang <?php echo $_SESSION['user']['username']?></h1>
    </div>
</div>
<?php
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
            </header>
            <div class="Tentang">
            <p> Kamu bingung untuk mengembangkan minat dan bakat kamu dalam bidang seni??
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
</div>
</body>
</html>

