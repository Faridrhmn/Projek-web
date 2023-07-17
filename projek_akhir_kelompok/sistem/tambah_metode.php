<?php
include 'koneksi.php';

$kategori		= $_POST['kategori'];
$harga          = $_POST['harga'];

$sql	= "INSERT INTO metode_bayar (kategori, harga) VALUES ('$kategori', '$harga')";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if($query) {
    header("location:../metode_bayar.php");
} else {
	echo "metode gagal di tambahkan";
}
?>