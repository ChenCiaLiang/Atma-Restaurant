<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
        }

        .grid-container>div {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid black;
            text-align: center;
            width: 32vw;
            border: none;
            background-color: #FA9C14;
            border-radius: 15px;
            color: white;
        }

        .card {
            background-color: #F78405;
            border: none;
            border-radius: 10px;
        }

        .row p {
            margin: 5px;
        }

        .col button {
            border: none;
        }

        .card-body {
            margin: 0px;
        }
        
        .main-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body style="background-color:#F0DAA1;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(247, 132, 5, 1);">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}" style="font-family: Italianno; font-size: 2rem; color: white;">Atma
                Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white"
                            href="{{ url('/') }}"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;"
                            href="{{ url('reservasi') }}"><strong>Reserve</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('menu') }}"><strong>Menu</strong></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('profile') }}"><i
                                class="bi bi-person-circle" style="border-bottom:1px;"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link bi bi-cart-fill"
                            style="color: white;display: inline-block; border-bottom: 1px solid white;"
                            href="{{ url('pembayaran') }}"></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div style="text-align:center;margin-bottom:5%;margin-top:2%;">
        <h1>Pembayaran</h1>
    </div>
    <div class="container" style="padding:2px;">
        <div class="grid-container">
            <div style="padding:5px;">
                <div class="row align-items-center">
                    <p class="col text-start" style="font-size:1.5vw;"><strong>Your Order</strong></p>
                    <p class="col text-end" style="font-size:1.5vw;margin-right:1.5vw;"><strong>Remove All</strong></p>
                </div>
                <div class="container">
                    <div class="card mb-3" style="width:30vw;height:15vh;">
                        <div class="row g-0">
                            <div class="col">
                                <img src="{{ asset('image/bibimbap.png') }}" class="img-fluid rounded-start"
                                    style="width:100%;height:86%;object-fit:cover;" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-start" style="font-size:1vw;">Bibimbap</h5>
                                    <p class="card-text text-start" style="font-size:1vw;">Rp80.000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" style="width:30vw;height:15vh;">
                        <div class="row g-0">
                            <div class="col">
                                <img src="{{ asset('image/ramen.png') }}" class="img-fluid rounded-start"
                                    style="width:100%;height:86%;object-fit:cover;" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-start" style="font-size:1vw;">Sauted Pork Ramen</h5>
                                    <p class="card-text text-start" style="font-size:1vw;">Rp70.000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" style="width:30vw;height:15vh;">
                        <div class="row g-0">
                            <div class="col">
                                <img src="{{ asset('image/thai.png') }}" class="img-fluid rounded-start"
                                    style="width:100%;height:83%;object-fit:cover;" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-start" style="font-size:1vw;">Bibimbap</h5>
                                    <p class="card-text text-start" style="font-size:1vw;">Rp25.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="padding:5px;">
                <p style="text-align:center;font-size:1.5vw;"><strong>Meja No.14</strong></p>
                <div class="container">
                    <div class="card" style="width: 30vw;">
                        <div class="card-body">
                            <h5 class="card-title text-start"><strong>Pesanan</strong></h5>
                            <div class="row">
                                <p class="col card-text text-start" style="font-size:1vw;">1 Bibimbap</p>
                                <p class="col card-text text-end" style="font-size:1vw;">Rp80.000</p>
                            </div>

                            <div class="row">
                                <p class="col card-text text-start" style="font-size:1vw;">1 Sauted Pork Ramen</p>
                                <p class="col card-text text-end" style="font-size:1vw;">Rp70.000</p>
                            </div>

                            <div class="row">
                                <p class="col card-text text-start" style="font-size:1vw;">1 Thai Iced Tea</p>
                                <p class="col card-text text-end" style="font-size:1vw;">Rp25.000</p>
                            </div>

                            <hr>

                            <div class="row">
                                <p class="col card-text text-start" style="font-size:1vw;">Subtotal</p>
                                <p class="col card-text text-end" style="font-size:1vw;">Rp183.000</p>
                            </div>

                            <div class="row">
                                <p class="col card-text text-start" style="font-size:1vw;">Tax</p>
                                <p class="col card-text text-end" style="font-size:1vw;">Rp18.300</p>
                            </div>

                            <div class="row">
                                <p class="col card-text text-start" style="font-size:1vw;"><strong>Total</strong></p>
                                <p class="col card-text text-end" style="font-size:1vw;"><strong>Rp201.300</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <p class="text-start" style="font-size:1vw;"><strong>Pilih Pembayaran</strong></p>
            </div>

            <div class="col" style="margin-left:42%;">
                <button
                    style="width:8vw;height:5vh;border-radius:25px;margin-right:3%;background-color:#F78405;color:white;font-size:0.8vw;">QRIS</button>
                <button
                    style="width:8vw;height:5vh;border-radius:25px;background-color:#F78405;color:white;font-size:0.8vw;">Virtual
                    Account</button>
            </div>
        </div>
    </div>
    <!-- Main Footer -->
    <footer class="main-footer text-center" style="background-color: #F78405; color: #ffffff">
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
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>
