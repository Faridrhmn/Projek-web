<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
    </style>
</head>

<body style="position: relative;">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <!-- <div class="circle-3"></div> -->
    <!-- <div class="circle-4"></div> -->
    <section class="vh-100" style="background-color: #fdfdfd;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="sistem/register_proses.php">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Jaika Bakery</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign up your account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" class="form-control form-control-lg" name="username"/>
                                            <label class="form-label" for="form2Example17">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" name="password"/>
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button style="background-color:#ff6219;" class="btn text-light btn-lg btn-block" type="submit">Register</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>