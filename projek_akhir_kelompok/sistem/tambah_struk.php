<?php
	include 'koneksi.php';

	$nama_pelanggan = $_POST['nama_pelanggan'];
    $jumlah = $_POST['jumlah'];
    $id_roti = $_POST['roti'];
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

	$total = $hargasatu + $hargadua + $hargatiga;

	$sql	= "INSERT INTO struk (nama_pelanggan, jumlah, total_biaya, id_eks, id_metode, id_roti) VALUES ('$nama_pelanggan', '$jumlah', '$total', '$id_eks', '$id_method', '$id_roti')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
        header("location:../checkout.php?message=berhasil");
	} else {
		echo "rekap  gagal di tambahkan";
	}
?>