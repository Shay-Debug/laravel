<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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


    //  CODE TO PASS MULTIPLE VALUES INSIDE 
    public function boot()
    {
        //
        View::share('number', '876-956-8747');
    }


}
