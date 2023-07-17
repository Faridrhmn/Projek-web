<?php
include 'koneksi.php';

$username		= $_POST['username'];
$password		= $_POST['password'];

$sql	= "INSERT INTO user (username, password) VALUES ('$username', '$password')";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if($query) {
    header("location:../login.php");
} else {
	echo "Akun Gagal di Buat";
}
?>