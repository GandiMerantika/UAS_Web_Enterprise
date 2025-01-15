<?php

use Illuminate\Support\Facades\Route;
use App\Models\User; // Import model User
use App\Http\Controllers\MessageController; // Import controller MessageController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman Tentang Kami
Route::get('/tentangKami', function () {
    return view('tentangKami');
})->name('tentangKami');

// Halaman Artikel
Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

// Halaman Hubungi Kami
Route::get('/hubungiKami', function () {
    return view('hubungiKami');
})->name('hubungiKami');

// Route untuk menyimpan pesan dari form Hubungi Kami
Route::post('/hubungiKami/store', [MessageController::class, 'store'])->name('hubungiKami.store');

// Test database
Route::get('/testdb', function () {
    return view('testdb', ['users' => User::all()]);
});

// Test view
Route::get('/test', function () {
    return view('test');
})->name('test');