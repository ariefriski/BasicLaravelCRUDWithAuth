<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\all;

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

Route::get('/', [MahasiswaController::class,'tampil']);



Route::get('/data/{id}', [MahasiswaController::class,'show']);

Route::get('/data',[MahasiswaController::class,'index']);

//WEB PAGE
Route::get('/buat',[MahasiswaController::class,'create']);
Route::get('edit/{id}',[MahasiswaController::class,'edit']);
Route::get('/page',[MahasiswaController::class,'index']) ->middleware('auth');
Route::patch('/page/{id}',[MahasiswaController::class,'update']);
Route::post('/data',[MahasiswaController::class,'store']);
Route::delete('/data/{id}',[MahasiswaController::class,'destroy']);
//Login hanya bisa menggunakan role admin
//END OF WEB PAGE ROUTE

