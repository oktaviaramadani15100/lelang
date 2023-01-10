<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
//     return view('welcome');
// });

Route::get('/create_item', [ItemController::class, 'create_item'])->name('create_item');
Route::get('/tambah_detail', [ItemController::class, 'barang'])->name('tambah_detail');
Route::post('/insert_detail', [ItemController::class, 'insert_detail'])->name('insert_detail'); 
