<?php
include 'koneksi.php';

$heks = $_GET['heks'];
$sql = "DELETE FROM ekspedisi WHERE id_eks='$heks'";
$query = mysqli_query($connect, $sql);

if ($query) {
	header("location:../ekspedisi.php");
} else {
	echo "Hapus Data Gagal.";
}
?>