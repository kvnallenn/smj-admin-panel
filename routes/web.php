<?php

use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/produk', function () {
    return view('produk');
});



Route::resource('/produk', ProdukController::class);
Route::get('/tambah', [ProdukController::class, 'create']);