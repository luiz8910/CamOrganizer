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
    return view('main');
})->name('home');

Route::get('/clientes-create', function (){
    $route = 'clientes.create';
    return view('main', compact('route'));
})->name('clientes-create');

Route::get('/clientes', function (){
    $route = 'clientes.list';
    return view('main', compact('route'));
})->name('clientes');
