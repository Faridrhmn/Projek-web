<?php
include 'koneksi.php';

$nama_roti		= $_POST['nama_roti'];
$harga			= $_POST['harga'];
$filename       = $_FILES["foto"]["name"];
$tempname       = $_FILES["foto"]["tmp_name"];
$folder         = "../img/" . $filename;
$desk           = $_POST['desk'];

$sql	= "INSERT INTO data_roti (nama_roti, harga, foto, desk) VALUES ('$nama_roti', '$harga', '$filename', '$desk')";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
if($query) {
    header("location:../data_roti.php");
} else {
	echo "roti gagal di tambahkan";
}
}else {
    header("location:../data_roti.php");
}
?>