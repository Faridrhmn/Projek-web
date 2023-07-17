<?php
include 'koneksi.php';

$jenis			= $_POST['jenis'];
$biaya			= $_POST['biaya'];

$sql	= "INSERT INTO ekspedisi (jenis, biaya) VALUES ('$jenis', '$biaya')";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));
if($query) {
    header("location:../ekspedisi.php");
} else {
	echo "ekspedisi gagal di tambahkan";
}
?>