@extends('layout.kitchenSystem')

@section('isi')
@if (Session::has('message'))
<script>
    alert("{!!Session::get('message')!!}");
</script>
@endif

{!! Form::open(array('method'=>'POST','url'=>'/barangMasuk', 'enctype'=>'multipart/form-data')) !!}
{!! Form::hidden('id',$bahan->id_bahan, ['class' => 'form-control'])!!}

<div class="card mb-3" style="; height: 100%">
    <div class="row g-0">
      <div class="col-md-4 text-center">
        <img src="{{ url('/bahan_img/'.$bahan->gambar) }}" class="img-fluid rounded-start" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Barang Masuk</h5>
          <p class="card-text">Nama Bahan: <b>{{$bahan->nama_bahan}}</b></p>
          <div class="form-group margin">
            <label for="formGroupExampleInput2">Jumlah</label>
            <div class="row">
                <div class="col-9">
                    <input name="jumlahBahan" type="number" class="form-control" id="formGroupExampleInput2" placeholder="" required>
                </div>
                <div class="col">
                    {{ $bahan->satuan }}
                </div>
            </div>
            </div>
            <div class="form-group margin">
                <label for="formGroupExampleInput2">Harga Satuan</label>
                <input name="hargaBahan" type="number" class="form-control" id="formGroupExampleInput2" placeholder="" required>
                </div>
            <div class="row">
                <div class="col"> 
                    <div class="kembali" style="margin-top: 20px">
                        <a href="/bahanBaku" class="btn btnkluar" > 
                             Kembali
                        </a>
                    </div>
                </div>
                <div class="col"> 
                    <div class="tambah" style="margin-top: 20px">
                        <button type="submit" class="btn btnkluar" > 
                             simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  {!! Form::close() !!}
<style>
    .tambah button{
    width: 100%;padding: 10px; 
    background-color: #13597D;
    color: white;
    margin-bottom: 10px;
    }
.tambah button:hover{
    background-color: white;
    color: #13597D;
    border: #13597D solid 1px;
}

.kembali a{
    width: 100%;padding: 10px; 
    background-color: #a1a1a1;
    color: white;
    margin-bottom: 10px;
    }
.kembali a:hover{
    background-color: white;
    color: #a1a1a1;
    border: #a1a1a1 solid 1px;
}
</style>
@endsection