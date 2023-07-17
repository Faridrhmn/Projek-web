<?php
include 'koneksi.php';

$id_roti = $_GET['hroti'];
$sql = "DELETE FROM data_roti WHERE id_roti='$id_roti';";
$query = mysqli_query($connect, $sql);

if ($query) {
	header("location:../data_roti.php");
} else {
	echo "Hapus Data Gagal.";
}
?>