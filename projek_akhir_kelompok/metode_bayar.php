<?php
session_start();

if (empty($_SESSION['username'])) {
    header('location:login.php?message=belum_login');
}
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
    .nav-brand {
        text-decoration: none !important;
        font-size: 1.5rem;
        color: #0C0C27;
        font-weight: bold !important;
    }

    .circle-1 {
        width: 300px;
        height: 300px;
        background-color: #B5EAEA;
        position: absolute;
        border-radius: 100%;
        top: 0;
        right: 80%;
        z-index: 0;
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
        z-index: 0;
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
        z-index: 0;
        filter: blur(50px);
    }

    html,
    body,
    .intro {
        height: 100%;
    }

    table td,
    table th {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    thead th {
        color: #fff;
    }

    .card {
        border-radius: .5rem;
    }

    .table-scroll {
        border-radius: .5rem;
    }

    .table-scroll table thead th {
        font-size: 1rem;
    }

    thead {
        top: 0;
        position: sticky;
    }
    </style>
</head>

<body style="position: relative;">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <!-- <div class="circle-3"></div> -->
    <!-- <div class="circle-4"></div> -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div><a class="nav-brand" href="#">Jaika Bakery</a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"></div> -->
                <div class="nav-menu collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item text-center"><a class="nav-link" href="admin.php">Dashboard</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="intro shadow">
        <div class="bg-image h-100" style="background-color: #f5f7fa;">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card p-3">
                                <div class="card-body p-0">
                                    <div class="heading mb-5">
                                        <h2 class="text-center">Input Metode Pembayaran</h2>
                                        <h6 class="text-center mb-4">Tambahkan pilihan metode pembayaran.</h6>
                                        <hr>
                                    </div>
                                    <form action="sistem/tambah_metode.php" method="POST">
                                        <div class="row">
                                            <div class=" form-group mb-3 col-6">
                                                <input type="text" class="col form-control"
                                                    placeholder="Masukkan Metode Pembayaran" name="kategori">
                                            </div>
                                            <div class=" form-group mb-3 col-6">
                                                <input type="number" class="col form-control"
                                                    placeholder="Masukkan Biaya Admin" name="harga">
                                            </div>
                                            <div class="input-form mb-4">
                                                <input type="submit" class="btn btn-primary btn-block" name="submit"
                                                    value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                                            style="position: relative; height: 300px">
                                            <table class="table table-striped mb-0">
                                                <thead style="background-color: #FD6D24;">
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Kategori</th>
                                                        <th scope="col">Biaya</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include "sistem/koneksi.php";
                                                    $num = 1;
                                                    $query = "Select * from metode_bayar";
                                                    $sql = $connect->query($query);
                                                    while ($data = $sql->fetch_object()) {
                                                    ?>

                                                    <tr>
                                                        <td><?= $num ?> </td>
                                                        <td><?= $data->kategori ?></td>
                                                        <td><?= $data->harga ?></td>
                                                        <td><a class="btn btn-danger"
                                                                href="sistem/hapus_metode.php?hmetode=<?= $data->id_metode ?>">Delete</a><a
                                                                class="btn btn-info"
                                                                href="edit_bayar.php?emetode=<?= $data->id_metode ?>">Edit</a>
                                                        </td>
                                                    </tr>
                                                    <?php $num++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-6">
                            
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>