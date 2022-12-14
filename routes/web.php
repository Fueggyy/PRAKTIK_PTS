<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DetailKepegawaian;
use App\Http\Livewire\Pegawai\Index;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::name('dashboard.')->prefix('dashboard')->group(function () {

    Route::middleware([
        'auth:sanctum',
    ])->group(function () {

    Route::resource('golongan', GolonganController::class);
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('detail', DetailKepegawaian::class);
    Route::get('pegawais', Index::class)->name('pegawais');
    });
});