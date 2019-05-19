@extends('layout')
@section('content')

<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"><h1>Edit Data Dosen </h1>
  <form action="{{url('Dosen/update_dosen/'.$edit->id)}}" method="POST"> 
{{ csrf_field() }}
<div class="form-group">
    <label for="exampleInputEmail1" >No</label>
    <input type="number" name = "no" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >NIK</label>
    <input type="text" name = "nik" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >Nama Dosen</label>
    <input type="text" name = "nama" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >Matakuliah</label>
    <input type="text" name="matakuliah" class="form-control">
  </div>  
  </div>
</div>
  <button type="submit" class="btn btn-default">Simpan Perubahan</button>
</form>
</div>
<div class="col-sm-3"></div>
</div>
@endsection