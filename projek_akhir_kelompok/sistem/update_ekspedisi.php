<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $jenis = $_POST['jenis'];
    $biaya = $_POST['biaya'];

    $query = "UPDATE ekspedisi SET jenis = '$jenis', biaya = '$biaya' WHERE id_eks = '$id'";
    $sql = mysqli_query($connect, $query);

    if($sql){
        header("location:../ekspedisi.php");
    }
    else{
        echo "edit gagal";
    }
?>