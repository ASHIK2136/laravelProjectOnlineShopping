<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\category;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share('Bdjobs','Php');
        View::composer('frontEnd.includes.menu',function($view){
           $Categories= category::where('publicationStatus',1)->get();
            $view->with('Categories',$Categories);
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
