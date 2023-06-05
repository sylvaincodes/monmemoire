<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Blade;

class BladeDirectivesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *La function register est executer par l'application automatiquement
     * @return void
     */
    public function register()
    {
        Blade::if('internaute', function () {
            if (auth()->user() && auth()->user()->type=="internaute") {
                return 1;
            }
            return 0;
        });

        Blade::if('admin', function () {
            if (auth()->user() && auth()->user()->type=="admin") {
                return 1;
            }
            return 0;
        });

        Blade::if('superadmin', function () {
            if (auth()->user() && auth()->user()->type=="superadmin") {
                return 1;
            }
            return 0;
        });
    }

     /**
     * boot services.
     *La function boot est executer apres la fonction register
     * @return void
     */
    public function boot()
    {

    }

}
