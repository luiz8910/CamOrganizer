<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/test', function(){
    return view('test');
})->name('test');

Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/test-helper', function () {
    return test_helper();
});

Route::get('/test-env', function () {
    return env('ASSET_BASE_PATH', 'Not Found');
});



Route::get('/cliente/{id}', [CustomerController::class, 'show'])->name('cliente');

Route::get('/clientes', [CustomerController::class, 'index'])->name('clientes');

Route::get('/clientes/create', [CustomerController::class, 'create'])->name('clientes-create');

Route::post('/clientes', [CustomerController::class, 'store'])->name('clientes-store');

Route::get('/clientes/edit/{id}', [CustomerController::class, 'edit'])->name('clientes-edit');

Route::put('/clientes/{id}', [CustomerController::class, 'update'])->name('clientes-update');

Route::delete('/cliente/delete/{id}', [CustomerController::class, 'destroy'])->name('clientes-destroy');
