@extends('layout')
@section('content')
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"><h1>Edit Data Matakuliah </h1>
    <form action="{{url('update_dosen')}}" method="post"> 
    {{ csrf_field() }}
     <div class="form-group"><label for="input_nip">Kode</label><input type="text" class="form-control" id="input_nim_matakuliah"> </div>
     <div class="form-group"><label for="input_nama">Nama Matakuliah</label><input type="text" class="form-control" id="input_nama_matakuliah"></div>
     <div class="form-group"><label for="input_semster">Semester</label><input type="text" class="form-control" id="input_semester_matakuliah"></div>
     <div class="form-group"><label for="input_alamat">Alamat</label><textarea class="form-control" rows="3"></textarea></div>
     <div class="form-group"><label for="input_jk">Jenis Kelamin</label><br /><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Laki-laki
     <label class="radio-inline"><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Perempuan</label></div>
     <div class="form-group"><label for="input_no">No.Telp</label><input type="text" class="form-control" id="input_no" ></div>
  <button type="submit" class="btn btn-default">Simpan Perubahan</button></form>
</div>
<div class="col-sm-3"></div>
</div>

@endsection