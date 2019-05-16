<?php

namespace App\Providers;

use App\Link;
use App\Reference;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.master', function($view){
           $view->with('links', Link::get());
        });

        view()->composer('index', function($view){
            $view->with('references', Reference::get());
        });
    }
}
