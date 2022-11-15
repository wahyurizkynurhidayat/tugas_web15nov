<?php
include("koneksi.php");?>

<html>
    <head>
</head>
<body> 
    <h1>Aplikasi Pendataan Vaksin Covid-19</h1>
    <h4> <a href=data.php>Pendataan</a></h4>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Vaksin</th>
</tr>

<?php
include("koneksi.php"); 
$sql= 'SELECT * FROM tb_vaksin';
$query= mysqli_query($db, $sql);

while($data=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$data['id']."</td>";
    echo"<td>".$data['nama']."</td>";
    echo"<td>".$data['alamat']."</td>";
    echo"<td>".$data['jenis_vaksin']."</td>";
    echo"<td>";
    echo"<a href='edit-data.php?id=". $data['id']."'>Edit</a> ";
    echo"<a href='hapus-data.php?id=". $data['id']."'>Hapus</a> ";
    echo"</td>";
    echo"</tr>";
}
?>
</table>
</body>
</html>