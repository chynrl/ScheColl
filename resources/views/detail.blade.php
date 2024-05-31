@extends('master')

@section('konten')
<h1>Detail Mata Kuliah</h1>
<dl class="dl-horizontal">
    <dt>Nama Mata Kuliah</dt>
    <dd>{{$matkul->nama_mata_kuliah}}</dd>

    <dt>Deskripsi</dt>
    <dd>{{$matkul->deskripsi}}</dd>
    
    <dt>Semester</dt>
    <dd>{{$matkul->semester}}</dd> 

    <dt>sks</dt>
    <dd>{{$matkul->sks}}</dd> 

    <dt>Dosen</dt>
    <dd>{{$matkul->dosen}}</dd> 

    <dt>Kelompok Keahlian</dt>
    <dd>{{$matkul->kelompok_keahlian}}</dd> 

    <dt>Hari</dt>
    <dd>{{$matkul->hari}}</dd> 

    <dt>Waktu</dt>
    <dd>{{$matkul->waktu}}</dd>
    
    <dt>Ruang</dt>
    <dd>{{$matkul->ruang}}</dd> 
</dl>

@endsection