<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body style="background-color:#F0DAA1;color:white;">
  
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
            <a class="nav-link bi bi-cart-fill" style="color: white;" href="{{url('pembayaran')}}" ></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  

  <div class="container " style="margin-top:5%;">
    <div style="text-align:center;">
      <h2 style="display:inline-block; border-bottom: 2px dashed white;text-align;">Reservation</h2>

    </div>
    
    <form action="{{url('menu')}}"> 

      <div class="form-group">
        <label for="seat">Number of People</label>
        <select class="form-control" id="seat" name="seat" reqired  style="height: 7vh;">
          <option >1 People</option>
          <option>2 People</option>
          <option>3 People</option>
          <option>4 People</option>
          <option>5 People</option>
          <option>6+ People</option>
        </select>
      </div>
      
      <div class="form-group" style="margin-top:3%;">
        <label for="tanggal">Date</label>
        <input type="date" class="form-control" id="tanggal" required style="height: 7vh;">
      </div>
      
      <div class="form-group" style="margin-top:3%;"> 
        <label for="jam">Time</label>
        <input type="time" class="form-control" id="floatingInput" required style="height: 7vh;">
      </div>

      <div style="display:flex;justify-content:center;align-items:center;margin-top:4%;">
        <button class="btn btn-outline-light" type="submit" style="width:10vw;border-radius:5px;margin-top:1vh;">
          <strong>FIND A TABLE</strong>
        </button>
      </div>
  </form>
  </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>