<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller0213;
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
//     return view('home0213');
// });
Route::get('/', [Controller0213::class,'home']);
Route::get('buku0213', [Controller0213::class,'buku']);
Route::get('buku0213/cari', [Controller0213::class,'cari']);
Route::get('jenisbuku0213', [Controller0213::class,'jenisbuku']);
Route::get('rakbuku0213', [Controller0213::class,'rakbuku']);
Route::get('user0213', [Controller0213::class,'user']);
Route::get('buku0213/export/', [Controller0213::class,'export']);
Route::get('user0213/export/', [Controller0213::class,'exportUser']);
Route::get('jenisbuku0213/export/', [Controller0213::class,'exportJenis']);

