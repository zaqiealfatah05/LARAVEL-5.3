@extends('layout')
@section('content')
<div>
<a class="btn btn-default" href="{{url('Mahasiswa/tambah_mahasiswa')}}" role="button">Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
        <td>NO</td>
        <td>NIM</td>
        <td>Nama Mahasiswa</td>
        <td>Angkatan</td>
        <td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    @foreach ($mahasiswa as $mhs)
    <tr>
        <td>{{$mhs->no}}</td>
        <td>{{$mhs->nim}}</td>
        <td>{{$mhs->nama}}</td>
        <td>{{$mhs->angkatan}}</td>
        <td>
        <a class="btn btn-default" href="{{url('Mahasiswa/edit_mahasiswa')}}/{{$mhs->id}}" role="button">Edit</a>
        <a class="btn btn-default" href="{{url('Mahasiswa/delete_mahasiswa')}}/{{$mhs->id}}" role="button">Delete</a>
        <a class="btn btn-default" href="{{url('Mahasiswa/detail_mahasiswa')}}/{{$mhs->id}}" role="button">Detail</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
</div>
@endsection