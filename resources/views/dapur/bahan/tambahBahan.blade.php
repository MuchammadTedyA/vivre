@extends('layout.kitchenSystem')

@section('isi')
@if (Session::has('message'))
<script>
    alert("{!!Session::get('message')!!}");
</script>
@endif
{!! Form::open(array('method'=>'POST','url'=>'buatBahan', 'enctype'=>'multipart/form-data')) !!}
<form class="ma" id="bahan">
    <div class="form-group margin">
      <label for="formGroupExampleInput">Nama Bahan Baku</label>
      <input name="namaBahan" type="text" class="form-control" id="formGroupExampleInput" placeholder="" required>
    </div>
    <div class="form-group margin">
      <label for="formGroupExampleInput2">Deskripsi</label>
      <textarea name="deskripsiBahan" type="area" class="form-control" id="formGroupExampleInput2" placeholder="" required></textarea>
    </div>
    <div class="form-group margin">
        <label for="formGroupExampleInput2">Jumlah</label>
        <input name="jumlahBahan" type="number" class="form-control" id="formGroupExampleInput2" placeholder="" required>
    </div>
    <div class="form-group margin">
        <label for="formGroupExampleInput2">Satuan</label>
        <input name="satuanBahan" type="text" class="form-control" id="formGroupExampleInput2" placeholder="" required>
    </div>
    <div class="form-group margin">
        <label for="formGroupExampleInput2">Harga</label>
        <input name="hargaBahan" type="number" class="form-control" id="formGroupExampleInput2" placeholder="" required>
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlFile1">Masukkan Foto Bahan Baku</label>
        <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <div class="row">
        <div class="col"> 
            <div class="kembali" style="margin-top: 20px">
                <a href="bahanBaku" class="btn btnkluar" > 
                     Kembali
                </a>
            </div>
        </div>
        <div class="col"> 
            <div class="tambah" style="margin-top: 20px">
                <button type="submit" class="btn btnkluar" > 
                     Buat
                </button>
            </div>
        </div>
    </div>

    
    
</form>
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