<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Sidebar</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php
    session_start();

    if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
    }
    ?>

</head>
<body>
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="../Pengaduan/pengaduan.html">Pengaduan</a>
        <a href="#">Kritik dan Saran</a>
        <a href="../Main/main.php">Logout</a>
    </div>

    <div id="main">
        <button class="openbtn" onclick="openNav()">
          <i class='bx bx-menu'></i>
        </button>  
    </div>

    <h1>Layanan Pengaduan dan Aspirasi Mahasiswa</h1>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod repellendus omnis distinctio et maxime voluptatem, animi, a similique sed suscipit beatae explicabo quidem! Porro, maxime. Architecto hic quibusdam ex odit.</p>
    

    <script src="dashboard.js"></script>
</body>
</html>
