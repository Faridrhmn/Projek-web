<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    $query = "UPDATE metode_bayar SET kategori = '$kategori', harga = '$harga'WHERE id_metode = '$id'";
    $sql = mysqli_query($connect, $query);

    if($sql){
        header("location:../metode_bayar.php");
    }
    else{
        echo "edit gagal";
    }
?>