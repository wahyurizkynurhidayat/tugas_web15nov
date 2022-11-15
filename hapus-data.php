<?php
include("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql = "DELETE FROM tb_vaksin where id=$kode";
$query = mysqli_query($db, $sql);

if($query){
    header('Location:pendataan.php');
}
else {
    die ('gagal mengedit');
}

?>