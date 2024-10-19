<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    .grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      background-color: rgba(240, 218, 161, 1);
      padding: 5%;
      gap:5%;
    }
    .grid-item {
      background-color: rgba(240, 218, 161, 1);
      text-align: center;
      border-radius:25px;
    }

    .card{
      border-radius:25px;
      padding:0;
      margin:0;
    }
    .card-img-top {
      width: 100%; 
      height: 250px; 
      object-fit: cover;
      padding:0;
      margin:0;
      border-top-left-radius:25px;
      border-top-right-radius:25px;
    }
    .card{

      border:none;
    }
    img{
      display:block;
    }
    .card-title{
      text-align:start;
      padding-bottom:5%;
    }

    .card-text{
      text-align:start;
    }

    

    
  </style>
</head>
<body style="background-color:rgba(240, 218, 161, 1)">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(247, 132, 5, 1);">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="font-family: Italianno; font-size: 2rem; color: white;">Atma Restaurant</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" style="color: white" href="{{url('/')}}"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="{{url('reservasi')}}"><strong>Reserve</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;text-decoration:underline; text-underline-offset:15px;" href="#" ><strong>Menu</strong></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="{{url('profile')}}" ><i class="bi bi-person-circle"  style="border-bottom:1px;"></i></a>
          </li>

          <li class="nav-item">
            <a class="nav-link bi bi-cart-fill" style="color: white;" href="#" ></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="container " style="text-align:center;padding:5%;"> 
    <h3 style="color:white;">Atmarestaurant Menu</h3>

    <form class="d-flex" role="search" style="margin-top:5%;justify-content:center;">
      <div class="position-relative">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 25px; padding-left: 30px;width:50vw;">
        <span class="position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%); pointer-events: none;">
          <i class="fas fa-search"></i>
        </span>
      </div>
    </form>

    <ul class="list-group list-group-horizontal mt-3" style="margin-left:2vw;border:none;background-color:none;color:">
      <li class="list-group-item" style="border:none;background-color:rgba(240, 218, 161, 1);color:white;text-decoration:underline;text-underline-offset:5px;"><strong>All</strong></li>
      <li class="list-group-item" style="border:none;background-color:rgba(240, 218, 161, 1);color:white;"><strong>Rice</strong></li>
      <li class="list-group-item" style="border:none;background-color:rgba(240, 218, 161, 1);color:white;"><strong>Noodle</strong></li>
      <li class="list-group-item" style="border:none;background-color:rgba(240, 218, 161, 1);color:white;"><strong>Drinks</strong></li>
    </ul>

    <div class="grid-container">
      <div class="grid-item">
        <div class="card "  >
          <img src="{{asset('image/nasgor.png')}}" class="card-img-top" alt="...">
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
        <div class="card" >
          <img src="{{asset('image/bibimbap.png')}}" class="card-img-top" alt="...">
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
        <div class="card" >
          <img src="{{asset('image/hainan.png')}}" class="card-img-top" alt="...">
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
        <div class="card" >
          <img src="{{asset('image/ramen.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
        <div class="card" >
          <img src="{{asset('image/japchae.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
        <div class="card" >
          <img src="{{asset('image/mieayam.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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