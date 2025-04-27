<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Define o tamanho padrão de string para evitar erros em versões antigas do MySQL
        Schema::defaultStringLength(191);

        // Tenta definir o locale para pt_BR
        try {
            App::setLocale('pt_BR');
            Carbon::setLocale('pt_BR');

            // Se o locale pt_BR não estiver disponível, usa 'en'
            if (!in_array('pt_BR', Carbon::getAvailableLocales())) {
                Carbon::setLocale('en');
            }
        } catch (\Throwable $e) {
            // Se der erro, força o fallback para 'en'
            Carbon::setLocale('en');
        }
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
