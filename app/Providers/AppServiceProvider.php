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
    public function boot(){
        
        View::share('bn', array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"));
		View::share('en', array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0"));
    }
}
