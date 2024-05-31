@extends('master')

@section('konten')
<h1>Edit Mata Kuliah</h1>
<form action="{{route('actioneditmatkul', ['id'=>$matkul->id])}}" method="post">
    @csrf
        {{-- form pengeditan --}}
        <div class="form-group">
            <label> Nama Mata Kuliah</label>
            <input type="text" name="nama_mata_kuliah" class="form-control" placeholder="nama mata kuliah" required="" value="{{$matkul->nama_mata_kuliah}}">
        </div>
        <div class="form-group">
            <label> Deskripsi </label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi">{{$matkul->deskripsi}}</textarea>
        </div>
        <div class="form-group">
            <label> Semester</label>
            <input type="text" name="semester" class="form-control" placeholder="semester" required="" value="{{$matkul->semester}}">
        </div>
        <div class="form-group">
            <label> sks</label>
            <input type="text" name="sks" class="form-control" placeholder="sks" required="" value="{{$matkul->sks}}">
        </div>
        <div class="form-group">
            <label> Dosen</label>
            <input type="text" name="dosen" class="form-control" placeholder="dosen" required="" value="{{$matkul->dosen}}">
        </div>
        <div class="form-group">
            <label> Kelompok Keahlian </label>
            <select name="kelompok_keahlian" class="form-control" required>
                <option value="Pemodelan" {{ $matkul->kelompok_keahlian == "Pemodelan" ? 'selected' : '' }}>Pemodelan</option>
                <option value="Statistika" {{ $matkul->kelompok_keahlian == "Statistika" ? 'selected' : '' }}>Statistika</option>
                <option value="Industri dan Keuangan" {{ $matkul->kelompok_keahlian == "Industri dan Keuangan" ? 'selected' : '' }}>Industri dan Keuangan</option>
                <option value="Murni" {{ $matkul->kelompok_keahlian == "Murni" ? 'selected' : '' }}>Murni</option>
                <option value="Komputasi" {{ $matkul->kelompok_keahlian == "Komputasi" ? 'selected' : '' }}>Komputasi</option>
            </select>
        </div>
        <div class="form-group">
            <label> Hari </label>
            <select name="hari" class="form-control" required>
                <option value="Senin" {{ $matkul->hari == "Senin" ? 'selected' : '' }}>Senin</option>
                <option value="Selasa" {{ $matkul->hari == "Selasa" ? 'selected' : '' }}>Selasa</option>
                <option value="Rabu" {{ $matkul->hari == "Rabu" ? 'selected' : '' }}>Rabu</option>
                <option value="Kamis" {{ $matkul->hari == "Kamis" ? 'selected' : '' }}>Kamis</option>
                <option value="Jumat" {{ $matkul->hari == "Jumat" ? 'selected' : '' }}>Jumat</option>
            </select>
        </div>
        <div class="form-group">
            <label> Waktu</label>
            <input type="text" name="waktu" class="form-control" placeholder="waktu" required="" value="{{$matkul->waktu}}">
        </div>
        <div class="form-group">
            <label> Ruang</label>
            <select name="ruang" class="form-control" required>
            <option value="Aljabar" {{ $matkul->ruang == "Aljabar" ? 'selected' : '' }}>Aljabar</option>
            <option value="Komputasi" {{ $matkul->ruang == "Komputasi" ? 'selected' : '' }}>Komputasi</option>
            <option value="Numerik" {{ $matkul->ruang == "Numerik" ? 'selected' : '' }}>Numerik</option>
            <option value="Statistik" {{ $matkul->ruang == "Statistik" ? 'selected' : '' }}>Statistik</option>
        </select>
        </div>
        {{-- tombol edit --}}
        <button type="submit" class="btn btn-primary btn-block"><i class=""></i> Edit </button>
        <hr>
        
    </form>
@endsection