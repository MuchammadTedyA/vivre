@extends('layout.kitchenSystem')

@section('isi')

@if (Session::has('message'))
<script>
    alert("{!!Session::get('message')!!}");
</script>
@endif

<style>
    .kepala{
        background-color: #269aed;

        line-height:   100px;
        border-radius: 10px 10px 0px 0px;
        text-align: center;
    }

    .kepala div{
        line-height: 1;
        display: inline-block;
        vertical-align: middle;
    }
    .badan{
        background-color:#f2f2f2;
        width:300px;
        min-height: 320px;
        border-radius: 0px 0px 10px 10px;
    }

    
</style>

{{-- <div class=" card kartu">
    <div class="kepala">
        <div>
            <h5 class="" style='color:white'>Pesanan #03029</h5>
        </div>
        
    </div>
    <div class="badan">
        asas
        <div class="kaki" style="position: absolute;bottom: 20px">
            <button class="card-link dikerjakan" ><i class="bi bi-clock-fill"><br></i><p style="font-size: 10px">Dikerjakan</p></button>
        </div>
    </div>
    
</div> --}}
<div class="card-columns">
    @foreach ($pesanan as $item )

    <div class="card mb-3" style="max-width: 18rem;">
        <div class="card-header text-center kepala" style="background: #269aed;min-height: 120px;color: white">
            <div>
                <h5 class="card-title" style='color:white'>Pesanan #{{ $item->id_penjualan }}</h5>
                
                {{-- <h6 class="card-subtitle mb-2" style='color:white; font-size:13px'>Minum di tempat <br> a/n Annan</h6> --}}
            </div>
            
        </div>
        <div class="card-body" style="background: #f2f2f2; min-height: 200px">
          
           
            <div class='row'>
                <div class='col-8'>
                    <p class="card-text" >{{ $item->nama_produk }}</p>
                </div>
                <div class='col'>
                    <p class="card-text" style="text-align: right">{{ $item->jumlah }}</p>
                </div>
            </div>
            
            
            
        </div>
        <div class="card-footer anu">
            <b>Pilih Status:</b>
                    <br>
                    <button class="card-link dikerjakan" ><a href=""><i class="bi bi-clock-fill"><br></i><p style="font-size: 10px">Dikerjakan</p></a></button>
                    <button class="card-link pesanan" ><a href="pesananSiap/{{ $item->id_penjualan }}"><i class="bi bi-check-circle-fill"></i><p style="font-size: 10px">Pesanan Siap</p></a></button>
        </div>
    </div>
    @endforeach
    
</div>



{{--  --}}

{{-- <div class="card" style="width: 300px;">

    <div class='card text-center' style='background-color:#269aed'>
        <br>
                <h5 class="card-title" style='color:white'>Pesanan #03029</h5>
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

            <div class="anu" style="position: absolute;bottom: 20px">
                <b>Pilih Status:</b>
                <br>
                <button class="card-link dikerjakan" ><i class="bi bi-clock-fill"><br></i><p style="font-size: 10px">Dikerjakan</p></button>
                <button class="card-link pesanan" ><i class="bi bi-check-circle-fill"></i><p style="font-size: 10px">Pesanan Siap</p></button>
                
            </div>

            
            
    </div>
</div> --}}
<style>
    .pesanan{
        width: 80px;
        background-color: #06bd3a; 
        border-radius: 10px; 
        border:#06bd3a solid 2px;
        color: white;
    }
    .pesanan a{
        color: white;
    }

    .pesanan a:hover{
        color: #06bd3a;
    }

    .dikerjakan{
    width: 80px;
    background-color: #ffe900; 
    border-radius: 10px; 
    border:#ffe900 solid 2px;
    color: white;
    }
    .anu>.dikerjakan:hover{
        background-color: white;
        color: #ffc524;
        border:#ffc524 solid 1px;
    }
    .dikerjakan a{
        color: white;
    }
    .dikerjakan a:hover{
        color: #ffc524;
    }
    .anu>.pesanan:hover{
        background-color: white;
        color: #06bd3a;
        border:#06bd3a solid 1px;
    }
</style>
@endsection