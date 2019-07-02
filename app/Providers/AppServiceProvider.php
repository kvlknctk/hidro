<?php

namespace App\Providers;

use App\Category;
use App\Corporate;
use App\File;
use App\Link;
use App\Product;
use App\Reference;
use App\Testimonial;
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
           $view->with('corporates', Corporate::get());
        });

        // kurumsal sayfasına içerikleri gönderiyoruz.
        view()->composer('layout.master_corporate', function($view){
            $view->with('corporates', Corporate::get());
            $view->with('testimonials', Testimonial::get());
            $view->with('files', File::get());
        });

        view()->composer('index', function($view){
            $view->with('references', Reference::get());
        });
        view()->composer(['products', 'products/*'], function($view){
            $view->with('categories', Category::get());
            $view->with('popular', Product::popularLast(100)->limit(6)->get());
        });
    }
}
