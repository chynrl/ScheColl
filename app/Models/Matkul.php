<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $table='matkul';
    protected $primaykey='id';
    protected $fillable =['id','nama_mata_kuliah', 'deskripsi','semester', 'sks' ,'dosen', 'kelompok_keahlian','hari','waktu','ruang'];
}
