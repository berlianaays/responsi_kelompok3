<?php 
$koneksi = mysqli_connect("localhost","root","","drawing");
 
$id = $_GET['id_user'];
 
// menghapus data dari database
$sql = mysqli_query($koneksi,"DELETE FROM `user` WHERE id_user='$id'");

header("location:daftar_user_admin.php");
?>