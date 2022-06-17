<?php

use App\Http\Controllers\EndorseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WebController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index'])->name('home');

Route::get('/list', [WebController::class, 'list'])->name('list');
Route::get('/list/{id}', [WebController::class, 'detail']);
Route::post('/transaksi',[WebController::class, 'checkout']);
Route::post('/pesan', [WebController::class, 'pesan'])->name('pesan');

// Route::get('/template', [WebController::class, 'admin']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index']);
    Route::resource('endorse', EndorseController::class);
    Route::resource('transaction', TransactionController::class);
    Route::resource('paket', PaketController::class);
    Route::resource('kontak', KontakController::class);
});
require __DIR__.'/auth.php';
