<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Cashier System @yield('title')</title>
    {{-- <script>
      /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }

    </script> --}}
    <style>
      body{
        font-family: poppins;
      }
      .sidenav {
        height: 100%; /* 100% Full-height */
        width: 150px; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 1; /* Stay on top */
        top: 0; /* Stay at the top */
        left: 0;
        background-color: #f2f7fa; /* Black*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 10px; /* Place content 60px from the top */
        /* transition: 0.5s; 0.5 second transition effect to slide in the sidenav */
      }

      /* The navigation menu links */
      .sidenav a {
        padding: 8px 8px 8px 8px;
        text-decoration: none;
        font-size: 10px;
        text-align: center;
        display: block;
        transition: 0.3s;
        
      }

      /* When you mouse over the navigation links, change their color */
      .sidenav a:hover {
        color: #f1f1f1;
        background-color: #13597D;
      }

      /* Position and style the close button (top right corner) */
      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 20px;
        margin-left: 50px;
      }

      /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
      #main {
        /* transition: margin-left .5s; */
        position: relative;
        margin-left: 150px;
        /* width: 60%; */
        
      }


      /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
      .cari{
        border-radius: 10px
      }
      header{
        background-color: white;
      }
      .menu{
        height: 100px;
        width: 100px;
        margin: auto;
        color: #818181;
        border: #13597D;
        border-radius: 20px;
        margin-bottom: 10px;
      }
      

      body{
        background-color: #dedede;
      }
      

      .logout{
        position: absolute;
        bottom: 20px;
        left: 20px;
        width: 100px;
        margin: auto;
        color: #f1f1f1;
        background-color: red;
        border-radius: 20px;
        margin-bottom: 10px;
        
      }
      

      
      
    </style>
  </head>
  <body>
    {{-- header --}}
    <header>

      {{-- <div class="container">
        <span onclick="openNav()"><img src="" alt="icon"></span>
      </div> --}}
      <div id="mySidenav" class="sidenav">
        {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> --}}
        
        <a class="menu" href="{{ url('/kasir') }}"><span class="text-center"><img src="" alt="icon"><br>Pesanan Baru</span></a>
        <a class="menu" href="{{ url('/pembayaran') }}"><img src="" alt="icon"><br>Pembayaran</a>
        <a class="menu" href="#"><img src="" alt="icon"><br>Riwayat</a>
        <a class="menu" href="#"><img src="" alt="icon"><br>Toko Saya</a>
        <a class="logout teks" href="#">Logout</a>
        
      </div>
          
      <!-- Use any element to open the sidenav -->
      <div>

      </div>
      
      
      
        
    </header>
    
    {{-- isi --}}
    <section>

      <div id="main">

        @yield('content')
        
      </div>
      
      
    </section>

{{-- footer --}}
    <footer>

    </footer>
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