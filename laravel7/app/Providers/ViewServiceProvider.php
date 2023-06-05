<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //partage des configurations du site dans tous les vues
        // if (Schema::hasTable('configs')) 
        // {
        // $configs= Config::all();
        // foreach ($configs as $key => $value) {
        //     View::share("front_".$value->name, $value->value); // {{$nom_du_site}} in view
        // }
        // }

    }
}