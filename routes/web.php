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

Route::group(['prefix' => 'customers', 'name' => 'customers'], function () {
    Route::get('/{id}', [CustomerController::class, 'show'])->name('.show');

    Route::get('', [CustomerController::class, 'index'])->name('.index');

    Route::get('/create', [CustomerController::class, 'create'])->name('.create');

    Route::post('', [CustomerController::class, 'store'])->name('.store');

    Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('.edit');

    Route::put('/{id}', [CustomerController::class, 'update'])->name('.update');

    Route::delete('/delete/{id}', [CustomerController::class, 'destroy'])->name('.destroy');

    Route::post('/verify-cnpj', [CustomerController::class, 'verifyCnpj'])->name('.verify-cnpj');

    Route::post('/verify-external-id', [CustomerController::class, 'verifyExternalId'])->name('.verify-external-id');
});





