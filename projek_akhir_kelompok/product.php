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

    .button-orange {
        font-size: 0.8rem;
        color: #fff;
        background-color: #FD6D24;
        padding: 10px 30px;
        display: inline-block;
        border: none;
    }

    .button-orange:hover {
        opacity: 0.7;
        color: #fff;
    }

    .button-outline {
        font-size: 0.8rem;
        border: 1px solid #FD6D24;
        padding: 10px 30px;
        display: inline-block;
        color: #FD6D24;
    }

    .button-outline:hover {
        color: #FFF;
        background-color: #FD6D24;
    }
    </style>
</head>

<body style="position: relative;">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <!-- <div class="circle-3"></div> -->
    <!-- <div class="circle-4"></div> -->
    <header class="shadow">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">Jaika Bakery</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"></div> -->
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
    <div class="container mt-5 mb-5">
        <?php
        if (isset($_GET['message'])) {
            if ($_GET['message'] == "ordered") {
                echo "Orderan berhasil";
            }
        }
        ?>
        <form action="sistem/product_proses.php" method="POST">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <?php
            include "sistem/koneksi.php";
            $query = "Select * from data_roti";
            $sql = $connect->query($query);
            while($data = mysqli_fetch_assoc($sql)){;
            ?>
                    <div class="row p-2 bg-white border rounded mb-2">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                                src="./img/<?php echo $data['foto']; ?>"">
                    </div>
                    <div class=" col-md-6 mt-1">
                            <h5><?php echo $data['nama_roti']; ?></h5>
                            <p class="text-justify para mb-0"><?php echo $data['desk']; ?><br><br></p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1"><?php echo $data['harga']; ?></h4>
                            </div>
                            <div class="d-flex flex-column mt-4">
                                <a href="shoping-cart2.php?broti=<?=$data['id_roti']?>"><button class=" button-orange"
                                        type="button" value="<?=$data['id_roti']?>">Beli</button></a>
                                <button class="btn button-outline btn-sm mt-2" type="button">Tambahkan
                                    Keranjang</button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>