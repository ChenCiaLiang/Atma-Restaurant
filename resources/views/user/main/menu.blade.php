<!DOCTYPE html>
<html lang="en" style="font-family:Inter;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            background-color: rgba(240, 218, 161, 1);
            padding: 5%;
            gap: 5%;
        }

        .grid-item {
            background-color: rgba(240, 218, 161, 1);
            text-align: center;
            border-radius: 25px;
        }

        .card {
            border-radius: 25px;
            padding: 0;
            margin: 0;
        }

        .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: cover;
            padding: 0;
            margin: 0;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }

        .card {

            border: none;
        }

        img {
            display: block;
        }

        .card-title {
            text-align: start;
            padding-bottom: 5%;
        }

        .card-text {
            text-align: start;
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
                        <a class="nav-link" style="color: white;text-decoration:underline; text-underline-offset:15px;"
                            href="#"><strong>Menu</strong></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('profile') }}"><i
                                class="bi bi-person-circle" style="border-bottom:1px;"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link bi bi-cart-fill" style="color: white;" href="{{ url('pembayaran') }}"></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container " style="text-align:center;padding:5%;">
        <h3 style="color:white;font-family:Italianno;color:black;font-size:3vw;">Atmarestaurant Menu</h3>

        <form class="d-flex" role="search" style="margin-top:5%;justify-content:center;">
            <div class="position-relative">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    style="border-radius: 25px; padding-left: 30px;width:50vw;">
                <span class="position-absolute"
                    style="left: 10px; top: 50%; transform: translateY(-50%); pointer-events: none;">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </form>

        <ul class="list-group list-group-horizontal mt-3"
            style="margin-left:2vw;border:none;background-color:none;color:">
            <li class="list-group-item"
                style="border:none;background-color:rgba(240, 218, 161, 1);color:white;text-decoration:underline;text-underline-offset:5px;">
                <strong>All</strong></li>
            <li class="list-group-item" style="border:none;background-color:rgba(240, 218, 161, 1);color:white;">
                <strong>Rice</strong></li>
            <li class="list-group-item" style="border:none;background-color:rgba(240, 218, 161, 1);color:white;">
                <strong>Noodle</strong></li>
            <li class="list-group-item" style="border:none;background-color:rgba(240, 218, 161, 1);color:white;">
                <strong>Drinks</strong></li>
        </ul>

        <div class="grid-container">
            <div class="grid-item">
                <div class="card ">
                    <img src="{{ asset('image/nasgor.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nasi Goreng</h5>
                        <p class="card-text">Rp75.000</p>
                        <div class="quantity-control d-flex align-items-center justify-content-center">
                            <button class="btn-decrement" style="border:none;background-color:white;">
                                <i class="bi bi-dash-circle" style="font-size:1.5vw;"></i>
                            </button>
                            <span class="quantity mx-2" style="font-size:1.5vw;">0</span>
                            <button class="btn-increment" style="border:none;background-color:white;">
                                <i class="bi bi-plus-circle" style="font-size:1.5vw;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item">
                <div class="card">
                    <img src="{{ asset('image/bibimbap.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bibimbap</h5>
                        <p class="card-text">Rp80.000</p>
                        <div class="quantity-control d-flex align-items-center justify-content-center">
                            <button class="btn-decrement" style="border:none;background-color:white;">
                                <i class="bi bi-dash-circle" style="font-size:1.5vw;"></i>
                            </button>
                            <span class="quantity mx-2" style="font-size:1.5vw;">0</span>
                            <button class="btn-increment" style="border:none;background-color:white;">
                                <i class="bi bi-plus-circle" style="font-size:1.5vw;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item">
                <div class="card">
                    <img src="{{ asset('image/hainan.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hainan Rice</h5>
                        <p class="card-text">Rp55.000</p>
                        <div class="quantity-control d-flex align-items-center justify-content-center">
                            <button class="btn-decrement" style="border:none;background-color:white;">
                                <i class="bi bi-dash-circle" style="font-size:1.5vw;"></i>
                            </button>
                            <span class="quantity mx-2" style="font-size:1.5vw;">0</span>
                            <button class="btn-increment" style="border:none;background-color:white;">
                                <i class="bi bi-plus-circle" style="font-size:1.5vw;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item">
                <div class="card">
                    <img src="{{ asset('image/ramen.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sauted Pork Ramen</h5>
                        <p class="card-text">Rp70.000</p>
                        <div class="quantity-control d-flex align-items-center justify-content-center">
                            <button class="btn-decrement" style="border:none;background-color:white;">
                                <i class="bi bi-dash-circle" style="font-size:1.5vw;"></i>
                            </button>
                            <span class="quantity mx-2" style="font-size:1.5vw;">0</span>
                            <button class="btn-increment" style="border:none;background-color:white;">
                                <i class="bi bi-plus-circle" style="font-size:1.5vw;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item">
                <div class="card">
                    <img src="{{ asset('image/japchae.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Japchae</h5>
                        <p class="card-text">Rp.85.000</p>
                        <div class="quantity-control d-flex align-items-center justify-content-center">
                            <button class="btn-decrement" style="border:none;background-color:white;">
                                <i class="bi bi-dash-circle" style="font-size:1.5vw;"></i>
                            </button>
                            <span class="quantity mx-2" style="font-size:1.5vw;">0</span>
                            <button class="btn-increment" style="border:none;background-color:white;">
                                <i class="bi bi-plus-circle" style="font-size:1.5vw;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item">
                <div class="card">
                    <img src="{{ asset('image/mieayam.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mie Ayam</h5>
                        <p class="card-text">Rp50.000</p>
                        <div class="quantity-control d-flex align-items-center justify-content-center">
                            <button class="btn-decrement" style="border:none;background-color:white;">
                                <i class="bi bi-dash-circle" style="font-size:1.5vw;"></i>
                            </button>
                            <span class="quantity mx-2" style="font-size:1.5vw;">0</span>
                            <button class="btn-increment" style="border:none;background-color:white;">
                                <i class="bi bi-plus-circle" style="font-size:1.5vw;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Footer -->
    <footer class="main-footer text-center" style="background-color: #F78405; color: #ffffff;">
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const incrementButtons = document.querySelectorAll('.btn-increment');
        const decrementButtons = document.querySelectorAll('.btn-decrement');

        incrementButtons.forEach(button => {
            button.addEventListener('click', function() {
                const quantitySpan = this.parentElement.querySelector('.quantity');
                let quantity = parseInt(quantitySpan.textContent);
                quantity++;
                quantitySpan.textContent = quantity;
            });
        });

        decrementButtons.forEach(button => {
            button.addEventListener('click', function() {
                const quantitySpan = this.parentElement.querySelector('.quantity');
                let quantity = parseInt(quantitySpan.textContent);
                if (quantity > 0) {
                    quantity--;
                    quantitySpan.textContent = quantity;
                }
            });
        });
    });
</script>

</html>
