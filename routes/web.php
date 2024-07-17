<?php

use App\Http\Controllers\Auth\PemilihLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\SuaraController;
use App\Http\Controllers\UservotingController;
use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('uservoting.index');
// });

// Route untuk voting   
Route::middleware(['pemilih'])->group(function () {
    Route::get('/', [UservotingController::class, 'index'])->name('voter');
    Route::get('/get-manifesto/{id}', [UservotingController::class, 'show']);
    Route::get('/success', [UservotingController::class, 'success'])->name('berhasil');
    Route::post('/vote', [UservotingController::class, 'store'])->name('vote.store');
});

Route::get('pemilih/login', [PemilihLoginController::class, 'showLoginForm'])->name('pemilih.login');
Route::post('pemilih/login', [PemilihLoginController::class, 'login'])->name('pemilih.login.submit');
Route::post('pemilih/logout', [PemilihLoginController::class, 'logout'])->name('pemilih.logout');




Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('kandidat', KandidatController::class);
    Route::resource('pemilih', PemilihController::class);
    Route::resource('suara', SuaraController::class);
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');