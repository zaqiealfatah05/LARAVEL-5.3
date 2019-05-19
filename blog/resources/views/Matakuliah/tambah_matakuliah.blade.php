@extends('layout')
@section('content')
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"><h1>Tambah Matakuliah </h1>
<form action = "{{url('Matakuliah/update_matakuliah')}}" method = "post">
{{ csrf_field() }}
<div class="form-group">
    <label for="exampleInputEmail1" >No</label>
    <input type="number" name="no" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >Kode</label>
    <input type="number" name="kode" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >Nama Matakuliah</label>
    <input type="text" name="nama" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >Semester</label>
    <input type="number "name="semester" class="form-control">
  </div>  
  </div>
 
</div>
<div class="col-sm-3"></div>
</div>
<button type="submit" class="btn btn-default">Tambah</button>
</form>


@endsection