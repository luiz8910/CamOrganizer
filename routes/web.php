<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AiController;

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

// =============================================
// Rotas de Autenticação (guest)
// =============================================
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

    // Verificação em duas etapas (2FA por código de e-mail)
    Route::get('/login/verificar', [LoginController::class, 'showTwoFactorForm'])->name('login.2fa');
    Route::post('/login/verificar', [LoginController::class, 'verifyTwoFactor'])->name('login.2fa.submit');
    Route::post('/login/verificar/reenviar', [LoginController::class, 'resendTwoFactor'])->name('login.2fa.resend');

    // Esqueci minha senha
    Route::get('/esqueci-senha', [ForgotPasswordController::class, 'showForgotForm'])->name('password.forgot');
    Route::post('/esqueci-senha', [ForgotPasswordController::class, 'sendResetCode'])->name('password.send-code');

    // Verificar código
    Route::get('/verificar-codigo', [ForgotPasswordController::class, 'showVerifyCodeForm'])->name('password.verify-code');
    Route::post('/verificar-codigo', [ForgotPasswordController::class, 'verifyCode'])->name('password.verify-code.submit');

    // Redefinir senha
    Route::get('/redefinir-senha', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset-form');
    Route::post('/redefinir-senha', [ForgotPasswordController::class, 'resetPassword'])->name('password.reset.submit');
});

// Logout (precisa estar autenticado)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// =============================================
// Rotas protegidas (auth)
// =============================================
Route::middleware('auth')->group(function () {

    Route::get('/test', function(){
        return view('test');
    })->name('test');

    Route::get('/test2', function(){
        return view('test2');
    })->name('test2');

    Route::get('/', [MainController::class, 'main'])->name('home');

    // IA Command Bar
    Route::post('/ai/plan', [AiController::class, 'plan'])->name('ai.plan');
    Route::post('/ai/execute', [AiController::class, 'execute'])->name('ai.execute');

    Route::group(['prefix' => 'customers', 'as' => 'customers'], function () {
        Route::get('/details/{id}', [CustomerController::class, 'show'])->name('.show');

        Route::get('', [CustomerController::class, 'index'])->name('.index');

        Route::get('/create', [CustomerController::class, 'create'])->name('.create');

        Route::post('', [CustomerController::class, 'store'])->name('.store');

        Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('.edit');

        Route::put('/{id}', [CustomerController::class, 'update'])->name('.update');

        Route::delete('/delete/{id}', [CustomerController::class, 'destroy'])->name('.destroy');

        Route::post('/verify-cnpj', [CustomerController::class, 'verifyCnpj'])->name('.verifyCnpj');

        Route::post('/verify-external-id', [CustomerController::class, 'verifyExternalId'])->name('.verifyExternalId');
    });

    Route::group(['prefix' => 'equipments', 'as' => 'equipments'], function (){
        Route::get('/{customer_id}', [EquipmentController::class, 'index'])->name('.index');

        Route::get('/create/{customer_id}/{device_id}', [EquipmentController::class, 'create'])->name('.create');

        Route::post('', [EquipmentController::class, 'store'])->name('.store');

        Route::get('/edit/{id}', [EquipmentController::class, 'edit'])->name('.edit');

        Route::put('/{id}', [EquipmentController::class, 'update'])->name('.update');

        Route::delete('/delete/{id}', [EquipmentController::class, 'destroy'])->name('.destroy');

        Route::delete('/delete-user-access/{id}', [EquipmentController::class, 'destroyUserAccess'])->name('.destroy-user-access');
    });

});





