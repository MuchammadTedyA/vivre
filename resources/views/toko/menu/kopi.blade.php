@extends('toko.menu')
@section('tabel')

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link "  style="color: #0b3042" href="{{ ('/tokoSaya') }}">Semua</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ ('/tokoSaya/kopiMenu') }}">Kopi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #0b3042" href="{{ ('/tokoSaya/nonKopiMenu') }}">Non Kopi</a>
      </li>
</ul>
<div style="background-color: white">
    
    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">Nama Menu</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Kategori</th>
              <th scope="col">Harga</th>
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

            </tr>
            
        </tbody>
    </table>
</div>

@endsection