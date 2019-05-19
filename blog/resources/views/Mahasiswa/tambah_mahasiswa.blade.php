@extends('layout')
@section('content')
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"><h1>Tambah Mahasiswa </h1>
<form action = "{{url('Mahasiswa/update_mahasiswa')}}" method = "post">
{{ csrf_field() }}
<div class="form-group">
    <label for="exampleInputEmail1" >No</label>
    <input type="number" name = "no" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >NIM</label>
    <input type="text" name = "nim" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >Nama Mahasiswa</label>
    <input type="text" name = "nama" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >Angkatan</label>
    <input type="number" name="angkatan" class="form-control">
  </div>  
  </div>

</div>
<div class="col-sm-3"></div>
</div>
<button type="submit" class="btn btn-default">Tambah</button>
</form>

@endsection