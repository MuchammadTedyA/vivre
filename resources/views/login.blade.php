<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Vivre+</title>

    <style>
    button {
        display:inline-block; //Typically a button wouldn't need its own line        
        margin:0 auto;
        width: 200px; //or whatever
    }
    judul{
      position:absolute;
      height: 51px;
      left: 365px;
      top: 198px;
      width: 62px;
      background-color:black;
      text-align:center
      color:white;
    }
    </style>
    
  </head>
  <body style="background-color: #13597D;">
    <div class="container">
    <br>
    
        <img src="././img/Logo_Vivre.png" alt="Logo Vivre" width="300" style="text-align: center; display: block; margin-left: auto; margin-right: auto">
        <br>
        <div class="text-center"><h1 style="font-family:poppins; color:white">Vivre+ System</h1>
        <br>
        </div>
        <div class="form-floating mb-3" style='width: 50%; margin: auto'>
            <input type="email" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating" style='width: 50%; margin:auto'>
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div style="margin-top:15px; margin-left:auto; margin-right: auto" class="text-center">
            <a type="button" class="btn btn-light btn-lg" onmouseover="this.style.backgroundColor='#13597D'" onmouseout="this.style.backgroundColor='white'" href="{{ url('/kitchenSystem') }}"><div style="color: #13597D; width:200px; height: 35px; display: flex; justify-content: center;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#13597D'">Login</div></a>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>