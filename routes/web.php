<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
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

### List products
Route::get('/', [
    ProductoController::class, 'index'
]);



Route::get('/create', [
    ProductoController::class, 'create'
]);

Route::post('/store', [
    ProductoController::class, 'store'
]);

Route::get('/edit/{id}', [
    ProductoController::class, 'edit'
]);

Route::put('/update/{id}', [
    ProductoController::class, 'update'
]);

Route::delete('/delete/{id}', [
    ProductoController::class, 'destroy'
]);