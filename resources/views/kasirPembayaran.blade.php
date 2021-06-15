@extends('layout.main')

@section('content')

<div class="navPembayaran">
    <div class="container ">
        <h3>Proses Pembayaran</h3>
    </div>
    
</div>

<div class="container" style="margin-top: 50px; margin-bottom: 30px; height: 100%">
    <div class="kotak">
        <h3> Rp. 0.00</h3>
        <div class="list">
            <div class="grid">
                <div class="metode-bayar">
                    <a href="">
                        <img src="" alt="icon">
                        <p>Uang Tunai</p>
                    </a>
                    
                </div>
                <div class="metode-bayar">
                    <img src="" alt="icon">
                    <p>Debit/Kredit</p>
                </div>
                <div class="metode-bayar">
                    <img src="" alt="icon">
                    <p>Uang Elektronik</p>
                </div>
            </div>
        </div>
        
    </div>
</div>

<style>
    .list{
        display: grid;
    }
    .grid{
        display: grid;
        list-style-type:none;
        margin:auto;padding:0;
        grid-template-columns: repeat(3, auto);
        text-align: center;
    }
    .metode-bayar{
        border-radius: 20px;
        height: 150px;
        width: 150px;
        border-radius: 20px;
        box-shadow: 1px 1px 5px 5px #ebe9e4;
        /* opacity: 50%; */
        background-color: white;
        color: #13597D;
        border: 1px solid #ebe9e4;
        margin-bottom: 30px;
        margin-top: 30px;
        margin-left: 30px;
        margin-right: 30px;
    
    }
    .metode-bayar a{
        
       
    }
    .navPembayaran{
        position: relative;
        height: 100px;
        background-color: white;

    }
    .kotak{
        border: 0ch;
        padding: 30px;
        border-radius: 20px;
        background-color: white;
        width: 100%;
        height: 500px;
        text-align: center;
        
    }
    .kotak h3{
        font-size: 50px
    }
    .navPembayaran h3{
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>
@endsection