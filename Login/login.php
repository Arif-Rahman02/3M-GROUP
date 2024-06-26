<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="wrapper">
        <a href="../Main/main.php"><i class='bx bx-left-arrow-alt'></i></a>
        
        <form action="check.php" method="post">
            <h1>Masuk</h1>
            <p>Masuk dengan akun yang sudah terdaftar</p>
            <div class="input-box">
                <input name="username" id="username" type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input name="password" id="password" type="password" placeholder="Kata Sandi" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Ingat Akun Saya</label>
                <a href="#">Lupa kata sandi?</a>
            </div>

            <button type="submit" class="btn">Masuk</button>

            <!-- <div class="register-link">
                <p>Belum memiliki akun?
                    <a href="../Registrasi/Registrasi.html">Daftar</a>
                </p>
            </div> -->
        </form>
    </div>
</body>
</html>
