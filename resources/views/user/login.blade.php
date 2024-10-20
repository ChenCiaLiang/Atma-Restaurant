<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
    @media (max-width: 850px) {
    .form-floating {
        width: 80%; 
        margin: 0 auto; 
    }
    .icon {
        right: 5px;
    }

    @media(max-width: 650px){
      .form-floating {
        width: 60%; 
        margin: 0 auto; 
    }
    .icon {
        right: 5px;
    }
    }
}
  </style>
</head>
<body>
    <div class="d-flex justify-content-start" style="background-color:rgba(240, 218, 161, 1);">
      <img src="{{asset('image/signup.png')}}" alt="" style="width:50%;">
      <div class="d-flex justify-content-end">
        <div class="container" style="margin-top:15vh;margin-left:1vw;">
          <h1 style="color:white;"><strong>Selamat Datang!</strong></h1>
          <h5 style="color:white;opacity:0.5;">Silahkan Masuk Disini</h5>
          <form action="{{url('menu')}}">
            <p style="padding-left:1vw;margin:0;"><strong>Username</strong></p>
            <div class="form-floating mb-2">
              <input type="text" class="form-control" id="floatingInput" placeholder="Username" style="border-radius:50px;width:30vw;padding-left:2vw;" required >
              <label for="floatingInput" style="padding-left:2vw;">Username</label>
            </div>
          
            <p style="padding-left:1vw;margin:0;margin-top:2vh;"><strong>Password</strong></p>
            <div class="form-floating mb-2">
              <input type="password" class="form-control" id="pwd" placeholder="Password" style="border-radius:50px;width:30vw;padding-left:2vw;" required >
              <label for="pwd" style="padding-left:2vw;">Password</label>
              <img onclick="show()" class="icon" src="{{url('image/open.png')}}" id="EYE" style="position: absolute; right: 1vw; top: 50%; transform: translateY(-50%); cursor: pointer;">
            </div>

            <div>
              <button class="btn btn-success" type="submit" style="width:10vw;border-radius:25px;background-color:rgba(247, 132, 5, 1);border:none;margin-top:3vh;height:5vh;font-size:1vw;">
                <strong>Login</strong>
              </button>
            </div>
          </form>

          <div class="container" style="margin-top:4vh;display:flex;align-items:center;">
              <p style="margin:0;"><strong>Belum Punya Akun?</strong></p>
              <a type="button" href="{{url('sign-up')}}" class="btn btn-outline-light" style="border-color:black;height:2vh;width:8vw;display:flex;justify-content:center;align-items:center;margin-left:1vw;font-size:1vw;padding:1rem;border-radius:25px;background-color:rgba(247, 132, 5, 1);border:none;">
                  Register
              </a>
          </div>
        </div>
      </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
       function show(){
        var a = document.getElementById("pwd");
        var b = document.getElementById("EYE");
        if (a.type == "password") {
          a.type = "text";
          b.src = "{{url('image/open.png')}}";
        } else {
          a.type = "password";
          b.src = "{{url('image/close.png')}}";
        }
      }
</script>
</html>