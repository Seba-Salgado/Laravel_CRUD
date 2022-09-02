<?php

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
    return view('welcome');
});


use App\Http\Controllers\ProductosController;

/*
Route::get('/inicio',[ProductosController::class,'index']);

Route::get('/crear',[ProductosController::class,'create']);

Route::get('/actualizar',[ProductosController::class,'update']);

Route::get('/insertar',[ProductosController::class,'store']);

Route::get('/borrar',[ProductosController::class,'destroy']);
*/

 
Route::resource('/productos', ProductosController::class);