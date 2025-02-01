<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EquipmentController;

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

Route::get('/test2', function(){
    return view('test2');
})->name('test2');

Route::get('/', [MainController::class, 'main'])->name('home');

Route::group(['prefix' => 'customers', 'as' => 'customers'], function () {
    Route::get('/details/{id}', [CustomerController::class, 'show'])->name('.show');

    Route::get('', [CustomerController::class, 'index'])->name('.index');

    Route::get('/create', [CustomerController::class, 'create'])->name('.create');

    Route::post('', [CustomerController::class, 'store'])->name('.store');

    Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('.edit');

    Route::put('/{id}', [CustomerController::class, 'update'])->name('.update');

    Route::delete('/delete/{id}', [CustomerController::class, 'destroy'])->name('.destroy');

    Route::post('/verify-cnpj', [CustomerController::class, 'verifyCnpj'])->name('.verify-cnpj');

    Route::post('/verify-external-id', [CustomerController::class, 'verifyExternalId'])->name('.verify-external-id');
});

Route::group(['prefix' => 'equipments', 'as' => 'equipments'], function (){
    Route::get('/{customer_id}', [EquipmentController::class, 'index'])->name('.index');

    Route::get('/create/{customer_id}/{device_id}', [EquipmentController::class, 'create'])->name('.create');

    Route::post('', [EquipmentController::class, 'store'])->name('.store');

    Route::get('/edit/{id}', [EquipmentController::class, 'edit'])->name('.edit');

    Route::put('/{id}', [EquipmentController::class, 'update'])->name('.update');

    Route::delete('/delete/{id}', [EquipmentController::class, 'destroy'])->name('.destroy');
});





