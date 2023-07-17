<?php
include 'koneksi.php';

$horder = $_GET['horder'];
$sql = "DELETE FROM struk WHERE id_struk='$horder'";
$query = mysqli_query($connect, $sql);

if ($query) {
	header("location:../data_order.php");
} else {
	echo "Hapus Data Gagal.";
}
?>