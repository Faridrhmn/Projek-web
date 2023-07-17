<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/38a1e4d51a.js" crossorigin="anonymous"></script>
    <style>
    .circle-1 {
        width: 300px;
        height: 300px;
        background-color: #B5EAEA;
        position: absolute;
        border-radius: 100%;
        top: 0;
        right: 80%;
        z-index: -1;
        filter: blur(50px);
    }

    .circle-2 {
        width: 300px;
        height: 400px;
        background-color: #F6A4B4;
        /* background-color: #D1E4F8; */
        position: absolute;
        border-radius: 100%;
        bottom: 0;
        right: 0;
        z-index: -1;
        filter: blur(100px);
    }


    .circle-4 {
        width: 300px;
        height: 400px;
        background-color: #D1E4F8;
        position: absolute;
        border-radius: 100%;
        top: 50;
        left: 0;
        z-index: -1;
        filter: blur(50px);
    }

    .option-form {
        margin-top: 30px;
        position: relative;
    }

    .option-form span {
        font-size: 1rem;
        font-weight: 700;
        position: absolute;
        top: -25px;
        left: 0px;
    }

    .option-form select {
        height: 35px;
        width: 100%;
        font-size: 1rem;
        outline: 0;
        padding-left: 5px;
        border: 1px solid #f6f6f7;
        cursor: pointer;
    }

    .option-form select option:nth-child(1) {
        display: none;

    }
    </style>
</head>

<body style="position: relative;">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <header class="shadow">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">Jaika Bakery</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="nav-menu collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item text-center"><a class="nav-link" href="#Home">Home</a></li>
                        <li class="nav-item text-center"><a class="nav-link" href="#About">About</a></li>
                        <li class="nav-item text-center"><a class="nav-link" href="#Service">Services</a></li>
                        <li class="nav-item text-center"><a class="nav-link" href="#Contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="px-4 px-lg-0">
        <div class="container py-5 text-center">
            <h1 class="display-4"><strong> Shopping Cart</strong></h1>
        </div>
        <div class="pb-5">
            <!-- <form action="sistem/tambah_struk.php" method="POST"> -->
            <div class="container">
                <form action="#udin" method="POST">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="p-2 px-3 text-uppercase">Produk</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Harga</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Kuantitas</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                    include "sistem/koneksi.php";
                                    $id_roti = $_GET['broti'];
                                    $query = "Select * from data_roti where id_roti = '$id_roti'";
                                    $sql = $connect->query($query);
                                    $data = mysqli_fetch_assoc($sql);
                                    $_SESSION['id_roti'] = $id_roti;
                                    ?>
                                        <th scope="row" class="border-0">
                                            <div class="p-2">
                                                <img src="./img/<?php echo $data['foto']; ?>" alt="" width="70"
                                                    class="img-fluid rounded shadow-sm">
                                                <div class="ms-3 d-inline-block align-middle">
                                                    <h5 class="mb-0"><?= $data['nama_roti'] ?></h5>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="border-0 align-middle"><strong>Rp.<?= $data['harga'] ?></strong>
                                        </td>
                                        <td class="border-0 align-middle"><input id="quantity" type="number"
                                                name='number' value="1" class="form-control quantity-input"
                                                style="max-width:4rem;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 p-4 bg-white rounded shadow-sm mb-5">
                        <center>
                            <div class="me-3">
                                <div class="option-form align-content-left">
                                    <span>Nama Pembeli</span>
                                    <input type="text" placeholder="Masukkan nama" name="nama">
                                </div>
                                <div class="option-form">
                                    <span>Metode Pembayaran</span>
                                    <select name="metode">
                                        <option>Select Metode</option>
                                        <?php
                                    include "sistem/koneksi.php";
                                    $query = "Select * from metode_bayar";
                                    $sql = $connect->query($query);
                                    while ($data = $sql->fetch_object()) {
                                    ?>
                                        <option value="<?= $data->id_metode ?>">
                                            <?php echo "$data->kategori";
                                        ?>
                                        </option>
                                        <?php
                                        ?>
                                        <?php  }
                                    ?>
                                    </select>
                                </div>
                                <div class="option-form mb-3">
                                    <span>Ekspedisi</span>
                                    <select name="ekspedisi">
                                        <option>Select Kurier</option>
                                        <?php
                                    include "sistem/koneksi.php";
                                    $query = "Select * from ekspedisi";
                                    $sql = $connect->query($query);
                                    while ($data = $sql->fetch_object()) {
                                    ?>
                                        <option value="<?= $data->id_eks ?>"><?= $data->jenis ?></option>
                                        <?php $okir = $data->biaya; }
                                    ?>
                                    </select>
                                </div>
                            </div>
                        </center>
                        <div>
                            <!-- <a class="btn btn-dark rounded-pill py-2 btn-block" href="#udin">cek harga</a> -->
                            <input type="submit" class="btn btn-dark rounded-pill py-2 btn-block" value="Cek harga">
                        </div>
                    </div>
                </form>
                <div id="udin" class="col-lg-12 bg-white rounded shadow-sm">
                    <?php
                    error_reporting(0); 
                    if($_POST['nama'] != NULL){ ?>
                    <div class="bg-light px-4 py-3 text-uppercase font-weight-bold">Rincian Order</div>
                    <div class="p-4">
                        <ul class="list-unstyled mb-4">
                            <?php
                                include "sistem/koneksi.php";
                                $num = 0;
                                $username = $_SESSION['username'];
                                $query5 = "Select * from user where username = '$username'";
                                $sql5 = $connect->query($query5);
                                $data5 = $sql5->fetch_object();
                                $id_user = $data5->id_user;
                                $sub = $_SESSION['id_roti'];
                                $nama = $_POST['nama'];
                                $jml = $_POST['number'];
                                $query1 = "Select * from data_roti where id_roti = '$sub'";
                                $sql1 = $connect->query($query1);
                                $data = $sql1->fetch_object();
                                $tot = $data->harga * $jml;
                                $ba = $_POST['metode'];
                                $query2 = "Select * from metode_bayar where id_metode = '$ba'";
                                $sql2 = $connect->query($query2);
                                $data2 = $sql2->fetch_object();
                                $ed = $_POST['ekspedisi'];
                                $query3 = "Select * from ekspedisi where id_eks = '$ed'";
                                $sql3 = $connect->query($query3);
                                $data3 = $sql3->fetch_object();
                                $total_all = $tot + $data2->harga + $data3->biaya;
                                //$sql = "INSERT INTO struk (nama_pelanggan, jumlah, total_biaya, id_eks, id_metode, id_roti, id_user) VALUES ('$nama', '$jml', '$total_all', '$ed', '$ba', '$sub', '$id_user')";
                                //$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));
                                ?>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                    class="text-muted">Subtotal
                                    Biaya</strong><strong>Rp.<?= $tot ?></strong>
                            </li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                    class="text-muted">Biaya Admin</strong><strong>Rp.<?= $data2->harga ?></strong>
                            </li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                    class="text-muted">Ongkos Kirim</strong><strong>Rp.<?= $data3->biaya ?></strong>
                            </li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                    class="text-muted">Total</strong>
                                <h5 class="font-weight-bold">Rp.<?= $total_all ?></h5>
                            </li>
                        </ul>
                        <!-- <input type="submit" class="btn btn-dark rounded-pill py-2 btn-block"
                                value="Order Sekarang"> -->
                        <a class="btn btn-dark rounded-pill py-2 btn-block" href="product.php?message=ordered">
                            <?php
                            $sql = "INSERT INTO struk (nama_pelanggan, jumlah, total_biaya, id_eks, id_metode, id_roti, id_user) VALUES ('$nama', '$jml', '$total_all', '$ed', '$ba', '$sub', '$id_user')";
                            $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                        ?>
                            Order Sekarang</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>