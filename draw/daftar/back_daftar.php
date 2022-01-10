<?php
$user_name = "root";
$password  = "";
$database  = "drawing"; 
$host_name = "localhost";

$dahkonek=mysqli_connect("localhost","root","","drawing");
if (!$dahkonek) {
    die("Connection Failed: " . mysqli_connect_error());
}
$id = @$_POST['id_user'];
$nama = @$_POST['username'];
$password = @$_POST['password'];
$email = @$_POST['email'];

$sql = "INSERT INTO user VALUES ('$id','$nama','$password','$email')";
if (mysqli_query($dahkonek, $sql)) {
      header("location:login.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($dahkonek);
}
mysqli_close($dahkonek);