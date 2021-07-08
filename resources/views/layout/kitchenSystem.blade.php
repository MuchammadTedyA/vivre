<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Vivre: Kitchen System</title>
    <style>
    .column1 {
    float: left;
    width: 10%;
    padding: 5px;
    }
    body{
        font-style: poppins;
    }
    .column12 {
    float: left;
    width: auto;
    padding: 5px;
    }
    a{
        
    }

/* Clear floats after image containers */
    .row::after {
    content: "";
    clear: both;
    display: table;
    }
    .logout{
        position: absolute;
        top: 10px;
        right: 200px;
        width: 100px;
        margin: auto;
        color: #f1f1f1;
        background-color: red;
        border-radius: 10px;
        margin-bottom: 10px;
        
      }
    </style>
  </head>
  <body style="background-color: #13597D;">
    
    <div class="container text-center">
        
        <div class='text-center' style='width: 400px;margin-left:auto; margin-right:auto'>
           
                <img src="././img/Logo_Vivre.png" style="float: left; margin-left: 10px; width: 50px"  alt="Logo Vivre" >
                <h1 style="font-family:poppins; color:white; margin-left: -15%">Kitchen System</h1>
                <div style="float: right">
                    <a class="btn logout teks" href="{{ ('/logout') }}">Logout</a>
                </div>
        </div>

        

        
        
        
    </div>
    <style>
        .navbar{
            float: left;
            background: #000;
            width: 100%;
        }
        .navbar li{
            float: left;
            list-style: none;
        }
        .navbar li a{
            color: #b4afaf;
            text-decoration: none;
            
            padding-left: 20px;
            padding-right: 20px;
            display: block;
            
        }
        .navbar li a:hover{
            color: #ffffff;
            
        }
        .center ul{
            width: -moz-fit-content;
            width: -webkit-fit-content;
            width: fit-content;
            margin: auto; 
        }
        ul>.active>a{
            color: white;
        }
    </style>
    
    <div class="navbar center fixed-bottom">
        <ul>
            <li class="{{ Request::segment(1)==='dapur' ? 'active' : '' }}">
                <a class="text-center " href="{{ url('dapur') }}"><i class="bi bi-house-fill" style="font-size: 17px"></i><p style="font-size: 10px">Beranda</p></a>
            </li>
            <li class="{{ Request::segment(1)==='produk' ? 'active' : '' }}">
                <a class="text-center " href="{{ url('produk') }}"><i class="bi bi-cup-fill"></i><p style="font-size: 10px">Produk</p></a>
            </li>
            <li class="{{ Request::segment(1)==='bahanBaku' ? 'active' : '' }}">
                <a class="text-center " href="{{ url('bahanBaku') }}"><i class="bi bi-inboxes-fill"></i><p style="font-size: 10px">Bahan Baku</p></a>
            </li>
        </ul>
    </div>
    

    <div class="container jumbotron" style='background-color:white; padding: 30px'>
    <br>
    @yield('isi')
    
        
        {{-- <div class="card" style="width: 18rem;">
    
            <div class='card text-center' style='background-color:#269aed'>
                <br>
                        <h5 class="card-title" style='color:white'>Pesanan #01029</h5>
                        <h6 class="card-subtitle mb-2" style='color:white; font-size:13px'>Minum di tempat <br> a/n Annan</h6>
                        <br>
            </div>
            <div class="card-body" style='background-color:#f2f2f2;width:100%; min-height: 300px'>
                    
                    <div class='row'>
                            <div class='col'>
                                <p class="card-text" >Hazelnut Choco</p>
                            </div>
                            <div class='col'>
                                <p class="card-text" >1</p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col'>
                                <p class="card-text" >Hazelnut Choco</p>
                            </div>
                            <div class='col'>
                                <p class="card-text" >1</p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col'>
                                <p class="card-text" >Hazelnut Choco</p>
                            </div>
                            <div class='col'>
                                <p class="card-text" >1</p>
                            </div>
                    </div>
                    <div style="position: absolute;bottom: 20px">
                        <b>Pilih Status:</b>
                        <br>
                        <button class="card-link" style="background-color: #FFF6DC;">Dikerjakan</a>
                        <button class="card-link" style="background-color: #DCFFE6">Pesanan Siap</a>
                    </div>
                    
            </div>
        </div> --}}
        
    
    
    
        
    <br>
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