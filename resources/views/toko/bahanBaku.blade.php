@extends('tokoSaya')

@section('isiToko')

<div class="navAtas">
    <div class="container">
        <h3>Toko Saya</h3>
    </div>
    
</div >

<div class="navSamping">
    <div>
        <a class="menuToko" href="">Jam Operasional</a>
    </div>
    <div>
        <a class="menuToko" href="{{ url('/tokoSaya') }}">Menu</a>
    </div>
    <div  class="active">
        <a class="menuToko" href="{{ url('/tokoSaya/bahanBaku') }}">Bahan Baku</a>
    </div>
    <div>
        <a class="menuToko" href="{{ url('/tokoSaya/Karyawan') }}">Karyawan</a>
    </div>
    
</div>

<div class="isiToko1">
  
    <div class="isiToko">
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group row" style="margin-left: 1px">
                    <div class="col-sm-6 ">
                        <input type="text" class="form-control" id="cari" placeholder="Cari..">
                    </div>
                    <button type="button" class="btn col-sm-2" style="background-color: #13597D; color: white; border-radius: 10px">Go</button>
                </div>
                <form class="ma">
                    <div class="form-group margin">
                      <label for="formGroupExampleInput">Nama Bahan Baku</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group margin">
                      <label for="formGroupExampleInput2">Deskripsi</label>
                      <textarea type="area" class="form-control" id="formGroupExampleInput2" placeholder=""></textarea>
                    </div>
                    <div class="form-group margin">
                        <label for="formGroupExampleInput2">Kategori</label>
                        <input type="area" class="form-control" id="formGroupExampleInput2" placeholder="">
                    </div>
                    <div class="form-group margin">
                        <label for="formGroupExampleInput2">Jumlah</label>
                        <input type="area" class="form-control" id="formGroupExampleInput2" placeholder="">
                    </div>
                    <div class="form-group margin">
                        <label for="formGroupExampleInput2">Satuan</label>
                        <input type="area" class="form-control" id="formGroupExampleInput2" placeholder="">
                    </div>
                    <div class="form-group margin">
                        <label for="formGroupExampleInput2">Harga</label>
                        <input type="area" class="form-control" id="formGroupExampleInput2" placeholder="">
                    </div>
                </form>
            </div>
            
                {{-- <hr class="new1"> --}}
    
            
            
            <div class="col-sm-3  text-center" >

                
                
                <div class="row pe-4 ps-4 pt-4 pb-4" style="background: #fff;border-radius: 10px; height: 340px; margin-top: 100px;">
                    
                    <p>
                         Masukan Gambar Produk
                    </p>
                    <input class="mb-2" type="file" name="file">
                         
               </div><br>
                
                <button type="button" class="btn" style="background-color: #13597D; color: white; width: 150px; margin-top: 20px; border-radius: 10px">Tambah Menu</button>
            </div>
        </div>
        <div class="container">
            <hr class="new1">
    
            
            @yield('tabel')
    
        </div>
        
    </div>
    <style>
        .foto{
            
            margin: auto;
            margin-top: 50px;
            height: 260px;
            width: 220px;
            background-color: white;
            border-radius: 15px;
        }
        .ma{
            margin-top: 30px;
        }
        .margin{
            margin: 10px;
        }
       .isiToko{
           margin-top: 10px;
       }
       hr.new1 {
      border-top: 4px solid #0b3042;
    }
    </style>  
</div>
<script>
    $(document).ready(function () {

        $('ul.navbar-nav > li')
                .click(function (e) {
            $('ul.navbar-nav > li')
                .removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<style>
  .isiToko1{
    
    margin-left: 280px;
    margin-top: 120px;
    width: 78%;
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
      .navSamping>.active>a {
        
        background-color: white; /* Black*/
        color: #13597D
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
      overflow: hidden;
      background-color: white;
        position: fixed;
        height: 100px;
        width: 100%;
        top: 0;
        
        
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

{{--  --}}

@endsection