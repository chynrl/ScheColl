@extends('master')

@section('konten')
<h1 class="text-center">Daftar Mata Kuliah</h1>
<form  action="{{route('matkul')}}" method="get">
    <input class="form-control" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
    <button class="btn btn-secondary" type="submit">Cari</button>
</form>

@if (Auth::user()->isAdmin())
    <a class="btn btn-default" href="{{route('tambahmatkul')}}" role="botton">Tambah Mata Kuliah</a>
@endif

<table class="table">
    {{-- nama kolom --}}
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Mata Kuliah</th>
        <th>Semester</th>
        <th>Dosen</th>
        <th>Hari</th>
        <th>Waktu</th>
      </tr>
    </thead>
    <tbody>
        {{-- isi kolom --}}
        @forelse ($matkul as $index=>$m)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$m->nama_mata_kuliah}}</td>
            <td>{{$m->semester}}</td>
            <td>{{$m->dosen}}</td>
            <td>{{$m->hari}}</td>
            <td>{{$m->waktu}}</td>
            <td>
                <a class="btn btn-success" href={{route('detailmatkul', ['id'=>$m->id])}} role="botton">detail</a>
                @if (Auth::user()->isAdmin())
                    <a class="btn btn-warning" href={{route('editmatkul', ['id'=>$m->id])}} role="botton">edit</a>
                    <a class="btn btn-danger" href="{{route('deletematkul', ['id'=>$m->id])}}" role="botton">delete</a>
                @endif

            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">No Data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection