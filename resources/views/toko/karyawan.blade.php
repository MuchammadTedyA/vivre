@extends('tokoSaya')

@section('isiToko')

<div class="isiToko">
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group row" style="margin-left: 1px">
                <div class="col-sm-6 ">
                    <input type="text" class="form-control" id="cari" placeholder="Cari..">
                </div>
                <button type="button" class="btn col-sm-2" style="background-color: #13597D; color: white; border-radius: 10px">Go</button>
            </div>
            <form class="ma">
                <div class="form-group margin">
                  <label for="formGroupExampleInput">Nama Karyawan</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                </div>
                <div class="form-group margin">
                  <label for="formGroupExampleInput2">Alamat Karyawan</label>
                  <input type="area" class="form-control" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group margin">
                    <label for="formGroupExampleInput2">Kode Karyawan</label>
                    <input type="area" class="form-control" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group margin">
                    <label for="formGroupExampleInput2">Kategori</label>
                    <input type="area" class="form-control" id="formGroupExampleInput2" placeholder="">
                </div>
            </form>
        </div>
        
            {{-- <hr class="new1"> --}}

        
        
        <div class="col text-center">
            <button type="button" class="btn" style="background-color: #13597D; color: white; width: 150px;border-radius: 10px">Tambah</button>
            <div class="container foto">
                <div style="margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);">
                <p style="">unggah foto</p>
                </div>
                
            </div>
            <button type="button" class="btn" style="background-color: #13597D; color: white; width: 150px; margin-top: 20px; border-radius: 10px">Tambah Karyawan</button>
        </div>
    </div>
    <div class="container">
        <hr class="new1">
    

    </div>
    
</div>
<style>
    .foto{
        position: relative;
        margin: auto;
        margin-top: 50px;
        height: 260px;
        width: 200px;
        background-color: white;
        border-radius: 15px;
    }
    .ma{
        margin-top: 30px;
    }
    .margin{
        margin: 10px;
    }
   .isiToko{
       margin-top: 10px;
   }
   hr.new1 {
  border-top: 4px solid #0b3042;
}
</style>
@endsection