@extends('layout.main')

@section('content')
<style>
    .navPembayaran{
        position: relative;
        height: 100px;
        background-color: white;

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
<div class="navPembayaran">
    <div class="container ">
        <h3>Riwayat</h3>
    </div>
    
</div>

<div class="container jumbotron" style='background-color:white; padding: 30px; margin-top: 30px; border-radius: 20px'>
    <div class="container">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">ID Penjualan</th>
                  <th scope="col">Nama Produk</th>
                  <th scope="col">jumlah</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                  
                </tr>
            </thead>
            <tbody>
              @foreach ($penjualan as $item )
              <tr>
                <td>{{ $item ->id_penjualan }}</td>
                <td>{{ $item ->nama_produk }}</td>
                <td>{{ $item ->jumlah }}</td>
                <td>{{ $item ->tanggal_penjualan }}</td>
                <td>{{ $item ->status }}</td>
                <?php $status = $item ->status ?>
                @if ( $status == 'diterima')
                <td><i class="bi bi-check-circle-fill" style="color: green"></i></td>
                @endif
                @if ( $status == 'pesanan siap')
                <td><a class="btn btn-success diterima" href="diterima/{{ $item->id_penjualan }}">Diterima </a></td>
                @endif
                
                
                
            </tr>
              @endforeach
                
                
            </tbody>
        </table>
    </div>
</div>



<style>
    .diterima{
        background-color: #13597D;
    }
</style>

@endsection