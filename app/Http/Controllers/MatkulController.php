<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class MatkulController extends Controller
{
    public function matkul(Request $request) {

        $katakunci = $request->katakunci;
        if (strlen($katakunci)) {
            $matkul = Matkul::where('nama_mata_kuliah', 'like', "%$katakunci%")
                ->orWhere('dosen', 'like', "%$katakunci%")
                ->orWhere('semester', 'like', "%$katakunci%")
                ->orWhere('hari', 'like', "%$katakunci%")
                ->orWhere('waktu', 'like', "%$katakunci%")
                ->orderby('semester','Asc')
                ->get();
                
        } else {
            $matkul = Matkul::orderby('semester','Asc')
            ->get();
        }
        return view('matkul')->with('matkul', $matkul);
    }

    public function tambah() {
        if (!Auth::user()->isAdmin()){
            abort(403, 'Kamu tidak memiliki akses!');
        }
        return view('tambahmatkul');
    }

    public function actiontambah(Request $request)  {
        if (!Auth::user()->isAdmin()){
            abort(403, 'Kamu tidak memiliki akses!');
        }
        $tambah = Matkul::create([
            'nama_mata_kuliah' =>$request->nama_mata_kuliah,
            'deskripsi' =>$request->deskripsi,
            'semester'=>$request->semester,
            'sks'=>$request->sks,
            'dosen'=>$request->dosen,
            'kelompok_keahlian' =>$request->kelompok_keahlian,
            'hari'=>$request->hari,
            'waktu'=>$request->waktu,
            'ruang'=>$request->ruang,
        ]);
        return redirect(route('matkul'));
    }

    public function edit(Request $request){
        if (!Auth::user()->isAdmin()){
            abort(403, 'Kamu tidak memiliki akses!');
        }
        $matkul = Matkul::where('id',$request->id)->first();
        return view('editmatkul')->with('matkul',$matkul);
    }

    public function actionedit(Request $request){
        if (!Auth::user()->isAdmin()){
            abort(403, 'Kamu tidak memiliki akses!');
        }
        $matkul = Matkul::where('id',$request->id)->first();
        $matkul->nama_mata_kuliah=$request->nama_mata_kuliah;
        $matkul->deskripsi=$request->deskripsi;
        $matkul->semester=$request->semester;
        $matkul->sks=$request->sks;
        $matkul->dosen=$request->dosen;
        $matkul->kelompok_keahlian=$request->kelompok_keahlian;
        $matkul->hari=$request->hari;
        $matkul->waktu=$request->waktu;
        $matkul->ruang=$request->ruang;
        $matkul->save();

        return redirect(route('matkul'));
    }

    public function delete(Request $request){
        if (!Auth::user()->isAdmin()){
            abort(403, 'Kamu tidak memiliki akses!');
        }
        $matkul = Matkul::where('id',$request->id)->first();
        return view('deletematkul')->with('matkul',$matkul);
    }

    public function actiondelete(Request $request){
        if (!Auth::user()->isAdmin()){
            abort(403, 'Kamu tidak memiliki akses!');
        }
        $matkul = Matkul::where('id',$request->id)->first();
        $matkul->delete();

        return redirect(route('matkul'));
    }

    public function detail(Request $request)  {
        $matkul = Matkul::where('id',$request->id)->first();
        return view('detail')->with('matkul',$matkul);
    }


    
    


}
