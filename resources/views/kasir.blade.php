@extends('layout.main')

@section('content')

<div class="grid">
  
</div>

{{-- grid kiri --}}
<nav class="navbar navkiri gridkiri">
  <div class="container">

   <form class="container d-flex">
     <input  class="form-control me-2 cari" type="search"  placeholder="Cari menu..." label="Cari menu..." style="background-color: #dedede">
     <button  class="btn btn-outline-light cari" type="submit" style="background-color: #13597D;">Cari</button>
   </form>
  </div>

   
  
 </nav>
  {{-- konten kiri --}}
  <div class="gridkiri">
    <div class="isikiri">
      {{-- kategori --}}

      <div class="list">
        <ul>
          <li class="kotak">
              <a href="">
                <img src="" alt="icon"><br>semua kategori
              </a>
          </li>
          <li class="kotak">
            <a  href="">
              <img src="" alt="icon"><br>Kopi
            </a>
          </li>
          <li class="kotak">
            <a href="">
              <img src="" alt="icon"><br>Non-kopi
            </a>
          </li>
          <li class="kotak">
            <a href="">
              <img src="" alt="icon"><br>Coklat
            </a>
          </li>
        </ul>
      </div>

      {{-- menunya --}}

      <div class="list">
        <ul>
          <li class="kotak-menu">
            <a href="">
              <div class="center-cropped">
                <img src="https://lelogama.go-jek.com/cms_editor/2019/12/02/Instagram_Zeribowl.PNG" alt="gambar items">
              </div>
              
              <div style="padding: 10px">
                <h6 style="text-align: left">nama produk</h6>
                <p style="font-size: 14px;
                font-family: poppins;
                
                position: relative;
                text-align: right;">Rp. 00,-</p>
              </div>
            </a>
            
  
          </li>
        </ul>
      </div>
      
      
      

      
      
    </div>
    
    
  </div>
 
{{-- grid kanan --}}
<nav class="navbar navkanan gridkanan">
  <div class="container">

  <h3>Pesanan Baru</h3>
  
  </div>
   
     
 </nav>
 

 {{-- konten grid kanan --}}
 <div class="gridkanan">
   
   <div class="isikanan">
    
   </div>
 </div>


 {{-- CSS --}}

<style>
.center-cropped {
  width: 150px;
  height: 100px;
  overflow:hidden;
}
.center-cropped img {
  height: 100%;
  min-width: 100%;
  left: 50%;
  position: relative;
  object-fit: cover;
  border-top-right-radius: 20px;
  border-top-left-radius: 20px;
  transform: translateX(-50%);
}
  .list{
    display: grid;
  }
  ul{
    display:grid;
    list-style-type:none;
    margin:auto;padding:0;
    grid-template-columns: repeat(4, auto);
    text-align: center;
  }
  .kotak-menu{
    height: 180px;
    width: 150px;
    /* margin: auto; */
    color: black;
    background-color: white;
    border-radius: 20px;
    margin-bottom: 30px;
    margin-top: 10px;
    margin-left: 30px;
    margin-right: 30px;
  }
  
  .kotak-menu a{
    text-decoration: none;
    display: block;
    height: 180px;
    width: 150px;
    color: #13597D;
    border-radius: 20px;
  }
  .kotak-menu a:hover{
    color: #f1f1f1;
    background-color: #13597D;
  }
  .kotak{
    height: 130px;
    width: 130px;
    /* margin: auto; */
    color: black;
    background-color: white;
    border-radius: 20px;
    margin-bottom: 30px;
    margin-top: 10px;
    margin-left: 30px;
    margin-right: 30px;
  }
  .kotak a{
    text-decoration: none;
    text-align: center;
    display: block;
    height: 130px;
    width: 130px;
    color: #13597D;
    border-radius: 20px;
  }
  .kotak a:hover{
    color: #f1f1f1;
    background-color: #13597D;
  }
  .grid{
    display: grid;
  }
  .gridkiri{
    float: left;
    width: 60%;
  }
  /* .gridkiri{
    position: unset;
    width: 60%;
  } */
  h3{
    font-size: 25px;
    font-family: poppins;
    color: white;
  }
  h6{
    font-size: 16px;
    font-family: poppins;
  }
  .gridkanan{
    margin-left: 66.5%;
   
  }
  .isikiri{
    margin-top: 130px;

  }
  .isikanan{
    background-color: white;
    height: 100%;
    width: 30%;
    position: fixed;
  }
  .navkiri{
    background-color: white;
    position: fixed;
    height: 100px;

  }
  .navkanan{
    background-color: #13597D;
    height: 100px;

  }
  
</style>
@endsection
  