@extends('layout.kitchenSystem')

@section('isi')

<table>
    <tr>
        <th></th>
        <th></th>
    </tr>
</table>

<table class="table table-striped text-center">

    <thead>
        <tr>
          <th scope="col">Nama Produk</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Kategori</th>
          <th scope="col">Harga</th>
          <th scope="col">Gambar</th>
          <th scope="col">Status</th>
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
        <td ><div class="alert {{ $item->status==='tersedia' ? 'alert-success' : '' }} {{ $item->status==='habis' ? 'alert-danger' : '' }}" role="alert">  {{ $item ->status }}</div></td>
        <td style="text-align: center">
            
            <a class="btn btn-danger {{ $item->status==='habis' ? 'disabled' : '' }}" style="width: 85px" href="produkHabis/{{$item->id_produk}}" >Habis</a> &nbsp; 

            <a class="btn btn-success {{ $item->status==='tersedia' ? 'disabled' : '' }}" style="width: 85px"href="produkTersedia/{{$item->id_produk}}">Tersedia</a></td>
    </tr>
      @endforeach
        
        
    </tbody>
</table>

@endsection