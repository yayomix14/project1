<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Modelos\Usuario;
use Validator;
use Hash;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('check_password', function ($atributos, $valor, $parametros)
        {
            $current_password = Usuario::find($parametros[0])->password;
            return Hash::check($valor, $current_password);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
