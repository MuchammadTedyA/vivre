@extends('layout.main')

@section('content')

<div class="navAtas">
    <div class="container ">
        <h3>Toko Saya</h3>
    </div>
    
</div >

<div class="navSamping">
    <a class="menuToko" href="">Jam Operasional</a>
    <a class="menuToko" href="{{ url('/tokoSaya') }}">Menu</a>
    <a class="menuToko" href="">Pengaturan Akun</a>
    <a class="menuToko" href="{{ url('/tokoSaya/Karyawan') }}">Karyawan</a>
</div>

<div class="isiToko">
  @yield('isiToko')
    
</div>

<style>
  .isiToko{
    position: relative;
    left: 130px;
    top: 0px;
    width: 89.6%;
  }
    .navSamping {
        height: 100%; /* 100% Full-height */
        width: 250px; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 1; /* Stay on top */
        top: 100px; /* Stay at the top */
        left: 150px;
        background-color: #13597D; /* Black*/
        
      }
      .navSamping a {
        
        color: white;
        padding-top: 20px;
        text-decoration: none;
        font-size: 20px;
        text-align: center;
        display: block;
        transition: 0.3s;
        
      }
      .navSamping a:hover {
        color: #13597D;
        background-color:  white;
      }
      .menuToko{
        height: 70px;
        width: 100%;
        margin: auto;
        color: white;
        border: #13597D;
        
        
      }

      
    .navAtas{
        position: relative;
        height: 100px;
        background-color: white;

    }
    .navAtas h3{
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>

@endsection