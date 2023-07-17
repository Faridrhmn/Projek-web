<?php
session_start();
	include 'koneksi.php';
	$nama_pelanggan = $_POST['nama'];
    $jumlah = $_POST['jml'];
    $id_roti = $_SESSION['id_roti'];
    // $id_roti = $_POST['roti'];
    $id_method = $_POST['metode'];
	$id_eks = $_POST['ekspedisi'];

	$satu = "select harga from data_roti where id_roti=$id_roti";
	$sqlsatu = $connect->query($satu);
	$data = $sqlsatu->fetch_object();
	$hargasatu = $data->harga;

	$dua = "select biaya from ekspedisi where id_eks=$id_eks";
	$sqldua = $connect->query($dua);
	$data = $sqldua->fetch_object();
	$hargadua = $data->biaya;

	$tiga = "select harga from metode_bayar where id_metode=$id_method";
	$sqltiga = $connect->query($tiga);
	$data = $sqltiga->fetch_object();
	$hargatiga = $data->harga;

    $username = $_SESSION['username'];
    $query5 = "Select * from user where username = '$username'";
    $sql5 = $connect->query($query5);
    $data5 = $sql5->fetch_object();
    $id_user = $data5->id_user;

	$total = $hargasatu + $hargadua + $hargatiga;

	$sql	= "INSERT INTO struk (nama_pelanggan, jumlah, total_biaya, id_eks, id_metode, id_roti, id_user) VALUES ('$nama_pelanggan', '$jumlah', '$total', '$id_eks', '$id_method', '$id_roti', '$id_user')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
        header("location:../product.php?message=berhasil");
	} else {
		echo "rekap gagal di tambahkan";
	}
?>