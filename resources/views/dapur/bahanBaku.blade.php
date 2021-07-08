@extends('layout.kitchenSystem')

@section('isi')




<div class="tambah" >
    <a href="halamanTambahBahan" class="btn btnkluar" > 
        <i class="bi bi-plus-square"></i>
         Buat Bahan Baku
    </a>

</div>




<table class="table table-striped text-center align-middle" style="font-size: 14px">
    <thead>
        <tr>
          <th scope="col">Nama Bahan Baku</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Stok</th>
          <th scope="col">Satuan</th>
          <th scope="col">Harga</th>
          <th scope="col">Gambar</th>
          <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="align-middle">

        @foreach ($bahan as $item )
      <tr>
        <td>{{ $item ->nama_bahan }}</td>
        <td>{{ $item ->deskripsi_bahan }}</td>
        <td>{{ $item ->jumlah }}</td>
        <td>{{ $item ->satuan }}</td>
        <td>@currency($item->harga)</td>
        <td><img width="150px" src="{{ url('/bahan_img/'.$item->gambar) }}"></td>

        <td>
                <a href="barangMasuk/{{$item->id_bahan}}" class="btn masuk"> 
                    <i class="bi bi-box-arrow-in-down"></i>
                    <p style="font-size: 10px">Barang Masuk</p>
                </a>
    
            &nbsp; 
                <a href="barangKeluar/{{$item->id_bahan}}" class="btn keluar">
                    
                    <i class="bi bi-box-arrow-up"></i>
                    <p style="font-size: 10px">Barang Keluar</p>
                </a>
    
            <div class="row">
                <div class="col">
                    
                </div>
                <div class="col">
                    
                </div>
            </div>
        
        </td>
    </tr>
      @endforeach
        
    </tbody>
</table>

<style>
td>.masuk{
    width: 100px;padding: 0px; 
    background-color: #13597D;
    color: white;
    margin-top: 10px
    }
td>.masuk:hover{
    background-color: white;
    color: #13597D;
    border: #13597D solid 1px;
}

.tambah a{
    width: 100%;padding: 10px; 
    background-color: #13597D;
    color: white;
    margin-bottom: 10px;
    }
.tambah a:hover{
    background-color: white;
    color: #13597D;
    border: #13597D solid 1px;
}

td>.keluar{
    width: 100px;padding: 0px; 
    background-color: #a1a1a1;
    color: white;
    margin-top: 10px
}
td>.keluar:hover{
background-color: white;
color: #858585;
border: #858585 solid 1px;
}
</style>
@endsection
