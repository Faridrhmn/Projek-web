<?php
session_start();

include 'koneksi.php';

$id_roti = $_POST['id_roti'];
$_SESSION['id_roti'] = $id_roti;
header("location:../shoping-cart.php");
?>