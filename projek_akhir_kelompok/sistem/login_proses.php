<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$data = mysqli_query($connect, $sql);
$cek = mysqli_num_rows($data);

if ($cek>0 && $username != "admin"){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:../product.php");
}
else if($cek>0 && $username == "admin" && $password == "admin"){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:../admin.php");
}
else {
    header("location: ../login.php?message=failed");
}

?>