
<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\LoginController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman About
Route::get('/about', function () {
    return view('halaman-about');
});

// Menampilkan data mahasiswa
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

// Menampilkan data mata kuliah
Route::get('/matakuliah', [MatakuliahController::class, 'index']);

// Menampilkan detail mata kuliah
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

// Menampilkan form login
Route::get('/form-login', function () {
    return view('form-login');
});

// Menerima data dari form login
Route::post('/auth/login', [LoginController::class, 'login']);

// Menyimpan data pertanyaan
Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

// Menampilkan form pertanyaan
Route::get('/home', function () {
    return view('home');
});