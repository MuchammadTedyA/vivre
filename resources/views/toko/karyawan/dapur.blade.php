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
              <th scope="col">Nama Karyawan</th>
              <th scope="col">Alamat</th>
              <th scope="col">Posisi</th>
              <th scope="col">Kode Karyawan</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>

            </tr>
            
        </tbody>
    </table>
</div>

@endsection