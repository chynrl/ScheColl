<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\RegisterController;
use App\Models\Matkul;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Login
Route::get('', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//TambahMatkul
Route::get('halaman-matkul',[MatkulController::class, 'matkul'])->name('matkul')->middleware('auth');
Route::get('tambah-matkul', [MatkulController::class, 'tambah'])->name('tambahmatkul')->middleware('auth');
Route::post('actiontambah', [MatkulController::class, 'actiontambah'])->name('actiontambah')->middleware('auth');

//EditMatkul
Route::get('edit-matkul/{id}', [MatkulController::class, 'edit'])->name('editmatkul')->middleware('auth');
Route::post('edit-matkul/{id}', [MatkulController::class, 'actionedit'])->name('actioneditmatkul')->middleware('auth');

//DeleteMatkul
Route::get('delete-matkul/{id}', [MatkulController::class, 'delete'])->name('deletematkul')->middleware('auth');
Route::post('delete-matkul/{id}', [MatkulController::class, 'actiondelete'])->name('actiondeletematkul')->middleware('auth');

//DetailMatkul
Route::get('detail-matkul',[MatkulController::class,'detail'])->name('detailmatkul')->middleware('auth');