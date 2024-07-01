<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik dan Saran</title>
    <link rel="stylesheet" href="kritik.css">
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
        <a href="../Dashboard/Dashboard.php">Dashboard</a>
        <a href="../Pengaduan/pengaduan.php">Pengaduan</a>
        <a href="kritik.php">Kritik dan Saran</a>
        <a href="../Main/main.php">Logout</a>
    </div>

    <div id="main">
        <button class="openbtn" onclick="openNav()">
          <i class='bx bx-menu'></i>
        </button>  
    </div>

    <h1>Layanan Pengaduan dan Aspirasi Mahasiswa</h1>
    <hr>
    <h3>Kritik dan Saran</h3>

    <div class="input-box">
        <input type="text" placeholder="Ketik aduan disini"required>
    </div>
    <form action="/action_page.php">
        <label for="myfile">Tambahkan File : </label><br>
        <input type="file" id="myfile" name="myfile" multiple>
        <button type="submit" class="btn">Kirim</button>
      </form>

    <script src="kritik.js"></script>
</body>
</html>
