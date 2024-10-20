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
    </style>
</head>

<body style="background-color:rgba(240, 218, 161, 1)">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(247, 132, 5, 1);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-family: Italianno; font-size: 2rem; color: white;">Atma
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
                        <a class="nav-link" style="color: white;" href="#"><strong>Reserve</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ url('menu') }}"><strong>Menu</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white; display: inline-block; border-bottom: 1px solid white;"
                            href="#">
                            <span class="bi bi-person-circle"></span>
                        </a>


                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white;"><i class="bi bi-cart-fill"></i></a>
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
                            href="#" style="color:grey;">here</a></p>
                </div>
            </div>
        </div>

        <div class="item3">
            <div class="card text-start" style="padding:2rem;border-radius:25px;padding-bottom:10vh;">
                <h5 class="card-title"></h5>
                <div class="card-body " style="padding-left:20vw;padding-right:20vw;">

                </div>
            </div>
        </div>

        <div class="item4 text-start">
            <a type="button" class="btn btn-light" style="font-size:2rem;padding:15px;border-radius:30px;"
                href="{{ url('login') }}">Logout <i class="bi bi-box-arrow-right"></i></a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
