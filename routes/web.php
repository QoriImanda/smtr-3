<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class, 'index'])
->name('index');

Route::post('/store', [MahasiswaController::class, 'store'])
->name('mhs_store');

Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])
->name('edit');

Route::post('/update/{id}', [MahasiswaController::class, 'update'])
->name('update');

Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])
->name('delete');


