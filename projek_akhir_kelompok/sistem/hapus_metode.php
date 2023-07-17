<?php
include 'koneksi.php';

$hmetode = $_GET['hmetode'];
$sql = "DELETE FROM metode_bayar WHERE id_metode='$hmetode'";
$query = mysqli_query($connect, $sql);

if ($query) {
	header("location:../metode_bayar.php");
} else {
	echo "Hapus Data Gagal.";
}
?>