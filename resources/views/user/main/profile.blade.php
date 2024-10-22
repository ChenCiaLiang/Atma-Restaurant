<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        .grid-container {
            display: grid;
            grid-template-areas:
                'm1 m2'
                'm1 m3'
                'm1 m4';
            padding: 10px;
            column-gap: 30px;
            row-gap: 20px;
            margin-top: 10vh;
        }

        .grid-item {
            border: 1px solid rgba(0, 0, 0, 0.8);
            text-align: center;
        }

        .item1 {
            grid-area: m1;
        }

        .item2 {
            grid-area: m2;
        }

        .item3 {
            grid-area: m3;
        }

        .item4 {
            grid-area: m4;
        }
        
        .main-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body style="background-color:rgba(240, 218, 161, 1);font-family:Inter;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(247, 132, 5, 1);">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}" style="font-family: Italianno; font-size: 2rem; color: white;">Atma
                Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white"
                            href="{{ url('menu') }}"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('reservasi') }}"><strong>Reserve</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('menu') }}"><strong>Menu</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white; display: inline-block; border-bottom: 1px solid white;"
                            href="{{ url('profile') }}">
                            <span class="bi bi-person-circle"></span>
                        </a>


                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pembayaran') }}" style="color:white;"><i class="bi bi-cart-fill"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="grid-container justify-content-center align-content-center">
        <div class="item1">
            <div class="card align-items-center" style="padding:5vh;border-radius:25px">
                <h1 class="card-title">My Profile <a class="bi bi-pencil-square" href="{{ url('edit') }}"
                        style="color:black;"></a></h1>
                <img src="{{ asset('image/shin.png') }}" class="rounded circle" style="width:15vw;height:30vh;"
                    alt="...">
                <div class="card-body text-start">
                    <h3 class="card-title text-center">User12345</h3>
                    <p class="card-text m-0"><i class="bi bi-cake me-1"></i>October 1, 2000</p>
                    <p class="card-text m-0"><i class="bi bi-envelope me-1"></i>email@gmail.com</p>
                    <p class="card-text m-0"><i class="bi bi-telephone-fill me-1"></i>+62 123 456 789</p>
                    <p style="border-top:1px solid black;text-align:center;margin-top:0.5rem;">Customer</p>
                </div>
            </div>
        </div>
        <div class="item2">
            <div class="card text-start" style="padding:2rem;border-radius:25px;">
                <h5 class="card-title">Order History</h5>
                <div class="card-body " style="padding-left:20vw;padding-right:20vw;">
                    <p class="card-text text-center" style="font-size:3vw;color:grey;"><i
                            class="fa-solid fa-utensils"></i></p>
                    <p class="card-text text-center" style="color:grey;">History not found .. <br>order food <a
                            href="{{url('menu')}}" style="color:grey;">here</a></p>
                </div>
            </div>
        </div>

        <div class="item3">
            <div class="card text-start" style="padding:0.5rem;border-radius:25px;">
            <h5 class="card-title" style="margin-left:2%;">Ongoing Order</h5>
                <div class="card-body " style="padding-left:20vw;padding-right:20vw;">
                    <p class="card-text text-center" style="font-size:3vw;color:grey;"><i
                            class="fa-solid fa-utensils"></i></p>
                    <p class="card-text text-center" style="color:grey;">You haven't ordered anything .. <br>order food <a
                            href="{{url('menu')}}" style="color:grey;">here</a></p>
                </div>
            </div>
        </div>

        <div class="item4 text-start">
            <a type="button" class="btn btn-light" style="font-size:2rem;padding:15px;border-radius:30px;"
                href="{{ url('login') }}">Logout <i class="bi bi-box-arrow-right"></i></a>
        </div>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer text-center" style="background-color: #F78405; color: #ffffff;margin-top:10%">
        <div class="row">
            <div class="col text-start ms-4">
                <h1>Atma Restaurant</h1>
                <p>Jl. Babasari, Atma Jaya Yogyakartya, 93401, IND</p>
                <p>+623456789</p>
            </div>
            <div class="col d-flex flex-column align-items-center">
                <div>
                    <i class="fa-brands fa-instagram fs-2"></i>
                    <span class="fs-4 fw-bold">AtmaRestaurant</span>
                </div>
                <div>
                    <i class="fa-brands fa-square-facebook fs-2"></i>
                    <span class="fs-4 fw-bold">AtmaRestaurantOfficial</span>
                </div>
                <div>
                    <i class="fa-brands fa-twitter fs-2"></i>
                    <span class="fs-4 fw-bold">@AtmaResOff</span>
                </div>
                <div>
                    <i class="fa-brands fa-youtube fs-2"></i>
                    <span class="fs-4 fw-bold">AtmaCook</span>
                </div>
            </div>
            <div class="col text-end">
                <p class="fs-4 fw-bold m-1">Help</p>
                <p class="fs-4 fw-bold m-1">About Us</p>
                <p class="fs-4 fw-bold m-1">Contact Us</p>
                <p class="fs-4 fw-bold m-1">Terms & Conditions</p>
            </div>
        </div>
        <hr class="footer-line">
        <div class="container d-flex flex-column justify-content-center">
            <p>Copyright © 2024 Atma Restaurant.</p>
            <p>All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
