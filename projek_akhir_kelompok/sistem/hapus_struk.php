<?php
include 'koneksi.php';

$hstr = $_GET['hstrtuk'];
$sql = "DELETE FROM struk WHERE id_struk='$hstr'";
$query = mysqli_query($connect, $sql);

if ($query) {
	header("location:product.php");
} else {
	echo "Hapus Data Gagal.";
}
?>