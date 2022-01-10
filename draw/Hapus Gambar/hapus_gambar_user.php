<?php 
$koneksi = mysqli_connect("localhost","root","","drawing");
 
$id = $_GET['id_gambar'];
 
// menghapus data dari database
$sql = mysqli_query($koneksi,"DELETE FROM `daftar_gambar` WHERE id_gambar='$id'");

header("location:daftar_gambar_user.php");
?>