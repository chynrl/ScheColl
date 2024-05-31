@extends('master')

@section('konten')
  {{-- deskripsi untuk admin dan mahasiswa --}}
  <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</h4>
  <h5>SCHECOLL adalah singkatan dari Schedule of College yaitu website pencatan jadwal kuliah. Anda dapat melihat jadwal dengan menekan tombol daftar mata kuliah di bawah ini.</h5>
  {{-- deskripsi hanya untuk admin --}}
  @if (Auth::user()->isAdmin())
  <h5>Anda dapat melakukan penambahan, pengeditan dan penghapus data mata kuliah.</h5>
  @endif  
  <a class="btn btn-default" href="{{route('matkul')}}" role="botton">Daftar Mata Kuliah</a>
@endsection