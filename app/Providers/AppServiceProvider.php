<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use View;
use App\Product;
use App\Brand;

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
        //View::share('name','value');
        View::composer(['front-end.includes.header'],function ($view){
            $view->with('categories',Category::where('publication_status',1)->get());

        });
        View::composer(['front-end.includes.footer'],function($view){
            $view->with('brands',Brand::where('publication_status',1)->get());
        });
    }
}
