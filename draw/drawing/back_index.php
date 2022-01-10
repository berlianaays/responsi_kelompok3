<?php
$user_name = "root";
$password  = "";
$database  = "drawing"; 
$host_name = "localhost";

$dahkonek=mysqli_connect("localhost","root","","drawing");
if (!$dahkonek) {
    die("Connection Failed: " . mysqli_connect_error());
}
$id = @$_POST['id_gambar'];
$nama = @$_POST['nama_gambar'];

$sql = "INSERT INTO daftar_gambar VALUES ('$id','$nama')";
if (mysqli_query($dahkonek, $sql)) {
      header("location:../daftar_gambar_user.php");
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($dahkonek);
}
mysqli_close($dahkonek);