<!DOCTYPE html>
<html>
    <head>
        <title>ewe</title>
</head>
<body>
    <h2>Halaman admin</h2>

    <br/>

    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:.../index.php?pesan=belum_login");
    }
    ?>
    <h4>selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    <br/>
    <a href="pendataan.php"> DAFTAR TABEL VAKSIN</a>
    <br/>
    <br/>
<tr>
    <a href="logout.php">LOGOUT</a>
</tr>
</body>
</html>