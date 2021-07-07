@extends('toko.karyawan')

@section('tabel')

<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link " style="color: #0b3042"  href="{{ ('Karyawan') }}">Semua</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color: #0b3042" href="{{ ('kasir') }}">Kasir</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ ('dapur') }}">Bagian Dapur</a>
    </li>
</ul>
<div style="background-color: white">
    
  <table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">Kode Karyawan</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama Karyawan</th>
          <th scope="col">Password</th>
          <th scope="col">Alamat</th>
          <th scope="col">Posisi</th>
          <th scope="col">Foto Karyawan</th>
          <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
      <tbody>
        @foreach ($karyawan as $item )
        <tr>
          <td>{{ $item ->username }}</td>
          <td>{{ $item ->nik }}</td>
          <td>{{ $item ->nama_pengguna }}</td>
          <td>{{ $item ->password }}</td>
          <td>{{ $item ->alamat }}</td>
          <td>{{ $item ->posisi }}</td>
          <td><img width="150px" src="{{ url('/karyawan_img/'.$item->gambar) }}"></td>
          <td style="text-align: center"><a class="btn btn-danger" href="hapusBahan/{{$item->username}}" style="">Delete</a> &nbsp; <a class="btn btn-warning" href="editBahan/{{$item->username}}">Edit</a></td>
      </tr>
        @endforeach
          
          
      </tbody>
        
    </tbody>
</table>
</div>

@endsection