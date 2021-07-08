@extends('toko.menu')
@section('tabel')

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link "  style="color: #0b3042" href="{{ ('/tokoSaya') }}">Semua</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #0b3042" aria-current="page" href="{{ ('/tokoSaya/kopiMenu') }}">Kopi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #0b3042" href="{{ ('/tokoSaya/nonKopiMenu') }}">Non Kopi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ ('/tokoSaya/makanan') }}">Makanan</a>
      </li>
</ul>
<div style="background-color: white">
    
  <table class="table table-striped text-center">
    <thead>
        <tr>
          <th scope="col">Nama Produk</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Kategori</th>
          <th scope="col">Harga</th>
          <th scope="col">Gambar</th>
          <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($produk as $item )
      <tr>
        <td>{{ $item ->nama_produk }}</td>
        <td>{{ $item ->deskripsi_produk }}</td>
        <td>{{ $item ->kategori_produk }}</td>
        <td>@currency($item->harga)</td>
        <td><img width="150px" src="{{ url('/produk_img/'.$item->gambar) }}"></td>
        <td style="text-align: center"><a class="btn btn-danger" href="hapusProduk/{{$item->id_produk}}" style="width: 85px">Hapus</a> &nbsp; <a class="btn btn-warning" href="editBahan/{{$item->id_produk}}" style="width: 85px">Ubah</a></td>
    </tr>
      @endforeach
        
    </tbody>
</table>
</div>

@endsection