@extends('master')

@section('konten')
<h1>Tambah Mata Kuliah</h1>
<form action="{{route('actiontambah')}}" method="post">
    @csrf
        {{-- form pengisian penambahan --}}
        <div class="form-group">
            <label> Nama Mata Kuliah</label>
            <input type="text" name="nama_mata_kuliah" class="form-control" placeholder="nama mata kuliah" required="">
        </div>
        <div class="form-group">
            <label> Deskripsi Singkat </label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
        </div>
        <div class="form-group">
            <label> Semester </label>
            <input type="text" name="semester" class="form-control" placeholder="semester" required="">
        </div>
        <div class="form-group">
            <label> sks </label>
            <input type="text" name="sks" class="form-control" placeholder="sks" required="">
        </div>
        <div class="form-group">
            <label> Dosen </label>
            <input type="text" name="dosen" class="form-control" placeholder="dosen" required="">
        </div>
        <div class="form-group">
            <label> Kelompok Keahlian </label>
            <select name="kelompok_keahlian" class="form-control" required>
                <option value="Pemodelan">Pemodelan</option>
                <option value="Statistika">Statistika</option>
                <option value="Industri dan Keuangan">Industri dan Keuangan</option>
                <option value="Murni">Murni</option>
                <option value="Komputasi">Komputasi</option>
            </select>
        </div>
        <div class="form-group">
            <label> Hari </label>
            <select name="hari" class="form-control" required>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
            </select>
        </div>
        <div class="form-group">
            <label> Waktu </label>
            <input type="text" name="waktu" class="form-control" placeholder="waktu" required="">
         </div>
         <div class="form-group">
            <label> Ruang </label>
            <select name="ruang" class="form-control" required>
                <option value="Aljabar">Aljabar</option>
                <option value="Komputasi">Komputasi</option>
                <option value="Numerik">Numerik</option>
                <option value="Statistik">Statistik</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block"><i class=""></i> Tambah </button>
        <hr>
        
    </form>
@endsection