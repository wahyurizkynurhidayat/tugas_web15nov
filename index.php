<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
</head>
<body>
    <h2>LOGIN VAKSIN XII RPL1</h2>
    <br/>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="POST" action="cek_login.php">
        <table>
            <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="masukan username"></td>
</tr>
<tr>
    <td>password</td>
    <td>:</td>
    <td><input type="pasword" name="password" placeholder="masukan password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="login"></td>
</tr>
</table>
</form>
</html>