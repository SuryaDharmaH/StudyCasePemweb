<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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
    return view('login');
});
Route::post('/login_action', [LoginController::class, 'login_action']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register_action', [LoginController::class, 'register_action']);

Route::get('/index', [DataController::class, 'index']);
route::get('/dashboard', [DataController::class,'dashboard']);
Route::get('/tambah',[DataController::class, 'tambah']);
Route::post('/tambah_action',[DataController::class, 'tambah_action']);
Route::get('/edit/{idProduk}',[DataController::class, 'edit']);
Route::post('/update/{idProduk}',[DataController::class, 'update']);
Route::get('/hapus/{idProduk}',[DataController::class, 'delete']);