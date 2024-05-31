@extends('master')

@section('konten')
<h2>Apakah anda yakin akan menghapus mata kuliah {{$matkul->nama_mata_kuliah}}?</h2>
<form action="{{route('actiondeletematkul', ['id'=>$matkul->id])}}" method="post">
    @csrf 
    // tombol pilihan
    <button type="submit" class="btn btn-danger btn-block"> Yes </button>
    <a class="btn btn-block" href="{{route('matkul')}}" role="botton">No</a>
        
        
    </form>
@endsection