<?php

namespace App\Providers;

use App\Channel;
use Illuminate\Filesystem\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer('*', function($view) {
            $channels = Channel::all();
            //$channels = \Illuminate\Support\Facades\Cache::rememberForever('channels', function() {
            //    return Channel::all();
            //}); 
           $view->with('channels', $channels);
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
