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
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
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

        .circle-3 {
            width: 200px;
            height: 200px;
            background-color: var(--main-color);
            position: absolute;
            border-radius: 100%;
            top: 0;
            right: 0;
            z-index: 0;
            filter: blur(90px);
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

        .container {
            max-width: 720px;
        }

        .imagecard {
            margin-top: 0;
            margin-bottom: 1.5rem;
            text-align: left;
            position: relative;
            background: #fff;
            box-shadow: 12px 15px 20px 0px rgba(46, 61, 73, 0.15);
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .imagecard .fa {
            position: relative;
            font-size: 70px;
        }

        .imagecard-topimage_header {
            padding: 20px;
        }

        a.imagecard:hover,
        .imagecard-topimage:hover {
            box-shadow: 2px 4px 8px 0px rgba(46, 61, 73, 0.2);
        }

        .imagecard-topimage a {
            width: 100%;
            height: 100%;
            display: block;
        }

        .imagecard-topimage_title {
            padding: 20px 24px;
            height: 80px;
            padding-bottom: 0.75rem;
            position: relative;
        }

        .imagecard-topimage a {
            border-bottom: none;
            text-decoration: none;
            color: #525c65;
            transition: color 0.3s ease;
        }
    </style>
</head>

<body style="background-color: #FDFEFE;">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="navbar mt-4">
        <div class="nav-left">
            <h2>Jaika Bakery</h2>
        </div>
        <div class="nav-right float-end">
            <a class="btn btn-danger" href="sistem/logout.php">Logout</a>
        </div>
    </div>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="heading text-center mb-5 py-4">
                <h4>Selamat Datang di</h4>
                <h1>Dashboard Jaika Bakery</h1>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="imagecard imagecard-topimage">
                    <a href="data_roti.php">
                        <div class="imagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
                            <center><img src="img/cupcake.png" width=75px" alt=""></center>
                        </div>
                        <div class="imagecard-topimage_title">
                            <h4 class="text-center">Data Roti</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="imagecard imagecard-topimage">
                    <a href="metode_bayar.php">
                        <div class="imagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
                            <center><img src="img/pay.png" width=75px" alt=""></center>
                        </div>
                        <div class="imagecard-topimage_title">
                            <h4 class="text-center">Data Metode Pembayaran</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="imagecard imagecard-topimage">
                    <a href="data_order.php">
                        <div class="imagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
                            <center><img src="img/order-delivery.png" width=75px" alt=""></center>
                        </div>
                        <div class="imagecard-topimage_title">
                            <h4 class="text-center">Data Orderan</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="imagecard imagecard-topimage">
                    <a href="ekspedisi.php">
                        <div class="imagecard-topimage_header" style="background-color: #FFB590">
                            <center><img src="img/delivery-car.png" width=75px" alt=""></center>
                        </div>
                        <div class="imagecard-topimage_title">
                            <h4 class="text-center">Data Ekspedisi</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>